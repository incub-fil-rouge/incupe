<template>
  <!-- component -->
  <div class="h-screen md:flex">
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
      <form @submit.prevent="signin" class="bg-white">
        <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
        <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>

        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
            />
          </svg>
          <input
            class="pl-2 outline-none border-none"
            type="text"
            name=""
            v-model="this.name"
            id=""
            placeholder="Username"
          />
        </div>
        <div v-show="this.erures.name" id="email-error" style="color: red;">{{ this.erures.name  }}</div>

        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
            />
          </svg>
          <input
            class="pl-2 outline-none border-none"
            type="text"
            name=""
            v-model="this.email"
            id=""
            placeholder="Email Address"
          />

        </div>
        <div v-show="this.erures.email" id="email-error" style="color: red;">{{ this.erures.email  }}</div>
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
              clip-rule="evenodd"
            />
          </svg>
          <input
            class="pl-2 outline-none border-none"
            type="text"
            v-model="this.CIN"
            name=""
            id=""
            placeholder="CIN"
          />
        </div>
        <div v-show="this.erures.CIN" id="email-error" style="color: red;">{{ this.erures.CIN  }}</div>

        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
              clip-rule="evenodd"
            />
          </svg>
          <input
            class="pl-2 outline-none border-none"
            type="text"
            v-model="this.nomber"
            name=""
            id=""
            placeholder="nomber"
          />
        </div>
        <div v-show="this.erures.nomber" id="email-error" style="color: red;">{{ this.erures.nomber  }}</div>

        <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
              clip-rule="evenodd"
            />
          </svg>
          <input
            class="pl-2 outline-none border-none"
            type="password"
            v-model="this.password"
            name=""
            id=""
            placeholder="Password"
          />
        </div>
        <div v-show="this.erures.password" id="email-error" style="color: red;">{{ this.erures.password }}</div>
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <select   v-model="this.role" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a role</option>
  <option value="user"> User</option>
  <option value="sponsor">Sponsor</option>
</select>
      </div>      


        


        <button
          type="submit"
          class="block w-full bg-black mt-4 py-2 rounded-2xl text-white font-semibold mb-2"
        >
          Sign In
        </button>
        <router-link
          class="text-sm ml-2 hover:text-blue-500 cursor-pointer"
          to="/login"
          >Go to login ?</router-link
        >
      </form>
    </div>

    <div
      class="relative overflow-hidden md:flex w-1/2 bg-c3 to-c3 i justify-around items-center hidden"
    >
      <div>
       <router-link to="/">
        <h1 class="text-wihte font-bold text-4xl font-sans">Incub</h1>
        <p class="text-black mt-1">
          The most popular peer to peer lending
        </p>
      </router-link>
      </div>
      <div
        class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
      ></div>
      <div
        class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
      ></div>
      <div
        class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
      ></div>
      <div
        class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"
      ></div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import Swal from "sweetalert2";
import router from "../router";

export default {
  name: "signin",
  data: () => ({
    email: "",
    name: "",
    password: "",
    CIN: "",
    password_confirmation: "",
    nomber: "",
    role: "sponsor",
   erures:{
    email: "",
    name: "",
    password: "",
    CIN: "",
    password_confirmation: "",
    nomber: "",
   }
  }),
  methods: {
    signin: async function () {
      console.log("wsal");

   

      const auth = new FormData();
      auth.append("email", this.email);
      auth.append("name", this.name);
      auth.append("password_confirmation", this.password);
      auth.append("CIN", this.CIN);
      auth.append("password", this.password);
      auth.append("role", this.role);
      auth.append("number", this.nomber);
      // Correct username is 'foo' and password is 'bar'
      const url = "http://127.0.0.1:8000/api/register";
      this.success = false;
  

      try {
        const res = await axios.post(url, auth).then((res) => res.data);
        this.success = true;
        console.log(res);
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500,
        })
        localStorage.setItem("user", JSON.stringify(res))
        if(res['user'].role=='user'){
          router.push("/user")
        }
        if(res['user'].role=='sponsor'){
          router.push("/");
        }
        this.erures.name=""
        

      } catch (err) {
       if(err.response.data.errors.email){
        this.erures.email=err.response.data.errors.email
       }
       else{
        this.erures.email=''

       }
       if(err.response.data.errors.password){
        this.erures.password=err.response.data.errors.password
       }
       else{
        this.erures.password=''
       }
       if(err.response.data.errors.password_confirmation){
        this.erures.password_confirmation=err.response.data.errors.password_confirmation
       }
       else{
        this.erures.password_confirmation=''
       }
       if(err.response.data.errors.number){
        this.erures.nomber=err.response.data.errors.number
       }else{
        this.erures.nomber=''
       }
       if(err.response.data.errors.CIN){
        this.erures.CIN=err.response.data.errors.CIN
       }
       else{
        this.erures.CIN=''
       }
       if(err.response.data.errors.name){
        this.erures.name=err.response.data.errors.name
       }
       else{
        this.erures.name=''
       }

    
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
        });
        console.log(err);
      }
    },
  },
  mounted() {
    console.log("khdam hadchi");
  },
};
</script>
