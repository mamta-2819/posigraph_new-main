<?php
if(basename($_SERVER['PHP_SELF']) == 'dashboard.php'){?>
    <div class="tabs-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xs-12 tabs-body">
                    <div class="tabs">
                        
                        <div class="tab-2 tab-1">
                        <a class="first-tab" href="https://posigraph.com/app/posigraph/dashboard.php"> Feed </a>
                        <input id="tab2-2" name="tabs-two" type="radio" checked="checked">
                          
                        </div>

                        <div class="tab-2">
                        <a class="first-tab" href="https://posigraph.com/app/posigraph/battle/battle.php"> Story </a>                            
                            <input id="tab2-1" name="tabs-two" type="radio">                           
                        </div>

                        <div class="tab-2">
                        <a href="https://posigraph.com/app/posigraph/board.php" class="first-tab"> Board </a>
                            <input id="tab2-3" name="tabs-two" type="radio">                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end tabs -->
<?php
}elseif(basename($_SERVER['PHP_SELF']) == 'home.php'){?>
    <div class="tabs-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 tabs-body">
                <div class="tabs">
                    
                    <div class="tab-2 tab-1">
                    <a class="first-tab" href="https://posigraph.com/app/posigraph/dashboard.php"> Feed </a>
                    <input id="tab2-2" name="tabs-two" type="radio">
                      
                    </div>

                    <div class="tab-2">
                    <a class="first-tab" href="https://posigraph.com/app/posigraph/battle/battle.php"> Story </a>                            
                        <input id="tab2-1" name="tabs-two" type="radio" checked="checked">                           
                    </div>

                    <div class="tab-2">
                    <a href="https://posigraph.com/app/posigraph/board.php" class="first-tab"> Board </a>
                        <input id="tab2-3" name="tabs-two" type="radio">                           
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end tabs -->

<?php }else{?>
    <div class="tabs-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 tabs-body">
                <div class="tabs">
                    
                    <div class="tab-2 tab-1">
                    <a class="first-tab" href="https://posigraph.com/app/posigraph/dashboard.php"> Feed </a>
                    <input id="tab2-2" name="tabs-two" type="radio">
                      
                    </div>

                    <div class="tab-2">
                    <a class="first-tab" href="https://posigraph.com/app/posigraph/battle/battle.php"> Story </a>                            
                        <input id="tab2-1" name="tabs-two" type="radio">                           
                    </div>

                    <div class="tab-2">
                    <a href="https://posigraph.com/app/posigraph/board.php" class="first-tab"> Board </a>
                        <input id="tab2-3" name="tabs-two" type="radio" checked="checked">                           
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php }
?>

    





   
   