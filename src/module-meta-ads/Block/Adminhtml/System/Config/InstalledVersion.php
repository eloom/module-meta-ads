<?php
/**
* 
* Meta Ads para Magento 2
* 
* @category     elOOm
* @package      Modulo Meta Ads
* @copyright    Copyright (c) 2025 elOOm (https://eloom.com.br)
* @version      1.0.0
* @license      https://opensource.org/licenses/OSL-3.0
* @license      https://opensource.org/licenses/AFL-3.0
*
*/
declare(strict_types=1);

namespace Eloom\MetaAds\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Module\ModuleResource;

class InstalledVersion extends Field {

	protected function _getElementHtml(AbstractElement $element) {
		$objectManager = ObjectManager::getInstance();
		$moduleResource = $objectManager->create(ModuleResource::class);

		$dbVersion = (string)$moduleResource->getDbVersion('Eloom_MetaAds');

		$element->setValue($dbVersion);

		return '<strong>' . $element->getEscapedValue() . '</strong> - [<a href="https://github.com/eloom/module-meta-ads/releases" target="_blank">' . __('Releases') . '</a>]';
	}
}
