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
        <div class="interface">
            <button class="top-btn button-default">User</button>
            <button class="top-btn button-default">Activity</button>
        </div>
        <div class="interface">
            <button class="btn-sel button-default">Business Analytics</button>
            <button class="btn-sel button-default">Product Stock</button>
            <button class="btn-sel button-default">Database Management</button>
            <button class="btn-sel button-default">Delivery Ordering</button>
            <button class="btn-sel button-default">User Account Management</button>
            <button class="btn-sel button-default">Profit Tracking</button>
            <button class="btn-sel button-default">Admin Activity</button>
            <button class="btn-sel button-default">Log Out</button>
        </div>
    </div>
</body>