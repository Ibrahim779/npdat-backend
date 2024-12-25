<div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button {{$active ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne_{{$id}}" aria-expanded="{{$active}}" aria-controls="collapseOne_{{$id}}">
            {{$title}}
        </button>
    </h2>
    <div id="collapseOne_{{$id}}" class="accordion-collapse collapse {{$active ? 'show' : ''}}"
        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>{{$desc}}</p>
        </div>
    </div>
</div>