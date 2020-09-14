@extends('templates.news')
@section('content')

            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($articles as $article)
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid mt-0">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <img src="{{$article->image}}" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019
                                        </span> -->
                                        <h6 class="text-capitalize">
                                            <a href="{{route('article.show', $article->id)}}">{{$article->title}}</a>
                                        </h6>
                                        <p class=" mb-0">{{$article->content}}</p>

                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="{{asset('assets/images/profile-blog.jpg')}}" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="#">
                                                    User
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-primary "><small
                                                            class="text-white ">read more <i
                                                                class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
                <!-- END BLOG  -->

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
                                        @foreach($articles as $article)
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                {{$article->category->category}}
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