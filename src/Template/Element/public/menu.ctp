       
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="1034712506855-lt18obb9emd1fdvu1vh8csh86gc7fka6.apps.googleusercontent.com">

	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					
 <div class="g-signin2" data-onsuccess="onSignIn" data-longtitle="true" data-prompt="select_account" <?= isset($_SESSION['id']) ? "style='display:none'" : "" ?>> </div>
					  <div clas="info" <?php if(empty($_SESSION['id'])){ echo "style='display:none'"; } else echo "style= 'margin-bottom:8px; margin-top:8px'"; ?>>
					  <img class="img-circle" height="30px" <?php if(isset($_SESSION['img'])) echo "src='".$_SESSION['img']."'"; ?>>
					  <span><?= isset($_SESSION['name']) ? $_SESSION['name'] : "" ?></span>
					  &nbsp<a href="/logout">Đăng xuất</a>
					</div>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						<li><a href="#" class="you"> </a></li>
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php echo $information->phone?></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $information->email?>"><?php echo $information->email?></a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html">Fast <b>Foody</b><span class="tag">Quá Ngon và Nhanh Chóng </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Liên Hệ </a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="/cart">
								<span class="simpleCart_total"> 0.00 VNĐ </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Xóa</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="/" class="active">Trang chủ</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu chính<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
									<?php 

									foreach ($categories as $categorie) {
										if($categorie->parent == 0)
										{
											echo "<div class='col-sm-2 menugrids'>";
											echo "<h4>".$categorie->name."</h4>";
											echo "<ul class='multi-column-dropdown'>";
											foreach($categories2  as $sub){
												if($sub->parent == $categorie->id)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											}
										    echo "</ul> </div>";

										}

									}


									?>


										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Món ăn theo mùa<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column2">
									<div class="row">
											<div class="col-sm-3 menu-grids">
											<h4>Xuân</h4>
											<ul class="multi-column-dropdown">
												<?php foreach($categories2  as $sub){
												if($sub->parent == 24)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											} ?>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<h4>Hạ</h4>
												<ul class="multi-column-dropdown">
												<?php foreach($categories2  as $sub){
												if($sub->parent == 25)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											} ?>
											</ul>
										</div>																		
										<div class="col-sm-3 menu-grids">
											<h4>Thu</h4>
												<ul class="multi-column-dropdown">
												<?php foreach($categories2  as $sub){
												if($sub->parent == 26)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											} ?>
											</ul>
										</div>
											<div class="col-sm-3 menu-grids">
											<h4>Đông</h4>
											<ul class="multi-column-dropdown">
												<?php foreach($categories2  as $sub){
												if($sub->parent == 27)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											} ?>
											</ul>
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Khuyến mãi<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
									<div class="row">
										<div class="col-sm-4 menu-grids">
											<ul class="multi-column-dropdown">
							<?php $temp = -1;
										foreach ($id_discounts as $id) {
											foreach($categories2  as $sub){
												if($sub->parent == $id->category_id && $sub->parent != $temp)
													echo "<li><a class='list' href='/categories/".$sub->id."'>".$sub->name."</a></li>";
												
											} 
											$temp = $id->category_id;
										}?>
											</ul>
										</div>
										<div class="col-sm-8 menu-grids">
											<a href="products.html">
												<div class="new-add">
													<h5>Giảm 30%<br> Một ngày duy nhất</h5>
												</div>	
											</a>
										</div>	
										<div class="clearfix"> </div>
									</div>	
								</ul>
							</li>				
					<!-- 			<li class="dropdown grid">
									<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Món đặc biệt<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column multi-column4">
										<div class="row">
											<div class="col-sm-4 menu-grids menulist1">
												<h4>Cà phê sữa</h4>
												<ul class="multi-column-dropdown ">
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa </a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
												</ul>
												<ul class="multi-column-dropdown">
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><h6><a class="list" href="products.html">Cà phê sữa</a></h6></li>
												</ul>
											</div>																		
											<div class="col-sm-2 menu-grids">
												<h4>Cà phê sữa</h4>
												<ul class="multi-column-dropdown">
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><h6><a class="list" href="products.html">Cà phê sữa</a></h6></li>
												</ul>
											</div>
											<div class="col-sm-2 menu-grids">
													<h4>Cà phê sữa</h4>
												<ul class="multi-column-dropdown">
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><a class="list" href="products.html">Cà phê sữa</a></li>
													<li><h6><a class="list" href="products.html">Cà phê sữa</a></h6></li>
												</ul>
											</div>
											<div class="clearfix"> </div>
										</div>
									</ul>
								</li> -->
							<!-- <li><a href="codes.html">Special Offers</a></li> -->
							<li></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		 window.onbeforeunload = function(e){
        gapi.auth2.getAuthInstance().signOut();
        };
        // $('.signup').hide();

        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var a = profile.getEmail();
            var b = profile.getImageUrl();
            var c = profile.getName();
            var id_token = googleUser.getAuthResponse().id_token;


            $.post("/googlelogin", {
                    name: a,
                    img: b,
                    ggname: c,
                    token: id_token
                },
                function(data, status) {
                    if (status == 'success') {
                 		   window.location.href = "/";


                    }
                });
        }
	</script>