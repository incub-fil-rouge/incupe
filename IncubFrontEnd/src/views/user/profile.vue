<template>
<Nav></Nav>
  <main class="profile-page">
    
    <section class="relative block h-500-px">
      
      <div

        class="absolute top-0 w-full h-full bg-center bg-cover"
        style="
          background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
        "
      >
        <span
          id="blackOverlay"
          class="w-full h-full absolute opacity-50 bg-black"
        ></span>
      </div>
      <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
        style="transform: translateZ(0px)"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-blueGray-200 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    </section>
    
    <section class="relative py-16 bg-blueGray-200">
      
      <div class="container mx-auto px-4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
        >
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                <div class="relative">
                  <img
                    alt="..."
                    src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                  />
                </div>
              </div>
              <div
                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
              >
                <div class="py-6 px-3 mt-32 sm:mt-0">
                  <!-- <a class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" href="https://api.whatsapp.com/send?phone=0632367208" >
                     chat on WhatsApp
                </a> -->

                  <button
                    data-modal-target="update"
                    data-modal-toggle="update"
                    class="bg-c3 active:bg-c3 uppercase text-black font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                  >
                    Update Profile
                  </button>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4 lg:order-1">
                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                  <div class="mr-4 p-3 text-center">
                    <span
                      class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                      >22</span
                    ><span class="text-sm text-blueGray-400">Ides</span>
                  </div>
                  <div class="mr-4 p-3 text-center">
                    <span
                      class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                      >10</span
                    ><span class="text-sm text-blueGray-400">persesh</span>
                  </div>
                  <div class="lg:mr-4 p-3 text-center">
                    <span
                      class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                      >89</span
                    ><span class="text-sm text-blueGray-400">sponser</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-12">
              <h3
                class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2"
              >
                {{ this.user.name }}
              </h3>
              <div
                class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase"
              >
                <i
                  class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"
                ></i>
                {{ this.user.email }}
              </div>
              <div class="mb-2 text-blueGray-600 mt-10">
                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i
                >Solution Manager - Creative Tim Officer
              </div>
              <div class="mb-2 text-blueGray-600">
                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i
                >University of Computer Science
              </div>
            </div>
            <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
              <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-9/12 px-4">
                  <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                    An artist of considerable range, Jenna the name taken by
                    Melbourne-raised, Brooklyn-based Nick Murphy writes,
                    performs and records all of his own music, giving it a warm,
                    intimate feel with a solid groove structure. An artist of
                    considerable range.
                  </p>
             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

  <div
    id="update"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
  >
    <div class="relative w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button
          type="button"
          class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
          data-modal-hide="update"
        >
          <svg
            aria-hidden="true"
            class="w-5 h-5"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="px-6 py-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
           Updat Your profile
          </h3>
          <form class="space-y-6" @submit.prevent="update()" >
            <div>
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your name</label
              >
              <input
                v-model="this.name"
                type="text"
                placeholder="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>
            <div>
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your email</label
              >
              <input
              v-model="this.email"

                type="email"
      
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="name@company.com"
                required
              />
            </div>
            <div>
              <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your password</label
              >
              <input
              v-model="this.password"
                type="password"
           
              
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                
              />
            </div>
            <div>
              <label
                for="cin"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your CIN</label
              >
              <input
              v-model="this.CIN"

                type="text"
       
                placeholder="HH18812"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>
            <div>
              <label
                for="nomber"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your nomber</label
              >
              <input
              v-model="this.nomber"
                type="text"
                placeholder="076363636"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>

            <button
              type="submit"
              class="w-full text-black bg-c3 hover:bg-c3 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Update your account
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Swal from "sweetalert2";
import axios from "axios";
import { useUserStore } from "../../stores/auth.js";
import { initFlowbite } from "flowbite";
import router from "../../router";
import Nav from '../../components/navbar.vue'

const stor = useUserStore();
var state = stor.checkstate();



export default {
  name: "signin",
  components:{
    Nav
  },
  data: () => ({
    user: "",
    email: "",
    name: "",
    password: "",
    CIN: "",
    nomber: "",
    role: "user",
  }),
  mounted() {
    if (state != false) {
      this.user = state["user"];
      this.name=this.user.name
      this.email=this.user.email
      this.nomber=this.user.number
      this.CIN=this.user.CIN
      // this.password=this.user.password
    

    } else {
      window.location.replace("/login");
    }
    initFlowbite();
  },
  methods: {
    update: async function () {
      console.log("wsal");

      const auth = new FormData();
      if(this.password!=""){
        auth.append("password", this.password);
      }
      auth.append("id", this.user.id);
      auth.append("email", this.email);
      auth.append("name", this.name);
      auth.append("CIN", this.CIN);
      auth.append("number", this.nomber);
      console.log(auth.append)
      const url = "http://127.0.0.1:8000/api/edit";
   

      try {
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];
        const res = await axios.post(url, auth).then((res) => res.data);
        this.success = true;
        console.log(res);
        console.log("secses");
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500,
        });
        
        const local=JSON.parse( localStorage.getItem('user'))
         local['user']=res
         console.log(local)
         window.localStorage.clear();
         localStorage.setItem("user", JSON.stringify(local)); 
         router.go()
      stor.checkstate()

      // router.go();
      } catch (err) {         
        this.error = err.message;
        console.log(err);
        console.log(this.error);  
      
      }
    },
  },
  created() {
   
  },
};
</script>
