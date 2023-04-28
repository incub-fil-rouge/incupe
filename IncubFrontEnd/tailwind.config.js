/** @type {import('tailwindcss').Config} */

  module.exports = {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
      './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
      colors:{
        c1:'#FAEDCD',
        c2:'#FEFAE0',
        cb:'#D4A373',
        c3:'#CCD5AE',
        c7:'#777777'

      }

    },
  
    plugins: [
      require('flowbite/plugin')
  ]

  }


