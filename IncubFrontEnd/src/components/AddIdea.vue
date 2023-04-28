<template>
  <!-- component -->
  <section
    class="max-w-4xl p-6 mx-auto bg-c3 rounded-md shadow-md dark:bg-gray-800 mt-20"
  >
    <h1 class="text-xl font-bold text-black capitalize dark:text-white">
       Add  Your Idea 
    </h1>
    <div>
      Add Image  <input v-on:click="CheckI" type="checkbox" name="" id="rimage" /> 
      Add Video <input v-on:click="CheckVD" type="checkbox" name="" id="" />
     Buy Idea  <input v-on:click="CheckPrix" type="checkbox" name="" id="" />
    </div>
    <form  @submit.prevent="addIdea()">
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
          <label class="text-black dark:text-gray-200" for="username"
            >Name</label
          >
          <input
          v-model="this.name"
            id="username"
            type="text"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          />
        </div>

        <div id="prix" class="mystyle">
          <label class="text-black dark:text-gray-200" for="emailAddress"
            >Prix For Buy</label
          >
          <input
          v-model="this.prixB"

            id="emailAddress"
            type="text"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          />
        </div>

        <div>
          <label class="text-black dark:text-gray-200" 
            >Prix For Check
          </label>
          <input
          v-model="this.prixR"
            type="text"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          />
        </div>

        <div>
          <label
            class="text-black dark:text-gray-200"
            for="passwordConfirmation"
            >Prix Sponser
          </label>
          <input
          v-model="this.prixS"

            id="passwordConfirmation"
            type="text"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          />
        </div>
    
        <div>
          <label
            class="text-black dark:text-gray-200"
            for="passwordConfirmation"
            >Category</label
          >
          <select
          v-model="this.categorie"

            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          >
            <option :value="cate.id" v-for="cate in this.category">
              {{ cate.name }}
            </option>
          </select>
        </div>
   

        <div>
          <label
            class="text-black dark:text-gray-200"
            for="passwordConfirmation"
            >Message</label
          >
          <textarea
          v-model="this.description"
            id="textarea"
            type="textarea"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
          ></textarea>
        </div>
        <div class="mystyle" id="image">
          <label class="block text-sm font-medium text-black"> Image </label>
          <div
            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
          >
            <div class="space-y-1 text-center">
              <svg
                class="mx-auto h-12 w-12 text-white"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 48 48"
                aria-hidden="true"
              >
                <path
                  d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label
                  for="file-upload"
                  class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                >
                  <span class="">Upload a file</span>
                  <input
               @click="open"
                  id="file-upload"
                    name="file-upload"
                   
                    class="sr-only"
                  />
                </label>
                <p class="pl-1 text-white">or drag and drop</p>
              </div>
              <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
        <div class="mystyle" id="vd">
          <label class="block text-sm font-medium text-black"> Vedio </label>
          <div
            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
          >
            <div class="space-y-1 text-center">
              <svg
                class="mx-auto h-12 w-12 text-white"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 48 48"
                aria-hidden="true"
              >
                <path
                  d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label
                  for="file-upload"
                  class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                >
                  <span class="">Upload a file</span>
                  <input
                  @change="onFileChangeVD"
                    id="file-upload"
                    name="file-upload"
                    type="file"
                    class="sr-only"
                  />
                </label>
                <p class="pl-1 text-white">or drag and drop</p>
              </div>
              <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
      </div>
    

      <div class="flex justify-end mt-6">
        <button data-modal-hide="staticModal"
          class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-black rounded-md hover:bg-cb-800 focus:outline-none focus:bg-gray-600"
        >
       
          Add
        </button>
      </div>
    </form>
  </section>
</template>
<style>
.mystyle {
  display: none;
}
</style>
<script>
import axios from "axios";
import Swal from 'sweetalert2'
import { useUserStore } from "../stores/auth.js";
import router from "../router";

const stor = useUserStore();
var state = stor.checkstate();
var user = state["user"];

export default {
  data() {

    return {
      open: function () {
      myWidget.open();
      },
      token:null,
      category: null,
      type:0,
      categorie:null,
      prixS:null,
      prixR:null,
      prixB:0,
      vd:null,
      description:null ,
      image:null,
      name:null,
      user:null,
      timestamp:null,
      signature:null

    };
  },

  async mounted() {
    this.category = await stor.getCategory();
    const state=stor.checkstate();
    if(state !=false){
     this.user=state['user']
     this.token=state['token']

 
}
else{
    window.location.replace('/login')
}
console.log(this.token)
  },


  methods: {
      
    addIdea(){
      if(localStorage.getItem('image')){
        this.image=localStorage.getItem('image')
      }
      if(localStorage.getItem('vd')){
        this.vd=localStorage.getItem('vd')
      }
      const fd = new FormData();
      fd.append("prixB", this.prixB);
      fd.append("prixR", this.prixR);
      fd.append("prixS", this.prixS);
      fd.append("name", this.name);
      fd.append("categorie", this.categorie);
      fd.append("image", this.image);
      fd.append("vd", this.vd);
      fd.append("user", this.user.id);
      fd.append("type", this.type);
      fd.append("description", this.description);
      const url = "http://127.0.0.1:8000/api/idea";
      try {
        const res =  axios
          .post(url, fd, {
            headers: {
              Accept: "application/json",
              'Content-Type': 'multipart/form-data',
              "Authorization" : `Bearer ${this.token}`

            },
          })
          .then((res) =>{res.data 
            console.log(res)
            localStorage.removeItem('vd'),
            localStorage.removeItem('image')
            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
            router.push('/myideas')
          }  )
         
          
      } catch (err) {
        this.error = err.message;
        console.log(err);
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
        
        });
      
      }



    },

    CheckI() {
      const image = document.getElementById("image");
      image.classList.toggle("mystyle");

    },

    CheckVD(){
      const vd = document.getElementById("vd");
      vd.classList.toggle("mystyle");
    }
    ,
    
    CheckPrix(){
      const prix = document.getElementById("prix");
      prix.classList.toggle("mystyle");
      if(this.type==0){
        this.type=1
      }
      else{
        this.type=0
      }
    }
  },

};

const cloudName = "dnqnmggba"; // replace with your own cloud name
const uploadPreset = "q40zikgw"; // replace with your own upload preset
const myWidget = cloudinary.createUploadWidget(
  {
    cloudName: cloudName,
    uploadPreset: uploadPreset,
    // cropping: true, //add a cropping step
    // showAdvancedOptions: true,  //add advanced options (public_id and tag)
    // sources: [ "local", "url"], // restrict the upload sources to URL and local files
    // multiple: false,  //restrict upload to a single file
    folder: "incup", //upload files to the specified folder
    // tags: ["users", "profile"], //add the given tags to the uploaded files
    // context: {alt: "user_uploaded"}, //add the given context data to the uploaded files
    // clientAllowedFormats: ["images"], //restrict uploading to image files only
    // maxImageFileSize: 2000000,  //restrict file size to less than 2MB
    // maxImageWidth: 2000, //Scales the image down to a width of 2000 pixels before uploading
    // theme: "purple", //change to a purple theme
  },
  (error, result) => {
    if (!error && result && result.event === "success") {

      if(result.info.format=="gpng" || result.info.format=="jpg" || result.info.format=="png"  ){
        localStorage.setItem('image',result.info.url)
      }
     else{
      localStorage.setItem('vd',result.info.url)
     }
      console.log(result.info.format)
      console.log("Done! Here is the image info: ", result.info.url);
      document
        .getElementById("uploadedimage")
        .setAttribute("src", result.info.secure_url);
    }
  }
);

</script>
