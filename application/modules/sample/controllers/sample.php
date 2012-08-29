<?php

class Sample extends MX_Controller
{
   public function __construct()
   {
      parent::__construct();   
      $this->load->module('core/app');	  
      $this->load->module('site/template');	 
      
   }
   
   public function index()
   {
      $this->template->header();
	  $this->app->content('sample/v_sample');
	  $this->template->footer();
	  
   }
}