export  default function ajax(url) {
    let promise = new Promise(function (resolve, reject) {
        let xmlhttp
        if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest()
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
        }
    
        // 发送请求
        xmlhttp.open("GET", url, true)
        xmlhttp.send()
    
        // 服务端响应
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //    console.log(xmlhttp.responseText)
                let obj = JSON.parse(xmlhttp.responseText)
                resolve(obj)
            }
        }
    });
    return promise;
}
export  let console1 = "1234";