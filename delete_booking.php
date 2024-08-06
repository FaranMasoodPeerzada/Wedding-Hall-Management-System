<?php
include 'config.php';

// Check if booking ID is provided
if (isset($_GET['booking_id'])) {
    // Get the booking ID from the URL
    $booking_id = $_GET['booking_id'];

    // Delete the booking from the database
    $delete_query = "DELETE FROM bookings WHERE id = $booking_id";
    if ($conn->query($delete_query) === TRUE) {
        echo "Booking deleted successfully.";
    } else {
        echo "Error deleting booking: " . $conn->error;
    }
} else {
    echo "Booking ID not provided.";
}

// Redirect back to the booking list
header("Location: view_bookings.php");
exit();
?>
