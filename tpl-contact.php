<?php

/**
 * Template Name: Contact
 */

get_header();
?>
<!-- contact form html start -->
<div class="contact-page-section">
    <div class="contact-form-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-from-wrap">
                        <div class="section-heading">
                            <h5 class="dash-style">GET IN TOUCH</h5>
                            <h2>CONTACT US TO GET MORE INFO</h2>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-detail-wrap">
                        <h3>Need help ?? Feel free to contact us !</h3>
                        <div class="details-list">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <i class="fas fa-map-signs"></i>
                                    </span>
                                    <div class="details-content">
                                        <h4>Location Address</h4>
                                        <span>KMC-16, Kathmndu,Nepal</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </span>
                                    <div class="details-content">
                                        <h4>Email Address</h4>
                                        <a href="tel:info@dimasadventure.com">info@dimasadventure.com</a>,
                                        <a href="tel:dimas.adventure.kathmandu@gmail.com">dimas.adventure.kathmandu@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </span>
                                    <div class="details-content">
                                        <h4>Phone Number</h4>
                                        <span>Telephone: +977-1-4250655 / Mobile: +977-9849896250</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="contct-social social-links">
                            <h3>Follow us on social media..</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/dimasadventurenepal/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/dimas.adventure/" target="_blank"><i class="fab fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14128.549234353226!2d85.3085046!3d27.7130465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5542c5f69708a153!2sDIMAS%20ADVENTURE.PVT.LTD!5e0!3m2!1sen!2snp!4v1655645346500!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- contact form html end -->
<?php
get_footer();
