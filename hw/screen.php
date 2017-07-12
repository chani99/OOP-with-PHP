<?php
// include 'IElectronicPart.php';
// include 'ElectronicPart.php';

class screen extends ElectronicPart implements IElectronicPart   {

        private $Class_name = "screen";
        private $size;
        private $panel;


        public function __construct($manufacturer,$price,$model,$size,$panel){
                $this->size = $size;
                $this->panel = $panel;
                parent::__construct( $manufacturer, $price, $model); 

        }

        function receive_className(){
        return $this->Class_name;
        }

        function receive_size(){
        return $this->size;
        }

        function receive_panel(){
        return $this->panel;
        }


      function getSpecs(){
          return "class name: " . $this->receive_className() . 
                 ", manufacturer: ". ElectronicPart::receive_manufacturer() .
                 ", price: ". ElectronicPart::receive_price().
                 ", model: ". ElectronicPart::receive_model().
                 ", size: ". $this->receive_size().
                 ", panel: ". $this->receive_panel()
                 ;
     }
 

}
//  $myScreen = new screen('intel', 500, 'Z250','20"', 'aaa');

// echo $myScreen->getSpecs();


