<?php
class Controller {

	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	function __construct($model, $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;

		$this->$model = new $model; //burada this.model dememin sebebi bu değişgene sadece bu klasın objesiyle mi eriştirmek istemem
		$this->_template = new Template($controller,$action); // passing reference changed;

	}

	function set($name,$value) {

		$this->_template->set($name,$value); // Template'in set'ine title All Items - My

	}
    function setError($name1,$value1){
        $this->_template->setErrors($name1,$value1);
    }

	function __destruct() {
			$this->_template->render();
	}

}
