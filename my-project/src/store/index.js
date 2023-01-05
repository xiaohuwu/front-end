import Vue from 'vue'
//引入Vuex
import Vuex from 'vuex'
//应用Vuex插件
Vue.use(Vuex)


const actions = {
	addOdd(context,number){
		if(context.state.sum % 2 == 1){
			context.commit("add",number);
		}
	},
	addWait(context,number){
		setTimeout(() => {
			context.commit("add",number);
		}, 2000);
	}
}

//准备mutations——用于操作数据（state）
const mutations = {
	add(state,number){
		state.sum += number
	},
	sub(state,number){
		state.sum -= number
	},
	addPerson(state,person){
		state.personList.push(person)
	}
}

//准备state——用于存储数据
const state = {
	sum:0, //当前的和
	school:'尚硅谷',
	subject:'前端',
	personList: []
}

const getters = {
	bigSum(state){
		return state.sum*10
	},
	person_list_count(state){
		return state.personList.length;
	}
}
export default new Vuex.Store({
	actions,
	mutations,
	state,
	getters
})