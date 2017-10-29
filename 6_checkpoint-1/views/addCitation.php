<?php include 'views/includes/header.php'; ?>

<div class="container">

    <!-- Si certains champ du formulaire ne sont pas rempli, on affiche un message d'erreur -->
 <!--        <div class="alert alert-danger">
            <strong>Danger!</strong>
        </div> -->
    <!-- End -->

    <h1 class="text-center">Ajout d'une citation</h1>

    <!-- On spécifie vers quelle url la donnée du formulaire doit etre envoyé -->
    <form action="index.php?section=add" method="post">
    <!-- End -->
    
        <div class="form-group">
            <label for="author">Auteur</label>
            <input name="author" type="text" class="form-control" id="author" placeholder="Auteur">
        </div>
        <div class="form-group">
            <label for="chapter">Chapitre</label>
            <input name="chapter" type="text" class="form-control" id="chapter" placeholder="Chapitre">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" rows="8" cols="80" class="form-control" id="content" placeholder="Contenu"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input name="date" type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input name="image" type="text" class="form-control" id="file" placeholder="url de votre image">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<?php include 'views/includes/footer.php'; ?>
