<?php
	$url = isset($_GET['url']) && $_GET['url'] != null ? strtolower($_GET['url']) :'index/index';

	$url = explode('/',$url);
	$controllerName= $url[0];
	$actionName = (isset($url[1]) ? $url[1] : 'index') .'Action';
	$params = count($url)>2 ? array_slice($url,2-count($url)) : [];
	
	if (file_exists('../Controllers/'. $controllerName .'.php')) {

		require_once '../Controllers/'. $controllerName .'.php';
		$controllerClassName = ucfirst($controllerName);
		$ctrl = new $controllerClassName();

		if (method_exists($ctrl, $actionName)) {
			call_user_method_array($actionName, $ctrl,$params);	
		} else
			echo 'error: action ' .$actionName . ' does not exist!';

	}else{
		echo '404: Controller '.$controllerName. ' does not exist';
	}
