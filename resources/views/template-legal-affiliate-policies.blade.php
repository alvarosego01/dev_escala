{{--
  Template Name: [B] Legal - Affiliate Policies
--}}

@extends('layouts.app')
@section('content')
<style>
p {
    font-size: 16px;
    font-family: 'Nunito';
    color: #706B6D;
}

h2 {
  font-size: 22px;
  font-family: 'Nunito';
  font-weight: Bold;
  margin: 30px 0px;
}
</style>
<div id="documentTermsTextBootstrap">
    <div class="sections">
        <div class="container"
            style="padding: 40px 0px; background: linear-gradient(180deg, rgba(243,250,253,1) 0%, rgba(222,243,245,1) 100%);">
            <div class="row align-items-center">
                <div class="col-12" style="text-align: center;">
                    <h1 style="color: #322B42; font-family: 'Nunito'; font-weight: bold; font-size: 50px;">Escala Affiliate Program Policies</h1>
                    <p style="color: #36768A; font-size: 20px; font-family: 'Nunito';">All Escala Affiliates are required to complete an agreement and remain in compliance<br> with these terms. This list contains everything you need to know to be an Escala affiliate.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #2C4857; padding: 10px 0px;">
        <div class="row">
            <div class="col-4">
                <div class="dropdown show">
                    <a style="font-size: 20px; background-color: #2C4857; border: none; font-family: 'Nunito'; padding: 0px;"
                        class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For Customers
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/affiliate-agreement">Agreement</a>
                        <a class="dropdown-item" href="/affiliate-policies">Policies</a>
                        <a class="dropdown-item" href="#">Page 3</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="dropdown show">
                    <a style="font-size: 20px; background-color: #2C4857; border: none; font-family: 'Nunito'; padding: 0px;"
                        class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For Partners
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Page 1</a>
                        <a class="dropdown-item" href="#">Page 2</a>
                        <a class="dropdown-item" href="#">Page 3</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="dropdown show">
                    <a style="font-size: 20px; background-color: #2C4857; border: none; font-family: 'Nunito'; padding: 0px;"
                        class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For Everyone
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Page 1</a>
                        <a class="dropdown-item" href="#">Page 2</a>
                        <a class="dropdown-item" href="#">Page 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="customSection sectionParent documentTermsTextSection0">

        <div class="section-row">

            <section class="innerSectionElement1" style="margin: 50px 0px;">

                @php
                the_content();
                @endphp

            </section>


        </div>

    </section>

</div>



</div>




@endsection