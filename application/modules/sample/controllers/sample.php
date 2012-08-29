<?php

class Sample extends MX_Controller
{
   private $sModule;
   
   public function __construct()
   {
      parent::__construct();   
      $this->load->module('core/app');	  
      $this->load->module('site/template');	 
	  
	  $this->sModule = strtolower(__CLASS__);
      
   }
   
   public function index()
   {
      $this->template->header();
	  $this->app->content($this->sModule.'/v_'.$this->sModule);
	  $this->template->footer();
	  
   }
}