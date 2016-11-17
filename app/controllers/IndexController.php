<?php

/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2016/11/16
 * Time: 下午9:19
 */

class IndexController extends  Controller
{
  public function index(){
    $user= WxUsers::first();
      print_r($user->toArray());
    $this->render();
  }
}