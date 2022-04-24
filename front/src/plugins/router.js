import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Work from '../views/Work.vue'
import Contact from '../views/Contact.vue'
import Login from '../views/Login.vue'

Vue.use(VueRouter)


const routes = [
    {
      path: '/', // URL configuration to match
      name: 'home', // road name
      component: Home // component to call
    },

    {
      path: '/about', // URL configuration to match
      name: 'about', // road name
      component: About // component to call
    },

    {
      path: '/projets', // URL configuration to match
      name: 'work', // road name
      component: Work // component to call
    },

    {
      path: '/contact', // URL configuration to match
      name: 'contact', // road name
      component: Contact // component to call
    },

    {
      path: '/login', // URL configuration to match
      name: 'login', // road name
      component: Login // component to call
    },
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router