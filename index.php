<html> 
  <meta httlp-equiv="Content-Type"  content="text/html; charset=utf-8" /> 
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-func.js"></script>

  <head> 
    <title> Hnam</title>
    <body> 
      <!-- Start here --> 
  
   
      <div id="shell">
          <div id="header">
                <h1 id="logo"><a href="#">Hnam</a></h1>
      <div id="navigation">
      <ul>
        <li><a class="active" href="#">HOME</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">IN THEATERS</a></li>
        <li><a href="#">COMING SOON</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">ADVERTISE</a></li>
        <br> 

      </ul>
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
</div> 

<br> 
<body> 
  
                
 <br> 
</body> 
</html> 

                





<?php
    $servername ="localhost"; 
    $username="root"; 
    $password=""; 
    $dbname ="film_test"; 


    $conn = new mysqli($servername,$username,$password,$dbname); 


    if ($conn->connect_error){ 
      die("Connection failed:" .$con->connect_error); 
    }

    $sql ="SELECT tenFilm,quocGia,namSanXuat,luotXem,avt FROM film  ORDER BY ''  ";     
    $result =$conn->query($sql); 
      

      
                    
              
               
?>
<div id="search_bar">


<div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>LATEST TRAILERS</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <?php
            if($result->num_rows >0){ 
              while($row = $result->fetch_assoc()){ 
        ?> 
          <div class="movie">
            <div class="movie-image"> 
                <span class="play"><?=$row["tenFilm"]?></span>
                  <a href="#"><img src="<?=$row["avt"]?>" alt="" /></a> 
            </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
        <?php
            }         
         }
         ?>
        
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          <h2>TOP RATED</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">TRANSFORMERS</span></span> <a href="#"><img src="/css/images/movie7.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        
        <div class="cl">&nbsp;</div>
      </div>
      

      </div> 
      






</html> 


