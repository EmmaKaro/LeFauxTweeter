<?php

require_once("UserInterface.php");

class UserModel implements UserInterface {

    private $conn;

    private $user_id;

    private $user_name;

    private $user_family_name;

    private $user_mail;

    private $user_password;

    private $infoPerso;

    private $user_birth;

    private $user_pseudo;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->user_pseudo;
    }

    /**
     * @param mixed $user_pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->user_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserFamilyName()
    {
        return $this->user_family_name;
    }

    /**
     * @param mixed $user_family_name
     */
    public function setUserFamilyName($user_family_name): void
    {
        $this->user_family_name = $user_family_name;
    }

     /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_mail;
    }

    /**
     * @param mixed $user_mail
     */
    public function setUserEmail($user_mail): void
    {
        $this->user_mail = $user_mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setPassword($password): void
    {
        $this->user_password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return mixed
     */
    public function getInfoPerso()
    {
        return $this->infoPerso;
    }

    /**
     * @param mixed $infoPerso
     */
    public function setInfoPerso($info_perso): void
    {
        $this->infoPerso = $infoPerso;
    }



    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->user_birth;
    }

    /**
     * @param mixed $user_birth
     */
    public function setBirth($user_birth): void
    {
        $this->user_birth = $user_birth;
    }

    public function __construct(Database $db) {
        $this->conn = $db->getConnection();
    }

  

    public function insert(array $tab) : void
    {
        $query = $this->conn->prepare('INSERT INTO user (user_name, user_family_name, user_pseudo, user_mail, user_password, user_birth) VALUES (:user_name, :user_family_name, :user_pseudo, :user_mail, :user_password, :user_birth)');
        $executed = $query->execute([
            ':user_name' => $tab->getUserName(),
            ':user_family_name' => $tab->getUserFamilyName(),
            ':user_pseudo' => $tab->getPseudo(),
            ':user_mail' => $tab->getUserEmail(),
            ':user_password' => $tab->getPassword(),
            ':user_birth' => $tab->getBirth()
        ]);

        if(!$executed) throw new \Error('Insert Failed');

    }

    public function update() : void
    {
        if(!$_SESSION['id']) throw new \Error('Instance does not exist in base');

        $query = $this->conn->prepare('UPDATE user SET user_pseudo = :user_pseudo, user_birth = :user_birth, infoPerso = :infoPerso WHERE user_id = :user_id');
        $executed = $query->execute([
            ':user_pseudo' => $this->user_pseudo,
            ':user_birth' => $this->user_birth,
            ':infoPerso' => $this->infoPerso,
            ':user_id' => $_SESSION['user_id']
        ]);

        if(!$executed) throw new \Error('Update failed');

    }

    public function delete() : void
    {
        if(!$this->id) throw new \Error('Instance does not exist in base');

        $query = $this->conn->prepare('DELETE FROM user WHERE id = :id');
        $executed = $query->execute([
            ':user_name' => $this->user_name,
            ':user_family_name' => $this->user_family_name,
            ':life' => $this->life,
            ':id' => $this->id
        ]);

        if(!$executed) throw new \Error('Delete failed');

    }


}
