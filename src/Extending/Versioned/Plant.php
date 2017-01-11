<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\ManganExamples\Extending\Versioned;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Mangan\Sanitizers\MongoObjectId;
use Maslosoft\Mangan\Traits\EntityManagerTrait;
use Maslosoft\Mangan\Traits\FinderTrait;
use Maslosoft\Mangan\Traits\I18NAbleTrait;
use Maslosoft\Mangan\Traits\Model\SimpleTreeTrait;
use Maslosoft\Mangan\Traits\OwneredTrait;
use MongoId;

/**
 * PlainPhpObject
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Plant implements AnnotatedInterface
{

	use I18NAbleTrait,
	  FinderTrait,
	  EntityManagerTrait,
	  OwneredTrait,
	  SimpleTreeTrait;
	// Use versioned trait here

	/**
	 * @Sanitizer(MongoObjectId)
	 * @see MongoObjectId
	 * @var MongoId
	 */
	public $_id;

	/**
	 * @I18N
	 * @var string
	 */
	public $name = '';

	public function __construct()
	{
		$this->initTree();
	}

}
