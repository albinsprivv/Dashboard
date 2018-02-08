@extends('layouts.app')
@include('layouts.navigation')
@section('content')
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo url('/'); ?>/home">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Serial Generator - OPPO</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        @if(Auth::user()->is_premium OR Auth::user()->is_admin)
                        <h1 class="page-title"> Serial Generator</strong>
                            <small>completely fresh serials</small>
                        </h1>
                        <!-- add some style -->
                                        @else
                                      <div class="col-md-12 text-center">
                                        <h2>Sorry! Only Premium users can access this feature.</h2>
                                      </div>
                                      @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
@endsection

@section('customjavascript')
<script>

</script>
@endsection
