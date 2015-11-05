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

	/**
	 * @Label('First name')
	 * @var string
	 */
	public $firstName = '';

	/**
	 * @Label('Last name')
	 * @var string
	 */
	public $lastName = '';

	/**
	 * @Label('E-mail')
	 * @var string
	 */
	public $email = '';

	/**
	 * @Label('Account activated')
	 * @Renderer('Bool')
	 * @var string
	 */
	public $active = false;

	public function load()
	{
		// Load if not items
		if ($this->count() == 0)
		{
			$this->reset();
		}

		// Find any model
		$model = $this->find();
		$time = $model->_id->getTimestamp() + (24 * 60 * 60);

		// Reset each day
		if (time() > $time)
		{
			$this->reset();
		}
		return $this;
	}

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
			$model->save();
		}
		return $this;
	}

}
