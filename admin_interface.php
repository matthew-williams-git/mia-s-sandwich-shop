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
            <button class="user-active">User</button>
            <button class="activity">Activity</button>
        </div>
        <div class="button-selection">

        </div>
    </div>
</body>