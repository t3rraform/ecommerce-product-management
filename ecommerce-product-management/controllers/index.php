<?php

class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadModel('product');
        $this->view->items = $this->model->getItems();
        $this->view->render('index');
    }

    public function viewItem($url)
    {
        $this->loadModel('product');
        $this->view->item = $this->model->showItem($url);
        $this->view->render('item');
    }

    public function removeItem($url)
    {
        $this->loadModel('product');
        $this->model->removeItem($url);
        Session::init();
        Session::set('removed_item', 'Item removed');
        header("Location: " . BASE_URL . "/index");
    }
}
