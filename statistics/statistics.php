<?php

/**
 * Statistics plugin
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 *  @copyright 2014 - 2015 Romanenko Sergey / Awilum
 *  @version 1.0.0
 *
 */

require_once PLUGINS_PATH . '/statistics/ShowStatistics.php';

Morfy::factory()->addAction('before_render', function () {
    global $statistics;
    $statistics = new ShowStatistics();
});

Morfy::factory()->addAction('after_render', function () {
    global $statistics;
    echo $statistics->showStat();
});
