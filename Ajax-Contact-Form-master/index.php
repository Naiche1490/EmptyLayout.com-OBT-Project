
<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact US</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group" id="name-field">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="email-field">
                <label for="fname" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                   <input type="text" id="Email"name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="subject-field">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="message-field">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
	<input type="submit" value="Submit">

                </div>
            </div>
        </form>
    </div>
  </div>
    <script src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './process.php'
        });
    </script>
	<style>
		.container {
    border-radius: 10%;
    background-color: #f2f2f2;
    padding: 4%;
}
.container {
    position: absolute;
    top: 40%;
    left: 50%;
    width: 50%;
    height: 100%;
    max-height: 70%;
    margin-top: -20%;
    margin-left: -30%;
}
	</style>
</body>
</html>