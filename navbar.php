<div class="navbar">
    <h1 style="color:#000;">Welcome to UCOSnaps, <span style="color:#000;"><?php echo $_SESSION['username']; ?>!</span></h1>
    <a href="index.php">Home</a>
    <a href="profile.php?username=<?php echo $_SESSION['username']; ?>">Your Profile</a>
    <a href="allusers.php">All Users</a>
    <a href="core/handleForms.php?logoutUserBtn=1">Logout</a>
</div>