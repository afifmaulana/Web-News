@extends('templates.news')
@section('content')

    <div class="row">
    <div class="col-lg-8">
        <div class="single__blog-detail">
            <h1>
                {{$article->title}}
            </h1>

            <div class="single__blog-detail-info">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <figure class="image-profile">
                            <img src="{{asset('assets/images/profile-blog.jpg')}}" class="img-fluid" alt="">
                        </figure>
                    </li>
                    <li class="list-inline-item">

                                    <span>
                                        by
                                    </span>
                        <a href="#">
                            john doe,
                        </a>
                    </li>
                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        descember 09, 2016
                                    </span>
                    </li>

                    <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        in
                                    </span>
                        <a href="#">
                            business
                        </a>
                    </li>
                </ul>
            </div>
            <figure>
                <img src="{{$article->image}}" class="img-fluid" alt="">
            </figure>

            <p class="drop-cap">
                {{$article->content}}
            </p>


            <p>
                To achieve this, it would be necessary to have uniform grammar, pronunciation and more
                common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and
                regular than that of the individual languages. The new common language will be more simple
                and
                regular than the existing European languages. It will be as simple as Occidental; in fact,
                it
                will be Occidental. To an English person, it will seem like simplified English, as a
                skeptical
                Cambridge friend of mine told me what Occidental is.
            </p>

            <!-- BLOCKQUOTE -->
            <blockquote class="block-quote">
                <p>
                    It is a long established fact that a reader will be distracted by the readable content
                    of a page when looking at
                    its layout.
                </p>
                <cite>
                    Tom Cruise
                </cite>
            </blockquote>
            <!-- END BLOCKQUOTE -->

            <p>
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean. A small river named Duden flows by their place and
                supplies it with the necessary regelialia.
            </p>


            <!-- AUTHOR -->
            <!-- Profile author -->
            <div class="wrap__profile">
                <div class="wrap__profile-author">
                    <figure>
                        <img src="{{asset('assets/images/profile-blog.jpg')}}" alt="" class="img-fluid img-circle">
                    </figure>
                    <div class="wrap__profile-author-detail">
                        <div class="wrap__profile-author-detail-name">author</div>
                        <h5>jhon doe</h5>
                        <p>Hi, nice to meet you let me introduce for you, I am Jhon Doe freelancer designer
                            & web programmer from
                            indonesia,
                            base lampung</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o facebook ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o twitter ">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o instagram ">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o telegram ">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-social btn-social-o linkedin ">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END AUTHOR -->


            <div class="row">
                <div class="col-md-6">
                    <div class="single_navigation-prev">
                        <a href="#">
                            <span>previous post</span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_navigation-next text-left text-md-right">
                        <a href="#">
                            <span>next post</span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <!-- COMMENTS -->
            <h6>3 Comments:</h6>
            <div class="single__detail-features-review">
                <div class="media mt-4">
                    <img class="mr-3 img-fluid rounded-circle" src="images/profile-blog.jpg" alt="">
                    <div class="media-body">
                        <h6 class="mt-0">Jhon doe</h6>
                        <span class="mb-3">Mei 13, 2020</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">3/5</li>
                        </ul>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec
                            lacinia congue felis in faucibus.</p>

                        <div class="media mt-4">
                            <a class="pr-3" href="#">
                                <img src="images/client.png" alt="" class="img-fluid rounded-circle">
                            </a>
                            <div class="media-body">
                                <h6 class="mt-0">Christine </h6>
                                <span class="mb-3">Mei 13, 2020</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                    </li>
                                    <li class="list-inline-item">5/5</li>
                                </ul>
                                <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque ante sollicitudin. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media mt-4">
                    <img class="mr-3 img-fluid rounded-circle" src="images/profile-blog.jpg" alt="">
                    <div class="media-body">
                        <h6 class="mt-0">Jhon Doe</h6>
                        <span class="mb-3">Mei 13, 2020</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                            </li>
                            <li class="list-inline-item">5/5</li>
                        </ul>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec
                            lacinia congue felis in faucibus.</p>


                    </div>
                </div>
                <!-- COMMENT -->
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-2">Your rating for this listing:</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">3/5</li>
                        </ul>
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>What's your Email?</label>
                            <input type="email" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Your message</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right "> Submit review <i
                            class="fa fa-paper-plane ml-2"></i></button>
                <!-- END COMMENT -->

            </div>
            <!-- END COMMENTS -->

        </div>
    </div>
        <!-- WIDGET BLOG -->
        <div class="col-lg-4">
            <div class="sticky-top">
                <aside>
                    <div class="widget__sidebar mt-0">
                        <div class="widget__sidebar__header">
                            <h6 class="text-capitalize">search</h6>
                        </div>
                        <div class="widget__sidebar__body">
                            <div class="input-group">
                                <input type="text" name="search_term_string" class="form-control"
                                       placeholder="Search article . . .">
                                <span class="input-group-btn">
                                            <button type="submit" class="btn-search btn"><i
                                                        class="fa fa-search"></i></button>
                                        </span>
                            </div>
                        </div>

                    </div>
                </aside>
                <aside>
                    <div class="widget__sidebar">
                        <div class="widget__sidebar__header">
                            <h6 class="text-capitalize">category</h6>
                        </div>
                        <div class="widget__sidebar__body">
                            <ul class="list-unstyled">
                                @foreach($categories as $categorie)
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            {{$categorie->category}}
                                            <span class="badge badge-primary">{{count(\App\Article::all())}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </aside>
                <aside>
                    <div class="widget__sidebar">
                        <div class="widget__sidebar__header">
                            <h6 class="text-capitalize">recents news</h6>
                        </div>
                        <div class="widget__sidebar__body">
                            <!-- ONE -->
                            <div class="widget__sidebar__body-img">
                                <img src="images/gallery.jpg" alt="" class="img-fluid">

                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        tips memilih rumah bagi kelurga muda
                                    </h6>

                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>
                            <!-- TWO -->
                            <div class="widget__sidebar__body-img">
                                <img src="images/gallery1.jpg" alt="" class="img-fluid">

                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        tips memilih rumah bagi kelurga muda
                                    </h6>

                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>
                            <!-- THREE -->
                            <div class="widget__sidebar__body-img">
                                <img src="images/gallery2.jpg" alt="" class="img-fluid">
                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        twe are experience more than 10 years
                                    </h6>

                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>
                            <!-- FOUR -->
                            <div class="widget__sidebar__body-img">
                                <img src="images/gallery3.jpg" alt="" class="img-fluid">

                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        tips & trick in real estate
                                    </h6>

                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>

                            <div class="widget__sidebar__body-img">
                                <img src="images/gallery4.jpg" alt="" class="img-fluid">

                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        how buy real estate dream house
                                    </h6>
                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside>
                    <div class="widget__sidebar">
                        <div class="widget__sidebar__header">
                            <h6 class="text-capitalize">tags</h6>
                        </div>
                        <div class="widget__sidebar__body">
                            <div class="blog__tags p-0">
                                <ul class="list-inline">

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #estate
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #real estate
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #listing
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #rent
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sell
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #family
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #happy
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #agents
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #promo
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
        <!-- END WIDGET BLOG -->
    </div>

    @endsection