<form action="index.php" method="post">
	<div>
		<label for="name">Nom</label>
		<input placeholder="Votre nom" type="text" name="name" id="name">
		<p class="error"><?php if (isset($errors['name'])) echo $errors['name']; ?></p>
	</div>

	<div>
		<label for="surname">Prénom</label>
		<input placeholder="Votre prénom" type="text" name="surname" id="surname">
		<p class="error"><?php if (isset($errors['surname'])) echo $errors['surname']; ?></p>
	</div>

	<div>	
		<label for="age">Age</label>
		<input min="14" max="100" type="number" name="age" id="age">
		<p class="error"><?php if (isset($errors['age'])) echo $errors['age']; ?></p>
	</div>

	<div>
		<label for="role">Rôle</label>
		<select name="role" id="role">
			<option value="role1">Rôle 1</option>
			<option value="role2">Rôle 2</option>
			<option value="role3">Rôle 3</option>
		</select>
	</div>

	<div>
		<button type="submit">Envoyer</button>
	</div>
</form>