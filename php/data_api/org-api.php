<?php
/**
 * 
 * This file contains the necessary functions to locate organization data.
 * Each function will query the database through PHP's built-in mysqli interface. Additionally,
 * functions present in this php file will automatically sanitize the input through the "sanitizeInput" function. 
 * 
 * NOTE: Please do not attempt to contact the database directly from the front-end. Only use this API.
 * 
 * 
 */
declare(strict_types=1);


/**
 * 
 * fetchARWAPI contians the necessary functions to access information from the database. 
 */
class fetchARWAPI {

	private $org_abbrev;
	private $hostname;
	private $username;
	private $password;
	private $database;
	private $port;

	function __construct(string $org_abbrev, string $hostname, string $username, string $password, string $database, int $port) { 
		
		$this->org_abbrev = $org_abbrev;
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->port = $port;
	}

	function get_info(){
		$conn = new mysqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$stmt = $conn->prepare("SELECT * FROM Org WHERE org_abbr=?");

		// Check if the statement is valid
		if($stmt)
		{

			// Bind variables to the query
			$stmt->bind_param("s", $this->org_abbrev);
			// Execute the query
			$stmt->execute();

		} else {
			echo "Error in statement. Refer:" .$conn->error;
		}

		$orgInfo = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
		return $orgInfo;
	}

	// Takes in groupid. Refer to table.:w

	function get_group_info($id){
		$conn = new mysqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$stmt = $conn->prepare("SELECT Org.org_id, Org.org_name, Org.org_path_to_logo, OrgGroup.group_acrn FROM Org INNER JOIN OrgGroup ON Org.group_id=OrgGroup.group_id WHERE Org.group_id=?");
		if($stmt){
			$stmt->bind_param("i", $id);
			$stmt->execute();
		} else {
			echo "Error in statement. Refer: ".$conn->error;
		}
		$orgInfo = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $orgInfo;
	}

	// Takes the abbreviation of the org in question.
	function get_org_slides($abbrev){
		$conn = new mysqli($this->hostname, $this->username, $this->password, $this->database, $this->port);
		if ($conn -> connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$stmt = $conn->prepare("SELECT orgs_path_0, orgs_path_1, orgs_path_2, orgs_path_3, orgs_path_extra FROM OrgSlides INNER JOIN Org ON Org.org_id=OrgSlides.org_id WHERE Org.org_abbr=?");
		if($stmt){
			$stmt->bind_param("s", $abbrev);
			$stmt->execute();
		} else {
			echo "Error in statement. Refer: ".$conn->error;
		}
		return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	}
}
?>