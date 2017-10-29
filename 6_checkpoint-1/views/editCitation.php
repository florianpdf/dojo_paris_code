<?php include 'views/includes/header.php'; ?>

<div class="container">
    <h1 class="text-center">Edition de la citation</h1>

    <!-- On spécifie vers quelle url la donnée du formulaire doit etre envoyé, attention, afin d'éditer une citation, notre requete SQL a besoin de donnaitre son ID -->
    <form action="#" method="post">
    <!-- End -->

        <div class="form-group">
            <label for="author">Auteur</label>

            <!-- On auto-complete les champs -->
            <input name="author" type="text" class="form-control" id="author" value="">
            <!-- End -->

        </div>
        <div class="form-group">
            <label for="chapter">Chapitre</label>

            <!-- On auto-complete les champs -->
            <input name="chapter" type="text" class="form-control" id="chapter" value="">
            <!-- End -->
            
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>

            <!-- On auto-complete les champs -->
            <textarea name="content" rows="8" cols="80" class="form-control" id="content" placeholder="Contenu"></textarea>
            <!-- End -->
            
        </div>
        <div class="form-group">
            <label for="date">Date</label>

            <!-- On auto-complete les champs -->
            <input name="date" type="date" class="form-control" id="date" value="">
            <!-- End -->
            
        </div>
        <div class="form-group">
            <label for="file">Image</label>

            <!-- On auto-complete les champs -->
            <input name="image" type="text" class="form-control" id="file" value="">
            <!-- End -->
            
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<?php include 'views/includes/footer.php'; ?>
