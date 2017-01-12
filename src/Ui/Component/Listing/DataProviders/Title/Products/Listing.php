<?php

/**
 * Limesharp_Import extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Limesharp
 * @package   Limesharp_Import
 * @copyright 2016 Limesharp
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Claudiu Creanga
 */

namespace Limesharp\Import\Ui\Component\Listing\DataProviders\Import\Products;

class Listing extends \Magento\Ui\DataProvider\AbstractDataProvider
{
	public function __construct(
		$name,
		$primaryFieldName,
		$requestFieldName,
		\Limesharp\Import\Model\ResourceModel\Products\CollectionFactory $collectionFactory,
		array $meta = [],
		array $data = []
	) {
		parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
		$this->collection = $collectionFactory->create();
	}
}
