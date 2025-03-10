@extends('layouts.header')
@section('content')


    <!-- banner section -->
    <div class="slider">
        <div class="slide current">
            <div class="bg-layer">
                <div class="content">
                    <h6>Start Your Company With Us</h6>
                    <h3>Plan Business to Active Goal!</h3>
                    <a href="about.html" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h6>Business & Finance Consultancy</h6>
                    <h3>To grow & manage your business!</h3>
                    <a href="about.html" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h6>Start Your Company</h6>
                    <h3>Your Vision, <br>Our Achievement!</h3>
                    <a href="about.html" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h6>Business Consultancy</h6>
                    <h3>Building a future together!</h3>
                    <a href="about.html" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
    <!-- //banner section -->

    <!-- home page service grids -->
    <section class="home-services py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">Valued Services</h5>
                <h3 class="title-style">More than 30+ years we provide business consulting</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        <h4 class="number">01</h4>
                        <h4><a href="#url">Financial planing</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-marker"></i>
                        </div>
                        <h4 class="number">02</h4>
                        <h4><a href="#url">Training services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4 class="number">03</h4>
                        <h4><a href="#url">Marketing services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 class="number">04</h4>
                        <h4><a href="#url">Taxation services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //dashboard page service grids -->

    <!-- why choose section -->
    <section class="w3l-servicesblock py-5" id="whychoose">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h5 class="small-title mb-2">Why choose us</h5>
                    <h3 class="title-style">We Provided Some Of The Good Quality To You</h3>
                    <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat.</p>
                    <div class="row two-grids mt-5 pt-lg-4">
                        <div class="col-sm-6 grids_info d-flex">
                            <i class="fas fa-hand-holding-usd"></i>
                            <div class="detail ms-3">
                                <h4>Finance Consultant</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 grids_info d-flex mt-sm-0 mt-4">
                            <i class="far fa-chart-bar"></i>
                            <div class="detail ms-3">
                                <h4>Business Consultant</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 text-end mt-lg-0 mt-5 position-relative">
                    <img src="assets/images/img1.jpg" alt="" class="img-fluid radius-image">
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">36+</h6>
                        <p>Years of experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose section -->

    <!-- features section -->
    <section class="w3l-grids-block py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:600px;">
                <h5 class="small-title mb-2">Our Features</h5>
                <h3 class="title-style">We Make Your Agency Full Bright</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fas fa-business-time"></i>
                            <h3 class="mt-3 mb-2"> Market Research</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-md-0 mt-4">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fab fa-accusoft"></i>
                            <h3 class="mt-3 mb-2">Startup Business</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-lg-0 mt-4">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fas fa-chart-line"></i>
                            <h3 class="mt-3 mb-2">Business Growth</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fas fa-chart-pie"></i>
                            <h3 class="mt-3 mb-2">Consultancy</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fas fa-piggy-bank"></i>
                            <h3 class="mt-3 mb-2"> Financial Advices</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mt-4">
                    <div class="bottom-block">
                        <a href="#features" class="d-block">
                            <i class="fas fa-copy"></i>
                            <h3 class="mt-3 mb-2">Tax Strategy</h3>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora
                                rerum perspiciatis?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features section -->

    <!-- 3grids with bg-image section -->
    <div class="w3l-homeblock3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">What we do?</h5>
                <h3 class="title-style">We take care of the Future!</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="top-pic1">
                        <div class="card-body blog-details">
                            <span class="meta-value">Investment</span>
                            <a href="#blog" class="blog-desc">Strength solutions
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="top-pic2">
                        <div class="card-body blog-details">
                            <span class="meta-value">Strategy</span>
                            <a href="#blog" class="blog-desc">Business analytics
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="top-pic3">
                        <div class="card-body blog-details">
                            <span class="meta-value"> Tax Consulting </span>
                            <a href="#blog" class="blog-desc">Stock investments
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //3grids with bg-image section -->

    <!-- progress section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <img src="assets/images/img2.jpg" alt="" class="img-fluid radius-image" />
                </div>
                <div class="col-lg-6 about-2-secs-left ps-xl-5">
                    <h5 class="small-title mb-2">Why Choose us</h5>
                    <h3 class="title-style mb-sm-3 mb-2">A right choice that makes the difference to others</h3>
                    <p>Consectetur adipiscing elit. Aliquam sit amet
                        efficitur tortor. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunte mollit.</p>
                    <div class="w3l-progressblock mt-md-5 mt-4">
                        <div class="progress-info info1">
                            <h6 class="progress-tittle">Business Planning <span class="">90%</span></h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info info2">
                            <h6 class="progress-tittle">Creativity <span class="">85%</span>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info info3">
                            <h6 class="progress-tittle">Financial Advices <span class="">80%</span></h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info info3 mb-0">
                            <h6 class="progress-tittle">Business Security <span class="">90%</span></h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //progress section -->

    <style>
      /* استيراد خط أنيق */
