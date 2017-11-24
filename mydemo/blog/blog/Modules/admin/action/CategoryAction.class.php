<?php 

class CategoryAction extends CommonAction {
    public function index() {
        $data = M('cate')->order('sort ASC')->select();
        import('Class.CategoryGroup',APP_PATH);
        $result = CategoryGroup::cateLevel($data);
        $this->data = $result;
        $this->display();
    }
    
    public function addCate() {
        $pid = I('pid',0);
        $this->pid = $pid;
        $this->display();
    }
    
    public function cateHandle() {
        if (!IS_POST) $this->error('DONT.');
        
        if(M('cate')->add($_POST)) {
            $this->success('SUCCESS.');
        }
    }
    public function sort() {
       foreach($_POST as $k=>$v) {
            M('cate')->where(array('id'=>$k))->setField('sort',$v);
       }
       $this->redirect('index');
    }
}

