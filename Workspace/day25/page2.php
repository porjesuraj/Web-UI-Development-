<?php

  function function1() {
    $numbers = [10, 20, 30, 40, 50];
    print("<pre>");
    print_r($numbers);
    print("</pre>");
  }

  // function1()

  function function2() {
    // $countries = ["india", "usa", "uk", "japan", "pakistan"];
    // $gdp = [15, 10, 11, 0, 0.5];

    // for ($index = 0; $index < count($countries); $index++) {
    //   print($countries[$index] . " has GDP = ". $gdp[$index] . "<br>");
    // }

    $gdp = [
      "india" => 15,
      "usa" => 10,
      "uk" => 11,
      "japan" => 0,
      "pakistan" => 0.5
    ];

    print("<pre>");
    print_r($gdp);
    print("</pre>");

    print("<br>");
    print("India has GDP = " . $gdp["india"] . "<br>");
    print("USA has GDP = " . $gdp["usa"] . "<br>");
  }

  // function2();

  function function3() {
    // $cars = ["i10", "i20", "nano", "fabia"];
    // $prices = [5.5, 7.5, 2.5, 6.5];

    $cars = [
      "i10" => 5.5,
      "i20" => 7.5,
      "nano" => 2.5,
      "fabia" => 6.5
    ];
    
    print("<pre>");
    print_r($cars);
    print("</pre>");

    print("<br>");
    print("nano has a price = " . $cars["nano"]);
  }

  // function3()

  function function4() {
    // multiple values with same key will get only the last value
    $cars = [
      "i10" => 5.5,
      "i20" => 7.5,
      "nano" => 2.5,
      "fabia" => 6.5,
      // "nano" => 4.5
    ];

    print("<pre>");
    print_r($cars);
    print("</pre>");

    // foreach ($cars as $car) {
    //   print($car);
    //   print('<br>');
    // }

    foreach ($cars as $car => $price) {
      print("$car has a price of INR $price");
      print('<br>');
    }
  }

  // function4()

  function function5() {
    $numbers = [
      100 => 10, 
      101 => 20, 
      102 => 30, 
      103 => 40,
      104 => 50
    ];

    print("value at 100 = " . $numbers[100] . "<br>");

    print("<pre>");
    print_r($numbers);
    print("<pre>");

    print("<br>");

    foreach ($numbers as $number) {
      print("number = $number <br>");
    }

    print("<br>");
    foreach ($numbers as $index => $number) {
      print("number at $index = $number <br>");
    }

  }

  function5();
?>