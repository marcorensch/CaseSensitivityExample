<?php
/**
 * @package     ACME\Module\NiceExtension\Site\Helper
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

namespace ACME\Module\NiceExtension\Site\Helper;

use Joomla\CMS\Factory;

class NiceextensionHelper
{
	/** THIS Version works also on servers where case sensitivity is required */
	public function responseToCallAjax()
	{
		$input = Factory::getApplication()->getInput();
		$json = $input->get('data','{}','RAW');
		$data = json_decode($json);
		if (json_last_error() !== JSON_ERROR_NONE) {
			$error = array("success" => false, "msg" => json_last_error_msg() );
			echo json_encode($error);
			Factory::getApplication()->close();
		}
		$data->response = "using NiceextensionHelper";
		echo json_encode($data);
		Factory::getApplication()->close();
	}
}