<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/> -->
  <link rel="icon" href="favicon.ico" />
  <link rel="shortcut icon" href="favicon.ico" />
  <title>Starter Template - Materialize</title>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
  <link href="css/site.css" type="text/css" rel="stylesheet"/>
  <link href="css/animate.css" type="text/css" rel="stylesheet"/>


</head>
<body>

  <!-- NavBar - Header  -->
  <header class="navbar-fixed">
    <nav class="" style="background-color: #142b39fc;">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo" > Logo </a>
        <ul class="right hide-on-med-and-down">
          <li><a  href="#">Home</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Services">Services</a></li>
        <li><a href="#Pricing">Pricing</a></li>
        <li><a href="#Team">Team</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons" >menu</i></a>
    </div>
  </nav>
</header>
  <!-- END  NavBar - Header  -->


<!-- Sidenav - navigation movile -->
  <ul id="nav-mobile" class="sidenav white">
     <li><a id="logo-container2" href="#" class="brand-logo "><i class="material-icons" >close</i>Logo</a></li>
    <li><a  href="#"><i class="material-icons" >home</i>Home</a></li>
    <li><a  href="#About"><i class="material-icons" >work</i>About</a></li>
    <li><a  href="#Services"><i class="material-icons" >settings</i>Services</a></li>
    <li><a  href="#Pricing"><i class="material-icons" >local_atm</i>Pricing</a></li>
    <li><a  href="#Team"><i class="material-icons">group</i>Team</a></li>
    <li><a  href="#Contact"><i class="material-icons" >message</i>Contact</a></li>
  </ul>
