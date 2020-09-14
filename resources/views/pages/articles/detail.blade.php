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

                <p class="drop-cap">{{$article->content}}</p>
                <!-- COMMENTS -->
                <h6>3 Comments:</h6>
                <div class="single__detail-features-review">
                    <div class="media mt-4">
                        <img class="mr-3 img-fluid rounded-circle" src="{{asset('assets/images/profile-blog.jpg')}}"
                             alt="">
                        <div class="media-body">
                            <h6 class="mt-0">Jhon doe</h6>
                            <span class="mb-3">Mei 13, 2020</span>

                            @php($rating = $article->reviews->sum('rating') ? $article->reviews->sum('rating')  / count($article->reviews) : 0)
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <i class="fa fa-star {{ $rating > 1 || $rating < 2 ? 'selected' : '' }}"></i>
                                    <i class="fa fa-star {{ $rating > 2 || $rating < 3 ? 'selected' : '' }}"></i>
                                    <i class="fa fa-star {{ $rating > 3 || $rating < 4 ? 'selected' : '' }}"></i>
                                    <i class="fa fa-star {{ $rating > 4 || $rating < 5 ? 'selected' : '' }}"></i>
                                    <i class="fa fa-star {{ $rating > 5 ? 'selected' : '' }}"></i>
                                </li>
                                <li class="list-inline-item"></li>
                            </ul>

                            @foreach($article->reviews as $review)
                                <p>{{ $review->comment }}</p>
                            @endforeach
                        </div>
                    </div>

                    <!-- COMMENT -->
                    <hr>

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

                                @foreach($categories as $category)
                                <li>
                                    <a href="#" class="text-capitalize">
                                    {{$category->category}}
                                <span class="badge badge-primary">{{count($category->articles)}}</span>
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
                                <img src="{{asset('assets/images/gallery.jpg')}}" alt="" class="img-fluid">

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
                                <img src="{{asset('assets/images/gallery2.jpg')}}" alt="" class="img-fluid">
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
                                <img src="{{asset('assets/images/gallery3.jpg')}}" alt="" class="img-fluid">

                                <div class="widget__sidebar__body-heading">
                                    <h6 class="text-capitalize">
                                        tips & trick in real estate
                                    </h6>

                                </div>
                                <span class="badge badge-secondary p-1 text-capitalize mb-1">May 08, 2019
                                        </span>
                            </div>

                            <div class="widget__sidebar__body-img">
                                <img src="{{asset('assets/images/gallery4.jpg')}}" alt="" class="img-fluid">

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