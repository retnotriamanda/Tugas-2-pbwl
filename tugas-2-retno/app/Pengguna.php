<?php
namespace App;

class Pengguna extends DB{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $sql = "select * from users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()){
            $data[] = $rows;    
        }

        return $data;
    }   

    public function insert(){
        $user_nama = $_POST['user_nama'];
        $user_email = $_POST['user_email'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];
        $user_pos = $_POST['user_pos'];
        $user_role = $_POST['user_role'];
        $user_aktif = $_POST['user_aktif'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users VALUES ('', '$user_email', '$user_nama', '$user_alamat', '$user_hp', 
                                   '$user_pos', '$user_role', '$user_aktif', '$password')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
    }

    public function edit($id){
        $sql = "SELECT * FROM users WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }   

    public function update($id){
        $user_nama = $_POST['user_nama'];
        $user_email = $_POST['user_email'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];
        $user_pos = $_POST['user_pos'];
        $user_role = $_POST['user_role'];
        $user_aktif = $_POST['user_aktif'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET user_nama = '$user_nama', user_email = '$user_email', user_alamat = '$user_alamat', 
                                    user_hp = '$user_hp', user_pos = '$user_pos', user_role = '$user_role', 
                                    user_aktif = '$user_aktif', password = '$password' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}