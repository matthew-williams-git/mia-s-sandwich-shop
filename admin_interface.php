<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="admin_interface.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .admin_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="admin-interface">
        <h1 class="title">Admin Interface</h1>
        <div class="user-info">
            <button class="user-active button-default">User</button>
            <button class="activity button-default">Activity</button>
        </div>
        <div class="button-selection">
            <button class=" button-default">Business Analytics</button>
            <button class=" button-default">Product Stock</button>
            <button class=" button-default">Database Management</button>
            <button class=" button-default">Delivery Ordering</button>
            <button class=" button-default">User Account Management</button>
            <button class=" button-default">Profit Tracking</button>
            <button class=" button-default">Admin Activity</button>
            <button class=" button-default">Log Out</button>
        </div>
    </div>
</body>