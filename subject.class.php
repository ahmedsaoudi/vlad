<?php
namespace ay\vlad;

/**
 * Subject represents the result of a selector lookup in the provided input.
 */
class Subject {
	private
		$input,
		$selector,
		$name,
		$value,
		$found;

	public function __construct (Input $input, Selector $selector, $name, $value, $found) {
		$this->input = $input;
		$this->selector = $selector;
		$this->name = $name;
		$this->value = $value;
		$this->found = $found;
	}

	public function getInput () {
		return $this->input;
	}

	/**
	 * @return string
	 */
	public function getSelector () {
		return $this->selector;
	}

	/**
	 * @return string
	 */
	public function getName () {
		return $this->name;
	}

	/**
	 * Return value resolved from the $input using the $selector.
	 *
	 * @return mixed
	 */
	public function getValue () {
		return $this->value;
	}

	/**
	 * Indicates whether the selector matched a variable in the input.
	 * If variable is not found, then $found is false and subject $value is null.
	 *
	 * @return boolean
	 */
	public function isFound () {
		return $this->found;
	}
}