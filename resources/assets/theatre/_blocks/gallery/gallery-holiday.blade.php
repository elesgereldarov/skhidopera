<section class="gallery row" data-gallery-slider data-gallery>
    @foreach($block->getMedia('album-images') as $image)

        <div class="col col-sm-6 col-xl-3 gallery__img">
            <a href="{{ $image->getUrl('') }}" class="gallery__link" data-fancybox="gallery">
                <img src="{{ $image->getUrl('preview') }}">
            </a>
        </div>
    @endforeach
</section>
