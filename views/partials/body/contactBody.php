<?php
    require "./views/components/global/navbar.php";
?>

    <div class="contact-container">
        <div class="top-side">
            <div class="title">
                <h1>Contact Us</h1>
                <img src="./views/assets/message.png" alt="">
            </div>
            <div class="top-side-inner-container">
                <div class="image">
                    <img src="./views/assets/contact.gif">
                </div>
                <?php 
                    if(!isset($_COOKIE["login-data"])){ 
                        echo "
                            <div class='contact-container'>
                                <form class='contact-form' action='/contact' method='POST' '>
                                    <div>
                                        <input name='email' type='email' class='form-control' id='email' placeholder='Email Adress' required>
                                    </div>
                                    <div>
                                        <input name='name' type='text' class='form-control' id='name' placeholder='Name' required>
                                    </div>
                                    <div>
                                        <textarea name='message' class='form-control-textarea' minlength='20' placeholder='Message' rows='7' required></textarea>
                                    </div>
                                    <div>
                                        <button type='submit' class='btn'> Send Message</button>
                                    </div>
                                </form>
                                <script>
                                    function showAlertWithTimeout(event) {
                                        event.preventDefault(); 
                                        alert('Your message has ben sent.');
                                        setTimeout(() => {
                                            window.location.href = '/';
                                        }, 500); 
                                    }
                                </script>
                            </div>";
                    }

                    else {
                        echo "
                            <div class='contact-container'>
                                <form class='contact-form' action='/contact' method='POST' >
                                    <div>
                                        <textarea name='message' minlength='20' placeholder='Message' rows='7' required></textarea>
                                    </div>
                                    <div>
                                        <button type='submit' class='btn'> Send Message</button>
                                    </div>
                                </form>
                                <script>
                                    function showAlertWithTimeout(event) {
                                        event.preventDefault(); 
                                        alert('Your message has ben sent.');
                                        setTimeout(() => {
                                            window.location.href = '/';
                                        }, 500); 
                                    }
                                </script>
                            </div>";
                    }
                ?>

            </div>
        </div>
        <div class="bot-side" >
            <div class="title">
                <h1>Where are we ?</h1>
                <img src="./views/assets/location.png" alt="">
            </div>
            <div class="bot-side-inner-container">
                <div class="map" >
                    <!-- <h2>Our Adress</h2> -->
                    <iframe class="map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3006.3397418432846!2d28.98325867598073!3d41.1052706713371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab42880b64df7%3A0xd80adff1f993b15b!2s%C4%B0stinye%20%C3%9Cniversitesi%20Vadi%20H%20Yerle%C5%9Fkesi!5e0!3m2!1str!2str!4v1715280130303!5m2!1str!2str" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="image">
                    <!-- <h2>Our Company</h2> -->
                    <img src="./views/assets/istinyeUniFoto.png">
                </div>
            </div>
        </div>
    </div>


<?php 
    require "./views/components/global/footer.php";
?>

<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>