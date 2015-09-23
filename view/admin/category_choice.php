<?php
    ini_set("display_errors",0);error_reporting(0);
?>
<div class="container">
	<h1>Gestion des catégories</h1>
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#published" data-toggle="tab">Publiées</a></li>
	  <li><a href="#trash" data-toggle="tab">Corbeille</a></li>
	</ul>
	<div class="tab-content">
	  <div class="tab-pane active" id="published">
		<table class="table table-striped">
			<thead>
				<tr>
					
					
					<th>Nom de la catégorie</th>
					<th></th>
					<th>Identifiants</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($post as $single_category) : ?>
				<tr>
					
					
					
					<td><?php if (isset($single_category['category_name'])) echo $single_category['category_name']; ?></td>
					<td></td>
					<td><?php if (isset($single_category['id'])) echo $single_category['id']; ?></td>
					<td><a href="update_category.php?id=<?php echo $single_category['id']; ?>" class="btn btn-success">Editer</a> </td>
					<td><a href="delete_category.php?id=<?php echo $single_category['id']; ?>" class="btn btn-danger">Supprimer</a> </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	  <div class="tab-pane" id="trash">
		<table class="table table-striped">
			<thead>
				<tr>
					
					
					<th>Nom de la catégorie</th>
					<th></th>
					<th>Identifiants</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($deletedPost as $deletedSingle_category) : ?>
				<tr>
					
					
					<td><?php if (isset($deletedSingle_category['category_name'])) echo $deletedSingle_category['category_name']; ?></td>
					<td></td>
					<td><?php if (isset($deletedSingle_category['id'])) echo $deletedSingle_category['id']; ?></td>
					<td><a href="update_category.php?id=<?php echo $deletedSingle_category['id']; ?>" class="btn btn-success">Editer</a></td>
					<td><a href="publish_category.php?id=<?php echo $deletedSingle_category['id']; ?>" class="btn btn-info">Re-publier</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	</div>
</div>



