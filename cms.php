<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postprofilename = $_POST['nameprofile'];
    $postguestname = $_POST['nameguest'];

    $_SESSION['user_profilename'] = $postprofilename;
    $_SESSION['user_guestname'] = $postguestname;
}

echo 'Current profile name' . ': ' . $_SESSION['user_profilename'];
echo '<xmp></xmp>';
echo 'Current guest name' . ': ' . $_SESSION['user_guestname'];
echo '<xmp></xmp>';
?>

<section class="cmsvisibly">
    <form action="upload_file.php" method="post"
          enctype="multipart/form-data">
        <label for="file"><br><br>Profile picture user:</label>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <form action="upload_file2.php" method="post"
          enctype="multipart/form-data">
        <label for="file"><br><br>Chat picture guest:</label>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</section>

<form action="cms.php" method="post">
    <br><br>Profile name: <input type="text" name="nameprofile"><br>
    Guest name: <input type="text" name="nameguest"><br>
    <input type="submit">
</form>

Go to login page: <a href="index.php">click here</a>
<br>Go to profile page: <a href="profile.php">click here</a>


<!--<script>
    document.getElementById("u-name").innerHTML = "hoi";
</script>
-->
