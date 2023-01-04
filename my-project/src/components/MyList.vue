<template>
   <ul class="todo-main">
        <MyItem v-for="item in todos" :todo = "item" :key="item.id" :doCheck="doCheck" :delItem="delItem" />
    </ul>
</template>

<script>
import MyItem from './MyItem.vue';

export default {
    props:['todos','addTodo','doCheck',"delItem"],
    components: { MyItem },
    
}
</script>

<style>

</style>