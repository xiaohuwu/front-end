import Router from 'vue-router'
import Vue from 'vue'
import index from '@/components/ArticleList/index.vue'

Vue.use(Router)

export default new Router({
routes: [
{ path: '/', redirect: '/login' },
{ path: '/index', component: index }
]
})
