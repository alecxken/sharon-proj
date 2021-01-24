@extends('layouts.master')
@section('extracss')

<link rel="stylesheet" href="{{asset('Home.css')}}" media="screen">
@endsection
@section('content')
    <section class="u-clearfix u-gradient u-section-1" id="carousel_9032">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-963b" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-963b" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-963b" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="height: 10px; width: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-top-xs u-container-layout-1">
                <img src="images/medium-shot-man-holding-laptop_23-2148582973.jpg" alt="" class="u-image u-image-default u-image-1">
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-1">Online Courses</h2>
                    <p class="u-text u-text-2">Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum posuere urna nec tincidunt praesent semper. </p>
                    <p class="u-text u-text-3">Image from <a href="https://freepik.com/photos/people" class="u-active-none u-border-1 u-border-black u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1">Freepik</a>
                    </p>
                    <a href="https://nicepage.com/web-design" class="u-btn u-button-style u-white u-btn-2">read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-top-xs u-container-layout-3">
                <img src="images/ghjj.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="800" data-image-height="800">
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-2">
                  <div class="u-container-layout u-valign-middle u-container-layout-4">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-4">Learn and Travel</h2>
                    <p class="u-text u-text-5">Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum posuere urna nec tincidunt praesent semper. </p>
                    <p class="u-text u-text-6">Image from <a href="https://freepik.com/photos/people" class="u-active-none u-border-1 u-border-black u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-3">Freepik</a>
                    </p>
                    <a href="https://nicepage.com/css-templates" class="u-btn u-button-style u-white u-btn-4">read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-opacity u-opacity-70 u-palette-3-base u-spacing-15 u-text-body-color u-carousel-control-1" href="#carousel-963b" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-opacity u-opacity-70 u-palette-3-base u-spacing-15 u-text-body-color u-carousel-control-2" href="#carousel-963b" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-15 u-section-2" id="carousel_db0c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-text u-text-palette-1-dark-2 u-text-1">Limited-Time Offers</h2>
        <div class="u-expanded-width u-list u-repeater u-list-1">

            @php $data = \App\Models\Product::all(); @endphp
                @if(!empty($data))
                   @foreach ($data as $key => $user)
          <div class="u-container-style u-list-item u-palette-5-light-2 u-radius-10 u-repeater-item u-shape-round u-video-cover u-list-item-{{$key}}" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('images/'.$user->image)}}" data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
              <div class="u-align-center u-container-style u-expanded-width u-group u-group-1">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h4 class="u-custom-font u-font-oswald u-text u-text-2">{{$user->name}}</h4>
                  <h6 class="u-text u-text-3">Ksh{{number_format($user->price)}}</h6>
                  <a href="{{url('buy-prod/'.$user->id)}}" class="u-btn u-btn-round u-button-style u-hover-custom-color-3 u-palette-1-dark-1 u-radius-6 u-btn-1">Get product</a>
                </div>
              </div>
            </div>
          </div>
             @endforeach
          @endif<!--/product_item--><!--product_item-->
         <!--  <div class="u-align-center u-container-style u-list-item u-palette-5-light-2 u-radius-10 u-repeater-item u-shape-round u-video-cover u-list-item-2" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-2" src="images/t.jpg" data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
              <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-2">
                <div class="u-container-layout u-valign-top u-container-layout-4">
                  <h4 class="u-custom-font u-font-oswald u-text u-text-4">Women Dress</h4>
                  <h6 class="u-text u-text-5">$60.00</h6>
                  <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-hover-custom-color-3 u-palette-1-dark-1 u-radius-6 u-btn-2">add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-palette-5-light-2 u-radius-10 u-repeater-item u-shape-round u-video-cover u-list-item-3" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3" src="images/sdsee.jpg" data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
              <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-3">
                <div class="u-container-layout u-valign-top u-container-layout-6">
                  <h4 class="u-custom-font u-font-oswald u-text u-text-6">Women Cotton Top</h4>
                  <h6 class="u-text u-text-7">$17.00</h6>
                  <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-hover-custom-color-3 u-palette-1-dark-1 u-radius-6 u-btn-3">add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-palette-5-light-2 u-radius-10 u-repeater-item u-shape-round u-video-cover u-list-item-4" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-4" src="images/erw.jpg" data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
              <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-4">
                <div class="u-container-layout u-valign-top u-container-layout-8">
                  <h4 class="u-custom-font u-font-oswald u-text u-text-8">Summer Dress</h4>
                  <h6 class="u-text u-text-9">$23.00</h6>
                  <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-hover-custom-color-3 u-palette-1-dark-1 u-radius-6 u-btn-4">add to cart</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
    <!--     <p class="u-text u-text-default u-text-10">Images from <a href="https://www.freepik.com/free-photos-vectors/people" target="_blank">Freepik</a>
        </p> -->
      </div>
    </section>
    <section class="u-align-left u-clearfix u-image u-section-3" id="carousel_f87a">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h5 class="u-text u-text-1">about</h5>
            <h2 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Unique Creative Studio Features</h2>
            <p class="u-text u-text-body-alt-color u-text-3">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo. </p>
            <p class="u-text u-text-body-alt-color u-text-4">Images from <a href="https://www.freepik.com/vectors/background" class="u-active-none u-border-1 u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" target="_blank">Freepik</a>
            </p>
            <a href="https://nicepage.com/website-design" class="u-btn u-btn-round u-button-style u-hover-palette-3-base u-palette-2-base u-radius-50 u-btn-2">learn more</a>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-20 u-size-30-md u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-30-md u-white u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-3"><span class="u-icon u-icon-circle u-palette-2-base u-spacing-16 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5227"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-5227" style="enable-background:new 0 0 512 512;"><g><g><circle cx="337.921" cy="236" r="10"></circle>
