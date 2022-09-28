<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class StaticController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('site');
    } 

    public function index()
    {
        //home
    }

    public function about()
    {
        //home
    }
}