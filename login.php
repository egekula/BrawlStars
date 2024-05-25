<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
    <section class="contact-part contact-part-login pt-5 mt-5 px-5 d-flex align-items-center">
        <div class="container-part text-center container bg-black rounded-5 mt-5 align-items-center">
            <div class="message-icon  bg-black mt-5 fs-1 mb-3 rounded-3">
                <img class="navbar-icon-bs" src="Assets\Img\Brawl-Stars-Logo.png" alt="Logo">
            </div>
            <div class="writing-section mb-3 text-white">
                <h1 class="fw-bolder mb-3">Log in</h1>
            </div>
            <div class="row justify-content-center align-item-center d-flex py-2">
                <div class="col-lg-8 col-xxl-6">
                    <form method="post">
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email"
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                            <label for="name" class="form-label">Email</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="password" class="form-control" id="password" name="password">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="mb-3 text-center text-white">
                        <?php if ($is_invalid): ?>
                            <p>Invalid login!</p>
                        <?php endif; ?>
                        </div>
                        <div class="d-grid pb-5">
                            <button  class="btn btn-primary ">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>








