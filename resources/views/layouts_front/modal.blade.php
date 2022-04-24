
<!-- Start footer -->
<style>
    .yellow_button{
        background-color: yellow;
    }
</style>

<div class="modal">
    <div id="modal-group-1" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body">
                <p class="text-center">{{trans('modal.word_of_login')}}</p>
            </div>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">{{trans('modal.deletion')}}</button>
                <a href="#modal-group-2" class="uk-button uk-button-primary" uk-toggle>{{trans('modal.login')}}</a>
            </div>
        </div>
    </div>

    <div id="modal-group-2" uk-modal>
        <div class="uk-modal-dialog p-5">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body m-auto">
                <form id="myLoginForm" method="POST" action="{{ route('login') }}">
                    @csrf

{{--                    login_by--}}
                    <div class="pb-5">
                       <input id="email_button"  value="{{trans('modal.by_email')}}  &#128231;" type="button" class="btn btn-sm btn-outline-info p-2 changeValueButtons circle yellow_button"   onclick="changeValueToEmail(this)">
                    <input value="{{trans('modal.by_phone')}} &#9742;" type="button" class="btn btn-sm btn-outline-info p-2 changeValueButtons circle" onclick="changeValueToPhone(this)">
                    </div>

                    <div class="mb-3">
                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{trans('modal.email_phone')}}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{trans('modal.password')}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                   {{trans('modal.remember_me')}}
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-primary">
                            {{trans('modal.submit')}}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{trans('modal.forgot_your_password')}}
                            </a>
                        @endif


                        <a href="#modal-group-3" class="uk-button btn btn-light" uk-toggle>{{trans('modal.register')}}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


{{--    /**************************************************************************************************************/--}}

    <div id="modal-group-3" uk-modal>
        <div class="uk-modal-dialog">
            <div class="uk-modal-body m-auto">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <!--------------------------------------------------------------->
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"   placeholder="ا{{trans('modal.f_name')}}" >
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <!--------------------------------------------------------------->
                    <div class="mb-3">
                        <input type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name"   placeholder="{{trans('modal.l_name')}}" >
                        @error('l_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <!--------------------------------------------------------------->
                    <div class="mb-3">
                        <input type="email"  placeholder="{{trans('modal.email')}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="{{trans('modal.email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <!--------------------------------------------------------------->
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  placeholder="{{trans('modal.phone')}}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>
                    <!--------------------------------------------------------------->
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"   value="{{ old('password') }}" required  placeholder="{{trans('modal.password')}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>
                    <!--------------------------------------------------------------->

                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="new-password"  value="{{ old('password_confirmation') }}" required  placeholder="{{trans('modal.password_confirmation')}}">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        <!--------------------------------------------------------------->


                        <div class="my-5 text-center">
                        <button type="submit" class="btn btn-primary">{{trans('modal.register')}}</button>
                    </div>
                    <!--------------------------------------------------------------->

                </form>
            </div>
        </div>
    </div>

    <div id="modal-group-4" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">{{trans('modal.address')}}</h2>
            </div>
            <div class="uk-modal-body">
                <p>الوصول إلى حاجات معينة، وبعيدة عن مكان السكن الدائم أو بيئة الأعمال أو الحروب، أمّا اصطلاحاً فلم يظهر أي تعريف متفق عليه للسياحة، وفيما يأتي بعض من التعريفات الاصطلاحيّةميع الأشخاص الذين يوجدون في مكانٍ ما.{{trans('modal.word_of_login')}}</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">{{trans('modal.cancel')}}</button>
                <a href="#modal-group-5" class="uk-button uk-button-primary" uk-toggle>{{trans('modal.previous')}}</a>
            </div>
        </div>
    </div>

    <div id="modal-group-5" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">{{trans('modal.address')}} </h2>
            </div>
            <div class="uk-modal-body">
                <p>أجل الوصول إلى حاجات معينة، وبعيدة عن مكان السكن الدائم أو بيئة الأعمال أو الحروب، أمّا اصطلاحاً فلم يظهر أي تعريف متفق عليه للسياحة، وفيما يأتي بعض من التعريفات الاصطلاحيّةميع الأشخاص الذين يوجدون في مكانٍ ما.{{trans('modal.word_of_login')}}</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">{{trans('modal.cancel')}}</button>
                <a href="#modal-group-1" class="uk-button uk-button-primary" uk-toggle>{{trans('modal.previous')}}</a>
            </div>
        </div>
    </div>
</div>



<script>


    function changeValueToEmail(object) {
        let myForm1 = document.getElementById('myLoginForm').setAttribute('action' , "{{route('login')}}");//changing the action attr of the form
        document.getElementsByClassName('changeValueButtons')[0].style.backgroundColor ='transparent';
        document.getElementsByClassName('changeValueButtons')[1].style.backgroundColor ='transparent';
        document.getElementById('email').setAttribute('type' , "email");//changing type of email type to email type
        object.style.backgroundColor = 'yellow';
    }
    function changeValueToPhone(object) {

        let myForm2 = document.getElementById('myLoginForm').setAttribute('action' , "{{ url('/login/loginByPhone') }}");//changing the action attr of the form
        document.getElementsByClassName('changeValueButtons')[0].style.backgroundColor ='transparent';
        document.getElementsByClassName('changeValueButtons')[1].style.backgroundColor ='transparent';
        document.getElementById('email').setAttribute('type' , "text"); //changing type of email type to text type
        object.style.backgroundColor = 'yellow';

    }


</script>

