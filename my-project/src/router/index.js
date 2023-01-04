import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Test from '@/components/Test'
import Blogs from '@/components/Blogs'
import List from '@/components/TodoList'
import CartList from '@/components/CartList.vue'
import DoList from '@/components/DoList.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/test',
      name: 'Test',
      component: Test
    },
    {
      path: '/to_do_list',
      name: 'to_do_list',
      component: Test
    },
    {
      path: '/do_list',
      name: 'do_list',
      component: DoList
    },
    {
      path: '/blog',
      name: 'blog',
      component: Blogs
    },
    {
      path: '/list',
      name: 'to_do_list1',
      component: List
    },
    {
      path: '/cart_list',
      name: 'cart_list',
      component: CartList
    }
  ]
})
