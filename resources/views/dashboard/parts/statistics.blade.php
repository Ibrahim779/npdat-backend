<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body p-3 position-relative">
                <div class="row">
                    <div class="col-7">
                        <p class="text-sm mb-1 text-capitalize font-weight-bold">@lang('main.contacts')</p>
                        <h5 class="font-weight-bolder mb-0">
                            {{ $contactsCount }}
                        </h5>
                        <span
                            class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+{{ $contactsLastMonth }}
                            <span class="font-weight-normal text-secondary">@lang('main.since_last_month')</span></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
