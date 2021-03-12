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
        <title>XForum: Create Post</title>
        <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    </head>

    <body class="bg-carbon">
        <section id="template">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-md-2">
                    </div>
                    <div class="col-sm-10 col-md-8">
                        <form>
                            <div class="form-group">
                                <label for="titleInput">Post Title:</label>
                                <input type="email" class="form-control" id="titleInput" placeholder="My Fav. Candy">
                            </div>

                            <div class="form-group">
                                <label for="messageInput">Your Message to the Community here...</label>
                                <textarea class="form-control" id="messageInput" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>

                        </form>
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
