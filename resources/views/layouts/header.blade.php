
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workup - Corporate Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <i class="fab fa-wikipedia-w"></i>abs
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <form action="#search" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
<br>
<br>
<br>
<br>
    @yield('content')


    <!-- footer -->
    <footer class="w3l-footer py-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-4 sub-one-left">
                    <h6>About </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia dicta magni ea
                        at, culpa atque, rerum dolorum voluptas alias
                        qui temporibus ex totam distinctio nobis impedit minus rerum,
                        nihil blan ditiis quos atque.</p>
                    <ul class="social mt-4 pt-lg-1">
                        <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#twitter"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a href="#google-plus"><span class="fab fa-google-plus-g"></span></a></li>
                        <li><a href="#instagram"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 mt-lg-0 mt-5 px-lg-5 sub-two-right">
                    <h6>Recent Posts</h6>
                    <div class="footer-post">
                        <ul>
                            <li><a href="#post">Suzan Lois</a></li>
                            <li class="mx-2"><a href="#post">- Nov. 21 - </a></li>
                            <li><a href="#post">3 comments</a></li>
                        </ul>
                        <p class="post-footer"><a href="#post">Delivering New Customer Experiences with Workup.</a></p>
                    </div>
                    <div class="footer-post mt-4">
                        <ul>
                            <li><a href="#post">Rose Alha</a></li>
                            <li class="mx-2"><a href="#post">- Nov. 21 - </a></li>
                            <li><a href="#post">3 comments</a></li>
                        </ul>
                        <p class="post-footer"><a href="#post">Discussing the current trends in the share market.</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 sub-one-left">
                    <h6>Contact </h6>
                    <div class="column2">
                        <div class="href1"><span class="fas fa-envelope-open"></span><a
                                href="mailto:info@example.com">info@example.com</a>
                        </div>
                        <div class="href2 my-3"><span class="fas fa-phone-alt"></span><a
                                href="tel:+44-123-456-78">+44-123-456-78</a>
                        </div>
                        <div>
                            <p class="contact-para mb-3"><span class="fas fa-map-marker-alt"></span>New York,
                                235 Lane, 10001</p>
                        </div>
                        <div>
                            <p class="contact-para"><span class="fas fa-clock"></span>Office Hours: 9AM - 7PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-footer text-center mt-5 pt-sm-4 pt-2">
                <p>&copy; 2021 Workup. All rights reserved | Design by <a href="https://w3layouts.com/">W3Layouts</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slider -->
    <script>
        const slides = document.querySelectorAll(".slide");
        const nextButton = document.getElementById("next");
        const prevButton = document.getElementById("prev");
        const auto = true;
        const intervalTime = 5000;
        let slideInterval;

        const nextSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.nextElementSibling) {
                current.nextElementSibling.classList.add("current");
            } else {
                slides[0].classList.add("current");
            }
        };

        const prevSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.previousElementSibling) {
                current.previousElementSibling.classList.add("current");
            } else {
                slides[slides.length - 1].classList.add("current");
            }
        };

        nextButton.addEventListener("click", () => {
            nextSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });
        prevButton.addEventListener("click", () => {
            prevSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });

        if (auto) {
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    </script>
    <!-- //banner slider -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
