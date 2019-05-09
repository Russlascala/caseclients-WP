    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="footer-logo col-md-3 ">
                    <a class="navbar-brand" href="#">
                        <?php 
                        if(is_active_sidebar('footer-logo-widget') ){
                            dynamic_sidebar('footer-logo-widget');
                        }
                        ?>    
                    </a>
                </div>
                <nav class="footer-menu col-md-9 text-right">
                    <?php wp_nav_menu(array('theme_location' => 'footer_menu' ) ) ?>
                </nav>
            </div>
            <div class="lineFade"></div>
            <div class="row align-items-center">
                <div class="social-icons col-md-4 ">
                    <a href="https://www.linkedin.com/company/admediary" target="_blank" >
                        <i class="fab fa-linkedin-in fa-2x fa-fw" ></i>
                    </a> 
                    <a href="https://www.facebook.com/AdMediary-262985167183449/" target="_blank" >
                        <i class="fab fa-facebook fa-2x fa-fw" ></i>
                    </a>
                    <a href="https://twitter.com/AdMediary" target="_blank" >
                        <i class="fab fa-twitter fa-2x fa-fw" ></i>

                    </a>
                </div>
                
                <div class="copyright col-md-8 ">
                    <p> &copy; 2013-<script>document.write(new Date().getFullYear())</script> Admediary LLC<br>All Rights Reserved | <a href="<?php echo get_page_link(219); ?>" target="_blank">Privacy Policy</a></p>
                </div>
               
            </div>
        </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
       crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
       crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
       crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>