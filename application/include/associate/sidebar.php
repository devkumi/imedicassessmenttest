<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.html">
        <!-- <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg> -->
        File HQ
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <!-- <img src="<?php echo base_url() ?>asserts/img/avatars/ghad.png" class="img-fluid rounded-circle mb-2" alt="Linda Miller" /> -->
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
            <!-- <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item">
                <a href="#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asdashboard">Home</a></li>
                        
                </ul>
            </li> -->
            <li class="sidebar-header">
            Manage
            </li>
            <li class="sidebar-item">
                <a href="#manage" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-align-justify"></i> <span class="align-middle">Manage</span>
                </a>
                <ul id="manage" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanageclients">Clients</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagecandidtates">Candidates</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagejobrole">Job Role</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagecvcount">Cvs</a></li> -->
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagefile">File</a></li>
                        
                </ul>
            </li>

            <!-- <li class="sidebar-header">
            Boards 
            </li>
            <li class="sidebar-item">
                <a href="#addon" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-th"></i> <span class="align-middle">Boards</span>
                </a>
                <ul id="addon" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanageprocess">Process Board</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagegreenboard">Green Board</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanageactivityboard">Activity Board</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asmanagefinboard">Financial Calendar Board</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>astopbiller">Top Biller Board</a></li>
                    
                        
                </ul>
            </li> -->
            

            <!-- <li class="sidebar-header">
                All Report
            </li>

            <li class="sidebar-item">
                <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-file"></i> <span class="align-middle">Reports</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asgetAllRegisteredByAdmin">My Reports</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>asgetAllRegistered">View All Reports</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</nav>