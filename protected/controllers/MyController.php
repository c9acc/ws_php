<?php

class MyController extends Controller
{
    public function actionClients()
    {
      echo $this->Clients();
    }

    private function Clients()
    {
        return 'Clients';
    }

}






