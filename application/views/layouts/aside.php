<aside class="page-sidebar">
    <!-- <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">

            <span class="page-logo-text mr-1"> <?php echo $username = $this->session->userdata(
                                                    'Username'
                                                ); ?></span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
          
        </a>
    </div> -->
    <div class="page-logo">
        <a href="<?php echo base_url() ?>" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
            <img src="<?php echo Base_logo; ?>" alt="logo" style="width:100%; height:60px;" style="align-items:flex-start !important;padding:0px !important"  aria-roledescription="logo">
            <span class="page-logo-text mr-1"></span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>

        </a>
    </div>
    <div class="info-card">
  <!-- <img
    src="http://127.0.0.1:8002{{user.avatar}}"
    class="profile-image rounded-circle"
    alt="picture"
  /> -->
  <div class="info-card-text">
    <a href="#" class="d-flex align-items-center text-white" style="background-color: #00ffff !important;color: black !important;">
      <span class="text-truncate text-truncate-sm d-inline-block">
        <!-- {{user.name}} -->
      </span>
    </a>
    <!-- <span class="d-inline-block text-truncate text-truncate-sm"
      >Toronto, Canada</span
    > -->
  </div>
  <img
    src="<?php echo Base_logo_Cover; ?>"
    class="cover"
    alt="cover"
    style="width:100%;height:100%"
  />
  <a
    href="#"
		(click)="toggleFilter($event)"
    class="pull-trigger-btn"
    data-class="list-filter-active"
    style="background-color: #00ffff !important;color: black !important;"
  >
    <i class="fal fa-angle-down"></i>
  </a>
</div>

    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
    
        <!-- <ul id="js-nav-menu" class="nav-menu"> -->
        <!-- <li>
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Dashboard" title="Dashboard" data-filter-tags="application intel">
                        <i class="fal fa-chart-bar"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                    </a>
                
                </li>  -->
             
                <!-- <li>
                    <a href="#" title="Application Intel" data-filter-tags="application intel">
                   
                        <i class="fal fa-clock"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Master Data</span>
                    </a>
                    <ul>
                    <li>
                  
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Category" title="Category" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Category </span>
                    </a>  
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Items" title="Items" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Items </span>
                    </a> 
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Clients" title="Clients" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Clients </span>
                    </a> 
                        </li>
                  
                    
                        
                    </ul>
                </li> -->

              

            <!-- </ul> -->
            <ul id="js-nav-menu" class="nav-menu">
        <!-- <li>
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Dashboard" title="Dashboard" data-filter-tags="application intel">
                        <i class="fal fa-chart-bar"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                    </a>
                
                </li>  -->
             
                <li>
                    <a href="<?php echo base_url(
                                            ''
                                        ); ?>Selection" title="Application Intel" data-filter-tags="application intel">
                   
                        <i class="fal fa-clock"></i>
                        <span class="nav-link-text" data-i18n="nav.application_intel">Selection</span>
                    </a>
                   
                    </ul>
                </li>

              

            </ul>

    <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->

</aside>