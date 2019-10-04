<?php include "inc/header.php";?>
		<!-- //header -->
<?php
     if(!isset($_GET['id'])  || $_GET['id']==NULL)  {
		 header('Location:404.php');
	 }else{
		 id=$_GET['id'];
	 }
?>	 
		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->
	

	<!-- single -->
	<div class="blog-w3l py-5">
	<?php 
	$query="SELECT * FROM `tbl_post` where id=$id";
	$post=$db->select($query);
	if($post){
		while($result=$post->fetch_assoc()){
?>
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Blog Details</h3>
			<div class="row blog-content pt-lg-3">
				<!-- left side -->
				<?php
				  $per_page=2;  //How much pages i need
				  if(isset($_GET["page"])){
					  $pages=$_GET["page"];
				  } else {
					  $page=1;
				  }
				  $start_form=($page-1)*$per_page;
				  ?>
				<?php
				   $query= "select * from  tbl_post limit $start_form,$per_page";
				   $post=$db->select($query);
				   if($post){
					   while($result=$post->fetch_assoc()){

				 ?>
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-body border border-top-0">
							<a href="single.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a>
							<h4><?php echo $result['date']; ?>,By <a href="#"><?php echo $result['author']; ?></a></h4>
							<img class="card-img-bottom" src="admin/upload/<?php echo $result['image'];?>" alt="Card image cap">
							<?php echo $fm->textShorten($result['body'],100); ?>
							<a href="single.php?id=<?php echo $result['id'];?>">Read More</a>
						</div>
					</div>
					   <?php } ?>

					<?php } else { header("Location:404.php");} ?>     
					<a href="single.php" class="single-text text-bl font-weight-light my-3">Nemo enim ipsam voluptatem quia
						voluptas
						sit aspernatur aut odit aut fugit 2019</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
						dolore magna
						aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo
						consequat
						duis
						aute irudre dolor in elit sed uta labore dolore reprehender</p>
					<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
						labore dolore reprehender</p>
					<p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi utaliquip
						exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore
						reprehender.
					</p>
					<a href="single.php" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Two Column Text Sample</a>
					<div class="row">
						<div class="col-md-6">
							<p>Morbi eget dui elit in lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
								convallis maximus neque
								vel cursus.</p>
						</div>
						<div class="col-md-6">
							<p>In lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
								convallis maximus neque
								vel cursus.</p>
						</div>
					</div>
					<a href="single.php" class="single-text text-bl font-weight-light mt-4">Nemo enim ipsam voluptatem quia
						voluptas sit aspernatur aut odit aut fugit 2019</a>
					<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
						labore dolore reprehender</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
						dolore magna
						aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo
						consequat
						duis
						aute irudre dolor in elit sed uta labore dolore reprehender</p>
					<div class="comment-top mt-5">
						<h4>Comments</h4>
						<div class="media">
							<img src="images/te1.jpg" alt="" class="img-fluid" />
							<div class="media-body pt-xl-2 pl-3">
								<h5 class="mb-2">Joseph Goh</h5>
								<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
									cursus eros.
									Cras a ornare elit.</p>

								<div class="media my-5">
									<a class="d-flex pr-3" href="#">
										<img src="images/te2.jpg" alt="" class="img-fluid" />
									</a>
									<div class="media-body pt-xl-2">
										<h5 class="mb-2">Richard Spark</h5>
										<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="media">
							<img src="images/te3.jpg" alt="" class="img-fluid" />
							<div class="media-body  pt-xl-2 pl-3">
								<h5 class="mb-2">Goh James</h5>
								<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
									cursus eros.
									Cras a ornare elit.</p>
							</div>
						</div>
						<div class="media mt-5">
							<img src="images/te1.jpg" alt="" class="img-fluid" />
							<div class="media-body  pt-xl-2 pl-3">
								<h5 class="mb-2">Goh James</h5>
								<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
									cursus eros.
									Cras a ornare elit.</p>
							</div>
						</div>
					</div>
					<div class="comment-top mt-5">
						<h4>Leave a Comment</h4>
						<div class="comment-bottom agileinfo_mail_grid_right">
							<form action="#" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="Name" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
								</div>
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
				<!-- //left side -->
				<!-- right side -->
				<div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
					<div class="event-right1">
						<div class="search1">
							<h3 class="blog-title text-bl mb-4">Search</h3>
							<form class="form-inline" action="#" method="post">
								<input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here.." name="Search" required>
								<button class="btn text-wh rounded-0 mt-3" type="submit">Search</button>
							</form>
						</div>
						<div class="categories my-5">
							<h3 class="blog-title text-bl mb-4">Categories</h3>
							<ul class="list-unstyled">
								<li class="border-bottom mb-3 pb-2">
									<a href="#" class="text-cati">Grooming </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="#" class="text-cati">Pets Hotel </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="#" class="text-cati">Doggie Camp </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="#" class="text-cati">Dog Training </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li class="border-bottom mb-3 pb-2">
									<a href="#" class="text-cati">Veterinary Care </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
								<li>
									<a href="#" class="text-cati">Adoption </a>
									<span class="fa fa-caret-right float-right text-right"></span>
								</li>
							</ul>
						</div>
						<div class="posts">
							<h3 class="blog-title text-bl mb-4">Our Events</h3>
							<div class="posts-grids">
								<div class="row posts-grid">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.php">
											<img src="images/g2.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.php" class="text-bl">Sed ut perspiciatis unde omni</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>15/05/18</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.php" class="text-bl ml-2">Admin</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid my-4">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.php">
											<img src="images/g3.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.php" class="text-bl">Sed ut perspiciatis unde omni</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>23/05/18</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.php" class="text-bl ml-2">Admin</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.php">
											<img src="images/g6.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.php" class="text-bl">Sed ut perspiciatis unde omni</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>13/06/18</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.php" class="text-bl ml-2">Admin</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row posts-grid mt-4">
									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
										<a href="single.html">
											<img src="images/g9.jpg" alt=" " class="img-fluid" />
										</a>
									</div>
									<div class="col-lg-8 col-md-7 col-8 posts-grid-right">
										<h4>
											<a href="single.php" class="text-bl">Sed ut perspiciatis unde omni</a>
										</h4>
										<ul class="wthree_blog_events_list mt-2">
											<li class="mr-2 text-bl">
												<span class="fa fa-calendar mr-2" aria-hidden="true"></span>13/06/18</li>
											<li>
												<span class="fa fa-user" aria-hidden="true"></span>
												<a href="single.php" class="text-bl ml-2">Admin</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="category-story my-5">
							<h3 class="blog-title text-bl mb-4">More Stories</h3>
							<ul class="list-unstyled">
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>
								<li class="border-bottom mb-3 pb-3">
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>
								<li>
									<span class="fa fa-caret-right mr-2"></span>
									<a href="#" class="text-cati-2">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
								</li>

							</ul>
						</div>
						<div class="tags">
							<h3 class="blog-title text-bl">Recent Tags</h3>
							<ul class="mt-4">
								<li>
									<a href="single.php" class="text-bl border">Dogs</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Cats</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Birds</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Small Pets</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Aquariums</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Reptiles</a>
								</li>
								<li>
									<a href="single.php" class="text-bl border">Horses</a>
								</li>
								
								
							</ul>
						</div>
					</div>
				</div>
				<!-- //right side -->
			</div>
		</div>
	</div>
	<!-- //blog -->
<!-- footer -->
<?php include "inc/footer.php";?>