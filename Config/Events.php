<?php namespace Adnduweb\Ci4_logs\Config;

use CodeIgniter\Events\Events;

Events::on('post_system', function () {
	service('audits')->save();
});
