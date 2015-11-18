<?php

/**
 *  Statistics plugin for Morfy
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 *  @version 2.0.0
 *  @license https://github.com/pafnuty/morfy-statistics/blob/master/LICENSE MIT
 *
 */

require_once PLUGINS_PATH . '/statistics/ShowStatistics.php';

Morfy::addAction('plugins_loaded', function () {
    global $statistics;
    $statistics = new ShowStatistics();
});

Morfy::addAction('after_render', function () {
    global $statistics;
    echo $statistics->showStat();
});
