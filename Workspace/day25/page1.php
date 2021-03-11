<?php

  function function1() {
    print("inside function1 <br>");

    // empty array
    $numbers1 = array();
    print($numbers1);

    print("<br>");

    // empty array
    $numbers2 = [];
    print($numbers2);
  }

  // function1()

  function function2() {
    print("inside function 2 <br>");

    $numbers1 = array(10, 20, 30, 40, 50);
    print($numbers1);
    
    print("<br>");

    print("<pre>");
    print_r($numbers1);
    print("</pre>");

    print("<br>");

    $numbers2 = [10, 20, 30, 40, 50];
    print($numbers2);
    print("<br>");

    print("<pre>");
    print_r($numbers2);
    print("</pre>");
  }

  // function2()

  function function3() {
    $countries1 = array("india", "usa", "uk", "japan");

    print("<pre>");
    print_r($countries1);
    print("</pre>");

    print("<br>");

    $countries2 = ["india", "usa", "uk", "japan"];

    print("<pre>");
    print_r($countries2);
    print("</pre>");
  }

  // function3();

  function function4() {
    $numbers = [10, 20, 30, 40, 50];

    // print("value at 0 = " . $numbers[0] . "<br>");
    // print("value at 1 = " . $numbers[1] . "<br>");
    // print("value at 2 = " . $numbers[2] . "<br>");
    // print("value at 3 = " . $numbers[3] . "<br>");
    // print("value at 4 = " . $numbers[4] . "<br>");

    print("count of values in numbers = " . count($numbers) . "<br>");

    // traditional for..loop
    // for ($index = 0; $index < count($numbers); $index++) {
    //   print("value at $index = " . $numbers[$index] . "<br>");
    // }

    // for..each loop
    // foreach($numbers as $value) {
    //   print("value = $value <br>");
    // } 

    $countries = ["india", "usa", "uk", "japan"];

    // traditional for loop
    for ($index = 0; $index < count($countries); $index++) {
      print("country at $index = " . $countries[$index] . "<br>");
    }

    print("<br>");

    // foreach
    foreach ($countries as $country) {
      print("country = $country <br>");
    }

  }

  function4();

?>