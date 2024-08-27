<?php

$connection = mysqli_connect("localhost","root","","demo");

$name="";
$email="";
$phone="";
$address= "";

$errorMassage ="";
$successMsg = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //GET METHOD: menunjukan data dari table client
    if(!isset($_GET['id'])){
        header('location: ./main.php');
        exit;
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header('location: ./main.php');
        exit;
    }

    $name= $row['name'];
    $email= $row['email'];
    $phone= $row['phone'];
    $address= $row['address'];
} else{
    $id= $_POST['id'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address=  $_POST['address'];


    $id = $_GET['id'];

    do{
        if(empty($name) || empty($email) || empty($phone)|| empty($address)){
            $errorMassage='Isi dlu';
            break;
        }
        
        $sql_check = "SELECT * FROM clients WHERE (name = '$name' OR email = '$email' OR phone = '$phone') AND id != $id";
        $result_check = $connection->query($sql_check);

        // Jika ada record lain dengan email atau phone yang sama, tampilkan error
        if ($result_check->num_rows > 0) {
            $errorMassage = "Kesamaan ditemukan: data sudah digunakan.";
            break;
        }
        

        $sql= "UPDATE clients ".
                "SET name = '$name', email ='$email', phone = '$phone', address = '$address' ".
                "WHERE id = $id";

        $result = $connection->query($sql);
        
        if (!$result){
            $errorMassage= "kueri salah" . $connection->error;
            break;
        }
        $successMsg = "updated";
        
        header("location: ./main.php");
        exit;
    } while(false);
}
?>


<!DOCTYPE html>
<html class="bg-slate-900 font-ubuntu" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../../css/input.css">
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class=" text-white ">
    <?php 
        $pg = 'Edit Student'; 
        include("../../../layout/navbar.php"); 
        ?>
    <div class="mx-14 mt-[3rem]">
        <h2 class="text-[3rem] mb-7 font-bold">Update Data</h2>
        
        <?php 
        if (!empty($errorMassage)){
            echo "
            <div>
            <div>
            <div class=``>
            <strong>$errorMassage</strong>
            </div>
                </div>
            </div>
            ";
        }
        ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Name</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 placeholder:p-3 p-3 rounded h-[3rem]" placeholder="Masukkan Nama" type="text" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Email</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 placeholder:p-3 p-3 rounded h-[3rem]" placeholder="Masukkan Email" type="text" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Phone</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 placeholder:p-3 p-3 rounded h-[3rem]" placeholder="Masukkan No.Tlp" type="text" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Address</label>
                <div>
                    <input class="w-[100%] bg-zinc-700  p-3 rounded h-[3rem]" placeholder="Masukkan Alamat" type="text" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php 
            if (!empty($successMsg)){
                echo "<div>
                <div>
                    <div class=``>
                        <strong>$errorMassage</strong>
                    </div>
                </div>
            </div>";
            }
            ?>
            <div class="flex justify-end m-10">
                <div class="mx-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="mx-4">
                    <a role="button" class="btn btn-error" href="main.php">Cancel</a>
                </div>
                <div class="mx-4">
                    <input type="reset" class="btn btn-info" value="Reset" >
                </div>
            </div>
        </form>
    </div>
</body>
</html>