$(document).ready(function() {
    
    
    var btnSendMessage = $("#btnSendMessage");
    var chatbox = $(".chatbox");
    var intervall;
    
    function gotoBottom(id){
        var element = document.getElementById(id);
        element.scrollTop = element.scrollHeight - element.clientHeight;
    }   
    
    function reloadChat() {
        var last_message_id;
        $.ajax({
            url: "php/ajax/reloadChat.php",
            method: "POST",
            data: "lastmessageid="+last_message_id+"&chat=1",
            success: function(data) {
                var json = $.parseJSON(data);
                chatbox.html("");
                for(var i = 0; i < json.length; i++) {
                    chatbox.append("<div data-message-id="+json[i].id_messages+" class='message-block form-group'><span style='background-color:"+json[i].textcolor+"'>"+json[i].username+" - "+json[i].sent+": "+json[i].message+"</span></div>");
                    last_message_id = json[i].id_messages;
                }
                console.log(last_message_id);
                gotoBottom("chatframe");
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