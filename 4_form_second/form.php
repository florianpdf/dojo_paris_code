<form method="POST" action="index.php">
	<div>
		<label for="name">Name</label>
		<input required type="text" name="name" id="name" placeholder="Nom">
		<p class="error"><?php if (isset($errors['name'])) echo $errors['name']; ?></p>
	</div>
	
	<div>
		<label for="surname">surname</label>
		<input type="text" name="surname" id="surname" placeholder="prenom">
		<p class="error"><?php if (isset($errors['surname'])) echo $errors['surname']; ?></p>
	</div>

	<div>
		<label for="age">age</label>
		<input type="number" name="age" id="age" placeholder="age">
		<p class="error"><?php if (isset($errors['age'])) echo $errors['age']; ?></p>
	</div>

	<div>
		<label for="select">select</label>
		<select name="role" id="select">
			<option value="role_1">Role 1</option>
			<option value="role_2">Role 2</option>
			<option value="role_3">Role 3</option>
		</select>
		<p class="error"><?php if (isset($errors['role'])) echo $errors['role']; ?></p>
	</div>

	<input type="submit" value="Envoyer">
</form>