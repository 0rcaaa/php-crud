/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './main/src/views/**/*.{html,js,php}',
    './main/layout/*.{php,html}',
    './main/src/service/*.php',

  ],
  theme: {
    ontFamily :{
      'ubuntu':['Ubuntu','Sans-Serif']},
    extend: {
      'hero': "url('./main/src/assets/Gedung-Sekolah-2.jpg')",
    },
  },
  plugins: [
    require('daisyui'),
    require('flowbite/plugin'),
  ],
  darkMode : 'selector',
}

