<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="customer_page.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .customer_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <a href="customer_add.php">
        <h1>Customers</h1>
    </a>
    
    <a href="customer_add.php">
        <div class="add_customer_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>Add Customer</p>
        </div>
    </a>
</body>
