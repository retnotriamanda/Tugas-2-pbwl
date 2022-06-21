<?php
namespace App;

class Pelanggan extends DB{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $sql = "select * from pelanggans";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()){
            $data[] = $rows;    
        }

        return $data;
    }   

    public function getGolongan($id){
        $sql = "SELECT * FROM golongans WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $row = $stmt->fetch();

        return $row['gol_nama'];
    }

    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $row = $stmt->fetch();

        return $row['user_email'];
    }

    public function insert(){
        $golongan_id = $_POST['golongan_id'];
        $pel_no = $_POST['pel_no'];
        $pel_nama = $_POST['pel_nama'];
        $pel_ktp = $_POST['pel_ktp'];
        $pel_seri = $_POST['pel_seri'];
        $pel_meteran = $_POST['pel_meteran'];
        $pel_aktif = $_POST['pel_aktif'];
        $user_id = $_POST['user_id'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO pelanggans VALUES ('', '$golongan_id', '$pel_no', '$pel_nama','$pel_ktp', '$pel_seri', 
                                              '$pel_meteran', '$pel_aktif', '$user_id', '$created_at', '$updated_at')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM pelanggans WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }   

    public function update($id){
        $golongan_id = $_POST['golongan_id'];
        $pel_no = $_POST['pel_no'];
        $pel_ktp = $_POST['pel_ktp'];
        $pel_nama = $_POST['pel_nama'];
        $pel_seri = $_POST['pel_seri'];
        $pel_meteran = $_POST['pel_meteran'];
        $pel_aktif = $_POST['pel_aktif'];
        $user_id = $_POST['user_id'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "UPDATE pelanggans SET golongan_id = '$golongan_id', pel_no = '$pel_no', pel_nama = '$pel_nama', pel_ktp = '$pel_ktp', 
                                      pel_seri = '$pel_seri', pel_meteran = '$pel_meteran', pel_aktif = '$pel_aktif', 
                                      user_id = '$user_id', created_at = '$created_at', updated_at = '$updated_at' 
                                      where id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM pelanggans WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}