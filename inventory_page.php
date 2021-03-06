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

    <a href="#working">
        <div class="add_item_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>Add item</p>
        </div>
    </a>

    <div class="search_bar">
        <input type="search" name="search_bar" id="search_bar">
        <input type="submit" value="Go!">
    </div>

    <div class="main_content">
        <div class="#filter_btns">
            <a href="#all">
                <div class="all_btn">
                    <p>All</p>
                </div>
            </a>
            <a href="#cold meat">
                <div class="cold_meat_btn">
                    <p>Cold Meats</p>
                </div>
            </a>
            <a href="#vegitables">
                <div class="veg_btn">
                    <p>Vegatables</p>
                </div>
            </a>
            <a href="#bread">
                <div class="bread_btn">
                    <p>Bread</p>
                </div>
            </a>
            <a href="#source">
                <div class="souce_btn">
                    <p>Sauces</p>
                </div>
            </a>
            <a href="#other">
                <div class="other_btn">
                    <p>Other</p>
                </div>
            </a>
        </div>

        <div class="inventory_table">
            <table>
                <tbody><tr>
                    <th style="width: 90px;">     </th>
                    <th style="width: 250px;">Name</th>
                    <th style="width: 600px">Description</th>
                    <th style="width: 100px;">Cost</th>
                    <th style="width: 100px;">Retail</th>
                    <th style="width: 100px;">Quantity</th>
                    <th style="width: 100px;">Catagory</th>
                    <th style="width: 130px;">     </th>
                </tr>
                <tr>
                    <td>     </td>
                    <td>White Bread</td>
                    <td>White sandwich bread</td>
                    <td>??xx.xx</td>
                    <td>??xx.xx</td>
                    <td>xx</td>
                    <td>Bread</td>
                    <td>     </td>
                </tr>
                <tr>
                    <td>     </td>
                    <td>Brown Bread</td>
                    <td>Brown bread for sandwich making</td>
                    <td>??xx.xx</td>
                    <td>??xx.xx</td>
                    <td>xx</td>
                    <td>Bread</td>
                    <td>     </td>
                </tr>
            </tbody></table>
        </div>
        
    </div>
</body>
