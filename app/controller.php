<?php

abstract class Controller {

	/**
	 * Require a logged-in user
	 * @return int|bool FALSE or a User ID
	 */
	protected function _requireAuth() {
		//@TODO Implement this feature
	}

	/**
	 * Output JSON response and required headers
	 * @param mixed $response
	 */
	public function _json($response) {
		if(!headers_sent()) {
			header("Content-type: application/json");
		}
		echo json_encode($response);
	}

}
