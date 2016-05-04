<?php
    include '../classes/Messages.php';
    $dbmessage = new Messages();
    foreach($dbmessage->listMessages(1) as $message) {
?>
    <div class="message-block">
        <span>
            <label><?php echo $message['username']; ?>:</label>
            <?php echo $message['message']; ?>
        </span>
            
    </div>
<?php
    }
?>
