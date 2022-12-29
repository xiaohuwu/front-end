import Router from 'vue-router'
import Vue from 'vue'
import index from '@/components/ArticleList/index.vue'
import test from '@/components/ArticleList/test.vue'
import test1 from '@/components/ArticleList/test1.vue'

Vue.use(Router)

export default new Router({
routes: [
{ path: '/', redirect: '/index' },
{ path: '/index', component: index },
{ path: '/test', component: test },
{ path: '/test1', component: test1 },
]
})
