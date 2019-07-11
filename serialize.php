<?php

$data = ['id'=>1,'age'=>null,'name'=>'customer'];

print_r(serialize($data));

// php 5
a:3:{s:2:"id";i:1;s:3:"age";N;s:4:"name";s:8:"customer";}


// php 7
// a:3:{s:2:"id";i:1;s:3:"age";N;s:4:"name";s:8:"customer";}