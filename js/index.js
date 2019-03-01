//code popup chatbox
$(document).ready(function(){

    $('.chat_head').click(function(){
        $('.chat_body').slideToggle(30);
    });
    $('.msg_head').click(function(){
        $('.msg_wrap').slideToggle(30);
    });

    $('.close').click(function(){
        $('.msg_box').hide();
    });

    $('.user').click(function(){

        $('.msg_wrap').show();
        $('.msg_box').show();
    });

    $('textarea').keypress(
        function(e){
            if (e.keyCode == 13) {
                var msg = $(this).val();
                $(this).val('');
                if(msg!='')
                    $('<div class="msg_b">'+msg+'</div>').insertBefore('.msg_push');
                $('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
            }
        });


});

//end code popup chatbox
function openChat(){
    document.getElementById('display-chat').style.display = "block";
}

function closeLivechat() {
    document.getElementById('display-chat').style.display = "none";
}


var date = new Date();
document.getElementById('curr-year').innerHTML = date.getFullYear();


