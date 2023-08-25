<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function signin(){
        $this->render('login');
    }

    public function signinAction(){

      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $password = filter_input(INPUT_POST, 'password');

      if($email && $password){

        $token = LoginHandler::verifyLogin($email, $password);

        if($token){
          $_SESSION['token'] = $token;
          $this->redirect('/');

        }else{
          $_SESSION['flash'] = 'E-mail e /ou senha não conferem.';
          $this->redirect('/login');
        }

      }else{
        $_SESSION['flash'] = 'Digite os campos de e-mail e/ou senha.';
        $this->redirect('login');
      }

      echo 'Email: '.$email;
      echo 'Password: '.$password;

      echo 'Login recebido';
    }

    public function signup() {
      echo 'Cadastro';
    }

}