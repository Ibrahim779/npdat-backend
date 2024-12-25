<div class="card mt-4" id="counter_section">
    <div class="card-header">
        <h5>@lang('main.counter_section')</h5>
    </div>
    <div class="card-body pt-0">
        <form action="{{ route('admin.pages.about.updateIcons') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">@lang('main.counter_num', ['num' => $i])</label>
                            <div class="input-group">
                                <input rows="5" id="num" name="counter_{{ $i }}_num"
                                    class="form-control" type="text" placeholder="@lang('main.counter_num', ['num' => $i])"
                                    required="required" value="{{ $aboutSetting->{'counter_' . $i . '_num'} }}" />
                            </div>
                            @error('counter_{{ $i }}_num')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">@lang('main.counter_title_en', ['num' => $i])</label>
                            <div class="input-group">
                                <input id="title_en" name="counter_{{ $i }}_title_en" class="form-control"
                                    type="text" placeholder="@lang('main.counter_title_en', ['num' => $i])" required="required"
                                    value="{{ $aboutSetting->{'counter_' . $i . '_title_en'} }}">
                            </div>
                            @error('counter_{{ $i }}_title_en')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="form-label">@lang('main.counter_title_ar', ['num' => $i])</label>
                            <div class="input-group">
                                <input id="title_ar" name="counter_{{ $i }}_title_ar" class="form-control"
                                    type="text" placeholder="@lang('main.counter_title_ar', ['num' => $i])" required="required"
                                    value="{{ $aboutSetting->{'counter_' . $i . '_title_ar'} }}">
                            </div>
                            @error('counter_{{ $i }}_title_ar')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                @endfor

            </div>
            <button type="submit"
                class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
        </form>
    </div>
</div>
