<?php

require "welcome.php";

if (isset($_GET['ID'])) {
    $topic_ID = $_GET['ID'];
} else {
    include "/pages/main.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="Description" content="Homepage of the XENONMC Development Team. Meet our team members and connect to our growing community." />
        <?php include "/includes/includes.php"; ?>
        <title>XForums Development Team</title>
    </head>

    <body class="bg-carbon">
        <section id="navbar">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="/assets/images/logo.webp" alt="XENONMC Logo: Green Lightning Bolt on a Black background">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="devDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dev Links</a>
                            <div class="dropdown-menu bg-dark" aria-labelledby="devDropdown">
                                <button onclick="addOutput()" class="dropdown-item text-github">Pull Site</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!-- Terminal Output Modal -->
        <div id="jsInsertTerminal"></div>
        <section id="jumbotron-welcome">
            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="container">
                    <div class="page-header">
                        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
                    </div>
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
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
                                <a href="https://lucasburlingham.me/" class="btn btn-primary">Profile</a>
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
                                        <div class="progress-bar bg-success text-dark" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
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
                                        <div class="progress-bar bg-success text-light" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80%
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
                                    <p class="card-text text-secondary">Backend in MySQL</p>
                                    <small class="text-dark">Being designed...</small>
                                    <div class="progress text-dark">
                                        <div class="progress-bar bg-success text-light" style="width: 60%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            60%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="goals">
            <div class="jumbotron bg-secondary">
                <h1 class="text-light">Our Goals: <kbd>v1.1_alpha</kbd></h1>
                <div class="rounded-black">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="bg-dark markdown" id="markdown">
                                    # Hey
                                </div>
                            </div>
                        </div>
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


    </body>

    </html>
<?php }
