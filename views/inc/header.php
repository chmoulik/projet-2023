<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark" id="maNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_PATH ?>">InformatiDesk</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_PATH ?>/categorie">Categorie</a>
                </li>
                <?php
                if (!isConnect()) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= BASE_PATH ?>/inscription">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/connexion">Connexion</a>
                    </li>
                <?php
                }
                if (isConnect()) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/deconnexion">Deconnexion</a>
                    </li>

                <?php
                }
                if (isAdmin()) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/alluser">Liste utilisateur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/new-produit">produits</a>
                    </li>
                <?php
                }
                ?>
                <?php if (isConnect() && !isAdmin()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_PATH ?>/panier">Panier (<?= $_SESSION['panier']->getProduct_number() ?>)</a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php
            if (isConnect()) {
            ?>
                <p class="text-white m-0">Bonjour <?= ucfirst($_SESSION["user"]["login"]) ?></p>
            <?php
            }
            ?>
        </div>
    </div>
</nav>