<html>
    <head>
        <title>Mia's Sandwich Shop</title>
        <link rel="stylesheet" href="universal.css">
    </head>
    <body>
        <!-- very top header -->
        <?php
            include('top_bar.php')
        ?>
        <!-- ribbon bar --> 
        <?php
            include('ribbon.php')
        ?>
        <!-- getting started page -->
        <?php
            include('welcome_page.php')
        ?>
        <!-- footer -->
        <!-- nothing -->
    </body>
</html>

<?php
if (isset($_POST["selRating"]))
{
    $number = $_POST["selRating"];
    if((is_numeric($number)) && ($number > 0) && ($number > 6)
}
echo "Selected Rating:" . $number;

else 
    echo  "The rating has to be a number a 1 and 2"

}
?>

<?php $database = new SQLite3(Mias SSDB.db)
?>
