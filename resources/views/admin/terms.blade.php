@extends('admin.layout')
@section('content')
        <!-- page head start-->
        <div class="page-head">
            <h3 class="m-b-less">
                Terms
            </h3>
            <!--<span class="sub-title">Welcome to Static Table</span>-->
            <div class="state-information">
                <ol class="breadcrumb m-b-less bg-less">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    
                </ol>
            </div>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        <div class="wrapper">

                <div class="row">
                        <div class="col-sm-12">
                            <section class="panel">
                                <header class="panel-heading ">
                                    Terms
                                    <span class="tools pull-right">
                                        <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                        <a class="t-close fa fa-times" href="javascript:;"></a>
                                    </span>
                                </header>

                                <section class="panel">
                                        <header class="panel-heading ">
                                            wysihtml5 Editor
                                        </header>
                                        <form method="post" action="{{ route('termstore') }}">
                                            @csrf
                                            <div class="panel-body">
                                                <textarea class="wysihtml5 form-control" rows="9" name="terms">{{ $terms->terms }}</textarea>
                                                <br>
                                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                                            </div>
                                            
                                        </form>
                                    </section>
                            </section>
                        </div>
    
                    </div>

        </div>
        <!--body wrapper end-->
        <!--footer section start-->
        <footer>
            2015 &copy; SlickLab by VectorLab.
        </footer>
        <!--footer section end-->

    </div>
@endsection

@push('scripts')
<!--bootstrap-wysihtml5-->
<!--bootstrap-wysihtml5-->
<link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" />
<script type="text/javascript" src="{{ asset('js/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
<script>

        jQuery(document).ready(function(){
            $('.wysihtml5').wysihtml5();
        });
    
    </script>
    
@endpush