<?php
include "top.php";
include "header.php";
include "nav.php";
?>
        <h2>About</h2>
        <p>New to campus? Lost? Looking for food? Take a photo of the closest building and find out where you are and some cool campus info!</p>
        <!-- Upload or take photo button -->
        <button type="button">Upload Image</button>
        <button type="button" onclick="alert('Allow access to camera')">Take Photo</button>
        <p></p>
        <!-- Campus Map -->
        <!--<figure>
            <img alt="Map of UVM Campus" src='image/campusmap.jpg'>
        </figure>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2846.8202743916804!2d-73.19865238432243!3d44.47785660673106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cca7a5bbde60cf1%3A0x2df5d83e5a01e9b2!2sUniversity+of+Vermont!5e0!3m2!1sen!2sus!4v1491051272816" 
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        <?php
        include "footer.php";
        ?>
    </body>
</html>