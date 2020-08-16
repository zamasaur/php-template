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
	* @return void
	*/
	public function _include(array $searchArray, array $replaceArray);
	
	
	/**
	* Includes only once the file by replacing the strings defined in $searchArray with those defined in $replaceArray.
	* 
	* @param array $searchArray
	* @param array $replaceArray
	* 
	* @return void
	*/
	public function _includeOnce(array $searchArray, array $replaceArray);
}
