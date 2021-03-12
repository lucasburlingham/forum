   <?php
    require_once "config.php";
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        echo "Title: $title";
        echo "<br>";
        echo "Content: $content";

        $sql = "INSERT INTO `content` (`topic_ID`, `topic_USERNAME`, `topic_DATE`, `topic_CREATORID`, `topic_REP`, `topic_NAME`, `topic_CONTENT`) VALUES (4, 'simondanerd', CURRENT_TIMESTAMP, \'1\', \'1\', 'Tesasdft1', $content)";
        mysqli_query($conn, $sql);
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
       <link rel="stylesheet/less" type="text/css" href="assets/css/darkbs.less" />
       <script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
       <title>XForums Development Team</title>
       <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
   </head>

   <body class="bg-carbon">
       <section id="template">
           <div class="container">
               <div class="row">
                   <div class="col-sm-1 col-md-2">
                   </div>
                   <div class="col-sm-10 col-md-8">
                       <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" name="newPost">
                           <div class="form-group">
                               <label for="titleInput" class="text-light">Post Title:</label>
                               <input type="text" class="form-control" id="titleInput" placeholder="My Fav. Candy" name="title">
                           </div>

                           <div class="form-group">
                               <label for="messageInput" class="text-light">Your Message to the Community
                                   here...</label>
                               <textarea class="form-control" id="messageInput" rows="4" name="content"></textarea>
                           </div>
                           <button type="submit" class="btn btn-success" name="submit">Submit</button>

                       </form>
                   </div>
                   <div class="col-sm-1 col-md-2">
                   </div>
               </div>
           </div>
       </section>
   </body>

   </html>