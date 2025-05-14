<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Atelier du Bois</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-links ">
                <ul>
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div>
            <img src="assets/img/menu-hamburger.png" alt="Menu hamburger" class="menu-hamburger">
        </nav>
    </header>


    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu')
        })
    </script>