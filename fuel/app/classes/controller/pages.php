<?php
class Controller_Pages extends Controller
{
	public function action_index()
	{
		return View::forge('pages/index');
	}
}