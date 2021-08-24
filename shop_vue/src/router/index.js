import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/components/Login.vue'
import Wellcome from '@/components/Welcome.vue'
import Home from '@/components/Home.vue'

Vue.use(Router)

export default new Router({
  routes: [
    { path: '/', redirect: '/login' },
    { path: '/login', component: Login },
    {
      path: '/home',
      component: Home,
      redirect: '/welcome',
      children: [
        { path: '/welcome', component: Wellcome },
      ]
    }
  ]
})
