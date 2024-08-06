
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
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
            max-width: 100%x;
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
            width: 200px;
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
                        <a class="header-nav-link header-active" href="booking.php">New Booking</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link "
                            href="view_bookings.php">View Bookings</a></li>
                    <!-- <li class="header-nav-list"><a class="header-nav-link" href="#">Add New Item</a></li>-->
                    
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="index.php">LOGOUT</a></li>
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
            <h2 class="page-header">Bookings</h2>
            <hr />
        </div>

        <!-- Search Box -->
        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for bookings...">
        </div>
        <br>

        <!-- Halls -->
        <?php
        include 'config.php';

        // Fetch all bookings from the database
        $bookings_query = "SELECT * FROM bookings";
        $bookings_result = $conn->query($bookings_query);

        if ($bookings_result->num_rows > 0) {
            // Display all bookings in a table
            echo "<table id='bookingsTable' border='2'>";
            echo "<tr>
                    <th>Booking ID</th>
                    <th>Customer Name</th>
                    <th>Booking Date</th>
                    <th>Event Date</th>
                    <th>Event Time</th>
                    <th>Number of Guests</th>
                    <th>Total Amount</th>
                    <th>Total Amount Paid</th>
                    <th>Remaining Balance</th>
                    <th>Actions</th>
                  </tr>";
            
            while ($booking_row = $bookings_result->fetch_assoc()) {
                // Calculate total food amount
                $total_food_amount = 0;
                
                // Calculate the total charges for mains
                $selected_mains = explode(", ", $booking_row['mains']);
                foreach ($selected_mains as $item) {
                    $dish_query = "SELECT * FROM mains WHERE dish_name = '$item'";
                    $dish_result = $conn->query($dish_query);
                    if ($dish_result->num_rows > 0) {
                        $row = $dish_result->fetch_assoc();
                        $total_charges = $row['price'] * $booking_row['no_of_guests'];
                        $total_food_amount += $total_charges;
                    }
                }
                
                // Calculate the total charges for rice
                $selected_rice = explode(", ", $booking_row['rice']);
                foreach ($selected_rice as $item) {
                    $dish_query = "SELECT * FROM rice WHERE dish_name = '$item'";
                    $dish_result = $conn->query($dish_query);
                    if ($dish_result->num_rows > 0) {
                        $row = $dish_result->fetch_assoc();
                        $total_charges = $row['price'] * $booking_row['no_of_guests'];
                        $total_food_amount += $total_charges;
                    }
                }

                // Repeat the above steps for other food categories (sweets, naan/roti, BBQ, salad, raita, drinks, extras)

                // Calculate total amount
                $total_amount = $total_food_amount + $booking_row['ac_charges'] + $booking_row['stage_decoration'] + $booking_row['photography'] + $booking_row['dj'] + $booking_row['service_charges'] + $booking_row['other_charges'];
                
                // Calculate remaining balance
                $remaining_balance = $total_amount - $booking_row['paid_amount'];

                // Display booking details in a row
                echo "<tr>
                        <td>{$booking_row['id']}</td>
                        <td>{$booking_row['customer_name']}</td>
                        <td>{$booking_row['booking_date']}</td>
                        <td>{$booking_row['event_date']}</td>
                        <td>{$booking_row['event_start_time']} - {$booking_row['event_end_time']}</td>
                        <td>{$booking_row['no_of_guests']}</td>
                        <td>$total_amount</td>
                        <td>{$booking_row['paid_amount']}</td>
                        <td>$remaining_balance</td>
                        <td><a href='booking_details.php?booking_id={$booking_row['id']}'>View</a> <a href='edit_booking_details.php?booking_id={$booking_row['id']}'>Edit</a> <a href='delete_booking.php?booking_id={$booking_row['id']}' onclick='return confirm(\"Are you sure you want to delete this booking?\")'>Delete</a></td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "No bookings found.";
        }
        ?>

    </div>
</main>

<script>
    function filterTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("bookingsTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none"; // Initially hide the row
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = ""; // Show the row if a match is found
                        break; // Exit loop once a match is found
                    }
                }
            }
        }
    }
</script>


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