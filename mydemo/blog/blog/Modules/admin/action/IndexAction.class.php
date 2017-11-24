<?php 
    
    class IndexAction extends CommonAction {
        public function index() {
            $this->display();
        }
        public function shows(){
            echo 11122;
            $this->display();
        }
    }
    
?>