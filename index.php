<?php


if (isset($_GET['ID'])) {
    session_start();
    $topic_ID = $_GET['ID'];
    displayPost($topic_ID);
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Homepage of the XENONMC Development Team. Meet our team members and connect to our growing community." />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" async>
        <!-- load sheet then javascript -->
        <link rel="stylesheet/less" type="text/css" href="assets/css/<?php echo $_SESSION["theme"]; ?>.less" />
        <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
        <title>XForums Development Team</title>
        <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    </head>

    <body class="bg-carbon">
        <section id="navbar">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.jpg" alt="XENONMC Logo: Green Lightning Bolt on a Black background">
                    XForum</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#teamMembers_centered">Our Team</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links & Contact</a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="contactDropdown">
                                <a class="dropdown-item text-discord" href="https://discord.gg/jFEWYnDW6y"><i class="fab fa-discord"></i> Discord</a>
                                <a class="dropdown-item text-github" href="https://github.com/xenonmc-dev"><i class="fab fa-github-square"></i> Github</a>
                            </div>
                        </li>
                        <?php
                        if ($_SESSION["loggedin"] || $_SESSION["loggedin"] !== true && $_SESSION["username"] != NULL) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="accountDropdown">
                                    <a href="profile.php" class="btn btn-success btn-sm btn-block">Personal Profile</a>
                                    <a href="settings.php" class="btn btn-success btn-sm btn-block">Manage Your Settings</a>
                                    <br>
                                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                                </div>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="login.php">Login</a>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="jumbotron-welcome">
            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="container">
                    <h1 class="display-3 text-gradient">XenonMC Development</h1>
                    <p class="lead text-light">Young Developers in the making.</p>
                    <hr class="my-2">
                    <!-- filler div for centering the team member cards on most screens -->
                    <div id="teamMembers_centered"></div>
                    <p class="text-secondary">(Stay tuned for our first release <abbr>04/18/2021</abbr>!)</p>
                    <p class="lead">
                        <a class="btn btn-outline-success" href="https://github.com/XENONMC-DEV/">
                            <img src="assets/images/GitHub-Mark-Light-32px.png" alt="Github mark" height="17em"> Github</a>
                    </p>
                </div>
            </div>
        </section>
        <section id="teamMembers">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-animated mr-2 card-dark">
                            <div class="card-header bg-dark text-info">
                                Owner & Backend Developer
                            </div>
                            <div class="card-body text-light bg-darker">
                                <h5 class="card-title">XfaonMC</h5>
                                <p class="card-text">Youth developer in the USA. Student by day, developer by night.
                                </p>
                                <a href="#" class="btn btn-primary disabled">Awaiting Approval...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-animated mr-2 ml-2 card-dark">
                            <div class="card-header bg-dark text-info">
                                Server & Project Manager, Frontend
                            </div>
                            <div class="card-body text-light bg-darker">
                                <div class="card-img">
                                    <img src="https://golca.org/resources/profile.jpg" alt="Lucas' Profile Picture" class="centered rounded mx-auto d-block img-fluid img-thumbnail" width="40%">
                                </div>
                                <hr>
                                <h5 class="card-title">Lucas Burlingham</h5>
                                <p class="card-text">Youth developer in the USA, IT Support Technician
                                </p>
                                <a href="https://lucasburlingham.me/" class="btn btn-primary">Resume</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-animated ml-2 card-dark">
                            <div class="card-header bg-dark text-info">
                                Discord & Minecraft Moderator
                            </div>
                            <div class="card-body text-light bg-darker">
                                <h5 class="card-title">MrTechGuy</h5>
                                <p class="card-text">The elusive MrTechGuy can be found in the depths of Discord...
                                </p>
                                <a href="#" class="btn btn-primary disabled">Awaiting Approval...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-bottom"></div>
        </section>
        <section id="progress padding-bottom">
            <div class="jumbotron-fluid bg-dark">
                <br>
                <h1 class="centered">XForums Series Progress</h1>
                <p class="centered text-light">
                    <small>Please note that this product is <b>not</b> production ready, and should be considered in
                        alpha testing.</small>
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">XForums</h5>
                                    <hr>
                                    <p class="card-text text-secondary">The All-In-One, Self-Hosted forum.</p>
                                    <small class="text-dark">Waiting on Framework...</small>
                                    <div class="progress text-dark">
                                        <div class="progress-bar bg-success text-dark" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            0%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">XenonMC Minecraft Server</h5>
                                    <hr>
                                    <p class="card-text text-secondary">Minecraft Java Server, all for you.</p>
                                    <small class="text-dark">Looking for Hosting Platform...</small>
                                    <div class="progress text-dark">
                                        <div class="progress-bar bg-success text-light" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1">0%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Framework</h5>
                                    <hr>
                                    <p class="card-text text-secondary">The driving force of all our services.</p>
                                    <small class="text-dark">In Progress...</small>
                                    <div class="progress text-dark">
                                        <div class="progress-bar bg-success text-light" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Database</h5>
                                    <hr>
                                    <p class="card-text text-secondary">MySQL Database</p>
                                    <small class="text-dark">Looking for reliable hosting options...</small>
                                    <div class="progress text-dark">
                                        <div class="progress-bar bg-success text-light" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="template">
            <?php
            require_once "config.php";
            $result = mysqli_query($conn, "SELECT * FROM `content` ORDER BY `topic_DATE` ASC;");

            while ($row = mysqli_fetch_array($result)) {

            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 col-md-2">
                        </div>
                        <div class="col-sm-10 col-md-8">
                            <div class="card bg-dark my-5">
                                <div class="card-header">
                                    <h5 class="card-title text-success"><?php echo $row["topic_NAME"]; ?></h5>
                                    <span class="float-right"><?php echo $row["topic_CREATORID"]; ?></span>
                                    <small>
                                        <?php
                                        $date = date_create($row["topic_DATE"]);
                                        echo date_format($date, 'jS F Y \a\t g:ia'); ?></small>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row["topic_CONTENT"]; ?></p>
                                </div>
                                <div class="card-footer">
                                    <small><span class="text-danger"><?php echo $row["topic_REP"]; ?></span> </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-2">
                        </div>
                    </div>
                </div>


            <?php
            }
            ?>
        </section>
        <section id="footer">
            <footer class="bg-dark padding-up padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <h5>XenonMC Development Team</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <ul class="no-style">
                                <p>
                                    <b>Links:</b>
                                </p>
                                <li>
                                    <a class="text-purple" href="https://discord.gg/jFEWYnDW6y"><i class="fab fa-discord"></i>
                                        Discord</a>
                                </li>
                                <li>
                                    <a class="text-light" href="https://github.com/xenonmc-dev"><i class="fab fa-github-square"></i> Github</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <table class="padding-bottom">
                                <tr>
                                    <th>
                                        <b>Status:</b>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <small>
                                            Codacy Review:
                                        </small>
                                    </td>
                                    <td>
                                        <a href="https://www.codacy.com/gh/XENONMC-DEV/xenonmc.xyz/dashboard?utm_source=github.com&amp;utm_content=XENONMC-DEV/xenonmc.xyz">
                                            <img src="https://app.codacy.com/project/badge/Grade/00257b7c0557468fb18de75285bbfe44" />
                                        </a>
                                    </td>
                                <tr>
                                    <td>
                                        <small>
                                            IONOS Status:
                                        </small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://www.ionos-status.com" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Github Status:</small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://www.githubstatus.com" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Overall Status:</small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://xenonmc.statuspage.io/" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <b>
                                &copy; 2021 <a href="https://lucasburlingham.me/" class="text-warning">Lucas
                                    Burlingham</a> and the
                                <a href="#navbar" class="text-success">XenonMC Development Team</a>
                            </b>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <!-- discord integration -->
        <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
            new Crate({
                server: '765395501331120168',
                channel: '800154146434056192',
            })
        </script>
        <!-- Statuspage  -->
        <script src="https://rpl357kc8bzh.statuspage.io/embed/script.js"></script>
        <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-bundle.js"></script>
        <script src="https://unpkg.com/@statuspage/status-widget/dist/index.js"></script>

        <!-- bootstrap dependencies -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php }

