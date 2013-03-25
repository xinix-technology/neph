<?php namespace Neph;

class Error {
	public static function exception($exception, $trace = true) {
		$response = Response::error(500, null, array('exception' => $exception));
		$response->send();
	}

	public static function native($code, $error, $file, $line) {
		if (error_reporting() === 0) return;
		$exception = new \ErrorException($error, $code, 0, $file, $line);

		static::exception($exception);
	}
}