<!-- END Sidenav - navigation movile -->



  <!-- Content -->
  <main class="container-fluid">    

    <section class="parallax-container" style="height: 100vh;">
      <div class="section no-pad-bot">
        <div class="container paddingY-6">
          <br><br>
          <div class="flex column center items-center">
              <h1 class="font-title animate__animated animate__fadeInDown">Dream team</h1>
              <h5 class="font-subtitle">We help you conquer the American dream</h5>
              <a href="#" 
              id="start" 
              style="background-color: #43100a; width: 20rem;"
              class="btn-large waves-effect btn-radius marginY-3">Get Started</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax responsive-img img-home"><img src="./img/background_1.png" alt="Unsplashed background img 1"></div>
    </section>

    <!-- section of About -->
    <section id="About" class="section paddingY-3">
      <br><br>
      <div class="container-fluid white z-depth-1 marginX-3 paddingY-3 paddingX-3 ">
        <div class="row">

          <div class="col m12 l4">
            <h3 class="font-title" id="title-about">About Us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ab facilis sunt, ipsum eveniet repudiandae, eum aut quaerat unde quisquam nostrum quam dolore nihil aspernatur!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime eius aliquid laudantium quos facere nisi!</p>
            
          </div>
          
          <div class="col s12 m12 push-l2 l6">
            <div class="carousel">
              <a class="carousel-item" href="#one!"><img class="responsive-img" alt="image 1 carousel" src="https://lorempixel.com/400/400/business/1"></a>
              <a class="carousel-item" href="#two!"><img class="responsive-img" alt="image 2 carousel" src="https://lorempixel.com/400/400/business/2"></a>
              <a class="carousel-item" href="#three!"><img class="responsive-img" alt="image 3 carousel" src="https://lorempixel.com/400/400/business/3"></a>
              <a class="carousel-item" href="#four!"><img class="responsive-img" alt="image 4 carousel" src="https://lorempixel.com/400/400/business/4"></a>
              <a class="carousel-item" href="#five!"><img class="responsive-img" alt="image 5 carousel" src="https://lorempixel.com/400/400/business/5"></a>
            </div>
          </div>


          <div class="col s12" style="margin-top: 1rem;">
            <a href="#" 
            style="background-color: #43100a; width: 100%;"
            class="btn-large waves-effect waves-light btn-radius">Learn more</a>
          </div>

        </div>

      </div>
      <br><br>
    </section>


    <!-- section of Services -->
    <section id="Services" class="section paddingY-3">
      <div class="container-fluid">
        <h3 class="center font-title">Services</h3>
        <p class="center section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, similique?</p>
            
        <div class="container">

          <div class="row marginY-3">

            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>Trending <i class="material-icons">trending_up</i> </h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>

            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>Content <i class="material-icons">edition</i> </h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>

            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>Email Marketing <i class="material-icons">email</i> </h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>

          </div>

        </div>

        <div class="container">

          <div class="row marginY-3">

            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>chart <i class="material-icons">insert_chart</i></h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>

            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>Website Design <i class="material-icons">desktop_mac</i> </h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>
  
            <div class="col s12 l4">
              <div class="card-panel service">
                <h5>Web responsive <i class="material-icons">important_devices</i> </h5>
                <div class="divider"></div>
                <span class="">I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </span>
              </div>
            </div>

          </div>

        </div>

        <div class="row" style="display: flex; justify-content: center;">
           <a href="#Pricing" class="btn-floating btn-large " style="background-color: #43100a;">
             <i class="material-icons Large" style="color: #FFF;">
              arrow_downward
            </i>
          </a> 
        </div>

      </div>

    </section>



    <!-- section of Pricing -->
    <section id="Pricing" class="section paddingY-3 background-price">
      <br><br>
      <div class="container-fluid">
        <h3 class="center font-title">Pricing</h3>
        <p class="center section-subtitle " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, similique?</p>
        
        <div class="flex justify-center flex-grap center paddingY-3 paddingX-3">

          <!-- Basic -->
          <div class="col s12 l4 z-depth-1 pricing marginY-3 marginX-3">
            <div class="section">
              <h5>Basic</h5>
              <span>$19/month</span>
              <br>
              <br>
              <div class="divider"></div>
              <div class="flex items-center justify-center">
                <i class="material-icons">done</i>
                <p>Item 1</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons">done</i>
                <p>Item 2</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >close</i>
                <p>Item 3</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >close</i>
                <p>Item 4</p>
              </div>
            </div>  
            <div class="section">
                <a href="#"
                style="background-color: #43100a; margin: 1rem 0rem;"
                class="btn-small waves-effect btn-radius">Basic</a>
              
            </div>
          </div>
  
          <!-- Plus -->
          <div class="col s12 l4 z-depth-1 pricing marginY-3 marginX-3">
            <div class="section">
              <h5>Plus </h5>
              <span>$39/month</span>
              <br>
              <br>
              <div class="divider"></div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >done</i>
                <p>Item 1</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >done</i>
                <p>Item 2</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons">done</i>
                <p>Item 3</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons">close</i>
                <p>Item 4</p>
              </div>
            </div>
            <div class="section">
                <a href="#" 
                style="background-color: #43100a; margin: 1rem 0rem;"
                class="btn-small waves-effect btn-radius">Plus</a>
              
            </div>
          </div>
  
          <!-- Premium -->
          <div class="col s12 l4 z-depth-1 pricing marginY-3 marginX-3">
            <div class="section">
              <h5>Premium</h5>
              <span>$89/month</span>
              <br>
              <br>
              <div class="divider"></div>
              <div class="flex items-center justify-center">
                <i class="material-icons">done</i>
                <p>Item 1</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons">done</i>
                <p>Item 2</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >done</i>
                <p>Item 3</p>
              </div>
              <div class="flex items-center justify-center">
                <i class="material-icons" >done</i>
                <p>Item 4</p>
              </div>
            </div>
            <div class="section">
                <a href="#" 
                style="background-color: #43100a; margin: 1rem 0rem;"
                class="btn-small waves-effect btn-radius">Premium</a>
              
            </div>
          </div>

        </div>

        
      </div>
      <br><br>
    </section>


    <!-- section of Team -->
    <section id="Team" class="section">
      <br><br>
      <div class="container">
        <h3 class="left-align font-title">Team</h3>
        <p class="left-align section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, similique?</p>


        <div class="row paddingY-3">
          
          <div class="col s12 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./img/people1.jpg" alt="people 1">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Emma Morrison<i class="material-icons right">more_vert</i></span>
                <p>DESIGNER</p>
                <div class="flex flex-row">
                  <a href="#"> <img class="icon-social" src="./img/twitter-brands.svg" alt="Logo twitter"></a>
                  <a href="#"> <img class="icon-social" src="./img/instagram-brands.svg" alt="Logo instagram"></a>
                  <a href="#"> <img class="icon-social" src="./img/facebook-f-brands.svg" alt="Logo facebook"></a>
                  <a href="#"> <img class="icon-social" src="./img/linkedin-brands.svg" alt="Logo linkedin"></a>
                </div>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Emma Morrison<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
              </div>
            </div>
          </div>
  
          <div class="col s12 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./img/people2.jpg" alt="people 2">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Bob Harper<i class="material-icons right">more_vert</i></span>
                <p >CEO</p>
                <div class="flex flex-row">
                  <a href="#"> <img class="icon-social" src="./img/twitter-brands.svg" alt="Logo twitter"></a>
                  <a href="#"> <img class="icon-social" src="./img/instagram-brands.svg" alt="Logo instagram"></a>
                  <a href="#"> <img class="icon-social" src="./img/facebook-f-brands.svg" alt="Logo facebook"></a>
                  <a href="#"> <img class="icon-social" src="./img/linkedin-brands.svg" alt="Logo linkedin"></a>
                </div>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Bob Harper<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
              </div>
            </div>
          </div>
  
          <div class="col s12 l4">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./img/people3.jpg" alt="people 3">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Mark Jansen<i class="material-icons right">more_vert</i></span>
                <p>DEVELOPER</p>
                <div class="flex flex-row">
                  <a href="#"> <img class="icon-social" src="./img/twitter-brands.svg" alt="Logo twitter"></a>
                  <a href="#"> <img class="icon-social" src="./img/instagram-brands.svg" alt="Logo instagram"></a>
                  <a href="#"> <img class="icon-social" src="./img/facebook-f-brands.svg" alt="Logo facebook"></a>
                  <a href="#"> <img class="icon-social" src="./img/linkedin-brands.svg" alt="Logo linkedin"></a>
                </div>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Mark Jansen<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <br><br>
    </section>

    <div class="parallax-container flex justify-center items-center">
      <h3 class="blue-grey-text">We help you conquer the American dream</h3>
      <div class="parallax"><img class="responsive-img" src="./img/background_3.jpg" alt="parallax Team" ></div>
    </div>

    <!-- section of Contact -->
    <section id="Contact" class="section paddingY-3">
      <div class="container">
      <h3 class="left-align font-title">Contact</h3>
      <p class="left-align section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, similique?</p>



        <div class="row paddingY-3">


          <div class="col s12 l6">
            <ul class="collection">
              
              <li class="collection-item avatar">
                <i class="material-icons circle icon-contact">phone</i>
                <span class="title">PHONE</span><br>
                <a class="font-contact" href="#">1-800-1234-567</a>
                <a href="#!" class="secondary-content"><i class="material-icons start-contact">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle icon-contact">email</i>
                <span class="title">E-mail</span><br>
                <a class="font-contact" href="mailto:#">info@support.org</a>
                <a href="#!" class="secondary-content"><i class="material-icons start-contact">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle icon-contact">location_on</i>
                <span class="title">Address</span><br>
                <a class="font-contact" href="https://goo.gl/maps/GzekobxEsxfkrYLb8" target="_blank">Mountain View, California, EE. UU.</a>
                <a href="#!" class="secondary-content"><i class="material-icons start-contact">grade</i></a>
              </li>
            </ul>
          </div>


          <form class="col s12 l6 form-style">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Name</label>
                </div>
              </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                <label for="textarea2">Message</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="!#" class="btn waves-effect btn-contact">Submit
                  <i class="material-icons right">send</i>
                </a>
              </div>
            </div>
          </form>


        </div>

      </div>


    </section>

  </main>
  <!-- END Content -->


  <footer class="page-footer" style="background-color: #142b39fc;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit incidunt, eos dignissimos ad doloribus explicabo repellat alias suscipit eum quam amet quod consequuntur laborum?</p>

        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Copyright &copy;2020 - ELVISLEONARDO18
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

<script>


M.AutoInit();
// sidenav hidden
$(document).ready(function(){
    $('.sidenav').click(()=>{
      
      $('.sidenav').sidenav();
      document.body.style = null;
    })

    $('input#input_text, textarea#textarea2').characterCounter();


  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });


  $('.carousel').carousel();
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 4000);


 
});


</script>

  </body>
</html>
