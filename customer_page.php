<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="customer_page.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .customer_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <h1>Customers</h1>
    
    <div class="search_bar">
        <input type="search" id="user_search" name="user_search" placeholder="Search users">
        <input type="submit" value="Go!">
    </div>

    <a href="customer_add.php">
        <div class="add_customer_btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>Add Customer</p>
        </div>
    </a>

    <div class="customer_table">
        <table>
            <tr> <!-- table headings -->
                <th>Contact name</th>
                <th>Business name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <tr> <!-- first row of the table -->
                <td>Nick Bosley</td>
                <td>Strode-digital</td>
                <td>nick@strode-digital.uk</td>
                <td>01234567891</td>
            </tr>
            <tr> <!-- second row of table -->
                <td>Matt Wills</td>
                <td>Strode-digital</td>
                <td>matt@strode-digital.uk</td>
                <td>01234567892</td>
            </tr>
            <tr> <!-- third row in table -->
                <td>Freddie Lane</td>
                <td>Strode-digital</td>
                <td>freddielane@strode-digital.uk</td>
                <td>01234567893</td>
            </tr>
        </table>
    </div>
</body>
