<?php
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="invoice_page1.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .invoices_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="Page-head">
        <h1>Overview</h1>
    </div>
    <a href="#works">
        <div class="new-invoice-btn">
            <img src="title_bar_images/Plus Icon.png">
            <p>New invoice</p>
        </div>
    </a>

    <div class="main_body_table">
        <table>
            <tr>
                <th>Company</th>
                <th>Address</th>
                <th>Price</th>
                <th>Description of Invoice</th>
            </tr>
            <tr>
                <td>Business 1</td>
                <td>1 Lollypop lane, candy town</td>
                <td>too expensive</td>
                <td>price of building the website and database</td>
            </tr>
        </table>
    </div>

    <div class="outbound_invoices">
        <table>
            <tr>
                <th style="169.7px;">Company being paid</th>
                <th style="438.95px;">Address</th>
                <th style="216.033px;">Price</th>
                <th style="665.317px;">Description of invoice</th>
            </tr>
            <tr>
                <td style="169.7px;">Business 2</td>
                <td style="438.95px;">2 Lollypop lane, candy town</td>
                <td style="216.033px;">Rather dear</td>
                <td style="665.317px;">Energy bills</td>
            </tr>
        </table>
    </div>
</body>