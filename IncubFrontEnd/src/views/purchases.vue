<template>
    <navbar></navbar>
  
    <section class="flex items-center justify-center flex-col bg-yellow-50">
      <h2 class="text-4xl font-bold">services</h2>
      <div class="mt-6 flex max-w-md gap-x-4">
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="dropdown"
          class="text-black bg-c3  font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          type="button"
        >
          Category
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
  
        <label for="email-address" class="sr-only">keywords</label>
        <input
          id=""
          type="text"
          v-model="keywords"
          required=""
          class="min-w-0 flex-auto rounded-md border-2 bg-white/5 px-3.5 py-2 text-blcak shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
          placeholder="serch with "
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
              <img 
              style="height: 200px; width: 300px;"
              class="rounded-t-lg" :src="id.image" alt="" />
          
            <div class="p-5">
              <a href="#">
                <h5
                  class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white"
                >
                  {{ id.name }}
                </h5>
              </a>
              <p class="font-normal truncate h-10 w-60 text-gray-700 mb-3 dark:text-gray-400">
                {{ id.description }}
              </p>
              <div class="flex justify-between font-bold">
                <a
                  href="#"
                  class="text-black bg-c3  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center "
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
    <div class="overflow-x-auto ">
    <div
      class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-yellow-50 font-sans overflow-hidden"
    >
      <div class="w-full lg:w-5/6">
        <h1 class="text-center text-4xl font-bold">Purchases</h1>

        <div class="bg-white shadow-md rounded my-6">
          <table class="min-w-max w-full table-auto">
            <thead>
              <tr
                class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal"
              >
                <th class="py-3 px-6 text-left">name</th>
                <th class="py-3 px-6 text-left">Type</th>
                <th class="py-3 px-6 text-center">price</th>
                <th class="py-3 px-6 text-center">Status</th>
                <th class="py-3 px-6 text-center">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
              <tr
                v-for="pr in this.purchases"
                class="border-b border-gray-200 hover:bg-gray-100"
              >
                <td class="py-3 px-6 text-left whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="font-medium">{{ pr.name }} </span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-center">
                    <span v-if="pr.type==2">sponsor</span>
                    <span v-if="pr.type==1">buy</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-center" >
                  <div class="flex items-center">
                    <span v-if="pr.prixSp==0">prix of idea  </span>
                    <span v-if="pr.prixSp>0">{{ pr.prixSp }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-center">
                  <span
                    v-if="pr.confirmed == 0"
                    class="bg-purple-200 text-purple-800 py-1 px-3 rounded-full text-xs"
                    >pending</span
                  >
                  <span
                    v-if="pr.confirmed == 1"
                    class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"
                    >Active</span
                  >
                  <span
                    v-if="pr.confirmed == 2"
                    class="bg-red-500 text-purple-800 py-1 px-3 rounded-full text-xs"
                    >none</span
                  >
                </td>
                <td class="py-3 px-6 text-center">
                  <div class="flex item-center justify-center">
                 
                    <div
                      class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                      <svg
                      @click="deleteP(pr.id)"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#000000"
                      >
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g
                          id="SVGRepo_tracerCarrier"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></g>
                        <g id="SVGRepo_iconCarrier">
                          <title></title>
                          <g id="Complete">
                            <g id="x-circle">
                              <g>
                                <circle
                                  cx="12"
                                  cy="12"
                                  data-name="--Circle"
                                  fill="none"
                                  id="_--Circle"
                                  r="10"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                ></circle>
                                <line
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  x1="14.5"
                                  x2="9.5"
                                  y1="9.5"
                                  y2="14.5"
                                ></line>
                                <line
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  x1="14.5"
                                  x2="9.5"
                                  y1="14.5"
                                  y2="9.5"
                                ></line>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </div>
                </td>
              </tr>
          
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    <foter></foter>
  </template>
  
  <script>
  import { useUserStore } from "../stores/auth.js";
  import foter from "../components/footer.vue";
  import navbar from "../components/navbar.vue";
  import tablep from "../components/table.vue";
  import axios from "axios";
  import Swal from "sweetalert2";
  import router from "../router";
  const stor = useUserStore();
const state=stor.checkstate();
  export default {
    name: "ideas",
    data() {
      return {
        ideas: "",
        keywords: "",
        category: "",
        purchases:'',
        param: this.$route.params.id,
        user:'',
      };
    },
    components: {
      foter,
      navbar,
      tablep,
    },
    watch: {
      keywords(after, before) {
        this.felter({cate:this.$route.params.id});
      },
    },
  
    methods: {
      swetch(id) {
        router.push(`/purchases/${id}`)
        this.felter({cate:id})
      },
      getPurchases() {
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];

      const fd = new FormData();
      fd.append("sponsor", this.user.id);
      const res = axios
        .post(`http://127.0.0.1:8000/api/purchasesSponsor`, fd)
        .then((response) => {
          this.purchases = response.data;
          console.log(this.purchases);
    
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deleteP(ev) {
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];

      Swal.fire({
  title: 'Are you sure?',
  text: "You Delete this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

    const fd = new FormData();
      fd.append("id",ev );
      const res = axios
        .post(`http://127.0.0.1:8000/api/deletepurchase`, fd)
        .then((response) => {
          this.purchases = response.data;
          Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
          router.go();
          
        })
        .catch((error) => {
          console.log(error);
          Swal.fire(
      'upes!',
      'you have samting  worng.',
      'erure'
    )
        });

   
  }
})


      
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
      this.felter({cate:this.$route.params.id});
      this.category = await stor.getCategory();
      console.log(this.category);
      this.getPurchases();
      if (state != false) {
      this.user = state["user"];
 

      
    } else {
      this.user = false;
      router.push('/')
    }

    //fetch purchases
    this.purchases = await this.getPurchases();
  

    },
    
  };
  </script>
  
  