</g>
</g><g><g><path d="M339.637,278.848c-5.459-0.811-10.548,2.964-11.357,8.427c-2.733,18.455-18.333,33.761-41.729,40.945    c-25.007,7.679-59.718,5.105-80.893-17.954c-3.736-4.068-10.062-4.336-14.129-0.602c-4.068,3.736-4.337,10.062-0.602,14.129    c12.258,13.349,28.907,22.447,48.147,26.31c6.794,1.364,13.842,2.041,20.936,2.041c10.958,0,22.024-1.615,32.412-4.805    c30.95-9.503,51.751-30.861,55.642-57.134C348.873,284.742,345.1,279.657,339.637,278.848z"></path>
</g>
</g><g><g><path d="M478.626,190.411c-18.176-21.071-43.262-34.733-73.458-40.22c28.91-19.51,53.846-38.926,71.626-55.868    c27.109-25.831,36.199-43.983,28.609-57.122c-8.446-14.634-32.827-14.533-76.733,0.321    c-37.097,12.55-83.311,34.347-130.127,61.377c-8.087,4.668-16.098,9.448-23.936,14.265c-5.813-16.417-1.979-35.17,10.847-51.431    c9.607-12.18,11.752-27.65,5.599-40.375C284.603,8.021,270.447,0.036,253.162,0h-0.47c-61.006,0-120.677,24.071-168.02,67.779    C37.27,111.541,8.25,169.473,2.958,230.902c-6.367,73.98,17.281,144.314,66.586,198.045C117.978,481.729,186.643,512,257.932,512    c38.38,0,74.41-7.022,107.087-20.873c29.88-12.665,56.414-30.749,78.866-53.752c20.817-21.329,37.23-45.882,48.783-72.979    c10.994-25.784,17-53.108,17.372-79.017C510.581,247.701,499.718,214.862,478.626,190.411z M275.776,135.988    c10.584-6.675,21.607-13.326,32.766-19.768c43.286-24.992,86.39-45.577,121.373-57.964c38.51-13.635,54.277-12.745,57.953-10.985    c-0.318,2.327-3.208,12.68-28.479,35.952c-21.102,19.433-51.917,42.286-86.768,64.349c-11.017,6.977-22.483,13.911-34.078,20.607    c-15.985,9.226-31.958,17.853-47.635,25.752c-3.128-9.129-7.137-17.988-12.016-26.44c-4.729-8.191-10.214-15.881-16.345-22.996    C266.886,141.651,271.301,138.807,275.776,135.988z M272.79,202.802c-28.237,13.391-54.147,23.6-74.838,29.522    c-1.077-5.173-2.971-10.173-5.658-14.831c-2.547-4.415-5.742-8.362-9.435-11.766c15.49-14.949,37.292-32.269,62.964-49.988    c5.96,6.661,11.244,13.947,15.749,21.75C266.231,185.559,269.981,194.047,272.79,202.802z M490.042,285.092    C488.616,384.6,399.469,492,257.932,492c-65.702,0-128.995-27.91-173.651-76.574c-45.473-49.554-67.276-114.477-61.396-182.808    C32.984,115.38,136.075,20,252.692,20h0.449c9.567,0.02,16.823,3.688,19.906,10.065c2.835,5.862,1.603,13.07-3.297,19.282    c-18.023,22.85-22.543,50.953-12.36,74.648c-5.361,3.454-10.63,6.923-15.721,10.364c-0.024,0.016-0.048,0.032-0.071,0.048    c-31.799,21.457-58.651,42.8-76.517,60.761c-13.55-4.631-28.438-3.281-41.092,4.023c-20.776,12.001-48.056,67.926-53.313,79.015    c-1.408,2.968-1.267,6.439,0.375,9.284c1.643,2.845,4.578,4.702,7.852,4.968c5.527,0.448,21.222,1.58,38.691,1.58    c21.198,0,45.006-1.668,56.396-8.247c12.338-7.122,20.89-19.022,23.852-32.702c24.523-6.437,56.564-19.03,91.266-35.937    c19.443-9.463,39.439-20.112,59.435-31.652c10.143-5.858,20.171-11.897,29.917-17.988c0.059,0.003,0.116,0.012,0.175,0.014    C461.984,169.916,490.835,229.824,490.042,285.092z M178.942,244.37c-0.64,10.057-6.228,19.065-14.952,24.101    c-9.457,5.463-41.945,6.199-68.62,4.979c12.275-23.704,29.154-51.47,38.621-56.938c8.938-5.16,19.744-5.386,28.912-0.603    c5.039,2.624,9.211,6.627,12.067,11.578C177.941,232.637,179.314,238.475,178.942,244.37z"></path>
</g>
</g><g><g><path d="M177.922,61.84c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40    C217.922,79.784,199.978,61.84,177.922,61.84z M177.922,121.84c-11.028,0-20-8.972-20-20c0-11.028,8.972-20,20-20s20,8.972,20,20    C197.922,112.868,188.95,121.84,177.922,121.84z"></path>
</g>
</g><g><g><path d="M127.922,330.55c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40    C167.922,348.494,149.978,330.55,127.922,330.55z M127.922,390.55c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20    S138.95,390.55,127.922,390.55z"></path>
</g>
</g><g><g><path d="M227.922,390.55c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40    C267.922,408.494,249.978,390.55,227.922,390.55z M227.922,450.55c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20    S238.95,450.55,227.922,450.55z"></path>
</g>
</g><g><g><path d="M347.922,370.55c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40    C387.922,388.494,369.978,370.55,347.922,370.55z M347.922,430.55c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20    S358.95,430.55,347.922,430.55z"></path>
</g>
</g><g><g><path d="M427.922,270.55c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40    C467.922,288.494,449.978,270.55,427.922,270.55z M427.922,330.55c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20    S438.95,330.55,427.922,330.55z"></path>
</g>
</g></svg></span>
                      <h4 class="u-custom-font u-font-oswald u-text u-text-5">Premium Design</h4>
                      <p class="u-text u-text-grey-50 u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-60-md u-white u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-4"><span class="u-icon u-icon-circle u-palette-4-base u-spacing-16 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1bd0"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-1bd0" style="enable-background:new 0 0 60 60;"><path d="M56.99,13.5H55v-3H45v3h-4V7.706C41,5.938,39.562,4.5,37.794,4.5H22.206C20.438,4.5,19,5.938,19,7.706V13.5h-4v-3H5v3H3.01  C1.351,13.5,0,14.851,0,16.51v35.98c0,1.659,1.351,3.01,3.01,3.01h53.98c1.659,0,3.01-1.351,3.01-3.01V16.51  C60,14.851,58.649,13.5,56.99,13.5z M47,12.5h6v1h-6V12.5z M21,7.706C21,7.041,21.541,6.5,22.206,6.5h15.588  C38.459,6.5,39,7.041,39,7.706V13.5H21V7.706z M19,15.5h22h4h5v38H10v-38h5H19z M7,12.5h6v1H7V12.5z M2,52.49V16.51  c0-0.557,0.453-1.01,1.01-1.01H5h3v38H3.01C2.453,53.5,2,53.047,2,52.49z M58,52.49c0,0.557-0.453,1.01-1.01,1.01H52v-38h3h1.99  c0.557,0,1.01,0.453,1.01,1.01V52.49z"></path></svg></span>
                      <h4 class="u-custom-font u-font-oswald u-text u-text-7">Unique Strategy</h4>
                      <p class="u-text u-text-grey-50 u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-white u-layout-cell-4">
                    <div class="u-container-layout u-valign-middle u-container-layout-5"><span class="u-icon u-icon-circle u-palette-1-base u-spacing-16 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2410"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-2410" style="enable-background:new 0 0 60 60;"><g><path d="M55.201,15.5h-8.524l-4-10H17.323l-4,10H12v-5H6v5H4.799C2.152,15.5,0,17.652,0,20.299v29.368
        C0,52.332,2.168,54.5,4.833,54.5h50.334c2.665,0,4.833-2.168,4.833-4.833V20.299C60,17.652,57.848,15.5,55.201,15.5z M8,12.5h2v3H8
        V12.5z M58,49.667c0,1.563-1.271,2.833-2.833,2.833H4.833C3.271,52.5,2,51.229,2,49.667V20.299C2,18.756,3.256,17.5,4.799,17.5H6h6
        h2.677l4-10h22.646l4,10h9.878c1.543,0,2.799,1.256,2.799,2.799V49.667z"></path><path d="M30,14.5c-9.925,0-18,8.075-18,18s8.075,18,18,18s18-8.075,18-18S39.925,14.5,30,14.5z M30,48.5c-8.822,0-16-7.178-16-16
        s7.178-16,16-16s16,7.178,16,16S38.822,48.5,30,48.5z"></path><path d="M30,20.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S36.617,20.5,30,20.5z M30,42.5c-5.514,0-10-4.486-10-10
        s4.486-10,10-10s10,4.486,10,10S35.514,42.5,30,42.5z"></path><path d="M52,19.5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S54.206,19.5,52,19.5z M52,25.5c-1.103,0-2-0.897-2-2s0.897-2,2-2
        s2,0.897,2,2S53.103,25.5,52,25.5z"></path>
