



<!DOCTYPE html>
<html lang="en" dir="">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>HaGroup - Admin Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/animate.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/echart.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/date-picker.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/scss/responsive.css">
 
  </head>
  <body class=""> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader"> 
        <div class="loader4"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      


<!-- Page Header Start-->
<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative"> 
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div><i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"> </div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">  
      <div class="logo-wrapper"> <a href="/index"><img class="img-fluid for-light" src="assets/images/logo/logo_dark.png" alt="logo-light"><img class="img-fluid for-dark" src="assets/images/logo/logo.png" alt="logo-dark"></a></div>
      <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
    </div>
    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
        <div class="d-flex align-items-center gap-2 ">
          <h4 class="f-w-600">Welcome Alex</h4><img class="mt-0" src="assets/images/hand.gif" alt="hand-gif">
        </div>
      </div>
      <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Here’s what’s happening with your store today. </span></div>
    </div>
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus"> 
        <li class="d-md-block d-none"> 
          <div class="form search-form mb-0">
            <div class="input-group"><span class="input-icon">
                <svg>
                  <use href="assets/svg/icon-sprite.svg#search-header"></use>
                </svg>
                <input class="w-100" type="search" placeholder="Search"></span></div>
          </div>
        </li>
        <li class="d-md-none d-block"> 
          <div class="form search-form mb-0">
            <div class="input-group"> <span class="input-show"> 
                <svg id="searchIcon">
                  <use href="assets/svg/icon-sprite.svg#search-header"></use>
                </svg>
                <div id="searchInput">
                  <input type="search" placeholder="Search">
                </div></span></div>
          </div>
        </li>
        <li class="onhover-dropdown">
          <svg>
            <use href="assets/svg/icon-sprite.svg#star"></use>
          </svg>
          <div class="onhover-show-div bookmark-flip">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="front">
                  <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                  <ul class="bookmark-dropdown">
                    <li>
                      <div class="row">
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                          </div>
                        </div>
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                          </div>
                        </div>
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                  </ul>
                </div>
                <div class="back">
                  <ul>
                    <li>
                      <div class="bookmark-dropdown flip-back-content">
                        <input type="text" placeholder="search...">
                      </div>
                    </li>
                    <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li> 
          <div class="mode"><i class="moon" data-feather="moon"> </i></div>
        </li>
        <li class="onhover-dropdown notification-down">
          <div class="notification-box"> 
            <svg> 
              <use href="assets/svg/icon-sprite.svg#notification-header"></use>
            </svg><span class="badge rounded-pill badge-secondary">4 </span>
          </div>
          <div class="onhover-show-div notification-dropdown"> 
            <div class="card mb-0"> 
              <div class="card-header">
                <div class="common-space"> 
                  <h4 class="text-start f-w-600">Notitications</h4>
                  <div><span>4 New</span></div>
                </div>
              </div>
              <div class="card-body">
                <div class="notitications-bar">
                  <ul class="nav nav-pills nav-primary p-0" id="pills-tab" role="tablist">
                    <li class="nav-item p-0"> <a class="nav-link active" id="pills-aboutus-tab" data-bs-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-aboutus" aria-selected="true">All(3)</a></li>
                    <li class="nav-item p-0"> <a class="nav-link" id="pills-blog-tab" data-bs-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="false">
                         Messages</a></li>
                    <li class="nav-item p-0"> <a class="nav-link" id="pills-contactus-tab" data-bs-toggle="pill" href="#pills-contactus" role="tab" aria-controls="pills-contactus" aria-selected="false">
                         Cart  </a></li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-aboutus-tab">
                      <div class="user-message"> 
                        <div class="cart-dropdown notification-all">
                          <ul>
                            <li class="pr-0 pl-0 pb-3 pt-3">
                              <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="assets/images/other-images/receiver-img.jpg" alt="">
                                <div class="media-body"><a class="f-light f-w-500" href="/product_cards">Men Blue T-Shirt</a>
                                  <div class="qty-box"> 
                                    <div class="input-group"> <span class="input-group-prepend">
                                        <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">- </button></span>
                                      <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                        <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                                    </div>
                                  </div>
                                  <h6 class="font-primary">$695.00</h6>
                                </div>
                                <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <ul> 
                          <li>
                            <div class="user-alerts"><img class="user-image rounded-circle img-fluid me-2" src="assets/images/dashboard/user/5.jpg" alt="user"/>
                              <div class="user-name">
                                <div> 
                                  <h6><a class="f-w-500 f-14" href="/user_profile">Floyd Miles</a></h6><span class="f-light f-w-500 f-12">Sir, Can i remove part in des...</span>
                                </div>
                                <div> 
                                  <svg>
                                    <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="user-alerts"><img class="user-image rounded-circle img-fluid me-2" src="assets/images/dashboard/user/6.jpg" alt="user"/>
                              <div class="user-name">
                                <div> 
                                  <h6><a class="f-w-500 f-14" href="/user_profile">Dianne Russell</a></h6><span class="f-light f-w-500 f-12">So, what is my next work ?</span>
                                </div>
                                <div> 
                                  <svg>
                                    <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
                      <div class="notification-card"> 
                        <ul> 
                          <li class="notification d-flex w-100 justify-content-between align-items-center">
                            <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                              <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="assets/images/dashboard/user/3.jpg" alt="user"/></div>
                              <div class="flex-grow-1">
                                <div class="common-space user-id w-100">
                                  <div class="common-space w-100"> <a class="f-w-500 f-12" href="/private_chat">Robert D. Hambly</a></div>
                                </div>
                                <div><span class="f-w-500 f-light f-12">Hello Miss...😊</span></div>
                              </div><span class="f-light f-w-500 f-12">44 sec</span>
                            </div>
                          </li>
                          <li class="notification d-flex w-100 justify-content-between align-items-center">
                            <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                              <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="assets/images/dashboard/user/7.jpg" alt="user"/></div>
                              <div class="flex-grow-1">
                                <div class="common-space user-id w-100">
                                  <div class="common-space w-100"> <a class="f-w-500 f-12" href="/private_chat">Courtney C. Strang</a></div>
                                </div>
                                <div><span class="f-w-500 f-light f-12">Wishing You a Happy Birthday Dear.. 🥳🎊</span></div>
                              </div><span class="f-light f-w-500 f-12">52 min</span>
                            </div>
                          </li>
                          <li class="notification d-flex w-100 justify-content-between align-items-center">
                            <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                              <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="assets/images/dashboard/user/5.jpg" alt="user"/></div>
                              <div class="flex-grow-1">
                                <div class="common-space user-id w-100">
                                  <div class="common-space w-100"> <a class="f-w-500 f-12" href="/private_chat">Raye T. Sipes</a></div>
                                </div>
                                <div><span class="f-w-500 f-light f-12">Hello Dear!! This Theme Is Very beautiful</span></div>
                              </div><span class="f-light f-w-500 f-12">48 min</span>
                            </div>
                          </li>
                          <li class="notification d-flex w-100 justify-content-between align-items-center">
                            <div class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                              <div class="user-alerts flex-shrink-0"><img class="rounded-circle img-fluid img-40" src="assets/images/dashboard/user/6.jpg" alt="user"/></div>
                              <div class="flex-grow-1">
                                <div class="common-space user-id w-100">
                                  <div class="common-space w-100"> <a class="f-w-500 f-12" href="/private_chat">Henry S. Miller</a></div>
                                </div>
                                <div><span class="f-w-500 f-light f-12">You’re older today than yesterday, happy birthday!</span></div>
                              </div><span class="f-light f-w-500 f-12">3 min</span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contactus" role="tabpanel" aria-labelledby="pills-contactus-tab">
                      <div class="cart-dropdown mt-4"> 
                        <ul>
                          <li class="pr-0 pl-0 pb-3">
                            <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="assets/images/other-images/cart-img.jpg" alt="">
                              <div class="media-body"><a class="f-light f-w-500" href="/product_cards">Furniture Chair for Home</a>
                                <div class="qty-box">
                                  <div class="input-group"> <span class="input-group-prepend">
                                      <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                    <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                      <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                                  </div>
                                </div>
                                <h6 class="font-primary">$500</h6>
                              </div>
                              <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                            </div>
                          </li>
                          <li class="pr-0 pl-0 pb-3 pt-3">
                            <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="assets/images/other-images/receiver-img.jpg" alt="">
                              <div class="media-body"><a class="f-light f-w-500" href="/product_cards">Men Cotton Blend Blue T-Shirt</a>
                                <div class="qty-box"> 
                                  <div class="input-group"> <span class="input-group-prepend">
                                      <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">- </button></span>
                                    <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                      <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                                  </div>
                                </div>
                                <h6 class="font-primary">$695.00</h6>
                              </div>
                              <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                            </div>
                          </li>
                          <li class="mb-3 total"><a href="/checkout">
                              <h6 class="mb-0">
                                 Order Total :<span class="f-right">$1195.00  </span></h6></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-footer pb-0 pr-0 pl-0"> 
                      <div class="text-center"> <a class="f-w-700" href="/private_chat">
                          <button class="btn btn-primary" type="button" title="btn btn-primary">Check all</button></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="profile-nav onhover-dropdown"> 
          <div class="media profile-media"><img class="b-r-10" src="assets/images/dashboard/profile.png" alt="">
            <div class="media-body d-xxl-block d-none box-col-none">
              <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i class="middle fa fa-angle-down"> </i></div>
              <p class="mb-0 font-roboto">Admin</p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="/user_profile"><i data-feather="user"></i><span>My Profile</span></a></li>
            <li><a href="/letter_box"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li> <a href="/edit_profile"> <i data-feather="settings"></i><span>Settings</span></a></li>
            <li><a class="btn btn-pill btn-outline-primary btn-sm" href="/logout_view">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">                        
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details"> 
      <div class="ProfileCard-realName"></div>
      </div> 
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>
<!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        


