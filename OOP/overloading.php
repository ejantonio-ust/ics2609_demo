<?php
// PHP program to explain function
// overloading in PHP

// Creating a class of type shape
class shape
{

    // __call is magic function which accepts
    // function name and arguments
    function __call($name_of_function, $arguments)
    {

        // It will match the function name
        if ($name_of_function == 'area') {

            switch (count($arguments)) {

                    // If there is only one argument
                    // area of circle
                case 1:
                    return 3.14 * $arguments[0];

                    // IF two arguments then area is rectangle;
                case 2:
                    return $arguments[0] * $arguments[1];
            }
        }
    }
}

// Declaring a shape type object
$s = new Shape;

// Function call
echo ($s->area(2));
echo "\n";

// calling area method for rectangle
echo ($s->area(4, 2));
