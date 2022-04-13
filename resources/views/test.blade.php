<div class="form-row">
    <div class="col">
        <label for="third_p_ar">{{trans('Teacher_trans.third_p_ar')}}</label>
        <input type="text"  value="{{ $new->getTranslation('third_p', 'ar') }}"  name="third_p_ar" class="form-control">
        @error('third_p_ar')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="col">
        <label for="third_p_en">{{trans('Teacher_trans.third_p_en')}}</label>
        <input type="text"  value="{{ $new->getTranslation('third_p', 'en') }}"   name="third_p_en" class="form-control">
        @error('third_p_en')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="col">
        <label for="third_p_ru">{{trans('Teacher_trans.third_p_ru')}}</label>
        <input type="text"  value="{{ $new->getTranslation('third_p', 'ru') }}"  name="third_p_ru" class="form-control">
        @error('third_p_ru')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

</div>
<br>
