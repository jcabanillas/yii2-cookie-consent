<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/jcabanillas/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.5.0
*/

namespace jcabanillas\cookieconsent\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class CookieAsset extends AssetBundle
{
	/**
     * @inherit
     */
	public $sourcePath = '@bower/cookieconsent/build/';
	
	/**
     * @inherit
     */
	public $js=[
		'cookieconsent.min.js',
	];
	
	/**
     * @inherit
     */
	public $depends = [
		YiiAsset::class,
		BootstrapAsset::class,
		BootstrapPluginAsset::class,
    ];

}
