<?php 
include("../../service/connection.php");
$id = "";
$name="";
$email="";
$phone="";
$address= "";
$errorMassage ="";
$successMsg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    do {
        if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMassage = 'Isi dlu';
            break;
        }

        // Check for duplicate entries in each field
        $sql = "SELECT * FROM clients WHERE id='$id' OR name='$name' OR email='$email' OR phone='$phone' OR address='$address'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $errorMassage = 'Duplikasi terdeteksi! Data sudah ada di database.';
            break;
        }

        // Add new client to the database
        $sql = "INSERT INTO clients(id, name, email, phone, address) VALUES ('$id', '$name', '$email', '$phone', '$address')";
        $result = $connection->query($sql);

        if ($result) {
            $successMsg = "Data berhasil masuk!";
            header("location: ./main.php");
            exit;
        } else {
            $errorMassage = "Terjadi kesalahan saat menyimpan data.";
        }

        // Clear the form fields
        $id = "";
        $name = "";
        $email = "";
        $phone = "";
        $address = "";

    } while (false);
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
        $pg = 'Add New Student'; 
        include("../../../layout/navbar.php"); 
        ?>
    <div class="mx-14 mt-[3rem]">
        <h2 class="text-[3rem] mb-7 font-bold">Insert Data</h2>
        
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
            <div class="my-3">
                <label class="text-[1.2rem] " for="">NISN</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 p-3 rounded h-[3rem]" placeholder="Masukkan NISN" type="text" name="id" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Name</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 p-3 rounded h-[3rem]" placeholder="Masukkan Nama" type="text" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Email</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 p-3 rounded h-[3rem]" placeholder="Masukkan Email" type="text" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Phone</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 p-3 rounded h-[3rem]" placeholder="Masukkan No.Tlp" type="text" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="my-3">
                <label class="text-[1.2rem] " for="">Address</label>
                <div>
                    <input class="w-[100%] bg-zinc-700 p-3 rounded h-[3rem]" placeholder="Masukkan Alamat" type="text" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php 
            if (!empty($successMsg)){
                echo "
                <div>
                    <div>
                        <div class=``>
                            <strong>$successMsg</strong>
                        </div>
                    </div>
                </div>
            ";  
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