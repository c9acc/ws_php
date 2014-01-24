<?php
/* @var $this UsersController */
/* @var $model Users */

//public function actionUpdateuser()
//{
//    $es = new EditableSaver('users');
//    $es->onBeforeUpdate = function($event) {
//        $event->sender->setAttribute('updated_at', date('Y-m-d H:i:s'));
//    };
//    $es->update();
//}
//
//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Users', 'url'=>array('index')),
//	array('label'=>'Create Users', 'url'=>array('create')),
//	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Users', 'url'=>array('admin')),
//);
//?>

<h1>Update Users <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>