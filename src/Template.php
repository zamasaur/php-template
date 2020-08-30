<?php

namespace Zamasaur\PhpTemplate;

/**
* Represents a template to include.
*/
interface Template
{    
	/**
	* Includes the file by replacing the strings defined in $searchArray with those defined in $replaceArray.
	* It also return the output of the inclusion as a string.
	* 
	* @param array $searchArray
	* @param array $replaceArray
	* 
	* @return string
	*/
	public function incorporate(array $searchArray, array $replaceArray): string;
	
	
	/**
	* Includes only once the file by replacing the strings defined in $searchArray with those defined in $replaceArray.
	* It also return the output of the inclusion as a string.
	* 
	* @param array $searchArray
	* @param array $replaceArray
	* 
	* @return string
	*/
	public function incorporateOnce(array $searchArray, array $replaceArray): string;
}
