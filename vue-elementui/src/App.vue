<template>
  <div id="app">
    <message> this is a message </message>
    <counter></counter>
    <router-view></router-view>
  </div>
</template>

<script>

import Message from "./components/Message";
import Counter from "./components/Counter";

export default {
  name: 'App',
  components: {
    'message': Message,
    'counter': Counter
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
