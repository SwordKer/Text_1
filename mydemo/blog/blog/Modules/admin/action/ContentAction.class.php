<?php 

class ContentAction extends CommonAction {
    public function index() {
        $this->display();
    }
    
    public function addCont() {
        $data  = M('cate')->order('sort')->select();
        import('Class.CategoryGroup',APP_PATH);
        $this->data = CategoryGroup::cateLevel($data,0,'&nbsp;&nbsp&nbsp;&nbsp');
        
        $this->attr = M('attr')->select();
        $this->display();
    }
    
    public function contHandle() {
        $data = array(
            'title'=> $_POST['title'],
            'cid'=>$_POST['cid'],
            'content'=>$_POST['content'],
            'time'=>time(),     
            'click'=>$_POST['click'],       
        );
        $db = M('blog_attr');
        if($bid = M('blog')->data($data)->add()) {
            if(isset($_POST['attr'])) {
                foreach($_POST['attr'] as $v) {
                    $db->data(array('bid'=>$bid,'cid'=>$v))->add();
                }
            }
        }
        $this->success('添加成功');
        
//         if (isset($_POST['attr'])) {
//             foreach($_POST['attr'] as $v) {
//                 $data['attr'][] = $v;
//             }
//         }
//有bug
//         D('BlogRelation')->relation(true)->add($data);

    }
    //博文列表
    public function liste() {
        $this->result = D('BlogRelation')->where(array('del'=>0))->relation(true)->select();
//         print_r($this->result);
        $this->display();
    }
    
    public function delete() {
        if(M('blog')->where(array('id'=>I('id')))->delete()) {
            $this->success('删除成功');
        }      
    }
    
}

?>