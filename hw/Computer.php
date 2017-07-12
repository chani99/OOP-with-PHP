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


