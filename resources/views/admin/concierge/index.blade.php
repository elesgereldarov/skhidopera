@extends('layouts.concierge')
@section('content')

<div class="concierge" id="concierge" data-concierge>
  <header class="header">
    <p class="header__logo">
      <img src="/design/img/logo/logo.svg" alt="Логотип">
    </p>
  </header>
  <div class="concierge__container">
    <div class="concierge__current-time">
      <p>Дата:&nbsp;<span data-current-date></span></p>
      <p>Час:&nbsp;<span data-current-time></span></p>
    </div>
    <p class="concierge__title">Оберіть виступ зі списку:</p>
    <ol class="events-list visible" data-event-list>
      @foreach($events as $event)
        <li><a href="#" data-title="{{ $event->performance->translate->title }}" data-time="{{ $event->getFormatTime() }}" data-date="{{ $event->getFormatDate() }}" data-id="{{ $event->id }}" data-hall="{{ $event->performance->hall->translate->title }}">{{ $event->performance->translate->title }} - {{ $event->getFormatTime() }}</a></li>
      @endforeach
    </ol>
    <div class="concierge__event event" data-event-block>
      <h1 class="event__title" data-event-title>Мазепа</h1>
      <p>Дата початку:&nbsp;<span data-event-date>27.12.18</span></p>
      <p>Час початку:&nbsp;<span data-event-time>18:30</span></p>
      <p><span data-event-hall>Большой зал</span></p>
      <form class="event__form" action="" method="GET" data-form>
        <input class="event__input" type="text" required="" autofocus data-ticket-code>
        <button class="event__submit" tupe="submit">Контроль</button>
      </form>
    </div>
  </div>
  <div class="concierge__btns concierge__btns">
    <a href="/admin/concierge" class="" data-btn-back>Повернутися до вибору виступу
      <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 511.63 511.631">
        <path d="M496.5,233.842c-30.841-76.706-114.112-115.06-249.823-115.06h-63.953V45.693c0-4.952-1.809-9.235-5.424-12.85c-3.617-3.617-7.896-5.426-12.847-5.426c-4.952,0-9.235,1.809-12.85,5.426L5.424,179.021C1.809,182.641,0,186.922,0,191.871c0,4.948,1.809,9.229,5.424,12.847L151.604,350.9c3.619,3.613,7.902,5.428,12.85,5.428c4.947,0,9.229-1.814,12.847-5.428c3.616-3.614,5.424-7.898,5.424-12.848v-73.094h63.953c18.649,0,35.349,0.568,50.099,1.708c14.749,1.143,29.413,3.189,43.968,6.143c14.564,2.95,27.224,6.991,37.979,12.135c10.753,5.144,20.794,11.756,30.122,19.842c9.329,8.094,16.943,17.7,22.847,28.839c5.896,11.136,10.513,24.311,13.846,39.539c3.326,15.229,4.997,32.456,4.997,51.675c0,10.466-0.479,22.176-1.428,35.118c0,1.137-0.236,3.375-0.715,6.708c-0.473,3.333-0.712,5.852-0.712,7.562c0,2.851,0.808,5.232,2.423,7.136c1.622,1.902,3.86,2.851,6.714,2.851c3.046,0,5.708-1.615,7.994-4.853c1.328-1.711,2.561-3.806,3.71-6.283c1.143-2.471,2.43-5.325,3.854-8.562c1.431-3.237,2.43-5.513,2.998-6.848c24.17-54.238,36.258-97.158,36.258-128.756C511.63,291.039,506.589,259.344,496.5,233.842z"/>
      </svg>
    </a>
    <a href="/admin/dashboard" class="visible">Вихід
      <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 447.674 447.674">
        <path d="M182.725,379.151c-0.572-1.522-0.769-2.816-0.575-3.863c0.193-1.04-0.472-1.902-1.997-2.566c-1.525-0.664-2.286-1.191-2.286-1.567c0-0.38-1.093-0.667-3.284-0.855c-2.19-0.191-3.283-0.288-3.283-0.288h-3.71h-3.14H82.224c-12.562,0-23.317-4.469-32.264-13.421c-8.945-8.946-13.417-19.698-13.417-32.258V123.335c0-12.562,4.471-23.313,13.417-32.259c8.947-8.947,19.702-13.422,32.264-13.422h91.361c2.475,0,4.421-0.614,5.852-1.854c1.425-1.237,2.375-3.094,2.853-5.568c0.476-2.474,0.763-4.708,0.859-6.707c0.094-1.997,0.048-4.521-0.144-7.566c-0.189-3.044-0.284-4.947-0.284-5.712c0-2.474-0.905-4.611-2.712-6.423c-1.809-1.804-3.949-2.709-6.423-2.709H82.224c-22.648,0-42.016,8.042-58.101,24.125C8.042,81.323,0,100.688,0,123.338v200.994c0,22.648,8.042,42.018,24.123,58.095c16.085,16.091,35.453,24.133,58.101,24.133h91.365c2.475,0,4.422-0.622,5.852-1.854c1.425-1.239,2.375-3.094,2.853-5.571c0.476-2.471,0.763-4.716,0.859-6.707c0.094-1.999,0.048-4.518-0.144-7.563C182.818,381.817,182.725,379.915,182.725,379.151z"/>
        <path d="M442.249,210.989L286.935,55.67c-3.614-3.612-7.898-5.424-12.847-5.424c-4.949,0-9.233,1.812-12.851,5.424c-3.617,3.617-5.424,7.904-5.424,12.85v82.226H127.907c-4.952,0-9.233,1.812-12.85,5.424c-3.617,3.617-5.424,7.901-5.424,12.85v109.636c0,4.948,1.807,9.232,5.424,12.847c3.621,3.61,7.901,5.427,12.85,5.427h127.907v82.225c0,4.945,1.807,9.233,5.424,12.847c3.617,3.617,7.901,5.428,12.851,5.428c4.948,0,9.232-1.811,12.847-5.428L442.249,236.69c3.617-3.62,5.425-7.898,5.425-12.848C447.674,218.894,445.866,214.606,442.249,210.989z"/>
      </svg>
    </a>
  </div>
</div>

@endsection
