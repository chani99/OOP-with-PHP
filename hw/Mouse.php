<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class Mouse  extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "Mouse";
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
//  $myMouse = new Mouse('Microsoft', 129, 'Mobile Mouse 1850', false);

// echo $myMouse->getSpecs();


