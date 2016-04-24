<?php
namespace website\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    // disable layout
    public $layout = false;

    public function actionIndex()
    {
        return $this->render('index');
    }
}