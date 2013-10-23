<?php

class EntityController extends BaseController

{	

	public function addCar(){
		return View::make('car.add');
	}

	public function _add()
	{
		$data = Input::all();

		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}
}