import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue')
  
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/login.vue')
    },

    {
      path: '/signin',
      name: 'signin',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/signin.vue')
    },
    {
      path: '/user',
      name: 'user',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/user/index.vue')
      
    },
    {
      path: '/ideas/:id',
      name: 'ideas',
      component: () => import('../views/ideas.vue')
    }
,
    {
      path: '/myideas',
      name: 'myidas',
      component: () => import('../views/user/myideas.vue')
    }
    ,
    {
      path: '/profile',
      name: 'profile',
      component: () => import('../views/user/profile.vue')
    }
    ,
    {
      path: '/details/:id',
      name: 'details',
      component: () => import('../views/buyidea.vue')
    }

    ,
    {
      path: '/purchases/:id',
      name: 'purchases',
      component: () => import('../views/purchases.vue')
    }






  ]
})

export default router
