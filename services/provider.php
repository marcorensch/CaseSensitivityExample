<?php
/**
 * @package                                     Acme Nice Extension Demo
 *
 * @author                                      you
 * @copyright                                   Copyright(R) 2025
 * @license                                     GNU General Public License version 2 or later; see LICENSE.txt
 * @link                                        https://www.nx-designs.ch
 *
 * @var $container  Joomla\DI\Container         The DI container
 *
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class() implements ServiceProviderInterface
{
    public function register(Container $container): void
    {
        $container->registerServiceProvider( new ModuleDispatcherFactory('\\ACME\\Module\\NiceExtension') );
        $container->registerServiceProvider( new HelperFactory('\\ACME\\Module\\NiceExtension\\Site\\Helper') );
        $container->registerServiceProvider( new Module() );
    }
};