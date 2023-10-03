import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/LoginView.vue'
import RegisterView from '../views/RegisterView.vue'
import DashboardView from '../views/DashboardView.vue'
import Surveys  from '../views/Surveys.vue'
import DefaultLayout from '../components/DefaultLayout.vue'
import AuthLayout from '../components/AuthLayout.vue'
import store from '@/store'
  

const routes = [
  {
    path: '/',
    redirect:'/dashboard',
    component: DefaultLayout,
    meta:{requiresAuth:true},
    children:[
      {
        path: '/dashboard',
        name: 'dashboard',
        component: DashboardView
      },
      {
        path: '/surveys',
        name: 'surveys',
        component: Surveys
      }


    ]
  },
  {
    path:'/auth',
    redirect:'/login',
    component: AuthLayout,
    meta:{isGeusts:true},
    children:[
      {
        path: '/register',
        name: 'register',
        component: RegisterView
      },
      
      {
        path: '/login',
        name: 'login',
        component: LoginView
      },

    ]
  },
 
 
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

// router.beforeEach((to,from,next)=>{
//   if(to.meta.requiresAuth && !store.state.user.token){
//     next({name:'login'});
//   }else if(store.state.user.token && (to.meta.isGeust)){
//     next({name:'dashboard'});
//   }
//   else{
//     next()
//   }
// })

export default router
