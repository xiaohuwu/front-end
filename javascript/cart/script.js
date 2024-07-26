document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', event => {
            const input = event.target.parentElement.querySelector('input');
            let value = parseInt(input.value);
            if (event.target.textContent === '+') {
                value++;
            } else {
                if (value > 1) value--;
            }
            input.value = value;
            updateSummary();
        });
    });

    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', event => {
            event.target.parentElement.remove();
            updateSummary();
        });
    });

    function updateSummary() {
        let subtotal = 0;
        document.querySelectorAll('.product').forEach(product => {
            const price = parseFloat(product.querySelector('.price').textContent.replace('$', ''));
            const quantity = parseInt(product.querySelector('input').value);
            subtotal += price * quantity;
        });
        const tax = subtotal * 0.08; // 假设税率为8%
        const total = subtotal + tax;
        document.querySelector('.order-summary p:nth-child(2) span').textContent = `$${subtotal.toFixed(2)}`;
        document.querySelector('.order-summary p:nth-child(3) span').textContent = `$${tax.toFixed(2)}`;
        document.querySelector('.order-summary h3 span').textContent = `$${total.toFixed(2)}`;
    }
});
