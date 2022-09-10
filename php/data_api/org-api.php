<?php
/**
 * 
 * This file contains the necessary functions to locate organization data.
 * Each function will query the database through PHP's built-in mysqli interface. Additionally,
 * functions present in this php file will automatically sanitize the input through the "sanitizeInput" function. 
 * 
 * NOTE: Please do not attempt to contact the database directly from the front-end.
 * 
 * 
 */
declare(strict_types=1);


/**
 * 
 * fetchARWAPI contians the necessary functions to access information from the database. 
 */
class fetchARWAPI {

	private string $name;
	private string $long_name;
	private string $desc;
	private string $mission;
	private string $vision;
	private string $logo_path;
	private string $pub_path;
	private string $fb_url;
	private string $video_url;
	private string $form_url;
	private bool $has_video;
	private string $color_hex;
	private $slides;


	function __construct(string $org_name, string $hostname, string $username, string $password, string $database, int $port)
	{
		$conn = new mysqli($hostname, $username, $password, $database, $port);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$name = $org_name;

		// Insert SQL fetch code
	}

	function getOrgName() {
		return 0;
	}

	function getOrgLongName() {
		return 0;
	}

	function getOrgDesc() {
		return 0;
	}

	function getOrgMission() {

	}

	function getOrgLogo()
	{
		return 0;
	}

	/**
	 * 
	 * Takes in the user-input and the query to execute a mysqli prepare statement routine. 
	 * Function returns the query information. This function is private and is not exposed externally.
	 * @param string user-input
	 * @param string query
	 * @return object
	 * 
	 */
	private function sanitizeInput(string $input, string $query)
	{
		return 0; 
	}

}
?>