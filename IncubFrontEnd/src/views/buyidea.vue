<template>
  <Nav></Nav>
  <div class="h-screen">
    <div class="flex justify-center h-[70%] p-8">
      <!-- image -->
      <!-- <div class="w-[45%] h-full bg-white rounded">
        <img :src="this.idea.image" class="h-full w-full" alt="" />
      </div> -->
      <!-- End Image -->

      <!-- Video -->
      <div class="w-[45%] h-full bg-red rounded">
        <video
          controls
          class="h-full w-full bg-cover"
          :src="this.idea.vd"
        ></video>
      </div>
      <div class="w-[45%] h-full bg-white rounded">
        <div class="flex flex-col justify-between h-[40%] bg-fuchsia-400">
          <div class="pt-5 pl-3 border-t dark:border-gray-700 w-[50%]">
            <div
              class="flex flex-col  space-y-4 md:space-y-0 md:space-x-6 md:flex-row"
            >
              <img
                src="https://source.unsplash.com/75x75/?portrait"
                alt=""
                class="self-center flex-shrink-0 w-12 h-12 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700"
              />

              <div class="flex flex-col">
                <h4 class="text-lg font-normal  ">{{ this.idea.name }}</h4>
              </div>
            </div>
            <div>
            <p class=" font-normal pt-3 pl-3 w-80  text-c7 ">{{ this.idea.description }}.</p>
          </div>
          </div>
          <div class="pt-12 pr-5 flex justify-end gap-4">
            <button
              data-modal-target="staticModal"
              data-modal-toggle="staticModal"
              href=""
              class="relative rounded px-5 py-2.5 overflow-hidden group bg-c3"
            >
              <span class="relative">Sponser Idees</span>
            </button>

            <a
              data-modal-target="buyModal"
              data-modal-toggle="buyModal"
              class="relative rounded px-5 py-2.5 overflow-hidden group bg-c3"
            >
              <span class="relative">Buy Idea</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Video -->
    </div>
  </div>
  <div
    id="staticModal"
    data-modal-backdrop="static"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
  >
    <div class="p-6 bg-sky-100 rounded bg-c2">
      <button
        type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="staticModal"
      >
        <svg
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
      </button>
      <div class="flex items-center justify-center font-black m-3 mb-12">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-10 w-10 mr-3 text-red-600 animate-pulse"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
            clip-rule="evenodd"
          />
        </svg>
        <h1 class="tracking-wide text-3xl text-gray-900">
          You are in good plce
        </h1>
      </div>
      <form
        @submit.prevent="invest()"
        id="login_form"
        action="api_login"
        method="POST"
        class="flex flex-col justify-center"
      >
        <div class="flex justify-between items-center mb-3">
          <div class="inline-flex items-center self-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-8 w-8 mr-3 bg-gradient-to-r from-pink-600 to-red-600 shadow-lg rounded p-1.5 text-gray-100"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path d="M13 7H7v6h6V7z" />
              <path
                fill-rule="evenodd"
                d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                clip-rule="evenodd"
              />
            </svg>
            <span class="font-bold text-gray-900"
              >$5 / {{ this.idea.name }}</span
            >
          </div>
          <div class="flex">
            <button
              type="button"
              onclick="minus()"
              class="bg-yellow-600 p-1.5 font-bold rounded"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>

            <input
              v-model="this.prixSp"
              :min="this.idea.prixS"
              id="item_count"
              type="number"
              class="max-w-[100px] font-bold font-mono py-1.5 px-2 mx-1.5 block border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
            />

            <button
              type="button"
              onclick="plus()"
              class="bg-green-600 p-1.5 font-bold rounded"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
          </div>
        </div>
        <label class="text-sm font-medium">name</label>
        <input
          v-model="this.name"
          class="mb-3 px-2 py-1.5 mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
          type="text"
          name="username"
          placeholder="name"
        />
        <label class="text-sm font-medium">Messages (optional)</label>
        <textarea
          class="mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
          name="messages"
          placeholder="Write something"
        ></textarea>
        <button
          class="px-4 py-1.5 rounded-md shadow-lg bg-c3 to-c3 font-medium text-black transition duration-300"
          type="submit"
        >
          <span id="login_default_state ">Send</span>
        </button>
      </form>
    </div>
  </div>

  <!-- model buy idea -->
  <div
    id="buyModal"
    data-modal-backdrop="static"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
  >
    <div class="p-6 bg-sky-100 rounded bg-c2">
      <button
        type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="buyModal"
      >
        <svg
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
      </button>
      <div class="flex items-center justify-center font-black m-3 mb-12">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-10 w-10 mr-3 text-red-600 animate-pulse"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
            clip-rule="evenodd"
          />
        </svg>
        <h1 class="tracking-wide text-3xl text-gray-900">
          You are in good idea
        </h1>
      </div>
      <form
        @submit.prevent="buyidea()"
        id="login_form"
        action="api_login"
        method="POST"
        class="flex flex-col justify-center"
      >
        <div class="flex justify-between items-center mb-3">
          <div class="inline-flex items-center self-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-8 w-8 mr-3 bg-gradient-to-r from-pink-600 to-red-600 shadow-lg rounded p-1.5 text-gray-100"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path d="M13 7H7v6h6V7z" />
              <path
                fill-rule="evenodd"
                d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                clip-rule="evenodd"
              />
            </svg>
            <span class="font-bold text-gray-900"> Prix : </span>
          </div>
          <div class="flex">
            <span
              class="max-w-[100px] font-bold font-mono py-1.5 px-2 mx-1.5 block border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
            >
              {{ this.idea.prixB }}$
            </span>
          </div>
        </div>
        <label class="text-sm font-medium">name</label>
        <input
          v-model="this.name"
          class="mb-3 px-2 py-1.5 mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
          type="text"
          name="username"
          placeholder="name"
        />
        <label class="text-sm font-medium">Messages (optional)</label>
        <textarea
          class="mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500"
          name="messages"
          placeholder="Write something"
        ></textarea>
        <button
          class="px-4 py-1.5 rounded-md shadow-lg bg-c3 to-c3 font-medium text-black  transition duration-300"
          type="submit"
        >
          <span id="login_default_state">send</span>
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import Nav from "../components/navbar.vue";
import axios from "axios";
import { initFlowbite } from "flowbite";
import { useUserStore } from "../stores/auth.js";
import Swal from "sweetalert2";
import router from "../router";
const stor = useUserStore();

