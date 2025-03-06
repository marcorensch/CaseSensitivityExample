<?php
/**
 * @package                                     Acme Nice Extension Demo
 *
 * @author                                      you
 * @copyright                                   Copyright(R) 2025
 * @license                                     GNU General Public License version 2 or later; see LICENSE.txt
 * @link                                        https://www.nx-designs.ch
 *
 */

namespace ACME\Module\NiceExtension\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Factory;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\Registry\Registry;

defined('_JEXEC') or die;

class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
	use HelperFactoryAwareTrait;

	protected function getLayoutData(): array
	{
		$params = new Registry($this->module->params);

		$data = parent::getLayoutData();

		if (!is_array($data))
		{
			Factory::$application->enqueueMessage('Error: Could not load module data', 'error');

			return [];
		}

		$data['debug'] = $params->get('debug', 0);

		return $data;
	}
}