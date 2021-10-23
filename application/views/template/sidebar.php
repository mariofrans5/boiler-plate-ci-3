<!--msb: main sidebar-->
<div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <li ><a href="<?php echo base_url();?>Home">Home</a> </li>
                <li ><a href="<?php echo base_url();?>Home/example">Example</a> </li>
                <li ><a href="#">Nav 1</a> </li>
                <li ><a href="#">level 1</a> </li>
                <li class="panel panel-default">
                    <a data-toggle="collapse" href="#dropdown-lvltest_nav" aria-expanded="false" aria-controls="dropdown-lvltest_nav">Test Nav <span class="caret"></span></a>
                    <!-- Dropdown level 2 -->
                    <div id="dropdown-lvltest_nav" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li ><a href="#">level 2</a></li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" href="#dropdown-lvltest_dropdown" aria-expanded="false" aria-controls="dropdown-lvltest_dropdown">test_dropdown<span class="caret"></span></a>
                                    <!-- Dropdown level 3 -->
                                    <div id="dropdown-lvltest_dropdown" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li ><a href="#">test_dropdown 1</a></li>
                                                <li ><a href="#">level 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div> 
<!--msb: main sidebar end-->