<template>
  <div>
    <h1>当前求和为：{{ sum }}</h1>
    <h1>当前人员总数：{{ personList.length }}</h1>
    <h3>当前求和放大10倍为：{{ bigSum }}</h3>
    <h3>{{ my_school }}，{{ subject }}</h3>
    <select v-model.number="n">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <button @click="increment(n)">+</button>
    <button @click="decrement(n)">-</button>
    <button @click="incrementOdd(n)">当前求和为奇数再加</button>
    <button @click="incrementWait(n)">等一等再加</button>
  </div>
</template>

<script>

import {mapState,mapGetters,mapActions,mapMutations} from 'vuex'

export default {
  data() {
    return {
      n: 1,
    };
  },
  computed: {
    ...mapState({sum:"sum", my_school: "school",subject:"subject",personList:"personList"}),
    ...mapGetters({bigSum:"bigSum",person_list_count:"person_list_count"})
  },
  methods: {
    // increment() {
    //   this.$store.commit("add", this.n);
    // },
    // decrement() {
    //   this.$store.commit("sub", this.n);
    // },

    ...mapMutations({increment: "add",decrement: "sub"}),

    // incrementOdd() {
        
    //   this.$store.dispatch("addOdd", this.n);
    // },
    // 借助mapActions生成对应的方法，方法中会调用dispatch去联系actions(对象写法)
    ...mapActions({incrementOdd: "addOdd",incrementWait: "addWait"}),
    // incrementWait() {
    //   this.$store.dispatch("addWait", this.n);
    // },
  },
  mounted() {
    const x = mapState({ sum: "sum" });
    console.log(x);
  },
};
</script>

<style>
</style>