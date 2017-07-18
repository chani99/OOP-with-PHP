<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class screen extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "screen";
        private $size;
        private $panel;


        public function __construct($manufacturer,$price,$model,$size,$panel){
                $this->manufacturer =$manufacturer;
                $this->price =$price;
                $this->model =$model;
                $this->size = $size;
                $this->panel = $panel;
                // parent::__construct( $manufacturer, $price, $model); 

        }

        // function receive_className(){
        // return $this->Class_name;
        // }

        // function receive_size(){
        // return $this->size;
        // }

        // function receive_panel(){
        // return $this->panel;
        // }


      function getSpecs(){
                return "Screen class: </br>
                  manufacturer: ". $this->manufacturer . "</br>" .
                 "price: ". $this->price . "</br>" .
                 "model: ". $this->model;

     }

     function insert(){
             $host = '127.0.0.1';
            $db   = 'northwind';
            $user = 'root';
            $pass = '';
            $charset = 'utf8';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);

            $statement = $pdo->prepare("INSERT INTO l40_screens(manufacturer, price, model,size)
                VALUES(:manufacturer, :model, :price, :size)");
            $statement->execute(array(
                "manufacturer"=> $this->manufacturer,
                "price"=> $this->price,
                "model"=> $this->model,
                "size" => $this->size,));

     }


}
//  $myScreen = new screen('intel', 500, 'Z250','20"', 'aaa');

// echo $myScreen->getSpecs();


