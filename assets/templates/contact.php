<?php require_once('page_parts/header.php'); ?>

<div class="about">
    <?php require_once('page_parts/sidebar.php'); ?>
    <div class="new-product">
        <div class="new-product-top">
            <ul class="product-top-list">
                <li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
                <li><span class="act">Contact Us</span>&nbsp;</li>
            </ul>
            <p class="back"><a href="index.php">Back to Previous</a></p>
            <div class="clearfix"></div>
        </div>
        <div class="singel_right">
            <div class="lcontact span_1_of_contact">
                <div class="contact-form">
                    <form method="post" id="contact-form" action="contact-post.php">
                        <p class="comment-form-author"><label for="author">Your Name:</label>
                            <input type="text" name="client_name" class="textbox" placeholder="Enter your name here..." >
                        </p>
                        <p class="comment-form-author"><label for="author">Email:</label>
                            <input type="text" name="email" class="textbox" placeholder="Enter your email here..." >
                        </p>
                        <p class="comment-form-author"><label for="author">Message:</label>
                            <textarea name="message" placeholder="Enter your message here..." ></textarea>
                        </p>
                        <input name="submit" type="submit" id="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="contact_grid span_2_of_contact_right">
                <h3>Address</h3>
                <div class="address">
                    <i class="pin_icon"></i>
                    <div class="contact_address">
                        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="address">
                    <i class="phone"></i>
                    <div class="contact_address">
                        1-25-2568-897
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="address">
                    <i class="mail"></i>
                    <div class="contact_email">
                        <a href="mailto:example@gmail.com">info(at)company.com</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php require_once('page_parts/footer_js.php'); ?>
