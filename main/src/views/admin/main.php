<!DOCTYPE html>
<html lang="en" class="font-ubuntu" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/output.css">
        <link rel="stylesheet" href="../../css/input.css">
        <title>Document</title>
    </head>
    <body class="bg-slate-900 text-white h-[100vh]">
        <?php 
        $pg = 'Menu Utama'; 
        include("../../../layout/navbar.php"); 
        ?>
        <div class="mx-14 mt-20">
        <h1 class="text-[3rem] mb-7">List of Student</h1>
        <a class="text-[2rem] hover:text-sky-600" role="button" href="./create.php">Add New Student</a>
   <table class="mt-3 w-[100%]">
        <thead>
            <tr class="text-[1.3rem]">
                <th class="p-3">NISN</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Phone</th>
                <th class="p-3">Address</th>
                <th class="p-3">Create_At</th>
                <th class="p-3">Updated_At</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        
        <?php 
include("../../service/connection.php");
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
        <td class='border-t-2 border-white'>$row[updated_at]</td>
        <td class='border-t-2 border-white'>
            <a class='btn btn-outline btn-info m-3' href='edit.php?id=$row[id]'>Edit</a>
            <!-- You can open the modal using ID.showModal() method -->
            <button class='btn btn-outline btn-error m-3' onclick='my_modal_3.showModal()'>Delete</button>
            <dialog id='my_modal_3' class='modal 0'>
            <div class='modal-box '>
                <form method='dialog'>
                <button class='btn btn-sm btn-circle btn-ghost absolute right-2 top-2'>✕</button>
                </form>
                <h3 class='text-lg font-bold'>Peringatan!</h3>
                <p class='py-4'>Data yang dihapus tidak dapat dikembalikan lagi. Apa kamu yakin untuk menghapus data ini?</p>
                <a class='btn btn-outline btn-error' href='delete.php?id=$row[id]'>ya</a>
            </div>
            </dialog>
            </td>
    </tr>
        ";
    }
    ?>
    </table>

    </div>
</body>
</html>