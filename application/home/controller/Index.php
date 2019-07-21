<?php

namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
   public function index(){
     print_r($_SERVER);

   }
}