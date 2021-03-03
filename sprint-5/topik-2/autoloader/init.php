<?php

spl_autoload_register(function ($class) {
    include 'bangundatar/' . $class . '.php';
});
