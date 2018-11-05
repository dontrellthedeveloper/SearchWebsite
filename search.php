<?php
include("config.php");
include("classes/SiteResultsProvider.php");

    if(isset($_GET["term"])) {
        $term = $_GET["term"];
    }
    else {
        exit("You must enter a search term");
    }

    if(isset($_GET["type"])) {
        $type = $_GET["type"];
    }
    else {
        $type = "sites";
    }


?>

<!doctype html>
<html lang="en">
<head>
    <title>Welcome to Tunnel Search</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div class="wrapper">

    <div class="header">

        <div class="headerContent">

            <div class="logoContainer">
                <a href="Index.php">
                    <img src="assets/images/TunnelLogo4.svg" name="term">

                </a>

            </div>

            <div class="searchContainer">

                <form action="search.php" method="GET">

                    <div class="searchBarContainer">

                        <input class="searchBox" type="text">

                            <button class="searchButton">
                                <img src="assets/images/icons/Search2.png" alt="">
                            </button>


                    </div>

                </form>


            </div>



        </div>

        <div class="tabsContainer">

            <ul class="tabList">

                <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                    <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                        Sites
                    </a>
                </li>

                <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
                    <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                        Images
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <div class="mainResultsSection">

    <?php

    $resultsProvider = new SiteResultsProvider($con);

    echo $resultsProvider->getNumResults($term);

    ?>


    </div>

</div>


</body>
</html>
