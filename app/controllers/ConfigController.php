<?php

class ConfigController extends BaseController
{
	public function view()
	{
		$data = Config::all();

		return View::make('config.table')->with('data', $data);
	}

	public function add()
	{

	}

	public function edit()
	{

	}

	public function remove()
	{

	}
} 