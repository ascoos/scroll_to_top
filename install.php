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
 * @subpackage         	: Installation File
 * @source             	: /[BLOCKS PATH]/scroll_to_top/install.php
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

global $objInstaller;

// Adjust the installer to work at BLOCK and give the block that will handle
$objInstaller->setExtension('scroll_to_top', INS_BLOCK);

// We adjust the installer so that after installation, to take us or not part of the Block configuration.
$objInstaller->afterSetParams(false);

// If the block is not installed then run the installation.
if (!$objInstaller->isInstalled()) {
	// We create the path of the Block.
	$objInstaller->createPath();
	
	// If the installation files on the Server is successful
	if ( $objInstaller->extractPackage() )
	{
		// We export themes in internal path "fronts". !!!! Not Change for Blocks. !!!!
		$objInstaller->extractThemes('fronts');
		
		// We take the position id, show called "NOTHING".
		$block_pos = $objInstaller->getPosition('NOTHING');

		// We take the sort that will apply to the position.
		$block_order = $objInstaller->getOrderPosition('NOTHING');
	
		// Place the Block in the database.
		$objInstaller->addSQL("INSERT INTO #__blocks VALUES(NULL, '".$objInstaller->name."', '".$objInstaller->name."', '0', '0', '{\"en\":\"Scroll to Top Button\",\"el\":\"Πλήκτρο κύλισης στην αρχή της σελίδας\"}', '', '', '', '', ".$block_pos.", ".$block_order.", '', '0', '0', '0', '0', '{\"theme\":\"default\",\"topElem\":100,\"animateSpeed\":800,\"finalScrollTop\":0}');");
		
		// pour the settings from the installer.
		$objInstaller->clear();
		
	} else {
		// otherwise cancel the installation and pour the settings from the installer.
		$objInstaller->cancelInstallation();
	}
} else { // else pour the settings from the installer.
	$objInstaller->clear();
}
?>