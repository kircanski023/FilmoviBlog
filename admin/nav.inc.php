 
 
 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapsed">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          
        <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Moj nalog <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts.php">
              <span data-feather="file"></span>
              Svi postovi
                </a>
              </li>

          <li class="nav-item">
                <a class="nav-link" href="../blog.php">
                  <span data-feather="file"></span>
                  <i class="fas fa-newspaper"></i> Nazad na blog
                </a>
				</li>
        <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <span data-feather="file"></span>
                  <i class="fas fa-home"></i> Nazad na početnu stranicu
                </a>
				</li>

              <?php 
			  if(isset($_SESSION['author_role'])){
				  if($_SESSION['author_role']=="admin"){
					  ?>
					  
					  <!--ONLY ADMIN LINKS HERE-->
				<li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="file"></span>
                  Sve kategorije(Admin)
                </a>
				</li>
                <li class="nav-item">
                <a class="nav-link" href="page.php">
                  <span data-feather="file"></span>
                  Sve stranice(Admin)
                </a>
				</li>	
					  <?php
				  }
			  }
			  ?>
            </ul>        
          </div>
        </nav>
