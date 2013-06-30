<?php
	class ProductsController extends Zend_Controller_Action{
		public function indexAction(){
			$baseurl = $this->_request->getbaseurl();
			$this->view->baseurl = $baseurl;
		}
		public function abcAction(){
			//$this->getHelper('viewRenderer')->setNoRender();
			//echo 'test tum lum';
		}
	}