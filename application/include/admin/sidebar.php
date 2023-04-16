<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.html">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        GSA
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="<?php echo base_url() ?>asserts/img/avatars/ghad.jpeg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
            <div class="font-weight-bold">
            <?php 
                if(isset($_SESSION['UserId'])){
                        echo $_SESSION['name'];
                    }else{
                        echo "n/a";
                    }
            ?>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item">
                <a href="#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>adashboard">Home</a></li>
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>index.php/admin/enrollstudent">enrollstudent</a></li> -->
                </ul>
            </li>

            <li class="sidebar-header">
                Manage
            </li>
            <li class="sidebar-item">
                <a href="#dashboardss" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Co-ordinator</span>
                </a>
                <ul id="dashboardss" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>acoordinator">Manage Co-ordinator</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>amanageschools">manageschools</a></li>
                </ul>
            </li>
            
            

            <li class="sidebar-header">
                Elements
            </li>

            <li class="sidebar-item">
                <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-file"></i> <span class="align-middle">Reports</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>index.php/admin/getAllRegisteredByAdmin">My Reports</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>agetAllRegistered">View All Reports</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>