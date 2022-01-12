<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="customer_add.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .customer_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="page_title">
        <h1>New Customer</h1>
    </div>
    <!-- buttons, top right of page -->
    <a href="customer_page.php">
        <div class="confirm_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Confirm</p>
        </div>
    </a>    
    
    <a href="customer_page.php">
        <div class="cancel_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Cancel</p>
        </div>
    </a>
    
    <!-- left hand form -->
    <div class="Customer_details">
        <div class="left_culumn">
            <label for="customer_fname">First name</label><br>
            <input type="text" id="cusotmer_fname" name="customer_fname" placeholder="Enter first name..."><br>

            <label for="customer_title">Title</label><br>
            <select name="customer_title" id="title">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Mx">Mx</option>
            </select>
        </div>

        <div class="right_culumn">
            <label for="customer_lname">Last Name</label>
            <input type="text" id="customer_lname" name="customer_lname" placeholder="Enter last name...">
        </div>

        <div class="phone_number">
            <h3>Contact details</h3><br>
            <label for="customer_pnumber">Phone number</label><br>
            <input type="text" id="customer_pnumber" name="customer_pnumber" placeholder="07792329851">
        </div>

        <div class="phone_type">
            <h3></h3><br>
            <label for="phone_type">Phone type</label>
            <select name="phone_type" id="phone">
                <option value="Mobile">Mobile</option>
                <option value="Home_landline">Home landline</option>
                <option value="Office_landline">Office landline</option>
            </select>
        </div>
    </div>

</body>
