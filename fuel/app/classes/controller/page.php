<?php
class Controller_page extends Controller
{
	public function action_index()
	{
		return View::forge('page/index');
	}

	public function action_upload()
	{
		return Response::redirect('page/upload');
	}
}