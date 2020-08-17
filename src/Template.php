<?php

namespace Zamasaur\PhpTemplate;

/**
* Represents a template to include.
*/
interface Template
{    
	/**
	* Includes the file by replacing the strings defined in $searchArray with those defined in $replaceArray.
	* 
	* @param array $searchArray
	* @param array $replaceArray
	* 
	* @return string
	*/
	public function incorporate(array $searchArray, array $replaceArray);
	
	
	/**
	* Includes only once the file by replacing the strings defined in $searchArray with those defined in $replaceArray.
	* 
	* @param array $searchArray
	* @param array $replaceArray
	* 
	* @return string
	*/
	public function incorporateOnce(array $searchArray, array $replaceArray);
}
