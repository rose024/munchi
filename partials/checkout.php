
<body>
    
    <p><a href="#">Secure Checkout</a></p>
    <div id="checkout-container">
        <div class="contact-info">
            <h3>Contact Information</h3>
            <!-- Note: change index.php to confirmation page -->
            <form method="post" action="index.php">
                <label for="email">E-mail Address:</label><br>
                <input type="email" id="email" name="email" placeholder="e-mail address" required><br><br>


            <h3>Shipping Address</h3>
           
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name" placeholder="first name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" placeholder="last name" required><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" placeholder="Address" required><br>
                <input type="text" id="address" name="address" placeholder="Apartmenmt, suite, etc. (optional)" required><br>
                <input type="text" id="address" name="address" placeholder="City" required>
                <input type="text" id="address" name="address" placeholder="Province" required>
                <input type="text" id="address" name="address" placeholder="Postal Code" required><br>

                <label for="phone_num">Phone Number:</label>
                <input type="number" id="phone_num" name="phone_num" placeholder="phone_num" required><br><br>


            <h3>Payments</h3>
         
                <label for="phone_num">Phone Number:</label>
                <input type="number" id="phone_num" name="phone_num" placeholder="phone_num" required><br>

                <label for="card_num">Card Number:</label>
                <input type="number" id="phone_num" name="card_num" placeholder="card_num" required><br>

                <label for="expiration_date">Expiration Date:</label>
                <input type="number" id="phone_num" name="expiration_date" placeholder="expiration_date" required>
                <input type="number" id="phone_num" name="cvv" placeholder="cvv" required><br><br>

            <h3>Confirm Selection</h3>
            <div class="confirmation">
                 <img src="img/confirm-photo.png" alt="">
                <p>
                    -For Myself <br>
                    -For Individual <br>
                    -Bi-weekly<br>
                    -Monthly Billing <br>
                    -Far east Asia theme <br>

                </p>
            </div>
          
               

            

                <button type="submit" name="submit">Checkout</button>
            </form>
        </div>
    </div>

</body>

</html>