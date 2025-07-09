<div class="header-center hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo"
                 class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="#">
                    <img class="logo img-fluid"
                         src="{{ asset('uplods/admin/settings/' . $settings->logo) }}" width="30"
                         alt="{{$settings->name}}" title="{{$settings->name}}">
                </a>
            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">{{ __('site.support') }}<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">{{ __('site.call_support') }} :</div>
                        <div class="phone-support">
                            {{$settings->phone}}
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        <a class="login" href="#" rel="nofollow" title="{{ __('site.login_to_customer_account') }}"><i
                                class="header-icon-account"></i></a>
                    </div>
                    <div class="header_link_wishlist">
                        <a href="#" title="{{ __('site.my_wishlists') }}">
                            <i class="header-icon-wishlist"></i>
                        </a>
                    </div>
                    <div id="_desktop_cart">
                        <div class="blockcart cart-preview active" data-refresh-url="">
                            <div class="header-cart">
                                <div class="cart-left">
                                    <a href="#" title="{{ __('site.cart') }}">
                                        <div class="shopping-cart">
                                            <i class="zmdi zmdi-shopping-cart"></i>

                                        </div>

                                    </a>
                                    <div class="cart-products-count">0</div>
                                </div>
                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart">{{ __('site.cart') }}</span>
                                    <span class="cart-item"> {{ __('site.items') }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

