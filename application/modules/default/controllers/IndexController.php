<?php
	class IndexController extends Zend_Controller_Action{
		public function indexAction(){
			$data= array();
			
			$productData = array();
			$productData[] = array(
				'id' => 'PD1',
				'name' => 'product 1'
			);
			$productData[] = array(
				'id' => 'PD2',
				'name' => 'product 2'
			);
			
			$data['title'] = 'test';
			$data['products'] = $productData;
			$this->view->info = $data;
		}
	}