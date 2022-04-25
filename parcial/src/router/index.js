import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Inicio from '../views/Inicio.vue'
import Crear from '../views/Crear.vue'
import Editar from '../views/Edit.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path:'/inicio',
    name:'Inicio',
    component:Inicio
  },
 
  {
    path: '/crear',
    name: 'crear',
    component:Crear
  },
  {
    path: '/editar',
    name: 'editar',
    component:Editar
  },
  


  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: function () {
      return import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
    }
  }
]

const router = new VueRouter({
  routes
})

export default router
