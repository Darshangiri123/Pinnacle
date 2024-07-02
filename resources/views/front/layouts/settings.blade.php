<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset("assets/media/favicon.png") }}">

  <title>Settings Page</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets2/vendor/fonts/boxicons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets2/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets2/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets2/vendor/libs/apex-charts/apex-charts.css') }}" />
  <style>
    .sidebar {
      background-color: #f8f9fa;
      border-right: 1px solid #dee2e6;
      min-height: 100vh;
    }
    .settings-content {
      padding: 20px;
    }
    .card {
      margin-bottom: 20px;
    }
    .card-header {
      /* background-color: #007bff; */
      background-color: rgb(74, 11, 133);
      color: #fff;
    }
    .btn-view {
      width: 100px;
      background-color: rgb(74, 11, 133);
      position: absolute;
      right: 10px;
    }
    .btn-save {
      width: 100px;
      /* margin-top: 10px; */
      background-color: rgb(74, 11, 133);
      position: absolute;
      right: 10px;
      bottom: 50px;
    }
    .btn-danger {
      width: 150px;
      position: absolute;
      bottom: 0px;
      right: 10px;
    }
    .language-select {
      width: 200px;
    }
    .delete{
      position: relative;
      top:10px;
    }
    
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <!-- <div class="col-md-3 sidebar">
        <nav class="nav flex-column mt-4">
          <a class="nav-link active" href="#general">General</a>
          <a class="nav-link" href="#privacy">Privacy</a>
          <a class="nav-link" href="#customer-support">Customer Support</a>
          <a class="nav-link" href="#language">Language</a>
          <a class="nav-link" href="#delete-account">Delete Account</a>
        </nav>
      </div> -->
      @include('front.layouts.components.navbar')
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a class="navbar-brand  fs-4 fw-bolder fst-italic text-primary" href="#">Pinnacle</a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          
            <!-- Dashboard -->
            <li class="menu-item active sidebar-item">
            <a href="#" class="menu-link text-primary  menu-toggle sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false" aria-controls="setting">
                <i class="menu-icon lni lni-cog"></i>
                <div data-i18n="Analytics">Settings</div>
              </a>
            
              <ul id="setting" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
            <!-- Layouts -->
            <li class="menu-item">
              <a href="#general" class="menu-link  text-primary">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">General</div>
              </a>
            </li>

            {{-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li> --}}
            <li class="menu-item">
              <a href="#privacy" class="menu-link text-primary">
              <i class=" menu-icon lni lni-protection"></i>
                <div data-i18n="Account Settings">Privacy</div>
              </a>
            </li>
           
            <li class="menu-item">
              <a href="#customer-support" class="menu-link text-primary">
              <i class="menu-icon lni lni-support"></i>
                <div data-i18n="Authentications">Customer Support</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="#language" class="menu-link  text-primary">
              <i class="menu-icon lni lni-spellcheck"></i>
                <div data-i18n="Misc">Language</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#delete-account" class="menu-link  text-primary">
              <i class="menu-icon lni lni-trash-can"></i>
                <div data-i18n="Misc">Delete Account</div>
              </a>
            </li>
            </ul>
            </li>
               {{--
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Field 5</div>
              </a>
            </li>
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Field 6</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Sub Field 1</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Sub Field 2</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Sub Field 3</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Sub Field 4</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Sub Field 5</div>
                  </a>
                </li>
                
              </ul>
            </li>

           
            
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Field 7</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Field 8</div>
              </a>
            </li>
            --}}
           </ul> 
        </aside> 
        <!-- / Menu -->

      <!-- Settings Content -->
      <div class="col-md-9 settings-content">
        <div id="general">
          <!-- <h2>General Settings</h2> -->
          <div class="card">
            <div class="card-header">
              General
            </div>
            <div class="card-body">
              <!-- Manage Hidden Feeds -->
              <div class="form-group">
                <label for="manageFeeds">Manage Hidden Feeds</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Translation Settings -->
              <div class="form-group">
                <label for="translation">Translation</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Video Settings -->
              <div class="form-group">
                <label for="video">Video Settings</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Calendar Settings -->
              <div class="form-group">
                <label for="startWeek">Calendar: Start Week On</label>
                <select class="form-control language-select">
                  <option>Sunday</option>
                  <option>Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                  <option>Friday</option>
                  <option>Saturday</option>
                </select>
                <!-- Save Button -->
                <button class="btn btn-primary btn-save mt-3">Save</button>
              </div>
            </div>
          </div>
        </div>
        <div id="privacy">
          <!-- <h2>Privacy Settings</h2> -->
          <div class="card">
            <div class="card-header">
              Privacy
            </div>
            <div class="card-body">
              <!-- Account/Privacy Settings -->
              <div class="form-group">
                <label for="accountPrivacy">Account/Privacy settings</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Blocked Chats -->
              <div class="form-group">
                <label for="blockedChats">Blocked Chats</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Blocked Posts, Comments -->
              <div class="form-group">
                <label for="blockedPosts">Blocked Posts, Comments</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Set up Supervision -->
              <div class="form-group">
                <label for="supervision">Set up Supervision</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
            </div>
          </div>
        </div>
        <div id="customer-support">
          <!-- <h2>Customer Support</h2> -->
          <div class="card">
            <div class="card-header">
              Customer Support
            </div>
            <div class="card-body">
              <!-- Terms of Service -->
              <div class="form-group">
                <label for="terms">Terms of Service</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Privacy Policy -->
              <div class="form-group">
                <label for="privacyPolicy">Privacy Policy</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Agree to using the Service -->
              <div class="form-group">
                <label for="agree">Agree to using the Service</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
              <!-- Help -->
              <div class="form-group">
                <label for="help">Help</label>
                <button class="btn btn-primary btn-view ml-3">View</button>
              </div>
            </div>
          </div>
        </div>
        <div id="language">
          <h2></h2>
          <div class="card">
            <div class="card-header">
              Language
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="language">Select Language</label>
                <select class="form-control language-select">
                  <option>English</option>
                  <option>Spanish</option>
                  <option>French</option>
                  <!-- Add more languages as needed -->
                </select>
              </div>
              <!-- Save Button -->
              <button class="btn btn-primary btn-save">Save</button>
            </div>
          </div>
        </div>
        <div id="delete-account">
          <!-- <h2>Delete Account</h2> -->
          <div class="card">
            <div class="card-body">
              <!-- Delete Account -->
              <div class="form-group delete">
                <label>Delete Account</label>
                <button class="btn btn-danger ">Request</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="{{ asset('assets2/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets2/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets2/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets2/vendor/js/menu.js') }}"></script>


    
    <script src="{{ asset('assets2/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets2/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets2/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets2/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
