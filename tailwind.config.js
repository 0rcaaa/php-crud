/** @type {import('tailwindcss').Config} */
module.exports = {

  darkMode:'selector',
  
  content: [
    "./main/**/*.{html, php, js}",
    "./main/src/views/admin/*.php",
    "./main/src/views/user/*.php",
    "./main/layout/*.{html, php, js}",
    "./main/src/service/*.php",
     "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily :{
      'ubuntu':['ubuntu','sans-serif']
    },
    extend: {},
  },
  plugins: [
    require('daisyui'),
    require('flowbite/plugin')
  ],
};

