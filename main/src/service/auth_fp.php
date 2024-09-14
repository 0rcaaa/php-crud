<?php
session_start();
include './connection.php';

switch(isset($_SESSION['role'])){
    case 'Superuser':
        header('location: ../views/admin/dashboard.php');
        break;
    case 'User':
        header('location: ../views/user/homepage.php');
        break;
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $sql = "SELECT * FROM user WHERE email='$email' AND username='$username'";
    $result = mysqli_query($connection,$sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        header('location: ./rp.php');
    } else {
        echo "a<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}

?>
<html class='dark'>
    <head>
        <link rel="stylesheet" href='../css/input.css'>
        <link rel="stylesheet" href="../css/output.css">
    </head>
    <body>
        <section class="bg-gray-50 dark:bg-gray-900 font-ubuntu">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    SMKN 71
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Authentification Account
                        </h1>
                        <form class="space-y-4 md:space-y-6" method="POST">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <button type="submit" name="submit" class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset Passsword</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>