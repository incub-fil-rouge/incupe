
<template>

<navbar></navbar>

  
<!-- Modal toggle -->
<!-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->

<!-- Main modal -->

<section class="bg-no-repeat bg-center h-screen text-white "  style="background-image: url('https://th.bing.com/th/id/R.244e27525e3514aacf05210f1e2130f1?rik=EeC5CcaZgEkQFA&riu=http%3a%2f%2fimg.cndesign.com%2fWorks%2f20180319%2f73d15fc51f36407889cc6745830a2627.jpeg&ehk=simP7xrbTmsDBkDz4ZOAXDAfKKr6iXUZMwpie96E%2bBk%3d&risl=&pid=ImgRaw&r=0'); background-size: cover;" >
  <div
    class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
  >
    <div class="mx-auto max-w-3xl text-center">
      <h1
        class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
      >
        Understand User Flow.

        <span class="sm:block"> Increase Conversion. </span>
      </h1>

      <p class="mx-auto mt-4 max-w-xl sm:text-xl sm:leading-relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
        tenetur fuga ducimus numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a
          class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
          href="/login"
        >
          Get Started
        </a>

        <a
          class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          href="/about"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section> 

<services></services>

<about></about>
<cards></cards>

<foter></foter>

</template>
<script >
// import  '../assets/style.css'
import services from '../components/servce.vue'
import cards from '../components/cards.vue'
import navbar from '../components/navbar.vue'
import about from '../components/about.vue'
import foter from '../components/footer.vue'
export default {
  name: 'home',
  components: {
    navbar,
    services,
    about,
    foter,
    cards


  }
}
</script>
