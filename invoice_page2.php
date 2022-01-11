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
</body>