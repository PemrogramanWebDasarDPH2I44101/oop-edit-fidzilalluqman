<table border=1 align="center">
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["nama"]. "</td>";
        echo "<td>
            <a href='edit.php?nim=$nim'>Edit</a> |
            <a href='Class.php?nim=$nim'>Hapus</a> |

            </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
    </tbody>
</table>
