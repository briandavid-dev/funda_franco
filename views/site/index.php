<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::$app->params['panelClienteNombre'];
?>
<div class="site-index">
	<div>&nbsp;</div>
	<?php if(!Yii::$app->user->isGuest){ ?>
    <div class="jumbotron">
        <p class="lead">Hola <?php print Yii::$app->user->identity->usuario_nombre; ?>, ¿Cómo estas?</p>
        <p><a class="btn btn-lg btn-success" href="<?php print Url::to(['usuarios/create']);?>">Entrar al panel administrativo</a></p>
    </div>
    <?php } else { ?>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <?php } ?>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 text-center">
                <p> 
                <img class="" alt="<?php print Yii::$app->params['panelClienteNombre']; ?>" title="<?php print Yii::$app->params['panelClienteNombre']; ?>" src="<?php print Url::base(true).'/web/resources/images/logos/logo.png'; ?>" style="max-width: 100%; width: 500px;">
                <br><br>
                <img class="" alt="<?php print Yii::$app->params['panelClienteNombre']; ?>" title="<?php print Yii::$app->params['panelClienteNombre']; ?>" src="<?php print Url::base(true).'/web/resources/images/logos/muypronto.png'; ?>" style="max-width: 100%; width: 300px;">
				</p>
            </div>
        </div>

    </div>
</div>
