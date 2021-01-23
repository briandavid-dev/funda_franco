<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use app\models\UsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuariosController implements the CRUD actions for Usuarios model.
 */
class UsuariosController extends Controller
{
	
	public $layout = 'panel';
	
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        	'access' => [
        		'class' => \yii\filters\AccessControl::className(),
        		'only' => ['create', 'update','admin', 'delete'],
        		'rules' => [
        				// allow authenticated users
        				[
        						'allow' => true,
        						'roles' => ['@'],
        				],
        				// everything else is denied
        		],
        	],
        ];
    }
    
    
    
    
    
    

    /**
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndex()
    {
    	
    	
    	
    	
        $searchModel = new UsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuarios model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuarios();
        
        
        if (isset ( $_POST ['Usuarios'] )) {
        	$model->attributes = $_REQUEST["Usuarios"];
        
        	$model->usuario_login = $model->usuario_email;
        	
        	date_default_timezone_set("UTC");
        	$now_time_UTC = date("Y-m-d H:i:s", time());
        	$model->usuario_fecha_creacion = $now_time_UTC;
        	$model->usuario_fecha_modificacion = $now_time_UTC;
        		
        	$password = $model->usuario_password;
        	
        	if ($model->validate ()){
        		$model->usuario_password = md5($model->usuario_password);
        		$model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
        	} else {
        		$model->usuario_password = $model->usuario_password;
        		$model->usuario_password_confirmacion = $model->usuario_password_confirmacion;
        	}
	        
        	
        	$model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
        	
	        if ($model->save()) {
	            return $this->redirect(['view', 'id' => $model->usuario_id]);
	        } 
	        
        }
        
        return $this->render('create', [
        		'model' => $model,
        ]);
        
    }

    /**
     * Updates an existing Usuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        
        if (isset ( $_POST ['Usuarios'] )) {
        	$model->attributes = $_REQUEST["Usuarios"];
       // var_dump($model->attributes);die();
        	$model->usuario_login = $model->usuario_email;
        	
        	date_default_timezone_set("UTC");
        	$now_time_UTC = date("Y-m-d H:i:s", time());
        	$model->usuario_fecha_creacion = $now_time_UTC;
        	$model->usuario_fecha_modificacion = $now_time_UTC;
        		
        	$password = $model->usuario_password;
        	
        	if ($model->validate ()){
        		$model->usuario_password = md5($model->usuario_password);
        		$model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
        	} else {
        		$model->usuario_password = $model->usuario_password;
        		$model->usuario_password_confirmacion = $model->usuario_password_confirmacion;
        	}
	        
        	
        	$model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
        	
	        if ($model->save()) {
	            return $this->redirect(['view', 'id' => $model->usuario_id]);
	        } 
	        
        }
        
        return $this->render('create', [
        		'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Usuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuarios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
