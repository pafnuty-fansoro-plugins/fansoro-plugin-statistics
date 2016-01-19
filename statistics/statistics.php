<?php

/**
 *  Statistics plugin for Fansoro
 *
 * @package    Fansoro
 * @subpackage Plugins
 * @author     Pavel Belousov / pafnuty
 * @version    3.1.0
 * @license    https://github.com/pafnuty-fansoro-plugins/fansoro-statistics/blob/master/LICENSE MIT
 *
 */

require_once PLUGINS_PATH . '/statistics/ShowStatistics.php';

Action::add(
	'plugins_loaded', function () {
	global $statistics;
	$statistics = new ShowStatistics();
}
);

Action::add(
	'after_page_rendered', function () {
	global $statistics;
	echo $statistics->showStat();
}
);
