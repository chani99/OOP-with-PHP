<?php

class purchase {

        private $screen;
        private $mouse;
        private $keyboard;
        private $computer;


        public function __construct($screen, $mouse, $keyboard, $computer){
        $this->screen =$screen;
        $this->mouse =$mouse;
        $this->keyboard =$keyboard;
        $this->computer =$computer;
        }

        function receive_screen(){
        return $this->screen;
        }
        function receive_mouse(){
        return $this->mouse;
        }
        function receive_keyboard(){
        return $this->keyboard;
        }
        function receive_computer(){
        return $this->computer;
        }


        function getFullPurchaseDetails(){
            return
            $this->receive_screen()->getSpecs() . "</br>" .
            $this->receive_mouse()->getSpecs() . "</br>" .
            $this->receive_keyboard()->getSpecs() . "</br>" .
            $this->receive_computer()->getSpecs();
    
        }
}
