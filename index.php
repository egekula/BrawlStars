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
    <title>Brawl Stars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container py-3">
            <a class="navbar-brand fw-bolder" href="index.php">
                <img class="navbar-icon-bs" src="Assets/Img/Brawl-Stars-Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
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
                            <button type="button"
                                class="btn btn-primary rounded-5 d-flex align-items-center justify-content-center"
                                onclick="window.location.href='logout.php'">
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
    <!-- Navbar End -->
    <!-- Hero Section -->
    <section class="header">
        <div class="overlay">
            <div class="container">
                <video class="video-bg" autoplay muted loop
                    src="Assets\Img\Brawl_Stars_No_Time_to_Explain (online-video-cutter.com).mp4"></video>
                <div class="content-part row d-flex py-5 text-white">
                    <div class="col-lg-6 col-md-12 py-lg-5  py-md-4 py-2 px-5 text-md-center text-lg-start text-center">
                        <h1 class="pt-lg-2 pt-md-4 pt-2 pb-2 display-5">3V3 AND BATTLE ROYALE
                        </h1>
                        <p class="lead">Time to BRAWL! Team up with your friends and get ready for epic multiplayer
                            MAYHEM! Brawl Stars is the newest game from the makers of Clash of Clans and Clash Royale.
                            Jump into your favorite game mode and play quick matches with
                            your friends. Shoot 'em up, blow 'em up, punch 'em out and win the BRAWL.</p>
                        <div class="col-lg-12 text-md-center text-lg-start text-center ">
                            <a href="https://apps.apple.com/us/app/brawl-stars/id1229016807  "><img class="me-2"
                                    src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/app-store-badge.svg"
                                    alt="apple-logo"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.supercell.brawlstars&hl=tr"><img
                                    style=" width: 135px; height: 40px;"
                                    src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/google-play-badge.svg "
                                    alt="google-play-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-block">
                        <div>
                            <!-- <img class="img-fluid" src="Assets\Img\72fd889e8501fe4b29c949b329113392.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->
    <!-- Quote/testimonial aside-->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-contents py-5 px-5 d-flex align-items-center justify-content-center">
                <div class="text-center py-4 px-5">
                    <h2 class="mb-3 text-white fw-bolder ">"Brawl Stars: Enjoy Non-Stop Battle and Victory with
                        Legendary Characters, in Breathtaking Arenas!"</h2>
                    <img class="testimonial-logo" src="Assets/Img/Brawl-Stars-Logo.png" alt="Logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Quote/testimonial aside-->
    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="row  py-5 d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-12 order-md-1 order-2 ">
                    <img class="features-phone img-fluid"
                        src="https://supercell.com/images/1181b23832134c15aefecb7efacbc2ad/bg_intro_brawlstars.31c1276f.webp"
                        alt="feature-img">
                </div>
                <div class="col-md-6 col-12 order-md-2 order-1">
                    <h1 class="pt-lg-1 pt-md-4 pt-1 pb-3 text-center">BRAWL STARS
                    </h1>
                    <p>Brawl Stars is a multiplayer game by Supercell where players control unique characters
                        called Brawlers. It features several modes: Gem Grab (collect and hold gems), Showdown (battle
                        royale), Brawl Ball (soccer-like), Bounty (collect stars by defeating opponents), Heist
                        (attack/defend a safe), Siege (gather bolts to build a robot), and Hot Zone (control areas for
                        points). The game has vibrant graphics, frequent updates, and a competitive ranking system. Each
                        Brawler has distinct abilities, offering diverse gameplay experiences.</p>
                </div>
            </div>
            <div class="news">
                <h1 class="text-center py-2 mb-3">NEWS</h1>
                <div class="row gx-4 d-flex">
                    <div class="col-lg-6 col-12">
                        <a
                            href="https://supercell.com/en/games/brawlstars/blog/release-notes/patch-notes-godzilla-attacks-brawl/"><img
                                class="img-fluid py-2 px-2"
                                src="https://brawlstars.inbox.supercell.com/xdjcscmv3zo3/6Hn4jTeS0NQtp7FOaYaT4W/c9bb923ffe61eaf996e61061be9f944f/0422_Godzilla_update_release_notes_800x433.png?w=800&h=433&fit=fill&f=center&fm=webp"
                                alt="godzilla-img"></a>
                        <div class="text-center">
                            <h5 class="py-2 news-header">BRAWL STARS</h5>
                            <a class="news-href"
                                href="https://supercell.com/en/games/brawlstars/blog/release-notes/patch-notes-godzilla-attacks-brawl/">
                                <p class="pb-2 lead">Patch notes: Godzilla Attacks Brawl!</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <a
                            href="https://supercell.com/en/games/brawlstars/blog/release-notes/patch-notes-ranked-update/"><img
                                class="img-fluid py-2 px-2"
                                src="https://brawlstars.inbox.supercell.com/xdjcscmv3zo3/6DODzPuOkC7bYbZuVd89vH/3b1524b14f20905c1dcffb998330233d/0226_Ranked_Patch_notes_800x433.png?w=800&h=433&fit=fill&f=center&fm=webp"
                                alt="ranked-patched-img"></a>
                        <div class="text-center">
                            <h5 class="py-2 news-header">BRAWL STARS</h5>
                            <a class="news-href"
                                href="https://supercell.com/en/games/brawlstars/blog/release-notes/patch-notes-ranked-update/">
                                <p class="pb-2 lead">Patch notes: Ranked Update</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center py-5 align-items-center">
                    <a href="https://supercell.com/en/games/brawlstars/blog/"><button
                            class="btn btn-primary news-btn">BRAWL STARS NEWS</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <!-- Stay Update Section -->
    <section class="stay-up-date">
        <div class="container">
            <div class="row py-5 ">
                <div class="col-lg-6 col-md-12 col-12 order-2 order-md-1 py-2 px-3">
                    <img class="img-fluid"
                        src="https://supercell.com/images/1e491ac85a61389db92aeb48e54d704b/bg_gamewebsite_brawlstars.e19bca68.webp"
                        alt="update-img">
                </div>
                <div
                    class="content-stay col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center order-1 order-md-2  py-2 px-3">
                    <div>
                        <h2 class="text-white fs-1">STAY UP-TO-DATE</h2>
                        <p class="text-white fs-5">To stay on top of your game, keep an eye on the in-game News section.
                            Follow us on social media for the latest chatter and sneak peeks on what the team is working
                            on. Don’t be a stranger and join the conversation.</p>
                        <h5 class="text-white">FOLLOW BRAWL STARS ON</h5>
                        <div class="social-media-logo-content d-flex ">
                            <a class="text-white" href="https://x.com/BrawlStars"><i
                                    class="social-media-logo bi bi-twitter-x pe-2"></i></a>
                            <a class="text-white" href="https://www.instagram.com/brawlstars/"><i
                                    class="social-media-logo bi bi-instagram px-2"></i></a>
                            <a class="text-white" href="https://www.youtube.com/channel/UCooVYzDxdwTtGYAkcPmOgOw"><i
                                    class="social-media-logo bi bi-youtube px-2"></i></a>
                            <a class="text-white" href="https://www.tiktok.com/@brawlstars"><i
                                    class="social-media-logo bi bi-tiktok ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stay Update Section -->
    <!-- card section -->
    <section class="card-section  ">
        <div class="container py-2 ">
            <div class="row py-5 ">
                <div class="col-md-4 col-12 justify-content-center d-flex px-2 pb-3">
                    <a class="card-href" href="https://www.youtube.com/watch?v=vMGdiV-42Fo">
                        <div class="card card-video" style="width: 100%; ">
                            <img class="pause-button"
                                src="https://supercell.com/_next/static/media/playvideo.14f5a53a.webp"
                                alt="pause-button">
                            <img src="https://supercell.com/images/cee9718e8a21e90d04f384ff3653b221/games_brawlstars_video_mechamayhem_thumbnail.19dfe12f.webp"
                                class="card-img-top" alt="mechamayhem-img">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-start">
                                        <p class="card-text">Welcome MacheMey</p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <img src="https://supercell.com/_next/static/media/bg_logo_youtube.7663896d.webp"
                                            style="width: 70px; height: 16px;" alt="bg-logo-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-12 justify-content-center d-flex px-2 pb-3">
                    <a class="card-href" href="https://www.youtube.com/watch?v=BnmpuiWX3rk">
                        <div class="card card-video" style="width: 100%; ">
                            <img class="pause-button"
                                src="https://supercell.com/_next/static/media/playvideo.14f5a53a.webp"
                                alt="pause-button">
                            <img src="https://supercell.com/images/3da7260771d1baf3ee36393ca3b2c666/games_brawlstars_video_retropolis_thumbnail.54f29b8c.webp"
                                class="card-img-top" alt="retropolis-img">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-start">
                                        <p class="card-text">Welcome Retropolis!</p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <img src="https://supercell.com/_next/static/media/bg_logo_youtube.7663896d.webp"
                                            style="width: 70px; height: 16px;" alt="bg-logo-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-12 justify-content-center d-flex px-2 ">
                    <a class="card-href" href="https://www.youtube.com/watch?v=B38eWbSuSiM">
                        <div class="card card-video" style="width: 100%; ">
                            <img class="pause-button"
                                src="https://supercell.com/_next/static/media/playvideo.14f5a53a.webp"
                                alt="pause-button">
                            <img src="https://supercell.com/images/8aeec89d68e543fc0fb29c94fbb6e792/games_brawlstars_video_ricolove_thumbnail.25557357.webp"
                                class="card-img-top" alt="ricolove-img">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-start">
                                        <p class="card-text">Sweet Brawlentine</p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <img src="https://supercell.com/_next/static/media/bg_logo_youtube.7663896d.webp"
                                            style="width: 70px; height: 16px;" alt="bg-logo-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- card section -->
    <!-- footer section -->
    <footer class="bg-black text-white">
        <div class="container px-5">
            <div class="row d-flex py-5">
                <div class="col-lg-6 col-12 justify-content-start">
                    <h5 class="fs-6">Follow us on</h5>
                    <div class="pb-2">
                        <a class="text-white" href="https://x.com/BrawlStars"><i
                                class="social-media-logo bi bi-twitter-x pe-2"></i></a>
                        <a class="text-white" href="https://www.instagram.com/brawlstars/"><i
                                class="social-media-logo bi bi-instagram px-2"></i></a>
                        <a class="text-white" href="https://www.youtube.com/channel/UCooVYzDxdwTtGYAkcPmOgOw"><i
                                class="social-media-logo bi bi-youtube px-2"></i></a>
                        <a class="text-white" href="https://www.tiktok.com/@brawlstars"><i
                                class="social-media-logo bi bi-tiktok ps-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p d-lg-flex justify-content-lg-end d-block justify-content-start col-12">
                    <a class="py-2" href="https://apps.apple.com/us/app/brawl-stars/id1229016807    "><img class="me-2"
                            src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/app-store-badge.svg"
                            alt="apple-logo"></a>
                    <a class="py-2"
                        href="https://play.google.com/store/apps/details?id=com.supercell.brawlstars&hl=tr"><img
                            style=" width: 135px; height: 40px;"
                            src="https://demo.onlyjs.com/exercises/bootstrap-mobile-app/assets/img/google-play-badge.svg "
                            alt="google-play-logo"></a>
                </div>
            </div>
            <div
                class="py-3 row footer-usermenu d-lg-flex justify-content-lg-center justify-content-start d-block text-center">
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/terms-of-service/">Terms of Service</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/privacy-policy/">Privacy Policy</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/parents/">Parent's Guide</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/safe-and-fair-play/">Safe and Fair Play Policy</a>
                </div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/our-legal-documents/">Other Legal Docs</a></div>
                <div class="col-lg-2 col-12 py-1 "><a class="footer-elements"
                        href="https://supercell.com/en/our-legal-documents/#">Manage Cookies</a></div>
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
                <div
                    class="col-lg-6 d-lg-flex justify-content-lg-end align-items-center pb-5 d-block justify-content-start pt-2">
                    <img class="testimonial-logo" src="Assets/Img/Brawl-Stars-Logo.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section -->
    <script>
        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('register_success')) {
                alert("Kayıt başarılı");
            }
        };
    </script>
</body>

</html>