<?php
    ini_set("display_errors",0);error_reporting(0);
?>
<div class="container">
	<h1>Gestion des réponses</h1>
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#published" data-toggle="tab">Publiées</a></li>
	  <li><a href="#trash" data-toggle="tab">Corbeille</a></li>
	</ul>
	<div class="tab-content">
	  <div class="tab-pane active" id="published">
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>Numéro</th>
					<th>Réponse 1</th>
					<th>Réponse 2</th>
					<th>Réponse 3</th>
					<th>Réponse 4</th>
					<th>Bonne réponse</th>
					
				</tr>
			</thead>
			<tbody>
			<?php foreach ($post as $single_reponse) : ?>
				<tr>
					
					
					
					<td><?php if (isset($single_reponse['id'])) echo $single_reponse['id']; ?></td>
					<td><?php if (isset($single_reponse['answer1'])) echo $single_reponse['answer1']; ?></td>
					<td><?php if (isset($single_reponse['answer2'])) echo $single_reponse['answer2']; ?></td>
					<td><?php if (isset($single_reponse['answer3'])) echo $single_reponse['answer3']; ?></td>
					<td><?php if (isset($single_reponse['answer4'])) echo $single_reponse['answer4']; ?></td>
					<td><?php if (isset($single_reponse['answer'])) echo $single_reponse['answer']; ?></td>
					<td><a href="update_reponse.php?id=<?php echo $single_reponse['id']; ?>" class="btn btn-success">Editer</a> </td>
					<td><a href="delete_reponse.php?id=<?php echo $single_reponse['id']; ?>" class="btn btn-danger">Supprimer</a> </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	  <div class="tab-pane" id="trash">
		<table class="table table-striped">
			<thead>
				<tr>
					
					
					<th>Numéro</th>
					<th>Réponse 1</th>
					<th>Réponse 2</th>
					<th>Réponse 3</th>
					<th>Réponse 4</th>
					<th>Bonne réponse</th>


				</tr>
			</thead>
			<tbody>
			<?php foreach ($deletedPost as $deletedSingle_reponse) : ?>
				<tr>
					
					
					<td><?php if (isset($deletedSingle_reponse['id'])) echo $deletedSingle_reponse['id']; ?></td>
					<td><?php if (isset($deletedSingle_reponse['answer1'])) echo $deletedSingle_reponse['answer1']; ?></td>
					<td><?php if (isset($deletedSingle_reponse['answer2'])) echo $deletedSingle_reponse['answer2']; ?></td>
					<td><?php if (isset($deletedSingle_reponse['answer3'])) echo $deletedSingle_reponse['answer3']; ?></td>
					<td><?php if (isset($deletedSingle_reponse['answer4'])) echo $deletedSingle_reponse['answer4']; ?></td>
					<td><?php if (isset($deletedSingle_reponse['answer'])) echo $deletedSingle_reponse['answer']; ?></td>
					<td><a href="update_reponse.php?id=<?php echo $deletedSingle_reponse['id']; ?>" class="btn btn-success">Editer</a></td>
					<td><a href="publish_reponse.php?id=<?php echo $deletedSingle_reponse['id']; ?>" class="btn btn-info">Re-publier</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	</div>
</div>



