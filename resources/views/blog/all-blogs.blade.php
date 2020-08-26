@extends('layouts.app')
@section('title')
    Blog - {{$settings["general"]->site_title}} 
@endsection

@section('content')  
    <section style="background: white;"> 
        <div style="margin-top: 4rem;" class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href="/" class="txt27">
                    Home
                </a>
    
                <span class="txt29 m-l-10 m-r-10">/</span>

                <a href="/blog" class="txt29" id="txt"> 
                    Blog 
                </a>


            </div>
        </div>
    
        <div class="container">
            <h1 id="txt29" 
                style="padding-top: 1rem; padding-bottom: 1rem; font-size: 3rem; color: black;">
               
            </h1>
 
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                        <!-- Block4 -->
                        @foreach ($blogs as $blog)
                        <?php
                            $newURL = preg_replace('/[^A-Za-z0-9-]+/', '-', $blog->title);
                        ?> 
                            <div class="blo4 p-b-63">
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">                                    
                                    <a href="/blog/{{ strtolower($newURL)}}">
                                         <img id="lazy" src="{{$blog->image_url}}" alt="IMG-BLOG">
                                    </a>

                                    <div class="date-blo4 flex-col-c-m">
                                        <span class="txt30 m-b-4">
                                            {{ $blog->created_at->formatLocalized('%d')}}
                                        </span>

                                        <span class="txt31">
                                            {{ $blog->created_at->format('M, Y') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a 
                                            href="{{ url("/blog/category/{ strtolower($newURL) }") }}" 
                                            class="tit9"
                                            
                                        >Cooking recipe Delicious</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
                                        <span>
                                            by {{ $blog->author }}
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                        {{ $blog->created_at->format('D M, Y') }}
                                        
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            {{ $blog->keywords }}
                                            <span class="m-r-6 m-l-4">|</span>
                                        </span>

                                        <span>
                                            {{ $blog->amount_of_comments }}
                                        </span>
                                    </div>

                                    <p>
                                        {{ $blog->preview_content }}
                                    </p>

                                    <a href="blog/{{ strtolower($newURL) }}" class="dis-block txt4 m-t-30">
                                        Continue Reading
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach 
 
                        <!-- Pagination -->
                        <div class="pagination flex-l-m flex-w m-l--6 p-t-25"> 

                                {{ $blogs->links() }}
                            {{-- <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
                            <button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>

                        <!-- Categories --> 
                        <div class="categories">
                            <h4 class="txt33 bo5-b p-b-35 p-t-58">
                                Categories
                            </h4>
   
                            <ul>
                                @foreach ($categories as $item)
                                    <li class="bo5-b p-t-8 p-b-8">
                                        
                                        <a href="{{ url("/blog/category/$item->id") }}" class="txt27">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endforeach
                               
                            </ul>
                        </div>

                        <!-- Archive -->
                        <div class="archive">
                            <h4 class="txt33 p-b-20 p-t-43">
                                Archive
                            </h4>

                            <ul>
                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        July 2018
                                    </a>

                                    <span class="txt29">
                                        (9)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        June 2018
                                    </a>

                                    <span class="txt29">
                                        (39)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        May 2018
                                    </a>

                                    <span class="txt29">
                                        (29)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        April  2018
                                    </a>

                                    <span class="txt29">
                                        (35)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        March 2018
                                    </a>

                                    <span class="txt29">
                                        (22)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        February 2018
                                    </a>

                                    <span class="txt29">
                                        (32)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        January 2018
                                    </a>

                                    <span class="txt29">
                                        (21)
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        December 2017
                                    </a>

                                    <span class="txt29">
                                        (26)
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script> 
    const el = document.querySelector('#txt29');
    const breadCrumbs = document.querySelector('#txt');

    const createBreadCrumb = () => {
        let text;
        let url;

        if(window.location.href) {
            url = window.location.href;
        }

        if (url.includes("1")) {
            text = 'Cooking Recipe';
            breadCrumbs.style.fontWeight = "400";
            breadCrumbs.style.color = "black";
        } else if (url.includes("2")) {
            text = 'Delicious Food';
            breadCrumbs.style.fontWeight = "400";
            breadCrumbs.style.color = "black";
        } else if (url.includes("3")) {
            text = 'EVENTS DESIGN';
            breadCrumbs.style.fontWeight = "400";
            breadCrumbs.style.color = "black";
        } else if (url.includes("4")) {
            text = 'RESTAURANT PLACE';
            breadCrumbs.style.fontWeight = "400";
        breadCrumbs.style.color = "black";
        } else if (url.includes("5")) {
            text = 'WORDPRESS';
            breadCrumbs.style.fontWeight = "400";
            breadCrumbs.style.color = "black";
        } else {
            text = '';
            breadCrumbs.style.fontWeight = "400";
            breadCrumbs.style.color = "#999999";
        }

        breadCrumbs.insertAdjacentHTML('afterend', `
            ${text ? '<span class="txt29 m-l-10 m-r-10">/</span>' : ''}
            <span style="text-transform: uppercase" class="txt29"> 
                ${text}
            </span>
        `)
    }

    const replaceTitle = () => {
        let text;
        let url;

        if(window.location.href) {
            url = window.location.href;
        }

        if (url.includes("1")) {
            text = 'Cooking Recipe';
        } else if (url.includes("2")) {
            text = 'Delicious Food';
        } else if (url.includes("3")) {
            text = 'EVENTS DESIGN';
        } else if (url.includes("4")) {
            text = 'RESTAURANT PLACE';
        } else if (url.includes("5")) {
            text = 'WORDPRESS';
        } else {
            text = 'Blog';
        }

        el.insertAdjacentHTML('afterbegin', `
            <div>${text}</div>
        `)
    }

    replaceTitle();
    createBreadCrumb();
    //console.log(window.location.href.includes("1"))
    </script>
@endsection
