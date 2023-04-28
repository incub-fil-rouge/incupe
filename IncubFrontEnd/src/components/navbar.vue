<template>
    

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="http://localhost:5173/" class="flex items-center">
      <img src="../assets/img/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Incube</span>
  </a>
  <div class="flex items-center md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img  v-if="this.user!=false" class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="user photo">
        <img v-else class="w-8 h-8 rounded-full" src="https://th.bing.com/th/id/OIP.Ghae4OEdb4UmC3hkqpFvLAHaGd?w=218&h=190&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="user photo">

      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span v-if="this.user!=false" class="block text-sm text-gray-900 dark:text-white">{{ this.user.name }} </span>
          <span v-if="this.user!=false" class="block text-sm  text-gray-500 truncate dark:text-gray-400"> {{ this.user.email }}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <router-link v-if="this.user!=false  && this.user.role=='user'" to="/myideas/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Ideas</router-link>
          </li>
          <li>
            <router-link v-if="this.user!=false  && this.user.role=='sponsor'" to="/purchases/2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My purchases</router-link>
          </li>
          <li>
            <router-link v-if=" this.user!=false  && this.user.role=='sponsor'" :to="{ name: 'ideas', params: { id: 1  } }" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Services</router-link>
          </li>
          <li>
            <router-link v-if=" this.user==false"  to="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign In</router-link>
          </li>
          <li>
            <router-link v-if=" this.user!=false  && this.user.role=='sponsor'" to="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</router-link>

            <router-link v-if="this.user!=false  && this.user.role=='user'" to="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile </router-link>
          </li>
          <li>
            <button   @click="this.LogOut()"  v-if="this.user!=false "  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sing Out</button>
          </li>
        </ul>
      </div>
      <!-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button> -->
  </div>
  <div class="items-center justify-end  hidden w-full md:flex md:w-auto md:order-1" id="nav-2">
    <ul class="flex   flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <!-- <router-link to="/">Go to Home</router-link> -->
        <router-link to="/"  v-if="this.user!=false  &&this.user.role=='sponsor'"  class="block py-2 pl-3 pr-4 text-black bg-black rounded md:bg-transparent md:text-black md:p-0 dark:text-white" aria-current="page">Home</router-link>
        <router-link to="/"  v-if="this.user==false"   class="block py-2 pl-3 pr-4 text-black bg-black rounded md:bg-transparent md:text-black md:p-0 dark:text-white" aria-current="page">Home</router-link>

      </li>
      <li>
        <router-link v-if="this.user!=false  &&this.user.role=='user'"  to="/user" class="block py-2 pl-3 pr-4 text-black bg-black rounded md:bg-transparent md:text-black md:p-0 dark:text" aria-current="page">Home</router-link>
      </li>
      <li>
        <router-link v-if="this.user!=false  &&this.user.role=='user'"  to="/myideas/" class="block py-2 pl-3 pr-4 text-white bg-black-700 rounded md:bg-transparent md:text-black md:p-0 dark:text-black" aria-current="page">my Ideas</router-link>
      </li>
    
    
     
      <li>
            <router-link  v-if="this.user.role=='sponsor'"   :to="{ name: 'ideas', params: { id: 1  } }" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Services</router-link>
      </li>
    
    </ul>
  </div>

  
  </div>

</nav>


</template>

<script>

import { initFlowbite } from 'flowbite'
import {useUserStore} from  "../stores/auth.js"
import axios from 'axios'
import router from '../router'
const stor = useUserStore()
    
export default {
  data(){
    return {
      user:'',
      storr:useUserStore()

    }
  },
  methods: {
  async  LogOut() {
      console.log('gg');
      try {
        // console.log( `Bearer ${stor.user['token']}`);
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];
        const res = await axios
          .post("http://127.0.0.1:8000/api/logout", {
            headers: {
              Accept: "application/json"
            },
          })
          .then((res) => {
            console.log('ssssss')
            console.log(res);
            localStorage.clear();
            router.go()
            router.push('/')
          }
          );
      } catch (err) {
        this.error = err;
        console.log(this.error)
       return this.error

      }
    },
  }, 
  mounted() {
    
    initFlowbite();
    console.log(stor.checkstate())
 
  if(stor.user!=false){
    this.user =stor.user['user']
  }
  else{
    this.user=false;
  }
  console.log(this.user)
  this.token=stor['token']

 
 
  }
}


</script>

<!-- <script setup>
import { initFlowbite, initModals } from 'flowbite';
import { onMounted } from 'vue';

onMounted(() => {
  initFlowbite();
})
</script> -->
