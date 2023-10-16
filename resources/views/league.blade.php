@extends('layouts.app')

@section('content')


        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Kies je Favoriete league uit !</h2>
                <hr class="divider my-4" />
            </div>
        </section>


        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://assets.turbologo.com/blog/en/2020/01/19084653/Premier-League-symbol-958x575.png">
                            <img class="img-fluid" src="https://assets.turbologo.com/blog/en/2020/01/19084653/Premier-League-symbol-958x575.png" alt="" />
                            <div class="portfolio-box-caption">
                                @foreach($leagues as $league)
                                <div class="project-category text-white-50">{{$league -> country}}</div>
                          <div class="project-name">{{$league -> league}}</div>
                                @endforeach
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://logowik.com/content/uploads/images/laliga-2023-2024-new3252.logowik.com.webp">
                            <img class="img-fluid" src="https://logowik.com/content/uploads/images/laliga-2023-2024-new3252.logowik.com.webp" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/df/Bundesliga_logo_%282017%29.svg/640px-Bundesliga_logo_%282017%29.svg.png">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/d/df/Bundesliga_logo_%282017%29.svg/640px-Bundesliga_logo_%282017%29.svg.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Premier League</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://4.bp.blogspot.com/-c1-tjEImbbM/W2r9jWBXqAI/AAAAAAABqAY/t0ViK5mGDTksOmFYduSBinLgisyboCdeQCLcBGAs/s1600/serie-a-tim-logo%2B%25283%2529.jpg">
                            <img class="img-fluid" src="https://4.bp.blogspot.com/-c1-tjEImbbM/W2r9jWBXqAI/AAAAAAABqAY/t0ViK5mGDTksOmFYduSBinLgisyboCdeQCLcBGAs/s1600/serie-a-tim-logo%2B%25283%2529.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Premier League</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://getlogovector.com/wp-content/uploads/2021/05/ligue-1-uber-eats-logo-vector.png">
                            <img class="img-fluid" src="https://res.cloudinary.com/dfwt0gh29/image/upload/c_pad,h_627,w_1200/logos/league_1_logo" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Premier League</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmAo8OD1ng1yjYgqHvyxiE0ahb4chYtSze_D4wlDr-&s">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/8/8a/SuperLig_logo.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Premier League</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
@endsection
