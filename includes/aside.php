<aside class="col-md-3">
    <P>WELCOME to my blog. Sign up to be a part of the community and be able to comment with your username and picture id(Coming soon).</P>
    <div class="imgContainer">
    <img class="img-responsive" alt="Responsive image" src="<?PHP if(isset($_SESSION['userinfo'])){echo $_SESSION['userinfo']['image'];} else{ echo "uploads/defaultUser.gif"; } ?>">
    <?php if(isset($_SESSION['userinfo'])){ echo "<a href='profilepage.php'>Update Profile Image/Username</a>"; } else { echo "<a href='login.php'>Click Here To Login</a>";} ?>
    </div>
</aside>