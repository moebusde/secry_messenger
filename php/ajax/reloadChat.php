<?php
    include '../classes/Messages.php';
    $dbmessage = new Messages();
    foreach($dbmessage->listMessages(1) as $message) {
?>
    <div class="message-block form-group">
        <span style="background-color: <?php echo $message['textcolor']; ?>;">
            <?php echo $message['username']." - ".date("H:i", strtotime($message['sent'])).": "; ?>
            <?php echo $message['message']; ?>
        </span>
            
    </div>
<?php
    }
?>
