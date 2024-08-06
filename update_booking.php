<?php
// Include database connection code here if not already included
// Include config.php or database connection file
include "config.php"; // Change this to your actual file name

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $booking_id = $_POST["booking_id"];
    $booking_date = $_POST['booking-date'];
$event_date = $_POST['event-date'];
$event_start_time = $_POST['event-start-time'];
$event_end_time = $_POST['event-end-time'];
$event_purpose = $_POST['event-purpose'];
$customer_name = $_POST['customer-name'];
$mobile_number = $_POST['mobile-number'];
$cnic = $_POST['cnic'];
$address = $_POST['address'];
$hall_selection = $_POST['hall-selection'];

// Convert checkbox values to comma-separated strings
$mains = isset($_POST['mains']) && is_array($_POST['mains']) ? implode(", ", $_POST['mains']) : '';
$rice = isset($_POST['rice']) && is_array($_POST['rice']) ? implode(", ", $_POST['rice']) : '';
$sweet_dishes = isset($_POST['sweet-dishes']) && is_array($_POST['sweet-dishes']) ? implode(", ", $_POST['sweet-dishes']) : '';
$barbq = isset($_POST['barbq']) && is_array($_POST['barbq']) ? implode(", ", $_POST['barbq']) : '';
$salad = isset($_POST['salad']) && is_array($_POST['salad']) ? implode(", ", $_POST['salad']) : '';
$naan_roti = isset($_POST['naan-roti']) && is_array($_POST['naan-roti']) ? implode(", ", $_POST['naan-roti']) : '';
$raita = isset($_POST['raita']) && is_array($_POST['raita']) ? implode(", ", $_POST['raita']) : '';
$drinks = isset($_POST['drinks']) && is_array($_POST['drinks']) ? implode(", ", $_POST['drinks']) : '';
$extras = isset($_POST['extras']) && is_array($_POST['extras']) ? implode(", ", $_POST['extras']) : '';

$ac_charges = $_POST['ac-charges'];
$stage_decoration = $_POST['stage-decoration'];
$no_of_guests = $_POST['no-of-guests'];
$dj = $_POST['dj'];
$photography = $_POST['photography'];
$service_charges = $_POST['service-charges'];
$other_charges = $_POST['other-charges'];
$paid_amount = $_POST['paid-amount'];

    // Calculate total amount
    $total_amount = 0;
    $total_amount_food=0;

    // Calculate total amount for mains

    
    if (!empty($mains)) {
        // Separate dish names
        $mains_dishes = explode(", ", $mains);
        
        // Initialize total price for mains
        $total_mains_price = 0;
        
        // Iterate over each selected dish
        foreach ($mains_dishes as $dish_name) {
            // Query the price of each dish
            $mains_sql = "SELECT price FROM mains WHERE dish_name = ?";
            $stmt = $conn->prepare($mains_sql);
            $stmt->bind_param("s", $dish_name);
            $stmt->execute();
            $mains_result = $stmt->get_result();
            
            // If dish found, add its price to the total
            if ($mains_result->num_rows > 0) {
                $row = $mains_result->fetch_assoc();
                $total_mains_price += $row['price'];
            }
        }

    
        
        // Multiply total price by number of guests
        $total_mains_price *= $no_of_guests;
        
        // Add mains price to total amount
        $total_amount_food += $total_mains_price;
    }

    // Calculate total amount for rice
if (!empty($rice)) {
    $rice_dishes = explode(", ", $rice);
    $total_rice_price = 0;
    foreach ($rice_dishes as $dish_name) {
        $rice_sql = "SELECT price FROM rice WHERE dish_name = ?";
        $stmt = $conn->prepare($rice_sql);
        $stmt->bind_param("s", $dish_name);
        $stmt->execute();
        $rice_result = $stmt->get_result();
        if ($rice_result->num_rows > 0) {
            $row = $rice_result->fetch_assoc();
            $total_rice_price += $row['price'];
        }
    }
    $total_rice_price *= $no_of_guests;
    $total_amount_food += $total_rice_price;
}

