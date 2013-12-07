<?php

require 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testFizzBuzzTo100()
    {
        for ($this->fizzBuzz->rewind(); $this->fizzBuzz->valid(); $this->fizzBuzz->next()) {
            if ($this->fizzBuzz->key() % 3 === 0 && $this->fizzBuzz->key() % 5 === 0) {
                $this->assertEquals('FizzBuzz', $this->fizzBuzz->current());
            } elseif ($this->fizzBuzz->key() % 3 === 0) {
                $this->assertEquals('Fizz', $this->fizzBuzz->current());
            } elseif ($this->fizzBuzz->key() % 5 === 0) {
                $this->assertEquals('Buzz', $this->fizzBuzz->current());
            } else {
                $this->assertEquals($this->fizzBuzz->key(), $this->fizzBuzz->current());
            }
        }
    }
}
