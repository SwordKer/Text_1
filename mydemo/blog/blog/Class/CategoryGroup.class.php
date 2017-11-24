<?php 

class CategoryGroup {
    
    static public function cateLevel($data,$pid = 0,$html = '&nbsp;&nbsp;---',$level = 0 ) {
        $arr = array();
        
        foreach($data as $v) {
            if ($v['pid']==$pid) {
                //if($pid)  $v['html'] = "---";
                $v['level'] = $level + 1;
                $v['html'] = str_repeat($html,$level);
                $arr[] = $v;
                $arr = array_merge($arr,CategoryGroup::cateLevel($data, $v['id'],$html,$v['level']));
            }
        }
        return $arr;
    }
    
    static public function cateChildGroup($data , $pid = 0) {
        $arr = array();
        
        foreach($data as $v) {
            if ($v['pid'] == $pid) {
                $v['child'] = CategoryGroup::cateChildGroup($data,$v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    
    static public function childForId($data,$id =0) {
        $arr = array();
        if(!$id) return;
        
        foreach($data as $v) {
            if($v['id'] == $id) {
                $arr[] = $v;
                $arr = array_merge($arr , CategoryGroup::childForId($data,$v['pid']));
            }
        }
        
        return $arr;
    }
    
    //父级id获取子级id
    static public function getChildId($data,$id = 0) {
        $arr = array();
        
        foreach($data as $v) {
            if($v['pid'] == $id) {
                   $arr[] = $v;
                   $arr = array_merge($arr,self::getChildId($data,$v['id']));
                }
            }
        return $arr;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>