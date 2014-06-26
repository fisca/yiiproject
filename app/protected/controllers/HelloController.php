<?php

class HelloController extends Controller {

    function actionHelloWorld() {
        echo "Hello World from Yii";
    }

    function actionHi() {
        echo "Hi World from Yii";
    }

    function actionVariable() {
        $this->render("Variable", array(
            "x" => 10,
            "y" => 20,
            "msg" => "Hello Yii Framework"
        ));
    }

}
