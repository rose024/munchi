<?php
    include('partials/header.php');
?>

<main class="registration">

    <div class="registration__container">

        <div class="registration__container_headline">
            <h1>Join Our Snackbox Family</h1>
            <p>Unlock Exclusive Snacks</p>
        </div>
        
        <form action="registration.php" method="post" class="registration__container_form"> 
        
            <div class="registration__container_fullname">
                <div class="flex-column registration__container_firstname">
                    <label for="firstname">First name *</label>  
                    <input type="text" class="???" id="firstname" name="firstname">
                </div>
                <div class="flex-column registration__container_lastname">
                    <label for="lastname">Last name *</label>  
                    <input type="text" class="???" id="lastname" name="lastname">
                </div>
            </div>

            <div class="flex-column">
                <label for="phonenumber">Phone number *</label>  
                <input type="text" class="???" id="phonenumber" name="phonenumber">
            </div>

            <div class="flex-column">
                <label for="Address">Address *</label>  
                <input type="text" class="???" id="Address" name="Address">
            </div>

            <div class="flex-column">
                <label for="email">Email address *</label>  
                <input type="text" class="???" id="email" name="email">
            </div>
            
            <div class="flex-column">
                <label for="password1">Password *</label>  
                <input type="password" class="???" id="password1" name="password1">
            </div>

            <div class="flex-column">
                <label for="password2">Confirm Password *</label>  
                <input type="password" class="???" id="password2" name="password2">
            </div>

            <div>
                <input type="checkbox" id="agreement">
                <label for="agreement">I agree to <a href="">the Terms of Service</a> and <a href="">Privacy Policy</a></label>
                
            </div> 
        
            <div class="registration__container_buttons">
                <div><img src="./assets/img/Asset 11.png" alt=""></div>
                <div>or</div>
                <div><img src="./assets/img/Asset 10.png" alt=""></div>
                <div>Already a member? <a href="login.php">Login</a></div>
            </div>


        </form>

    </div>

</main>

<?php
    include('partials/footer.php');
?>