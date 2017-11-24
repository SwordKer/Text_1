<?php 
    
class ListerAction extends Action {
    
    public function index() {
        import('ORG.Util.Page');
        $count = D('blogView')->count();
        
        $page = new Page($count,6);
        $limit = $page->firstRow.','.$page->listRows;
        $data = D('blogView')->limit($limit)->select();
        
        $this->page = $page->show();
        $this->result = $data;
        $this->display();
    }
}    

?>

