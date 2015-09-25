<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// load libs
!version_compare(PHP_VERSION, '5.3.10', '=>') or die('Your host needs to use PHP 5.3.10 or higher to run JBlank Template');
require_once dirname(__FILE__) . '/libs/template.php';

/************************* runtime configurations *********************************************************************/
$tpl = JBlankTemplate::getInstance();
$tpl
    // enable or disable debug mode. Default in Joomla configuration.php
    //->debug(true)

    // include CSS files if it's not empty
    // compile less *.file to CSS and cache it
    // compile scss *.file to CSS and cache it (experimental!)
    ->css(array(
        // 'template.css', // from jblank/css folder
        'bootstrap.min.css', // from jblank/less folder
        'style.css',
        'animate.css',
        'font-awesome.min.css',
        // 'template.scss',// from jblank/scss folder
        // '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', // any external lib (you can use http:// or https:// urls)
    ))

    // include JavaScript files
    ->js(array(
        // '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', // any external lib (you can use http:// or https:// urls)
        // 'libs/jquery-1.x.min.js', // your own local lib
        'template.js',
    ))

    // exclude css files from system or components (experimental!)
    ->excludeCSS(array(
        // 'regex pattern or filename',
        'jbzoo\.css',
        'styles-template-lessgpeasy.css'
    ))

    // exclude JS files from system or components (experimental!)
    ->excludeJS(array(
        // 'regex pattern or filename',
        'mootools',             // remove Mootools lib
        'jbzootools',
        'com_zoo',
        'responsive',
        'media\/jui\/js',       // remove jQuery lib
        'media\/system\/js'
        // 'media\/jui\/js',       // remove jQuery lib
        // 'media\/system\/js',    // remove system libs
    ))

    // set custom generator
    ->generator(null)// null for disable

    // set HTML5 mode (for <head> tag)
    ->html5(true)

    // add custom meta tags
    ->meta(array(
        // template customization
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
        '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">',
        '<link rel="shortcut icon" href="/templates/jblank/favicon.png">',

        '<link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=cyrillic,cyrillic-ext,latin" rel="stylesheet" type="text/css">',

        // site verification examples
        '<meta name="google-site-verification" content="... google verification hash ..." />',
        '<meta name="yandex-verification" content="... yandex verification hash ..." />',
    ));

/************************* your php code below this line **************************************************************/

// mobile detect using (just for example!)
if ($tpl->isMobile()) {
    $tpl->css('media-mobile.less'); // css only for mobiles

} elseif ($tpl->isTablet()) {
    $tpl->css('media-tablet.less'); // css only for tablets
}

// USE IT ON YOUR OWN --> RISK <-- THIS IS EXPERIMENTAL FEATURES!
// After that all assets files will be included
/*
$tpl
    // merge css with compress (second arg)
    ->merge('css', true)
    // merge js with compress (second arg)
    ->merge('js', true);
*/
