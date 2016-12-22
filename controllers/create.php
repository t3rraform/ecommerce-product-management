<?php

class Create extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('create');
    }

    public function createProduct()
    {
        $this->loadModel('product');
        $this->model->createItem();

        Session::init();
        Session::set('created_item', 'Item created');
        header("Location: " . BASE_URL . "/create");
    }


}