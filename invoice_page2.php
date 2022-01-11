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
        <legend>Enter Cusomer/Business details</legend>

        <label for="bname">Business or Customer name</label><br>
        <input type="text" id="bname" name="bname" value="business name"><br>

        <label for="acontact">Assigned Contact</label><br>
        <input type="text" id="acontact" name="acontact" value="Assigned Contact">

        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="Mr, Mrs, Dr, Ms"><br>

        <label for="emailaddress">Email Address</label><br>
        <input type="text" id="emailaddress" name="emailaddress" value="nobodyknows@whocares.co.uk"><br>
    </div>
</body>