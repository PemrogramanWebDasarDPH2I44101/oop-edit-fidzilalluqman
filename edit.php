<?php
$nim = $_GET["nim"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center "> 
    <form action="Class.php" method="post">
        <tr>
            <th>NIM</th>
            <td><input type="text" value="<?php echo $nim ?>" disabled>
                <input type="hidden" name="input1" value="<?php echo $nim ?>">
            </td>
        </tr>
        <tr>
            <th>NAMA</th>
            <td><input type="text" name="input2"></td>
        </tr>
        <tr>
            <td><input type="submit" name="edit" value="Edit"></td>
        </tr>
    </form>
    </table>
</body>
</html>
