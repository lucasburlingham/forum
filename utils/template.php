<?php


function template($topic_ID)
{
}

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
    <link rel="stylesheet/less" type="text/css" href="/assets/css/styles.less" />
    <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
    <title>XForums Development Team</title>
    <link rel="shortcut icon" href="/assets/images/logo.jpg" type="image/x-icon">
</head>


<body class="bg-carbon">
    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo.jpg" alt="XENONMC Logo: Green Lightning Bolt on a Black background">
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
                        <img src="/assets/images/GitHub-Mark-Light-32px.png" alt="Github mark" height="17em"> Github</a>
                </p>
            </div>
        </div>
    </section>
    <section id="topicDisplay">
        <h1>
            <?php echo "$topic_TITLE"; ?>
        </h1>

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
    <script src="https://cdn.jsdelivr.net/npm/showdown@1.9.1/dist/showdown.min.js"></script>
    <!-- Statuspage  -->
    <script src="https://rpl357kc8bzh.statuspage.io/embed/script.js"></script>
    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-bundle.js"></script>
    <script src="https://unpkg.com/@statuspage/status-widget/dist/index.js"></script>

    <!-- bootstrap dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/utils/render_md.js">

    </script>
</body>

</html>