<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
  <div class="logo-wrapper"><a href="/index"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a>
    <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
  </div>
  <div class="logo-icon-wrapper"><a href="/index"><img class="img-fluid" src="assets/images/logo/logo-icon.png" alt=""></a></div>
  <nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="sidebar-menu">
      <ul class="sidebar-links" id="simple-bar">
        <li class="back-btn"><a href="/index"><img class="img-fluid" src="assets/images/logo/logo-icon.png" alt=""></a>
          <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>
        <li class="pin-title sidebar-main-title">
          <div> 
            <h6>Pinned</h6>
          </div>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6 class="lan-1">General</h6>
          </div>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-home"></use>
            </svg><span class="lan-3">Dashboard          </span></a>
          <ul class="sidebar-submenu">
            <li><a href="/index">Default</a></li>
            <li><a href="/dashboard_02">Ecommerce</a></li>
            <li><a href="/dashboard_03">Project</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon"> 
              <use href="assets/svg/icon-sprite.svg#stroke-widget"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-widget"></use>
            </svg><span class="lan-6">Widgets</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/general_widget">General</a></li>
            <li><a href="/chart_widget">Chart</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-layout"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-layout"></use>
            </svg><span class="lan-7">Page layout</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/box_layout">Boxed</a></li>
            <li><a href="/layout_rtl">RTL</a></li>
            <li><a href="/layout_dark">Dark Layout</a></li>
            <li> <a href="/hide_on_scroll">Hide Nav Scroll</a></li>
          </ul>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6 class="lan-8">Applications</h6>
          </div>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-project"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-project"></use>
            </svg><span>Project           </span></a>
          <ul class="sidebar-submenu">
            <li><a href="/projects">Project List</a></li>
            <li><a href="/projectcreate">Create new</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/file_manager">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-file"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-file"></use>
            </svg><span>File manager</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/kanban">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-board"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-board"></use>
            </svg><span>kanban Board</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-ecommerce"></use>
            </svg><span>Ecommerce</span></a>
          <ul class="sidebar-submenu">
            <li> <a href="/add_products">Add Products</a></li>
            <li><a href="/product_cards">Product</a></li>
            <li><a href="/category_page">Category page</a></li>
            <li><a href="/product_page">Product page</a></li>
            <li><a href="/list_products">Product list</a></li>
            <li><a href="/payment_details">Payment Details</a></li>
            <li><a href="/order_history">Order History</a></li>
            <li><a class="submenu-title" href="#">Invoices<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/invoice_1">Invoice-1</a></li>
                <li><a href="/invoice_2">Invoice-2</a></li>
                <li><a href="/invoice_3">Invoice-3</a></li>
                <li><a href="/invoice_4">Invoice-4</a></li>
                <li><a href="/invoice_5">Invoice-5</a></li>
                <li><a href="/invoice_template">Invoice-6</a></li>
              </ul>
            </li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/list_wish">Wishlist</a></li>
            <li><a href="/checkout">Checkout</a></li>
            <li><a href="/pricing">Pricing</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/letter_box">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-email"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-email"></use>
            </svg><span>Letter Box   </span></a>
          
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-chat"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-chat"></use>
            </svg><span>Chat</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/private_chat">Private Chat</a></li>
            <li> <a href="/group_chat">Group Chat</a></li>
          </ul>
        </li>
        <li class="sidebar-list"> <i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon"> 
              <use href="assets/svg/icon-sprite.svg#stroke-user"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-user"></use>
            </svg><span>Users</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/user_profile">Users Profile</a></li>
            <li><a href="/edit_profile">Users Edit</a></li>
            <li><a href="/user_cards">Users Cards</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/bookmark">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-bookmark"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-bookmark"> </use>
            </svg><span>Bookmarks</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/contacts">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-contact"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-contact"> </use>
            </svg><span>Contacts</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/task">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-task"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-task"> </use>
            </svg><span>Tasks</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/calendar_basic">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-calendar"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-calender"></use>
            </svg><span>Calendar</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/social_app">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-social"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-social"> </use>
            </svg><span>Social App</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/to_do">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-to-do"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-to-do"> </use>
            </svg><span>To-Do</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/search">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-search"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-search"> </use>
            </svg><span>Search Result</span></a></li>
        <li class="sidebar-main-title"> 
          <div>
            <h6>Forms & Table</h6>
          </div>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon"> 
              <use href="assets/svg/icon-sprite.svg#stroke-form"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-form"> </use>
            </svg><span>Forms</span></a>
          <ul class="sidebar-submenu">
            <li> <a class="submenu-title" href="#">Form Controls <span class="sub-arrow"> <i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/form_validation">Form Validation</a></li>
                <li><a href="/base_input">Base Inputs</a></li>
                <li><a href="/radio_checkbox_control">Checkbox & Radio</a></li>
                <li><a href="/input_group">Input Groups</a></li>
                <li> <a href="/input_mask">Input Mask</a></li>
                <li><a href="/megaoptions">Mega Options</a></li>
              </ul>
            </li>
            <li><a class="submenu-title" href="#">
                 Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/datepicker">Datepicker</a></li>
                <li><a href="/touchspin">Touchspin</a></li>
                <li><a href="/select2">Select2</a></li>
                <li><a href="/switch">Switch</a></li>
                <li><a href="/typeahead">Typeahead</a></li>
                <li><a href="/clipboard">Clipboard</a></li>
              </ul>
            </li>
            <li><a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/form_wizard_one">Form Wizard 1</a></li>
                <li><a href="/form_wizard_two">Form Wizard 2</a></li>
                <li><a href="/two_factor">Two Factor</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-table"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-table"></use>
            </svg><span>Tables</span></a>
          <ul class="sidebar-submenu">
            <li><a class="submenu-title" href="#">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/basic_table">Basic Tables</a></li>
                <li><a href="/table_components">Table components</a></li>
              </ul>
            </li>
            <li><a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
              <ul class="nav-sub-childmenu submenu-content">
                <li><a href="/datatable_basic_init">Basic Init</a></li>
                <li> <a href="/datatable_advance">Advance Init </a></li>
                <li> <a href="/datatable_API">API </a></li>
                <li><a href="/datatable_data_source">Data Sources</a></li>
              </ul>
            </li>
            <li><a href="/ext_autofill">Ex. Data Tables</a></li>
            <li><a href="/jsgrid_table">Js Grid Table</a></li>
          </ul>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6>Components</h6>
          </div>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-ui-kits"></use>
            </svg><span>Ui Kits</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/typography">Typography</a></li>
            <li><a href="/avatars">Avatars</a></li>
            <li><a href="/helper_classes">helper classes</a></li>
            <li><a href="/grid">Grid</a></li>
            <li><a href="/tag-pills">Tag & pills</a></li>
            <li><a href="/progressbar">Progress</a></li>
            <li><a href="/modal">Modal</a></li>
            <li><a href="/alert">Alert</a></li>
            <li><a href="/popover">Popover</a></li>
            <li><a href="/tooltip">Tooltip</a></li>
            <li><a href="/dropdown">Dropdown</a></li>
            <li><a href="/accordion">Accordion</a></li>
            <li><a href="/bootstraptab">Tabs</a></li>
            <li><a href="/lists">Lists</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
            </svg><span>Bonus Ui</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/scrollable/">Scrollable</a></li>
            <li><a href="/tree/">Tree view</a></li>
            <li><a href="/toasts/">Toasts</a></li>
            <li><a href="/rating/">Rating</a></li>
            <li><a href="/dropzone/">dropzone</a></li>
            <li><a href="/tour/">Tour</a></li>
            <li><a href="/sweetalert2/">SweetAlert2</a></li>
            <li><a href="/effect_modal/">Animated Modal</a></li>
            <li><a href="/owlcarousel/">Owl Carousel</a></li>
            <li><a href="/ribbons/">Ribbons</a></li>
            <li><a href="/pagination/">Pagination</a></li>
            <li><a href="/breadcrumb/">Breadcrumb</a></li>
            <li><a href="/rangeslider/">Range Slider</a></li>
            <li><a href="/imagecropper/">Image cropper</a></li>
            <li><a href="/basiccard/">Basic Card</a></li>
            <li><a href="/creativecard/">Creative Card</a></li>
            <li><a href="/draggablecard/">Draggable Card</a></li>
            <li><a href="/timeline1/">Timeline </a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-animation"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-animation"></use>
            </svg><span>Animation</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/animate/">Animate</a></li>
            <li><a href="/scrollreval/">Scroll Reveal</a></li>
            <li><a href="/AOS/">AOS animation</a></li>
            <li><a href="/tilt/">Tilt Animation</a></li>
            <li><a href="/wow/">Wow Animation</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-icons"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-icons"></use>
            </svg><span>Icons</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/flagicon/">Flag icon</a></li>
            <li><a href="/fontawesome/">Fontawesome Icon</a></li>
            <li><a href="/icoicon/">Ico Icon</a></li>
            <li><a href="/themify/">Themify Icon</a></li>
            <li><a href="/feather/">Feather icon</a></li>
            <li><a href="/whether/">Whether Icon</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-button"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-botton"></use>
            </svg><span>Buttons</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/buttons/">Default Style</a></li>
            <li><a href="/flat/">Flat Style</a></li>
            <li><a href="/edge/">Edge Style</a></li>
            <li><a href="/raised/">Raised Style</a></li>
            <li><a href="/group">Button Group</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-charts"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-charts"></use>
            </svg><span>Charts</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/echarts">Echarts</a></li>
            <li><a href="/apex">Apex Chart</a></li>
            <li><a href="/google">Google Chart</a></li>
            <li><a href="/sparkline">Sparkline chart</a></li>
            <li><a href="/flot">Flot Chart</a></li>
            <li><a href="/knob">Knob Chart</a></li>
            <li><a href="/morris">Morris Chart</a></li>
            <li><a href="/chartjs">Chatjs Chart</a></li>
            <li><a href="/chartist">Chartist Chart</a></li>
            <li><a href="/peity">Peity Chart</a></li>
          </ul>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6>Pages</h6>
          </div>
        </li>
        
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/sample_page">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-sample-page"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-sample-page"></use>
            </svg><span>Sample page</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/internationalization">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-internationalization"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-internationalization"></use>
            </svg><span>Internationalization</span></a></li>
        
        <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-others"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-others"></use>
            </svg><span>Others</span></a>
          <div class="mega-menu-container menu-content">
            <div class="container-fluid">
              <div class="row">
                <div class="col mega-box">
                  <div class="link-section">
                    <div class="submenu-title">
                      <h5>Error Page</h5>
                    </div>
                    <ul class="submenu-content opensubmegamenu">
                      <li><a href="/error_400">Error 400</a></li>
                      <li><a href="/error_401">Error 401</a></li>
                      <li><a href="/error_403">Error 403</a></li>
                      <li><a href="/error_404">Error 404</a></li>
                      <li><a href="/error_500">Error 500</a></li>
                      <li><a href="/error_503">Error 503</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col mega-box">
                  <div class="link-section">
                    <div class="submenu-title">
                      <h5> Authentication</h5>
                    </div>
                    <ul class="submenu-content opensubmegamenu">
                      <li><a href="/login_simple" target="_blank">Login Simple</a></li>
                      <li><a href="/login_one" target="_blank">Login bg image</a></li>
                      <li><a href="/login_two" target="_blank">Login image two                      </a></li>
                      <li><a href="/login_bs_validation" target="_blank">Login validation</a></li>
                      <li><a href="/login_tt_validation" target="_blank">Login tooltip</a></li>
                      <li><a href="/login_validation" target="_blank">Login sweetalert</a></li>
                      <li><a href="/sign_up/" target="_blank">Register Simple</a></li>
                      <li><a href="/sign_one" target="_blank">Register Bg-Image</a></li>
                      <li><a href="/sign_two" target="_blank">Register two-image </a></li>
                      <li><a href="/sign_wizard" target="_blank">Register wizard</a></li>
                      <li><a href="/unlock">Unlock User</a></li>
                      <li><a href="/forget_password">Forget Password</a></li>
                      <li><a href="/reset_password">Reset Password</a></li>
                      <li><a href="/maintenance">Maintenance</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col mega-box">
                  <div class="link-section">
                    <div class="submenu-title">
                      <h5>Coming Soon</h5>
                    </div>
                    <ul class="submenu-content opensubmegamenu">
                      <li><a href="/comingsoon">Coming Simple</a></li>
                      <li><a href="/comingsoon_video">Coming with Bg video</a></li>
                      <li><a href="/comingsoon_img">Coming with Bg Image</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col mega-box">
                  <div class="link-section">
                    <div class="submenu-title">
                      <h5>Email templates</h5>
                    </div>
                    <ul class="submenu-content opensubmegamenu">
                      <li><a href="/basic_temp">Basic Email</a></li>
                      <li><a href="/email_header">Basic With Header</a></li>
                      <li><a href="/template_email">Ecomerce Tem...</a></li>
                      <li><a href="/template_email_2">Email Template 2</a></li>
                      <li><a href="/ecommerce_temp">Ecommerce Email</a></li>
                      <li><a href="/email_order">Order Success</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6>Miscellaneous</h6>
          </div>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-gallery"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-gallery"></use>
            </svg><span>Gallery</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/gallery_grid">Gallery Grid</a></li>
            <li><a href="/gallery_description">Gallery Grid Desc</a></li>
            <li><a href="/masonry_gallery">Masonry Gallery</a></li>
            <li><a href="/masonry_disc">Masonry with Desc</a></li>
            <li><a href="/hover">Hover Effects</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-blog"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-blog"></use>
            </svg><span>Blog</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/blog_details">Blog Details</a></li>
            <li><a href="/blog_single">Blog Single</a></li>
            <li><a href="/add_post">Add Post</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/FAQ">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-faq"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-faq"></use>
            </svg><span>FAQ</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-job-search"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-job-search"></use>
            </svg><span>Job Search</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/job_cards">Cards view</a></li>
            <li><a href="/job_list">List View</a></li>
            <li><a href="/job_details">Job Details</a></li>
            <li><a href="/apply">Apply</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-learning"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-learning"></use>
            </svg><span>Learning</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/learning_list">Learning List</a></li>
            <li><a href="/learning_detailed">Detailed Course</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-maps"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-maps"></use>
            </svg><span>Maps</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/maps_js">Maps JS</a></li>
            <li><a href="/vector_maps">Vector Maps</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-editors"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-editors"></use>
            </svg><span>Editors</span></a>
          <ul class="sidebar-submenu"> 
            <li><a href="/quill_editor">Quill editor</a></li>
            <li><a href="/ace_code">ACE code editor  </a></li>
          </ul>
        </li>
        <li class="sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/knowledgebase">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
            </svg><span>Knowledgebase</span></a></li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/support_ticket">
            <svg class="stroke-icon">
              <use href="assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
            </svg>
            <svg class="fill-icon">
              <use href="assets/svg/icon-sprite.svg#fill-support-tickets"></use>
            </svg><span>Support Ticket</span></a></li>
      </ul>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav>
