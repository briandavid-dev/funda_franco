<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
	<div class="col-md-12">
		<div class="box">
		    		

		<div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		<div class="box-header">
		    <p>
		        <?= Html::a('Crear', ['create'], ['class' => 'btn btn-success']) ?>
		    </p>
		    <?= GridView::widget([
		        'dataProvider' => $dataProvider,
		        'filterModel' => $searchModel,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],
		
		            //'usuario_id',
		            'usuario_nombre',
		            'usuario_apellido',
		            //'usuario_login',
		            //'usuario_password:ntext',
		            // 'usuario_fecha_creacion',
		            // 'usuario_fecha_modificacion',
		            // 'usuario_fecha_ultimo_acceso',
		             'usuario_email:ntext',
		            // 'usuario_telefono_1',
		            // 'usuario_telefono_2',
		            // 'usuario_direccion:ntext',
		             'usuario_activo',
		            // 'usuario_online',
		             'usuario_perfil',
		            // 'usuario_imagen_1:ntext',
		            // 'usuario_estado',
		            // 'usuario_mensaje_publico',
		            // 'usuario_genero',
		            // 'usuario_fecha_nacimiento',
		            // 'authKey:ntext',
		            // 'accessToken:ntext',
		
		            ['class' => 'yii\grid\ActionColumn'],
		        ],
		    ]); ?>
		    
		      </div>


		</div>
	</div>
</div>
