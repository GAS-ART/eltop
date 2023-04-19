@section('popup')
<div id="main" class="popup sent">
   <div class="popup__send-load">

   </div>
   <div class="popup__body">
      <div class="popup__content">
         <button class="popup__close close-popup"><span></span><span></span></button>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__form-body">
                  <div class="popup__title">
                     <h4>@lang('popup.title')</h4>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm"
                        class="@lang('lang.current')">
                        @csrf
                        <div class="popup__item">
                           <label for="name">@lang('popup.name')</label>
                           <input id="name" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name error"></p>
                        </div>
                        <div class="popup__item">
                           <label for="phone">@lang('popup.phone')</label>
                           <input id="phone" name="phone" type="text" placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone error"></p>
                        </div>
                        <button class="popup__btn" type="submit">@lang('popup.btn')</button>
                     </form>
                  </div>
               </div>
               <div class="success">
                  <h4>@lang('popup.success.title')</h4>
                  <button class="popup__button">
                     @lang('popup.success.btn')
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>