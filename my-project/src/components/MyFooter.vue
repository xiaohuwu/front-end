<template>
   <div class="todo-footer">
          <label>
            <input type="checkbox" />
          </label>
          <span> <span>已完成{{done_count}}</span> / 全部{{all_count}} </span>
          <button class="btn btn-danger">清除已完成任务</button>
        </div>
</template>

<script>
export default {
  props:["done_count","all_count"]
}
</script>

<style>

</style>