<?php
require_once "config.php";
$result = mysqli_query($conn, "SELECT * FROM `content` ORDER BY `topic_DATE` ASC;");

while ($row = mysqli_fetch_array($result)) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="<?php echo $row["topic_NAME"] . "... And other posts on the XenonMC Forum"; ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" async>
        <!-- load sheet then javascript -->
        <link rel="stylesheet/less" type="text/css" href="assets/css/darkbs.less" />
        <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
        <title>XForum: <?php echo $row["topic_NAME"] . "..."; ?></title>
        <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    </head>

    <body class="bg-carbon">
        <section id="template">
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
        </section>
    </body>

    </html>

<?php
}
