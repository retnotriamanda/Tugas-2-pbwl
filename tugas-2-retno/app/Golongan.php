<?php
namespace App;

class Golongan extends DB{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $sql = "select * from golongans";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()){
            $data[] = $rows;    
        }

        return $data;
    }   

    public function insert(){
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO golongans VALUES ('', '$gol_kode', '$gol_nama', '$created_at', '$updated_at')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM golongans WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }   

    public function update($id){
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "UPDATE golongans SET gol_kode = '$gol_kode', gol_nama = '$gol_nama' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM golongans WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}