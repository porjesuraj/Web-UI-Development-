<?php

  function function1() {
    // print("user_found");
    // $result = [
    //   "status" => "failure"
    // ];

    // print_r($result);
    // print(json_encode($result));
  }

  // function1();

  function function2() {
    $person = [
      "name" => "person1",
      "address" => "pune",
      "phone" => "+91242343"
    ];

    // print_r($person);
    print(json_encode($person));
  }

  // function2();

  function function3() {
    $persons = [
      [
        "name" => "person1",
        "address" => "pune",
        "phone" => "+91242343"
      ],

      [
        "name" => "person2",
        "address" => "mumbai",
        "phone" => "+9146456546"
      ]
    ];

    print(json_encode($persons));
  }

  // function3();

  function function4() {
    $email = 'pythoncpp@gmail.com';
    $password = 'test';
    $query = "select * from user where email = '$email' and password = '$password'";

    // include all the code written in database.php
    include_once 'database.php';

    $result = executeQuery($query);
    print_r($result);
  }

  function4();


?>