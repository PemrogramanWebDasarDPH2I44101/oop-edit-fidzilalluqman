<?php
class mahasiswa{
    private $conn;
    public function mahasiswa(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "6701174095";
        $this->conn = mysqli_connect($servername, $username, $password, $db);
    }
    public function tambah(){
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $sql    = "INSERT INTO tugas(nim, nama) VALUES ('$nim','$nama')";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
    public function kurang(){
        $nim = $_GET["nim"];
        $sql    = "DELETE FROM tugas WHERE nim=$nim";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
    public function bagi(){
        $sql    = "SELECT * FROM tugas";
        return mysqli_query($this->conn, $sql);
    }
    public function update()
    {
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $sql    = "UPDATE tugas SET nama='$nama' WHERE nim='$nim'";
        if (mysqli_query($this->conn, $sql)) {
            echo "berhasil";
        }else {
            echo mysqli_error($this->conn);
        }
    }
}
$operasi = isset($_POST["operasi"]) ? $_POST["operasi"] : "";
$mahasiswa = new mahasiswa();
if($operasi == "+")
    $mahasiswa->tambah();
if(isset($_GET["nim"]))
    $mahasiswa->kurang();
if($operasi == "/"){
    $result = $mahasiswa->bagi();
    require_once("data.php");
}
if(isset($_POST["edit"])) {
    $kalkulator->update();
}
