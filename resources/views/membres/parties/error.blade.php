<div class="row">
    @if (session()->has('message'))
    <div class="col-md-6 col-md-offset-3">
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session()->get('message')}}
        </div>
    </div>
    @endif
    @if (session()->has('messageErr'))
    <div class="col-md-6 col-md-offset-3 mt-5">
        <div class="alert alert-danger alert-dismissable">
            {{-- <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button> --}}
            {{session()->get('messageErr')}}
        </div>
    </div>
    @endif
</div>