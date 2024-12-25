<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                    <div class="content">
                        <h1 class="page-title">{{$title}}</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{route('home')}}">@lang('web.home')</a>
                            </li>
                            <li>{{$bread ?? $title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>