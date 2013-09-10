<?php /*require_once ("Includes/session.php"); */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My Site's Title</title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">
        <!-- CSS -->
        <link href="/Styles/structure.css" rel="stylesheet">
        <link href="/Styles/form.css" rel="stylesheet">
        <link href="cssmenutools/scripts/MTHM.css" rel="stylesheet">
        <!-- JavaScript -->
        <script src="/scripts/wufoo.js"></script>
        <!--[if lt IE 10]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="/index.php">My Site</a></p>
                </div>
                <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php
                            /*
                        if (logged_on())
                        {
                            echo '<li><a href="/logoff.php">Sign out</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="/addpage.php">Add</a></li>' . "\n";
                                echo '<li><a href="/selectpagetoedit.php">Edit</a></li>' . "\n";
                                echo '<li><a href="/deletepage.php">Delete</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li><a href="/logon.php">Login</a></li>' . "\n";
                            echo '<li><a href="/register.php">Register</a></li>' . "\n";
                        }*/
                        ?>
                        </ul>
                        <?php /*if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome, <strong>{$_SESSION['username']}</strong></div>\n";
                        } */ ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>
            <div id="MTHMFGYNRVADiv" class="MTHMFGYNRVAwrapper">
    <div id="MTHMFGYNRVATop" class="MTHMFGYNRVAtop">
        <div class="MTHMFGYNRVAtopleft">
            <div class="MTHMFGYNRVAtopright">
                <div class="MTHMFGYNRVAtopmiddle">
                    <ul>
                        <li class="MTHMFGYNRVAitem1" style="margin-left:0px">
                            <a href="#"><span>Products</span></a>
                        </li>
                        <li class="MTHMFGYNRVAitem5">
                            <a href="#"><span>Download</span></a>
                        </li>
                        <li class="MTHMFGYNRVAitem5">
                            <a href="#"><span>Purchase</span></a>
                        </li>
                        <li class="MTHMFGYNRVAitem1">
                            <a href="#"><span>Support</span></a>
                        </li>
                        <li class="MTHMFGYNRVAitem1">
                            <a href="#"><span>Company</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="MTHMFGYNRVAlevel2">
        <div class="MTHMFGYNRVAlevel2left">
            <div class="MTHMFGYNRVAlevel2right">
                <div id="MTHMFGYNRVALevel2" class="MTHMFGYNRVAlevel2middle">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="cssmenutools/scripts/MTHM.js">/* MTHMMenu script ID:MTHMFGYNRVA */</script>
</div>
            <!-- 
                <section class="navigation" data-role="navbar">
                    <nav>
                        <ul id="menu">
                            <li><a href="/index.php">Home</a></li>
                            <?php
                                /*
                                $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                                $statement->execute();

                                if($statement->error)
                                {
                                    die("Database query failed: " . $statement->error);
                                }

                                $statement->bind_result($id, $menulabel);
                                while($statement->fetch())
                                {
                                    echo "<li><a href=\"/page.php?pageid=$id\">$menulabel</a></li>\n";
                                }
                                */
                            ?>
                        </ul>
                    </nav>
            </section>
            -->
        </header>
