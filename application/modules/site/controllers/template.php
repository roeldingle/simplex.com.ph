<?php

class Template extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->module('core/app');
	  $this->load->model('getClass');
	  $this->app->use_css('site/style');
   }
   
   public function header()
   {
      $this->app->header('site/header');
   }
   
     public function footer()
   {
      $this->app->footer('site/footer');
   }
   
     /*
   * gives the menu/module
   */
   public function get_menu()
   {
	$nav_menu = $this->getClass->select("tb_modules");
	
	/*get the current url*/
	$sData = '';
	$aUrl = explode('/',$_SERVER['REQUEST_URI']);
	/*loop the menu/module data*/
	foreach($nav_menu as $val){
		$sCurrent = ($aUrl[1] == $val['tm_name'])? "current" : ""; # get the module name
		$sData .= '<li class="fnt '.$sCurrent.'"><a href="'.base_url().$val['tm_action'].'">'.ucwords($val['tm_label']).'</a></li>';
	}
	return $sData;
	
   }
}