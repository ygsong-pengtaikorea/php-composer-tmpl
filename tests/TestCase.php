<?php namespace <App>;


class TestCase extends  \PHPUnit\Framework\TestCase {
	public function __call($name, $args) {
		$fn = sprintf("assert%s", ucfirst($name));
		if(method_exists($this, $fn)) {
			$this->$fn(...$args);
		}
	}
}