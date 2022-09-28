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

	private $name;
	public $long_name;
	public $desc;
	public $mission;
	public $vision;
	public $logo_path;
	public $pub_path;
	public $fb_url;
	public $video_url;
	public $form_url;
	public $has_video;
	public $color_hex;
	public $slides;


	function __construct(string $org_name, string $hostname, string $username, string $password, string $database, int $port) { $name = $org_name;
		$this->name = $org_name;
		$conn = new mysqli($hostname, $username, $password, $database, $port);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$stmt = $conn->prepare("SELECT * FROM Org WHERE org_abbr=?");
		// Check if the statement is valid
		if($stmt)
		{
			// Bind variables to the query
			$stmt->bind_param("s", $this->name);
			// Execute the query
			$stmt->execute();
		} else{
			echo "Error in statement. Refer:" .$conn->error;
		}

		$orgInfo = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);

		print_r($orgInfo);
		// Unset the statement to ensure no memory leak. 

		unset($stmt);
	}

	function getOrgName() {
		return $this->name;
	}

	function getOrgLongName() {
		return 0;
	}

	function getOrgDesc() {
		return 0;
	}

	function getOrgMission() {
		return 0;
	}

	function getOrgVision() {
		return 0;
	}

	function getOrgLogo()
	{
		return 0;
	}

	function getOrgPub() {
		return 0;
	}

	function getOrgFB() {
		return 0;
	}

	function getOrgVideo() {
		return 0;
	}

	function getOrgForm() {
		return 0;
	}

	function getOrgColor() {
		return 0;
	}

	function getOrgSlides() {
		return 0;
	}
}
?>