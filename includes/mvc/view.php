<?php
namespace mvc;

class view extends \lib\view
{
	function _construct()
	{
		// define default value for global

		$this->data->site['title']  = T_("Dash");
		$this->data->site['desc']   = T_("Free PHP Framework & CMS!");
		$this->data->site['slogan'] = T_("The simple framework for php programmers ;)");

		$this->data->page['desc']   = $this->data->site['desc']. ' | '. $this->data->site['slogan'];

		$this->data->bodyclass      = 'unselectable';

		$this->include->css_ermile  = false;
		// $this->include->js_main  = false;
		$this->include->css         = false;
		// $this->include->js       = false;

		// if you need to set a class for body element in html add in this value
		$this->data->bodyclass      = null;

		if(method_exists($this, 'options'))
		{
			$this->options();
		}
	}


	/**
	 * [pushState description]
	 * @return [type] [description]
	 */
	function pushState()
	{

	}
}
?>