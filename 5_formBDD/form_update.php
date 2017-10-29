<form action="form_update_traitement.php?id=<?php echo $donnees['id'] ?>" method="POST">
    <fieldset>
        <legend>Formulaire ❣ (>'-')> <( '-'<) ^( ' - ')^ <( '-'<) (>'-')> ❣</legend>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="name" value="<?php echo $donnees['nom']; ?>" >
            <p class="errors">
                <?php if(isset($errors['name'])) echo $errors['name']; ?>
            </p>
        </div>
        <div>
            <label for="numero">Numéro de téléphone :</label>
            <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="number" id="numero" value="<?php echo $donnees['numero']; ?>">
            <p class="errors">
                <?php if(isset($errors['number'])) echo $errors['number']; ?>
            </p>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="email" value="<?php echo $donnees['courriel']; ?>">
            <p class="errors">
                <?php if(isset($errors['email'])) echo $errors['email']; ?>
            </p>
        </div>
        <div>
            <label for="select">Sujet :</label>
            <select id="selection" name="select">
                <option value="La domination des chats dans le monde">La domination des chats dans le monde</option>
                <option value="Ben autre?">Ben autre?</option>
            </select>
            <p class="errors">
                <?php if (isset($errors['select'])) echo $errors['select']; ?>
            </p>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message"><?php echo $donnees['message']; ?></textarea>
            <p class="errors">
                <?php if(isset($errors['message'])) echo $errors['message']; ?>
            </p>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </fieldset>
</form>