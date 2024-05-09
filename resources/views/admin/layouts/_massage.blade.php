@if (!empty(session('success')))
<div class="d-flex flex-row-reverse">
    <div class="alert alert-success alert-dismissible fade show col-lg-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('success')}}
    </div> 
</div>
@endif
@if (!empty(session('error')))
<div class="d-flex flex-row-reverse">
    <div class="alert alert-danger alert-dismissible fade show col-lg-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('error')}}
    </div> 
</div>

@endif
@if (!empty(session('payment-error')))
<div class="alert alert-error" role="alert">
    {{session('payment-error')}}
</div> 
@endif
@if (!empty(session('warning')))
<div class="alert alert-warning" role="alert">
    {{session('warning')}}
</div> 
@endif