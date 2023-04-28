<template>
  <section class="flex items-center justify-center flex-col bg-yellow-50">
    <h2 class="text-4xl font-bold pt-3">SERVICES</h2>

    <section
      class="h-auto w-screen py-6 flex items-center justify-center flex-wrap"
    >
      <div v-for="id in ideas" class="max-w-2xl mx-4 my-4">
        <RouterLink :to="{ name: 'details', params: { id: parseInt(id.id)  } }"> 
        <div
          class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700"
        >
          <a href="#">
            <img  
              style="height: 200px; width: 300px;"
              class="rounded-t-lg "
              :src="id.image"
              alt=""
            />
          </a>
          <div class="p-5">
            <a href="#">
              <h5
                class="text-gray-900  font-semibold text-1xl tracking-tight mb-2 dark:text-white"
              >
            {{ id.name }}
              </h5>
            </a>
            <p class="font-normal truncate h-20 w-40 text-gray-700 mb-3 dark:text-gray-400">
         {{ id.description }}
            </p>
            <div class="flex justify-between font-bold">
              <a
                href="#"
                class="text-black bg-c3 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
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
              <span  >{{ id.prixB }}$</span>
            </div>
          </div>
        </div>
        </RouterLink>
      </div>
    </section>
  </section>
</template>
<script>
import { useUserStore } from "../stores/auth.js";

const stor = useUserStore();
export default {
  data() {
    return {
      ideas: "",
    };
  },
  async mounted() {
    this.ideas = await stor.getIdes();
    console.log(this.ideas);
  },
};
</script>
