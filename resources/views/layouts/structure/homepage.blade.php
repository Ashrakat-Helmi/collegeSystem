@yield('content')
<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container" data-aos="fade-in">
            <h1>Welcome to Helwan University</h1>
            <h2>Here you will find the best colleges in Egypt</h2>
            <div class="d-flex align-items-center">
                <i class="bx bxs-right-arrow-alt get-started-icon"></i>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section><!-- End Hero -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                    <div class="content">
                        <h3>Why Choose Helwan university for your learning journey ?</h3>
                        <p>
                            we Have Diffrent Programs To Make You Qualified To The Market
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-flex">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>BIS</h4>
                                    <p>From Here Great Persons Graduated</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>FMI</h4>
                                    <p>What The Future Work Need</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>ES</h4>
                                    <p>English Section To Be Agreat Acountant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative"
                    data-aos="fade-right">
                    <div>
                        <img src="{{ asset('/assets/img/about.jpg') }}" alt="" style="width:100%; height:100%">
                    </div>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h4 data-aos="fade-up">About us</h4>

                    <p data-aos="fade-up">Helwan University is a member of the Egyptian Supreme Council of
                        Universities. It was established on July 26, 1975.
                        It is the youngest
                        of 3 major governmental universities in Cairo.

                        However, it goes back to the 19th century during the reign of Muhammad Ali of Egypt
                        who established “The Operations School”. The fields of that school were the basis of
                        many institutes that formed Helwan University later.</p>

                    <div class="" data-aos="fade-up">
                        <h4 class="title"><a href="">BIS</a></h4>
                        <p class="description">Business Information System
                            Helwan University</p>
                    </div>

                    <div class="" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="title"><a href="">FMI</a></h4>
                        <p class="description">Financial Markets & Institutions FMI, Faculty of Commerce- HU</p>
                    </div>

                    <div class="" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="title"><a href="">ES</a></h4>
                        <p class="description">Faculty of Commerce- HU,English section</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/BIS.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/dgc.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/FMI.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/PBIS.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/PPP.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/clients/QA.png') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Programs Section ======= -->
    <section id="programs" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Programs</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Business Information System</a></h4>
                        <p class="description">Business information systems provide information that organizations
                            use to manage themselves efficiently and effectively, typically using computer systems
                            and technology. Primary components of business information systems include hardware,
                            software, data, procedures
                            (design, development, and documentation) and people.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Financial Markets & Institutions</a></h4>
                        <p class="description">
                            Financial markets consist of agents, brokers, institutions, and intermediaries
                            transacting purchases and sales of securities. ... The term financial
                            institution is a broad phrase referring to organizations which act as agents,
                            brokers, and intermediaries in
                            financial transactions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">English section</a></h4>
                        <p class="description">Faculty of Commerce and Business Adminstration
                            Helwan university is distinct with its distinguished modern educational
                            programs at the bachelor degree
                            such as the English section program</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= News Section ======= -->
    <section id="news" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">News</h2>
                <h3 data-aos="fade-up">The Latest News</h3>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/news/img1.jpg') }}" class="img-fluid" alt="">

                            </div>
                            <div class="member-title">
                                <p>
                                    {{ $post->title }}
                                </p>

                            </div>
                            <div class="member-info">
                                <p>
                                    {{ $post->description }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">F.A.Q</h2>
                <p data-aos="fade-up">If You Have Aquestion You will Find Here</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Where is Helwan University <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Address: Al Sikka Al Hadid Al Gharbeya, Al Masaken Al Iqtisadeyah, Helwan, Cairo
                                Governorate
                                Phone: 02 25569061
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">How Much The coast of Each program <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                The Coast Determine annualy By The Management organizations
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">How Can I Enroll In Each program <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                you Cab Enroll By Register and Choose Your desire Then it depends on your total degrees

                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Contact</h2>
                <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga
                    eum
                    quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                    alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
