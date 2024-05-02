@if (!empty(session('success')))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div> 
@endif
@if (!empty(session('error')))
<div class="alert alert-danger" role="alert">
    {{session('error')}}
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