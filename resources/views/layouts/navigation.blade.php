@section('navigation')
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                </li>
                <li class="nav-item start active">
                    <a href="<?php echo url('/'); ?>/home" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>

                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Generators</h3>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" target="_blank" class="nav-link">
                        <i class="fa fa-amazon"></i> Invoice Generators
                        <span class="arrow nav-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-tag"></i> Amazon
  <span class="arrow nav-toggle"></span>
                              </a>
                              <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/amazon/us/" class="nav-link">
                                                            <i class="icon-power"></i> Amazon.com</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/amazon/uk/" class="nav-link">
                                                            <i class="icon-paper-plane"></i> Amazon.co.uk</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/amazon/de/" class="nav-link">
                                                            <i class="icon-star"></i> Amazon.de</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/amazon/it/" class="nav-link">
                                                            <i class="icon-star"></i> Amazon.it</a>
                                                    </li>
                                                </ul>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-tag"></i> Bestbuy
<span class="arrow nav-toggle"></span>
                              </a>
                              <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/bestbuy/" class="nav-link">
                                                            <i class="icon-power"></i> BestBuy.com</a>
                                                    </li>

                                                </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-tag"></i> Newegg
<span class="arrow nav-toggle"></span>
                              </a>
                              <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/newegg/" class="nav-link">
                                                            <i class="icon-power"></i> Newegg.com</a>
                                                    </li>

                                                </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-tag"></i> Bol
<span class="arrow nav-toggle"></span>
                              </a>
                              <ul class="sub-menu">
                                                    <li class="nav-item">
                                                        <a href="<?php echo url('/'); ?>/generator/bol/" class="nav-link">
                                                            <i class="icon-power"></i> Bol.com</a>
                                                    </li>

                                                </ul>
                        </li>
                    </ul>
                </li>

                <li class="heading">
                    <h3 class="uppercase">Premium Features</h3>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" target="_blank" class="nav-link">
                        <i class="fa fa-key"></i> Serial Generators
                        <span class="arrow nav-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo url('/'); ?>/generator/serial/gen" class="nav-link">
                                <i class="icon-tag"></i>AIO Serial Generator</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user"></i> Auto SE
                    </a>
                </li>


                <li class="heading">
                    <h3 class="uppercase">Tools</h3>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" target="_blank" class="nav-link">
                        <i class="fa fa-money"></i> Currency Conversion
                        <span class="arrow nav-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo url('/'); ?>/tools/btc-to-usd" target="_BLANK" class="nav-link">
                                <i class="fa fa-bitcoin"></i> BTC to USD</a>
                        </li>
                    </ul>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Navigation</h3>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" target="_blank" class="nav-link">
                        <i class="fa fa-th-large"></i> OrionPID
                        <span class="arrow nav-toggle"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="https://orionpid.com/board/" target="_BLANK" class="nav-link">
                                <i class="fa fa-asterisk"></i> OrionPID Forums</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo url('/'); ?>/home/" target="_BLANK" class="nav-link">
                                <i class="fa fa-asterisk"></i> OrionPID Dashboard</a>
                        </li>

                    </ul>
                </li>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
@endsection
