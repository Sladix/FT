<?php 

class HomeController extends Controller{
	public function main()
	{
		$feelings = new DB\SQL\Mapper($this->f3->get('DB'), 'feelings');
		$this->set('title','Home');
		$this->set('content','home.htm');
	}
}