<?php
class MyfirstController extends Controller
{
  public function actionIndex()
  {
    // here is your code for this action
  }
 
  public function actionMyaction()
  {
    // here is your code for this action
    $this->render(‘myview’);
  }
 
  public function getEmployeeName()
  { 
 
  }
 
}
?>