<?php

use yii\helpers\Html;
use frontend\modules\site\Module;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-index-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        <?= Module::t('The above error occurred while the Web server was processing your request.') ?>
    </p>
    <p>
        <?= Module::t('Please contact us if you think this is a server error. Thank you.') ?>
    </p>

</div>