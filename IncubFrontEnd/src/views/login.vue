<template>
  <!-- component -->
  <div class="h-screen md:flex">
    <div
      class="relative overflow-hidden md:flex w-1/2 bg-c3 to-c3 i justify-around items-center hidden"
    >
      <div>
        <router-link to="/">
        <h1  class="text-black font-bold text-4xl font-sans">Incub</h1>
      </router-link>
        <p class="text-black mt-1">
          The most popular peer to peer lendingg 
        </p>
        <a
        href="/"
          class="block w-28 bg-black text-white mt-4 py-2 rounded-2xl font-bold mb-2"
        >
          Read More
        </a>
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
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
      <form @submit.prevent="login()" class="bg-white">
      

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
              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
            />
          </svg>

          <input
            class="pl-2 outline-none border-none"
            type="email"
            name=""
            id=""
            v-model="username"
            placeholder="Email Address"
          />
        </div>
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
            name=""
            id=""
            v-model="password"
            placeholder="Password"
          />
        </div>
        <button
          type="submit"
          class="block w-full bg-black mt-4 py-2 rounded-2xl text-white font-semibold mb-2"
        >
          Login
        </button>
        <router-link
          class="text-sm ml-2 hover:text-blue-500 cursor-pointer"
          to="/signin"
          >Go to Sign In ?</router-link
        >
      </form>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import { useUserStore } from "../stores/auth.js";
import Swal from "sweetalert2";
import router from "../router";
const user = useUserStore();
export default {
  name: "login",
  data: () => ({
    username: "",
    password: "",
    error: null,
    success: false,
  }),
  methods: {
    login: async function () {
      const auth = new FormData();
      auth.append("email", this.username);
      auth.append("password", this.password);
      // Correct username is 'foo' and password is 'bar'
      const url = "http://127.0.0.1:8000/api/login";
      this.success = false;
      this.error = null;

      try {
        const res = await axios
          .post(url, auth, {
            headers: {
              Accept: "application/json",
            },
          })
          .then((res) => res.data);
        this.success = true;
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500,
        });
        localStorage.setItem("user", JSON.stringify(res));
        // console.log(res['user'])
        if(res['user'].role=='user'){
          router.push("user");
        }
        if(res['user'].role=='sponsor'){
          router.push("/");

        }
      } catch (err) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
        });
      }
    },
  },
  mounted() {
    console.log("khdam hadchi");
  },
};
</script>
