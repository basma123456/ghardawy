@if(Session::has('success_msg'))
   <h4 class="alert alert-success"> {{Session::get('success_msg')}}</h4>
    @endif
