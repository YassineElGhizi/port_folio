<!-- Start Contact section -->
<div class="rn-contact-area rn-section-gap section-separator" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle">Contact</span>
                    <h2 class="title">Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
            <div class="col-lg-5">
                <div class="contact-about-area">
                    <div class="title-area">
                        <h4 class="title">Yassine EL GHIZI</h4>
                        <span style="color: #01ffac	">Software Engineer</span>
                    </div>
                    <div class="description">
                        <p>I am available for work opportunities. Contact Me using the credentials bellow or
                            the form.
                        </p>
                        <span class="mail">Email: <a href="mailto:admin@example.com">yassine.ghizi2@gmail.com</a></span>
                        <span class="mail">Discord: peace#9694</span>
                    </div>
                    <div class="social-area">
                        <div class="name">FIND ME IN</div>
                        <div class="social-icone">
                            <a href="https://github.com/YassineElGhizi"><i data-feather="github"></i></a>
                            <a href="https://www.linkedin.com/in/yassine-el-ghizi/"><i data-feather="linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 contact-input">
                <div class="contact-form-wrapper">
                    <div class="introduce">
                        <form class="row" method="post" action="{{route('contact')}}">
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-name">Your Name</label>
                                    <input class="form-control form-control-lg" name="contact-name" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input class="form-control" name="contact-phone" type="text">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input class="form-control form-control-sm" name="contact-email" type="email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">subject</label>
                                    <input class="form-control form-control-sm" name="subject"
                                           type="text">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Message</label>
                                    <textarea name="contact-message" cols="20" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="rn-btn">
                                    <span>SEND MESSAGE</span>
                                    <i data-feather="arrow-right"></i>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contuct section -->
