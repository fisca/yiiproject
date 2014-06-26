<?php

class TestController extends Controller {

    public function actionIndex($name = NULL, $x = NULL) {
        $var = 'Hello ' . $name . ' ' . $x;
        $this->render("index", array("var" => $var));
    }

}
