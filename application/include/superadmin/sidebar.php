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
            
            <li class="sidebar-header">
            Manage
            </li>
            <li class="sidebar-item">
                <a href="#manage" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-align-justify"></i> <span class="align-middle">Manage</span>
                </a>
                <ul id="manage" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>manageuser">Users</a></li>
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>manageteams">Teams</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>manageclients">Clients</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>managecandidtates">Candidates</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>managejobrole">Job Role</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>managetargets">Targets</a></li> -->
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>managefile">File</a></li>
                    
                        
                </ul>
            </li>

            
            <li class="sidebar-header">
            Logs and History
            </li>
            <li class="sidebar-item">
                <a href="#addon1" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle mr-2 fas fa-fw fa-th"></i> <span class="align-middle">Logs and History</span>
                </a>
                <ul id="addon1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>managelogs">Logs</a></li>
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="<?php echo base_url(); ?>manageactivityboardhistory">Activity Board History</a></li> -->
                    
                    
                        
                </ul>
            </li>
            

        </ul>
    </div>
</nav>