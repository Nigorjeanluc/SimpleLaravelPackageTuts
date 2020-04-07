<?php

    Route::get('calculator', function(){
        echo 'Hello from the calculator package!';
    });

    Route::get('calculator/add/{a}/{b}', 'Yoosuf\Calculator\CalculatorController@add');
    Route::get('calculator/substract/{a}/{b}', 'Yoosuf\Calculator\CalculatorController@subtract');
