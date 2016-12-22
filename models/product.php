<?php

class Product extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getItems()
    {
        $sth = $this->db->prepare("SELECT * FROM products");
        $sth->execute();

        return $sth->fetchAll();
    }

    public function showItem($url)
    {
        $sth = $this->db->prepare("SELECT * FROM products WHERE url=:url");
        $sth->bindParam(':url', $url);
        $sth->execute();
        return $sth->fetch();
    }

    public function createItem()
    {
        $image_size = getimagesize($_FILES['image']['tmp_name']);
        if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price'])) {
            Session::init();
            Session::set('failed', 'All fields required');
            header("Location: " . BASE_URL . "/create");
            exit;
        }
        if (!$image_size) {
            Session::init();
            Session::set('failed', 'Invalid Image');
            header("Location: " . BASE_URL . "/create");
            exit;
        }
        $image = file_get_contents($_FILES['image']['tmp_name']);
        $sth = $this->db->prepare("INSERT INTO products(name, description, image, price, url)
        VALUES(:name, :description, :image, :price, :url)");
        $sth->execute(array(
            "name" => $_POST['name'],
            "description" => $_POST['description'],
            "image" => $image,
            "price" => $_POST['price'],
            "url" => str_replace(' ', '-', $_POST['name'])
        ));
    }

    public function removeItem($url)
    {
        $sth = $this->db->prepare("DELETE FROM products WHERE url=:url");
        $sth->bindParam(':url', $url);
        $sth->execute();
    }


}

