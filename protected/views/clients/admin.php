<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Clients', 'url'=>array('index')),
	array('label'=>'Create Clients', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clients-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление страницами</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView',
     array(
    	'id'=>'clients-grid',
    	'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
		'id',
		'id_manager',
		'first_name',
		'second_name',
		'last_name',
		'purpose',
		'birth_date',
		'address',
		'post_index',
    array(
        'class'=>'CButtonColumn',
    ),
	),
)); ?>
