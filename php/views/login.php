<form method="POST">
    <div class="form-group">
        <label>Benutzername</label>
        <input type="text" name="inpUsername" class="form-control" />
    </div>
    <div class="form-group">
        <label>Passwort</label>
        <input type="password" name="inpPassword" class="form-control" />
    </div>
    <div class="form-group">
        <button name="btnLogin" class="btn btn-primary">Login</button>
    </div>
</form>

<?php 
    $btnLogin = filter_input(0, "btnLogin");
    
    if(isset($btnLogin)) {
        include 'php/classes/Users.php';
        $dbusers = new Users();
        $username = filter_input(0, "inpUsername");
        $password = filter_input(0, "inpPassword");
        
        if ($dbusers->login($username, $password)) {
            $_SESSION['logged_in'] = 1;
            $_SESSION['username'] = $username;
        } else {
            $_SESSION['logged_in'] = 0;
        }
        
    }
    
?>