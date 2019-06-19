
<?php $this->load->view('administrator/config/header');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span> PUSKESMAS</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('administrator/config/sidebar');?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <?php $this->load->view('administrator/config/top-nav');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- here content -->
              <?php 
                  if(!empty($PageView)){
                      $this->load->view($PageView);
                  }
                ?> 
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php $this->load->view('administrator/config/footer');?>
        <!-- /footer content -->
      </div>
    </div>
    <?php $this->load->view('administrator/config/footer-link');?>
	
  </body>
</html>
