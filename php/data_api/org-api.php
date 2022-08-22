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

	/**
	 * Returns a description string. 
	 * 
	 * @param string $orgname
	 * @return string
	 * 
	 */
	function getOrgDesc(string $orgname)
	{
		return 0;
	}

	/**
	 * 
	 * This is a wrapper function to get all functional assets of the organization.
	 * 
	 * 
	 * 
	 */
	function getOrgAssets(string $orgname)
	{
		return 0;
	}

	function getOrgLogo(string $orgname)
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