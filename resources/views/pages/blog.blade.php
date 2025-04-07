@extends('layout')
@section('content')
@section('body-class', 'blog white-theme')
<div class="blog">
    <section class="container blog-cards">
        <div class="row">
            <div class="col-12 col-lg-6 linksCol">
                <div class="wrapper">
                    <div class="absoluteImageWrapper">
                        <img src="/images/news-logo.svg" alt="logo" class="img-fluid">
                    </div>
                    <h1 data-aos="fade-down"  data-aos-once="true" data-aos-duration="1000" class="font-heading1">Νέα & <br> Άρθρα</h1>
                    <div class="linksWrapper d-none d-sm-flex flex-column">
                        <a href="#" title="Όλα τα Άρθρα">Όλα τα άρθρα</a>
                        <a href="#" title="Γλαύκωμα">Γλαύκωμα</a>
                        <a href="#" title="Καταρράκτης">Καταρράκτης</a>
                        <a href="#" title="Πρόσθια Μόρια">Πρόσθια Μόρια</a>
                    </div>
                    <div class="mobileLinksWrapper w-100 d-flex d-sm-none flex-column">
                        <ul>
                            <li class="active">
                                <a href="#" title="Όλα τα Άρθρα">Όλα τα άρθρα</a>

                            </li>
                            <li>
                                <a href="#" title="Γλαύκωμα">Γλαύκωμα</a>

                            </li>
                            <li>
                                <a href="#" title="Καταρράκτης">Καταρράκτης</a>

                            </li>
                            <li>

                                <a href="#" title="Πρόσθια Μόρια">Πρόσθια Μόρια</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 cardCol">
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
                @include('partials.news-card')
            </div>
        </div>
    </section>
    @include('partials.contact-content')
</div>
@endsection
