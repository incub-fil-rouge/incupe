<template>
  <div
    class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20"
  >
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2
        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto"
      >
        <span class="relative inline-block">
          <svg
            viewBox="0 0 52 24"
            fill="currentColor"
            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block"
          >
            <defs>
              <pattern
                id="1d4040f3-9f3e-4ac7-b117-7d4009658ced"
                x="0"
                y="0"
                width=".135"
                height=".30"
              >
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect
              fill="url(#1d4040f3-9f3e-4ac7-b117-7d4009658ced)"
              width="52"
              height="24"
            ></rect>
          </svg>
          <span class="relative">Welcome</span>
        </span>
      We have ideas in all categories go to find your idea
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
        accusantium doloremque rem aperiam, eaque ipsa quae.
      </p>
    </div>
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
      <div v-for="ct in this.category">
        <!-- <RouterLink :to="{ name: 'ideas', params: { id: parseInt(ct.id)  } } > -->

          <RouterLink :to="{ name: 'ideas', params: { id: parseInt(ct.id)  } }"> 
        <div
          class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl"
        >
          <img
            class="object-cover w-full h-56 md:h-64 xl:h-80"
            :src="ct.image"
            alt="Person"
          />
          <div
            class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100"
          >
            <p class="mb-1 text-lg font-bold text-gray-100">{{ ct.name }}</p>
            <p class="mb-4 text-xs text-gray-100">"{{ ct.description }}"</p>
            <p class="mb-4 text-xs tracking-wide text-gray-400">
              {{ ct.description }}
            </p>
            <div class="flex items-center justify-center space-x-3">
            </div>
          </div>
        </div>
        </RouterLink>
      </div>
    </div>
  </div>
</template>
<script>
import { useUserStore } from "../stores/auth.js";

const stor = useUserStore();

export default {
  data() {
    return {
      category: "",
    };
  },
  props: {
    namec: String,
    // linkc : String
    // category: Array
  },

  async mounted() {
    this.category = await stor.getCategory();
    console.log(this.category);
  },
};
</script>
