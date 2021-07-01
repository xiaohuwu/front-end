<template>
  <div class="blog">
    <Blog v-for="item in list" :blog="item" :key="item.id"></Blog>
  </div>
</template>

<script>
  import  Blog from "./Blog"
  export default {
    name: 'Blogs',
    data(){
      return {
        list:[
          {id:1,title:"bigu",desc:"啊哈哈哈哈1"},
          {id:2,title:"好人",desc:"啊哈哈哈哈2"},
          {id:3,title:"医生",desc:"啊哈哈哈哈3"},
        ]
      }
    },
    components:{
      Blog
    }
  }
</script>

<style scoped>

</style>
