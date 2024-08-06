
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
                    
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="logout.php">LOGOUT</a></li>
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
            <form action="submit_form.php" method="post">
            <section class="booking-details-section">
                <div class="row booking-details-header-container">
                    <div class="col col-3">
                        <h4 class="booking-details-header active-header" id="booking-details"> Event Booking Details</h4>
                    </div>
                </div>
                <div class="row center-lg booking-details-container">
                    <div class="booking-detail col col-6">
                        <h3 class="booking-detail-title">Booking Date</h3>
                        <input type="date" id="booking-date" name="booking-date">
                    </div>
                    <div class="booking-detail col col-6">
                        <h3 class="booking-detail-title">Event Date</h3>
                        <input type="date" id="event-date" name="event-date">
                    </div>
                    <div class="booking-detail col col-6">
                        <h3 class="booking-detail-title">Event Start Time</h3>
                        <input type="time" id="event-start-time" name="event-start-time">
                    </div>
                    <div class="booking-detail col col-6">
                        <h3 class="booking-detail-title">Event End Time</h3>
                        <input type="time" id="event-end-time" name="event-end-time">
                    </div>
                    <div class="booking-detail col col-12" style="flex-basis: 100%;"> <!-- Changed col-6 to col-12 -->
                        <h3 class="booking-detail-title">Purpose of Event</h3>
                        <textarea id="event-purpose" name="event-purpose" rows="4"></textarea>
                    </div>
            
                </div>
            </section>
            
            
            <section class="info-section">
             <div class="row info-section-header-container">
              <div class="col col-3">
                   <h4 class="info-section-header active-header" id="customer-info">Customer Information</h4>
               </div>
                 </div>
             <div class="info-container">
                   <div class="info-input">
            <label for="customer-name">Customer Name</label>
            <input type="text" id="customer-name" name="customer-name">
                  </div>
                  <div class="info-input">
            <label for="mobile-number">Mobile Number</label>
                      <input type="text" id="mobile-number" name="mobile-number">
                   </div>
                  <div class="info-input">
            <label for="cnic">CNIC</label>
            <input type="text" id="cnic" name="cnic">
              </div>
                    <div class="info-input" style="flex-basis: 100%;">
            <label for="address">Address</label>
                      <input type="text" id="address" name="address" style="height: 100px;">
                   </div>
                    </div>
              </section>

            
              <section class="rooms-section">
    <div class="row room-section-header-container">
        <div class="col col-3">
            <h4 class="room-section-header active-header" id="standard-room">Select Hall</h4>
        </div>
    </div>
   
<?php
include 'config.php';

// Fetch hall names and prices from the halls table
$sql = "SELECT hall_name,capacity, price FROM halls";
$result = $conn->query($sql);

// Check if there are any halls
if ($result->num_rows > 0) {
    // Output the select element for hall selection
    echo '<div class="row center-lg">';
    echo '<div class="rooms col col-2">';
    echo '<select id="hall-selection" name="hall-selection">';
    
    while ($row = $result->fetch_assoc()) {
        $hall_name = $row["hall_name"];
        $price = $row["price"];
        $capacity=  $row["capacity"];
        echo '<option value="' . $hall_name . '">' . $hall_name . ' - Capacity ' . number_format($capacity) . ' Persons'. ' - Rs. ' . number_format($price) . ' Per Event</option>';
    }
    
    echo '</select>';
    echo '</div>';
    echo '</div>';
} else {
    echo "No halls found";
}
?>

</section>

            <section class="menu-section">
                <div class="row room-section-header-container">
                    <div class="col col-3">
                        <h4 class="room-section-header active-header" id="standard-room">Select Menu</h4>
                    </div>
                    
                </div>
                <div class="row center-lg">
                
                        
                        <?php
include 'config.php';

// Fetch dish names and prices from the Mains table
$sql = "SELECT dish_name, price FROM Mains";
$result = $conn->query($sql);

