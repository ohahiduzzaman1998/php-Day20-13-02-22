<?php


namespace App\classes;


class Product
{
    protected $file;
    protected $name;
    protected $products;
    protected $price;
    protected $directory;
    protected $product;
    protected $description;
    protected $imageName;
    protected $tempPath;

    public function __construct($post = null ,$file = null )
    {
        $this->file      = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;

//        echo '<pre>';
//        print_r($post);
//        print_r($file);
//
//        echo $file['image']['tmp_name'];
    }

    public function index()
    {
        header('Location: action.php?pages=product');
    }

    public function newProduct()
    {


        move_uploaded_file($this->tempPath, $this->directory);

    }

}