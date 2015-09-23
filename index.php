<?php
session_start();
ini_set('display_errors', 1);
?>
<?php 
include 'header.php';
require 'config.php';
require('model/Database.class.php');
require('model/Questions.class.php');
require('model/Reponses.class.php');
require('model/Category.class.php');
?>
		
		<div class="container">

		<div class="session">
			<p class="text-center">
				Bonjour <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>
			</p>
		</div>


			<div class="row">
				
				<div class="col-xs-10 col-sm-5 col-lg-5 center">
					<div class="intro">
						
						<?php if(empty($_SESSION['name'])){?>
						<p class="text-center">
							Veuillez entrer votre nom
						</p>
						<form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
							<div class="form-group">
								<input type="text" id='name' name='name' class="form-control" placeholder="Votre nom ici"/>
								<span class="help-block"></span>
							</div>
							<div class="form-group">
							    <select class="form-control" name="category" id="category">

							    	<option value="">Choisissez une catégorie</option>

									<?php 

										$categories = new Category();

										$posts = $categories->queryCategory('1');

									?>

							    	<?php 

							    		foreach($posts as $key => $single_category) 
										{
										$post[$key]['id'] = $posts[$key]['id'];
										$post[$key]['category_name'] = $posts[$key]['category_name'];
										}

							    	 ?>
							    	
							    	<?php foreach($post as $single_category) : ?>

										
                                  		<option value="<?php if (isset($single_category['id'])) echo ($single_category['id']); ?>"><?php if (isset($single_category['category_name'])) echo ($single_category['category_name']); ?></option>
                                  		
							    	<?php endforeach; ?>


							    ?>
							                                   
                                </select>
                                <span class="help-block"></span>
							</div>

							<br>
							<button class="btn btn-success btn-block" type="submit">
								Commencez!!!
							</button>
						</form>

						<?php }else{?>
							<p class="text-center">
								Choisissez une catégorie
							</p>
						    <form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
                            <div class="form-group">
                                <select class="form-control" name="category" id="category">
                                   
									<option value="">Choisissez une catégorie</option>

									<?php 

									$categories2 = new Category();

									$posts2 = $categories2->queryCategory('1');

									?>

									<?php 

							    		foreach($posts2 as $key => $single_category2) 
										{
										$post2[$key]['id'] = $posts2[$key]['id'];
										$post2[$key]['category_name'] = $posts2[$key]['category_name'];
										}

							    	 ?>

							    	<?php foreach($post2 as $single_category2) : ?>

										
                                  		<option value="<?php if (isset($single_category2['id'])) echo ($single_category2['id']); ?>"><?php if (isset($single_category2['category_name'])) echo ($single_category2['category_name']); ?></option>
                                  		

							    	<?php endforeach; ?>

								?>
							    	                              
                                </select>
                                <span class="help-block"></span>
                            </div>

                            <br>
                            <button class="btn btn-success btn-block" type="submit">
                                Commencez!!!
                            </button>
                        </form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'footer.php';
?>
	
	