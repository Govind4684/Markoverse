<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <title>Hello, world!</title>
  </head>
  <body>
   
    <header class="header-transparent" id="header-main">
        
        <div class="navbar-top navbar-light bg-light">
            <div class="container">
                <div class="navbar-nav align-items-center">
                    <div id="user-location" class="mr-2">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <div class="nav-link" href="#" id="locationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-map-marker-alt"></i>&nbsp;Durgapur
                                </div>
                                <div class="dropdown-menu" style="width: 18rem;" aria-labelledby="locationDropdown">
                                <div class="nav">                            
                                    <div class="input-group">
                                    <input type="text" placeholder="Search City" aria-label="Search" aria-describedby="button-search" class="form-control form-control-underlined pl-3">
                                    <div class="input-group-append ml-0">
                                        <button id="button-search" type="button" class="btn btn-underlined py-0"> 
                                        
                                        <i class="fas fa-search-location"></i>
                                        
                                        </button>
                                    </div>
                                                                
                                    </div>
                                </div>
                                </div>
                            </li>
                        </ul>                    
                    </div>
                    <div class="ml-auto">
                        <div class="nav">                            
                            <div class="input-group">
                            <input type="text" placeholder="Search" aria-label="Search" aria-describedby="button-search" class="form-control form-control-underlined pl-3">
                            <div class="input-group-append ml-0">
                                <button id="button-search" type="button" class="btn btn-underlined py-0"> 
                                
                                <i class='fas fa-search'></i>
                                
                                </button>
                            </div>
                                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-light bg-light">
            <div class="container">

                <button class="navbar-toggler pr-0 collapsed mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand mr-auto" href="#">MARKOVERSE</a>


                <!-- User panel for Device with Max-Width: 992px -->


                <div class="user-panel-collapse">  
                        <ul class="nav ml-auto">                            
                            <li>
                                <div class="dropdown">                        
                                <a class="nav-link" href="#" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                    
                                    <i class="far fa-bell"></i>
                                </a>
                                <div class="dropdown-menu notifciation-menu" style="width: 18rem;" aria-labelledby="dropdownMenu2">
                                                                                                          
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                                                                                                  
                                </div>
                                
                            </li>
                            
                            <li>
                                <a class="nav-link" href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>

                            <li>
                                
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal2">
                                    <i class="far fa-user-circle"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    
                                        <button type="button" class="close ml-auto mr-2 mt-2" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    
                                        <div class="modal-body">
                                            <ul role="tablist" class="nav list-inline" id="tabs">
                                                <li class="list-inline-item"><a data-toggle="tab" href="#loginModalTabLogin2" role="tab" id="loginModalLinkLogin2" aria-controls="loginModalTabLogin2" aria-selected="true" class="nav-link nav-link-lg active">Login</a></li>
                                                <li class="list-inline-item"><a data-toggle="tab" href="#loginModalTabRegister2" role="tab" id="loginModalLinkRegister2" aria-controls="loginModalTabRegister2" aria-selected="false" class="nav-link nav-link-lg">Register</a></li>
                                            </ul>
                                            <hr class="mb-3">
                                            <div class="tab-content">

                                                <!-- Login panel for Device with Max-Width: 992px -->

                                                <div id="loginModalTabLogin2" role="tabpanel" aria-labelledby="loginModalLinkLogin2" class="tab-pane fade px-3 active show">
                                                    <form action="customer-orders.html" method="get">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input id="email2" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                        <div class="col">
                                                            <label for="loginPassword" class="form-label"> Password</label>
                                                        </div>
                                                        <div class="col-auto"><a href="#" class="form-text small">Forgot password?</a></div>
                                                        </div>
                                                        <input name="loginPassword" id="loginPassword2" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                        <input id="loginRemember2" type="checkbox" class="custom-control-input">
                                                        <label for="loginRemember" class="custom-control-label text-muted"> <span class="text-sm">Remember me for 30 days</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-block btn-outline-dark"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                                                    </div>
                                                    </form>
                                                    <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
                                                    <div class="text-center">
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-primary letter-spacing-0" data-original-title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-muted letter-spacing-0" data-original-title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                                                    </div>
                                                </div>

                                                <!-- Registration panel for Device with Max-Width: 992px -->

                                                <div id="loginModalTabRegister2" role="tabpanel" aria-labelledby="loginModalLinkRegister2" class="tab-pane fade px-3">
                                                    <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                                                    <form action="customer-orders.html" method="get">
                                                    <div class="form-group">
                                                        <label for="registerName" class="form-label">Name</label>
                                                        <input id="registerName2" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="registerEmail" class="form-label">Email</label>
                                                        <input id="registerEmail2" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="registerPassword" class="form-label">Password</label>
                                                        <input id="registerPassword2" type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-block btn-outline-dark"><i class="far fa-user mr-2"></i>Register                       </button>
                                                    </div>
                                                    </form>
                                                    <hr data-content="OR CONNECT WITH" class="my-3 hr-text letter-spacing-2">
                                                    <div class="text-center">
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-primary letter-spacing-0" data-original-title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-muted letter-spacing-0" data-original-title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>                                                                                
                                    
                                    </div>
                                </div>
                                </div>
                            </li>
                        </ul>
                </div>            
                
                
                <!-- User panel for Device with Max-Width: 992px  ENDS HERE........... -->


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto mr-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Browse
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            
                        </ul>                       

                </div> 


                <!-- User panel for Device with Min-Width: 993px -->

                
                <div class="user-panel">
                        <ul class="nav ml-auto">                            
                            <li>
                                <div class="dropdown">                        
                                <a class="nav-link" href="#" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                    
                                    <i class="far fa-bell"></i>
                                </a>
                                <div class="dropdown-menu" style="width: 18rem;" aria-labelledby="dropdownMenu2">
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                </div>
                                </div>
                                
                            </li>
                            
                            <li>
                                <a class="nav-link" href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>

                            <li>
                                
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                                    <i class="far fa-user-circle"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    
                                        <button type="button" class="close ml-auto mr-2 mt-2" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    
                                        <div class="modal-body">
                                            <ul role="tablist" class="nav list-inline" id="tabs">
                                                <li class="list-inline-item"><a data-toggle="tab" href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true" class="nav-link nav-link-lg active">Login</a></li>
                                                <li class="list-inline-item"><a data-toggle="tab" href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false" class="nav-link nav-link-lg">Register</a></li>
                                            </ul>
                                            <hr class="mb-3">
                                            <div class="tab-content">

                                                <!-- Login panel for Device with Min-Width: 993px -->

                                                <div id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin" class="tab-pane fade px-3 active show">
                                                    <form action="customer-orders.html" method="get">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input id="email" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                        <div class="col">
                                                            <label for="loginPassword" class="form-label"> Password</label>
                                                        </div>
                                                        <div class="col-auto"><a href="#" class="form-text small">Forgot password?</a></div>
                                                        </div>
                                                        <input name="loginPassword" id="loginPassword" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                        <input id="loginRemember" type="checkbox" class="custom-control-input">
                                                        <label for="loginRemember" class="custom-control-label text-muted"> <span class="text-sm">Remember me for 30 days</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-block btn-outline-dark"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                                                    </div>
                                                    </form>
                                                    <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
                                                    <div class="text-center">
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-primary letter-spacing-0" data-original-title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-muted letter-spacing-0" data-original-title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                                                    </div>
                                                </div>

                                                <!-- Registration panel for Device with Min-Width: 993px -->

                                                <div id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister" class="tab-pane fade px-3">
                                                    <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                                                    <form action="customer-orders.html" method="get">
                                                    <div class="form-group">
                                                        <label for="registerName" class="form-label">Name</label>
                                                        <input id="registerName" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="registerEmail" class="form-label">Email</label>
                                                        <input id="registerEmail" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="registerPassword" class="form-label">Password</label>
                                                        <input id="registerPassword" type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-block btn-outline-dark"><i class="far fa-user mr-2"></i>Register                       </button>
                                                    </div>
                                                    </form>
                                                    <hr data-content="OR CONNECT WITH" class="my-3 hr-text letter-spacing-2">
                                                    <div class="text-center">
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-primary letter-spacing-0" data-original-title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                                                    <button data-toggle="tooltip" title="" class="btn btn btn-outline-muted letter-spacing-0" data-original-title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>                                                                                
                                    
                                    </div>
                                </div>
                                </div>
                            </li>
                        </ul>

                </div>    

                
            </div>
        </nav>
    </header>

    <div class="cart-body">
        <div>
            <!-- Header items (shop name) -->
            <section class="hero py-6">
                <div class="container">
                    <!-- Breadcrumbs -->
                    <ol class="breadcrumb pl-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shopping cart </li>
                    </ol>
                    <!-- Hero Content-->
                    <div class="hero-content hero-heading">
                        <div class="btn-group change-shop dropleft">
                            <button type="button" class="btn bg-transparent ml-auto dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Change shop
                            </button>
                            <div class="dropdown-menu pt-0 pb-0">
                                <ul class="list-group">
                                <li class="dropdown-item">Cras</li>
                                <li class="dropdown-item">Dapibus</li>
                                <li class="dropdown-item">Morbi</li>                                
                                </ul>
                            </div>
                        </div>
                    <h1 class="hero-heading shop-name">Shop name</h1>
                    <div><p class="lead text-muted">You have 3 items in your cart.</p></div>
                    </div>
                </div>
            </section>

            <!-- Cart-items and Chechout panel -->
            <section>
                    <div class="container">
                        <div class="row mb-5"> 
                        <div class="col-lg-8 pr-xl-5">
                            <div class="cart mb-5">
                            <div class="cart-body">
                                <!-- Product-->
                                <div class="cart-item">
                                <div class="row d-flex align-items-center text-left text-md-center">
                                    <div class="col-12 col-md-5"><a href="#" class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
                                    <div class="d-flex align-items-center"><a href="detail-1.html"><img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/product-square-ian-dooley-347968-unsplash.79aa09aa.jpg" alt="..." class="cart-item-img"></a>
                                        <div class="cart-title text-left"><a href="detail-1.html" class="text-dark link-animated"><strong>Skull Tee</strong></a><br><span class="text-muted text-sm">Size: Large</span><br><span class="text-muted text-sm">Colour: Green</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Price per item</div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$65.00</div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                                            <div class="col-5 col-sm-3 col-md-12">
                                            <div class="d-flex align-items-center">
                                                <div class="btn btn-items btn-items-decrease">-</div>
                                                <input type="text" value="4" class="form-control text-center border-md input-items">
                                                <div class="btn btn-items btn-items-increase">+</div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-3"> 
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Total price </div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$260.00</div>
                                        </div>
                                        </div>
                                        <div class="col-2 d-none d-md-block text-center"><a href="#" class="cart-remove text-muted"> 
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Product-->
                                <div class="cart-item">
                                <div class="row d-flex align-items-center text-left text-md-center">
                                    <div class="col-12 col-md-5"><a href="#" class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
                                    <div class="d-flex align-items-center"><a href="detail-1.html"><img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/product-square-kyle-loftus-596319-unsplash.f62698ea.jpg" alt="..." class="cart-item-img"></a>
                                        <div class="cart-title text-left"><a href="detail-1.html" class="text-dark link-animated"><strong>Transparent Blouse</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Price per item</div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                                            <div class="col-5 col-sm-3 col-md-12">
                                            <div class="d-flex align-items-center">
                                                <div class="btn btn-items btn-items-decrease">-</div>
                                                <input type="text" value="3" class="form-control text-center border-md input-items">
                                                <div class="btn btn-items btn-items-increase">+</div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-3"> 
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Total price </div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$165.00</div>
                                        </div>
                                        </div>
                                        <div class="col-2 d-none d-md-block text-center"><a href="#" class="cart-remove text-muted"> 
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- Product-->
                                <div class="cart-item">
                                <div class="row d-flex align-items-center text-left text-md-center">
                                    <div class="col-12 col-md-5"><a href="#" class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
                                    <div class="d-flex align-items-center"><a href="detail-1.html"><img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/product-square-serrah-galos-494312-unsplash.5c3f03cf.jpg" alt="..." class="cart-item-img"></a>
                                        <div class="cart-title text-left"><a href="detail-1.html" class="text-dark link-animated"><strong>White Tee</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Price per item</div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="row align-items-center">
                                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                                            <div class="col-5 col-sm-3 col-md-12">
                                            <div class="d-flex align-items-center">
                                                <div class="btn btn-items btn-items-decrease">-</div>
                                                <input type="text" value="3" class="form-control text-center border-md input-items">
                                                <div class="btn btn-items btn-items-increase">+</div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-3"> 
                                        <div class="row">
                                            <div class="col-6 d-md-none text-muted">Total price </div>
                                            <div class="col-6 col-md-12 text-right text-md-center">$165.00</div>
                                        </div>
                                        </div>
                                        <div class="col-2 d-none d-md-block text-center"><a href="#" class="cart-remove text-muted"> 
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="d-flex justify-content-between flex-column flex-lg-row mb-5 mb-lg-0"><a href="#" class="btn btn-link text-muted  mr-auto"><i class="fa fa-chevron-left"></i> Continue Shopping</a><a href="#" class="btn btn-link text-primary"><i class="fa fa-sync"></i> Update cart</a></div>                            
                            
                        </div>

                            <div class="col-lg-4 checkout-box">
                                <h6>Order Summary</h6>
                                <p class="text-muted text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                                <table class="table">
                                <tbody><tr>
                                    <th class="py-4">Order Subtotal </th>
                                    <td class="py-4 text-right text-muted">$390.00</td>
                                </tr>
                                <tr>
                                    <th class="py-4">Shipping and handling</th>
                                    <td class="py-4 text-right text-muted"> $10.00</td>
                                </tr>
                                <tr>
                                    <th class="py-4">Tax</th>
                                    <td class="py-4 text-right text-muted">$0.00</td>
                                </tr>
                                <tr>
                                    <th class="py-4">Total</th>
                                    <td class="py-4 text-right h3 font-weight-normal">$400.00</td>
                                </tr>
                                </tbody></table><a href="checkout.html" class="btn btn-dark btn-block btn-lg">Proceed to checkout</a>
                            </div>      

                        </div>
                    </div>
            </section>
            
        </div>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            // This will fire when document is ready:
            $(window).resize(function() {
                // This will fire each time the window is resized:
                if($(window).width() >= 993) {
                    // if larger or equal                    
                    $('.user-panel').show();
                    $('.user-panel-collapse').hide();
                   
                } else {
                    // if smaller
                    $('.user-panel').hide();
                    $('.user-panel-collapse').show();
                }
            }).resize(); // This will simulate a resize to trigger the initial run.
        });
    
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>