function displayPost($topic_ID)
{
    require_once "config.php";
    $sql = "SELECT * FROM xenonmcx_xframe.content where `topic_ID` = $topic_ID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Homepage of the XENONMC Development Team. Meet our team members and connect to our growing community." />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" async>
        <!-- load sheet then javascript -->
        <link rel="stylesheet/less" type="text/css" href="assets/css/<?php echo $_SESSION["theme"]; ?>.less" />
        <script src=" //cdn.jsdelivr.net/npm/less@3.13">
        </script>
        <title>XForum: <?php echo $row["topic_NAME"]; ?></title>
        <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    </head>

    <body class="bg-carbon">
        <section id="navbar">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.jpg" alt="XENONMC Logo: Green Lightning Bolt on a Black background">
                    XForum</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#teamMembers_centered">Our Team</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links & Contact</a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="contactDropdown">
                                <a class="dropdown-item text-discord" href="https://discord.gg/jFEWYnDW6y"><i class="fab fa-discord"></i> Discord</a>
                                <a class="dropdown-item text-github" href="https://github.com/xenonmc-dev"><i class="fab fa-github-square"></i> Github</a>
                            </div>
                        </li>
                        <?php
                        if ($_SESSION["loggedin"] || $_SESSION["loggedin"] !== true && $_SESSION["username"] != NULL) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="accountDropdown">
                                    <a href="profile.php" class="btn btn-success btn-sm btn-block">Personal Profile</a>
                                    <a href="settings.php" class="btn btn-success btn-sm btn-block">Manage Your Settings</a>
                                    <br>
                                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                                </div>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="login.php">Login</a>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </nav>
        </section>

        <section id="template">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-md-2">
                    </div>
                    <div class="col-sm-10 col-md-8">
                        <div class="card bg-dark my-5">
                            <div class="card-header">
                                <h5 class="card-title text-success"><?php echo $row["topic_NAME"]; ?></h5>
                                <small><?php
                                        $date = date_create($row["topic_DATE"]);
                                        echo date_format($date, 'jS F Y \a\t g:ia'); ?></small>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $row["topic_CONTENT"]; ?></p>
                            </div>
                            <div class="card-footer">
                                <small>Reputation: <?php echo $row["topic_REP"]; ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-2">
                    </div>
                </div>
            </div>
        </section>


        <section id="footer">
            <footer class="bg-dark padding-up padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <h5>XenonMC Development Team</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <ul class="no-style">
                                <p>
                                    <b>Links:</b>
                                </p>
                                <li>
                                    <a class="text-purple" href="https://discord.gg/jFEWYnDW6y"><i class="fab fa-discord"></i>
                                        Discord</a>
                                </li>
                                <li>
                                    <a class="text-light" href="https://github.com/xenonmc-dev"><i class="fab fa-github-square"></i> Github</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <table class="padding-bottom text-light">
                                <tr>
                                    <th>
                                        <b>Status:</b>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <small>
                                            Codacy Review:
                                        </small>
                                    </td>
                                    <td>
                                        <a href="https://www.codacy.com/gh/XENONMC-DEV/xenonmc.xyz/dashboard?utm_source=github.com&amp;utm_content=XENONMC-DEV/xenonmc.xyz">
                                            <img src="https://app.codacy.com/project/badge/Grade/00257b7c0557468fb18de75285bbfe44" />
                                        </a>
                                    </td>
                                <tr>
                                    <td>
                                        <small>
                                            IONOS Status:
                                        </small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://www.ionos-status.com" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Github Status:</small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://www.githubstatus.com" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Overall Status:</small>
                                    </td>
                                    <td>
                                        <statuspage-widget src="https://xenonmc.statuspage.io/" appearance="badge">
                                        </statuspage-widget>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <b>
                                &copy; 2021 <a href="https://lucasburlingham.me/" class="text-warning">Lucas
                                    Burlingham</a> and the
                                <a href="#navbar" class="text-success">XenonMC Development Team</a>
                            </b>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <!-- discord integration -->
        <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
            new Crate({
                server: '765395501331120168',
                channel: '800154146434056192',
            })
        </script>
        <!-- Statuspage  -->
        <script src="https://rpl357kc8bzh.statuspage.io/embed/script.js"></script>
        <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-bundle.js"></script>
        <script src="https://unpkg.com/@statuspage/status-widget/dist/index.js"></script>

        <!-- bootstrap dependencies -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php }
