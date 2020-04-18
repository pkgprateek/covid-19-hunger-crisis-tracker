<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
<style>

@charset "UTF-8";
/* 
$content-width will be the max width of the content within the navigation bar. 
$breakpoint determines at which width the media query breakpoint will take effect.
*/


nav {
  float: right;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #ffffff;
  color: #463f3f;
  text-decoration: none;
  /*
  The full path of this code is nav ul li a:not(:only-child):after. This means that the code will apply to any a tag in our nav list that is NOT an only child, aka any dropdown. The :after means it comes after the output of the tag. I’ve decided that to specify any nav item as a dropdown, it will be followed by a unicode arrow – ▾ (#9662).
  */
}
nav ul li a:hover {
  background: #f2f2f2;
  color: #fb5958;
}
nav ul li a:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}

.nav-dropdown {
  position: absolute;
  z-index: 1;
  /* Guarantees that the dropdown will display on top of any content. */
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  display: none;
}

.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #fff;
  height: 70px;
  width: 70px;
}

@media only screen and (max-width: 800px) {
  .nav-mobile {
    display: block;
  }

  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav ul li ul li a {
    padding-left: 30px;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #463f3f;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}

@media screen and (min-width: 800px) {
  .nav-list {
    display: block !important;
  }
}
/* 
.navigation – the outer wrapper for the navbar. Specifies the height and color, and will stretch the full width of the viewport.
*/
.navigation {
  height: 70px;
  background: #ffffff;
}

/*
.nav-container – the inner wrapper for the navbar. Defines how far the actual content should stretch.
*/
.nav-container {
  max-width: 1000px;
  margin: 0 auto;
}

.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a,
.brand a:visited {
  color: #463f3f;
  text-decoration: none;
}

</style>

        
    </head>
    <body>
       
    	
<section class="navigation">
	<div class="nav-container">
	  <div class="brand">
		<a >Dashboard</a>
	  </div>
	  <nav>
		<div class="nav-mobile">
		  <a id="nav-toggle" href="#!"><span></span></a>
		</div>
		<ul class="nav-list">
		   <li><a class="nav-link" href="#!">Daily Reports</a>
		   <ul style="margin-top: -15px !important;" class="nav-dropdown">
		  <li> <a class="nav-link" href="https://bit.ly/2Jvbj0f" target="_blank">Distribution Food Report</a></li>
		  <li><a class="nav-link" href="https://bit.ly/2xFERWm" target="_blank">Need Food Report</a></li>
		  <li><a class="nav-link" href="https://bit.ly/3aDHney" target="_blank">Contribute Food Report</a></li>
		  <li><a class="nav-link" href="https://datastudio.google.com/embed/u/0/reporting/1kGaAPJEmTdYru7kFeABR0tt8VSFjmXM7/page/bceKB" target="_blank">Volunteer Status</a></li>
		  </ul>
		  </li>
		  <li><a class="nav-link" href="#!">Download Excel</a>
			<ul style="margin-top: -15px !important;" class="nav-dropdown">
			  <li><a class="nav-link" href="https://docs.google.com/spreadsheets/d/1-BbTly2C2PY3dSgXI0ju9b8K3M6nBHaTSQk1r-CX_K8/edit?usp=sharing" target="_blank">Request Food Excel</a></li>
			  <li><a class="nav-link" href="https://docs.google.com/spreadsheets/d/1F1bU1xZTY9F-SFKerbOteuJg7QUanImxP1nmIm20B3c/edit?usp=sharing" target="_blank">Contribute Food Excel  </a></li>
			  <li><a class="nav-link" href="https://docs.google.com/spreadsheets/d/1Td-L1YRLtbyqhaTTLb0w6DXP3enwyLK_36zssETkTQI/edit?usp=sharing" target="_blank">Food Distribution Excel </a></li>
			</ul>
		  </li>
		 
		  <li> <a class="nav-link" href="{{route('custom-logout')}}">Log Out</a></li>
		</ul>
	  </nav>
	</div>
  </section>
		
      

    <section  id="report">
      <div id="Container"
 style=" padding-bottom:180%; position:relative; display:block; width: 100%">
 <iframe id="ViostreamIframe"
  width="100%" height="100%"
  src="https://datastudio.google.com/embed/reporting/1kGaAPJEmTdYru7kFeABR0tt8VSFjmXM7/page/wUdKB"
  frameborder="0" allowfullscreen=""
  style="position:absolute; top:0; left: 0"></iframe>
</div>
    </section>
      
      <script>
		  (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
	  </script>
    </body>
</html>
