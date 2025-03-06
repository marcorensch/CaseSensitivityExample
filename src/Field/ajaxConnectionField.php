<?php
/**
 * @package     ACME\Module\NiceExtension\Site\Field
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

namespace ACME\Module\NiceExtension\Site\Field;

use Joomla\CMS\Factory;
use Joomla\CMS\Form\FormField;

class ajaxConnectionField extends FormField
{
	protected $type = 'ajaxConnection';
	protected function getInput():string
	{
		$this->addAssets();
		return $this->buildHtml();
	}

	private function addAssets():void
	{
		$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
		$wr = $wa->getRegistry();
		$wr->addRegistryFile('/media/mod_niceextension/joomla.asset.json');
		$wa->useScript('mod_niceextension.js.field.ajax');
	}

	private function buildHtml()
	{
		return '<button id="ajax-btn" class="btn btn-primary w-100">Click me and check Console</button>';
	}
}