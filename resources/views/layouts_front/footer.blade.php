<footer>
    <?php $footer = getFooter(); ?>
    <div class="container p-5 ">
        <div class="row pt-5 position-relative">
            <div class="col-lg-3 col-md-12">
                <img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}" alt="">
                <p class="uk-text-bolder txt-size-18">{{$footer->description}}</p>
            </div>
            <div class="col-lg-3 col-md-7">
                <h3 class="uk-text-bolder txt-size-24">{{trans('front_footer.address')}}</h3>
                <p class="uk-text-bolder txt-size-18">{{$footer->address}}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="uk-text-bolder txt-size-24">{{trans('front_footer.email')}}</h3>
                <p class="uk-text-bolder txt-size-18">{{$footer->email1}}</p>
                <p class="uk-text-bolder txt-size-18">{{$footer->email2}}</p>

            </div>
            <div class="col-lg-3 col-md-6">
                @if(auth()->id() == null)     <h3 class="uk-text-bolder txt-size-24">  {{trans('front_footer.join_us')}} </h3>@endif
                @foreach(json_decode($footer->phone) as $phone)
                <p class="m-0 p-0 uk-text-bolder txt-size-18">{{$phone}}</p>
                    @endforeach
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<script src="{{asset('assets/js_front/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js_front/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js_front/main.js')}}"></script>
<script src="{{asset('assets/js_front/popper.min.js')}}"></script>
<script src="{{asset('assets/js_front/uikit.min.js')}}"></script>
</body>

</html>


