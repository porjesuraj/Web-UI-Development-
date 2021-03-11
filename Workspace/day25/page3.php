<?php

  function function1() {
    $cars = ["i10", "i20", "nano", "fabia"];
    $persons = ["steve", "bill", "sundar", "mark"];

    print("<pre>");
    print_r($cars);
    print("</pre>");

    print("<pre>");
    print_r($persons);
    print("</pre>");
  }

  // function1();

  function function2() {
    // array of arrays
    $array = [
      ["i10", "i20", "nano", "fabia"],
      ["steve", "bill", "sundar", "mark"]
    ];

    print("<pre>");
    print_r($array);
    print("</pre>");

    // print("value at [0][0] = " . $array[0][0] . "<br>");
    // print("value at [1][0] = " . $array[1][0] . "<br>");

    for ($outerIndex = 0; $outerIndex < count($array); $outerIndex++) {
      $innerArray = $array[$outerIndex];
      // print_r($innerArray);

      for ($innerIndex = 0; $innerIndex < count($innerArray); $innerIndex++) {
        print("value at [$outerIndex][$innerIndex] = " . $innerArray[$innerIndex] . "<br>");
      }

      print("<br>");
    }

  }
  
  function2();

  function function3() {
    $cars = [
      "i10" => 5.5,
      "i20" => 7.5,
      "nano" => 2.5,
      "fabia" => 6.5
    ];

    $persons = [
      "steve" => "apple",
      "bill" => "ms",
      "sundar" => "google",
      "jeff" => "amazon",
      "elisson" => "oracle"
    ];

    print("<pre>");
    print_r($cars);
    print("</pre>");

    print("<pre>");
    print_r($persons);
    print("</pre>");
  }

  // function3();

  function function4() {
    $array = [
      [
        "i10" => 5.5,
        "i20" => 7.5,
        "nano" => 2.5,
        "fabia" => 6.5
      ],
      [
        "steve" => "apple",
        "bill" => "ms",
        "sundar" => "google",
        "jeff" => "amazon",
        "elisson" => "oracle"
      ]
    ];

    print("<pre>");
    print_r($array);
    print("</pre>");

    print("value at [0][nano] = " . $array[0]["nano"] . "<br>");
    print("value at [1][jeff] = " . $array[1]["jeff"] . "<br>");
  }

  // function4();

  function function5() {
    $array = [

      "cars" => [
        "i10" => 5.5,
        "i20" => 7.5,
        "nano" => 2.5,
        "fabia" => 6.5
      ],

      "persons" => [
        "steve" => "apple",
        "bill" => "ms",
        "sundar" => "google",
        "jeff" => "amazon",
        "elisson" => "oracle"
      ]

    ];

    print("<pre>");
    print_r($array);
    print("</pre>");

    // print("value at [cars][fabia] = " . $array["cars"]["fabia"] . "<br>");
    // print("value at [persons][steve] = " . $array["persons"]["steve"] . "<br>");

    // foreach($array as $innerArray) {
    //   print(gettype($innerArray));
    //   // print_r($innerArray);
    //   // foreach($innerArray as $index => $value) {
    //   //   print("$index = $value <br>");
    //   // }
    //   print("<br>");
    // }

    // traditional for loop
    $outerKeys = ["cars", "persons"];
    for ($outerIndex = 0; $outerIndex < count($array); $outerIndex++) {
      $outerKey = $outerKeys[$outerIndex];
      $innerArray = $array[$outerKey];
      print_r($innerArray);

      print("<br>");
    }

  }

  // function5();

?>