<template>
  <div class="todo-container">
    <div class="todo-wrap">
      <Header @addItems="addItem"></Header>
      <List :list="list">
      </List>
    </div>
  </div>
</template>

<script>
  import Header from "./Header"
  import List from "./List"
  export default {
    name: 'TodoList',
    data(){
      return {
        list:[]
      }
    },
    components:{
      Header,
      List
    },
    methods:{
      addItem(object){
        console.log("object",object);
        this.list.push({id: Date.now(),title: object})
      }
    }


  }
</script>

<style scoped>
  .todo-container {
    width: 600px;
    margin: 0 auto;
  }
  .todo-container .todo-wrap {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
</style>
