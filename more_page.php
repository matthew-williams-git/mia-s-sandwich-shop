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
        <div class="toggle_group">
            <h3>Colourblind mode</h3><br>
            <p>Off</p>
            <label class="switch">
                <input type="checkbox" id="color_blind_toggle" onclick="colorFunction()">
                <span class="slider"></span>
            </label>
            <p>On</p>
        </div>
        
        <div class="rg_color_blind">
            <label for="rg_clb" id="rg_clb_l" style="display:none;">Red / Green</label>
            <input type="checkbox" id="rg_clb" style="display:none;">
        </div>
        
        <div class="by_color_blind">
            <label for="by_clb" id="by_clb_l" style="display:none;">Blue / Yellow</label>
            <input type="checkbox" id="by_clb" style="display:none;">
        </div>
        
        <!-- make the checkboxes appear when toggle flipped -->
        <script>
        function colorFunction() {
        var checkBox = document.getElementById("color_blind_toggle");
        var text_1 = document.getElementById("rg_clb");
        var label_1 = document.getElementById("rg_clb_l");
        var text_2 = document.getElementById("by_clb");
        var label_2 = document.getElementById("by_clb_l");
        if (checkBox.checked == true){
            text_1.style.display = "block";
            label_1.style.display = "block";
            text_2.style.display = "block";
            label_2.style.display = "block";
        } else {
            text_1.style.display = "none";
            label_1.style.display = "none";
            text_2.style.display = "none";
            label_2.style.display = "none";
            }
        }
        </script>
    </div>   
    <div class="color_theme">
        <div class="toggle_group">
            <h3>Theme</h3><br>
            <p>Default</p>
            <label class="switch">
                <input type="checkbox" id="theme_slider" onclick="themeFunction()">
                <span class="slider"></span>
            </label>
            <p>Dark</p>
        </div>

        <div class="contrast_toggle" id="contrast_class">
            <h3>Contrast setting</h3>
            <p>Default</p>
            <label class="switch" style="float:left;margin-top:25px">
                <input type="checkbox" id="light_dark_slider"> 
                <span class="slider"></span>
            </label>
            <p>Super high</p>
        </div>

        <script>
            function themeFunction() {
                var trigger = document.getElementById("theme_slider");
                var slider = document.getElementById("contrast_class");

                if (trigger.checked == true){
                    slider.style.display = "block";
                }
                else {
                    slider.style.display = "none";
                }
            }
        </script>
    </div>
</body>
