<?php

  $first_name = $_GET['first_name']; 
  $last_name = $_GET['last_name'];
  $student_id = $_GET['student_id'];

  //Add partner info if available
  if(isset($_GET['first_name_2'])){
    $partner = array("first_name_2" => $_GET['first_name_2'], "last_name_2" => $_GET['last_name_2'], "student_id_2" => $_GET['student_id_2']);
  } else {
    $partner = array("first_name_2" => "N/A", "last_name_2" => "N/A", "student_id_2" => "N/A");
  }

  $skill = $_GET['skill'];
  $instrument = $_GET['instrument'];
  $location = $_GET['location'];
  $room = $_GET['room'];
  $time_slot = $_GET['time_slot'];

  // Create new student entry as an array
  $new_student = Array (
    "first_name" => $first_name,
    "last_name" => $last_name,
    "student_id" => $student_id,
    "partner" => $partner,
    "skill" => $skill,
    "instrument" => $instrument,
    "location" => $location,
    "room" => $room,
    "time_slot" => $time_slot
  );

  //Get previous entries from data.json
  $previous = file_get_contents('/home/sug20003/public_html/week13/data/data.txt', true);

  //decode this into an array
  $tempArray = json_decode($previous, true);

  //push new_student array to end of array containing previous entries
  array_push($tempArray['students'], $new_student);

  //encode this newly modified array containing previous entries with new student at the end
  $jsonData = json_encode($tempArray);

  //put this new json string as the contents of data.json
  if (file_put_contents('/home/sug20003/public_html/week13/data/data.txt', $jsonData)) {
    echo "You have been registered!";
  } else {
    echo "Internal Server Error: Please contact customer support for assistance";
  }

?>