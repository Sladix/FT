<?php 

class HomeController extends Controller{
	public function main()
	{
		$feelings = new DB\SQL\Mapper($this->f3->get('DB'), 'feelings');
		
		$this->set('title','Home');
		$this->set('content','home.htm');
		$this->set('feelings',Feelings::$FEELINGS);
		$this->render();
	}

	public function add()
	{
		$feeling = new DB\SQL\Mapper($this->f3->get('DB'), 'feelings');
		$feeling->copyFrom('POST',function($val){
			return array_intersect_key($val, array_flip(array('type','intensity','details')));
		});
		$feeling->insert();

	}
}