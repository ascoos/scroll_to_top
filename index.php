<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Scroll to Top Button
 * @subpackage         	: Main Frontend File
 * @source             	: /[BLOCKS PATH]/scroll_to_top/index.php
 * @fileNo             	: 
 * @version            	: 1.0.1
 * @created            	: 2012-01-02 17:50:00 UTC+3 
 * @updated            	: 2024-10-03 05:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $app;


$topElem	= $block->getParam('int', 'topElem', 100 );           // The position from the top where the scroll object will appear.
$animateSpeed	= $block->getParam('int', 'animateSpeed', 800 );  // The scrolling speed
$finalScrollTop	= $block->getParam('int', 'finalScrollTop', 0 );  // The final height from the top after scrolling
$theme	= $block->getParam('lstr', 'theme', 'default' );

$block->loadTheme($theme);

$script="jQuery(window).scrollToTop('#scrollToTop', {topElem:".$topElem.", animateSpeed:".$animateSpeed.", finalScrollTop:".$finalScrollTop."});";
$app->head->addJAScript($script);
echo "<a href=\"#\" id=\"scrollToTop\">".$block->getLangVar('scrolltop')."</a>";
?>