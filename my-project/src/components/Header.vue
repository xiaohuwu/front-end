<template>
  <div class="todo-header">
    <input type="text" v-on:keyup.enter="addItem($event)" placeholder="请输入你的任务名称，按回车键确认"/>
  </div>
</template>

<script type="text/ecmascript-6">
  export default {
    // 声明接收属性: 更新数据的函数属性
    props:["addItems"],
    methods:{
      addItem(obj){
        console.log("addItem");
        this.$emit("addItems",obj.target.value)
      }
    }
  }
</script>

<style scoped>
  .todo-header input {
    width: 560px;
    height: 28px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 4px 7px;
  }

  .todo-header input:focus {
    outline: none;
    border-color: rgba(82, 168, 236, 0.8);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
  }
</style>
