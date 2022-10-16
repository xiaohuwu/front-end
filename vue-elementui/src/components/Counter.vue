<template>
   <div class="box">
     <h1>计数123： {{count}}</h1>
     <button @click="add"> 点击</button>
  </div>

</template>

<script>
export default {
  name: "Counter",
  data(){
    return {
      count: 0
    }
  },
  methods: {
    add(){
      this.count++;
    }
  }
}
</script>

<style scoped>

</style>