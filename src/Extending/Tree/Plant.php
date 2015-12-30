<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Maslosoft\ManganExamples\Extending\Tree;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Mangan\Sanitizers\MongoObjectId;
use MongoId;

/**
 * PlainPhpObject
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Plant implements AnnotatedInterface
{

	use \Maslosoft\Mangan\Traits\I18NAbleTrait,
	  \Maslosoft\Mangan\Traits\FinderTrait,
	  \Maslosoft\Mangan\Traits\EntityManagerTrait,
	  \Maslosoft\Mangan\Traits\OwneredTrait,
	  \Maslosoft\Mangan\Traits\Model\SimpleTreeTrait;

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
