<template>
   <div class="todo-footer">
          <label>
            <input type="checkbox" :checked="isAll" @change="setCheck" />
          </label>
          <span> <span>已完成{{done_count}}</span> / 全部{{all_count}} </span>
          <button class="btn btn-danger" @click="del_done_item">清除已完成任务</button>
        </div>
</template>

<script>
export default {
  props:["del_done","todos",'all_check'],
  computed:{
    isAll: function(){
      return this.todos.filter((item)=>{return item.done}).length == this.todos.length;
    },
    done_count: function(){
      return   this.todos.filter((item)=>{return item.done}).length
    },
    all_count: function(){
      return   this.todos.length
    }
  },
  methods:{
    del_done_item(){
        this.del_done();
    },
    setCheck: function(){
       this.all_check(event.target.checked);
    }
  }
}
</script>

<style>

</style>