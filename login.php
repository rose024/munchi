<?php
    include('partials/header.php');
?>

<main class="login">

    <div class="login__container">

        <div class="login__container_headline">
            <h1>Login</h1>
        </div>
        
        <form action="login.php" method="post" class="login__container_form"> 

            <div class="flex-column">
                <label for="email">Email Address</label>  
                <input type="text" class="???" id="email" name="email">
            </div>
            
            <div class="flex-column">
                <label for="password1">Password</label>  
                <input type="password" class="???" id="password1" name="password1">
            </div>
        
            <div class="login__container_buttons">
                <div><img src="./assets/img/Asset 9.png" alt=""></div>
                <div><a href="login.php">Forgot Password</a></div>
            </div>

        </form>

    </div>

</main>

<?php
    include('partials/footer.php');
?>