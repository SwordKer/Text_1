<?php 

    class HotWidget extends Widget {
        
        public function render($data) {
            $field = array('id','title','click');
            $data['blog'] = M('blog')->order('click DESC')->field($field)->limit($data['limit'])->select();
            return $this->renderFile('',$data);
        }
    }


?>