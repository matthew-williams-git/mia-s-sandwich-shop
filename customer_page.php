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
        <h1>Customers</h1>
    
    <input type="search" id="user_search" name="user_search" placeholder="Search users">
    <input type="submit" value="Go!">

    <a href="customer_add.php">
        <div class="add_customer_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>Add Customer</p>
        </div>
    </a>
</body>
