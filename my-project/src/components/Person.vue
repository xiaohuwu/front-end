<template>
	<div>
		<h1>人员列表</h1>
		<h3 style="color:red">Count组件求和为：{{sum}}</h3>
		<input type="text" placeholder="请输入名字" v-model="name">
		<button @click="add">添加</button>
		<ul>
			<li v-for="p in personList" :key="p.id">{{p.name}}</li>
		</ul>
	</div>
</template>
<script>

export default {
  name:"Person",
  data(){
    return {
        name:""
    }
  },
  computed:{
    personList(){
        return this.$store.state.personList;
    },
    sum(){
        return this.$store.state.sum;
    }
  },
  methods:{
    add(){
        let  number  = this.$store.state.personList.length + 1; 
        this.$store.commit("addPerson", {id: number + 1, name:  this.name});
        this.name = ""
    }
  }

}
</script>
