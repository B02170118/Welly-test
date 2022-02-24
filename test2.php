<?php
include_once "stack.php";

function test2() {

    $stack = new stack();

    print_r($stack->push(1));
    print_r($stack->push(2)); 
    print_r($stack->push(3)); 
    print_r($stack->pop());
    print_r("\n");
    print_r($stack->size());
}