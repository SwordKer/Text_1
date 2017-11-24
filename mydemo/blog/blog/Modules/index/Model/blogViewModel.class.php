<?php 

class blogViewModel extends ViewModel {
    protected $viewFields = array(
        'blog'=>array(
            'title','content','cid','click','time',
            '_type'=>'LEFT',
        ),
        'cate'=>array(
            'name','_on'=>'blog.cid=cate.id',
        ),
    );
}