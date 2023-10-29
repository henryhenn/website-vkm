@if(session('message'))
    <div class="alert alert-success" role="alert" id="alert-message">
        {{session('message')}}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger" role="alert" id="alert-message">
        {{session('error')}}
    </div>
@endif
