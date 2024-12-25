@if (count($terms))
<div class="questions pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="accordion" id="accordionExample">
               @foreach ($terms as $term)
               <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                  <h2 class="accordion-header" id="heading_{{ $term->id }}">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_{{ $term->id }}"
                        aria-expanded="{{ $loop->iteration == 1 ? 'true':'false'}}"
                        aria-controls="collapse_{{ $term->id }}">
                        {{ $term->title }}
                     </button>
                  </h2>
                  <div id="collapse_{{ $term->id }}"
                     class="accordion-collapse collapse {{ $loop->iteration == 1 ? 'show':''}}"
                     aria-labelledby="heading_{{ $term->id }}" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>{{ $term->body }}</p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@else
<div style="padding: 50px">
   <div class="alert alert-danger text-center">@lang('web.no_terms')</div>
</div>
@endif