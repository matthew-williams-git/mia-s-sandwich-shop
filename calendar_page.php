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
        
        <label for-"eventnotes">Notes</label><br>
        <input type="text" id="eventnotes" name-"eventnotes_input">

        <button type="enterbutton">Submit</button>
    </form>
     
    <div class="calendar-main">
        <div class="month-indicator"> ... </div>
        <div class="day-of-week">
            <div>Su</div>
            <div>Mo</div>
            <div>Tu</div>
            <div>We</div>
            <div>Th</div>
            <div>Fr</div>
            <div>Sa</div>
        </div>
        
        /* Credit to zellwk.com 2019 for the calendar grid */
        
        <div class="date-grid">
            <button>
                <time datetime="2022-02-01">1</time>
            </button>
            <button>
                <time datetime="2022-02-02">2</time>
            </button>
            <button>
                <time datetime="2022-02-03">3</time>
            </button>
            <button>
                <time datetime="2022-02-04">4</time>
            </button>
            <button>
                <time datetime="2022-02-05">5</time>
            </button>
            <button>
                <time datetime="2022-02-06">6</time>
            </button>
            <button>
                <time datetime="2022-02-07">7</time>
            </button>
            <button>
                <time datetime="2022-02-08">8</time>
            </button>
            <button>
                <time datetime="2022-02-09">9</time>
            </button>
            <button>
                <time datetime="2022-02-10">10</time>
            </button>
            <button>
                <time datetime="2022-02-11">11</time>
            </button>
            <button>
                <time datetime="2022-02-12">12</time>
            </button>
            <button>
                <time datetime="2022-02-13">13</time>
            </button>
            <button>
                <time datetime="2022-02-14">14</time>
            </button>
            <button>
                <time datetime="2022-02-15">15</time>
            </button>
            <button>
                <time datetime="2022-02-16">16</time>
            </button>
            <button>
                <time datetime="2022-02-17">17</time>
            </button>
            <button>
                <time datetime="2022-02-18">18</time>
            </button>
            <button>
                <time datetime="2022-02-19">19</time>
            </button>
            <button>
                <time datetime="2022-02-20">20</time>
            </button>
            <button>
                <time datetime="2022-02-21">21</time>
            </button>
            <button>
                <time datetime="2022-02-22">22</time>
            </button>
            <button>
                <time datetime="2022-02-23">23</time>
            </button>
            <button>
                <time datetime="2022-02-24">24</time>
            </button>
            <button>
                <time datetime="2022-02-25">25</time>
            </button>
            <button>
                <time datetime="2022-02-26">26</time>
            </button>
            <button>
                <time datetime="2022-02-27">27</time>
            </button>
            <button>
                <time datetime="2022-02-28">28</time>
            </button>

        </div>      
    </div>
</body>
