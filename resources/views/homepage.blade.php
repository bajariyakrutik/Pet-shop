<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link href="homepage.css" rel="stylesheet">
    </head>
    <body>
        <!-- SIDEBAR START -->
        <div class="wrapper">
                <nav id="sidebar" class="navbar-dark bg-dark">
                  <ul class="list-unstyled components">
                    
                    <li>
                      <a href="#DogSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dogs</a>
                      <ul class="collapse list-unstyled" id="DogSubmenu">
                       <li>Doberman</li>
                       <li>Pug</li>
                       <li>Husky</li>
                       <li>Rottweiler</li>
                      </ul> 
                    </li>
                    <li>
                            <a href="#DogSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dogs</a>
                            <ul class="collapse list-unstyled" id="DogSubmenu">
                             <li>Doberman</li>
                             <li>Pug</li>
                             <li>Husky</li>
                             <li>Rottweiler</li>
                            </ul> 
                          </li>
                    <li>
                      <a href="#CatSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cats</a>
                      <ul class="collapse list-unstyled" id="CatSubmenu">
                       <li>Asian</li>
                       <li>Persian</li>
                       <li>British Shorthair</li>
                       <li>Maine coon</li>
                      </ul> 
                    </li>
                    <li>
                     <a href="#BirdSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Birds</a>
                     <ul class="collapse list-unstyled" id="BirdSubmenu">
                          <li>Parrot</li>
                          <li>Love birds</li>
                          <li>Cockateils</li>
                          <li>Canneries</li>
                     </ul> 
                   </li>
                  </ul>
                  
                  <ul class="list-unstyled CTAs">
                    <li>
                      <a href="#About" class="article" >About</a>
                    </li>
                    <li>
                      <a href="#contact" class="article">Contact Us</a>
                    </li>
                  </ul>
        </div>
        <!-- SIDEBAR ENDS -->
        <!-- NAVBAR START -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar-example2">
                    
                    <button type="button" id="sidebar-btn" onclick="toggleSidebar()" class="btn btn-info"><span class="navbar-toggler-icon"></span></button>
                <div class="container">
                    <a class="navbar-brand active" href="#"><i class="fas fa-paw"></i> Wagin Tails</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#About">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                        
                        
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      <ul class="navbar-nav mr-auto navbar-right">
                          
                    
                      <li class="nav-item">
                          <a href="#" class="nav-link" ><i class="fas fa-user-plus" style="padding-left: 5px"></i>Sign up</a>
                        </li>
                        <li class="nav-item">
                          <a href="/login" class="nav-link"><i class="fas fa-users" ></i>Log in</a>
                      </li>
                    </ul>
                    </div>
                </div>
                  </nav>
                  <!-- navbar ends -->
                  <div class="container">
                  <div class="jumbotron " >
                        <h1 class="display-4">Waagin Tails</h1>
                        <p class="lead">This is not just a pet shop, but an orphanage for the animals </p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        
                      </div>
                      <!-- JUMBOTRON ENDS -->
                    <div class="row  bd-highlight mb-3 ">
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"></a><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                        
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                            <div class="p-5 col-md-4 col-sm-6 col-xs-12 bd-highlight"><a href="/desc"><img  class="img-thumbnail" src="https://blog.hdwallsource.com/wp-content/uploads/2016/01/corgi-dog-wallpaper-49391-51060-hd-wallpapers.jpg" alt="Loading"></a></div>
                          </div>

                          <div class="jumbotron " data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="About">
                                <h1 class="display-4" >About Us</h1>
                                <p class="lead">We are not just a shop but a community or a group were we take care of the animals and also accept the injured. The people can adopt either any of them and if they do not require we accept them back gladly, but just dont throw them away</p>
                                
                                
                              </div>
                              <div class="jumbotron " data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="contact">
                                    <h1 class="display-4" >Contact Us</h1>
                                    <p class="lead"><h3>John</h3><hr>johncena@gmail.com, 987665544</p>
                                    <p class="lead"><h3>John</h3><hr>johncena@gmail.com, 987665544</p>
                                    
                                  </div>



                        </div>

                    
        

                
















                  <script src="homepage.js"></script>
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                  <script src="https://kit.fontawesome.com/e8e2627bc1.js"></script>
    </body>
</html>