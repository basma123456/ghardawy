@if(Session::has('error_msg'))
    <h4 class="alert alert-danger"> {{Session::get('error_msg')}}</h4>
@endif
