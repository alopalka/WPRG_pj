<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_of_guests = $_POST['people'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $credit_card = $_POST['credit-card'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $arrival_time = $_POST['time'];

    $template = '
      <h2>Booking Summary</h2>
      <p>Number of guests: %s</p>
      <p>Name: %s</p>
      <p>Address: %s</p>
      <p>Credit card: %s</p>
      <p>Email: %s</p>
      <p>Date: %s</p>
      <p>Arrival time: %s</p>';

    printf($template, $num_of_guests, $name, $address, $credit_card, $email, $date, $arrival_time);
}

?>