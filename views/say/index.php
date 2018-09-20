<?php
/**
 * Created by PhpStorm.
 * User: wenceslaus
 * Date: 9/10/18
 * Time: 12:04 PM
 */

use yii\helpers\Html;

?>

<div class="container" style="font-size: 36px;">
    <label>You said</label>: <?= Html::encode($model->message_text) ?>
</div>

