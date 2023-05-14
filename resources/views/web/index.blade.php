@extends('web/layout/web')
@section('content')

        <!-- Hero Section Begin -->
       
        <!-- Hero Section End -->

        <!-- Categories Section Begin -->
        <section class="categories spad">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="categories__item set-bg" data-setbg="{{ asset($item->image) }}">
                                <div class="categories__hover__text">
                                    <h5><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a>
                                    <p>28 articles</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="categories__post">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="categories__post__item categories__post__item--large">
                                <div class="categories__post__item__pic set-bg"
                                    data-setbg="{{ asset($item->image) }}">
                                    <div class="post__meta">
                                        <h4>08</h4>
                                        <span>Aug</span>
                                    </div>
                                </div>
                                <div class="categories__post__item__text">
                                    <ul class="post__label--large">
                                        <li>Vegan</li>
                                        <li>{{$item->title}}</li>
                                    </ul>
                                    <h3><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a></h3>
                                    <ul class="post__widget">
                                        {{-- <li>by <span>  {{ Auth::user()->name }}   </span></li> --}}
                                        <li>3 min read</li>
                                        <li>20 Comment</li>
                                    </ul>
                                    <p>This platform is more versatile than the one I have been using until now, and is much easier to manage. I hope and believe you will continue to enjoy reading the articles and posts on this blog.</p>
                                    <a href="#" class="primary-btn">Read more</a>
                                    <div class="post__social">
                                        <span>Share</span>
                                        <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                        <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic small__item set-bg"
                                            data-setbg="{{ asset($item->image) }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label"></span>
                                            <h3><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a>
                                            </h3>
                                            <ul class="post__widget">
                                                {{-- <li>by <span>{{ Auth::user()->name }}</span></li> --}}
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>{{$item->title}}</p>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__plain set-bg"
                                        data-setbg="{{ asset($item->image) }}">
                                        <div class="categories__post__item__text">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                            <ul class="post__label--large">
                                                <li>Vegan</li>
                                                <li>Desserts</li>
                                            </ul>
                                            <h3><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a>
                                            </h3>
                                            <div class="post__social">
                                                <span>Share</span>
                                                <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                                <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                                <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic smaller__large set-bg"
                                            data-setbg="{{ asset($item->image) }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Dinner</span>
                                            <h3><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a>
                                                </a>
                                            </h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic smaller__large set-bg"
                                            data-setbg="{{ asset($item->image) }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Drinks</span>
                                            <h3><a href="{{url('post').'/'.$item->slug}}">{{$item->title}}</a></h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="load__more__btn">
                                        <a href="#">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="sidebar__item">
                                <div class="sidebar__about__item">
                                    <div class="sidebar__item__title">
                                        <h6>About me</h6>
                                    </div>
                                    <img src="img/sidebar/welcome-to-blog.jpg" alt="">
                                    <h6>Hello Everyone and Welcome to My Blog                                    </h6>
                                    <p>This blog brings you articles, advice, guidance and tips for improving your life on every level, and awakening your inner powers..</p>
                                    <a href="{{ route('index') }}" class="primary-btn">Read more</a>
                                </div>
                                <div class="sidebar__follow__item">
                                    <div class="sidebar__item__title">
                                        <h6>Follow me</h6>
                                    </div>
                                    <div class="sidebar__item__follow__links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </div>
                                </div>
                                <div class="sidebar__feature__item">
                                    <div class="sidebar__item__title">
                                        <h6>Feature Posts</h6>
                                    </div>
                      
                                </div>
                                <div class="sidebar__item__banner">
                                    <img src="img/sidebar/banner.jpg" alt="">
                                </div>
                                <div class="sidebar__item__categories">
                                    <div class="sidebar__item__title">
                                        <h6>Categories</h6>
                                    </div>
                                    {{-- <ul>
                                        <li><option value="{{ $item->id }}">{{ $item->title }}</option></li>
                                    </ul> --}}

                                    @foreach ($categorys as $item)
                                    <ul>
                                        <li><a href="#">{{ $item->id }}.{{ $item->title }}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->
@endsection