// Calculate total amount for barbq
if (!empty($barbq)) {
    $barbq_items = explode(", ", $barbq);
    $total_barbq_price = 0;
    foreach ($barbq_items as $item_name) {
        $barbq_sql = "SELECT price FROM barbq WHERE dish_name = ?";
        $stmt = $conn->prepare($barbq_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $barbq_result = $stmt->get_result();
        if ($barbq_result->num_rows > 0) {
            $row = $barbq_result->fetch_assoc();
            $total_barbq_price += $row['price'];
        }
    }
    $total_barbq_price *= $no_of_guests;
    $total_amount_food += $total_barbq_price;
}

// Calculate total amount for salad
if (!empty($salad)) {
    $salad_items = explode(", ", $salad);
    $total_salad_price = 0;
    foreach ($salad_items as $item_name) {
        $salad_sql = "SELECT price FROM salad WHERE dish_name = ?";
        $stmt = $conn->prepare($salad_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $salad_result = $stmt->get_result();
        if ($salad_result->num_rows > 0) {
            $row = $salad_result->fetch_assoc();
            $total_salad_price += $row['price'];
        }
    }
    $total_salad_price *= $no_of_guests;
    $total_amount_food += $total_salad_price;
}

// Calculate total amount for sweet dishes
if (!empty($sweet_dishes)) {
    $sweet_dishes_items = explode(", ", $sweet_dishes);
    $total_sweet_dishes_price = 0;
    foreach ($sweet_dishes_items as $item_name) {
        $sweet_dishes_sql = "SELECT price FROM sweetdishes WHERE dish_name = ?";
        $stmt = $conn->prepare($sweet_dishes_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $sweet_dishes_result = $stmt->get_result();
        if ($sweet_dishes_result->num_rows > 0) {
            $row = $sweet_dishes_result->fetch_assoc();
            $total_sweet_dishes_price += $row['price'];
        }
    }
    $total_sweet_dishes_price *= $no_of_guests;
    $total_amount_food += $total_sweet_dishes_price;
}

// Calculate total amount for naan and roti
if (!empty($naan_roti)) {
    $naan_roti_items = explode(", ", $naan_roti);
    $total_naan_roti_price = 0;
    foreach ($naan_roti_items as $item_name) {
        $naan_roti_sql = "SELECT price FROM naanroti WHERE dish_name = ?";
        $stmt = $conn->prepare($naan_roti_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $naan_roti_result = $stmt->get_result();
        if ($naan_roti_result->num_rows > 0) {
            $row = $naan_roti_result->fetch_assoc();
            $total_naan_roti_price += $row['price'];
        }
    }
    $total_naan_roti_price *= $no_of_guests;
    $total_amount_food += $total_naan_roti_price;
}

// Calculate total amount for raita
if (!empty($raita)) {
    $raita_items = explode(", ", $raita);
    $total_raita_price = 0;
    foreach ($raita_items as $item_name) {
        $raita_sql = "SELECT price FROM raita WHERE dish_name = ?";
        $stmt = $conn->prepare($raita_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $raita_result = $stmt->get_result();
        if ($raita_result->num_rows > 0) {
            $row = $raita_result->fetch_assoc();
            $total_raita_price += $row['price'];
        }
    }
    $total_raita_price *= $no_of_guests;
    $total_amount_food += $total_raita_price;
}


// Calculate total amount for drinks
if (!empty($drinks)) {
    $drinks_items = explode(", ", $drinks);
    $total_drinks_price = 0;
    foreach ($drinks_items as $item_name) {
        $drinks_sql = "SELECT price FROM drinks WHERE drink_name = ?";
        $stmt = $conn->prepare($drinks_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $drinks_result = $stmt->get_result();
        if ($drinks_result->num_rows > 0) {
            $row = $drinks_result->fetch_assoc();
            $total_drinks_price += $row['price'];
        }
    }
    $total_drinks_price *= $no_of_guests;
    $total_amount_food += $total_drinks_price;
}


// Calculate total amount for extras
if (!empty($extras)) {
    $extras_items = explode(", ", $extras);
    $total_extras_price = 0;
    foreach ($extras_items as $item_name) {
        $extras_sql = "SELECT price FROM extras WHERE extra_name = ?";
        $stmt = $conn->prepare($extras_sql);
        $stmt->bind_param("s", $item_name);
        $stmt->execute();
        $extras_result = $stmt->get_result();
        if ($extras_result->num_rows > 0) {
            $row = $extras_result->fetch_assoc();
            $total_extras_price += $row['price'];
        }
    }
    $total_extras_price *= $no_of_guests;
    $total_amount_food += $total_extras_price;
}

// Repeat this process for barbq, salad, naan and roti, sweet dishes, raita, drinks, and extras

    // Repeat this process for other categories like rice, barbq, salad, naan_roti, sweet_dishes, raita, drinks, and extras...

    // Add additional charges
    $total_amount = $ac_charges + $stage_decoration + $dj + $photography + $service_charges  + $other_charges +$total_amount_food;

    // Calculate remaining balance
    $total_amount = floatval($total_amount);
    $paid_amount = floatval($paid_amount);
    $remaining_balance = $total_amount - $paid_amount;
    // Insert data into database
    $sql = "UPDATE bookings SET 
    customer_name='$customer_name', 
    event_date='$event_date', 
    event_start_time='$event_start_time', 
    event_end_time='$event_end_time', 
    event_purpose='$event_purpose', 
    mobile_number='$mobile_number', 
    cnic='$cnic', 
    address='$address', 
    hall_selection='$hall_selection', 
    mains='$mains', 
    rice='$rice', 
    barbq='$barbq', 
    sweet_dishes='$sweet_dishes', 
    salad='$salad', 
    naan_roti='$naan_roti', 
    raita='$raita', 
    drinks='$drinks', 
    extras='$extras', 
    ac_charges='$ac_charges', 
    stage_decoration='$stage_decoration', 
    no_of_guests='$no_of_guests', 
    dj='$dj', 
    photography='$photography', 
    service_charges='$service_charges', 
    other_charges='$other_charges', 
    total_amount='$total_amount', 
    paid_amount='$paid_amount', 
    remaining_balance='$remaining_balance'
    WHERE id='$booking_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect to receipt.php with necessary data
    $booking_id = $conn->insert_id; // Get the ID of the newly inserted booking
    header("Location: view_bookings.php");
    exit(); // Make sure to exit after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>