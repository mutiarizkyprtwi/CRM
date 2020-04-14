<!-- Page Banner -->
		<div class="container-fluid page-banner about-banner">
			<div class="container">
				<h3>blog</h3>
				<ol class="breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<div class="section-padding"></div>

		<!-- Blog Post List -->
		<div class="container-fluid no-padding blog-post-list">
			<!-- Container -->
			<div class="container">
				<div class="col-md-9 col-sm-8 content-area">
					<?php foreach($kamar as $km) :?>
					<article class="type-post col-md-12 no-padding">
						<div class="row">
							<div class="col-md-4">
								<div class="entry-cover col-md-12 no-padding">
									<a href="blog-post.html" title="Entry Cover"><img src="<?= base_url('images/kamar/resize/'.$km['nama_foto']) ?>" alt="Blog" /></a>
								</div>
							</div>
							<div class="col-md-8 content-box no-padding">
									<div class="category_link">
									</div>
									<h3 class="entry-title"><a href="blog-post.html" title="kategori"><?= $km['kategori']?></a></h3>
									<div class="entry-content">
										<?php
										$sql = "SELECT * FROM fasilitas_kamar inner join m_fasilitas on fasilitas_kamar.id_fasilitas=m_fasilitas.kd_fasilitas where fasilitas_kamar.kd_kategori='$km[kd_kategori]'";
										$fa = $this->db->query($sql)->result_array();
										foreach ($fa as $f) : ?>
											<?= $f['fasilitas']?> |
										<?php endforeach;?>
										<br>
										<h3><b><sup>Rp </sup><?= number_format($km['harga_permalam'],0,',','.'); ?></b></h3>
										<br>
										<a href="blog-post.html" title="Booking">Booking  <i class="fa fa-long-arrow-right"></i></a>
									</div>
									<div class="entry-footer">
										<div class="entry-meta">
											<div class="comments-link"><a href="#"><i class="fa fa-commenting-o"></i>2</a></div>
											<div class="byline"><a href="#" title="Mark Henry">Mark Henry</a></div>
											<div class="posted-on">February 26, 2017</div>
										</div>
									</div>
								</div>
						</div>
					</article>			
  				    <?php endforeach ?>
					<nav class="ow-pagination">
						<ul class="pagination">						
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span class="fa fa-angle-right" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
					
				<!-- Widget Area -->
				<div class="widget-area col-md-3 col-sm-4">
					<aside class="widget widget-search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search . . .">
							<span class="input-group-btn">
								<button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</aside>
					<aside class="widget widget-catagories">
						<h3 class="widget-title">categories</h3>
						<ul>
						<?php foreach($categories as $cate) :?>
							<?php
							$sql3 = "SELECT lantai from m_kamar where m_kamar.kd_kategori='$cate[kd_kategori]'";
							$count = $this->db->query($sql3)->row_array();
							var_dump($count); ?>
							<li><a href="#" title="Kategori"><?= $cate['kategori']?><span><?= $count['lantai'] ?></span></a></li>
						
						<?php endforeach ?>
						</ul>
					</aside>
					<aside class="widget widget-latestposts">
						<h3 class="widget-title">recent posts</h3>
						<div class="latest-content">
							<a href="blog-post.html"><img src="images/blog/latest-post1.jpg" alt="blogpost-thumb1"></a>						
							<h3><a href="blog-post.html" title="These men promptly escaped from a maximum security stock.">These men promptly escaped from a maximum security stock.</a></h3>
							<span>Apr 28, 2017</span>
						</div>
						<div class="latest-content">
							<a href="blog-post.html"><img src="images/blog/latest-post2.jpg" alt="blogpost-thumb2"></a>						
							<h3><a href="blog-post.html" title="These men promptly escaped from a maximum security stock.">These men promptly escaped from a maximum security stock.</a></h3>
							<span>Mar 04, 2017</span>
						</div>
						<div class="latest-content">
							<a href="blog-post.html"><img src="images/blog/latest-post3.jpg" alt="blogpost-thumb3"></a>						
							<h3><a href="blog-post.html" title="These men promptly escaped from a maximum security stock.">These men promptly escaped from a maximum security stock.</a></h3>
							<span>Feb 13, 2017</span>
						</div>
					</aside>					
					<aside class="widget widget-tag">
						<h3 class="widget-title">Populer tags</h3>
						<div class="tags">
							<a href="#" title="Hotel">Hotel</a>
							<a href="#" title="Rooms">Rooms</a>
							<a href="#" title="Guard">Guard</a>
							<a href="#" title="Clean">Clean</a>
							<a href="#" title="Reservation">Reservation</a>
							<a href="#" title="Fly">Fly</a>
							<a href="#" title="Mobile">Mobile</a>
							<a href="#" title="Flat">Flat</a>
							<a href="#" title="Book">Book</a>
						</div>
					</aside>
					<aside class="widget widget_calender">
						<h3 class="widget-title">archives</h3>
						<div id="calendar"></div>
					</aside>
				</div><!-- Widget Area /- -->
			</div><!-- Container -->
			<div class="section-padding"></div>
		</div><!-- Blog Post List -->
		
	</main>