	
<?php /* Template Name: Form Page */ ?>

<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header()
?>

<div class="form-page">
    <div class="section-one">

        <div class="popup">
            <div class="popup-content">
                <div class="popup-img"></div>

                <h3>Thank you for filling out your information!</h3>
                <p>We’ve sent you an email with further information to the email address you provided. 
                Please check your junk mail or spam folders in case our messages have been blocked by your SPAM filter.
                </p>
                <p>The StartUp Academy Team</p>

                <div class="icon-o-c closepopup">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                    </style>
                    <defs>
                    </defs>
                    <path class="st0" d="M15,0v29.5"/>
                    <path class="st0" d="M0,14.8h29.5"/>
                    </svg>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="row header-menu">
                <div class="col-5 logo">
                    <a href="/">
                        <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/04/cropped-e.png" alt="">
                    </a>
                </div>
                <div class="col-5 mobile-only apply-mobile">
                    
                </div>
                <div class="col-md-7 links">
                    <div class="link">
                        <a href="https://genesis-startup-academy.com#about">ABOUT</a>
                    </div>
                    <div class="link">
                        <a href="https://genesis-startup-academy.com#enroll">WHY ENROLL IN</a>
                    </div>
                    <div class="link">
                        <a href="https://genesis-startup-academy.com#program">PROGRAM</a>
                    </div>
                    <div class="link">
                        <a href="https://genesis-startup-academy.com#faq">FAQ</a>
                    </div>
                </div>
                <div class="col-2 mobile-only">
                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>enroll in StartUp Academy</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php echo the_content(); ?>
                </div>
            </div>

        </div>
    
    </div>

    
   <!-- section-footer  -->
   <div class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><a href="/">StartUp Academy 2.0</a></h3>
                    <p>Learn how to grow and scale a successful tech business and hit your stride</p>
                </div>
                <div class="col-md-4">
                    <h3>Menu</h3>
                    <div class="menu-links">
                        <a href="/#about">About the Academy</a>
                        <a href="/#enroll">Why join </a>
                        <a href="/#program">Program</a>
                        <a href="/#timeline">Timeline</a>
                        <a href="/#partners">Organizers & Partners</a>
                        <a href="/#standWithUkraine">#StandWithUkraine</a>
                        <a href="/#reviews">Results & Reviews</a>
                        <a href="/#fAQ">FAQ</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contacts</h3>
                        <div class="soc-links">
                        <a class="mail" href="mailto:startup-academy@gen.tech">startup-academy@gen.tech</a>
                        <a href="http://facebook.com/GenesisStartUpAcademy">Facebook</a>
                        <a href="http://instagram.com/genesis_startup_academy/">Instagram</a>
                    </div>
                </div>
            </div>    
        </div>    
    </div>  
    
</div>

<?php
get_footer();
?>