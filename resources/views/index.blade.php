<x-layout>
    @slot('title')
        Home
    @endslot
    @slot('body')



        <!-- Page Content -->
        <section class="py-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/images/bg.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block ">
                            <img src="./assets/images/logo.jpg" class="logo" alt="">
                            <h5>Programing world</h5>
                            <p>You can learn anything in Programing</p>
                            <a href="{{route('courses')}}" class="btn btn-primary">Courses</a>

                            <a href="{{route('videos')}}" class="btn btn-success">Free Videos</a>

                            <a href="{{route('blog')}}" class="btn btn-warning">Blog</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">


                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('courses')}}" class="effect">
                                    <img class="card-img-top" src="./assets/images/card/python.jpg" alt="Card image cap">
                                    <p class="card-text">
                                        <b>
                                            <h2 class="text-left"><i class="fab fa-python"></i> Courses </h2>
                                        </b>

                                    </p>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of
                                        the card's content. </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('videos')}}" class="effect">
                                    <img class="card-img-top" src="./assets/images/card/python.jpg" alt="Card image cap">
                                    <p class="card-text">
                                        <b>
                                            <h2 class="text-left"><i class="fab fa-js"></i> Free Videos</h2>
                                        </b>

                                    </p>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of
                                        the card's content. </p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('blog')}}" class="effect">
                                    <img class="card-img-top" src="./assets/images/card/python.jpg" alt="Card image cap">
                                    <p class="card-text">
                                        <b>
                                            <h2 class="text-left"><i class="fab fa-php"></i> Blogs</h2>
                                        </b>

                                    </p>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of
                                        the card's content. </p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('contact')}}" class="effect">
                                    <img class="card-img-top" src="./assets/images/card/python.jpg" alt="Card image cap">
                                    <p class="card-text">
                                        <b>
                                            <h2 class="text-left"><i class="fab fa-java"></i> Contact Us </h2>
                                        </b>

                                    </p>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk
                                        of
                                        the card's content. </p>
                                </a>
                            </div>
                        </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>


    @endslot
</x-layout>
