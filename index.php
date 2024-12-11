<?php

function names(...$names){
    foreach($names as $name){
        echo "Hello, $name\n";
    }
};

// Call the function
var_dump(names("John", "Doe", "Jane", "Doe"));