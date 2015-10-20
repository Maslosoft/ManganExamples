<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\ManganExamples;

use Faker\Factory;
use Maslosoft\Mangan\Document;

/**
 * ExampleUser
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class ExampleUser extends Document
{

	public $firstName = '';
	public $lastName = '';
	public $email = '';
	public $active = false;

	public function reset()
	{
		$faker = Factory::create();

		$this->deleteAll();

		for ($i = 0; $i < 10; $i++)
		{
			$model = new ExampleUser();
			$model->firstName = $faker->firstName;
			$model->lastName = $faker->lastName;
			$model->email = $faker->email;
			$model->active = $faker->boolean();
		}
	}

}
