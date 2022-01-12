<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="invoice_page2.css">
    <link rel="stylesheet" href="universal.css">
    <style>
        .invoice_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="page_head">
        <h1>New Invoice</h1>
    </div>

    <a href="invoice_page1.php">
        <div class="cancel_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Cancel</p>
        </div>
    </a>

    <!-- add php in here somewhere to input data into the database -->
    <a href="invoice_page1.php">
        <div class="confirm_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Confirm</p>
        </div>
    </a>

    <!-- input fields for data -->
    <div class="etr_customer_data">
        <legend>Enter Cusomer/Business details</legend><br><br>

        <label for="bname">Business or Customer name</label>
        <input type="text" id="bname" name="bname_input" placeholder="Business name"><br><br>

        <label for="acontact">Assigned Contact</label>
        <input type="text" id="acontact" name="acontact_input" placeholder="Assigned Contact"><br><br>

        <label for="title">Title</label>
        <input type="text" id="title" name="title_input" placeholder="Mr, Mrs, Dr, Ms"><br><br>

        <label for="emailaddress">Email Address</label>
        <input type="email" id="emailaddress" name="emailaddress_input" placeholder="nobodyknows@whocares.co.uk"><br><br>

        <label for="pnumber">Phone Number</label>
        <input type="text" id="pname2" name="pname_input"><br><br>

        <label for="postaladdress">Postal/delivery address</label>
        <textarea name="postaladdress_input" id="postaladdress" cols="30" rows="10">lollypop lollypop, oh lolly lolly lolly lollypop.... ubub bumb bumb</textarea><br><br>

        <label for="extrainfo">Additional Information</label>
        <textarea name="extrainfo_input" id="extrainfo" cols="30" rows="10"></textarea>
    </div>

    <div class="invoice_details">
        <legend>Invoice details</legend><br><br>

        <label for="invoice_number"> Invoice Number</label>
        <input type="text" id="invoice_number" name="invoice_number_input"><br><br>

        <label for="status">Status</label>
        <input type="text" id="status" name="status_input" placeholder="in limbo"><br><br>

        <label for="invoicedate">Invoicing date</label>
        <input type="date" id="invoicedate" name="invoicedate_input" value="current date"><br><br> <!-- work out how to get current date -->

        <label for="taxdate">Tax date</label>
        <input type="date" id="taxdate" name="taxdate_input"><br><br> <!-- work out how to display date one month from now -->

        <label for="paymentdate">Payment Due:</label>
        <input type="date" id="paymentdate" name="paymentdate_input"><br><br>

        <label for="amountdue">Amount Due</label>
        <input type="number" id="amountdue" name="amountdue_input" value="way to much">
    </div>

    <div class="price_breakdown">
        <legend>Price breakdown</legend><br><br>

        <table>
            <tr>
                <th style="width: 80px">Quantity</th>
                <th style="width: 1200px">Description</th>
                <th style="width: 100px">Unit Price</th>
                <th style="width: 40px">VAT</th>
                <th style="width: 70px">Total</th>
            </tr>
            <tr>
                <td>3</td>
                <td>What it costs to develop this system</td>
                <td>6000</td>
                <td>0%</td>
                <td>18000</td> <!-- work out how to do calculated fields -->
            </tr>
        </table>
    </div>
</body>