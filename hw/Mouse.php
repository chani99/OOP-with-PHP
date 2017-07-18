<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class Mouse  extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "Mouse";
        private $isWired;


        public function __construct($manufacturer,$price, $model,$isWired){
                $this->manufacturer =$manufacturer;
                $this->price =$price;
                $this->model =$model;
                $this->isWired = $isWired;
                // parent::__construct( $manufacturer, $price, $model); 

        }

        // function receive_className(){
        // return $this->Class_name;
        // }

        // function receive_wire(){
        // return $this->isWired;
        // }


      function getSpecs(){
                 return "Mouse class: </br>
                  manufacturer: ". $this->manufacturer . "</br>" .
                 "price: ". $this->price . "</br>" .
                 "model: ". $this->model;     }
 
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

            $statement = $pdo->prepare("INSERT INTO l40_mouses(manufacturer, price, model, is_wired)
                VALUES(:manufacturer, :price,  :model, :is_wired)");
            $statement->execute(array(
                "manufacturer"=> $this->manufacturer,
                "price"=> $this->price,
                "model"=> $this->model,
                "is_wired" => $this->isWired,));

     }
 

}
//  $myMouse = new Mouse('Microsoft', 129, 'Mobile Mouse 1850', false);

// echo $myMouse->getSpecs();


