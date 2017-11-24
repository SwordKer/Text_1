<?php 
    import('TagLib');
    class TagLibNav extends TagLib {
        protected $tags = array(
            'nav' =>array('attr'=>'order','close'=>1),    
            'hot' =>array('attr'=>'limit'),        
        );
        
        public function _nav($attr,$content) {
            $attr = $this->parseXmlAttr($attr);
            $str =<<<str
<?php
    \$cate = M('cate')->order("{$attr['sort']}")->select();
     import('Class.CategoryGroup',APP_PATH);
     \$data = CategoryGroup::cateChildGroup(\$cate);
        foreach(\$data as \$v) : 
?>
str;
            $str.= $content;
            $str.="<?php endforeach; ?>";
            return $str;
        }
        
        public function _hot($attr,$content) {
            $attr = $this->parseXmlAttr($attr);
            $str =<<<str
<?php
            \$field = array('id','title','click');
            \$data = M('blog')->order('click DESC')->field(\$field)->limit({$attr['limit']})->select();
                foreach(\$data as \$v):
?>
str;
            
            $str.=$content;
            $str.='<?php endforeach;?>';
            return $str;
        }
    }

?>