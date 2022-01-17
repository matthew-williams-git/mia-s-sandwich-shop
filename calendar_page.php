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
        <input type="text" id="eventname" name="eventname_input" width=482px><br><br>
            
        <label for="date">Date</label><br>
        <input type="date" id="date" name="date_input" width=482px><br><br>

        <label for="time">Time</label><br>
        <input type="time" id="time" name="time_input" width=482px><br><br>
        
        <label for="eventlocation">Location</label><br>
        <input type="text" id="eventlocation" name="eventlocation_input" width=482px><br><br>
        
        <label for="eventnotes">Notes</label><br>
        <input type="text" id="eventnotes" name="eventnotes_input" width=4802px>

        <button type="enterbutton">Submit</button>
    </form>
     
    <div class="calendar-main">
        <div class="month">
            <ul>
                <li class="prev">&#10094;</li>
                <li class="next">&#10095;</li>
                <li>January<br><span style="font-size:18px">2022</span></li>
            </ul>
        </div>
        
       <ul class="weekdays">
           <li>Mo</li>
           <li>Tu</li>
           <li>We</li>
           <li>Th</li>
           <li>Fr</li>
           <li>Sa</li>
           <li>Su</li>
       </ul>

       <ul class="days">
           <li>27</li>
           <li>28</li>
           <li>29</li>
           <li>30</li>
           <li>31</li>
           <li>1</li>
           <li>2</li>
           <li>3</li>
           <li>4</li>
           <li><span class="active">5</span></li>
           <li>6</li>
           <li>7</li>
           <li>8</li>
           <li>9</li>
           <li>10</li>
           <li>11</li>
           <li>12</li>
           <li>13</li>
           <li>14</li>
           <li>15</li>
           <li>16</li>
           <li>17</li>
           <li>18</li>
           <li>19</li>
           <li>20</li>
           <li>21</li>
           <li>22</li>
           <li>23</li>
           <li>24</li>
           <li>25</li>
           <li>26</li>
           <li>27</li>
           <li>28</li>
           <li>29</li>
           <li>30</li>
           <li>31</li>
           <li>1</li>
           <li>2</li>
           <li>3</li>
           <li>4</li>
           <li>5</li>
           <li>6</li>
        </ul>
    </div>
    
    <div class="current.event">
        <h1>Current Events</h1>
        
        <p>See Sharon: 13:00-13:30</p><br>
        <p>Delivery: 16:00-17:00</p>
        
        
    </div>
</body>
