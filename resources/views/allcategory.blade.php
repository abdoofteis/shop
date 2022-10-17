<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <style>
            .edit,.delete,.copy,.view{
                color:Silver;
            }
            .fteis{
                font-size:15px;
            }
            </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>لوحة التحكم</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css"
              href="assets/css/dark-mode.css"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="assets/vendor/jqvmap/jqvmap.min.css"
              rel="stylesheet">

    </head>

    <body class="layout-app layout-sticky-subnav ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
                        <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                             src="assets/images/logo/accent-teal-100@2x.png"
                             width="32"
                             alt="Huma">
                        <span class="d-none d-lg-block">Shop</span>
                    </a>

                    <!-- <button class="btn navbar-btn mr-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->

                    <form class="search-form navbar-search d-none d-md-flex mr-16pt"
                          action="index.html">
                        <button class="btn"
                                type="submit"><i class="material-icons">اضغط</i></button>
                        <input type="text"
                               class="form-control"
                               placeholder="بحث ...">
                    </form>

                    <div class="flex"></div>

                    

                    <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                        <div class="nav-item dropdown d-none d-sm-flex">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown">
                                <img width="32"
                                     height="32"
                                     class="rounded-circle mr-8pt"
                                     src="assets/images/people/50/guyy.jpg"
                                     alt="account" />
                                <span class="flex d-flex flex-column mr-8pt">
                                    <span class="navbar-text-100">Abdoo Fteis</span>
                                    <small class="navbar-text-50">Administrator</small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="edit-account.html">Edit Account</a>
                                <a class="dropdown-item"
                                   href="billing-history.html">Payments</a>
                                <a class="dropdown-item"
                                   href="login.html">Logout</a>
                            </div>
                        </div>

                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-dropdown-disable-document-scroll
                                    data-caret="false">
                                <i class="material-icons">notifications</i>
                                <span class="badge badge-notifications badge-accent">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

<!-- /// -->
                    </div>

                   <!-- // -->

                </div>

                <!-- // END Header -->

                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            
<!-- // -->               <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                              <h2 class="mb-0">الفئات</h2>
                                </ol>
                            </div>
                            <div class="row pl-5"
                             role="tablist">
                            <div class="col-auto border-left pl-5" style="margin-left:700px;">
                                <a href="category"
                                   class="btn btn-accent">إضافة فئة جديدة 
                                </a>
                            </div>
                        </div>
                            

                        </div>
                        
                        <!-- // -->

                        

                    </div>
                </div>

                <!-- <div class="container-fluid page__container">
                    <div class="page-section">

                         -->
                         <div class="fteis">

                        <div class="sm-0 pl-5">

                         <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
      <th scope="col">خيارات</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>عصائر</td>
      <td>
      <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xe3c9;</i></a>
      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
      </td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>مشروي غازي</td>
      <td>
      <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xe3c9;</i></a>
      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
      </td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td>حليب</td>
      <td>
      <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xe3c9;</i></a>
      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>

      </td>
    </tr>
    <tr>
    <th scope="row">4</th>
    <td>معلبات</td>
      <td>
      <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xe3c9;</i></a>
      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
      </td>
    </tr>
    <tr>
    <th scope="row">5</th>
    <td> سروال</td>
      <td>
      <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xe3c9;</i></a>
      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
      </td>
    </tr>
  </tbody>
