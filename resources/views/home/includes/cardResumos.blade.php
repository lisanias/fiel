<div class="col-xl-3 col-md-6">
    <div class="card border-left-{{ $color ?? 'info' }} shadow mb-0">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-{{ $color ?? 'secondary' }} text-uppercase mb-1">
                        {{ $title ?? ''}}
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $totals ?? '0'}}
                    </div>
                </div>
                <div class="col-auto">
                    <i class="{{ $icon ?? 'fas fa-window-close'}} fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>