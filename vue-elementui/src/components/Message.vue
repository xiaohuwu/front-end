<template>
  <div class="box">
    <slot></slot>
  </div>

</template>

<script>

export default {
  name: "Message.vue"
}
</script>

<style scoped>

.box{
  background: lightgray;
  border: solid 1px red;
}
</style>