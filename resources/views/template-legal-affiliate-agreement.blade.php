{{--
  Template Name: [B] Legal - Affiliate Agreement
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

div#documentTermsTextBootstrap .sections .container {
    width: 100%;
    max-width: 100%;
}

div#documentTermsTextBootstrap .container {
    max-width: 100%;
}

div#documentTermsTextBootstrap .container .row {
    max-width: 1340px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

div#documentTermsTextBootstrap .container .row .col-4 {
    width: fit-content;
}

</style>
<div id="documentTermsTextBootstrap">
    <div class="sections">
        <div class="container"
            style="padding: 30px 0px; background: linear-gradient(180deg, rgba(243,250,253,1) 0%, rgba(222,243,245,1) 100%);">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 style="color: #322B42; font-family: 'Nunito'; font-weight: bold; font-size: 50px;">Marketing
                        Affiliate<br> Program Agreement</h1>
                </div>
                <div class="col-6" style="text-align: center;">
                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/afiliados 1.png') !!}" alt="" srcset=""
                        width="350px">
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
                        <a class="dropdown-item" href="#">Agreement</a>
                        <a class="dropdown-item" href="#">Policies</a>
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