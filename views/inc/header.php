<header class="container">
    <a class="logo" href="<?= BASE_PATH ?>"><img src="<?= ASSETS ?>img/logo.PNG" alt=""></a>


    <nav class="navbar" class="sid_nav" id="burger">



        <?php
        if (!isConnect() or (isConnect())) {
        ?>
            <!-- <a href="<?= BASE_PATH ?>">Accueil</a> -->

            <a href="<?= BASE_PATH ?>/articles?id=1">Bureaux</a>
            <a href="<?= BASE_PATH ?>/articles?id=3">Siège ergonomique</a>
            <a href="<?= BASE_PATH ?>/articles?id=4">Accessoires</a>
        <?php
        }


        // if (!isAdmin() and isConnect())
        // {
        ?>
        <!-- <a href="<?= BASE_PATH ?>/profil">Profil</a> -->
        <?php
        // }


        if (isConnect()) {
        ?>
            <a href="<?= BASE_PATH ?>/deconnexion">Deconnexion</a>
        <?php
        }



        if (isAdmin()) {
        ?>
            <a href="<?= BASE_PATH ?>/alluser">Liste utilisateur</a>
            <a href="<?= BASE_PATH ?>/new-produit">produits</a>
        <?php
        }
        ?>

        <?php
        if (isConnect()) {
        ?>
            <p class="">Bonjour <?= ucfirst($_SESSION["user"]["login"]) ?></p>
        <?php
        }
        ?>
    </nav>

    <?php if (!isAdmin()) {
    ?>
        <nav class="icons">
            <a href=""><img src="<?= ASSETS ?>img/vector.svg" alt="">
            </a><a href="<?= BASE_PATH ?>/connexion">
                <img src="<?= ASSETS ?>img/bonhomme.svg" alt="">
            </a><?php
                if (isConnect()) {
                ?><a href="<?= BASE_PATH ?>/panier">
                    <img src="<?= ASSETS ?>img/panier.svg" alt="" id="number_cart" href="<?= BASE_PATH ?>/panier">
                    <span><?= $_SESSION['panier']->getProduct_number() ?></span>
                </a>
            <?php
                }
            ?>

        </nav>
    <?php
    }
    ?>
</header>