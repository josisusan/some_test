<?php

class PagesController extends BaseController {
  protected $layout = "layouts.static";

	public function index()
	{
		$this->layout->content = View::make('statics.index');
	}

  
}

