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
                $this->motherboard = $motherboard;
                $this->processor = $processor;
                $this->hardDrive = $hardDrive;
                $this->ram = $ram;
                $this->graphicCard = $graphicCard;
                parent::__construct( $manufacturer, $price, $model); 

        }

        function receive_className(){
        return $this->Class_name;
        }
        function receive_motherboard(){
        return $this->motherboard;
        }
        function receive_processor(){
        return $this->processor;
        }
        function receive_hardDraive(){
        return $this->hardDrive;
        }
        function receive_ram(){
        return $this->ram;
        }
        function receive_graphiccard(){
        return $this->graphicCard;
        }


      function getSpecs(){
          return "class name: " . $this->receive_className() . "</br>" .
                 "manufacturer: ". ElectronicPart::receive_manufacturer() . "</br>" .
                 "price: ". ElectronicPart::receive_price(). "</br>" .
                 "model: ". ElectronicPart::receive_model(). "</br>" .
                 "mother-board: ". $this->receive_motherboard(). "</br>" .
                 "processor: ". $this->receive_processor(). "</br>" .
                 "hard driver: ". $this->receive_hardDraive(). "</br>" .
                 "ram: ". $this->receive_ram(). "</br>" .
                 "graphic card: ". $this->receive_graphiccard();
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

            $statement = $pdo->prepare("INSERT INTO l40_computers(graphic_card, hard_drive, manufacturer, model,motherboard,price,ram)
                VALUES(:graphic_card, :hard_drive, :manufacturer, :model, :motherboard, :price, :ram)");
            $statement->execute(array(
                "graphic_card" => $this->graphicCard,
                "hard_drive" => $this->hardDrive,
                "manufacturer"=> ElectronicPart::receive_manufacturer(),
                "model"=> ElectronicPart::receive_model(),
                "motherboard" => $this->motherboard,
                "price"=> ElectronicPart::receive_price(),
                "ram" => $this->ram));

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


