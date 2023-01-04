<template>
       <div class="todo-header">
          <input type="text" placeholder="请输入你的任务名称，按回车键确认" v-model="val" @keyup.enter="add"/>
        </div>
</template>

<script>

export default {
  props:['addTodo','todo_length'],
  data(){
      return {
        val: "",
      }
    },
    methods:{
      add: function(){
          let obj = {id:  this.todo_length + 1, title: this.val,done:false }
          this.addTodo(obj);
          this.val="";
      }
    }
}
</script>

<style>

</style>