<!DOCTYPE html>
<html>
<title>Masakmasak.net</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">MasakMasak.net</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Register</a>
      <a href="{{ url('/logout') }}" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="images/rendang.jpg" alt="Hamburger Catering" width="1400" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <font color="white"><h3 class="w3-xxlarge">Masakmasak.net</h3></font>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/piring5.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Masakmasak.net</h1><br>
      <h5 class="w3-center">Indonesia Local Food</h5>
      <p class="w3-large">Indonesia yang terkenal dengan kelas makanan dunia yang mengunggah selera, dari beragam campuran rempah-rempah yang akan memanjakan lidah dari dalam negeri maupun cita rasa luar negeri, kekayaan ini yang menjadi salah satu devisa negara kita dapat melunjak tinggi ke posisi "Must Visited Country". <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Indonesia is famous for the world's food class that uploads taste, from various blend of spices that will spoil the tongue from the country and the taste of abroad, this wealth that becomes one of our country's foreign exchange can rise to the position of "Must Visited Country"</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Indonesia Culinary</h1><br>
      @if(count($reviews) > 0)

        @foreach($reviews as $review)
          <div class="card mb-3">
          <img class="card-img-top" src="uploadedImages/{{ $review->image_name }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $review->food_name }}</h5>
            <p class="card-text">{{ $review->description }}</p>
            <p class="card-text">Located at: {{ $review->location }}</p>
            <p class="card-text"><small class="text-muted">by {{ $review->name }}</small></p>
          </div>
        </div>
        @endforeach
    
      @else
        <h4>Belum ada review!</h4>
      @endif
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <br><br><br><br><br><br>
      <img src="images/piring3.jpg" max-width="250" height="350">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Register Your Food</h1><br>
    <p>Daftarkan makanan khas daerah-mu kedalam menu-menu indonesia, agar kita dapat ikut melestarikan makanan dalam pribumi kita sendiri. (semua yang anda daftarkan akan kita proses terlebih dahulu sebelum di pulikasikan max 24x1 jam).</p>
    <p class="w3-text-blue-grey w3-large"><b>Masakmasak.net Binus University, Kemangisan raya Jakarta Barat. Indonesia.</b></p>
    <p>Contact person/Customer Service 00553123-2323 or email masakmasaknet@gmail.com</p>
    <form action="{{ route('reviews.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="name"></p>      
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Food Name" required name="food_name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Description" required name="description"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Food Culinary Location" required name="location"></p>
      <input type="file" name="image" id="image">
      <p><button class="w3-button w3-light-grey w3-section" type="submit">Submit Food</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Copyright® Masakmasak.net <font color="blue">Binus University</font></p>
</footer>

</body>
</html>

a