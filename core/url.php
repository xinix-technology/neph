<?php namespace Neph\Core;

class URL {
	static function theme($uri) {
		return static::base().'themes/'.Config::get('config/theme').'/'.$uri;
	}

	static function base() {
		return Config::get('config/url');
	}

	static function site($uri) {
		return Config::get('config/url').Config::get('config/index').$uri;
	}

	static function redirect($uri) {
		header('Location: '.static::site($uri));
		exit;
	}
}