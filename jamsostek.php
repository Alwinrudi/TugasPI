<!DOCTYPE html>
    <?php     
    if(isset($_POST['enter']))     
    {     
     if(emptyempty($_POST['Bidang']))    
     {    
     echo "Anda belum memilih!";    
     }    
     else echo "Pilihan anda: ".$_POST['Bidang'];    
    }     
    ?>     
<html>

<head>
  <title>Dinas Tenaga Kerja, Transmigrasi dan Kependudukan</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
    <div id="banner">
      <div id="welcome">
        <h2>Dinas Tenaga Kerja, Transmigrasi dan Kependudukan</h2>
      </div><!--close welcome-->          
        <div class="slideshow">
        <ul class="slideshow">
            <li class="show"><img width="1200" height="300" src="images/header.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          </ul> 
      </div><!--close slideshow-->  
    </div><!--close banner--> 
  </header>
  
  <nav>
    <div id="menubar">
        <ul id="nav">
          <li><a href="index.html">BERITA</a></li>
          <li><a href="galeri.html">GALERI</a></li>
          <li class="bidang"><a href="bidang.html">BIDANG</a></li>
          <li><a href="login.html">LOGIN</a></li>
          <li><a href="kontak.html">KONTAK</a></li>
        </ul>
      </div><!--close menubar-->  
    </nav>
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>January 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>December 2012</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div id="content">
        <div class="content_item">
          <h2>Bidang</h2>
        <form action="" method="POST">
		      <select name=Bidang>
		    	 <option selected value="jamsostek">Bidang Pengawasan Norma Kerja & Jamsostek</option>
		    	 <option value="K3">Bidang Pengawasan Norma Kerja & Keselamatan Kerja</option>
		    	 <option value="Lindung">Bidang Pengawasan & Perlindungan Hukumm Tenaga Kerja Dalam Negeri & Luar Negeri</option>
		      </select>
        </form>
			<div class="content_container">
		      <h2>Bidang Pengawasan Norma Kerja & Jamsostek</h2>
          <P>Bidang pengawasan Norma Kerja & Jamsostek adalah bidang yang menangani .... </P>
			</div><!--close content_container--> 
	    </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
  
    <footer>
	  <a href="index.html">Berita</a> | <a href="Galeri.html">Galeri</a> | <a href="bidang.html">Bidang</a> | <a href="login.html">Login</a> | <a href="kontak.html">Kontak</a><br/><br/>
	  <a href="http://fotogrph.com">Images</a> |  with thanks to <a href="http://www.heartinternet.co.uk/web-hosting/">Heart Internet Website Hosting</a>  | website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>	
  
</body>
</html>
