<?php

require_once("UserInterface.php");

class UserModel implements UserInterface {

    private $conn;

    public function __construct(Database $data) {
        $this->conn = $data->getConnection();
    }

    public function insert(Array $user) : void {
        $query=$this->conn->prepare('INSERT INTO user (user_name, user_family_name, user_pseudo, user_mail, user_password, user_birth, infoPerso) 
        VALUES (:name, :family_name, :pseudo, :mail, :password, :birth, :infoPerso)');
        $executed = $query->execute([
            ':name' => $user ['user_name'], 
            ':family_name' => $user ['user_family_name'],
            ':pseudo' => $user ['user_pseudo'],
            ':mail' => $user ['user_mail'],
            ':password' => $user ['user_password'],
            ':birth' => $user ['user_birth'],
            ':infoPerso' => $user ['infoPerso']
        ]);
        if(! $executed) throw new \Error('Insert Failed');
    }

    public function update(Array $user) : void {
        $query=$this->conn->prepare('UPDATE user 
        SET user_name = :name, user_family_name = :family_name, user_pseudo = :pseudo, user_mail = :mail, user_password = :password, user_birth = :birth, infoPerso = :infoPerso 
        WHERE user_id = :id');
        $executed = $query->execute([
            ':name' => $user ['user_name'], 
            ':family_name' => $user ['user_family_name'],
            ':pseudo' => $user ['user_pseudo'],
            ':mail' => $user ['user_mail'],
            ':password' => $user ['user_password'],
            ':birth' => $user ['user_birth'],
            ':infoPerso' => $user ['infoPerso']
        ]);
        if(! $executed) throw new \Error('Update Failed');
    }

    public function delete(Array $user) : void {
        $query=$this->conn->prepare ('DELETE FROM user WHERE id= :id');
        $executed = $query->execute([
            ':name' => $user ['user_name'], 
            ':family_name' => $user ['user_family_name'],
            ':pseudo' => $user ['user_pseudo'],
            ':mail' => $user ['user_mail'],
            ':password' => $user ['user_password'],
            ':birth' => $user ['user_birth'],
            ':infoPerso' => $user ['infoPerso']
        ]);
        if(! $executed) throw new \Error('Delete Failed');
  
    }
}