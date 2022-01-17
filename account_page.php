<?php
    session_destroy();
    session_start();
    include('top_bar.php');
    include('ribbon.php');
?>
<body>
    <form action="account_data_process.php" method="POST">

        <br><br><input type="text" name="uname" placeholder="Username"><br>
        <input type="text" name="pword" placeholder="Password"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>