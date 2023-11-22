<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h2>一个人的信息</h2>
  <div>{{ name }}</div>
  姓: <input type="text" v-model="person.firstName">
  <br/>
  名: <input type="text" v-model="person.lastName">
  <br/>
  <div><input type="text" v-model="person.fullName"></div>
  <div>
    <button @click="hello">say hello</button>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import {computed, reactive, ref} from 'vue';

export default {
  name: 'App',
  setup() {
    let name = ref("xiaohbu")
    let person = reactive({
      firstName: "吴小",
      lastName: "虎"
    })
    person.fullName = computed({
      get() {
        return person.firstName + "," + person.lastName;
      },
      set(val) {
        var split = val.split(",");
        person.firstName = split[0];
        person.lastName = split[1];
      }
    })

    function hello() {
      name.value = "Hello"
    }

    return {name, hello, person}
    // return () => h("h1", "Hello")
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
