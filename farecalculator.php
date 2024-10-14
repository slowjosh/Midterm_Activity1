<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $distance = $_POST['distance'];
    $passenger_type = $_POST['passenger_type'];

    $base_fare = 13.00; 
    $additional_fare_per_km = 1.75; 
    $discount = 0.20; 
   
    if ($distance <= 5) {
        $total_fare = $base_fare;
    } else {
        $extra_km = $distance - 5;
        $total_fare = $base_fare + ($extra_km * $additional_fare_per_km);
    }

    
    if ($passenger_type == "student_elderly") {
        $total_fare = $total_fare - ($total_fare * $discount);
    }
    header("Location: jeepney.php?tama=" . $total_fare);


   
   
}
?>