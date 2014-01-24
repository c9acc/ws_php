<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id,
);

//$this->menu=array(
//	array('label'=>'List Clients', 'url'=>array('index')),
//	array('label'=>'Create Clients', 'url'=>array('create')),
//	array('label'=>'Update Clients', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Clients', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Clients', 'url'=>array('admin')),
//);
//?>

<h1>Просмотр #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_manager',
		'first_name',
		'second_name',
		'last_name',
		'purpose',
		'birth_date',
		'address',
		'post_index',
	),
)); ?>
