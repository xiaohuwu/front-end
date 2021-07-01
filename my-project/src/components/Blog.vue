<template>
  <div class="blog">
    <p>{{blog.id}} </p>
    <p>{{blog.title}} </p>
    <p>{{blog.desc}} </p>
  </div>
</template>

<script>
  export default {
    name: 'Blog',
    data(){
      return {

      }
    },
    props: ['blog']
  }
</script>

<style scoped>

</style>
