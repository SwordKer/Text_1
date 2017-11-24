<?php 
class BlogRelationModel extends RelationModel {
     protected $tableName = 'blog';

     protected $_link = array(
          'attr' => array(
              'mapping_type'=> MANY_TO_MANY,
              'foreign_key'=>'bid',
              'relation_foreign_key'=>'cid',
              'relation_table'=>'blog_attr',
          ),
          'cate' => array(
               'mapping_type'=>BELONGS_TO,
               'foreign_key'=>'cid',
               'mapping_fields'=>'name'
          ) 
     );
    
}
    

?>