import VueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(VueRouter)

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/about', component: require('./components/About.vue') },
    { path: '/hello', component: require('./components/Hello.vue') },
    { path: '/enquetes/:id/:param2', component: require('./components/Enquetes.vue') }
  ],
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  },
})