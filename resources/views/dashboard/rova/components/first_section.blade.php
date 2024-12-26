<div class="card mt-4" id="first_section">
    <div class="card-header">
        <h5>@lang('main.first_section')</h5>
    </div>
    <div class="card-body pt-0">
        <form action="{{ route('admin.pages.rova.updateFirstSection') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <div class="avatar-upload border-radius-lg shadow-sm mb-0">
                            <div class="avatar-edit ">
                                <input type='file' id="first_section_image" accept=".png, .jpg, .jpeg"
                                    name="first_section_image" />
                                <label for="first_section_image"><img
                                        src="{{ asset('dashboard/js/plugins/imageUpload/camera.svg') }}"></label>
                            </div>
                            <div class="avatar-preview" style="height: 350px;">
                                <div id="firstSectionImagePreview"
                                    style="background-image: url('{{ $rovaSetting->getFirstSectionImage() }}');">
                                </div>
                            </div>
                        </div>
                        @error('first_section_image')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">@lang('main.title_en')</label>
                            <div class="input-group">
                                <input id="title_en" name="first_section_title_en" class="form-control" type="text"
                                    placeholder="@lang('main.title_en')" required="required"
                                    value="{{ $rovaSetting->first_section_title_en }}">
                            </div>
                            @error('first_section_title_en')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('main.description_en')</label>
                            <div class="input-group">
                                <input id="description_en" name="first_section_description_en" class="form-control"
                                    type="text" placeholder="@lang('main.description_en')" required="required"
                                    value="{{ $rovaSetting->first_section_description_en }}">
                            </div>
                            @error('first_section_description_en')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label">@lang('main.title_ar')</label>
                            <div class="input-group">
                                <input id="title_en" name="first_section_title_ar" class="form-control" type="text"
                                    placeholder="@lang('main.title_ar')" required="required"
                                    value="{{ $rovaSetting->first_section_title_ar }}">
                            </div>
                            @error('first_section_title_ar')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('main.description_ar')</label>
                            <div class="input-group">
                                <input id="description_ar" name="first_section_description_ar" class="form-control"
                                    type="text" placeholder="@lang('main.description_ar')" required="required"
                                    value="{{ $rovaSetting->first_section_description_ar }}">
                            </div>
                            @error('first_section_description_ar')
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

@push('script')
    <script>
        $("#first_section_image").change(function() {
            readURL(this, '#firstSectionImagePreview');
        });
    </script>
@endpush
