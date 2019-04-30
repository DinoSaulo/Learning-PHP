<?php

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {

    public function create($data){
        echo "Create";
    }

    public function read(){
        echo "Read";
    }
    public function update(){
        echo "Update";
    }
    public function delete(){
        echo "Delete";
    }

}

$metodo = new Noticias();

$metodo->create(4002);