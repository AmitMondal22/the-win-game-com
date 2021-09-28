 <header class="nk-header nk-header-opaque">
    <!-- START: Top Contacts -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <ul class="nk-social-links">
                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                    <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                </ul>
            </div>
            <div class="nk-contacts-right">
                <ul class="nk-contacts-icons">
                    <?php if (!$this->session->userdata('us_name')==0) { ?>
                    <li>
                        <a href="<?php echo base_url(); ?>/logout" title="Sign Out" >
                            <span class="fa fa-sign-out-alt"></span> Sign Out
                        </a>
                    </li>
                <?php } ?>
                    <?php if ($this->session->userdata('usr_id')==0) { ?>
                                 
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalLogin" title="">
                            <span class="fa fa-user"></span> Sign In
                        </a>
                    </li>
                <?php }else{ ?>
                    <li>
                        <a href="" title="<?php echo $this->session->userdata('us_name'); ?>">
                            <span class="fa fa-user"></span> <?php echo $this->session->userdata('us_name'); ?>
                        </a>
                    </li>
                <?php } ?>
                   <?php if ($this->session->userdata('us_name')==0) { ?> 
                    <li>
                        <a href="<?php echo base_url(); ?>sign-up">
                        <span class="nk-cart-toggle">
                            <span class="fa fa-user-plus"></span>
                            <span> Sign Up</span>
                        </span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->
    <!--
    START: Navbar
    Additional Classes:
    .nk-navbar-sticky
    .nk-navbar-transparent
    .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                <a href="<?php echo base_url(); ?>" class="nk-nav-logo">
                    <img src="<?php echo base_url(); ?>use/assets/images/logo.png" alt="GoodGames" width="199">
                </a>
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">   
     <li>
        <a href="<?php echo base_url(); ?>">
            home
        </a>
    </li>
    <li>
        <a href="<?php echo base_url(); ?>live">
            LIVE
        </a>
    </li>
    <li>
        <a href="<?php echo base_url(); ?>result-game">
            RESULTS
        </a>
    </li>
    <li>
        <a href="<?php echo base_url(); ?>about">
            ABOUT
        </a>
    </li>
    <!-- <li>
        <a href="gallery.html">
            Contact
        </a>
    </li> -->
    <?php if (!$this->session->userdata('us_name')==0) { ?>
    <li>
        <a href="<?php echo base_url(); ?>myGame">
            My Games
        </a>
    </li>
    <li>
        <a href="<?php echo base_url(); ?>myAccount">
            My Account
        </a>
    </li>
<?php } ?>
</ul>
<ul class="nk-nav nk-nav-right nk-nav-icons">
<li class="single-icon d-lg-none">
<a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
    <span class="nk-icon-burger">
        <span class="nk-t-1"></span>
        <span class="nk-t-2"></span>
        <span class="nk-t-3"></span>
    </span>
</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- END: Navbar -->
</header>
<!--
START: Navbar Mobile
Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
<div class="nano">
<div class="nano-content">
<a href="<?php echo base_url(); ?>" class="nk-nav-logo">
<img src="<?php echo base_url(); ?>use/assets/images/logo.png" alt="" width="120">
</a>
<div class="nk-navbar-mobile-content">
<ul class="nk-nav">
    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
</ul>
</div>
</div>
</div>
</div>
<!-- END: Navbar Mobile -->