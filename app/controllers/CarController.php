<?php

class CarController extends BaseController

{	

	public function addCar(){
		return View::make('car.add');
	}

	public function _add()
	{
		$data = Input::all();

		
	}
}