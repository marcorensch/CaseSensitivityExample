<?php
/**
 * @package     ACME\Module\NiceExtension\Site\Field
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

namespace ACME\Module\NiceExtension\Site\Field;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Form\FormField;

class ConnectionField extends FormField
{
	protected $type = 'connection';
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

	private function buildHtml():string
	{
		return '<button id="ajax-btn" class="btn btn-primary w-100">Click me and check Console</button>';
	}
}