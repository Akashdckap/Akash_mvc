<?php

require "models/userModel.php";

class userController {
    public $usermodel;

    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function create($product_details,$file){
        $this->usermodel->create($product_details,$file);
        header('location:views/user/create.php');
    }
    public function index(){
        $getdetails = $this->usermodel->listOfAll();
        require "views/user/list.php";
    }
    public function delete($id){
            $this->usermodel->delete($id);
            header("location:/");
    }
    public function view($id) {
        $getUserFromModel = $this->usermodel->read($id);
        require 'views/user/view.php';
    }
    public function edit($getDatas) {
        $this->usermodel->update($getDatas['targetId'],$getDatas);
        header('location: /');
    }



}