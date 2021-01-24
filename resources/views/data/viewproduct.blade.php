@extends('layouts.master')
@section('extracss')

<link rel="stylesheet" href="{{asset('Page-1.css')}}" media="screen">
@endsection
@section('content')



    <section class="u-clearfix u-grey-10 u-section-1" id="sec-4b48">
      <div class="u-clearfix u-sheet u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-product-1">
          <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1"><!--product_gallery-->
            <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-right u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-3c55">
              <div class="u-carousel-inner u-gallery-inner" role="listbox"><!--product_gallery_item-->
                <div class="active u-active u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="{{asset('images/'.$data->image)}}">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">{{$data->name}}</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item--><!--product_gallery_item-->
                <div class="u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="{{asset('images/'.$data->image)}}">
                  </div>
                  <div class="u-over-slide u-over-slide-2">
                    <h3 class="u-gallery-heading">{{$data->name}}</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item-->
              </div>
              <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-grey-60 u-text-hover-grey-75 u-white u-carousel-control-1" href="#carousel-3c55" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
              </a>
              <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-grey-60 u-text-hover-grey-75 u-white u-carousel-control-2" href="#carousel-3c55" role="button" data-u-slide="next">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
              </a>
              <ol class="u-carousel-thumbnails u-spacing-20 u-vertical-spacing u-carousel-thumbnails-1"><!--product_gallery_thumbnail-->
                <li class="u-active u-carousel-thumbnail" data-u-target="#carousel-3c55" data-u-slide-to="0" style="width: 100px; height: 100px;">
                  <img class="u-carousel-thumbnail-image u-image" src="{{asset('images/'.$data->image)}}">
                </li><!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
                <li class="u-carousel-thumbnail" data-u-target="#carousel-3c55" data-u-slide-to="1" style="width: 100px; height: 100px;">
                  <img class="u-carousel-thumbnail-image u-image" src="{{asset('images/'.$data->image)}}">
                </li><!--/product_gallery_thumbnail-->
              </ol>
            </div><!--/product_gallery--><!--product_title-->
            <h2 class="u-product-control u-text u-text-1">
              <a class="u-product-title-link" href="#"><!--product_title_content-->{{$data->name}}<!--/product_title_content--></a>
            </h2><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-hide-price u-old-price" style="text-decoration: line-through !important;"><!--product_old_price_content-->KES {{number_format($data->price)}}<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;"><!--product_regular_price_content-->KES {{number_format($data->price)}}<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div>
            {!! Form::open(['method'=> 'post','url' => 'product-buy' ,'files' => true]) !!}

            <input type="hidden" name="product_id" value="{{$data->id}}">
            <input type="hidden" name="total" value="{{$data->price}}">
            <div class="u-product-control u-product-variations u-product-variations-1"><!--product_variation-->
              <div class="u-product-variant">
                <label for="product-variant-select-1" class="u-label"><!--product_variation_label_content-->Customer Name<!--/product_variation_label_content--></label>
                <div class="u-form-select-wrapper">
                  
                  <input type="text" readonly="" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white" value="{{Auth::user()->name}}" readonly="" name="name">
                </div>
              </div><!--/product_variation-->
            </div><!--/product_price--><!--product_variations-->
            <div class="u-product-control u-product-variations u-product-variations-1"><!--product_variation-->
              <div class="u-product-variant">
                <label for="product-variant-select-1" class="u-label"><!--product_variation_label_content-->Size<!--/product_variation_label_content--></label>
                <div class="u-form-select-wrapper">
                  <select id="product-variant-select-1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white" required="" name="loantype"><!--product_variation_option-->
                  	<option value="">Select Payment Option</option>
                
                	@if(!empty($loan))
                	@foreach($loan as $l)
                		<option value="{{$l->name}}">{{$l->name}} Loan @ {{$l->interest}}% for {{$l->period}} Month(s)</option>
                	@endforeach
                	@endif
                		<option value="pays">I dont Need Financing</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
              </div><!--/product_variation-->

              <br>

               <button  type="submit" class="u-border-1 u-border-grey-9 u-input u-input-rectangle u-radius-6 u-black">Submit </button>
            </div>


    {!!Form::close()!!}<!--/product_variations--><!--product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p>{{$data->desc}}.</p><!--/product_content_content-->
            </div><!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->

          
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
@endsection