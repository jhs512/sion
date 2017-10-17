<?php
require_once __DIR__ . '/custom/web_init.php';

$actArgs = &$_REQUEST;

$REQUEST_URI = $_SERVER['REQUEST_URI'];
list($REQUEST_URI, $QUERY_STR) = explode('?', $REQUEST_URI);

if ( in_array($REQUEST_URI, ['/', '/index.php']) ) {
	$REQUEST_URI = EnvManager::getDefaultUrl();
}

$FULL_REQUEST_URI = $REQUEST_URI . '?' . $QUERY_STR;

$actionInfFromUrl = EnvManager::getActionInfFromUrl($REQUEST_URI);

$controllerName = $actionInfFromUrl['controllerName'];
$actionName = $actionInfFromUrl['actionName'];

foreach ( [$controllerName, $actionName] as $val ) {
	if ( ctype_alnum($val) == false ) {
		echo 'ERROR : E1';
		exit;
	}
}

if ( $controllerName == 'star' ) {
	if ( isset($actArgs['type']) == false or empty($actArgs['type']) ) {
		$actArgs['type'] = 'global';
	}
}

$currentEnv = EnvManager::getCurrentEnv();

$actionTypeCode = 'show';

if ( substr($actionName, 0, 3) == 'get' ) {
	$actionTypeCode = 'exec';
}
else if ( substr($actionName, 0, 3) == 'exec' ) {
	$actionTypeCode = 'exec';
}

if ( $actionTypeCode == 'show' ) {
	$viewPath = __DIR__ . '/custom/view/' . $controllerName . '/' . $actionName . '.php';
	$headPath = __DIR__ . '/custom/view/common/head.php';
	$footPath = __DIR__ . '/custom/view/common/foot.php';

	require_once $headPath;
	require_once $viewPath;
	require_once $footPath;
}
else {
	$actionPath = __DIR__ . '/custom/api/' . $controllerName . '/' . $actionName . '.php';
	$beforeApiPath = __DIR__ . '/custom/api/common/before.php';
	$afterApiPath = __DIR__ . '/custom/api/common/after.php';

	require_once $beforeApiPath;
	require_once $actionPath;
	require_once $afterApiPath;
}
