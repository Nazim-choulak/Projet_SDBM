<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo @$Titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= PATH ?>/css/style.css">
</head>

<body>


    <header class="container-fluid">
        <nav class="navbar navbar-expand-xl" id="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="nav-links navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/continents">Continents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/pays">Pays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/marques">Marques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/couleurs">Couleurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/tickets">Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/fabricants">Fabricants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/typebiere">Types des bières</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/vendre">Vendre</a>
                        </li>
                    </ul>
                </div>

        </nav>
    </header><br>
  
    <div><img src="<?= PATH ?>/img/77-771147_popular-beer-brand-list-hd-png-download.png" alt=""></div><br>
    <?= $content ?>
    

    <footer>
        <div class="text-center text-muted p-3" style="font-weight: 500; background-color: rgba(0, 0, 0,0.07);">
            <br>
            <p>© 2023 AFPA DWWM 23316</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= PATH ?>/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script>
        <?= @$scriptJS; ?>
        window.addEventListener("load", (event) =>  {
    let recherche = document.getElementById("search")
    recherche.addEventListener("keyup", (event) => {
        let search_value = recherche.value.toLowerCase();
        let tr = document.getElementsByTagName("tr");


        if (search_value === "") {
            for (let i = 1; i < tr.length; i++) {
                tr[i].style.display = "";
            }
            return; 
        }
        for (let i = 1; i < tr.length; i++) {
            let tds = tr[i].getElementsByTagName("td");
            tr[i].style.display = "none";

            for (let j = 0; j < tds.length; j++) {

                let txtValue = tds[j].textContent || tds[j].innerText;
                if (txtValue.toLowerCase().indexOf(search_value) > -1) {
                    tr[i].style.display = "";
                }

            }
        }
    }, false);
})      
    </script>



</body>

</html>