<style type="text/css">
  nav#navbar {
    top: 7%;
}
</style>

   <header> 
   	    <div class="ttm-topbar-wrapper clearfix">
           <div class="container">
               <div class="ttm-topbar-content">
                        <div class="topbar-right text-right">
                          <div class="ttm-social-links-wrapper list-inline">
                               <ul class="top-section-menu">
                                   <li><a href="#" class="tooltip-bottom">Star Students</a></li>
                                    <li><a href="#" class=" tooltip-bottom">Board Member</a></li>
                                    <li><a href="#" class=" tooltip-bottom" >Alumni</a></li>
                                    <li><a href="#" class="">Faq</a></li>
                                </ul>
                            </div>
                            	<div class="header-btn">
                                	 <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#"> Helping Hands </a>
                                </div>
                        </div>
                  </div>
             </div>
         </div>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0px 30px";
     document.getElementById("navbar").style.backgroundColor = "#fff";
      document.getElementById("navbar").style.top = "0%";
      document.getElementById("logo").style.top = "0%";
      
  } else {
    document.getElementById("navbar").style.padding = "0px 20px";
    document.getElementById("navbar").style.backgroundColor = "rgb(255 255 255 / 25%)";
    document.getElementById("navbar").style.top = "7%";
       
  }
}
</script>
<nav id="navbar" class="navbar navbar-expand-md cc-nav-bar fixed-top" >
  <a class="navbar-brand cc-logo" href="#" id="logo"><img src="images/iapl/logo.png" width="115"></a>
  <button class="navbar-toggler"  onclick="myfunction(this)" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <div class="bar1"></div>
        <div class="bar2"></div>
            <div class="bar3"></div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Programmes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admission Process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Student words</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Blogs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Extra Mile</a>
      </li>
         
    </ul>
  </div>  
</nav>

 </header>