</table>
                        
           </div>
        </div>          

                        <!-- // -->

                       
                       

                        

                       

                        <!-- // -->

                    <!-- </div>
                </div> -->

                <!-- footer        -->

                <div class="js-fix-footer footer border-top-2">
                    <div class="container-fluid page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="assets/images/logo/black-70@2x.png"
                                 width="30"
                                 alt="Huma"> Shop
                        </p>
                        <p class="measure-lead-max text-muted mb-0 small">Huma is a beautifully crafted user interface for modern Business Admin Web Applications, with examples for many pages needed for Customer Relationship Management, Enterprise Resource Planning, Human Resources, Content Management System, Project Management, Tasks, eCommerce, Messaging and Account Management.</p>
                    </div>
                    <div class="pb-16pt pb-lg-24pt">
                        <div class="container-fluid page__container">
                            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                        <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                        <nav class="nav nav-links nav--flush">
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Facebook"></a>
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Twitter"></a>
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Vimeo"></a>
                                            <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                                        </nav>
                                    </div>
                                    <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                                        <!-- <a href=""
                                           class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a> -->
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <!-- <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                            <a href=""
                                               class="text-white-70 text-underline mr-16pt">Terms</a>
                                            <a href=""
                                               class="text-white-70 text-underline">Privacy policy</a>
                                        </p> -->
                                        <p class="text-white-50 small mb-0 p-5" style="margin-left:0px" >Copyright 2019 &copy; All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END drawer-layout__content -->

            <!-- drawer -->

            <!-- dashboard -->
            
            <div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark sidebar-left"
                         data-perfect-scrollbar>

                        

                        <a href="index.html"
                           class="sidebar-brand ">
                            <img class="sidebar-brand-icon"
                                 src="assets/images/logo/accent-teal-100@2x.png"
                                 alt="Huma">
                            <span>Shop</span>
                        </a>

                        <div class="sidebar-account mx-16pt mb-16pt dropdown">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">
                                <img width="32"
                                     height="32"
                                     class="rounded-circle mr-8pt"
                                     src="assets/images/people/50/guyy.jpg"
                                     alt="account" />
                                <span class="flex d-flex flex-column mr-8pt">
                                    <span class="text-black-100">Abdoo Fteis</span>
                                    <small class="text-black-50">Administrator</small>
                                </span>
                                <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="edit-account.html">Edit Account</a>
                                <a class="dropdown-item"
                                   href="billing-history.html">Payments</a>
                                <a class="dropdown-item"
                                   href="login.html">Logout</a>
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </div>

                        <form action="index.html"
                              class="search-form flex-shrink-0 search-form--black sidebar-m-b sidebar-p-l mx-16pt pr-0">
                            <input type="text"
                                   class="form-control pl-0"
                                   placeholder="بحث">
                            <button class="btn"
                                    type="submit"><i class="material-icons">اضغط</i></button>
                        </form>

                        <div class="sidebar-heading">نظرة عامة
                        </div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   href="home">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                    <span class="sidebar-menu-text">لوحة التحكم</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#dashboards_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">link</span>
                                    الاختصارات
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="dashboards_menu">
                                    
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="admin">
                                            <span class="sidebar-menu-text">الأدمن</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="admin">
                                            <span class="sidebar-menu-text">المتاجر</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button "
                                           href="admin">
                                            <span class="sidebar-menu-text">العملاء</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="sidebar-heading">الادارة</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#enterprise_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">inventory</span>
                                    المنتجات
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="enterprise_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="addpr">
                                            <span class="sidebar-menu-text">اضافة منتج جديد</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="viewpr">
                                            <span class="sidebar-menu-text">جميع المنتجات</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="hr-dashboard.html">
                                            <span class="sidebar-menu-text">الفئة</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="employees.html">
                                            <span class="sidebar-menu-text">المنتجات المباعة</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="noteproduct">
                                            <span class="sidebar-menu-text">تعليقات المنتج
                                            </span>
                                        </a>
                                    
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#productivity_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                    المبيعات
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="productivity_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="allorders">
                                            <span class="sidebar-menu-text">جميع الطلبيات</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="tasks-board.html">
                                            <span class="sidebar-menu-text">طلبيات الداخلية</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="tasks-list.html">
                                            <span class="sidebar-menu-text"> طلبات البائع</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#ecommerce_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                    الكوبنات
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="ecommerce_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="ecommerce.html">
                                            <span class="sidebar-menu-text"> التخفيضات</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button "
                                           href="edit-product.html">
                                            <span class="sidebar-menu-text">انشاء تخفيض</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#account_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                    الحساب
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="account_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="reset-password.html">
                                            <span class="sidebar-menu-text"> ملف التعريف </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="reset-password.html">
                                            <span class="sidebar-menu-text">إعادة تعين كلمة المرور </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="change-password.html">
                                            <span class="sidebar-menu-text">تغير كلمة المرور</span>
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#community_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">store</span>
                                    المتاجر
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="community_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">انشاء متجر</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">تعديل المتجر</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">عرض المتجار</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        
                </div>
            </div>
            <!-- // END drawer -->
        </div>
                <!-- // END drawer-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="app"
                          :layout-location="{
      'compact': 'compact-index.html',
      'mini': 'mini-index.html',
      'app': 'index.html',
      'boxed': 'boxed-index.html',
      'sticky': 'sticky-index.html',
      'default': 'fixed-index.html'
    }"
                          sidebar-type="light"
                          sidebar-variant="bg-body"></app-settings>
        </div>
        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Flatpickr -->
        <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="assets/js/flatpickr.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/js/chartjs.js"></script>

        <!-- Chart.js Samples -->
        <script src="assets/js/page.analytics-dashboard.js"></script>

        <!-- Vector Maps -->
        <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/vector-maps.js"></script>

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

        <!-- Tables -->
        <script src="assets/js/toggle-check-all.js"></script>
        <script src="assets/js/check-selected-row.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>
    </body>

</html>