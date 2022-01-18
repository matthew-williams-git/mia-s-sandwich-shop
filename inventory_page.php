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

    <a href="invoice_page2.php">
        <div class="add_item_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>New invoice</p>
        </div>
    </a>

    <div class="search_bar">
        <input type="search" name="search_bar" id="search_bar">
        <input type="submit" value="Go!">
    </div>

    <div class="main_content">
        <div class="filter_btns">
            <div class="all_btn">
                <p>All</p>
            </div>
            <div class="cold_meat_btn">
                <p>Cold Meats</p>
            </div>
            <div class="veg_btn">
                <p>Vegatables</p>
            </div>
            <div class="bread_btn">
                <p>Bread</p>
            </div>
            <div class="souce_btn">
                <p>Sauces</p>
            </div>
            <div class="other_btn">
                <p>Other</p>
            </div>
        </div>

        <div class="inventory_table">
            <table>
                <tbody><tr>
                    <th style="width: 50px;">     </th>
                    <th style="width: 250px;">Name</th>
                    <th style="width: 600px">Description</th>
                    <th style="width: 100px;">Cost</th>
                    <th style="width: 100px;">Retail</th>
                    <th style="width: 100;">Quantity</th>
                    <th style="width: 100px;">Catagory</th>
                    <th style="width: 50px;">     </th>
                </tr>
                <tr>
                    <td>     </td>
                    <td>White Bread</td>
                    <td>White sandwich bread</td>
                    <td>£xx.xx</td>
                    <td>£xx.xx</td>
                    <td>xx</td>
                    <td>Bread</td>
                    <td>     </td>
                </tr>
            </tbody></table>
        </div>
        
    </div>
</body>