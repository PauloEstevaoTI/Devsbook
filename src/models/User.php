<?php
namespace src\models;
use \core\Model;

class User extends Model {
    private $id;
    private $email;
    private $name;
    private $avatar;

    public function setId($id){
        $this->id = $id;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getId(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getName(){
        return $this->name;
    }

    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

    public function getAvatar(){
        return $this->avatar;
    }

}