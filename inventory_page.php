<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="inventory_page.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .inventory_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="page_title">
        <h1>Inventory</h1>
    </div>

    <a href="invoice_page2.php">
        <div class="add_item_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>New invoice</p>
        </div>
    </a>

    <div class="search_bar">
        <input type="search" name="search_bar" id="search_bar">
        <input type="submit" value="Go!">
    </div>
</body>