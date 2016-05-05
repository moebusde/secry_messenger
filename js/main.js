$(document).ready(function() {
    
    
    var btnSendMessage = $("#btnSendMessage");
    var chatbox = $(".chatbox");
    var intervall;
    
    function reloadChat() {
        $.ajax({
            url: "php/ajax/reloadChat.php",
            method: "POST",
            success: function(data) {
                chatbox.html(data);
                intervall = setTimeout(reloadChat, 1000);
            }
        });
    }
    reloadChat();
    
    function sendMessage(message) {
        $.ajax({
            method: "POST",
            url: "php/ajax/setMessage.php",
            data: "message="+message.val()+"&chat=1&user=1", 
            success: function(data) {
                console.log(data);
                message.val("");
            }
        });
    }
    
    $(document).on("keypress", function(e) {
        var message = $("#inpMessage");
        if(e.which === 13) {
            sendMessage(message);
        }
    });
    
    btnSendMessage.on("click", function() {
        var message = $("#inpMessage");
        sendMessage(message);
        
    }); 
    
    
});