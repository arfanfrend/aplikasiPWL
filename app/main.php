
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Aplikasi Kepegawaian</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	


</head>

<body>

    <input type="checkbox" name="" id="nav-toggle">
	<div class="sidebar">
	
		<div class="sidebar-menu" id="menu">
			<ul>
				<li>
					<a href="javascript:;" onclick="home()" class="active">
						<span class="las la-igloo"></span>
						<span>Home</span>
					</a>
				</li>

				<li>
				<a href="javascript:;" onclick="pegawai()">
						<span class="las la-clipboard-list"></span>
						<span >Data Pegawai</span>
						</a>
				</li>

				<li>
					 <a href=javascript:;" onclick="absen()">
						<span class="las la-clipboard-list"></span>
						<span>Data Absen</span>
					</a>
				</li>

				<li>
					 <a href="javascript:;" onclick="penghasilan()">
						<span class="las la-shopping-bag"></span>
						<span>Penghasilan</span>
					</a>
				</li>


				<li>
					 <a href="javascript:;" onclick="account()">
						<span class="las la-user-circle"></span>
						<span>Accounts</span>
					</a>
				</li>


			</ul>

			
		
		</div>
	</div>
  
<div class="main-content">

	<header>
	<div class="logo">
	<h2>
			<label for="nav-toggle">
			<span class="las la-bars" id="al"></span>
			</label>
		</h2>
          <img src="img/unindra.png" />
          <div>
			  
            <span>
              <h2>Sistem Informasi Kepegawaian</h2>
            </span>
            <small> Falkultas Teknik Dan Ilmu Komputer </small>
          </div>
        </div>
			
			
			<div class="user-wrapper">
				<img src="img/arfan.png"/>
				<div>
					<h4>Arif Arfan</h4>
					<small>201843501017</small>

				</div>
			</div>
	</header>
</div>
<main>
<div class="success"> 
	<div class="eror">
		<div class="success-mess">

<?php

include "home.php";

?>
		</div>
	</div>
</div>



</main>
</div>

</body>
</html>
