<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center"> 
    <form action="Class.php" method="post">
        <tr>    
            <th>NIM</th>
            <td><input type="text" name="input1"></td>
            <td rowspan="2">    
                <select name="operasi">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>NAMA</th>
            <td><input type="text" name="input2"></td>
        </tr>
        <tr>    
        <td><input type="submit" value="Kirim"></td>
        </tr>
    </form>
    </table>
</body>
</html>
