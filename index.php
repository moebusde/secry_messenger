<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secry Messenger</title>
        <script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="vendor/twbs/bootstrap/docs/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="vendor/twbs/bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/twbs/bootstrap/docs/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Wilkommen bei Secry</h1>
                </div>
            </div>
            <div class="chatbox"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12" id="content">
                    <label for="inpMessage">Deine Nachricht</label>
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <input type="text" id="inpMessage" class="form-control" name="inpMessage" />
                        </div>
                        <div class="col-md-1 col-sm-1">
                            <button class="btn btn-default" id="btnSendMessage">Abschicken</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
