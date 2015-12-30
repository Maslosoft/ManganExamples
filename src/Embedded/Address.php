<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\ManganExamples\Embedded;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;

/**
 * Address
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Address implements AnnotatedInterface
{

	public $city = '';
	public $street = '';
	public $home = 0;
	public $appartment = 0;

}
