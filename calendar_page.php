<?php
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="calendar_page.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .calender_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="add-calendar">
        <h1>Add To Calendar</h1>
        
        <label for="eventname">Name Of Event</label><br>
        <input type="text" id="eventname" name="eventname_input"><br><br>
            
        <label for="datetime">Time And Date</label><br>
        <input type="datetime" id="datetime" name="datetime_input"><br><br>
        
        <label for="eventlocation">Location</label><br>
        <input type="text" id="eventlocation" name="eventlocation_input"><br><br>
    </div>
     
    <div class="calendar-main">
        
    </div>
</body>
