import { createRouter, createWebHistory } from 'vue-router'
// Layouts
import AuthLayout from '@/layouts/AuthLayout.vue'
import UserLayout from '@/layouts/UserLayout.vue'

// Auth Pages
import Login from '@/views/auth-views/Login.vue'
import Signup from '@/views/auth-views/SignUp.vue'
import ResetPass from '@/views/auth-views/ResetPass.vue'

// Admin Pages

// User Pages
import HomeView from '@/views/HomeView.vue'
import AboutView from '@/views/AboutView.vue'
import Practice from '@/views/practice/Practice.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: UserLayout,
      children: [
        { path: '', component:  HomeView},
        { path: 'about', component: AboutView },
        { path: 'practice', component: Practice }
      ]
    },
    {
      path: '/auth',
      component: AuthLayout,
      children: [
        { path: 'login', component:  Login, name: 'login'},
        { path: 'signup', component:  Signup, name: 'signup'},
        { path: 'reset-password', component:  ResetPass, name: 'reset'}
      ]
    },
    // {
    //   path: '/login',
    //   name: 'login',
    //   component: Login,
    // },
    // {
    //   path: '/about',
    //   name: 'about',
    //   // route level code-splitting
    //   // this generates a separate chunk (About.[hash].js) for this route
    //   // which is lazy-loaded when the route is visited.
    //   component: () => import('../views/AboutView.vue'),
    // },
  ],
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth',
      }
    }
    if (savedPosition) {
      return savedPosition
    } else {
      return { top: 0 }
    }
  }
})

export default router
