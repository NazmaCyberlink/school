<?php include('assets/include/header.php'); ?>
<div class="uk-inner-header uk-light" style="background-image: url('assets/img/phone.jpg');">
    <div class="uk-container">
        <h1>Contact</h1>
        <ul class="uk-breadcrumb uk-flex uk-flex-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>
<section class="uk-section uk-padding-large" >
    <div class="uk-container">
        <div class="uk-main-title">
            <h2 class="uk-text-left">Get In Touch</h2>
        </div>
        <ul class="uk-child-width-1-2@s uk-child-width-1-1" uk-height-match=".uk-contact" uk-grid>
            <li>
                <div class="uk-card uk-margin-top uk-contact uk-padding">
                    <div>
                        <p><span href="" class="uk-icon-button uk-margin-small-right" uk-icon="location"></span> Level 7, 8 Quay Street, Haymarket , Australia</p>
                        <p><span href="" class="uk-icon-button  uk-margin-small-right" uk-icon="mail"></span>loremipsum@gmail.com</p>
                        <p><span href="" class="uk-icon-button" uk-icon="receiver"></span>+61 02 8065 2990</p>
                        <div class="uk-margin-top">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.905009530548!2d151.24542261521088!3d-33.89210018064974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12adf0e4f93701%3A0x47b2e3a1fda61d5f!2sLevel+2%2F133-135+Oxford+St%2C+Bondi+Junction+NSW+2022%2C+Australia!5e0!3m2!1sen!2snp!4v1565252315816!5m2!1sen!2snp" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-margin-top uk-contact uk-padding">
                    <form class="uk-form-stacked">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" >
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" >
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Phone</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" >
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Subject</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="5" placeholder="Textarea" aria-label="Textarea"></textarea>
                            </div>
                        </div>
                        <div class="uk-margin-top">
                            <button class="uk-button uk-button-default">Submit</button>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</section>
<?php include('assets/include/footer.php'); ?>