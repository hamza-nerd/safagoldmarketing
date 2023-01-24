<div class="loader">
  <div class="page-lines">
    <div class="container">
      <div class="col-line col-xs-4">
        <div class="line"></div>
      </div>
      <div class="col-line col-xs-4">
        <div class="line"></div>
      </div>
      <div class="col-line col-xs-4">
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </div>
  <div class="loader-brand"> 
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
</div>

<header id="top" class="header-home">
  <div class="brand-panel">
    <a href="#top" class="brand js-target-scroll">
     <img src="img/logo-gold.png" style="" width="200px" height="100px">
    </a>
    <div class="brand-name"></div>
    <div class="slide-number">
      <span class="current-number text-primary">0<span class="count">1</span></span>
      <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
    </div>
  </div>
  <div class="header-phone"> <a style="text-decoration: none;color: white" href='tel:+923041112219'>+92 304 1112219</a></div>
  <div class="vertical-panel"></div>
  <div class="vertical-panel-content">
    <div class="vertical-panel-info">
        <div class="vertical-panel-title">Architecture buro</div>
        <div class="line"></div>
     </div>
    <ul class="social-list">
      <li><a href="https://www.facebook.com/safagoldmarketing" class="fa fa-instagram"></a></li>
      <li><a href="https://www.instagram.com/safagoldmarketingofficial/" class="fa fa-facebook"></a></li>
      <li><a href="http://linkedin.com/company/safa-gold-marketing" class="fa fa-linkedin"></a></li>
      <li><a href="https://twitter.com/safaGoldMarket" class="fa fa-twitter"></a></li>
     </ul>  
  </div> 

  <!-- Navigation Desctop -->

  <nav class="navbar-desctop visible-md visible-lg">
    <div  class="container"  style="display: flex;
            justify-content: right;
            align-items: center;
            padding-bottom: 10px;"  >
      <a href="#top" class="brand js-target-scroll">
        <img src="img/logo-gold.png" style="" width="100px">
      </a>
      <div id="header" >
        <ul class="navbar-desctop-menu">
          <li class= "butn">
            <a href="index.php">Home</a>
          </li>
          <li class= "butn">
            <a href="about.php">About us</a>
          </li>
          <li class= "butn">
            <a href="projects.php">Projects</a>
          </li>
          <li class= "butn">
            <a href="contacts.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navigation Mobile -->

  <nav class="navbar-mobile">
    <a href="#top" class="brand js-target-scroll">
      <img src="img/logo-gold.png" style="" width="100px" height="50px">
    </a>

    <!-- Navbar Collapse -->

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile" style="vertical-align: middle;padding: 15px">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-mobile" style="vertical-align: middle"> 
      <ul class="navbar-nav-mobile">
        <li class="active">
          <a href="index.php">Home <!-- <i class="fa fa-angle-down"> --></i></a>
        </li>
        <li>
          <a href="about.php">About us</a>
        </li>
        <li>
          <a href="projects.php">Projects <!-- <i class="fa fa-angle-down"> --></i></a>
        </li>  
        <li>
          <a href="contacts.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav> 
</header>
<!-- <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("header");
var btns = header.getElementsByClassName("butn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script> -->