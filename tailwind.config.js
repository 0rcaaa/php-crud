/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./main/**/*.{html, php, js}",
    "./main/src/*.php",
    "./main/layout/*.php"
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

