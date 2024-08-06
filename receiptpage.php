
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Star WHBMS</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/rooms-and-suites.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
    <style>
         
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        input[type="text"] {
            width: 100px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .hall-img{
            width: 350px;
            height: 250px;
        }
        .menu-section, .charges-section {
            padding: 20px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        .menu-section-header-container, .charges-section-header-container {
            margin-bottom: 20px;
        }

        .menu-section-header, .room-section-header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .center-lg {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .menu {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
            max-width: 300px;
            text-align: center;
        }

        .menu-title {
            font-size: 20px;
            font-weight: bold;
            color: #555;
            margin-bottom: 15px;
        }

        .details-container {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .details-container input[type="checkbox"] {
            margin-right: 10px;
        }

        .list-text {
            font-size: 16px;
            color: #666;
        }

        /* Style for charges section */
.charges-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
}

.charge {
    margin-bottom: 20px;
}




        .charge-title {
            font-size: 18px;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
        }

        .charge input[type="text"], .charge input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
    .charges-container {
        grid-template-columns: 1fr;
    }
}
        
        /* New styles for Customer Information section */
        .info-section {
            padding: 20px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        .info-section-header-container {
            margin-bottom: 20px;
        }

        .info-section-header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .info-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .info-input {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1 1 100%;
            max-width: calc(50% - 20px);
        }

        .info-input label {
            font-size: 18px;
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }

        .info-input input[type="text"],
        .info-input input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        /* Your existing CSS styles */

/* Your existing CSS styles */

/* New styles for Booking Details section */
.booking-details-section {
    padding: 20px;
    background-color: #f9f9f9;
    margin-bottom: 20px;
}

.booking-details-header-container {
    margin-bottom: 20px;
}

.booking-details-header {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.booking-details-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.booking-detail {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.booking-detail-title {
    font-size: 18px;
    font-weight: bold;
    color: #555;
    margin-bottom: 10px;
}

input[type="date"],
input[type="time"],
textarea {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    resize: vertical;
    height: auto;
    min-height: 100px;
}



        @media (min-width: 768px) {
            .info-input {
                flex-basis: calc(50% - 20px);
            }
        }
/* Existing CSS styles for buttons */
/* Existing CSS styles for buttons */

.buttons-row {
    margin-top: 20px;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 15px 30px; /* Increased padding */
    font-size: 18px; /* Increased font size */
    cursor: pointer;
    border: none;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.cancel-btn {
    background-color: #dc3545;
}
.buttons-row {
    display: inline;
    flex-wrap: wrap;
}


/* Style for dropdown menu */
.rooms-section {
    margin-top: 20px;
}

.room-title {
    font-size: 18px;
    margin-bottom: 10px;
}

#hall-selection {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Style for dropdown arrow */
#hall-selection::-ms-expand {
    display: none;
}

#hall-selection {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 8px center;
    background-size: 20px;
}

/* Style for dropdown options */
option {
    font-size: 16px;
    background-color: #fff;
}

/* Style for selected option */
option:checked {
    background-color: #f0f0f0;
}




    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <nav class="header-nav-bar">
                <div class="header-nav-logo">
					<a href="index.html">
						<img src="./assets/img/whbms.png"
							alt="whbmslogo">
					</a>
				</div>
                <ul class="header-nav-lists">
                    <li class="header-nav-list">
                        <a class="header-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link header-active"
                            href="rooms-and-suites.html">Rooms and Suites</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="facilities.html">Facilities</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contact Us</a></li>
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="#">Book Now</a></li>
                </ul>

                <div class="header-hamburger-icon">
                    <div class="header-hamburger-line-1"></div>
                    <div class="header-hamburger-line-2"></div>
                    <div class="header-hamburger-line-3"></div>
                </div>
            </nav>

    </header>
    <main>
        <div class="container">

            <!-- Top Text -->
            <div class="page-header-container">
                <h2 class="page-header">New Booking</h2>
                <hr />
                <br>
            </div>

            <!-- Special offers section -->
           

            <!-- Halls -->
            <?php
include 'config.php';

// Initialize variables
$total_additional_charges = 0;
$paid_amount = 0;
$remaining_balance = 0;
$total_food_amount = 0;

// Check if booking ID is provided in the URL
if (isset($_GET['booking_id'])) {
    // Get the booking ID from the URL
    $booking_id = $_GET['booking_id'];

    // Fetch booking details from the database using the booking ID
    $booking_query = "SELECT * FROM bookings WHERE id = $booking_id";
    $booking_result = $conn->query($booking_query);

    if ($booking_result->num_rows > 0) {
        // Fetch booking details
        $booking_row = $booking_result->fetch_assoc();

        // Display the booking details in a table
        echo "<table border='5'>";
        echo "<tr><th colspan='2'>Booking Receipt</th></tr>";
        echo "<tr><td>Booking Date:</td><td>{$booking_row['booking_date']}</td></tr>";
        echo "<tr><td>Event Date:</td><td>{$booking_row['event_date']}</td></tr>";
        echo "<tr><td>Number of Guests:</td><td>{$booking_row['no_of_guests']}</td></tr>";

        // Display selected items for mains
        $selected_mains = explode(", ", $booking_row['mains']);
        echo "<tr><th>Item</th><th>Rate</th><th>QTY</th><th>Amount</th></tr>";
        
        foreach ($selected_mains as $item) {
            $dish_query = "SELECT * FROM mains WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for rice
        $selected_rice = explode(", ", $booking_row['rice']);
         foreach ($selected_rice as $item) {
            $dish_query = "SELECT * FROM rice WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        $selected_sweets = explode(", ", $booking_row['sweet_dishes']);
         foreach ($selected_sweets as $item) {
            $dish_query = "SELECT * FROM sweetdishes WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for naan/roti
        $selected_naan_roti = explode(", ", $booking_row['naan_roti']);
        
        foreach ($selected_naan_roti as $item) {
            $dish_query = "SELECT * FROM naanroti WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for BBQ
        $selected_barbq = explode(", ", $booking_row['barbq']);
        foreach ($selected_barbq as $item) {
            $dish_query = "SELECT * FROM barbq WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for salad
        $selected_salad = explode(", ", $booking_row['salad']);
        foreach ($selected_salad as $item) {
            $dish_query = "SELECT * FROM salad WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for raita
        $selected_raita = explode(", ", $booking_row['raita']);
        
        foreach ($selected_raita as $item) {
            $dish_query = "SELECT * FROM raita WHERE dish_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['dish_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for drinks
        $selected_drinks = explode(", ", $booking_row['drinks']);
        
        foreach ($selected_drinks as $item) {
            $dish_query = "SELECT * FROM drinks WHERE drink_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['drink_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }

        // Display selected items for extras
        $selected_extras = explode(", ", $booking_row['extras']);
        
        foreach ($selected_extras as $item) {
            $dish_query = "SELECT * FROM extras WHERE extra_name = '$item'";
            $dish_result = $conn->query($dish_query);
            if ($dish_result->num_rows > 0) {
                $row = $dish_result->fetch_assoc();
                
                $dish_name = $row['extra_name'];
                $dish_price = $row['price'];
                $no_of_guests = $booking_row['no_of_guests'];
                $total_charges = $dish_price * $no_of_guests;
                echo "<tr><td>$dish_name</td><td>$dish_price</td><td>$no_of_guests</td><td>$total_charges</td></tr>";
                $total_food_amount += $total_charges;
            }
        }


        // Display additional charges
        echo "<tr><td>AC Charges:</td><td>{$booking_row['ac_charges']}</td></tr>";
        echo "<tr><td>Stage Decoration Charges:</td><td>{$booking_row['stage_decoration']}</td></tr>";
        echo "<tr><td>Photography Charges:</td><td>{$booking_row['photography']}</td></tr>";
        echo "<tr><td>DJ Charges:</td><td>{$booking_row['dj']}</td></tr>";
        echo "<tr><td>Service Charges:</td><td>{$booking_row['service_charges']}</td></tr>";
        echo "<tr><td>Other Charges:</td><td>{$booking_row['other_charges']}</td></tr>";

        // Calculate total amount
        $total_amount = $total_food_amount + $booking_row['ac_charges'] + $booking_row['stage_decoration'] + $booking_row['photography'] + $booking_row['dj'] + $booking_row['service_charges'] + $booking_row['other_charges'];

        // Display total amount
        echo "<tr><td>Total Amount:</td><td>$total_amount</td></tr>";

        // Input field for paid amount with dynamic calculation of remaining balance
        echo "<tr><td>Total Amount Paid:</td><td>";
        echo "<input type='text' id='paid_amount' name='paid_amount' value='{$booking_row['paid_amount']}' onchange='calculateRemainingBalance()'>";
        echo "</td></tr>";

        echo "<tr><td>Remaining Balance:</td><td><span id='remaining_balance'></span></td></tr>";

        // Update button to update the amounts in the database
        echo "<tr><td colspan='2'><button onclick='updateAmounts()'>Update</button></td></tr>";

        echo "</table>";

        // Script for dynamic calculation of remaining balance and updating amounts
        echo "<script>
        function calculateRemainingBalance() {
            var paid_amount = parseFloat(document.getElementById('paid_amount').value);
            var remaining_balance = $total_amount - paid_amount;
            document.getElementById('remaining_balance').innerHTML = remaining_balance.toFixed(2);
        }
        calculateRemainingBalance(); // Call the function initially to set the value

        function updateAmounts() {
    var paid_amount = parseFloat(document.getElementById('paid_amount').value);
    var remaining_balance = $total_amount - paid_amount;

    // Update amounts in the database using AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                // Alert the success message
                alert('Amounts updated successfully.');
                // Update the remaining balance in the HTML
                document.getElementById('remaining_balance').innerHTML = remaining_balance.toFixed(2);
                // Update the total amount in the HTML (if needed)
                // document.getElementById('total_amount').innerHTML = total_amount.toFixed(2);
            } else {
                // Alert the error message
                alert('Error updating amounts: ' + this.statusText);
            }
        }
    };
    xhttp.onerror = function() {
        // Alert if AJAX request fails
        alert('AJAX request failed.');
    };
    xhttp.open('POST', 'update_paid_amount.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('booking_id={$booking_id}&paid_amount=' + paid_amount + '&remaining_balance=' + remaining_balance);
}

    </script>";

    } else {
        echo "Booking not found.";
    }

} else {
    echo "Booking ID not provided.";
}
?>
            
        </div>
    </main>

    <footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">WBHMS</h3>
					<p>Your Perfect Venue Solution</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail"> 
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>23, Wedding Avenue, Bahawalpur, Country</span>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>support@wbhms.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Follow Us</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</footer>
    <script src="assets/js/switchRooms.js"></script>
    <script src="assets/js/toggleHamburger.js"></script>
</body>

</html>