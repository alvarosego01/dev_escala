{{--
  Template Name: Home bootstrap
--}}

@extends('layouts.app')


@section('content')

<div class="container">

  <div class="row">

    <div class="col">1</div>
    <div class="col">2</div>
    <div class="col">3</div>

  </div>

</div>

  {{--
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  --}}


@endsection
