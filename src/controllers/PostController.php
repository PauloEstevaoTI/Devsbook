<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\PostHandler;

class PostController extends Controller {

    private $loggedUser;

    public function __construct(){

        $this->loggedUser = LoginHandler::checkLogin();

        if($this->loggedUser === false){
            $this->redirect('/login');
        }
        
    }

    public function new() {
       $body = filter_input(INPUT_POST, 'body');

       echo 'CORPO :'.$body." - ID: ".$this->loggedUser->getId();;
    
       if($body){
            PostHandler::addPost(
                $this->loggedUser->getId(),
                'text',
                $body
            );
       }

       $this->redirect('/');
    }

    public static function getHomeFeed(){
        // 1. pegar lista de usuários q eu sigo.
        // 2. pegar os posts dessa galera ordenado por data
        // 3. transformar o resultado em objetos dos models
        // 4. preencher as informações adicionais.
        // 5. retornar o resultado.
    }



}