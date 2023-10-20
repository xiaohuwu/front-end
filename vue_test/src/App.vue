<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h2>一个人的信息</h2>
  <div>{{name}}</div>
  <div><button @click="hello">say hello</button></div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import {h} from 'vue';
export default {
  name: 'App',
  setup(){
    let name = 'Hello World'
    function hello() {
      alert(`hello ${name}`)
    }
    // return {name,hello}
    return () => h("h1", "Hello")
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
