<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DiamonLux</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header class="header-container">
        <nav class="nav_header">
            <a href="index.php">
                <img class="img_logo" src="./public/images/logo.png" alt="Logo">
            </a>

            <ul class="nav_links">
                <li>
                    <button id="darkModeToggle" class="btn-dark-toggle">
                        <img class="img_lien" src="./public/images/darkk.png" alt="Dark mode">
                    </button>
                </li>
                <li>
                    <a href="index.php?page=article">
                        <img class="img_lien" src="./public/images/article.png" alt="Articles">
                    </a>
                </li>
                <li>
                    <a href="index.php?page=nouveaute">
                        <img class="img_lien" src="./public/images/nouveaute.png" alt="Nouveautés">
                    </a>
                </li>
                <li>
                    <a href="index.php?page=evenement">
                        <img class="img_lien" src="./public/images/evenement.png" alt="Événements">
                    </a>
                </li>
                <li>
                    <a href="index.php?page=panier">
                        <img class="img_lien" src="./public/images/pix3.png" alt="Panier">
                    </a>
                </li>

                <?php
                if (isset($_SESSION['user_email'])) {
                    $imageSrc = (!empty($_SESSION['user_image']) && str_starts_with($_SESSION['user_image'], 'data:image'))
                        ? $_SESSION['user_image']
                        : './public/images/default-avatar.png';

                    echo '<li><a href="index.php?page=profil"><img class="img_lien" src="' . $imageSrc . '" alt="Profil"></a></li>';
                } else {
                    echo '<li><a href="index.php?page=connexion"><img class="img_lien" src="./public/images/pix4.png" alt="Connexion"></a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <script>
        const toggle = document.getElementById('darkModeToggle');
        const body = document.body;

        if (localStorage.getItem('darkMode') === 'true') {
            body.classList.add('dark-mode');
        }

        toggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
        });
    </script>
</body>

</html>