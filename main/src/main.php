<!DOCTYPE html>
<html lang="en" class="font-ubuntu" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/output.css">
        <link rel="stylesheet" href="./css/input.css">
        <title>Document</title>
    </head>
    <body class="bg-slate-900 text-white h-[100vh]">
        <?php 
        $pg = 'Menu Utama'; 
        include("./../layout/navbar.php"); 
        ?>
        <div class="mx-14 mt-20">
        <h1 class="text-[3rem] mb-7">List of Student</h1>
        <a class="text-[2rem] hover:text-sky-600" role="button" href="./create.php">Add New Student</a>
   <table class="mt-3 w-[100%]">
        <thead>
            <tr class="text-[1.3rem]">
                <th>NISN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Create_At</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <?php 
include("./connection.php");
$sql = "SELECT * FROM clients";
$result = $connection->query($sql);

if (!$result) {
    die("invalid" . $connection->error);
}

while ($row = $result->fetch_assoc()) {
    echo"
    <tr class='text-center'>
        <td class='border-t-2 border-white'>$row[id]</td>
        <td class='border-t-2 border-white'>$row[name]</td>
        <td class='border-t-2 border-white'>$row[email]</td>
        <td class='border-t-2 border-white'>$row[phone]</td>
        <td class='border-t-2 border-white'>$row[address]</td>
        <td class='border-t-2 border-white'>$row[create_at]</td>
        <td class='border-t-2 border-white'>
            <a class='btn btn-outline btn-info m-3' href='edit.php?id=$row[id]'>Edit</a>
            <a class='btn btn-outline btn-error' href='delete.php?id=$row[id]'>Delete</a>
        </td>
    </tr>
        ";
    }
    ?>
    </table>

    </div>
</body>
</html>