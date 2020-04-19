{{--
  Template Name: Presentation request Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="ready" style="background-image: url({{ the_field('bg_page') }}); background: linear-gradient(0deg, rgba(40, 47, 57, 0.93), rgba(40, 47, 57, 0.93)),; background-repeat: no-repeat;border-radius: 20px; background-position: center; background-size:cover;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="headings">
            <h2 class="first">{{ the_field('headline') }}</h2>
            <!-- messing content here  -->   
            <p class="first">{{ the_field('sub_headline') }}</p>
          </div>
        </div>
        <div class="container">
          <br/><br/>
          <ul class="list-unstyled multi-steps">
            @if( have_rows('steps') )
              @while ( have_rows('steps') ) @php the_row() @endphp
                <li class="step"><strong>{{ the_sub_field('headline_step') }}</strong> <p>{{ the_sub_field('content_step') }}</p></li>
              @endwhile
            @endif 
          </ul>
        </div>
      </div>
    </section>
    @php $form_id = get_field('select_form'); @endphp
    @if ($form_id)
      <section id="formRequest">
        {!! do_shortcode( '[gravityform id="'.$form_id['id'].'" name="" title="false" description="false" ajax="true" ]' ) !!}
      </section>
    @endif
  @endwhile

  <style>
    section#formRequest {
      background: #FFFFFF;
      box-shadow: 0px 2px 87px rgba(0, 0, 0, 0.05);
      border-radius: 8px;
      max-width: 900px;
      margin: -200px auto 90px;
      padding: 40px;
    }

    section#formRequest .gform_wrapper ul.gform_fields li.gfield:nth-child(1),
    section#formRequest .gform_wrapper ul.gform_fields li.gfield:nth-child(2),
    section#formRequest .gform_wrapper ul.gform_fields li.gfield:nth-child(3),
    section#formRequest .gform_wrapper ul.gform_fields li.gfield:nth-child(4) {
      width: 45%;
      float: left;
      clear: right;
    }

    .gform_wrapper ul.gform_fields li.gfield {
      margin-bottom: 20px;
    }

    .gform_wrapper ul.gform_fields li.gfield input,
    .gform_wrapper ul.gform_fields li.gfield select {
      width: 100% !important;
      max-width: 100% !important;
      border: 1px solid #E3E3E3;
      box-sizing: border-box !important;
      border-radius: 8px !important;
      height: 40px !important;
    }

    label.gfield_label {
      font-weight: normal !important;
      font-size: 14px;
      line-height: 21px;
      display: flex;
      align-items: center;
      letter-spacing: 0.04px;
      text-transform: capitalize;
      color: #3F4A59;
      margin: 0;
    }

    .gform_wrapper .gform_footer button {
      background: linear-gradient(157.8deg, #6B73FF -0.5%, #000DFF 100%);
      border-radius: 30px;
      display: block !important;
      margin: auto;
    }    
  </style>
@endsection
