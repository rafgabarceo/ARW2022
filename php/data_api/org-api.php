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
	private $full_info;

	function __construct(string $org_abbrev, string $hostname, string $username, string $password, string $database, int $port) { 
		
		$this->org_abbrev = $org_abbrev;
		$conn = new mysqli($hostname, $username, $password, $database, $port);
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

		$this->full_info = $orgInfo;
	}

	function get_info(){
		return $this->full_info;
	}
}
?>