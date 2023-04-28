<template>
  <navbar></navbar>

  <section class="flex items-center justify-center flex-col bg-yellow-50">
    <h2 class="text-4xl font-bold">services</h2>
    <div class="mt-6 flex max-w-md gap-x-4">
      <button
        id="dropdownDefaultButton"
        data-dropdown-toggle="dropdown"
        class="text-black bg-c3  focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button"
      >
        Dropdown button
        <svg 
          class="w-4 h-4 ml-2"
          aria-hidden="true"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M19 9l-7 7-7-7"
          ></path>
        </svg>
      </button>

      <label for="email-address" class="sr-only"> keywords</label>
      <input
        id=""
        type="text"
        v-model="keywords"
        required=""
        class="min-w-0 flex-auto rounded-md border-2 bg-white/5 px-3.5 py-2 text-black "
        placeholder="search Here... "
      />

      <!-- Dropdown menu -->
      <div
        id="dropdown"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
      >
        <ul
          class="py-2 text-sm text-gray-700 dark:text-gray-200"
          aria-labelledby="dropdownDefaultButton"
        >
          <li v-for="cate in this.category">
            <button
              @click="swetch(cate.id)"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              {{ cate.name }}
            </button>
          </li>
        </ul>
      </div>
    </div>

    <section
      class="h-auto w-screen py-6 flex items-center justify-center flex-wrap"
    >
      <div v-for="id in this.ideas" class="max-w-2xl mx-4 my-4">
        <RouterLink :to="{ name: 'details', params: { id: parseInt(id.id)  } }"> 
        <div
          class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700"
        >
          <a href="#">
            <img 
            style="height: 200px; width: 300px;"
            class="rounded-t-lg" :src="id.image" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5
                class="text-gray-900 font-semibold text-1xl tracking-tight mb-2 dark:text-white"
              >
                {{ id.name }}
              </h5>
            </a>
            <p class=" font-light h-10 truncate w-40  text-gray-700 text-1x1   mb-3 dark:text-gray-400">
              {{ id.description }}
            </p>
            <div class="flex justify-between font-bold">
              <a
                href="#"
                class="text-black bg-c3  focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Read more
                <svg
                  class="-mr-1 ml-2 h-4 w-4"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </a>
              <span>{{ id.prixB }}$</span>
            </div>
          </div>
        </div>
      </RouterLink>
      </div>
    </section>
  </section>
  <foter></foter>
</template>

<script>
import { useUserStore } from "../stores/auth.js";
import foter from "../components/footer.vue";
import navbar from "../components/navbar.vue";
import axios from "axios";
import router from "../router";
const stor = useUserStore();
stor.checkstate
export default {
  name: "ideas",
  data() {
    return {
      ideas: "",
      keywords: "",
      category: "",
      param: this.$route.params.id,
    };
  },
  components: {
    foter,
    navbar,
  },
  watch: {
    keywords(after, before) {
      this.felter({cate:this.$route.params.id});
    },
  },

  methods: {
    swetch(id) {
      router.push(`/ideas/${id}`)
      this.felter({cate:id})
    },
    felter({cate}) {
      const fd = new FormData();
      fd.append("keywords", this.keywords);
      fd.append("categorie", cate); 

      const res = axios
        .post("http://127.0.0.1:8000/api/Fidea", fd)
        .then((response) => {
          this.ideas = response.data;
          console.log(response.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  async mounted() {
    stor.checkstate();
    console.log (stor.user)
    this.felter({cate:this.$route.params.id});
    this.category = await stor.getCategory();
    console.log(this.category);
  },
};
</script>
