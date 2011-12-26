<?php

////////////////////////////////////////////////////////////////////////////
// $Id: grab-config.php,v 1.4 2003/08/12 20:01:30 claudiuc Exp $
//
// Description: Configuration file for GUI statistics grabbing program
//
////////////////////////////////////////////////////////////////////////////

// the msgfmt program path
$msgfmt="/usr/bin/msgfmt";

$branch="1.8"; //version of current stable (folder name of the checkout folder)
$wescampbranchversion="1.8";
$wescamptrunkversion="1.10";

$trunkbasedir="/usr/src/svn-checkouts/trunk/";
$branchbasedir="/usr/src/svn-checkouts/$branch/";
$extratbasedir="/usr/src/svn-checkouts/wescamp-i18n/branch-$wescamptrunkversion/"; //trunk addon server
$extrabbasedir="/usr/src/svn-checkouts/wescamp-i18n/branch-$wescampbranchversion/"; //branch addon server

//$packages = file_get_contents($basedir . "/po/DOMAINS");
//$packages = substr($packages, 0, strlen($packages)-1);
$corepackages = "wesnoth wesnoth-lib wesnoth-editor wesnoth-help wesnoth-units wesnoth-multiplayer wesnoth-tutorial";
//$packages = trim(system("grep ^SUBDIRS " . $basedir . "/po/Makefile.am | cut -d= -f2"));
$packages = "wesnoth wesnoth-lib wesnoth-editor wesnoth-help wesnoth-units wesnoth-multiplayer wesnoth-test wesnoth-anl wesnoth-tutorial wesnoth-manpages wesnoth-manual wesnoth-aoi wesnoth-did wesnoth-dm wesnoth-dw wesnoth-ei wesnoth-httt wesnoth-l wesnoth-low wesnoth-nr wesnoth-sof wesnoth-sotbe wesnoth-tb wesnoth-thot wesnoth-trow wesnoth-tsg wesnoth-utbs";

$ignore_langs = "sr@ijekavianlatin sr@latin sr@ijekavian";

//get unofficial packages
//trunk
$packarray = array();
$dir = opendir($extratbasedir); //trunk
while (false !== ($file = readdir($dir))) { 
	if($file[0] != '.'){
		$packarray[] = $file;
	}
}
closedir($dir);
sort($packarray);
$extratpackages = implode(" ", $packarray);

//branch
$packarray = array();
$dir = opendir($extrabbasedir); //branch
while (false !== ($file = readdir($dir))) { 
	if($file[0] != '.'){
		$packarray[] = $file;
	}
}
closedir($dir);
sort($packarray);
$extrabpackages = implode(" ", $packarray);

$ignore_langs = explode(" ", $ignore_langs);

//$languages = file_get_contents($basedir . "/po/LINGUAS");
//$languages = substr($languages, 0, strlen($languages)-1);

$prog="grab-stats";

?>
