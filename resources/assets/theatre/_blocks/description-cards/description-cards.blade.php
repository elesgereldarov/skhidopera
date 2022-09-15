<section class="description-cards" name="description" data-replace-social-share>
  <h2 class="description-cards__sect-title {{ (isset($titleGold)) ? 'description-cards__sect-title--gold' : '' }}">
     {{ $title ?? '' }}
    {{--{!! ($type === 'performances') ? '' : '<time datetime="' . Date::parse($item->created_at)->format('Y-F-d') . '" class="description-cards__pubdate">' . Date::parse($item->created_at)->format('d F Y') . '</time>' !!}--}}
    @if ($type === 'performances') {{ '' }}
    @elseif ($type === 'articles') {{ '' }}
    @else {!! '<time datetime="' . Date::parse($item->created_at)->format('Y-F-d') . '" class="description-cards__pubdate">' . Date::parse($item->created_at)->format('d F Y') . '</time>' !!}
    @endif
    {!! ($date === true) ?  '<time datetime="' . Date::parse($item->created_at)->format('Y-F-d') . '" class="description-cards__pubdate">' . Date::parse($item->created_at)->format('d F Y') . '</time>' : '' !!}
  </h2>
  <div class="description-cards__list">
    <div class="description-cards__item row" data-texttoggle-container>
        <div class="col col-12 col-md-4 col-xl-4 description-cards__info" data-info="" data-texttoggle-model="">
        @if($media = $item->getFirstMedia('posters'))
            <figure class="description-cards__img">
                <img src="{{ $media->getUrl('preview') }}" alt="{{ $item->translate->title }}">
            </figure>
        @endif
        </div>
      <div class="col col-12 col-md-8 col-xl-8 description-cards__about">
        <div class="description-cards__descr">
          {!! $item->translate->descriptions !!}
          @include('pages.theatre._blocks.btn-toggle.btn-toggle')
        </div>
        <div class="description-cards__links">
          @if(isset($item->translate->synapsis) && $item->translate->synapsis !== '')
            <a href="{{ route('front.events.synopsis', ['id' => $item->id, 'slug' => $item->translate->slug]) }}" class="btn-more-link btn-more-link--fz18" data-more-btn>{{ __('event.synopsis') }}</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

