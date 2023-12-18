<?php
class Pelanggan {
    public $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function read1($id) {
        $pelanggan = mysqli_query($this->conn," SELECT * FROM pelanggan WHERE id = '$id'");
        $data = mysqli_fetch_array($pelanggan);
        
        return $data;
    }
    public function read() {
        $pelanggan = mysqli_query($this->conn,"SELECT * FROM pelanggan ORDER BY id ASC");
        return $pelanggan;
    }
}
