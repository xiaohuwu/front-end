<template>
  <li>
    <label>
      <input type="checkbox"/>
      <span>{{item.title}}</span>
    </label>
    <button class="btn btn-danger">删除</button>
  </li>
</template>

<script type="text/ecmascript-6">
  export default {
    props: ["item"],
    data () {
      return {
      }
    },
    computed: {

    },
    methods: {

    }
  }

</script>

<style scoped>
  li {
    list-style: none;
    height: 36px;
    line-height: 36px;
    padding: 0 5px;
    border-bottom: 1px solid #ddd;
  }

  li label {
    float: left;
    cursor: pointer;
  }

  li label li input {
    vertical-align: middle;
    margin-right: 6px;
    position: relative;
    top: -1px;
  }

  li button {
    float: right;
    margin-top: 3px;
  }

  li:before {
    content: initial;
  }

  li:last-child {
    border-bottom: none;
  }
</style>
