<?php
/* @var $this SiteController */
// writeTable_clients($result);
?>

<? $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'id',
    'itemsCssClass' => 'table-bordered items',
    'dataProvider' => $result_users,
    'columns'=>array(
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'first_name',
           'headerHtmlOptions' => array('style' => 'width: 100px')             
        ),
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'second_name',
           'headerHtmlOptions' => array('style' => 'width: 100px'),          
        ),
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'last_name',
           'headerHtmlOptions' => array('style' => 'width: 100px')             
        ),
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'purpose',
           'headerHtmlOptions' => array('style' => 'width: 100px')             
        ),
        array(
           'class' => 'editable.EditableColumn',
           'editable' => array(
                'type'       => 'date',
                'viewformat' => 'dd/mm/yyyy',
                'url' => $this->createUrl('site/update'),
			   'success' => 'js: function(response, newValue) {
			       if(!response.success) return response.msg;
			    }',
			   'options' => array(
			     'ajaxOptions' => array('dataType' => 'json')
			   ) 
            ) ,
           'name' => 'birth_date',
           'headerHtmlOptions' => array('style' => 'width: 100px'),
                       
        ),
        array(
           'class' => 'editable.EditableColumn',
           'editable' => array(
                'type'       => 'text',
            ) ,
           'name' => 'address',
           'headerHtmlOptions' => array('style' => 'width: 100px'),
                       
        ),
        array(
           'class' => 'editable.EditableColumn',
           'editable' => array(
                'type'       => 'text',
            ) ,
           'name' => 'post_index',
           'headerHtmlOptions' => array('style' => 'width: 100px'),
                       
        ),
        array(
           'class' => 'editable.EditableColumn',           
           'name' => 'id_manager',
           'editable' => array(
                'type'     => 'select',
                'source'   => Editable::source(Users::model()->findAll(), 'id', 'first_name'),
            ) ,
           'headerHtmlOptions' => array('style' => 'width: 100px'),
            //'source'    => Editable::source(array(1 => 'Status1', 2 => 'Status2')),
           //'source'    => Editable::source(Status::model()->findAll(), 'status_id', 'status_text'),
                       
        ),
        
         )
    ));
?>
