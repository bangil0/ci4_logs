<?php namespace Spreadaurora\Ci4_logs\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Database\ConnectionInterface;

class Services extends BaseService
{
    public static function audits(BaseConfig $config = null, bool $getShared = true)
    {
		if ($getShared):
			return static::getSharedInstance('audits', $config);
		endif;

		// If no config was injected then load one
		// Prioritizes app/Config if found
		if (empty($config))
			$config = config('Audits');

		return new \Spreadaurora\Ci4_logs\Audits($config);
	}
}
