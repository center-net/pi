<aside class="sidebar sidebar-default navs-rounded-all sidebar-base navs-pill-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route('admin.dashboard')}}" class="navbar-brand">
            <img width="30" height="30" src="{{ asset('uplods/admin/settings/' .$settings->logo)}}" alt="">
            <h4 class="logo-title">{{$settings->name}}</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list" id="sidebar">
            @include('partials.dashboard.'.(Auth::user()->can('administrator') ? 'vertical-nav' : 'merchants-nav'))
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
