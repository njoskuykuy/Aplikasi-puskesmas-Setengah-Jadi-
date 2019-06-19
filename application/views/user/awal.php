<?php $this->load->view('user/config/header');?>
  <body class="login">
    <?php 
        if(!empty($PageView)){
            $this->load->view($PageView);
        }
    ?>
  </body>
</html>
