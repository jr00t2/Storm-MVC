<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
    </head>
    <body>
     
        <?php include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>
         <?php include HOME . DS . 'views' . DS . 'header.php'; ?>
        <div class="container">
            <div id="login" ng-app='angular_post_demo' ng-controller='sign_up'>
				<label for="email">Email Adresse</label>
                <input type="text" name="email" class="form-control" size="40" ng-model="email"><br>
				<label for="password">Passwort</label>
                <input type="password" name="password" class="form-control" size="40" ng-model="password"><br>
                <button class="btn btn-primary" ng-click="login()">Login</button>
				<button class="btn btn-warning" ng-click="register()">Register</button><br>
                <span id="message"></span>
            </div>
</div>
         
    </body>
</html>