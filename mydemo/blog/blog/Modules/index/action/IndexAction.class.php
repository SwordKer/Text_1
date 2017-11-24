<?php 
    
    class IndexAction extends Action {
        
        public function index() {
           import('Class.CategoryGroup',APP_PATH);
           //判断有无缓存文件
           if(!$arr = S('index_blog')){
               $result = M('cate')->select();
               $res = M('cate')->where(array('pid'=>0))->select();
               foreach($res as $r) {
                   $d = CategoryGroup::getChildId($result,$r['id']);
                   $cate = M('cate')->where(array('id'=>$r['id']))->field('name')->select();
                   $data['name'] = $cate[0]['name'];
                   $ins = array();
                   foreach($d as $v) {
                       $ins[] = $v['id'];
                   }
                   $ins[] = $r['id'];
                   $data['text'] =  M('blog')->where(array('cid'=>array('in',$ins)))->field(array('title','time','click'))->select();
                   $arr[] = $data;
                   unset($ins);
                   unset($data);
           }
                   //缓存十秒
                   S('index_blog',$arr,10);
           }
           $this->blog = $arr;
           $this->display();
        }
    }

?>