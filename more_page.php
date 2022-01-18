<?php
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="more_page.css">
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="switch_style.css">
    <style>
        .more_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <!-- page title -->
    <div class="page_title">
        <h1>Settings</h1>
    </div>
    
    <!-- colourblind menu -->
    <div class="colorblind_menu">
        <h3>Colourblind mode</h3><br>
        <p>Off</p>
        <label class="switch">
            <input type="checkbox" id="color_blind_toggle" onclick="myFunction()">
            <span class="slider"></span>
        </label>
        <p>On</p>
        
        <div class="color_blind_modes">
            <label for="rg_clb" id="rg_clb">Red / Green</label>
            <input type="checkbox" id="rg_clb" style="display:none;">
        </div>
        
        <!-- make the checkboxes appear when toggle flipped -->
        <script>
        function myFunction() {
        var checkBox = document.getElementById("color_blind_toggle");
        var text = document.getElementById("rg_clb");
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
            }
        }
        </script>
    </div>   
</body>
