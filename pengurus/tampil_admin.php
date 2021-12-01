<?php
//memanggil file koneksi
include('config/koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM admin";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Data Pengurus</title>
    <style type="text/css">
        body{
            background-color: #F9EAE1;
        }
        h1{
            font-family: sans-serif;
            text-align: center;
        }
        p{
            position:relative;
            left: 40em;
        }
        input{
            width: 250px;
            height: 30px;
            font-size: 20px;
            background-color: #F5E9E2;
            
        }
        button{
           position:relative;
           left: 55em;
           background: transparent;
           height: 30px;
           width: 80px;
        }
    </style>
</head>
<body>
 
<h1>Data Pengurus</h1>
<table border="1">
    <tr>
        <th>id_admin</th>
        <th>unsername</th>
        <th>password</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
    ?>
        <tr>
            <td><?php echo $row['id_admin']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                <a href="edit_admin.php?id_admin=<?php echo $row['id_admin']; ?>">Edit</a> | 
                <a href="delete_admin.php?id_admin=<?php echo $row['id_admin']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>
     
            </td>
        </tr>
    <?php 
 }
?>
</table>
<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_admin.php">
    <p>id_admin <input type="text" name="id_admin" required="required" class="id"> </p>
    <p>username <input type="text" name="username" class="uid"> </p>
    <p>password <input type="password" class="pw"></textarea> </p>
        <button type="submit" name="password">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
</body>
</html>
