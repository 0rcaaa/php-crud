/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./main/**/*.{html, php, js}",
    "./main/src/views/**/*.php",
    "./main/layout/*.php",
     "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily :{
      'ubuntu':['ubuntu','sans-serif']
    },
    extend: {},
  },
  plugins: [
    require('daisyui')
  ],
};

