<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $this->display();
    }
	public function add(){
		$Category = M('Category');
		$CateList = $Category->where('iscanuse=1')->order('porder asc')->select();
		$this->assign('CateList',$CateList);
        $this->display();
    }
	function doAdd(){
		dump($_POST);
	}
}