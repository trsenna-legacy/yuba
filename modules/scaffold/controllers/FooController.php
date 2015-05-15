<?php

namespace app\modules\scaffold\controllers;

use app\modules\scaffold\models\Foo;
use yii\web\Controller;

class FooController extends Controller
{
    public function actionIndex()
    {
        $foos = array();
        foreach ( range( 1, 6 ) as $id ) {
            $foos[ ] = Foo::buildFromId( $id );
        }

        return $this->render( 'index', [
            'foos' => $foos,
        ] );
    }

    public function actionShow()
    {
        $request = \Yii::$app->request;

        $foo = Foo::buildFromId(
            $request->get( 'id' )
        );

        return $this->render( 'show', [
            'foo' => $foo
        ] );
    }
}