export default {
  name: "details",
  data() {
    return {
      idea: "",
      name: "",
      prixSp: "",
      user: "",
    };
  },
  components: {
    Nav,
  },
  mounted() {
    // const stor = useUserStore();
    var state = stor.checkstate();
    console.log(stor.user["token"]);
    this.user = state["user"];
    if (state == false || this.user.role != "sponsor") {
      // console.log(state.user.role)
      localStorage.clear();
      router.push("/login");
    }

    initFlowbite();
    console.log(this.$route.params.id);
    this.getidea();
  },
  methods: {
    getidea() {
      const fd = new FormData();
      fd.append("keywords", this.keywords);
      fd.append("id", this.$route.params.id);

      const res = axios
        .post("http://127.0.0.1:8000/api/oneidea", fd)
        .then((response) => {
          this.idea = response.data;
          console.log(this.idea);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    invest() {
      axios.defaults.headers.common["Authorization"] =
        "Bearer " + stor.user["token"];
      console.log(stor.user["token"]);
      const fd = new FormData();
      fd.append("type", 2);
      fd.append("confirmed", 0);
      fd.append("name", this.name);
      fd.append("idea", this.idea.id);
      fd.append("sponsor", this.user.id);
      fd.append("prixSp", this.prixSp);

      const res = axios
        .post("http://127.0.0.1:8000/api/addpurchases", fd)
        .then((response) => {
          const ress = response.data;
          console.log(ress);
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500,
          });
          router.go();
        })
        .catch((error) => {
          console.log(error);
        });
    },
    buyidea() {
      axios.defaults.headers.common["Authorization"] =
        "Bearer " + stor.user["token"];
      const fd = new FormData();
      fd.append("type", 1);
      fd.append("confirmed", 1);
      fd.append("name", this.name);
      fd.append("idea", this.idea.id);
      fd.append("prixSp", 0);
      fd.append("sponsor", this.user.id);
      const res = axios
        .post("http://127.0.0.1:8000/api/addpurchases", fd)
        .then((response) => {
          const ress = response.data;
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500,
          });
          router.go();
        })
        .catch((error) => {
          console.log(error);
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
          });
        });
    },
  },
};
</script>
