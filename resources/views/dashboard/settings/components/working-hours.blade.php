<div class="card mt-4" id="working-hours">
   <div class="card-header">
      <h5>@lang('main.working-hours')</h5>
   </div>
   <div class="card-body pt-0">
      <form action="{{route('admin.web.settings.workingHours')}}" method="POST">
         @csrf
         <div class="row">
            <div class="col-sm-3 col-6">
               <label class="form-label mt-4">@lang('main.start_day')</label>
               <select class="form-control" name="start_day" id="start-day"></select>
               @error('start_day')
               <div class="text text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="col-sm-3 col-6">
               <label class="form-label mt-4">@lang('main.end_day')</label>
               <select class="form-control" name="end_day" id="end-day"></select>
               @error('end_day')
               <div class="text text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="col-sm-3 col-6">
               <label class="form-label mt-4">@lang('main.start_hour')</label>
               <select class="form-control" name="start_hour" id="start-hour">
                  <option @selected($hoursSettings->start_hour == '00:00') value="00:00">00:00</option>
                  <option @selected($hoursSettings->start_hour == '01:00') value="01:00">01:00</option>
                  <option @selected($hoursSettings->start_hour == '02:00') value="02:00">02:00</option>
                  <option @selected($hoursSettings->start_hour == '03:00') value="03:00">03:00</option>
                  <option @selected($hoursSettings->start_hour == '04:00') value="04:00">04:00</option>
                  <option @selected($hoursSettings->start_hour == '05:00') value="05:00">05:00</option>
                  <option @selected($hoursSettings->start_hour == '06:00') value="06:00">06:00</option>
                  <option @selected($hoursSettings->start_hour == '07:00') value="07:00">07:00</option>
                  <option @selected($hoursSettings->start_hour == '08:00') value="08:00">08:00</option>
                  <option @selected($hoursSettings->start_hour == '09:00') value="09:00">09:00</option>
                  <option @selected($hoursSettings->start_hour == '10:00') value="10:00">10:00</option>
                  <option @selected($hoursSettings->start_hour == '11:00') value="11:00">11:00</option>
                  <option @selected($hoursSettings->start_hour == '12:00') value="12:00">12:00</option>
                  <option @selected($hoursSettings->start_hour == '13:00') value="13:00">13:00</option>
                  <option @selected($hoursSettings->start_hour == '14:00') value="14:00">14:00</option>
                  <option @selected($hoursSettings->start_hour == '15:00') value="15:00">15:00</option>
                  <option @selected($hoursSettings->start_hour == '16:00') value="16:00">16:00</option>
                  <option @selected($hoursSettings->start_hour == '17:00') value="17:00">17:00</option>
                  <option @selected($hoursSettings->start_hour == '18:00') value="18:00">18:00</option>
                  <option @selected($hoursSettings->start_hour == '19:00') value="19:00">19:00</option>
                  <option @selected($hoursSettings->start_hour == '20:00') value="20:00">20:00</option>
                  <option @selected($hoursSettings->start_hour == '21:00') value="21:00">21:00</option>
                  <option @selected($hoursSettings->start_hour == '22:00') value="22:00">22:00</option>
                  <option @selected($hoursSettings->start_hour == '23:00') value="23:00">23:00</option>
               </select>
               @error('start_hour')
               <div class="text text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="col-sm-3 col-6">
               <label class="form-label mt-4">@lang('main.end_hour')</label>
               <select class="form-control" name="end_hour" id="end-hour">
                  <option @selected($hoursSettings->end_hour == '00:00') value="00:00">00:00</option>
                  <option @selected($hoursSettings->end_hour == '01:00') value="01:00">01:00</option>
                  <option @selected($hoursSettings->end_hour == '02:00') value="02:00">02:00</option>
                  <option @selected($hoursSettings->end_hour == '03:00') value="03:00">03:00</option>
                  <option @selected($hoursSettings->end_hour == '04:00') value="04:00">04:00</option>
                  <option @selected($hoursSettings->end_hour == '05:00') value="05:00">05:00</option>
                  <option @selected($hoursSettings->end_hour == '06:00') value="06:00">06:00</option>
                  <option @selected($hoursSettings->end_hour == '07:00') value="07:00">07:00</option>
                  <option @selected($hoursSettings->end_hour == '08:00') value="08:00">08:00</option>
                  <option @selected($hoursSettings->end_hour == '09:00') value="09:00">09:00</option>
                  <option @selected($hoursSettings->end_hour == '10:00') value="10:00">10:00</option>
                  <option @selected($hoursSettings->end_hour == '11:00') value="11:00">11:00</option>
                  <option @selected($hoursSettings->end_hour == '12:00') value="12:00">12:00</option>
                  <option @selected($hoursSettings->end_hour == '13:00') value="13:00">13:00</option>
                  <option @selected($hoursSettings->end_hour == '14:00') value="14:00">14:00</option>
                  <option @selected($hoursSettings->end_hour == '15:00') value="15:00">15:00</option>
                  <option @selected($hoursSettings->end_hour == '16:00') value="16:00">16:00</option>
                  <option @selected($hoursSettings->end_hour == '17:00') value="17:00">17:00</option>
                  <option @selected($hoursSettings->end_hour == '18:00') value="18:00">18:00</option>
                  <option @selected($hoursSettings->end_hour == '19:00') value="19:00">19:00</option>
                  <option @selected($hoursSettings->end_hour == '20:00') value="20:00">20:00</option>
                  <option @selected($hoursSettings->end_hour == '21:00') value="21:00">21:00</option>
                  <option @selected($hoursSettings->end_hour == '22:00') value="22:00">22:00</option>
                  <option @selected($hoursSettings->end_hour == '23:00') value="23:00">23:00</option>
               </select>
               @error('end_hour')
               <div class="text text-danger">{{$message}}</div>
               @enderror
            </div>
         </div>
         <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-4 mb-0">@lang('main.update')</button>
      </form>
   </div>
</div>