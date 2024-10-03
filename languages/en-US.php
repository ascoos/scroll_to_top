<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ***********************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     : 24.0.0                                                    *
 * @ASCOOS-CATEGORY    : Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                         *
 * @ASCOOS-SITE        : www.ascoos.com                                            *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ***********************************************************************************
 *
 * @package            : Scroll to Top Button
 * @subpackage         : English Languages (en, en-US)
 * @source             : /[BLOCKS PATH]/scroll_to_top/languages/en-US.php
 * @fileNo             : 
 * @version            : 1.0.1
 * @created            : 2012-01-02 17:50:00 UTC+3
 * @updated            : 2024-10-03 05:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * @translator	       :
 * @translatorSite     :
 * @translatorCreated  :
 * @translatedUpdated  : 
*/

class TBlock_scroll_to_top_Language extends TObject
{
	public $blockname = "Icon, scroll to top";
	public $scrolltop = "Scroll to top";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "DROGIDIS CHRISTOS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "With this block, we create a button to scroll the page to the beginning, at the top.";

	public $APL_paramgroup_general_label = "▼ &nbsp; General Configuration Options";
	public $APL_paramgroup_general_label_info = "<strong>GENERAL OPTIONS PARAMETERS</strong><br />--------------------------------------<br /><br />In this context you can choose from several general parameters and dynamically configure the block";
	public $APL_theme_label = "Theme of appearance of Block";
	public $APL_theme_placeholder = "Select theme of appearance of block";
	public $APL_theme_desc = "<strong>THEME OF APPEARANCE OF BLOCK</strong><br />--------------------------------------<br /><br />Select the theme that will be implemented block &laquo;%s&raquo;.<br /><br />Each block has at least a predetermined theme, called &laquo;Default&raquo;";
	public $APL_topElem_label = "Distance to top";
	public $APL_topElem_desc = "<strong>DISTANCE TO TOP</strong><br />--------------------------------------<br /><br />The position from the top where the scroll object will appear.";	
	public $APL_animateSpeed_label = "Scrolling speed";
	public $APL_animateSpeed_desc = "<strong>SCROLLING SPEED</strong><br />--------------------------------------<br /><br />The scrolling speed";
	public $APL_finalScrollTop_label = "Distance to Top (After scrolling)";
	public $APL_finalScrollTop_desc = "<strong>DISTANCE FROM TOP</strong><br />--------------------------------------<br /><br />The final distance from the top after rolling.";
}
?>