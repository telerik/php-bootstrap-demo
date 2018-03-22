<!DOCTYPE html>
<html>
    <head>
        <title>Telerik® UI for PHP &hearts; Twitter Bootstrap: Responsive demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php require_once 'includes/includes.php'; ?>
        <?php require_once 'lib/Kendo/Autoload.php'; ?>
        <script src="theme-chooser.js"></script>

        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <?php include 'includes/header.php';?>

        <div id="example" class="container">
            <?php include 'includes/whatIsThisPage.php';?>

            <?php include 'includes/menu.php';?>
            
            <div class="row clearfix">
                <div class="col-lg-4">
                    <?php include 'includes/profile.php';?>
                </div>

                <div class="col-lg-8">
                    <?php include 'includes/tabstrip.php';?>
                </div>
            </div>

            <?php include 'includes/profileSetup/profileSetup.php';?>

            <?php include 'includes/orders.php';?>            

            <?php include 'includes/schedule.php';?>  

            <?php include 'includes/latestPhotoUploads.php';?>

            <?php include 'includes/faq.php';?>

            <footer>Copyright &copy; <?php echo date("Y"); ?>, Progress Software Corporation and/or its subsidiaries or affiliates. All Rights Reserved.</footer>
        </div>
    </body>
</html>