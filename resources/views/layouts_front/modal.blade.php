<!-- Start footer -->
<div class="modal">
    <div id="modal-group-1" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body">
                <p class="text-center">من فضلك تسجيل الدخول للاستمرار</p>
            </div>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">الغاء</button>
                <a href="#modal-group-2" class="uk-button uk-button-primary" uk-toggle>تسجيل الدخول</a>
            </div>
        </div>
    </div>

    <div id="modal-group-2" uk-modal>
        <div class="uk-modal-dialog p-5">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body m-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد او رقم الهاتف">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور">
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
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-primary">
                            تمم
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif


                        <a href="#modal-group-3" class="uk-button btn btn-light" uk-toggle> عمل حساب</a>
                    </div>
                </form>
            </div>
            <div class="uk-modal-body m-auto p-5">
                <p class="text-center">او الاستمرار عن طريق </p>
            </div>
        </div>
    </div>

    <div id="modal-group-3" uk-modal>
        <div class="uk-modal-dialog">
            <div class="uk-modal-body m-auto">
                <form>
                    <div class="mb-3">
                        <input type="txt" class="form-control" placeholder="الاسم الاول">
                    </div>
                    <div class="mb-3">
                        <input type="txt" class="form-control" placeholder="الاسم الاخير">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="البريد الالكتروني">
                    </div>
                    <div class="mb-3">
                        <input type="txt" class="form-control" placeholder="رقم الهاتف">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="كلمة المرور">
                    </div>
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-primary">عمل حساب</button>
                    </div>
                </form>
                <div class="uk-modal-body">
                    <p class="text-center">او يمكنك الاستمرار عن طريق</p>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-group-4" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">العنوان</h2>
            </div>
            <div class="uk-modal-body">
                <p>الوصول إلى حاجات معينة، وبعيدة عن مكان السكن الدائم أو بيئة الأعمال أو الحروب، أمّا اصطلاحاً فلم يظهر أي تعريف متفق عليه للسياحة، وفيما يأتي بعض من التعريفات الاصطلاحيّةميع الأشخاص الذين يوجدون في مكانٍ ما.</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <a href="#modal-group-5" class="uk-button uk-button-primary" uk-toggle>Previous</a>
            </div>
        </div>
    </div>

    <div id="modal-group-5" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">العنوان </h2>
            </div>
            <div class="uk-modal-body">
                <p>أجل الوصول إلى حاجات معينة، وبعيدة عن مكان السكن الدائم أو بيئة الأعمال أو الحروب، أمّا اصطلاحاً فلم يظهر أي تعريف متفق عليه للسياحة، وفيما يأتي بعض من التعريفات الاصطلاحيّةميع الأشخاص الذين يوجدون في مكانٍ ما.</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <a href="#modal-group-1" class="uk-button uk-button-primary" uk-toggle>Previous</a>
            </div>
        </div>
    </div>
</div>
