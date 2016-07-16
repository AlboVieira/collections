<?php

namespace Collections\Contract;

interface CollectionContract
{
    public function add($element, $key = null);
    public function count();
    public function contains($element);
    public function get($key);
    public function all();
    public function remove($key);
    public function clear();
    public function isEmpty();
    public function toArray();
    public function first();
    public function last();
    public function filter(\Closure $fn);
}
