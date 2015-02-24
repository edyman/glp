<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'ASOCAM-GLP',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            $items=[
                ['label' => 'Inicio', 'url' => ['/site/index']],

                // ['label' => 'Acerca de ', 'url' => ['/site/about']],
                ['label' => 'Perfil', 'items' => [
                    ['label' => 'User', 'url' => ['/user']],
                    ['label' => 'Perfiles', 'url' => ['/profile']],

                ]
                ],

                ['label' => 'Evento', 'url' => ['/event']],
//                ['label' => 'Registrarse', 'url' => ['/site/about']],

                //['label' => 'Contacto', 'url' => ['/site/contact']],

                ['label' => 'Catálogo', 'items' => [
                    ['label' => 'Responsabilidad', 'url' => ['/responsibilitytype']],
                    ['label' => 'Institución', 'url' => ['/institutiontype']],
                    ['label' => 'Pais', 'url' => ['/country']],
                    ['label' => 'Tipos Eventos', 'url' => ['/eventtype']],
                    ['label' => 'Preguntas por Evento', 'url' => ['/eventquestion']],
                ]
                ],
//                ['label' => 'Registro', 'url' => ['/site/signup'],'visible' => [Yii::$app->user->isGuest]],
                Yii::$app->user->isGuest ?
                    ['label' => 'Ingresar', 'url' => ['/site/login']] :
                    ['label' => 'Salir (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']],
            ];

            if (Yii::$app->user->can('permission_admin'))
                $items[]=    ['label' => 'Roles', 'items' => [
                    ['label' => 'Asignaciones', 'url' => ['/admin']],
                    ['label' => 'Roles', 'url' => ['/admin/role']],
                    ['label' => 'Permisos', 'url' => ['/admin/permission']],

                ]
                ];

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $items,
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
