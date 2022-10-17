<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
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
                                <!-- <span class="badge badge-notifications badge-accent">2</span> -->
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
                        
                    </div>

                    

                </div>

                <!-- // END Header -->

                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">لوحة التحكم</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="home">شاشة الرئيسية</a></li>

                                    <li class="breadcrumb-item active">

                                        لوحة التحكم

                                    </li>

                                </ol>

                            </div>

                            

                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto d-flex flex-column">
                                <h6 class="m-0">&dollar;12.3k</h6>
                                <p class="text-50 mb-0 d-flex align-items-center">
                                    أرباح
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                            <div class="col-auto border-left">
                                <h6 class="m-0">264</h6>
                                <p class="text-50 mb-0 d-flex align-items-center">
                                    مبيعات
                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                </p>
                            </div>
                            <div class="col-auto border-left">
                                <a href=""
                                   class="btn btn-accent">تقرير جديد
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="page-section">

                        <div class="alert alert-soft-warning mb-lg-32pt">
                            <div class="d-flex flex-wrap align-items-start">
                                <div class="mr-8pt">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <div class="flex"
                                     style="min-width: 180px">
                                    <small class="text-100">
                                        <strong>Analytics Service Issues.</strong><br>
                                        <span>You may experience some issues with the Analytics API. Stay up to date by following our status page.</span>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">نظرة عامة
                            </div>
                        </div>

                        <div class="row card-group-row mb-lg-8pt">
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <i class="material-icons icon-32pt text-20 mb-4pt">access_time</i>
                                        <div class="d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3">3.6k</div>
                                            <div class="flex">
                                                <p class="mb-0"><strong>Visits</strong></p>
                                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                    31.5%
                                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <i class="material-icons icon-32pt text-20 mb-4pt">attach_money</i>
                                        <div class="d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3">$12.3k</div>
                                            <div class="flex">
                                                <p class="mb-0"><strong>Sales</strong></p>
                                                <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                    51.5%
                                                    <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body"
                                     style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">

                                    <div class="d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">$8.3k</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Products</strong></p>
                                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                31.5%
                                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="chart"
                                         style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                        <canvas class="chart-canvas js-update-chart-line"
                                                id="productsChart"
                                                data-chart-hide-axes="true"
                                                data-chart-line-border-color="primary"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body"
                                     style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">

                                    <div class="d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">$15.0k</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Courses</strong></p>
                                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                31.5%
                                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_down</i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="chart"
                                         style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                        <canvas class="chart-canvas js-update-chart-line-accent"
                                                id="coursesChart"
                                                data-chart-hide-axes="true"
                                                data-chart-line-border-color="teal"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-lg-8pt">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header card-header-tabs-basic nav justify-content-center"
                                         role="tablist">
                                        <div data-toggle="chart"
                                             data-target="#locationDoughnutChart"
                                             data-update='{"data":{
                "labels": ["United States", "United Kingdom", "Germany"], 
                "datasets": [{"label": "Traffic", "data":[25,25,15]}]
              }}'>
                                            <a href="#"
                                               class="active"
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true">
                                                Traffic
                                            </a>
                                        </div>
                                        <div data-toggle="chart"
                                             data-target="#locationDoughnutChart"
                                             data-update='{"data":{
                "labels": ["United States", "United Kingdom", "Germany"], 
                "datasets": [{"label": "Purchases", "data":[15,17,25]}]
              }}'>
                                            <a href="#"
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="false">
                                                Purchases
                                            </a>
                                        </div>
                                        <div data-toggle="chart"
                                             data-target="#locationDoughnutChart"
                                             data-update='{"data":{
                "labels": ["United States", "United Kingdom", "Germany"], 
                "datasets": [{"label": "Quotes", "data":[53,17,25]}]
              }}'>
                                            <a href="#"
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="false">
                                                Quotes
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center"
                                         style="height: 220px;">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="position-relative"
                                                     style="height: calc(220px - 1rem * 2);">
                                                    <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                        <h3 class="mb-0">38%</h3>
                                                        <small class="text-uppercase">United States</small>
                                                    </div>
                                                    <canvas class="chart-canvas"
                                                            id="locationDoughnutChart"
                                                            data-chart-legend="#locationDoughnutChartLegend"
                                                            data-chart-line-background-color="teal;primary;gray"
                                                            data-chart-suffix="%">
                                                        <span style="font-size: 1rem;"
                                                              class="text-muted"><strong>Location</strong> doughnut chart goes here.</span>
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div id="locationDoughnutChartLegend"
                                                     class="chart-legend chart-legend--vertical"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card dashboard-area-tabs"
                                     id="dashboard-area-tabs">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters flex"
                                             role="tablist">
                                            <div class="col"
                                                 data-toggle="chart"
                                                 data-target="#earningsTrafficChart"
                                                 data-update='{"data":{"datasets":[{"label": "Traffic", "data":[10,2,5,15,10,12,15,25,22,30,25,40]}]}}'
                                                 data-prefix=""
                                                 data-suffix="k">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="true"
                                                   class="dashboard-area-tabs__tab card-body text-center active">
                                                    <span class="font-weight-bold">Sessions</span>
                                                    <span class="h2 mb-0 mt-n1">18.3k</span>
                                                </a>
                                            </div>
                                            <div class="col border-left"
                                                 data-toggle="chart"
                                                 data-target="#earningsTrafficChart"
                                                 data-update='{"data":{"datasets":[{"label": "Earnings", "data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'
                                                 data-prefix="$"
                                                 data-suffix="k">
                                                <a href="#"
                                                   data-toggle="tab"
                                                   role="tab"
                                                   aria-selected="false"
                                                   class="dashboard-area-tabs__tab card-body text-center">
                                                    <span class="font-weight-bold">Orders</span>
                                                    <span class="h2 mb-0 mt-n1">&dollar;8.9k</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-muted">
                                        <div id="earningsTrafficChartLegend"
                                             class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                                        <div class="chart"
                                             style="height: calc(240px - 1rem * 2);">
                                            <canvas class="chart-canvas js-update-chart-line"
                                                    id="earningsTrafficChart"
                                                    data-chart-suffix="k"
                                                    data-chart-legend="#earningsTrafficChartLegend">
                                                <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart goes here.</span>
                                            </canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header p-0 nav">
                                        <div class="row no-gutters flex"
                                             role="tablist">
                                            <div class="col-auto">
                                                <div class="p-card-header">
                                                    <p class="mb-0"><strong>Revenue</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        &dollar;203k
                                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-auto border-left">
                                                <div class="p-card-header">
                                                    <p class="mb-0"><strong>Employees</strong></p>
                                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                        264
                                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-auto ml-sm-auto">
                                                <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="vector-map-revenue"
                                             class="map mb-3"
                                             style="height: 328px;"
                                             data-toggle="vector-map"
                                             data-vector-map-map="world_en"
                                             data-vector-map-show-tooltip="false"
                                             data-vector-map-enable-zoom="true"
                                             data-vector-map-scale="1.1"
                                             data-vector-map-pins='{
                "it": "<div class=\"map-pin blue\"><span>Vatican City</span></div>",
                "us": "<div class=\"map-pin blue\"><span>New York</span></div>",
                "au": "<div class=\"map-pin blue\"><span>Sydney</span></div>"
              }'>
                                        </div>

                                        <div class="alert alert-soft-warning">
                                            <div class="d-flex flex-wrap align-items-start">
                                                <div class="mr-8pt">
                                                    <i class="material-icons">access_time</i>
                                                </div>
                                                <div class="flex"
                                                     style="min-width: 180px">
                                                    <small class="text-100">
                                                        <strong>Congrats to the New York Team</strong> For the excellent revenue so far!
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled dashboard-location-tabs nav flex-column m-0"
                                            role="tablist">
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="us"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab active"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>New York</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar"
                                                                     role="progressbar"
                                                                     style="width: 72%;"
                                                                     aria-valuenow="72"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>72k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="it"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>Vatican City</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar bg-primary"
                                                                     role="progressbar"
                                                                     style="width: 39%;"
                                                                     aria-valuenow="39"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>39k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus"
                                                data-target="#vector-map-revenue"
                                                data-focus="au"
                                                data-animate="true">
                                                <div class="dashboard-location-tabs__tab"
                                                     data-toggle="tab"
                                                     role="tab"
                                                     aria-selected="true">
                                                    <div><strong>Sydney</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress"
                                                                 style="height: 4px;">
                                                                <div class="progress-bar bg-primary"
                                                                     role="progressbar"
                                                                     style="width: 25%;"
                                                                     aria-valuenow="25"
                                                                     aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>25k</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-lg-8pt">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">&dollar;12.9k</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Target</strong></p>
                                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                31.5%
                                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                            </p>
                                        </div>
                                        <i class="material-icons icon-48pt text-20 ml-2">access_time</i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">&dollar;3.6k</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Earnings</strong></p>
                                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                51.5%
                                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                            </p>
                                        </div>
                                        <i class="material-icons icon-48pt text-20 ml-2">attach_money</i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">8.3k</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Visits</strong></p>
                                            <p class="text-50 mb-0 mt-n1 d-flex align-items-center">
                                                3.5%
                                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_down</i>
                                            </p>
                                        </div>
                                        <i class="material-icons icon-48pt text-20 ml-2">person_outline</i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Current Users</div>
                        </div>

                        <div class="card mb-lg-32pt">

                            <div class="table-responsive"
                                 data-toggle="lists"
                                 data-lists-sort-by="js-lists-values-employee-name"
                                 data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                                <div class="card-header">
                                    <form class="form-inline">
                                        <label class="mr-sm-2 form-label"
                                               for="inlineFormFilterBy">Filter by:</label>
                                        <input type="text"
                                               class="form-control search mb-2 mr-sm-2 mb-sm-0"
                                               id="inlineFormFilterBy"
                                               placeholder="Search ...">

                                        <label class="sr-only"
                                               for="inlineFormRole">Role</label>
                                        <select id="inlineFormRole"
                                                class="custom-select mb-2 mr-sm-2 mb-sm-0">
                                            <option value="All Roles">All Roles</option>
                                        </select>

                                        <div class="ml-auto mb-2 mb-sm-0 custom-control-inline mr-0">
                                            <label class="form-label mb-0"
                                                   for="active">Active</label>
                                            <div class="custom-control custom-checkbox-toggle ml-8pt">
                                                <input checked=""
                                                       type="checkbox"
                                                       id="active"
                                                       class="custom-control-input">
                                                <label class="custom-control-label"
                                                       for="active">Active</label>
                                            </div>
                                        </div>

                                        <!-- <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
        <input type="checkbox" class="custom-control-input" id="inlineFormPurchase">
        <label class="custom-control-label" for="inlineFormPurchase">Made a Purchase?</label>
      </div> -->
                                    </form>
                                </div>

                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;"
                                                class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-toggle-check-all"
                                                           data-target="#staff"
                                                           id="customCheckAllstaff">
                                                    <label class="custom-control-label"
                                                           for="customCheckAllstaff"><span class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-employee-name">Employee</a>
                                            </th>

                                            <th style="width: 150px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-employer-name">Employer</a>
                                            </th>

                                            <th class="text-center"
                                                style="width: 48px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-projects">Projects</a>
                                            </th>

                                            <th style="width: 37px;">Status</th>

                                            <th style="width: 120px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-activity">Activity</a>
                                            </th>
                                            <th style="width: 51px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-earnings">Earnings</a>
                                            </th>
                                            <th style="width: 24px;"
                                                class="pl-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"
                                           id="staff">

                                        <tr class="selected">

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           checked=""
                                                           id="customCheck1_1">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/people/110/guy-1.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Michael Smith</strong></p>
                                                            <small class="js-lists-values-employee-email text-50"></small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                    <a href=""
                                                       class="text-70"><span class="js-lists-values-employer-name">Black Ops</span></a>
                                                </div>
                                            </td>

                                            <td class="text-center js-lists-values-projects small">12</td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Admin</a>

                                            </td>

                                            <td class="text-50 js-lists-values-activity small">3 days ago</td>
                                            <td class="js-lists-values-earnings small">$12,402</td>
                                            <td class="text-right pl-0">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_2">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle">CS</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Connie Smith</strong></p>
                                                            <small class="js-lists-values-employee-email text-50"></small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                    <a href=""
                                                       class="text-70"><span class="js-lists-values-employer-name">Backend Ltd</span></a>
                                                </div>
                                            </td>

                                            <td class="text-center js-lists-values-projects small">42</td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">User</a>

                                            </td>

                                            <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                            <td class="js-lists-values-earnings small">$1,943</td>
                                            <td class="text-right pl-0">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_3">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <img src="assets/images/people/110/guy-2.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">John Connor</strong></p>
                                                            <small class="js-lists-values-employee-email text-50"></small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                    <a href=""
                                                       class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                                </div>
                                            </td>

                                            <td class="text-center js-lists-values-projects small">31</td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Manager</a>

                                            </td>

                                            <td class="text-50 js-lists-values-activity small">2 weeks ago</td>
                                            <td class="js-lists-values-earnings small">$1,401</td>
                                            <td class="text-right pl-0">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr class="selected">

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           checked=""
                                                           id="customCheck1_4">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">

                                                        <span class="avatar-title rounded-circle">LB</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Laza Bogdan</strong></p>
                                                            <small class="js-lists-values-employee-email text-50"></small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                    <a href=""
                                                       class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                                </div>
                                            </td>

                                            <td class="text-center js-lists-values-projects small">44</td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Admin</a>

                                            </td>

                                            <td class="text-50 js-lists-values-activity small">3 weeks ago</td>
                                            <td class="js-lists-values-earnings small">$22,402</td>
                                            <td class="text-right pl-0">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer p-8pt">

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item dropdown">
                                        <a class="page-link dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#"
                                           aria-label="Page">
                                            <span>1</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href=""
                                               class="dropdown-item active">1</a>
                                            <a href=""
                                               class="dropdown-item">2</a>
                                            <a href=""
                                               class="dropdown-item">3</a>
                                            <a href=""
                                               class="dropdown-item">4</a>
                                            <a href=""
                                               class="dropdown-item">5</a>
                                        </div>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                        </div>

                        <div class="row card-group-row mb-lg-8pt">
                            <div class="col-lg card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header d-flex align-items-center">
                                        <strong class="flex">Checklist</strong>
                                        <div><a href="#"
                                               data-target="#todo"
                                               class="js-toggle-check-all">Mark All as Completed</a></div>
                                    </div>
                                    <div class="progress rounded-0"
                                         style="height: 4px;">
                                        <div class="progress-bar bg-primary"
                                             role="progressbar"
                                             style="width: 40%;"
                                             aria-valuenow="40"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-todo"
                                            id="todo">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input"
                                                           id="customCheck1">
                                                    <label class="custom-control-label"
                                                           for="customCheck1">Wireframe the CRM application pages</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input"
                                                           id="customCheck2">
                                                    <label class="custom-control-label"
                                                           for="customCheck2">Design a new page in Sketch</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input"
                                                           checked=""
                                                           id="customCheck3">
                                                    <label class="custom-control-label"
                                                           for="customCheck3">Quote the custom work</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input"
                                                           checked=""
                                                           id="customCheck4">
                                                    <label class="custom-control-label"
                                                           for="customCheck4">Interview John for Full-Stack Developer</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input"
                                                           checked=""
                                                           id="customCheck5">
                                                    <label class="custom-control-label"
                                                           for="customCheck5">Research the success of CRM</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-8pt">

                                        <ul class="pagination justify-content-start pagination-xsm m-0">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Previous">
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_left</span>
                                                    <span>Prev</span>
                                                </a>
                                            </li>
                                            <li class="page-item dropdown">
                                                <a class="page-link dropdown-toggle"
                                                   data-toggle="dropdown"
                                                   href="#"
                                                   aria-label="Page">
                                                    <span>1</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href=""
                                                       class="dropdown-item active">1</a>
                                                    <a href=""
                                                       class="dropdown-item">2</a>
                                                    <a href=""
                                                       class="dropdown-item">3</a>
                                                    <a href=""
                                                       class="dropdown-item">4</a>
                                                    <a href=""
                                                       class="dropdown-item">5</a>
                                                </div>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Next">
                                                    <span>Next</span>
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_right</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header d-flex align-items-center">
                                        <strong class="flex">Team Skills</strong>
                                        <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                    </div>
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                        <ul class="list-unstyled list-skills w-100">
                                            <li class="mb-8pt">
                                                <div class="text-50 border-right"><small>HTML</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-primary"
                                                             role="progressbar"
                                                             style="width: 61%;"
                                                             aria-valuenow="61"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>61%</small></div>
                                            </li>
                                            <li class="mb-8pt">
                                                <div class="text-50 border-right"><small>CSS</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-accent"
                                                             role="progressbar"
                                                             style="width: 39%;"
                                                             aria-valuenow="39"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>39%</small></div>
                                            </li>
                                            <li class="mb-8pt">
                                                <div class="text-50 border-right"><small>JavaScript</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-warning"
                                                             role="progressbar"
                                                             style="width: 76%;"
                                                             aria-valuenow="76"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>76%</small></div>
                                            </li>
                                            <li class="mb-8pt">
                                                <div class="text-50 border-right"><small>Rails</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-black-50"
                                                             role="progressbar"
                                                             style="width: 28%;"
                                                             aria-valuenow="28"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>28%</small></div>
                                            </li>
                                            <li class="mb-8pt">
                                                <div class="text-50 border-right"><small>Vue.js</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-black-20"
                                                             role="progressbar"
                                                             style="width: 50%;"
                                                             aria-valuenow="50"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>50%</small></div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="text-50 border-right"><small>Laravel</small></div>
                                                <div class="flex">
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-black-20"
                                                             role="progressbar"
                                                             style="width: 60%;"
                                                             aria-valuenow="60"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-70"><small>60%</small></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-8pt">

                                        <ul class="pagination justify-content-start pagination-xsm m-0">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Previous">
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_left</span>
                                                    <span>Prev</span>
                                                </a>
                                            </li>
                                            <li class="page-item dropdown">
                                                <a class="page-link dropdown-toggle"
                                                   data-toggle="dropdown"
                                                   href="#"
                                                   aria-label="Page">
                                                    <span>1</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href=""
                                                       class="dropdown-item active">1</a>
                                                    <a href=""
                                                       class="dropdown-item">2</a>
                                                    <a href=""
                                                       class="dropdown-item">3</a>
                                                    <a href=""
                                                       class="dropdown-item">4</a>
                                                    <a href=""
                                                       class="dropdown-item">5</a>
                                                </div>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                   href="#"
                                                   aria-label="Next">
                                                    <span>Next</span>
                                                    <span aria-hidden="true"
                                                          class="material-icons">chevron_right</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Discussions</div>
                        </div>

                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="row align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="col-lg-auto">
                                        <form class="search-form search-form--dark d-lg-inline-flex mb-8pt mb-lg-0"
                                              action="discussions.html">
                                            <input type="text"
                                                   class="form-control w-lg-auto"
                                                   placeholder="Search discussions">
                                            <button class="btn"
                                                    type="submit"
                                                    role="button"><i class="material-icons">search</i></button>
                                        </form>
                                    </div>
                                    <div class="col-lg d-flex flex-wrap align-items-center">
                                        <div class="ml-lg-auto dropdown">
                                            <a href="#"
                                               class="btn btn-link dropdown-toggle text-70"
                                               data-toggle="dropdown">My Posts</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href=""
                                                   class="dropdown-item active">My Posts</a>
                                                <a href=""
                                                   class="dropdown-item">All Posts</a>
                                            </div>
                                        </div>
                                        <a href="discussions-ask.html"
                                           class="btn btn-outline-secondary">Ask a question</a>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group list-group-flush">

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-8pt">
                                                    <a href=""
                                                       class="avatar avatar-32pt"><img src="assets/images/people/110/guy-1.jpg"
                                                             alt="avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="text-body"><strong>Laza Bogdan</strong></a>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-8pt"><a href="discussion.html"
                                                   class="text-body"><strong>Using Angular HttpClientModule instead of HttpModule</strong></a></p>

                                            <a href="discussion.html"
                                               class="chip chip-outline-secondary">Angular fundamentals</a>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-8pt">
                                                    <a href=""
                                                       class="avatar avatar-32pt"><img src="assets/images/people/110/guy-2.jpg"
                                                             alt="avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="text-body"><strong>Adam Curtis</strong></a>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-0"><a href="discussion.html"
                                                   class="text-body"><strong>Why am I getting an error when trying to install angular/http@2.4.2</strong></a></p>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer p-8pt">

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item dropdown">
                                        <a class="page-link dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#"
                                           aria-label="Page">
                                            <span>1</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href=""
                                               class="dropdown-item active">1</a>
                                            <a href=""
                                               class="dropdown-item">2</a>
                                            <a href=""
                                               class="dropdown-item">3</a>
                                            <a href=""
                                               class="dropdown-item">4</a>
                                            <a href=""
                                               class="dropdown-item">5</a>
                                        </div>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

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
                                        <p class="text-white-50 small mb-0">Copyright 2019 &copy; All rights reserved.</p>
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


                        <a href="home"
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
                                           href="allcategory">
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