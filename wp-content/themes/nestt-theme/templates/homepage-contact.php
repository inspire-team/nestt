<!-- temp css -->
<style media="screen">
    .contact_section {
        width: 625px;
        height: 500px;
    }

    ul {
        display: table;
        padding: 0;
    }

    ul > li {
        display: table-row;
        text-align: left;
    }

    ul > li::before {
        content: "-";
        display: table-cell; /* aha! */
        text-align: right;
    }

    li div {
        margin-left: 30px;
    }

    .no-bottom {
        margin: 0;
    }
    .inline-block {
        display: inline-block;
    }

    #myoutercontainer { position:relative }
	#myinnercontainer { position:absolute; top:74%; height:auto; margin-top:-5em }

    .contact_info {
        margin-left: 27px;
    }

    .contact_data, .contact_email {
        margin-top: 25px;
    }
</style>
<!-- contact Section -->
<section id="contact" class="contact_container">
    <div class="contact_div" <?php echo "style='background-color:" . onepage_get_option('onepage_contact_bg_color', '#9792d4') . "'"; ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center contact_section">
                    <h2 class="main_head animated fade_in_up">CONTACT</h2>
                    <div class="contact_person text-left" id="myoutercontainer">
                        <div class="contact_pic inline-block"><img src="<?= get_bloginfo('template_url') . '/assets/images/michael_pic.png'; ?>" alt="Michael Rosemann"></div>
                        <div class="contact_info inline-block middle-div" id="myinnercontainer">
                            <div class="">Prof Michael Rosemann</div>
                            <div class="">Executive Director Corporate Engagement</div>
                            <div class="">Queensland University of Technology</div>
                        </div>
                    </div>
                    <div class="contact_data">
                        <p class="no-bottom text-left">Contact us, if you are interested</p>
                        <ul>
                            <li><div>in participating in our NESTT courses, either as a participant in our open enrollment course or if you are interested in organising an in-house event</div></li>
                            <li><div>in becoming a delivery partner for the NESTT, in Australia or globally</div></li>
                            <li><div>in conducting a NESTT redesign initiative within your organisation</div></li>
                            <li><div>in conducting research in the area of rapid redesign approaches</div></li>
                        </ul>
                    </div>
                    <div class="text-left contact_email">
                        <p>Email: nestt@qut.edu.au</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact Section -->
