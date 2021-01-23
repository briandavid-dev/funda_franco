<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FundacionAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'web/css/site.css',
    	 	
    		'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700',
    		'http://fonts.googleapis.com/css?family=Dosis:400,700',
    		'themes/fundacion/html/assets/css/bootstrap.min.css',
    		'themes/fundacion/html/assets/css/font-awesome.min.css',
    		'themes/fundacion/html/assets/css/owl.carousel.css',
    		'themes/fundacion/html/assets/css/style.css',
    ];
    public $js = [
    		'themes/fundacion/html/assets/js/modernizr-2.6.2.min.js',
    		'//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
    		'themes/fundacion/html/assets/js/owl.carousel.min.js',
    		'themes/fundacion/html/assets/js/main.js',
    		'themes/fundacion/html/assets/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}



/*

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
<!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

*/
