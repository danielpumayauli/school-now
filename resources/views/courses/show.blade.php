@extends('layouts.app')

@section('body-class', '')

@section('content')


<!--  -->

<div class="page-header" data-parallax="true" style="background-image: url('{{ asset('img/sections/banner.jpg') }}');">
    <div class="filter"></div>
    <div class="content-center">
        <div class="container">
            <div class="motto">
                <h1 class="title">CURSO {{$course->name}}</h1>
                <h3 class="description">{{$course->description}}</h3>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-neutral btn-round"><i class="fa fa-play"></i>Watch video</a>
                <button type="button" class="btn btn-outline-neutral btn-round">Download</button>
            </div>
        </div>
    </div>

</div>

<div class="wrapper">

    <div class="section section-dark landing-section" id="cards">
        <div class="container tim-container">
            <h2 class="title">Cursos Destacados</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">

                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="">
                            </a>
                        </div>
                        <div class="card-block ">
                            <label class="label label-warning">xxx</label>
                            <h5 class="card-title">
                                Currently at the San Francisco Museum of Modern Art
                            </h5>
                            <hr />
                            <div class="card-footer text-center">
                                <a href="" class="btn btn-primary btn-round">Comenzar</a>
                               <!-- <div class="stats">
                                    <i class="nc-icon nc-hat-3" aria-hidden="true" style="color: red"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a href="#paper-kit" class="btn btn-danger btn-fill btn-round" style="margin:0 auto">Ver todos</a>
            </div>
        </div>
    </div>

    <div class="section text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="title">Let's talk product</h2>
                    <h5>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    <br />
                    <a href="#paper-kit" class="btn btn-danger btn-fill btn-round">See Details</a>
                </div>
            </div>
            <br /><br />
            <div class="row">
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-palette"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Beautiful Gallery</h4>
                            <p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-bulb-63"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Cursos Disponibles</h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Statistics</h4>
                            <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-sun-fog-29"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Delightful design</h4>
                            <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center">Keep in touch?</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer section-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="http://www.creative-tim.com/">Creative Tim</a></li>
                        <li><a href="http://blog.creative-tim.com/">Blog</a></li>
                        <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                    </span>
                </div>
            </div>
        </div>
    </footer>


@endsection
