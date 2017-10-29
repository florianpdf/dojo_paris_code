<?php include 'views/includes/header.php'; ?>

    <div class="container">

        <div class="kaamelott-banner jumbotron kaamelott-underline">
            <h1>C'EST PAS FAUX !</h1>
            <p>Les meilleurs citations de la serie-TV Kaamelott</p>
        </div>

        <div class="row">

            <!-- Le bloc ci dessous permet d'afficher les card avec chaque citation, ce dernier devra se répéter pour toutes les citations -->
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="img-box">

                            <!-- Ici devra s'afficher l'image -->
                            <img class="kaamelott-underline" src="" alt="">
                            <!-- End -->

                        </div>
                        <div class="quote">
                            <blockquote>

                                <!-- Ici devra s'afficher le contenu de la citation -->

                                <!-- End -->

                            </blockquote>
                            <p class="source">

                                <!-- Ici devra s'afficher l'auteur de la citation -->

                                <!-- End -->

                                <!-- Ici devra s'afficher le chapitre de la citation -->

                                <!-- End -->

                            </p>
                            <span class="hider"></span>
                        </div>
                        <p class="item-actions">

                            <!-- Lien vers la page d'édition, ce dernier doit avoir une indication dans l'url permettant d'identifier quelle citation éditer -->
                            <a href="#" class="btn btn-primary" role="button">Editer</a>

                            <!-- Lien vers la page de suppression, ce dernier doit avoir une indication dans l'url permettant d'identifier quelle citation supprimer -->
                            <a href="#" class="btn btn-danger" role="button">Supprimer</a>

                        </p>
                    </div>
                </div>
            <!-- End block card citation -->

            
        </div>
    </div>

<?php include 'views/includes/footer.php'; ?>