</div>
<!-- Page Sidebar Ends-->
        <div class="page-body ">
          


<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h4>Default</h4>
      </div>
      <div class="col-6"> 
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index">                                       
              <svg class="stroke-icon">
                <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </div>
    </div>
  </div>
</div>
           




<!-- Container-fluid starts-->
<div class="container-fluid"> 
  <div class="row size-column">
    <div class="col-xl-8 col-md-12 box-col-12">
      <div class="card">
        <div class="card-header sales-chart card-no-border">
          <h4>Revenue Growth  </h4>
          <div class="sales-chart-dropdown"> 
            <ul class="balance-data">
              <li> <span class="circle bg-warning"> </span><span class="ms-1 f-w-400">Marketing Sale </span></li>
              <li>  <span class="circle bg-primary"> </span><span class="ms-1 f-w-400">Online Sale</span></li>
            </ul>
            <div class="sales-chart-dropdown-select">
              <div class="card-header-right-icon online-store"> 
                <div class="dropdown"> 
                  <button class="btn dropdown-toggle dropdown-toggle-store" id="dropdownMenuButtonToggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">This Year</button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonToggle"><span class="dropdown-item">Last Month</span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Today   </span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pt-0"> 
          <div class="row"> 
            <div class="col-xxl-8 col-xl-12">
              <div class="revenuegrowth">
                <div class="revenuegrowth-chart" id="revenuegrowth"></div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 d-xxl-block d-none ">
              <div class="revenuegrowth-details"> 
                <div class="growth-details"><span class="f-light f-12  text-uppercase">Total Sales</span>
                  <h4 class="f-w-500 mb-2">$56.265.08 </h4>
                  <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                    <p class="mb-0 f-w-500 f-12">Compared to  </p><span class="f-light f-12 f-w-500 ">(+40.15% than)</span>
                    <p class="mb-0 f-w-500 f-12">last year </p>
                  </div>
                </div>
                <div class="growth-details"><span class="f-light f-12  text-uppercase">Total Purchase </span>
                  <h4 class="f-w-500 mb-2">$42,256.26  </h4>
                  <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                    <p class="mb-0 f-w-500 f-12">Compared to </p><span class="txt-secondary f-12 f-w-500">(-20.25% than) </span>
                    <p class="mb-0 f-w-500 f-12">last year  </p>
                  </div>
                </div>
                <div class="growth-details"> <span class="f-light f-12  text-uppercase">Total Returns</span>
                  <h4 class="f-w-500 mb-2">$5,215.62  </h4>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <p class="mb-0 f-w-500 f-12">Compared to </p><span class=" f-w-500 f-light f-12">(+18.15% than)  </span>
                    <p class="mb-0 f-w-500 f-12">last year </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 box-col-none">
      <div class="row"> 
        <div class="col-md-12 col-sm-6"> 
          <div class="card boost-up-card overflow-hidden">
            <div class="p-4">
              <div class="boostup-name row">
                <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">Boost up your sale</h6>
                <p class="text-white f-14 f-w-500 col-9 line-clamp">
                  by upgrading your account you can increase your sale by 30% more.</p>
              </div>
              <div class="img-boostup"><img class="img-boostup-img-1" src="assets/images/dashboard-3/boostup1.png" alt="boostup"><img class="img-boostup-img-2" src="assets/images/dashboard-3/boostup2.png" alt="boostup"></div>
              <div class="btn-showcase text-start"> <a href="/pricing">
                  <button class="btn btn-pill btn-outline-light-2x b-r-8" type="button">Upgrade Now</button></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-6">
          <div class="card"> 
            <div class="card-header card-no-border total-revenue pb-0">
              <h4>Deliveries</h4>
              <div class="icon-menu-header">
                <svg>
                  <use href="assets/svg/icon-sprite.svg#more-horizontal"></use>
                </svg>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="table-responsive custom-scrollbar deliveries-percentage">
                <table class="percentage-data w-100">
                  <thead> 
                    <tr> 
                      <th class="f-light f-12 f-w-500" scope="col">Particular</th>
                      <th class="f-light f-12 f-w-500" scope="col">Percentage</th>
                      <th class="f-light f-12 f-w-500 text-end" scope="col">Total Amount</th>
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <td class="f-w-400 f-10"> <a class="line-clamp" href="/cart">On Time Delivery</a></td>
                      <td> 
                        <div class="progress-value d-flex gap-2 align-items-center">
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%  " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span>80%</span>
                        </div>
                      </td>
                      <td class="f-w-500 f-10 text-end">$45,452.23</td>
                    </tr>
                    <tr>
                      <td class="f-w-400 f-10"> <a class="line-clamp" href="/cart">Delayed Delivery</a></td>
                      <td>
                        <div class="progress-value d-flex gap-2 align-items-center">
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                          </div><span>15% </span>
                        </div>
                      </td>
                      <td class="f-w-500 f-10 text-end">$15,256.23</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-md-6 box-col-6">
      <div class="card height-equal">
        <div class="card-header card-no-border total-revenue"> 
          <h4>Top Product </h4><a href="/product_cards">View All  </a>
        </div>
        <div class="card-body pt-0">
          <div class="top-product-card">
            <ul>
              <li class="d-flex top-product gap-2">
                <div><img class="img-fluid product-img" src="assets/images/dashboard-3/product/1.png" alt="product"/></div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                  <div class="product-details">
                    <div><span class="badge rounded-pill badge-light text-dark">SKU90400</span></div><a class="f-10 f-w-500  line-clamp" href="/product_cards">Huawai Smart Watch</a><span class="f-10 f-w-500 txt-primary">$39.02</span>
                  </div>
                  <div class="product-items">
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY :</span><span class="f-10 f-w-500">12</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue : </span><span class="f-10 f-w-500  ">$51</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit :</span><span class="f-10 f-w-500 ">$15</span></div>
                  </div>
                </div>
              </li>
              <li class="d-flex top-product gap-2">
                <div><img class="img-fluid product-img" src="assets/images/dashboard-3/product/2.png" alt="product"/></div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                  <div class="product-details">
                    <div><span class="badge rounded-pill badge-light text-dark">SKU78589</span></div><a class="f-10 f-w-500  line-clamp" href="/product_cards">Noise - Wireless Headphone</a><span class="f-10 f-w-500 txt-primary">$45.26</span>
                  </div>
                  <div class="product-items">
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY :</span><span class="f-10 f-w-500">19</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue : </span><span class="f-10 f-w-500  ">$8</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit :</span><span class="f-10 f-w-500 "> $9</span></div>
                  </div>
                </div>
              </li>
              <li class="d-flex top-product gap-2">
                <div><img class="img-fluid product-img" src="assets/images/dashboard-3/product/3.png" alt="product"/></div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                  <div class="product-details">
                    <div><span class="badge rounded-pill badge-light text-dark">SKU78599</span></div><a class="f-10 f-w-500  line-clamp" href="/product_cards">Men &amp; Women Footwear</a><span class="f-10 f-w-500 txt-primary">$45.62</span>
                  </div>
                  <div class="product-items">
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY : </span><span class="f-10 f-w-500">9</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue :</span><span class="f-10 f-w-500  "> $15</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit : </span><span class="f-10 f-w-500 ">$18</span></div>
                  </div>
                </div>
              </li>
              <li class="d-flex top-product gap-2">
                <div><img class="img-fluid product-img" src="assets/images/dashboard-3/product/4.png" alt="product"/></div>
                <div class="w-100 d-flex justify-content-between align-items-center">
                  <div class="product-details">
                    <div><span class="badge rounded-pill badge-light text-dark">SKU78596</span></div><a class="f-10 f-w-500  line-clamp" href="/product_cards">Anime White Half Sleev T-shirt</a><span class="f-10 f-w-500 txt-primary">$589.26</span>
                  </div>
                  <div class="product-items">
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">QTY :</span><span class="f-10 f-w-500">9</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Revenue : </span><span class="f-10 f-w-500  ">$7</span></div>
                    <div class="common-space gap-1"><span class="f-10 f-w-500 f-light">Profit :</span><span class="f-10 f-w-500 ">$42</span></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-sm-6 box-col-6">
      <div class="card height-equal">
        <div class="card-header card-no-border total-revenue"> 
          <h4>New User  </h4><a href="/product_cards">View All</a>
        </div>
        <div class="card-body pt-0"> 
          <div class="new-user"> 
            <ul> 
              <li>
                <div class="space-common d-flex user-name"><img class="img-40 rounded-circle img-fluid me-2" src="assets/images/user/22.png" alt="user"/>
                  <div class="common-space w-100">
                    <div>
                      <h6> <a class="f-w-500 f-14 " href="/user_profile">Smith John</a></h6><span class="f-light f-w-500 f-12">India</span>
                    </div>
                    <div class="product-sub">
                      <div class="dropdown"> 
                        <div id="dropdownMenuButtonicon31" data-bs-toggle="dropdown" aria-expanded="false" role="menu">
                          <svg class="invoice-icon"> 
                            <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                          </svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonicon31"><span class="dropdown-item">Last Month </span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Last Day </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="space-common d-flex user-name"><img class="img-40 rounded-circle img-fluid me-2" src="assets/images/user/28.png" alt="user"/>
                  <div class="common-space w-100">
                    <div>
                      <h6> <a class="f-w-500 f-14 " href="/user_profile">Robert Fox</a></h6><span class="f-light f-w-500 f-12">Afghanistan</span>
                    </div>
                    <div class="product-sub">
                      <div class="dropdown"> 
                        <div id="dropdownMenuButtonicon32" data-bs-toggle="dropdown" aria-expanded="false" role="menu">
                          <svg class="invoice-icon"> 
                            <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                          </svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonicon32"><span class="dropdown-item">Last Month </span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Last Day </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="space-common d-flex user-name"><img class="img-40 rounded-circle img-fluid me-2" src="assets/images/user/26.png" alt="user"/>
                  <div class="common-space w-100">
                    <div>
                      <h6> <a class="f-w-500 f-14 " href="/user_profile">Darlene Robtson</a></h6><span class="f-light f-w-500 f-12">Georgia</span>
                    </div>
                    <div class="product-sub">
                      <div class="dropdown"> 
                        <div id="dropdownMenuButtonicon33" data-bs-toggle="dropdown" aria-expanded="false" role="menu">
                          <svg class="invoice-icon"> 
                            <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                          </svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonicon33"><span class="dropdown-item">Last Month </span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Last Day </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="space-common d-flex user-name"><img class="img-40 rounded-circle img-fluid me-2" src="assets/images/user/24.png" alt="user"/>
                  <div class="common-space w-100">
                    <div>
                      <h6> <a class="f-w-500 f-14 " href="/user_profile">Floyd Miles</a></h6><span class="f-light f-w-500 f-12">Pakistan</span>
                    </div>
                    <div class="product-sub">
                      <div class="dropdown"> 
                        <div id="dropdownMenuButtonicon34" data-bs-toggle="dropdown" aria-expanded="false" role="menu">
                          <svg class="invoice-icon"> 
                            <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                          </svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonicon34"><span class="dropdown-item">Last Month </span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Last Day </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="space-common d-flex user-name"><img class="img-40 rounded-circle img-fluid me-2" src="assets/images/user/49.png" alt="user"/>
                  <div class="common-space w-100">
                    <div>
                      <h6> <a class="f-w-500 f-14 " href="/user_profile">Jacob Jones</a></h6><span class="f-light f-w-500 f-12">Monaco</span>
                    </div>
                    <div class="product-sub">
                      <div class="dropdown"> 
                        <div id="dropdownMenuButtonicon35" data-bs-toggle="dropdown" aria-expanded="false" role="menu">
                          <svg class="invoice-icon"> 
                            <use href="assets/svg/icon-sprite.svg#more-vertical"></use>
                          </svg>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonicon35"><span class="dropdown-item">Last Month </span><span class="dropdown-item">Last Week</span><span class="dropdown-item">Last Day </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-5 col-sm-6 box-col-6">
      <div class="card height-equal"> 
        <div class="card-header card-no-border total-revenue pb-0"> 
          <h4>Team Activity </h4><a href="/product_cards">View All </a>
        </div>
        <div class="card-body pt-0"> 
          <div class="activity-table table-responsive custom-scrollbar">
            <table class="order-table overflow-hidden project-table w-100 activity-log">
              <tbody>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/50.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Floyd Miles</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">5 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Floyd has moved to the warehouse.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/51.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Ralph Edwards</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">6 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Ralph has solved Mr.williams project.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/33.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Esther Howard</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">10 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Esther has changed his to active, now.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/52.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Jacob Jones</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">11 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Jacob has make changes in sold it.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/53.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Theresa Webb</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">12 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Theresa has complete old task and  new one.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="team-activity">
                      <div class="activity-data d-flex align-items-center gap-3">
                        <div class="common-space gap-2 "> 
                          <div class="user-activity me-3"><img class="rounded-circle p-1 img-fluid me-3 img-50" src="assets/images/user/54.png" alt="user"><a class="f-10 f-w-500 username" href="/edit_profile">Annette Black</a></div>
                          <div class="activity-time"><span class="f-light f-w-500 f-10">12 min ago</span></div>
                        </div>
                        <div class="subtitle"> 
                          <p class="f-w-400 f-10">Annette has send all the stock to department.</p>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-xl-6 box-col-6"> 
      <div class="card"> 
        <div class="card-header card-no-border total-revenue pb-0">
          <h4>User Visits by Day </h4>
          <div class="sales-chart-dropdown">
            <ul class="balance-data"> 
              <li> <span class="circle bg-primary"></span><span class="f-light ms-1">Chrome </span></li>
              <li><span class="circle bg-primary-1"> </span><span class="f-light ms-1">Firefox </span></li>
              <li> <span class="circle bg-primary-2"> </span><span class="f-light ms-1">Safari</span></li>
            </ul>
          </div>
        </div>
        <div class="card-body pt-0 pb-0">
          <div class="user-visitsCharts"> 
            <div id="visitsCharts"> </div>
          </div>
        </div>
        <div class="card-footer"> 
          <div class="common-space"> 
            <div><a class="f-w-600 f-14 " href="/index">Most Visited Day</a><span class="f-light f-w-500 f-14 d-block">Total 59.6k visits on Sunday </span></div>
            <div class="visited-dropdown"> 
              <svg class="mb-0"> 
                <use href="assets/svg/icon-sprite.svg#arrow-down"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-5 col-xl-6 box-col-6">
      <div class="card">
        <div class="card-header card-no-border total-revenue"> 
          <h4>Latest Transaction</h4><a href="/product_cards">View All</a>
        </div>
        <div class="card-body pt-0"> 
          <div class="table-order table-responsive custom-scrollbar">
            <table class=" w-100 tranaction-table">
              <thead> 
                <tr> 
                  <th>Name</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Darrell Steward</a></div>
                  </td>
                  <td class="f-14 f-w-500">16 Nov, 2024</td>
                  <td class="f-14 f-w-500">$456.23</td>
                  <td>
                    <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Floyd Miles</a></div>
                  </td>
                  <td class="f-14 f-w-500">22 Jan, 2024</td>
                  <td class="f-14 f-w-500">$550.73</td>
                  <td>
                    <div class="txt-secondary"><span class="f-w-500 f-13">Failed</span></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Ralph Edwards</a></div>
                  </td>
                  <td class="f-14 f-w-500">31 Dec, 2024</td>
                  <td class="f-14 f-w-500">$785.26</td>
                  <td>
                    <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Jerome Bell</a></div>
                  </td>
                  <td class="f-14 f-w-500">16 Nov, 2024</td>
                  <td class="f-14 f-w-500">$458.14</td>
                  <td>
                    <div class="txt-secondary"><span class="f-w-500 f-13">Failed</span></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Theresa Webb</a></div>
                  </td>
                  <td class="f-14 f-w-500">16 Feb, 2024</td>
                  <td class="f-14 f-w-500">$263.24</td>
                  <td>
                    <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <div class="product-name"><a class=" f-14 f-w-500" href="/product_cards">Courtney Henry</a></div>
                  </td>
                  <td class="f-14 f-w-500">01 Nov, 2024</td>
                  <td class="f-14 f-w-500">$785.14</td>
                  <td>
                    <div class="txt-primary"><span class="f-w-500 f-13">Complete</span></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-xl-6 box-col-6">
      <div class="card">
        <div class="card-header card-no-border total-revenue"> 
          <h4>Best Selling Product   </h4>
        </div>
        <div class="card-body pt-0">
          <div class="selling-product">
            <div class="apache-cotainer" id="echart-polar"> </div>
            <div class="sales-chart-dropdown">
              <ul class="balance-data"> 
                <li> <span class="circle bg-primary"></span><span class="f-light ms-1">Digital</span></li>
                <li><span class="circle bg-warning"></span><span class="f-light ms-1">Clothes</span></li>
                <li> <span class="circle bg-secondary"></span><span class="f-light ms-1">Electric</span></li>
                <li> <span class="circle bg-light"> </span><span class="f-light ms-1">Footwear</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->


        </div>
        


<!-- footer start-->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 footer-copyright text-center">
        <p class="mb-0">Copyright 2024 © Riho theme by pixelstrap  </p>
      </div>
    </div>
  </div>
</footer>
      </div>
    </div>
    
    <!-- latest jquery-->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/sidebar-pin.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/header-slick.js"></script>

    

    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="assets/js/chart/echart/esl.js"></script>
    <script src="assets/js/chart/echart/config.js"></script>
    <script src="assets/js/chart/echart/pie-chart/facePrint.js"></script>
    <script src="assets/js/chart/echart/pie-chart/testHelper.js"></script>
    <script src="assets/js/chart/echart/pie-chart/custom-transition-texture.js"></script>
    <script src="assets/js/chart/echart/data/symbols.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="assets/js/dashboard/dashboard_3.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>