</g></svg></span>
                      <h4 class="u-custom-font u-font-oswald u-text u-text-9">Amazing Photography</h4>
                      <p class="u-text u-text-grey-50 u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-white u-layout-cell-5">
                    <div class="u-container-layout u-valign-middle u-container-layout-6"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-16 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-aae8"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 54 54" x="0px" y="0px" id="svg-aae8" style="enable-background:new 0 0 54 54;"><g><path d="M27,8c-9.374,0-17,7.626-17,17c0,7.112,4.391,13.412,11,15.9V50c0,0.553,0.447,1,1,1h1v2c0,0.553,0.447,1,1,1h6
        c0.553,0,1-0.447,1-1v-2h1c0.553,0,1-0.447,1-1v-9.1c6.609-2.488,11-8.788,11-15.9C44,15.626,36.374,8,27,8z M30,49
        c-0.553,0-1,0.447-1,1v2h-4v-2c0-0.553-0.447-1-1-1h-1v-5h8v5H30z M31.688,39.242C31.277,39.377,31,39.761,31,40.192V42h-8v-1.808
        c0-0.432-0.277-0.815-0.688-0.95C16.145,37.214,12,31.49,12,25c0-8.271,6.729-15,15-15s15,6.729,15,15
        C42,31.49,37.855,37.214,31.688,39.242z"></path><path d="M27,6c0.553,0,1-0.447,1-1V1c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C26,5.553,26.447,6,27,6z"></path><path d="M51,24h-4c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S51.553,24,51,24z"></path><path d="M7,24H3c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S7.553,24,7,24z"></path><path d="M43.264,7.322l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
        s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S43.654,6.932,43.264,7.322z"></path><path d="M12.15,38.436l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
        s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S12.541,38.045,12.15,38.436z"></path><path d="M41.85,38.436c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2.828,2.828c0.195,0.195,0.451,0.293,0.707,0.293
        s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L41.85,38.436z"></path><path d="M12.15,11.564c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-2.828-2.828
        c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L12.15,11.564z"></path><path d="M27,13c-6.617,0-12,5.383-12,12c0,0.553,0.447,1,1,1s1-0.447,1-1c0-5.514,4.486-10,10-10c0.553,0,1-0.447,1-1
        S27.553,13,27,13z"></path>
</g></svg></span>
                      <h4 class="u-custom-font u-font-oswald u-text u-text-11">Creative Ideas</h4>
                      <p class="u-text u-text-grey-50 u-text-12">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                    </div>
                  </div>
                  <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-right-cell u-size-20 u-size-60-md u-layout-cell-6">
                    <div class="u-container-layout u-container-layout-7"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection