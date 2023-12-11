@include('admin.head')

    <style>
    
.ino {
  position: relative;
  overflow: hidden;
  width: 320px;
  height: 450px;
  margin: 50px auto;
  background: #2a264f;
  border: 5px solid #1a163f;
  border-radius: 3px;
  box-shadow: 0 0 10px #2a264f;
}

.ino .img1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 60%;
  width: 100%;
  background-size: 310px 440px;
  background-position: left top;
  transition: all 0.5s ease-in-out;
}


.ino .title {
  height: 22%;
  width: 100%;
  font-size: 20px;
  text-align: center;
  font-weight: 700;
  color: #FFFC;
  padding: 15px 10px;
  position: absolute;
  bottom: 0;
  left: 0;
  box-shadow: 0 -80px 28px -25px #000 inset;
}

.ino .text {
  position: absolute;
  bottom: 80px;
  height: 120px;
  padding: 15px 10px;
  text-align: center;
  font-size: 17px;
  color: #fff;
  transform: rotate(90deg);
  transform-origin: 0 100px;
  opacity: 0;
  transition: all 0.5s ease;
}




button:active {
  box-shadow: 0 0 2px darkslategray;
  transform: translateY(2px);
}

.round-6 {
  border-radius: 45%;
}

    </style>
    
	<body class="is-preload">

<?php
/*
   include('session.php');
    include('admin_config.php');
    $cid = $_SESSION['login_user']; 
        
        if($cid!='admin#'){
            echo "<script>window.location.href = 'logout.php';</script>";
        }
    date_default_timezone_set('Asia/Manila');
    $d = date("Y-m-d");
    */
    ?>
		<!-- Wrapper -->
<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>Moviefy</strong> <span>by PHP OOP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="{{url('admin/user')}}">Dashboard</a></li>
						</ul>
						<ul class="actions stacked">
                            <?php 
                            /*
                            if($cid!=' '){
                                echo "<li><a href='logout.php' class='button primary'>Log Out</a></li>";
                            }else{
                                echo "<li><a href='login.php' class='button fit'>Log In</a></li>";
                            }
                            */
                            ?>
							
						</ul>
					</nav>


				<!-- Main -->
 <div id="main" class="alt">
    
<section id="one">

    <div class="inner">
    <header class="major">
            <ul class="actions">
            <li><a href="{{url('admin/user')}}" class="button ">User List</a></li>
            <li><a href="{{url('admin/film')}}" class="button ">Film List</a></li>
            <li><a href="{{url('admin/review')}}" class="button primary">User Reviews</a></li>
            </ul>
    </header>
        <hr>
        
        <div class="custom-search">
            <input class="form-control cutsom-input" type="text" id="Search" onkeyup="myFunction()" placeholder="Search" data-table="table1" value=''> 
        </div>
<div class="table-wrapper">

  <div class="container">   
      
<section>
    
               <?php
                /*
                $model = new Model();
                $table = 'user_review';
                $rows = $model->fetch($table);
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>   
    
<div class="box"> 
  
<div class="title"><?php echo $row['film_title']; ?>
<br><p><?php echo $row['review_date']; ?></p> 
</div>
<h5><?php echo $row['rating']; ?></h5>
<blockquote><?php echo $row['review']; ?></blockquote>
<span><h5>Reviewed by:</h5>
<h6><?php echo $row['username']; ?></h6></span>
                
</div>
            <?php
                  }
              }else{
                echo "no data";
            }
            */
              ?>    

    
    </section>
    

    
</div>      
              
        </div>
                    
    </div>
    </section> 
</div>

    					
</div>
<script>
        function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('box');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>

@include('admin.script')

	</body>
</html>