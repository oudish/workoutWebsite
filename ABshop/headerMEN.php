<div class="content">

<ul class="exo-menu">
		<li><a href=""><i class="fa"></i> Home</a></li>

		<li class="mega-drop-down"><a href=""><i class="fa"></i>Clothing</a>
			<div class="animated fadeIn mega-menu">
				<div class="mega-menu-wrap">
					<div class="row">
						<div class="col-md-6">
							<h4 class="row mega-title">SHOP BY PRODUCT</h4>
							<div class="col-md-6">
								<div class="border-col">
									<nav role="navigation"><!--CKA-03/02/19-dd/mm/yy-->
										<ul class="stander">
											<li><a href="" class="categoryClothingT-shirt">T-shirts</a></li>
											<li><a href="" class="categoryClothingJean">Jeans</a></li>
											<li><a href="" class="categoryClothingShoe">Shoes</a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
										</ul>
									<nav><!--CKA-03/02/19-dd/mm/yy-->
								</div>
							</div>
							<div class="col-md-6">
								<ul class="stander">
									<li><a href=""></a></li>
									<li><a href=""></a></li>
									<li><a href=""></a></li>
									<li><a href=""></a></li>
									<li><a href=""></a></li>
									<li><a href=""></a></li>
								</ul>
							</div>
								
						</div>
						<div class="col-md-6">
							<h4 class="row mega-title">TRENDING</h4>
							<div class="col-md-6">	
								<img class="img-responsive" src="uploads/AB09.png">		
							</div>
							<div class="col-md-6">
								<img class="img-responsive" src="uploads/AB10.png">	
							</div>	
						</div>
					</div>
				</div>	
			</div>
		</li>

		<li class="mega-drop-down"><a href=""><i class="fa"></i>WORKOUT</a>
			<div class="animated fadeIn mega-menu">
				<div class="mega-menu-wrap">
					<div class="row">
						<div class="col-md-6">
							<h4 class="row mega-title">MEALS</h4>
							<div class="col-md-6">
								<div class="border-col">
									<ul class="stander">
										<li><a href="">Pre-workout Meals</a></li>
										<li><a href="">post-workout Meals</a></li>
										<li><a href="">Keep fit Meal</a></li>
										<li><a href="">Everyday Meal Schedule</a></li>
										<li><a href=""></a></li>
										<li><a href=""></a></li>
									</ul>	
								</div>
							</div>
							<div class="col-md-6">
								<img class="img-responsive" src="uploads/ABdiet.jpg">	
							</div>
								
						</div>
						<div class="col-md-6">
							<h4 class="row mega-title">WORKOUT EXERCISES</h4>
							<div class="col-md-6">
								<div class="border-col">
									<ul class="stander">
										<li><a href="">Morning Exercises</a></li>
										<li><a href="">Daily Routine</a></li>
										<li><a href="">Keep fit Exercises</a></li>
										<li><a href=""></a></li>
										<li><a href=""></a></li>
										<li><a href=""></a></li>
									</ul>	
								</div>
							</div>
							<div class="col-md-6">
								
								<video id="videoWorkout" class="img-responsive" width="400" controls style="right: 100% ">
							      <source src="uploads/ABworkout.mp4" type="video/mp4">
							    </video>	
								
						</div>
					</div>
				</div>	
			</div>
		</li>

		<!-- <li><a href="#"><i class="fa"></i> Contact</a>
			<div class="contact">
		
			</div>
		</li> -->

		<li id="logInBtn" style="float:right; display: none"><a href="" ng-click="loginFunc()" data-toggle="modal" data-target="#myModal">LOG IN<i class="fa fa-sign-in"></i></a></li>

		<li id="logOutBtn" style="float:right; display: none"><a href="logout.php">LOG OUT<i class="fa fa-sign-out"></i></a></li>

	</ul>

</div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<div class="card rounded-0">
			
			<div class="card-body">
				<form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
					<div class="form-group">
						<label for="uname1">Username</label>
						<input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
						<div class="invalid-feedback">Oops, you missed this one.</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
						<div class="invalid-feedback">Enter your password too!</div>
					</div>
					<div>
						<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<!-- <span class="custom-control-description small text-dark">Remember me on this computer</span> -->
						</label>
					</div>
					<button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" ng-click="submitForm($event)">Login</button>
				</form>
			</div>
			<!--/card-block-->
		</div>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
	</div>
  </div>
