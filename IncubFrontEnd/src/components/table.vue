<template>
  <!-- component -->
  <div class="overflow-x-auto">
    <div
      class="min-w-screen min-h-screen bg-yellow-50 flex items-center justify-center bg-gray-100 font-sans overflow-hidden"
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
                    <span v-if="pr.type == 1">buy</span>
                    <span v-if="pr.type == 2">sposere</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-center">133</td>
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
                      class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                    >
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg> -->
                      <svg
                        @click="UpdatePurchases({ id: pr.id, type: 1 })"
                        viewBox="0 0 24.00 24.00"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        stroke="#e00b0b"
                      >
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g
                          id="SVGRepo_tracerCarrier"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke="#CCCCCC"
                          stroke-width="1.488"
                        >
                          <path
                            d="M16.5 5.38468C18.6128 6.82466 20 9.25033 20 12C20 16.4183 16.4183 20 12 20C11.5898 20 11.1868 19.9691 10.7932 19.9096M13.1599 4.08348C12.7812 4.02847 12.3939 4 12 4C7.58172 4 4 7.58172 4 12C4 14.708 5.34553 17.1018 7.40451 18.5492M13.1599 4.08348L12.5 3M13.1599 4.08348L12.5 5M10.7932 19.9096L11.7561 19M10.7932 19.9096L11.5 21M9 12L11 14L15 10"
                            stroke="#464455"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </g>
                        <g id="SVGRepo_iconCarrier">
                          <path
                            d="M16.5 5.38468C18.6128 6.82466 20 9.25033 20 12C20 16.4183 16.4183 20 12 20C11.5898 20 11.1868 19.9691 10.7932 19.9096M13.1599 4.08348C12.7812 4.02847 12.3939 4 12 4C7.58172 4 4 7.58172 4 12C4 14.708 5.34553 17.1018 7.40451 18.5492M13.1599 4.08348L12.5 3M13.1599 4.08348L12.5 5M10.7932 19.9096L11.7561 19M10.7932 19.9096L11.5 21M9 12L11 14L15 10"
                            stroke="#464455"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </g>
                      </svg>
                    </div>
                    <div
                      v-if="pr.type != 1"
                      class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                    >
                      <svg
                        @click="UpdatePurchases({ id: pr.id, type: 2 })"
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
</template>
<script>
import axios from "axios";
import { useUserStore } from "../stores/auth.js";
import router from "../router";
import Swal from "sweetalert2";
const stor = useUserStore();
const state = stor.checkstate();

export default {
  data() {
    return {
      purchases: "",
      user: "",
    };
  },
  methods: {
    getPurchases() {
      const fd = new FormData();
      fd.append("id", this.user.id);
      const res = axios
        .post(`http://127.0.0.1:8000/api/purchases`, fd)
        .then((response) => {
          this.purchases = response.data;
          console.log(this.purchases);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    UpdatePurchases(ev) {
      const fd = new FormData();
      fd.append("confirmed", ev.type);
      console.log(ev);
      const res = axios
        .post(`http://127.0.0.1:8000/api/editpurchases/${ev.id}`, fd)
        .then((response) => {
          this.purchases = response.data;

          console.log(this.purchases);
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
  },
  async mounted() {
    if (state != false) {
      this.user = state["user"];
    } else {
      this.user = false;
    }

    //fetch purchases
    this.purchases = await this.getPurchases();
  },
};
</script>
