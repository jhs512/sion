<?php
class EnvManager {
	static $currentEnv;

	static function init() {
	}

	static function getCurrentEnv() {
		if ( static::$currentEnv === null ) {
			static::$currentEnv = new Env($_SERVER['REQUEST_URI']);
		}

		return static::$currentEnv;
	}

	static function getDefaultUrl() {
		global $langCode;
		$langCodeLocal = $langCode;

		if ( empty($langCodeLocal) ) {
			$langCodeLocal = 'en';
		}

		return "/home/main";
	}

	static function getActionInfFromUrl($url) {
		list(, $controllerName, $actionName) = explode('/', $url);

		$inf = [];

		$inf['langCode'] = $langCode;
		$inf['controllerName'] = $controllerName;
		$inf['actionName'] = $actionName;

		return $inf;
	}
}

class Env {
	private $url;
	private $urlArgs;

	function __construct(String $url) {
		if ( empty($url) or $url == '/' ) {
			$url = EnvManager::getDefaultUrl();
		}

		$this->url = $url;
		$this->urlArgs = getUrlArgs($this->url);
	}

	function isMasterMode() {
		return isset($this->urlArgs['masterMode']);
	}

	function getLangCode() {
		$inf = EnvManager::getActionInfFromUrl($this->url);

		return $inf['langCode'];
	}
}

EnvManager::init();
