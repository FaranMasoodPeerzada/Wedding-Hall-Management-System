<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the booking ID and paid amount from the POST request
    $booking_id = $_POST['booking_id'];
    $paid_amount = $_POST['paid_amount'];
    $remaining_balance = $_POST['remaining_balance'];

    // Update the booking with the new paid amount and remaining balance
    $update_query = "UPDATE bookings SET paid_amount = $paid_amount, remaining_balance = $remaining_balance WHERE id = $booking_id";

    if ($conn->query($update_query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
