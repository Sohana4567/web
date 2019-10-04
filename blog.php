<?php include "inc/header.php";?>
		<!-- //header -->
		<div class="blog_w3ls py-5" id="blog">

<div class="py-xl-5 py-lg-3">
	<h3 class="title-w3 text-bl text-center font-weight-bold mb-sm-5 mb-4">Our Blog</h3>
	<div class="blog-grids pt-xl-4">
		<div class="container">
			<div class="row">
				<!-- blog grid -->
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
<?php
$query = "SELECT * FROM `tbl_post`";
$result=$db->select($query);
$total_rows=mysqli_num_rows($result);
$total_pages = ceil($total_rows/$per_page);
				 echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>";
					   for ($i=1;$i <= $total_pages;$i++) {
						   echo "<a href='blog.php?page=".$i."'>".$i."</a>";            // //ki ki page nicha seta dekhaba 
					   };
						echo "<a href='blog.php?page=$total_pages'>".'Last Page'."</a></span>"?>

					<?php } else { header("Location:404.php");} ?>       
				</div>
				
	
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
												<a href="single.pho" class="text-bl ml-2">Admin</a>
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
												<a href="single.pho" class="text-bl ml-2">Admin</a>
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
										<a href="single.php">
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