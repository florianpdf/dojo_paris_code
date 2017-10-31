<?php include 'views/includes/header.php'; ?>

    <div class="container">

        <div class="kaamelott-banner jumbotron kaamelott-underline">
            <h1>C'EST PAS FAUX !</h1>
            <p>Les meilleurs citations de la serie-TV Kaamelott</p>
        </div>

        <div class="row">

            <!-- Le bloc ci dessous permet d'afficher les card avec chaque citation, ce dernier devra se répéter pour toutes les citations -->
            <?php foreach ($citations as $citation){ ?>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="img-box">

                            <!-- Ici devra s'afficher l'image -->
                            <img 
                                class="kaamelott-underline" 
                                src="<?php echo $citation['image']; ?>" 
                                alt="<?php echo $citation['author']; ?>"
                            >
                            <!-- End -->

                        </div>
                        <div class="quote">
                            <blockquote>

                                <!-- Ici devra s'afficher le contenu de la citation -->
                                <?php echo $citation['content']; ?>
                                <!-- End -->

                            </blockquote>
                            <p class="source">

                                <!-- Ici devra s'afficher l'auteur de la citation -->
                                <?php echo $citation['author']; ?>
                                <!-- End -->

                                <!-- Ici devra s'afficher le chapitre de la citation -->
                                <?php echo $citation['chapter']; ?>
                                <!-- End -->

                            </p>
                            <span class="hider"></span>
                        </div>
                        <p class="item-actions">

                            <!-- Lien vers la page d'édition, ce dernier doit avoir une indication dans l'url permettant d'identifier quelle citation éditer -->
                            <a href="#" class="btn btn-primary" role="button">Editer</a>

                            <!-- Lien vers la page de suppression, ce dernier doit avoir une indication dans l'url permettant d'identifier quelle citation supprimer -->
                            <a href="index.php?section=delete&id=<?php echo $citation['id']; ?>" class="btn btn-danger" role="button">Supprimer</a>

                        </p>
                    </div>
                </div>
            <!-- End block card citation -->
            <?php } ?>
            
        </div>
    </div>

<?php include 'views/includes/footer.php'; ?>
