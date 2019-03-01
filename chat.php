<?php

$messages_buffer_file = 'messages.json';
$messages_buffer_size = 50;

if (isset($_POST['content']) and isset($_POST['name'])) {
    $buffer = fopen($messages_buffer_file, 'r+b');
    flock($buffer, LOCK_EX);
    $buffer_data = stream_get_contents($buffer);

    $messages = $buffer_data ? json_decode($buffer_data, true) : array();
    $next_id = (count($messages) > 0) ? $messages[count($messages) - 1]['id'] + 1 : 0;
    $messages[] = array('id' => $next_id, 'time' => time(), 'name' => $_POST['name'], 'content' => $_POST['content']);

    if (count($messages) > $messages_buffer_size)
        $messages = array_slice($messages, count($messages) - $messages_buffer_size);

    ftruncate($buffer, 0);
    rewind($buffer);
    fwrite($buffer, json_encode($messages));
    flock($buffer, LOCK_UN);
    fclose($buffer);

    exit();
}

?>
<head>
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul#messages > li').remove();

            $('form').submit(function () {
                var form = $(this);
                var name = document.getElementById('u-name').textContent;
                var content = form.find("input[name='content']").val();

               if (name == '' || content == '')
                    return false;

                $.post(form.attr('action'), {'name': name, 'content': content}, function (data, status) {

                    if (name == document.getElementById('u-name').textContent)
                        $('<li class="pending pl-2 pr-2 bg-primary rounded text-white text-center send-msg mb-1"/>').text(content).appendTo('ul#messages');
                    $('div#chatbox').scrollTop($('div#chatbox').get(0).scrollHeight);
                    form.find("input[name='content']").val('').focus();

                    if (name != document.getElementById('u-name').textContent)
                        $('<li class="pending pl-2 pr-2 bg-primary rounded text-white text-center send-msg mb-1" />').text(content).appendTo('ul#messages');
                    $('div#chatbox').scrollTop($('div#chatbox').get(0).scrollHeight);
                    form.find("input[name='content']").val('').focus();
                });
                return false;
            });

            var poll_for_new_messages = function () {
                $.ajax({
                    url: 'messages.json',
                    dataType: 'json',
                    ifModified: true,
                    timeout: 2000,
                    success: function (messages, status) {
                        if (!messages)
                            return;

                        $('ul#messages > li.pending').remove();

                        var last_message_id = $('ul#messages').data('last_message_id');
                        if (last_message_id == null)
                            last_message_id = -1;

                        for (var i = 0; i < messages.length; i++) {
                            var msg = messages[i];
                            if (msg.id > last_message_id) {
                                var date = new Date(msg.time * 1000);
                                if (msg.name == document.getElementById('u-name').textContent)
                                    $('<li class="pl-2 pr-2 bg-primary rounded text-white text-center send-msg mb-1"/>').text(msg.content).appendTo('ul#messages');
                                $('ul#messages').data('last_message_id', msg.id);


                                if (msg.name != document.getElementById('u-name').textContent)
                                    $('<li class="p-1 rounded mb-1">\n' +
                                '<div class="receive-msg">\n' +
                                '<img src="assets/img/profile-picture-chat.jpg">\n' +
                                '<div class="receive-msg-desc  text-center mt-1 ml-1 pl-2 pr-2">\n' +
                                '<p class="pl-2 pr-2 rounded">' +
                                msg.content +
                                '</p>\n' +
                                '                        </div>\n' +
                                '                    </div>\n' +
                                '                </li>').appendTo('ul#messages');
                                $('ul#messages').data('last_message_id', msg.id);

                            }
                        }

                        $('ul#messages > li').slice(0, -50).remove();
                        $('div#chatbox').scrollTop($('div#chatbox').get(0).scrollHeight);
                    }
                });
            };

            poll_for_new_messages();
            setInterval(poll_for_new_messages, 2000);
        });
        // ]]>
    </script>
</head>
<div class="chat-main" id="display-chat">
    <div class="col-md-12 chat-header rounded-top bg-primary text-white">
        <div class="row">
            <div class="col-xs-6 username pl-2">
                <i class="fa fa-circle text-success" aria-hidden="true"></i>
                <h6 class="username-live-chat"><?php echo $_SESSION['user_guestname']; ?></h6>
            </div>
            <div class="col-xs-6 options text-right pr-2 margin-right-btn-chat">
                <i class="fa fa-video-camera mr-2" aria-hidden="true"></i>
                <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                <i class="fa fa-cog mr-2" aria-hidden="true"></i>
            </div>
            <img src="assets/img/close-btn-chat.png" class="close-btn-chatbox" onclick="closeLivechat()">
        </div>
    </div>


    <div class="chat-content">
        <div class="col-md-12 chats border" id="chatbox">
            <div class="chat-profile-friend">
                <p class="datefriends">FRI 10:58 AM</p>
                <div class="center-two-users">
                    <div id="livechat01" class="userchat"></div>
                    <div class="userchat seconduserchat"></div>
                </div>
                <p class="sayhi">Say hi to your new Facebook friend, <?php echo $_SESSION['user_guestname']; ?>.</p>
            </div>
            <ul class="p-0" id="messages">
            </ul class="p-0">
        </div>


        <div id="border-top" class="col-md-12 message-box border pl-2 pr-2 border-top-0">
            <form action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_COMPAT, 'UTF-8'); ?>" method="post">
                <input autocomplete="off" type="text" name="content" id="content" class="pl-0 pr-0 w-100" placeholder="Type a message..."/>
            </form>
            <div class="tools">
                <img src="assets/img/footerchat01.png" class="footerchats">
                <img src="assets/img/footerchat02.png" class="footerchats">
                <img src="assets/img/footerchat03.png" class="footerchats">
                <img src="assets/img/footerchat04.png" class="footerchats">
                <img src="assets/img/footerchat05.png" class="footerchats">
                <img src="assets/img/footerchat06.png" class="footerchats">
                <img src="assets/img/footerchat07.png" class="footerchats">
                <img src="assets/img/footerchat08.png" class="footerchats floatright">
            </div>
        </div>
    </div>
</div>


<div class="chat_box">
    <div class="chat_head">
        Chat
        <img src="assets/img/profilefb3.png" class="img-chat-head">
        <img src="assets/img/profilefb2.png" class="img-chat-head">
        <img src="assets/img/profilefb1.png" class="img-chat-head">
    </div>
    <div class="chat_body">
        <div class="title-chat">Contacts</div>
        <div id="livechat01" class="user" onclick="openChat()"> <?php echo $_SESSION['user_guestname']; ?> </div>


        <div id="livechat02" class="user"> Cornelie Smith <span class="user-time">2h</span></div>
        <div id="livechat03" class="user"> Georgie <span class="user-time">3h</span></div>
        <div id="livechat04" class="user"> Max Roeste <span class="user-time">5h</span></div>
        <div id="livechat05" class="user"> Sylvie <span class="user-time">5h</span></div>




        <div class="title-chat title-2-chat">Group concervations</div>
        <div class="user" id="user-group"> Create New Group</div>
        <div class="footer_chatbox">
            <img src="assets/img/search_small.svg" id="searchsmall">
            <span class="searchtext">Search</span>
        </div>
    </div>
</div>