@import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap');

/* 🌟 قسم إعلانات متحركة أفقية */
.moving-ads {
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    padding: 20px 0;
    position: relative;
}

.ads-container {
    display: flex;
    gap: 20px;
    animation: moveLeft 40s linear infinite; /* تم زيادة الوقت إلى 40 ثانية */
}

.ads-container img {
    width: 16vw; /* العرض يكون بنسبة للشاشة */
    max-width: 500px; /* الحد الأقصى لحجم الصورة */
    height: auto;
    border-radius: 10px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

/* تأثير عند تمرير الماوس (يعمل فقط على الكمبيوتر) */
@media (hover: hover) {
    .ads-container img:hover {
        transform: scale(1.2);
        cursor: pointer;
    }

    /* إيقاف الحركة عند تمرير الماوس */
    .moving-ads:hover .ads-container {
        animation-play-state: paused;
    }
}

/* حركة الصور */
@keyframes moveLeft {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

/* تحسين الظهور على الأجهزة المختلفة */
@media (max-width: 768px) {
    .ads-container img {
        width: 20vw; /* تكبير الصور على الهاتف */
    }
}

@media (min-width: 1200px) {
    .ads-container img {
        width: 14vw; /* تصغير الصور على الشاشات الكبيرة */
    }
}


    </style>
</head>
<body>

    <!-- قسم إعلانات متحركة أفقية -->
    <div class="moving-ads">
        <div class="ads-container">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
            <img src="/assets/images/bg1.jpg" alt="وشم">
           
            >
        </div>
    </div>

</body>
</html>

    <!-- testimonials section -->
    <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center py-4">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <img src="assets/images/testi1.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Mario Spe</div>
                            </li>

                            <li class="anim2">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo
                                        inventore.
                                    </q> </blockquote>
                                <div class="source">- Petey Cru</div>
                            </li>
                            <li class="anim3">
                                <img src="assets/images/testi3.jpg" class="img-fluid rounded-circle "
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Anna Sth</div>
                            </li>
                            <li class="anim4">
                                <img src="assets/images/testi1.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Gail For</div>
                            </li>
                            <li class="anim5">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Boye Fra</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- الحاوية الخاصة ببطاقات العرض -->
<div class="container my-5">
    <div class="row">
        <!-- بطاقة 1 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 1" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 1</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal1" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>

        <!-- بطاقة 2 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 2" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 2</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal2" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>

        <!-- بطاقة 3 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 3" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 3</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal3" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>

        <!-- بطاقة 4 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 4" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 4</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal4" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>

        <!-- بطاقة 5 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 5" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 5</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal5" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>

        <!-- بطاقة 6 -->
        <div class="col-md-4" style="border-radius: 30px;">
            <div class="بطاقة shadow-lg border-0 rounded" style="border-radius: 30px;">
                <img src="assets/images/abs.jpeg" class="card-img-top" alt="صورة 6" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="محتوى-البطاقة d-flex flex-column align-items-center" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <h5 class="عنوان-البطاقة">عنوان 6</h5>
                    <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modal6" style="background-color: var(--primary-color); border-radius: 20px;">عرض التفاصيل</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- مودالات التفاصيل -->

<!-- Modal 1 -->
<!-- Bouton pour ouvrir le modal -->

<!-- Le Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg border-0 rounded-3">
      
      <!-- En-tête du modal -->
      <div class="modal-header bg-light border-0">
        <h5 class="modal-title fw-bold text-primary" id="modal1Label">Nos Compétences</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Corps du modal -->
      <div class="modal-body p-4">
    
        <!-- Section Stratégie -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-6 col-md-12 text-md-center text-lg-start">
                <h3 class="text-primary">📌 Stratégie</h3>
                <p>
                    La stratégie a pour vocation de créer ou re-créer du potentiel pour vos activités. 
                    Elle engage l'entreprise sur le moyen et le long terme.
                </p>
                <ul>
                    <li>✅ Projet de développement stratégique.</li>
                    <li>✅ Diagnostic stratégique et plan de progrès.</li>
                    <li>✅ Coaching.</li>
                    <li>✅ Leadership.</li>
                    <li>✅ Management.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <img src="assets/images/abs.jpeg" alt="Stratégie" class="img-fluid rounded shadow-sm modal-img">
            </div>
        </div>

        <!-- Section Finance -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 text-center order-lg-1 order-md-2">
                <img src="assets/images/abs.jpeg" alt="Finance" class="img-fluid rounded shadow-sm modal-img">
            </div>
            <div class="col-lg-6 col-md-12 text-md-center text-lg-start order-lg-2 order-md-1">
                <h3 class="text-success">💰 Finance</h3>
                <p>
                    La fonction finance est une activité clé de l'entreprise qui vient irriguer les autres fonctions 
                    en leur fournissant les ressources nécessaires à leur développement.
                </p>
                <ul>
                    <li>💡 Audit financier.</li>
                    <li>💡 Contrôle de gestion.</li>
                    <li>💡 Comptabilité générale et analytique.</li>
                    <li>💡 Gestion de trésorerie.</li>
                    <li>💡 Business plan.</li>
                    <li>💡 Normes IFRS.</li>
                </ul>
            </div>
        </div>

      </div>

      <!-- Pied du modal -->
      <div class="modal-footer border-0 d-flex justify-content-center">
        <button type="button" class="btn btn-danger px-4 py-2 rounded-pill" data-bs-dismiss="modal">
          إغلاق
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap -->

<!-- Styles CSS pour l'adaptation mobile -->
<style>
    /* Ajustement des images pour qu'elles ne dépassent pas l'écran */
    .modal-img {
        max-width: 100%;
        height: auto;
        border: 3px solid #007bff;
    }

    /* Animation fluide à l'ouverture du modal */
    .modal.fade .modal-dialog {
        transform: scale(0.8);
        opacity: 0;
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }

    .modal.show .modal-dialog {
        transform: scale(1);
        opacity: 1;
    }

    /* Adaptation sur mobile */
    @media (max-width: 768px) {
        .modal-body {
            padding: 20px;
        }
        .modal-title {
            font-size: 1.2rem;
        }
        .modal-footer button {
            width: 100%;
        }
    }
</style>

<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal2Label">تفاصيل المودال 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هنا تفاصيل إضافية للمودال 2.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal3Label">تفاصيل المودال 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هنا تفاصيل إضافية للمودال 3.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal4Label">تفاصيل المودال 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هنا تفاصيل إضافية للمودال 4.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal5Label">تفاصيل المودال 5</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هنا تفاصيل إضافية للمودال 5.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6 -->
<div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal6Label">تفاصيل المودال 6</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هنا تفاصيل إضافية للمودال 6.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<style>
    /* إضافة مسافات بين البطاقات */
.بطاقة {
    margin-bottom: 30px; /* المسافة بين البطاقات */
}

.محتوى-البطاقة {
    padding: 10px; /* مساحة داخلية لزيادة وضوح المحتوى */
}
.عنوان-البطاقة {
    font-size: 1.25rem; /* حجم الخط للعنوان */
}
.نص-البطاقة {
    font-size: 1rem; /* حجم الخط للنص */
}

</style>
    <!-- blog section -->
    <div class="w3l-blog-block-5 py-5" id="blog">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">News Feed</h5>
                <h3 class="title-style">Latest Blog Posts</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">How To Scale a Dropshipping Business</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi2.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Eetey Cruis</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Nov 06, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog3.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Customer Onboarding Strategy</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Molive Joe</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Nov 10, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog2.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">How to plan a website redesign strategy</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi3.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Turne Leo
                                        </span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Nov 12, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog section -->
@endsection
