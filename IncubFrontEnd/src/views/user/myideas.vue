<template class=" bg-yellow-50">
  <navbar></navbar>


  <section class="flex items-center justify-center flex-col bg-yellow-50">
    <h2 class="text-4xl font-bold">My Ideas</h2>

    <section
      class="h-auto w-screen py-6 flex items-center justify-center flex-wrap"
    >
      <div v-for="id in this.ideas" class="max-w-2xl mx-4 my-4">
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
                class="  text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white"
              >
                {{ id.name }}
              </h5>
            </a>
            <p 
            style="height: 50px; width: 250px;"
            class="truncate font-normal text-gray-700 mb-3 dark:text-gray-400">
              {{ id.description }}
            </p>
            <div class="flex justify-between font-bold">
              <button 
          
                @click="this.delete(id.id)"
                class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" 
                             >
                Delete
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
              </button>
              <span>{{ id.prixB }}$</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <tableP></tableP>
  <foter></foter>
</template>

<script>
import { useUserStore } from "../../stores/auth.js";
import foter from "../../components/footer.vue";
import navbar from "../../components/navbar.vue";
import tableP from "../../components/table.vue";
import axios from "axios";
import Swal from "sweetalert2";
const stor = useUserStore();
 const state = stor.checkstate();

export default {
  name: "ideas",
  data() {
    return {
      ideas: "",
      user:state['user'],
      purchases:"",
    };
  },
  components: {
    foter,
    navbar,
    tableP
  },

  methods: {
    get_ideas() {
      const fd = new FormData();
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];
      fd.append("id",this.user.id);
      const res = axios
        .post("http://127.0.0.1:8000/api/myides", fd)
        .then((response) => {
          this.ideas = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  
    delete(ev) {
      Swal.fire({
        title: "Do you want Delete this idea ?",
        showDenyButton: true,
       
        confirmButtonText: "Delet",
        denyButtonText: `back`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          const fd = new FormData();
          axios.defaults.headers.common['Authorization'] = 'Bearer ' + stor.user['token'];
      fd.append("id", ev);
      const res = axios
        .post("http://127.0.0.1:8000/api/delete", fd)
        .then((response) => {
          this.ideas = response.data;
          this.get_ideas();
          console.log(res);
          Swal.fire("Saved!", "", "success");
        })
        .catch((error) => {
          console.log(error);
          console.log("errrr");
        });
      
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "", "info");
        }
      });
      
    },
  },

  async mounted() {

    //fetch ideas
    this.ideas = await this.get_ideas();
    
   
    console.log(this.user.id)


  },
};
</script>
