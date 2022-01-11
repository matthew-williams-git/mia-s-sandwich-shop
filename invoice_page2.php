<?php
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="invoice_page2.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .invoice_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="page_head">
        <h1>New Invoice</h1>
    </div>

    <a href="invoice_page1.php">
        <div class="cancel_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Cancel</p>
        </div>
    </a>

    <!-- add php in here somewhere to input data into the database -->
    <a href="invoice_page1.php">
        <div class="confirm_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Confirm</p>
        </div>
    </a>

    <!-- input fields for data -->
    <div class="etr_customer_data">
        <legend>Enter Cusomer/Business details</legend><br><br>

        <label for="bname">Business or Customer name</label>
        <input type="text" id="bname" name="bname" value="Business name"><br><br>

        <label for="acontact">Assigned Contact</label>
        <input type="text" id="acontact" name="acontact" value="Assigned Contact"><br><br>

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="Mr, Mrs, Dr, Ms"><br><br>

        <label for="emailaddress">Email Address</label>
        <input type="text" id="emailaddress" name="emailaddress" value="nobodyknows@whocares.co.uk"><br><br>
    </div>
</body>