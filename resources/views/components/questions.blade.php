@if ($questions->count())
<div {{ $attributes->merge(['class' => 'questions pb-120']) }}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="title-sec mb-30">
                    <h3 class="main-color">الأسئلة الشائعة</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="accordion" id="accordionExample">
                    @foreach ($questions as $question)
                    <x-question id="{{ $question->id }}" title="{{ $question->question }}"
                        desc="{{ $question->answer }}" :active="true" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div style="padding: 50px">
    <div class="alert alert-danger text-center">@lang('web.no_questions')</div>
</div>
@endif