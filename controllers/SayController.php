<?php
/**
 * Created by PhpStorm.
 * User: wenceslaus
 * Date: 9/20/18
 * Time: 8:59 AM
 */

namespace app\controllers;

use app\models\SayForm;
use Yii;
use yii\web\Controller;

class SayController extends Controller
{

    public function actionIndex()
    {
        $model = new SayForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('index', ['model' => $model]);
        }
    }

}