<header class="navbar navbar-inverse navbar-static-top">
    <nav class='container' role='navigation'>
        <div class='navbar-header'>
        <a href="index.php" class='navbar-brand'>Adrian's Blog</a>
        
        <button type='button' class="navbar-toggle collapsed" data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>    
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
        </button>
        </div>
        <ul class="nav navbar-nav navbar-right navbar-collapse collapse">
            <?php if(isset($_SESSION[ 'userinfo'])){ echo "<li><a href='createpost.php'>Post</a>
            </li><li><a href='logout.php'>Logout</a></li>"; } else{ echo "<li><a href='login.php'>Login</a></li><li><a href='registration.php'>Sign Up</a>
            </li>"; } ?>
            
            
        </ul>
    </nav>
</header>