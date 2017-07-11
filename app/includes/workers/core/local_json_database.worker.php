<?php

class Local_Json_Database
{

	/**
	 * Constructor
	 */
	protected function __construct($filename) {
		$this->filename = $filename;
	}

	protected function getConfig() {
		// Get the file path.
		$filepath = __DIR__ . '/../../../config/' . $this->filename . '.config.json';
		return json_decode(file_get_contents($filepath));
	}

	protected function getData($filename) {
		// Get the file path.
		$filepath = __DIR__ . '/../../../database/' . $filename . '.database.json';
		return json_decode(file_get_contents($filepath));
	}

}