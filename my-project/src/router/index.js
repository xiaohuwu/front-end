import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Test from '@/components/Test'
import Blogs from '@/components/Blogs'
import List from '@/components/TodoList'

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
      path: '/blog',
      name: 'blog',
      component: Blogs
    },
    {
      path: '/list',
      name: 'to_do_list',
      component: List
    }
  ]
})
