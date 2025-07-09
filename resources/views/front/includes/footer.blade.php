<footer class="footer footer-three">

    <div id="nov-copyright">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-6 align-items-center justify-content-md-start justify-content-sm-center d-flex pb-xs-max-20 flex-center">
                    <span>
                        {{ __('site.copyright') . ' © ' . date('Y') . '  ' . $settings->name . ' ' . __('site.all_rights_reserved') }}
                    </span>
                </div>
                <div
                    class="payment-image col-md-6 align-items-center justify-content-md-end justify-content-sm-center d-flex flex-center">
                    <img class="img-fluid" src="{{ asset('assets/images/icon-pi.png') }}" width="30" alt="payment" title="Payment">
                </div>
            </div>
        </div>
    </div>
</footer>
