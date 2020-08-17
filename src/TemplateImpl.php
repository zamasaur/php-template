<?php

namespace Zamasaur\PhpTemplate;

use Zamasaur\PhpTemplate\Template;

/**
* An implementation of {@link Template}.
*/
class TemplateImpl implements Template
{
	/** @internal */
	private $filename;
	
	/**
	* Constructor.
	*
	* @param string $filename
	*
	* @throws \InvalidArgumentException
	*
	*/
	public function __construct(string $filename)
	{
		$this->filename = $filename;
		if (!file_exists($this->filename)) {
			throw new \InvalidArgumentException('Failed opening the file.');
		}	
	}
	
	public function incorporate(array $searchArray, array $replaceArray)
	{
		ob_start();
		ob_start(
			function (string $buffer) use ($searchArray, $replaceArray) {
				return str_replace($searchArray, $replaceArray, $buffer);
			}
		);
		include $this->filename;
		ob_end_flush();
		return ob_get_flush();
	}
	
	public function incorporateOnce(array $searchArray, array $replaceArray)
	{
		ob_start();
		ob_start(
			function (string $buffer) use ($searchArray, $replaceArray) {
				return str_replace($searchArray, $replaceArray, $buffer);
			}
		);
		include_once $this->filename;
		ob_end_flush();
		return ob_get_flush();
	}
}
