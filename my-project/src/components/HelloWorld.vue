<template>
  <div class="hello">
    <input v-model="msg" />
    <br/>
    你的爱好是: <br/>
    <input v-model="checkedNames" type="checkbox" value="羽毛球"/> 羽毛球
    <input v-model="checkedNames" type="checkbox" value="篮球球"/> 篮球球
    <input v-model="checkedNames" type="checkbox" value="乒乓球"/> 乒乓球<br/>
    {{msg}} <br/> {{msg.split("").reverse().join("") }}
    <a :href="url" > 我要跳转了 </a> <br>
    <a @click="myclick" > 我被点击了 </a> <br>

    <form action="/www.baidu.com" v-on:submit.prevent="mysubmit">
      <button type="submit"> 提交 </button>
    </form>

    <h3>计算属性</h3>
    <p>我名字正着写：{{name}}</p>
    <p>计算出我名字倒着写：{{reverseName}}</p>
    <p>{{now}}</p>
    <router-link to="/test">Go to Foo</router-link>
  </div>

</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      checkedNames: [],
      url: 'http://www.baidu.com',
      name: '小虎哥'
    }
  },
  computed:{
    reverseName: function () {
      return this.name.split('').reverse().join('')
    },
    now: function () {
      return Date.now()
    }
  },
  methods: {
    myclick: function () {
      this.checkedNames = []
    },
    mysubmit: function () {
      console.log('mysubmit')
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
