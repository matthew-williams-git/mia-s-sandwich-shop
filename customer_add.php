<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="customer_add.css">
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="switch_style.css">
    <style>
        .customer_tab {
            background-color: #404040;
        }
    </style>
</head>
<body>
    <div class="page_title">
        <h1>New Customer</h1>
    </div>
    <!-- buttons, top right of page -->
    <a href="customer_page.php">
        <div class="confirm_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Confirm</p>
        </div>
    </a>    
    
    <a href="customer_page.php">
        <div class="cancel_button">
            <img src="title_bar_images/Plus Icon.png">
            <p>Cancel</p>
        </div>
    </a>
    
    <!-- left hand form -->
    <div class="Customer_details">
        <div class="left_culumn">
            <label for="customer_fname">First name</label><br>
            <input type="text" id="cusotmer_fname" name="customer_fname" placeholder="Enter first name..."><br><br>

            <label for="customer_title">Title</label><br>
            <select name="customer_title" id="title">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Mx">Mx</option>
            </select>
        </div>

        <div class="right_culumn">
            <label for="customer_lname">Last Name</label><br>
            <input type="text" id="customer_lname" name="customer_lname" placeholder="Enter last name...">
        </div>

        <div class="phone_number">
            <h3>Contact details</h3><br>
            <label for="customer_pnumber">Phone number</label><br>
            <input type="text" id="customer_pnumber" name="customer_pnumber" placeholder="07792329851">
        </div>

        <div class="phone_type">
            <h3></h3><br>
            <label for="phone_type">Phone type</label><br>
            <select name="phone_type" id="phone">
                <option value="Mobile">Mobile</option>
                <option value="Home_landline">Home landline</option>
                <option value="Office_landline">Office landline</option>
            </select>
        </div>

        <div class="email_address">
            <label for="email_address">Email address</label><br>
            <input type="email" id="email_address" name="email_address" placeholder="example@businss.co.uk"><br><br>

            <label for="cc_email_adress">Invoice CC email address</label><br>
            <input type="email" id="cc_email_address" name="cc_email_address" placeholder="example@businss.co.uk">
        </div>
    </div>

    <!-- right hand form -->
    <div class="right_hand_from">
        <div class="business_details">
            <label for="business_name">Business name</label><br>
            <input type="text" id="business_name" name="business_name" placeholder="Business name"><br><br>

            <label for="bill/del_adr">Billing/delivery address</label><br>
            <input type="text" id="bill/del_adr" name="bill/del_adr" placeholder="156 Marzipan Views"><br><br>

            <label for="adr_ln_2">Address line 2</label><br>
            <input type="text" id="adr_ln_2" name="adr_ln_2" placeholder="Sugarplum Mountain"><br><br>

            <label for="closest_city">Closest City</label><br>
            <input type="text" id="closest_city" name="closest_city" placeholder="Truffle Town"><br><br>

            <label for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode" placeholder="TR15 8NK">
        </div>

        <div class="customer_options">
            <label for="promo_email_chbx">Recieve Promotional emails</label>
            <input type="checkbox" name="promo_email_chbx" checked="" style="float:right; margin-right:50px"><br><br>

            <!-- toggle switch doodah -->
            <label style="padding: 9px 0px; float: left;">Recieve invoices by post</label>
            <label class="switch" style="margin: 0px 40px; float: left;">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
            <label style="padding: 9px 0px; float: left;">Recieve invoices by email</label><br><br><br>

            <label for="act_sms_chbx">Activate SMS communications</label>
            <input type="checkbox" name="act_sms_chbx" checked="" style="float:right; margin-right:50px"><br><br>

            <label for="tax_exempt_chbx">Tax exempt</label>
            <input type="checkbox" name="tax_exempt_chbx" checked="" style="float:right; margin-right:50px">
        </div>
    </div>

</body>
