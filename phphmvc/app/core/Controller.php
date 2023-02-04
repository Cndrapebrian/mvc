<?php

class Controller {
    public function view($view, $data = [] )
    {
        require_once '../app/views/' . $view . '.php';
    }
    
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function getUbah()
    {
        echo json_encode($this->model('Pemesan_model')->getPemesanById($_POST['id']));
    }

  
}


?>