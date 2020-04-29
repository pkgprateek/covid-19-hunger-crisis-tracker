<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159663273-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159663273-2');
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
         <meta name="description" content="Food Relief by Gurugram Administration">
  <meta name="keywords" content="Covid 19,Food Relief,Gurugram Administration,Covid-19 Food Support,Covid-19 Support, corona support, corona food">
  <meta name="author" content="Careti">
  <link rel="icon" href="/img/logo.png">
  <link rel="stylesheet" href="/css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <title>Covid-19 Food Relief Gurugram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        
        .title > h1{
            
            font-size:18px !important; 
            font-weight:800 !important; 
            margin-top:-20px; 
            margin-bottom:25px;
        }
        
        .links > p{
            font-size:13px;
            margin-bottom:-22.5px; 
            color:black;
        }
        .footer
        {
            aligmnet:center;
            margin-top:12px;
        }
        .footer-link > p{
           margin-top:-3px;
            color:black; 
            font-size:9px;
        }
        
        .footer1 > p{
            font-weight:600;
            color:red; 
            margin-top:-11px; 
            font-size:8.5px;
             
         }
         
         .blink_text {
 animation-name: blinker;
 animation-duration: 1.5s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;
}

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.5; }
 100% { opacity: 1.0; }
}
.blink_text1 {
 animation-name: blinker1;
 animation-duration: 1.25s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;
}

@keyframes blinker1 {  
 0% { opacity: 1.0; }
 50% { opacity: 0.5; }
 100% { opacity: 1.0; }
}
        
        </style>
        
    </head>
    <body oncontextmenu="return false;">
        
        
        
        <div class="conatiner1 flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <img  src="/img/logo.png" alt="Government of Haryana">
                    
                     <h1  >Covid-19 Food Relief Gurugram</h1>
                </div>
                <p style=" color:red; margin-top:-15px; font-size:15px; font-weight:800; "> Total Meals Served : 
                <span class="blink_text1"> 26.5lac+</span> [ <i class="fa fa-arrow-up"></i> 1.64lac+] </p>
                <p  style=" color:red; margin-top:-15px; font-size:15px; font-weight:800; ">  Total People Served : 
                <span class="blink_text">3,05,049 </span> </p>
                <div class="countup" id="countup1">
                <p style=" color:red; margin-top:-15px; font-size:15px; font-weight:800;">  Serving For :  <span class="timeel days">00</span>
  <span class="timeel timeRefDays">days</span>
  <span class="timeel hours">00</span>
  <span class="timeel timeRefHours">hrs</span>
  <span class="timeel minutes">00</span>
  <span class="timeel timeRefMinutes">mins</span>
  <span class="timeel seconds">00</span>
  <span class="timeel timeRefSeconds">sec</span>
   </p>
             </div>
 
                <div class="links">
                   <!--<p  >Share location and need of the people near you</p>-->
                <a href="#"> Stock In Entry </a> 
                     <!--<p >Support by supplying food materials for needy </p>-->
                    <a href="#">Stock Out Entry</a>
                      <!--<p  >Enter location details while distributing food</p>-->
                    <a href="#">View Stock</a>
                      <!--<p >Enter Food Distribution Details by NGO</p>-->
                     <a href="#">Volunteers List</a>
                    <!--<a href="{{route('powerdashboard')}}">administration</a>-->
                </div> 
                 <div class="footer">
                <div class="footer-link">
                            <p >Developed and Maintained by <br> <a style="text-decoration:none; color:black; font-weight:800;" href="http://rkmfoundation.org/"> Raman Kant Munjal Foundation  </a> </p>
                            <div class="footer1">
                             <p> (A Hero Group Intiative)</p>
                             </div>
                    </div>
            </div>
            </div>
     
     </div>
      
      
      <script>
      window.onload = function() {
  // Month Day, Year Hour:Minute:Second, id-of-element-container
  countUpFromTime("Mar 31, 2020 12:00:00", 'countup1'); // ****** Change this line!
};
function countUpFromTime(countFrom, id) {
  countFrom = new Date(countFrom).getTime();
  var now = new Date(),
      countFrom = new Date(countFrom),
      timeDifference = (now - countFrom);
    
  var secondsInADay = 60 * 60 * 1000 * 24,
      secondsInAHour = 60 * 60 * 1000;
    
  days = Math.floor(timeDifference / (secondsInADay) * 1);
  hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
  mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
  secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

  var idEl = document.getElementById(id);
  idEl.getElementsByClassName('days')[0].innerHTML = days;
  idEl.getElementsByClassName('hours')[0].innerHTML = hours;
  idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
  idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

  clearTimeout(countUpFromTime.interval);
  countUpFromTime.interval = setTimeout(function(){ countUpFromTime(countFrom, id); }, 1000);
}
      </script>
      
      <script>
  document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}

      </script>
    
      
      
       
    </body>
</html>
