<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="calendar_page.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .calendar_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <form class="add-calendar" action="calendar_data.php" method="POST">
        <h1>Add To Calendar</h1>
        
        <label for="eventname">Name Of Event</label><br>
        <input type="text" id="eventname" name="eventname_input"><br><br>
            
        <label for="date">Date</label><br>
        <input type="date" id="date" name="date_input"><br><br>

        <label for="time">Time</label><br>
        <input type="time" id="time" name="time_input"><br><br>
        
        <label for="eventlocation">Location</label><br>
        <input type="text" id="eventlocation" name="eventlocation_input"><br><br>

        <input type="submit" id="Submit"></input>
    </form>
     
    <div class="calendar-main">
        
    </div>
</body>
