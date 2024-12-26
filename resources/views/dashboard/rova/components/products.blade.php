<div class="card mt-4" id="first_section">
    <div class="card-header">
        <h5>@lang('main.products')</h5>
    </div>
    <div class="card-body pt-0">
        <form action="{{ route('admin.pages.rova.updateProducts') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">@lang('main.title_en')</label>
                            <div class="input-group">
                                <input id="title_en" name="products_title_en" class="form-control" type="text"
                                    placeholder="@lang('main.title_en')" required="required"
                                    value="{{ $rovaSetting->products_title_en }}">
                            </div>
                            @error('products_title_en')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('main.description_en')</label>
                            <div class="input-group">
                                <input id="description_en" name="products_description_en" class="form-control"
                                    type="text" placeholder="@lang('main.description_en')" required="required"
                                    value="{{ $rovaSetting->products_description_en }}">
                            </div>
                            @error('products_description_en')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">@lang('main.title_ar')</label>
                            <div class="input-group">
                                <input id="title_en" name="products_title_ar" class="form-control" type="text"
                                    placeholder="@lang('main.title_ar')" required="required"
                                    value="{{ $rovaSetting->products_title_ar }}">
                            </div>
                            @error('products_title_ar')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('main.description_ar')</label>
                            <div class="input-group">
                                <input id="description_ar" name="products_description_ar" class="form-control"
                                    type="text" placeholder="@lang('main.description_ar')" required="required"
                                    value="{{ $rovaSetting->products_description_ar }}">
                            </div>
                            @error('products_description_ar')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="btn bg-gradient-dark btn-sm rtl float-end mt-3 mb-0">@lang('main.update')</button>
        </form>
    </div>
</div>
