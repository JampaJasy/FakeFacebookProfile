<?php
session_start();

$postprofilename = $_SESSION['user_profilename'];
$postguestname = $_SESSION['user_guestname'];
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Facebook Profile Page UI Concept</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/brands.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

  <main>
        <header>
            <div class="tb">
                <div class="td" id="logo">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="td" id="search-form">
                    <form method="get" action="#">
                        <input type="text" placeholder="Search Facebook">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>
                <div class="naarlinksaub">
                <div class="td"><a href="#" id="p-link"><img src="assets/img/testpf.png"></a></div>
                <div class="td" id="f-name-l"><span><?php echo $postprofilename;?></span></div>
                <div class="td" id="f-name-l"><span>Startpagina</span></div>
                <div class="td" id="f-name-l"><span>Maken</span></div>
                <div class="td" id="i-links">
                    <div class="tb">
                        <div class="td" id="m-td">
                            <div class="tb">
                                <span class="td"><i class="material-icons">person_add</i></span>
                                <span class="td"><i class="material-icons">chat_bubble</i></span>
                                <span class="td m-active"><i class="material-icons">notifications</i></span>
                            </div>
                        </div>
<!--                         <div class="td">
                            <a href="#" id="p-link">
                                <img src="assets/img/testpf.png">
                            </a>
                        </div> -->
                    </div>
                </div>
                </div>
            </div>
        </header>
        <div id="profile-upper">
            <div id="profile-banner-image">
                <img class="bruh" src="assets/img/testbanner4.jpg" alt="Banner image">
            </div>
            <div id="profile-d">
                <div id="profile-pic">
                    <img src="assets/img/testpf.png">    
                </div>
                <div id="u-name"><?php echo $postprofilename;?></div>
                <div class="tb5" id="m-btns">
                    <div class="td">
                        <div class="m-btn"><i class="material-icons">format_list_bulleted</i><span>Activity log</span></div>
                    </div>
                    <div class="td">
                        <div class="m-btn"><i class="material-icons">lock</i><span>Privacy</span></div>
                    </div>
                </div>
                <div class="" id="edit-profile"><i class="material-icons">camera_alt</i></div>
            </div>
            <div id="black-grd"></div>
        </div>
        <div id="main-content">
            <div class="tb3">
                <div class="td" id="l-col">                   
                    <div class="l-cnt">
                        <div class="cnt-label">
                            <i class="l-i" id="l-i-i"></i>
                            <span>Intro</span>
                            <div class="lb-action"><i class="material-icons">edit</i></div>
                        </div>
                        <div id="i-box">
                            <div id="intro-line">ICT & Media Design Student</div>
                            <div id="u-occ">Aan het strijden om diploma te halen te Fontys in Eindhoven</div>
                            <div id="u-loc"><i class="material-icons">location_on</i><a href="#">Eindhoven</a>, <a href="#">Netherlands</a></div>
                        </div>
                    </div>
                    <div class="l-cnt l-mrg">
                        <div class="cnt-label">
                            <i class="l-i" id="l-i-p"></i>
                            <span>Photos</span>
                            <div class="lb-action" id="b-i"><i class="material-icons">keyboard_arrow_down</i></div>
                        </div>
                        <div id="photos">
                            <div class="tb">
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-cnt l-mrg">
                        <div class="cnt-label">
                            <i class="l-i" id="l-i-b"></i>
                            <span>Friends</span>
                            <div class="lb-action" id="b-i"><i class="material-icons">keyboard_arrow_down</i></div>
                        </div>
                        <div id="friends">
                            <div class="tb">
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                                <div class="tr">
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-cnt l-mrg" >
                        <div class="cnt-label">
                            <i class="l-i" id="l-i-k"></i>
                            <span>Did You Know<i id="k-nm">1</i></span>
                        </div>
                        <div>
                            <div class="q-ad-c">
                                <a href="#" class="q-ad">
                                    <img src="https://static.xx.fbcdn.net/images/emoji.php/v9/fca/1/24/1f4ab.png">
                                    <span>My favorite superhero is...</span>
                                </a>
                            </div>
                            <div class="q-ad-c">
                                <a href="#" class="q-ad" id="add_q">
                                    <i class="material-icons">add</i>
                                    <span>Add Answer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="t-box">
                        <a href="#">Privacy</a> <a href="#">Terms</a> <a href="#">Advertising</a> <a href="#">Ad Choices</a> <a href="#">Cookies</a> <span id="t-more">More<i class="material-icons">arrow_drop_down</i></span>
                        <div id="cpy-nt">Facebook &copy; <span id="curr-year"></span></div>
                    </div>
                </div>
                <div class="td2" id="m-col">
                    <div class="m-mrg2" id="p-tabs">
                        <div class="tb2">
                            <div class="td2">
                                <div class="tb6" id="p-tabs-m">
                                    <div class="td"><span>Timeline</span></div>
                                    <div class="td"><span>Friends</span></div>
                                    <div class="td"><span>Photos</span></div>
                                    <div class="td"><span>About</span></div>
                                    <div class="td"><span>Archive</span></div>
                                    <div class="td2" id="p-tab-m"><i class="material-icons">keyboard_arrow_down</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-mrg" id="composer">
                        <div id="c-tabs-cvr">
                            <div class="tb" id="c-tabs">
                                <div class="td active"><i class="material-icons">subject</i><span>Make Post</span></div>
                                <div class="td"><i class="material-icons">camera_enhance</i><span>Photo/Video</span></div>
                                <div class="td"><i class="material-icons">videocam</i><span>Live Video</span></div>
                                <div class="td"><i class="material-icons">event</i><span>Life Event</span></div>
                            </div>
                        </div>
                        <div id="c-c-main">
                            <div class="tb">
                                <div class="td" id="p-c-i"><img src="assets/img/testpf.png" alt="Profile pic"></div>
                                <div class="td" id="c-inp">
                                    <input type="text" placeholder="What's on your mind?">
                                </div>
                            </div>
                            <div id="insert_emoji"><i class="material-icons">insert_emoticon</i></div>
                        </div>
                    </div>
                    <div>
                        <div class="post">
                            <div class="tb">
                                <a href="#" class="td p-p-pic"><img src="assets/img/buzzfeedpf.jpg" alt="Rajeev's profile pic"></a>
                                <div class="td p-r-hdr">
                                    <div class="p-u-info">
                                        <a href="#">Kevin Doorn</a> shared a post with <a href="#"><?php echo $postprofilename;?></a> 
                                    </div>
                                    <div class="p-dt">
                                        <i class="material-icons">calendar_today</i>
                                        <span>January 28, 2019</span>
                                    </div>
                                </div>
                                <div class="td p-opt"><i class="material-icons">keyboard_arrow_down</i></div>
                            </div>
                            <a href="#" class="p-cnt-v">
                                <img src="assets/img/buzzfeedpost.jpg">
                            </a>
                            <div>
                                <div class="p-acts">
                                    <div class="p-act like"><i class="material-icons">thumb_up_alt</i><span>25</span></div>
                                    <div class="p-act comment"><i class="material-icons">comment</i><span>1</span></div>
                                    <div class="p-act share"><i class="material-icons">reply</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="td" id="r-col">
                    <div id="chat-bar">
                        <div id="chat-lb"><i class="material-icons">contacts</i><span>Contacts</span></div>
                        <div id="cts">
                            <div class="on-ct active">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                            </div>
                            <div class="on-ct active">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                            </div>
                            <div class="on-ct">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                            </div>
                            <div class="on-ct active">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                            </div>
                            <div class="on-ct active">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                            </div>
                            <div class="on-ct">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/apktixi9bz/fbot.jpg"></a>
                            </div>
                            <div class="on-ct">
                                <a href="#"><img src="http://k007.kiwi6.com/hotlink/5q8emmtisc/fbog.jpg"></a>
                            </div>
                            <div class="on-ct" id="ct-sett"><i class="material-icons">settings</i></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
  
<?php
include 'chat.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script  src="js/index.js"></script>




</body>

</html>
