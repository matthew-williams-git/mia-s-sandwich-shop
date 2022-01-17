<?php
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<head>
    <link rel="stylesheet" href="admin_page1.css">
    <link rel="stylesheet" href="universal.css">
</head>

<body>
    <div class="admin-interface">
        <form action="#" method="post">
            <label class="title">Admin Login</label><br>
            <label class="command">Enter Details</label><br><br>

            <input class="inputs" type="text"       name="branchid" id="branchid"   pattern="[0-9]{3}" title="Branch Number" placeholder="Branch Number"><br><br>
            <input class="inputs" type="text"       name="uname"    id="uname"      placeholder="Username"><br><br>
            <input class="inputs" type="password"   name="pword"    id="pword"      placeholder="Password"><br><br>
            <input type="submit"  name="submit"     id="submit"     value="Submit">

        </form>
    </div>
</body>