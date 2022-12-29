<template>

  <div class="container">
    <table>
      <thead>
      <td><input type="checkbox" v-model="isCheckAll" @change="allChange"> 全选</td>
      <td>id</td>
      <td>name</td>
      <td>price</td>
      <td>number</td>
      </thead>
      <tr v-for="item in list" v-bind:key="item.id">
        <td><input type="checkbox" v-model="checked" :value="item"></td>
        <td>{{ item.id }}</td>
        <td>{{ item.name }}</td>
        <td>{{ item.price }}</td>
        <td>
          <button @click="sub(item)">减少</button>
          {{ item.number }}
          <button @click="add(item)">增加</button>
        </td>
      </tr>

    </table>
    <div class="sum">{{ sum }}</div>
  </div>

</template>

<script>

export default {
  name: 'CartList',
  data() {
    return {
      isCheckAll: false,
      checked: [],
      sum: 0,
      list: [
        {id: 1, name: '电扇', price: 60, number: 10},
        {id: 2, name: '电视机', price: 10, number: 5},
        {id: 3, name: '电转', price: 160, number: 6}
      ]
    }
  },
  watch: {
    checked: function () {
      let sum = 0
      for (let k = 0; k < this.checked.length; k++) {
        sum += this.checked[k].number * this.checked[k].price
      }
      this.sum = sum
      if (this.list.length == this.checked.length) {
        this.isCheckAll = true
      } else {
        this.isCheckAll = false
      }
    }
  },
  methods: {
    sub(item) {
      for (let k = 0; k < this.list.length; k++) {
        if (this.list[k].id === item.id) {
          this.list[k].number--;
        }
      }
    },
    add(item) {
      item.number++;
    },
    allChange() {
      if (this.isCheckAll) {
        let sum = []
        for (let k = 0; k < this.list.length; k++) {
          sum.push(this.list[k])
        }
        this.checked = sum
      } else {
        this.checked = []
      }
    }
  }
}
</script>

<style scoped>

</style>
