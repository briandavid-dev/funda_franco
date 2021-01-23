<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->usuario_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">

    <div class="box-body">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->usuario_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->usuario_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Si? ¿Quieres eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <?php 
					
						$homeUrl = Url::base(true).'/web/resources/AdminLTE/dist/img/avatars/';
						
						if(!empty($model->usuario_imagen_1)){
							$fotoAvatar = $homeUrl.$model->usuario_imagen_1;
					?>
						<img src='<?php print $fotoAvatar; ?>' height='150' >
					<?php 		
			 			}
					?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'usuario_id',
            'usuario_nombre',
            'usuario_apellido',
            //'usuario_login',
            //'usuario_password:ntext',
            //'usuario_fecha_creacion',
            [
            	'label' => Html::activeLabel($model, 'usuario_fecha_creacion'),
            	'value' => date('d-m-Y', strtotime($model->usuario_fecha_creacion))
        	],
            //'usuario_fecha_modificacion',
           // 'usuario_fecha_ultimo_acceso',
            'usuario_email:ntext',
            //'usuario_telefono_1',
            //'usuario_telefono_2',
            //'usuario_direccion:ntext',
            //'usuario_activo',
            //'usuario_online',
            'usuario_perfil',
            //'usuario_imagen_1:ntext',
            //'usuario_estado',
            //'usuario_mensaje_publico',
            //'usuario_genero',
            //'usuario_fecha_nacimiento',
            //'authKey:ntext',
            //'accessToken:ntext',
        ],
    ]) ?>
    
 
    
    
	</div>
</div>
