<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawl Stars-About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg bg-black">
    <div class="container py-3">
        <a class="navbar-brand fw-bolder" href="index.php">
            <img class="navbar-icon-bs" src="Assets/Img/Brawl-Stars-Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto px-4 fw-semibold">
                <li class="nav-item px-3">
                    <a class="nav-link text-white" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" aria-current="page" href="contact.php">Contact</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="download.php">Download</a>
                </li>
                <li class="nav-item d-flex align-items-center px-3">
                    <?php if (isset($user)): ?>
                        <button type="button" class="btn btn-primary rounded-5 d-flex align-items-center me-2">
                            <i class="bi bi-person-circle me-2"></i><?= htmlspecialchars($user["name"]) ?>
                        </button>
                        <button type="button" class="btn btn-primary rounded-5 d-flex align-items-center justify-content-center" onclick="window.location.href='logout.php'">
                            <i class="bi bi-box-arrow-right"></i>
                        </button>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-primary rounded-5 me-2">Log In</a>
                        <a href="signup.html" class="btn btn-primary rounded-5">Sign Up</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
     <!-- Navbar Section -->
    <!-- About Section -->
    <section class="header-about">
        <div class="container">
            <div class="content-part row d-flex py-5 text-white text-center px-5">
                <h1 class="px-5 display-3 fw-bold">THE BEST <s>PEOPLE</s> TEAMS <br> MAKE THE BEST GAMES*</h1>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <!-- Information Section -->
    <section class="information-part">
        <div class="container">
            <div class="information-content d-flex row justify-content-center px-5 py-4 mx-lg-5">
                <div class="col-12 px-lg-5">
                    <h1 class="pb-3 text-center pt-3">SUPERCELL</h1>
                    <p class="pb-3 px-lg-5 information-p">Supercell is a game company based in Helsinki, Finland, with
                        offices in San Francisco, Seoul and Shanghai. Since our launch in 2010, we've brought five games
                        to the global market – Hay Day, Clash of Clans, Boom Beach, Clash Royale
                        and Brawl Stars. Our dream is to create great games that as many people as possible play for
                        years and that are remembered forever.
                    </p>
                    <p class="px-lg-5 pb-4">Read more about us and our history below.</p>
                    <div class="row px-lg-5 text-center">
                        <div class="col-md-3 col-6 history-p-1 py-2">
                            <div class="">565</div>
                            <div class="history-inf">Supercellians</div>
                        </div>
                        <div class="col-md-3 col-6  history-p-2 py-2">
                            <div class="">4</div>
                            <div class="history-inf">Offices</div>
                        </div>
                        <div class="col-md-3 col-6  history-p-3 py-2">
                            <div class="">40+</div>
                            <div class="history-inf">Nationalities</div>
                        </div>
                        <div class="col-md-3 col-6  history-p-4 py-2">
                            <div class="">5</div>
                            <div class="history-inf">Live Game</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information Section -->
    <!-- Information Detailed Section -->
    <section>
        <div class="about-us">
            <img class="knife" src="https://supercell.com/_next/static/media/bg_ourstory_top.64b2031e.webp" alt="knife-img">
            <img class="hero-char" src="https://supercell.com/_next/static/media/bg_ourstory_side_r.cb0709f7.webp"
                alt="hero-img">
        </div>
        <div class="container py-5 mt-5">
            <div class="information-content-2 d-flex row justify-content-center px-5 py-3 mx-lg-5 ">
                <div class="col-12 px-lg-5 pt-5">
                    <h1 class="pb-2 text-center pt-5">WHY WE ARE HERE</h1>
                    <p class="pb-3 px-lg-5 information-p pt-2">Supercell was founded on the idea of giving game
                        developers and teams the independence to decide what kinds of games they make and how they
                        choose to make them. Over a decade and five global games later, our dream still stands: to
                        create great games that as many people as possible play for years and that are remembered
                        forever. <br> <br> We believe games have the power to bring people around the world together and
                        closer to each other. We work to create
                        new, innovative, memorable experiences no one has played before. This is why we try to design
                        games that excite wide and diverse player communities as well as to expand the audience for
                        otherwise smaller “niche” game concepts.
                        <br> <br> There’s no simple recipe or magic formula to achieve our dream. What we do know,
                        however, is that without players Supercell doesn’t exist. Creating lovable worlds and characters
                        that players want to come back to over
                        and over again is at the heart of how we design and operate our games
                    </p>
                    <p class="px-lg-5 information-p pt-2 fs-1  lead mx-lg-5 mx-3 text-center">In the end, the question
                        we ask ourselves is: “Are we building something that could be important?”</p>
                    <div class="px-lg-5 pt-5">
                        <h3 class=" pb-2 fw-semibold fs-5">Uncover more about our culture:</h3>
                        <ul class="px-lg-5">
                            <li><a class="culture-links" href="https://supercell.com/en/news/next-chapter/?about-us">The
                                    Next Chapter of Supercell</a>
                            </li>
                            <li><a class="culture-links" href="https://supercell.com/en/news/best-days/7600/">Are
                                    Supercell’s best days behind us or ahead of us?</a></li>
                            <li> <a class="culture-links"
                                    href="https://supercell.com/en/news/my-take-supercell-2020-we-begin-our-second-decade/7499/">"My
                                    take on Supercell in 2020 as we begin our second decade"</a> </li>
                            <li><a class="culture-links"
                                    href="https://supercell.com/en/news/10-learnings-10-years/7436/">10 learnings from
                                    10 years</a> </li>
                        </ul>
                        <p class="pt-3 ">* In 2010, we believed that creating great games is all about having the best
                            people and providing them with the best possible environment to focus on developing the best
                            games. However, many years later, we realized that it is
                            not only about having the best individuals/people but having the best teams. A group of
                            great individuals does not automatically make a great team. The best team is the one with
                            the best people who work extremely well together</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information Detailed Section -->
    <!-- Card Carousel Section -->
    <section class="container  pb-5">
        <div class="owl-carousel owl-theme  ">
            <div class="item ">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_pocketgamer.95fb5d24.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Head of Live Games Sara Bach talks company changes, world-beating live ops, and how
                                    to get back on top</h5>
                                <p class="card-text pt-1">Supercell stands out in the gaming industry not just for the
                                    genre-defining, high-quality games and repeated success but also for the unique cell
                                    structure and culture of empowerment and autonomy. From my experience, both
                                    outside and now inside the company, this environment is clearly different from other
                                    companies I've been part of.</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_mobilegamer.2c2acc3e.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Why Supercell greenlights teams, not games – and is now open to external pitches
                                </h5>
                                <p class="card-text pt-1">I have personal failures on that front, when my past new game
                                    teams fell apart. Sometimes it’s really those small interpersonal connections that
                                    create the biggest problems. My hope is that we frontload all those learnings
                                    from the past on why teams failed. Hopefully this way we can strengthen the creative
                                    core of a team and say: this team is really strong enough because they’ve gone
                                    through shit together.</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_mobilegamer.2c2acc3e.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Supercell dodged ‘the great resignation’, but it’s doubling down on staff wellbeing
                                    anyway</h5>
                                <p class="card-text pt-1">“We work with a company who did a whole bunch of training to
                                    increase awareness of mental health and also reduce the stigma,” says Mansford. “If
                                    people aren’t talking about it, then that’s a problem in itself.” Staff can
                                    ask to be trained like mental health first aiders under a program called ‘Jedis of
                                    the mind’, and in Helsinki there’s a psychologist on-site twice a week. There are a
                                    raft of other training and online resources for
                                    staff who want to learn more in a less public way as well.</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_pocketgamer.95fb5d24.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Supercell talks breaking the mould of puzzle games with Clash Quest</h5>
                                <p class="card-text pt-1">"In my experience, whenever you change some design
                                    fundamentals, the whole game needs to be built in a different way. I don’t think
                                    many players will notice these differences, but they can have a big impact on how
                                    the game
                                    needs to be built.”</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_venturebeat.dab176f7.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Supercell CEO thrives on trusting the instincts of game developers</h5>
                                <p class="card-text pt-1">Our threshold for releasing anything to beta should be low,
                                    but our bar for releasing anything globally should be high. But one way to fail as a
                                    company would be you paralyze yourself. Nothing is ever good enough and you
                                    don’t put anything out. One thing we fundamentally believe in is that how we
                                    ultimately achieve the best quality is we learn as quickly as possible. If you never
                                    ship anything to real players, you never learn, and you
                                    never achieve ultimate quality.</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card " style="width: 100%; height:620px;">
                    <img src="https://supercell.com/_next/static/media/news_gamasutra.a96f9444.webp"
                        class="card-img-top" alt="card-img">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  justify-content-start">
                                <h5>Less management, more success - Inside Supercell's upside-down organization</h5>
                                <p class="card-text pt-1">There is no greenlight process from management, no milestone
                                    meetings where teams need to justify their project’s existence to finance. Teams can
                                    kill their games and move on if deemed necessary. All creative decisions
                                    are up to the teams. So the role of management in an upside structure? Build great
                                    teams, and support them in their efforts in order to facilitate their success.</p>
                            </div>
                            <a class="pt-1 card-carousel-a"
                                href="https://www.pocketgamer.biz/interview/83591/supercells-head-of-live-games-sara-bach-talks-company-changes-world-beating-live-ops-and-how-to-get-back-on-top/">
                                Read Article&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Card Carousel Section -->
    <!-- Footer Section -->
    <footer class="bg-black text-white">
        <div class="container px-5">
            <div class="row d-flex py-5">
                <div class="col-lg-6 col-12 justify-content-start">
                    <h5 class="fs-6">Follow us on</h5>
                    <div class="pb-2">
                        <a class="text-white" href="https://x.com/BrawlStars"><i class="social-media-logo bi bi-twitter-x pe-2"></i></a>
                        <a class="text-white" href="https://www.instagram.com/brawlstars/"><i class="social-media-logo bi bi-instagram px-2"></i></a>
                        <a class="text-white" href="https://www.youtube.com/channel/UCooVYzDxdwTtGYAkcPmOgOw"><i class="social-media-logo bi bi-youtube px-2"></i></a>
                        <a class="text-white" href="https://www.tiktok.com/@brawlstars"><i class="social-media-logo bi bi-tiktok ps-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p d-lg-flex justify-content-lg-end d-block justify-content-start col-12">
                    <a class="py-2" href="https://apps.apple.com/us/app/brawl-stars/id1229016807    "><img class="me-2" src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/app-store-badge.svg" alt="apple-logo"></a>
                    <a class="py-2" href="https://play.google.com/store/apps/details?id=com.supercell.brawlstars&hl=tr"><img style=" width: 135px; height: 40px;" src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/google-play-badge.svg " alt="google-play-logo"></a>
                </div>
            </div>
            <div class="py-3 row footer-usermenu d-lg-flex justify-content-lg-center justify-content-start d-block text-center">
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/terms-of-service/">Terms of Service</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/privacy-policy/">Privacy Policy</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/parents/">Parent's Guide</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/safe-and-fair-play/">Safe and Fair Play Policy</a>
                </div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/our-legal-documents/">Other Legal Docs</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements" href="https://supercell.com/en/our-legal-documents/#">Manage Cookies</a></div>
            </div>
            <div class="row d-flex py-5">
                <div class="col-lg-6 col-12 justify-content-start pb-2">
                    <div class="address">
                        <span>Supercell Oy</span>
                        <span>Jätkäsaarenlaituri 1</span>
                        <span>00180 Helsinki</span>
                        <span>Finland</span>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex justify-content-lg-end align-items-center pb-5 d-block justify-content-start pt-2">
                    <img class="testimonial-logo" src="Assets/Img/Brawl-Stars-Logo.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 3
                },

            }
        })
    </script>
</body>
</html>