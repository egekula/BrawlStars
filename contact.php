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
    <title>Brawl Stars-Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
    <!-- Contact Section -->
    <section class="contact-part py-5 my-5 px-5 ">
        <div class="container-part text-center container bg-black rounded-5">
            <div class="message-icon  bg-primary mt-5 fs-1 mb-3 rounded-3">
                <i class="bi-envelope-fill bi text-white"></i>
            </div>
            <div class="writing-section mb-3 text-white">
                <h1 class="fw-bolder mb-3">Get In Touch</h1>
                <p class="lead fw-normal text-white-50">We'd love to hear from you</p>
            </div>
            <div class="row justify-content-center align-item-center d-flex py-2">
                <div class="col-lg-8 col-xxl-6">
                    <form action="https://formsubmit.co/gecginsukru1@gmail.com" method="POST">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="Name" name="Name">
                            <label for="Name" class="form-label">Full Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" name="Email" id="Email"
                                aria-describedby="emailHelp">
                            <label for="Email" class="form-label">Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="tel" class="form-control" id="phone-number" name="phone-number">
                            <label for="phone-number" class="form-label">Phone Number</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" id="TextArea" name="TextArea"
                                style="height: 100px;"></textarea>
                            <label for="TextArea" class="form-label">Example textarea</label>
                        </div>
                        <div class="d-grid pb-5">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <!-- Footer Section -->
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
                    <img class="testimonial-logo" src="Assets/Img/Brawl-Stars-Logo.png" alt="logo-img">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section -->
</body>
</html>