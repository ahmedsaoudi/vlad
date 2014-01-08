<?php
namespace ay\vlad\validator;

class Not_Empty extends \ay\vlad\Validator {
	protected
		$messages = [
			'is_empty' => [
				'{vlad.subject.name} cannot be empty.',
				'The input cannot be empty.'
			]
		];
	
	public function validate (\ay\vlad\Subject $subject) {
		$value = $subject->getValue();

		if (!is_null($value) && !is_string($value) && !is_int($value) && !is_float($value) && !is_bool($value) && !is_array($value) && !is_object($value)) {
			throw new \InvalidArgumentException('Invalid type given. String, integer, float, boolean or array expected');
		}

		if (is_null($value) || !preg_replace('/^\s+$/', '', $value)) {
			return 'is_empty';
		}
	}
}