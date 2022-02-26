<?php
    include_once 'news.php';
    require_once 'newsMapper.php';

    session_start();

    if(isset($_POST['insert'])){
        $product = new NewsLogic($_POST); 
        $product->insertData();
    }

    class NewsLogic {
        private $name="";
        private $image="";
        private $pfd="";

        function __construct($formData){
            $this->name= $formData['c-name'];
            $this->image=$formData['c-image'];
            $this->pfd=$formData['c-pfd'];
        }

        public function insertData(){
            $news = new News($this->name, $this->image, $this->pfd);
            $mapper = new NewsMapper();
            $mapper->insertNews($news);
            header("Location:../views/news.php");
        }
    }