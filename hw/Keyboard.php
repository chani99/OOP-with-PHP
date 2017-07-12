<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class Keyboard extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "Keyboard";
        private $isWired;


        public function __construct($manufacturer,$price, $model,$isWired){
                $this->isWired = $isWired;
                parent::__construct( $manufacturer, $price, $model); 

        }

        function receive_className(){
        return $this->Class_name;
        }

        function receive_wire(){
        return $this->isWired;
        }


      function getSpecs(){
          return "class name: " . $this->receive_className() . 
                 ", manufacturer: ". ElectronicPart::receive_manufacturer() .
                 ", price: ". ElectronicPart::receive_price().
                 ", model: ". ElectronicPart::receive_model().
                 ", is wierd?: ". $this->receive_wire();
     }
 

}
//  $myMouse = new Keyboard('Microsoft', 325, 'Natural Ergonomic 4000', true);

// echo $myMouse->getSpecs();


