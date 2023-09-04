<?php
namespace src\handlers;

use \src\models\Post;

class PostHandler {
    
    public static function addPost($id_user, $body, $type){
        
        $body = trim($body);

        if(!empty($id_user) && !empty($body)){
            Post::insert([
                'id_user' => $id_user,
                'type' => $type,
                'created_at' => date('Y-m-d H:i:s'),
                'body' => $body
            ])->execute();            
        }      
    }
}