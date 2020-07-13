      <section class="row align-items-stretch photos" id="section-photos">
        <div class="col-12">
        <div class="row align-items-stretch">

        @php
            $images = App\Photo::all();
            $count = 1;
        @endphp

        @foreach ($images as $image)

        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up"
        @if($count%3 == 2)
             data-aos-delay="100"
        @elseif($count%3 == 0)
             data-aos-delay="200"
        @endif>
          <a href="{{ asset('storage/' . $image->path) }}" class="d-block photo-item" data-fancybox="gallery">
            <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        @php
            $count++;
        @endphp
        @endforeach

      </div>

    </div>
      </section>
