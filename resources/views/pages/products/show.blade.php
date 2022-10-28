@extends('layouts.master')

@section('title', 'Продукт')

@section('content')
  <main class="products-show-page">
    <div class="products-show-page__description sample-wrapper sample-wrapper--dark">
      <h1 class="sample-wrapper__title sample-wrapper__title--big">{{ $data['product']->title }}</h1>
      <div>{!! $data['product']->description !!}</div>
    </div>

    <figure class="products-show-page__product product">
      <div class="product__img-wrapper">
        <img
          class="product__img"
          src="{{ asset('files/products/img/' . $data['product']->photo) }}"
          alt="{{ $data['product']->title }}">
      </div>

      <p class="product__category">{{ $data['product']->prescription }}</p>
      @if ($data['product']->instruction)
        <a
          class="product__download-link"
          href="{{ asset('files/products/instructions/' . $data['product']->instruction) }}"
          target="_blank">Скачать <br>инструкцию</a>
      @endif
    </figure>

    <dl class="products-show-page__info accordion" data-type="accordion">
      @if ($data['product']->composition)
        <dt class="accordion__head accordion__head--hidden">
          <div class="sample-description-term">
            <h3 class="sample-description-term__title">Состав</h3>
            <div class="sample-description-term__subtitle" style="flex-grow: 1;">{!! $data['product']->composition !!}</div>
            <button class="sample-description-term__button dropdown-icon"></button>
          </div>
        </dt>
        <dd class="accordion__body">
          <div class="sample-description-definition">{!! $data['product']->composition !!}</div>
        </dd>
      @endif

      @if ($data['product']->indications)
        <dt class="accordion__head accordion__head--hidden">
          <div class="sample-description-term">
            <h3 class="sample-description-term__title">Показания к применению</h3>
            <div class="sample-description-term__subtitle" style="flex-grow: 1;">{!! $data['product']->indications !!}</div>
            <button class="sample-description-term__button dropdown-icon"></button>
          </div>
        </dt>
        <dd class="accordion__body">
          <div class="sample-description-definition">{!! $data['product']->indications !!}</div>
        </dd>
      @endif

      @if ($data['product']->mode)
        <dt class="accordion__head accordion__head--hidden">
          <div class="sample-description-term">
            <h3 class="sample-description-term__title">Способ применения</h3>
            <div class="sample-description-term__subtitle" style="flex-grow: 1;">{!! $data['product']->mode !!}</div>
            <button class="sample-description-term__button dropdown-icon"></button>
          </div>
        </dt>
        <dd class="accordion__body">
          <div class="sample-description-definition">{!! $data['product']->mode !!}</div>
        </dd>
      @endif
    </dl>

    <section class="products-show-page__similar similar-products">
      <h2 class="similar-products__title sample-title" data-text="products-similar-title">{{ $data['products-similar-title'] }}</h2>

      <div class="glide" data-type="carousel-half">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['similar-products'] as $product)
              <li class="glide__slide">
                <x-product :product="$product" />
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
      </div>
    </section>

    <section class="products-show-page__popular popular-products">
      <h2 class="popular-products__title sample-title" data-text="products-popular-title">{{ $data['products-popular-title'] }}</h2>

      <div class="glide" data-type="carousel">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['popular-products'] as $product)
              <li class="glide__slide">
                <x-product :product="$product" />
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
      </div>

      <a class="popular-products__link red-link" href="{{ route('products.index') }}">Назад ка всем продуктам</a>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/products-show.js') }}" type="module"></script>
@endsection
