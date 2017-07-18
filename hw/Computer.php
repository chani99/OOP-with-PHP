<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class Computer extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "Computer";
        private $motherboard;
        private $processor;
        private $hardDrive;
        private $ram;
        private $graphicCard;



        public function __construct($manufacturer,$price, $model,$motherboard, $processor, $hardDrive, $ram, $graphicCard){
                $this->manufacturer =$manufacturer;
                $this->price =$price;
                $this->model =$model;
                $this->motherboard = $motherboard;
                $this->processor = $processor;
                $this->hardDrive = $hardDrive;
                $this->ram = $ram;
                $this->graphicCard = $graphicCard;
                // parent::__construct( $manufacturer, $price, $model); 

        }

        // function receive_className(){
        // return $this->Class_name;
        // }
        // function receive_motherboard(){
        // return $this->motherboard;
        // }
        // function receive_processor(){
        // return $this->processor;
        // }
        // function receive_hardDraive(){
        // return $this->hardDrive;
        // }
        // function receive_ram(){
        // return $this->ram;
        // }
        // function receive_graphiccard(){
        // return $this->graphicCard;
        // }


      function getSpecs(){
   return "Computer class: </br>
                  manufacturer: ". $this->manufacturer . "</br>" .
                 "price: ". $this->price . "</br>" .
                 "model: ". $this->model;
               //  "mother-board: ". $this->motherboard . "</br>" .
                //  "processor: ". $this->processor . "</br>" .
                //  "hard driver: ". $this->hardDrive. "</br>" .
                //  "ram: ". $this->ram. "</br>" .
                //  "graphic card: ". $this->graphiccard;
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

            $statement = $pdo->prepare("INSERT INTO l40_computers( manufacturer, price, model, motherboard, hard_drive,ram,  graphic_card)
                VALUES(:manufacturer, :price, :model, :motherboard, :hard_drive,  :ram,  :graphic_card)");
            $statement->execute(array(
                "manufacturer"=> $this->manufacturer,
                "price"=> $this->price,
                "model"=> $this->model,
                "motherboard" => $this->motherboard,
                "hard_drive" => $this->hardDrive,
                "ram" => $this->ram,
                "graphic_card" => $this->graphicCard));

     }
 
 

}
//  $myMouse = new Computer(    'GIGABYTE', 
//     3059, 
//     'fdfd',
//     'GA-Z170-HD3', 
//     'INTEL I7-6700', 
//     'WD1TB', 
//     '8GB DDR4 Hyper-X', 
//     'Intel® HD Graphics 530'
// );

// echo $myMouse->getSpecs();