// Check if there are any dishes
if ($result->num_rows > 0) {
    // Output checkboxes for each dish
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Mains</h3>';
    while ($row = $result->fetch_assoc()) {
        $dish_name = $row["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $dish_name . '" name="mains[]" value="' . $dish_name . '">';
        echo '<label for="' . $dish_name . '" class="list-text">' . $dish_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No dishes found";
}



    // Fetch rice dish names and prices from the Rice table
    $sql_rice = "SELECT dish_name, price FROM Rice";
    $result_rice = $conn->query($sql_rice);

    // Check if there are any rice dishes
    if ($result_rice->num_rows > 0) {
        // Output checkboxes for each rice dish
        echo '<div class="menu col col-2">';
        echo '<h3 class="menu-title">Rice</h3>';
        while ($row_rice = $result_rice->fetch_assoc()) {
            $rice_dish_name = $row_rice["dish_name"];
            echo '<div class="details-container">';
            echo '<input type="checkbox" id="' . $rice_dish_name . '" name="rice[]" value="' . $rice_dish_name . '">';
            echo '<label for="' . $rice_dish_name . '" class="list-text">' . $rice_dish_name . '</label>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No rice dishes found";
    }
   
    
    // Fetch BBQ dish names and prices from the BarBQ table
$sql_bbq = "SELECT dish_name, price FROM BarBQ";
$result_bbq = $conn->query($sql_bbq);

// Check if there are any BBQ dishes
if ($result_bbq->num_rows > 0) {
    // Output checkboxes for each BBQ dish
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">BarBQ</h3>';
    while ($row_bbq = $result_bbq->fetch_assoc()) {
        $bbq_dish_name = $row_bbq["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $bbq_dish_name . '" name="barbq[]" value="' . $bbq_dish_name . '">';
        echo '<label for="' . $bbq_dish_name . '" class="list-text">' . $bbq_dish_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '<div class="row center-lg">';
} else {
    echo "No BBQ dishes found";
}




// Fetch salad names and prices from the Salad table
$sql_salad = "SELECT dish_name, price FROM Salad";
$result_salad = $conn->query($sql_salad);

// Check if there are any salad options
if ($result_salad->num_rows > 0) {
    // Output checkboxes for each salad option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Salad</h3>';
    while ($row_salad = $result_salad->fetch_assoc()) {
        $salad_dish_name = $row_salad["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $salad_dish_name . '" name="salad[]" value="' . $salad_dish_name . '">';
        echo '<label for="' . $salad_dish_name . '" class="list-text">' . $salad_dish_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No salad options found";
}

// Fetch sweet dishes names and prices from the Sweet_Dishes table
$sql_sweet_dishes = "SELECT dish_name, price FROM sweetdishes";
$result_sweet_dishes = $conn->query($sql_sweet_dishes);

// Check if there are any sweet dishes options
if ($result_sweet_dishes->num_rows > 0) {
    // Output checkboxes for each sweet dishes option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Sweet Dishes</h3>';
    while ($row_sweet_dishes = $result_sweet_dishes->fetch_assoc()) {
        $sweet_dishes_name = $row_sweet_dishes["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $sweet_dishes_name . '" name="sweet-dishes[]" value="' . $sweet_dishes_name . '">';
        echo '<label for="' . $sweet_dishes_name . '" class="list-text">' . $sweet_dishes_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No sweet dishes options found";
}


// Fetch naan and roti names and prices from the Naan_Roti table
$sql_naan_roti = "SELECT dish_name, price FROM naanroti";
$result_naan_roti = $conn->query($sql_naan_roti);

// Check if there are any naan and roti options
if ($result_naan_roti->num_rows > 0) {
    // Output checkboxes for each naan and roti option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Naan and Roti</h3>';
    while ($row_naan_roti = $result_naan_roti->fetch_assoc()) {
        $naan_roti_name = $row_naan_roti["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $naan_roti_name . '" name="naan-roti[]" value="' . $naan_roti_name . '">';
        echo '<label for="' . $naan_roti_name . '" class="list-text">' . $naan_roti_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '<div class="row center-lg">';
} else {
    echo "No naan and roti options found";
}


// Fetch raita names and prices from the Raita table
$sql_raita = "SELECT dish_name, price FROM Raita";
$result_raita = $conn->query($sql_raita);

// Check if there are any raita options
if ($result_raita->num_rows > 0) {
    // Output checkboxes for each raita option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Raita</h3>';
    while ($row_raita = $result_raita->fetch_assoc()) {
        $raita_name = $row_raita["dish_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $raita_name . '" name="raita[]" value="' . $raita_name . '">';
        echo '<label for="' . $raita_name . '" class="list-text">' . $raita_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No raita options found";
}


// Fetch drink names and prices from the Drinks table
$sql_drinks = "SELECT drink_name, price FROM drinks";
$result_drinks = $conn->query($sql_drinks);

// Check if there are any drink options
if ($result_drinks->num_rows > 0) {
    // Output checkboxes for each drink option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Drinks</h3>';
    while ($row_drinks = $result_drinks->fetch_assoc()) {
        $drink_name = $row_drinks["drink_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $drink_name . '" name="drinks[]" value="' . $drink_name . '">';
        echo '<label for="' . $drink_name . '" class="list-text">' . $drink_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No drink options found";
}

// Fetch extra names and prices from the Extras table
$sql_extras = "SELECT extra_name, price FROM extras";
$result_extras = $conn->query($sql_extras);

// Check if there are any extra options
if ($result_extras->num_rows > 0) {
    // Output checkboxes for each extra option
    echo '<div class="menu col col-2">';
    echo '<h3 class="menu-title">Extras</h3>';
    while ($row_extras = $result_extras->fetch_assoc()) {
        $extra_name = $row_extras["extra_name"];
        echo '<div class="details-container">';
        echo '<input type="checkbox" id="' . $extra_name . '" name="extras[]" value="' . $extra_name . '">';
        echo '<label for="' . $extra_name . '" class="list-text">' . $extra_name . '</label>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "No extra options found";
}

$conn->close();
?>







                
                 
                   

                    
                   
                    
                </div>
            </section>
            <section class="charges-section">
    <div class="row charges-section-header-container">
        <div class="col col-3">
            <h4 class="room-section-header active-header" id="special-charges">Special Charges</h4>
        </div>
    </div>
    <div class="row center-lg charges-container">
        <div class="charge col col-12">
            <h3 class="charge-title">AC Charges</h3>
            <input type="text" id="ac-charges" name="ac-charges">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">Stage Decoration</h3>
            <input type="text" id="stage-decoration" name="stage-decoration">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">No of Guests</h3>
            <input type="number" id="no-of-guests" name="no-of-guests">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">DJ</h3>
            <input type="text" id="dj" name="dj">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">Photography</h3>
            <input type="text" id="photography" name="photography">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">Service Charges</h3>
            <input type="text" id="service-charges" name="service-charges">
        </div>
        <div class="charge col col-12">
            <h3 class="charge-title">Other Charges</h3>
            <input type="text" id="other-charges" name="other-charges">
        </div>
        
        <div class="charge col col-12">
            <h3 class="charge-title">Paid Amount</h3>
            <input type="text" id="paid-amount" name="paid-amount">
        </div>
        
    </div>
</section>


            
            <div class="row buttons-row justify-content-center">
                <div class="col col-12">
                    <button type="submit" class="btn btn-primary">Next</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                </div>
            </div>
        </form>
            
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