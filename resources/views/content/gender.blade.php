<form id="male-form">
    <input type="hidden" name="gender" value="male">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div onclick="$('#male-form').submit()" class="transition-smooth d-flex justify-content-between align-items-center col-12 col-md-5 col-lg-3 mt-2 responsive-div" style="cursor: pointer;">
            <div>
                <p class="float-left m-0 c-text">{{__('messages.male')}}</p>
            </div>
            <div><img src="{{asset('public/assets/img/gender')}}/male.jpg"></div>
        </div>
    </div>
</form>

<form id="female-form">
    <input type="hidden" name="gender" value="female">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div onclick="$('#female-form').submit()" class="transition-smooth d-flex justify-content-between align-items-center col-12 col-md-5 col-lg-3 mt-2 responsive-div" style="cursor: pointer;">
            <div>
                <p class="float-left m-0 c-text">{{__('messages.female')}}</p>
            </div>
            <div><img src="{{asset('public/assets/img/gender')}}/female.jpg"></div>
        </div>
    </div>
</form>