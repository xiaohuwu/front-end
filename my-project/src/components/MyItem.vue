<template>
    <li>
            <label>
              <input type="checkbox" :checked="todo.done" @click="check(todo.id)" />
              <span>{{todo.title}}</span>
            </label>
            <button class="btn btn-danger" style="display:none;" @click="del(todo.id)"  >删除</button>
          </li>
          
</template>

<script>
export default {
  props: ['todo','doCheck',"delItem"],
  methods:{
    check: function(id){
    this.doCheck(id);
  },
  del: function(id){
    this.delItem(id);
  }
  }
 
}
</script>

<style>

</style>