<?php
    ini_set("display_errors",0);error_reporting(0);
?>
<div class="container">
	<h1>Gestion des questions</h1>
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
					<th>Questions</th>
					<th>Id/Catégories</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($post as $single_question) : ?>
				<tr>
					
					
					
					<td><?php if (isset($single_question['id'])) echo $single_question['id']; ?></td>
					<td><?php if (isset($single_question['question_name'])) echo $single_question['question_name']; ?></td>
					<td><?php if (isset($single_question['category_id'])) echo $single_question['category_id']; ?></td>
					<td><a href="update_question.php?id=<?php echo $single_question['id']; ?>" class="btn btn-success">Editer</a> </td>
					<td><a href="delete_question.php?id=<?php echo $single_question['id']; ?>" class="btn btn-danger">Supprimer</a> </td>
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
					<th>Questions</th>
					<th>Id/Catégories</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($deletedPost as $deletedSingle_question) : ?>
				<tr>
					
					
					<td><?php if (isset($deletedSingle_question['id'])) echo $deletedSingle_question['id']; ?></td>
					<td><?php if (isset($deletedSingle_question['question_name'])) echo $deletedSingle_question['question_name']; ?></td>
					<td><?php if (isset($deletedSingle_question['category_id'])) echo $deletedSingle_question['category_id']; ?></td>
					<td><a href="update_question.php?id=<?php echo $deletedSingle_question['id']; ?>" class="btn btn-success">Editer</a></td>
					<td><a href="publish_question.php?id=<?php echo $deletedSingle_question['id']; ?>" class="btn btn-info">Re-publier</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	</div>
</div>



