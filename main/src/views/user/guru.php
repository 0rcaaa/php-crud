<?php
session_start();
?>

<html class="dark font-ubuntu" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="stylesheet" href="../../css/input.css">
</head>
<body>



<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class=" flex flex-wrap items-center justify-between mx-auto p-5">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../../assets/logo71.png" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SMKN 71</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-10 h-10 rounded-full" src="../../assets/dummy_pp.jpeg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white"><?= $_SESSION['username'] ?></span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-500"><?= $_SESSION['email'] ?></span>
        </div>
        <ul class="py-2 " aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="../../service/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col text-xl font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="./homepage.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ekskul</a>
      </li>
      <li>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" type="button">
          Jurusan
        </button>
       <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rekayasa Perangkat Lunak</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Animasi</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desain Komunikasi Visual</a>
              </li>
              <li>
              </li>
            </ul>
        </div>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Guru & Staff</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<section class="flex flex-col flex-nowrap content-around items-center text-center">


    <div style=" margin-top:5rem;">
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/palambas.jpg" alt="" >
        <p class="text-base text-neutral-500">Kepala Sekolah</p>
        <h1 class="font-bold text-xl">Drs. Lambas Pakpahan MM.</h1>
    </div>


    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Miss Jenny</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/busuwarni.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Suwarni</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/pausamn.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Usman</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/bufadila.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Faradillah</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/bumexi.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Mexi</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/buumi.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Umi</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/pasigit.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Sigit</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/budwi.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Dwi</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/panur.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Nur</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/bunanda.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Nanda</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/bufara.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Fara</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/buajija.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Azizah</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/parahmat.jfif" alt="" >
        <p class="text-base text-neutral-500">Pak Rahmat/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/pahadi.JPG" alt="" >
        <p class="text-base text-neutral-500">Pak Hadi/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/paipin.JPG" alt="" >
        <p class="text-base text-neutral-500">Pak Arifin/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/buanisa.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Anisa</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/buangi.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Anggi</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/gtq.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/padi.JPG" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Adi</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/budalila.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Bu Dalilah</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/paarif.jpg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Pak Arif</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
    <div style="margin-top:5rem; width: 90%; justify-content:space-evenly" class="flex justify-evenly w-vw">
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
      <div>
        <img style="width: 15rem; height:15rem;" class="rounded-full" src="../../assets/dummy_pp.jpeg" alt="" >
        <p class="text-base text-neutral-500">Jabatan/</p>
        <h1 class="font-bold text-xl">Nama Guru</h1>
      </div>
    </div>
</section>


    <footer class="w-vw mt-20 bg-gray-600 justify-center flex">
        <div class="flex flex-row gap-8 my-10">
        <div class="flex">
        <img class="h-[24px] w-[24px]" src="../../assets/instagram.png" alt="">
        <a href="#" class="hover:text-sky-950">Instagram</a>
        </div>
        <div class="flex">
          <img class="h-[24px] w-[24px]" src="../../assets/mail.svg" alt="">
          <p>dummy@gamil.com</p>
        </div>
        <div class="flex">
          <img class="h-[24px] w-[24px]" src="../../assets/map.svg" alt="">
          <a href="https://maps.app.goo.gl/qQ4ozzoSmAzBc4f79" class="hover:text-sky-950 text-warp">Jl. Dr. KRT Radjiman Widyodiningrat Jl. Kp. Pulo Jahe,<br> Jatinegara, Kec. Cakung, Kota Jakarta Timur,<br> Daerah Khusus Ibukota Jakarta 13930</a>
        </div>
        </div>
    </footer>


<script src="../../../../node_modules/flowbite/dist/flowbite.js"></script>
</body>
</html>
