<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/jquery/jquery-ui.css';?>">
    <!-- <link rel="icon" href="<?php echo base_url().'assets/images/icon/icon.png';?>"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/fontawsome/css/all.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/font.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.min.css';?>">

    <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'; ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url().'assets/fontawsome/css/all.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">

    <title><?=$name;?> | Smoke</title>
</head>
<body>


    <div class="container-fluid">
    
    <!-- Starting of Warning -->
    <div class="bg-dark text-white text-center p-2">
        <div style="border: 5px solid white; padding: 5px;">
            <span style="font-size: 20px;" class="">WARNING:This Product Contains Nicotine.Nicotine Is An Addictive Chemical.</span>
        </div>
    </div>
    <!-- Ending of Warning -->

    <!-- Starting of 1st Navbar Design -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?=base_url();?>">
        <img src="<?php echo base_url().'assets/images/icon/icon.png';?>" style="height: 100px; width: 100px;">
      </a>
      <ul class="navbar-nav mr-auto" style="position: relative;">
        <li class="nav-item" style="position: absolute; top: 11px;">
            <a class="nav-link" href="#"><i class="fas fa-user-circle fa-2x"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" style="position: relative;">
        <li class="nav-item" style="position: relative; top: 27px;">
            <a href="#" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>&nbsp;
            <a href="#" target="_blank" style="color: #1AADE3"><i class="fab fa-twitter fa-2x"></i></a>&nbsp;
            <a href="#" target="_blank" style="color: #E0584B"><i class="fas fa-envelope fa-2x"></i></a>
        </li>
      </ul>
    </nav>
    <!-- Ending of 1st Navbar Design -->
    <br><br><br>
    <!-- Starting 2nd Navbar design -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              KITS&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vaporesso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">SMOK</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eleaf</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Voopoo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show all Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY TYPE</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">All In One</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Box Mods</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pod Mod</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vape Pen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Types</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              E-JUICE&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dinner Lady</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Naked 100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VGOD</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Riot Squad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ruthless</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nasty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Juice Roll-Upz</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">IVG E-Liquide</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">KonceptXIX</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY FLAVOUR</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mint / Menthol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ice</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Fruity</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dessert</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Grape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mango</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apple</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Berries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Watermelon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Flavours</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SALT NIC&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pod Salt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">I Love Salts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VGOD</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Riot Squad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dinner Lady</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VLVK Unicorn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Naked 100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pachamama</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ruthless</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vampire Vape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nasty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY FLAVOUR</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mint / Menthol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ice</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Fruity</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dessert</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Grape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mango</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apple</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Berries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Watermelon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Flavours</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PODS&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pod Salt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">I Love Salts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VGOD</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Riot Squad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dinner Lady</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VLVK Unicorn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Naked 100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pachamama</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ruthless</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vampire Vape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nasty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY FLAVOUR</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mint / Menthol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ice</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Fruity</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dessert</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Grape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mango</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apple</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Berries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Watermelon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Flavours</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MYLE&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pod Salt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">I Love Salts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VGOD</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Riot Squad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dinner Lady</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VLVK Unicorn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Naked 100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pachamama</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ruthless</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vampire Vape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nasty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY FLAVOUR</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mint / Menthol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ice</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Fruity</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dessert</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Grape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mango</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apple</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Berries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Watermelon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Flavours</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">JULL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PS ONE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">STIG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">HEXA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ACCESSORIES&nbsp;
              <!-- <i class="fas fa-angle-double-down"></i> -->
              <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row">
                    <div class="col-6">
                        <span class="font-weight-bold">BY BRAND</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pod Salt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">I Love Salts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VGOD</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Riot Squad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dinner Lady</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VLVK Unicorn</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Naked 100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pachamama</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ruthless</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Vampire Vape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Nasty</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Brands</a>
                    </div>
                    <div class="col-6">
                        <span class="font-weight-bold">BY FLAVOUR</span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mint / Menthol</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ice</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Fruity</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dessert</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Grape</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mango</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apple</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Berries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Watermelon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show All Flavours</a>
                    </div>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SALE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DELIVERY INFO</a>
          </li>
          
          <!-- <li class="nav-item">
            <form class="form-inline">
                <input class="form-control mr-sm-2 sr-box" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 sr-box" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
          </li> -->
        </ul>
      </div>
      <i class="fa fa-cart-plus fa-2x"></i>
    </nav>
    <!-- Ending 2nd Navbar design -->

    <!-- Strating of Main Logo & Social Media Links -->
    <!-- <div class="row">
        <div class="col-4"></div>
        <div class="col-md-4 text-center">
            <a href="<?php echo base_url();?>">
                <img src="<?php echo base_url().'assets/images/icon/icon.png';?>" style="height: 150px; width: 150px;">
            </a>
        </div>
        <div class="col-md-4 text-center" style="padding-top: 4.5rem;">
            <a href="#" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" target="_blank" style="color: #1AADE3"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" target="_blank" style="color: #E0584B"><i class="fas fa-envelope fa-2x"></i></a>
        </div>
    </div> -->
    <!-- Ending of Main Logo & Social Media Links -->

    <!-- Starting of Nav account and search buttons -->
    <!-- <div class="row">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
    </div> -->
    <!-- Ending of Nav account and search buttons -->



</div>











<script type="text/javascript">
    $('.carousel').carousel({
      interval: 2000
    })

    $("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });

    $('.nav-item a').on('click', function() {
        $('.nav-item').children('.dropdown-menu').slideUp(150);
        if ($(this).parent().hasClass("show")) {
          $(this).next('.dropdown-menu').slideUp(100);
        } else {
          $(this).next('.dropdown-menu').slideDown(30);
        }
    });

</script>

