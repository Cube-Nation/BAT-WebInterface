<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo Message::network; ?> punishment list</title>
    <!-- Bootstrap and jquery includes -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Custom fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bree%20Serif">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Alegreya">
    <!-- Additional CSS and JS -->
    <link rel="stylesheet" href="public/styles/base-stylesheet.css">
    <script src="public/js/base-script.js"></script>
</head>
<boby>
    <div class="header">
        <div class="inner"><div class="banner" style="background-color: #9e8f6a; width:100%"></div></div>
    </div>

    <nav class="navbar navbar-bat fixed" role="navigation">
        <div class="inner">
            <div class="container-fluid">
                <div class="navbar-header">

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="<?php if (get_class($this) == "home") {
                            echo "active";
                        } ?>"><a href="index.php">Home</a></li>
                        <li class="<?php if (get_class($this) == "ban") {
                            echo "active";
                        } ?>"><a href="index.php?p=ban">Bans</a></li>
                        <li class="<?php if (get_class($this) == "mute") {
                            echo "active";
                        } ?>"><a href="index.php?p=mute">Mutes</a></li>
                        <li class="<?php if (get_class($this) == "kick") {
                            echo "active";
                        } ?>"><a href="index.php?p=kick">Kicks</a></li>
                        <li class="<?php if (get_class($this) == "comment") {
                            echo "active";
                        } ?>"><a href="index.php?p=comment">Verwarnungen</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control input-text" id="pname-input" name="player"
                                   placeholder="Spieler Name">
                        </div>
                        <input type="hidden" name="p" value="profile">
                        <button type="submit" class="btn btn-default btn-bat">Suchen</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <?php include("application/views/_template/modal-info.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="top: 10px;">
