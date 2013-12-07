<?php

class FizzBuzz implements Iterator
{
    protected $items = [];

    public function __construct()
    {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $value = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $value = 'Fizz';
            } elseif ($i % 5 === 0) {
                $value = 'Buzz';
            } else {
                $value = $i;
            }

            $this->items[$i] = $value;
        }
    }

    public function rewind()
    {
        reset($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function current()
    {
        return current($this->items);
    }

    public function next()
    {
        next($this->items);
    }

    public function valid()
    {
        return false !== current($this->items);
    }
}
