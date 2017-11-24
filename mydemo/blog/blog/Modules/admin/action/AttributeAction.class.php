<?php 

class AttributeAction extends CommonAction {
    public function index() {
        $this->data = M('attr')->select();
        $this->display();
    }
    
    public function addAttr() {
        $this->display();
    }
    
    public function attrHandle() {
        if(M('attr')->data($_POST)->add()) {
            $this->success('添加成功',U('index'));
        }
    }
    
}

?>



