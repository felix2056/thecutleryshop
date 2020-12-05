<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<div class="page-container drawer-page-content" id="PageContainer">

    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
        <div class="page-width">
            <div class="grid">
                <div class="grid__item medium-up--five-sixths medium-up--push-one-twelfth">
                    <div class="section-header text-center">
                        <h1>Contact Us</h1>
                    </div>


                    <div class="rte">
                        <p>The Cutlery Shop LLC:<br><span
                                style="text-decoration: underline;"><strong>E-mail</strong></span>:
                            contact@xyz.com<br><span style="text-decoration: underline;"><strong>Mailing
                                    Address</strong></span>: <br>270 Greenwich, Ave<br>Greenwich, CT<br>06830</p>
                    </div>


                    <div class="contact-form form-vertical">
                        <form method="post" action="/contact#ContactForm" id="ContactForm" accept-charset="UTF-8"
                            class="contact-form"><input type="hidden" name="form_type" value="contact"><input
                                type="hidden" name="utf8" value="✓">





                            <div class="grid grid--half-gutters">
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactForm-name">Name</label>
                                    <input type="text" id="ContactForm-name" name="contact[Name]" value="">
                                </div>
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactForm-email">Email <span aria-hidden="true">*</span></label>
                                    <input type="email" id="ContactForm-email" name="contact[email]" autocorrect="off"
                                        autocapitalize="off" value="" aria-required="true">
                                </div>
                            </div>

                            <label for="ContactForm-phone">Phone Number</label>
                            <input type="tel" id="ContactForm-phone" name="contact[Phone Number]" pattern="[0-9\-]*"
                                value="">

                            <label for="ContactForm-message">Message</label>
                            <textarea rows="10" id="ContactForm-message" name="contact[Message]"></textarea>

                            <input type="submit" class="btn" value="Send">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once('../includes/footer.php'); ?>

    <div id="slideshow-info" class="visually-hidden" aria-hidden="true">Use left/right arrows to navigate the slideshow
        or swipe left/right if using a mobile device</div>

</div>