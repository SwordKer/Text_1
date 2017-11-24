<?php 

    class CommonAction extends Action {
        public function _initialize() {
            if(!session('uid')) {
                    $this->redirect('Login/index');
                }
            }
    }
