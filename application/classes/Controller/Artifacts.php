<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Artifacts extends Controller_Gui {

	public function action_index()
	{
		$this->page_title = 'Artifacts';
		$this->current_page = 'artifacts';
		
		$this->template->content = View::factory('gui/artifacts/main');
	}

} // End Welcome
