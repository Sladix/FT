<?php 

class Controller{
	protected $layout;
	protected $f3;

	public function __construct($f3){
		$this->f3 = $f3;
	}
	public function render($template,$title)
	{
		$this->set('title',$title);
		$this->set('content',$template.'.htm');
	}
	public function set($key,$val){
		$this->f3->set($key,$val);
	}
	public function afterroute()
	{
		echo Template::instance()->render('layout.htm');
	}

}