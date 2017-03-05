<?php

class IndexController extends Yaf\Controller_Abstract {


	public function indexAction() {
	
		$mod = new UserModel();	
		$sql = 'select * from user';	
		$data = $mod->get_all($sql);
		$this->getView()->assign("data", $data);
	}
	
	function doLoginIndex(){
		$User = new UserModel();
		
	}
}
