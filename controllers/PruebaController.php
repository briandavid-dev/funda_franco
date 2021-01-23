<?php


	namespace app\controllers;
	
	class PruebaController extends \yii\rest\ActiveController {
		
		/**
		 * 
		 * esta es una prueba de una API REST
		 * 
		 * si queremos las respuestas json tenemos que aplicar en config/web.php
		 * parsers en component - request
		 * se agrego
		 * 'parsers' => [
        			'application/json' => 'yii\web\JsonParser'
        	]
        	
        	y se agreo al urlManager
        	 'rules' => [
            		[
            				'class' => 'yii\\rest\\UrlRule',
            				'controller' => 'pruebaApi',
            				'tokens' => [
            						'{id}' => '<id:\\w+>',
            						]
            		]
            ],
		 * 
		 * @var string
		 */
		
		public $modelClass = "app\models\Usuarios";
		
		
		
		
	}