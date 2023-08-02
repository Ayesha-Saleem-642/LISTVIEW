<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="listview.css">
  <link rel="stylesheet" href="home.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  <meta name="viewport" content="width=device-width, initial-scale=1.5">

  <style>
  body {
    height: 1000px;
  }
  </style>
<?php include 'navbar.php'; ?>
  
  
</head>

 
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="christopher-gower-m_HRfLhgABo-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="joshua-reddekopp-SyYmXSDnJ54-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="arnold-francisca-f77Bh3inUpE-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="line" style="font-family: 'Lato', 'Arial';">    <strong>How can we help you</strong> </div>

  <a class="read1" href="http/readbooks/">Books Reading</a>
  <a class="read2"  href="http/researchbooks/">Research</a>
  <a class="read3"  href="http/technologybooks/">Technology</a>

  <div class="homeimg1">
      
        <img src="homeimg1.jpg" >
</div>

<div class="homeimg2">
      
      <img src="homeimg2.jpg" >
</div>
<div class="homeimg3">
      
        <img src="homeimg3.png" >
</div>
      



  </html>

  <footer>
  <p>© <?php echo date('Y'); ?> Your Company. All rights reserved.</p>
</footer>


<style>
    footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    margin-top: 500px;
  
  }
  
  footer p {
    margin: 0;
  }
  </style>
     
</body>
