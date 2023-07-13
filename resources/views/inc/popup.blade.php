@section('popup')
<div id="main" class="popup @lang('lang.current')">
   <div class="popup__body">
      <div class="popup__content">
         <div class="popup__loading">
            <img src="{{asset('img/load_100.gif')}}" alt="">
         </div>
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
                        <input name="product" class="product-input" type="hidden" value="">
                        <div class="popup__item">
                           <label for="name">@lang('popup.name')</label>
                           <input id="name" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                           <p class="error-name"></p>
                        </div>
                        <div class="popup__item">
                           <label for="phone">@lang('popup.phone')</label>
                           <input id="phone" name="phone" type="text" placeholder="@lang('popup.phone_placeholder')">
                           <p class="error-phone"></p>
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


<div id="calculate" class="popup @lang('lang.current')">
   <div class="popup__body">
      <div class="popup__content">
         <div class="popup__loading">
            <img src="{{asset('img/load_100.gif')}}" alt="">
         </div>
         <button class="popup__close close-popup"><span></span><span></span></button>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__form-body">
                  <div class="popup__title">
                     <h4>@lang('popup.calculate.title')</h4>
                  </div>
                  <div class="popup__text">
                     <form action="{{route('sendMainForm')}}" method="POST" name="mainForm" id="mainForm"
                        class="@lang('lang.current')">
                        @csrf
                        <input name="product" class="product-input" type="hidden" value="">
                        <div class="popup__colculation">
                           <div class="popup__house">
                              <div class="popup__item">
                                 <label for="area">@lang('popup.calculate.area')</label>
                                 <input id="area" name="area" type="number" step="0.01" required min="20" max="5000">
                                 <p class="error-area"></p>
                              </div>
                              <div class="popup__item">
                                 <label for="people">@lang('popup.calculate.people')</label>
                                 <input id="people" name="people" type="number" required min="0" max="1000">
                                 <p class="error-people"></p>
                              </div>
                           </div>
                           <div class="popup__floor">
                              <p class="popup__floor-question">@lang('popup.calculate.question_floor')</p>
                              <div class="popup__floor-radio">
                                 <div class="popup__floor-radio-item">
                                    <label for="no">@lang('popup.calculate.no')</label>
                                    <input id="no" name="floor" type="radio" value="4" checked>
                                 </div>
                                 <div class="popup__floor-radio-item">
                                    <label for="yes">@lang('popup.calculate.yes')</label>
                                    <input id="yes" name="floor" type="radio" value="4.4">
                                 </div>
                              </div>
                           </div>
                           <div class="popup__cost">
                              <p class="popup__floor-question">@lang('popup.calculate.cost')</p>
                              <div class="popup__cost-body">
                                 <div class="popup__item">
                                    <label for="day">@lang('popup.calculate.day')</label>
                                    <input id="day" name="day" type="number" step="0.01" required min="0.01" max="100">
                                    <p class="error-day"></p>
                                 </div>
                                 <div class="popup__item">
                                    <label for="night">@lang('popup.calculate.night')</label>
                                    <input id="night" name="night" step="0.01" type="number" required min="0.01"
                                       max="100">
                                    <p class="error-night"></p>
                                 </div>
                              </div>
                           </div>
                           <button class="popup__btn calculate-btn" type="button">@lang('popup.calculate.btn')</button>
                           <p class="footnote">@lang('popup.calculate.footnote')</p>
                        </div>
                        <div class="popup__colculation-result">
                           <h2 class="colculation-result-title">@lang('popup.calculate.result.title')</h2>
                           <div class="colculation-result-title-body">
                              <p class="power">@lang('popup.calculate.result.power')</p>
                              <p class="day-price">@lang('popup.calculate.result.day_price')</p>
                              <p class="night-price">@lang('popup.calculate.result.night_price')</p>
                              <p class="mixed-price">@lang('popup.calculate.result.mixed_price')</p>
                           </div>
                           <p class="calculate-lead">@lang('popup.calculate.result.calculate_lead')</p>
                           <div class="popup__item popup__item-result">
                              <div class="result-body-lead">
                                 <label for="resultName">@lang('popup.name')</label>
                                 <input id="resultName" name="name" type="text"
                                    placeholder="@lang('popup.name_placeholder')">
                                 <p class="error-name"></p>
                              </div>
                              <div class="result-body-lead">
                                 <label for="resultPhone">@lang('popup.phone')</label>
                                 <input id="resultPhone" name="phone" type="text"
                                    placeholder="@lang('popup.phone_placeholder')">
                                 <p class="error-phone"></p>
                              </div>
                           </div>
                           <button class="popup__btn" type="submit">@lang('popup.calculate.submit_btn')</button>
                        </div>
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