@extends('masterpage.layouts')
@section('content')

<main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
    <section>
        <div class="section-bar clearfix">
            <h1 class="section-title"><span>Phim 2020</span></h1>
        </div>
        <div class="halim_box">
            @foreach ($movies as $movie)
                @if ($movie['year'] == 2020)
                    <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                        <div class="halim-item">
                            <a class="halim-thumb" href="{{ $movie['url'] }}" title="{{ $movie['title'] }}">
                                <figure>
                                    <img class="lazy img-responsive" src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" title="{{ $movie['title'] }}">
                                </figure>
                                <span class="status">{{ $movie['rating'] }}</span>
                                <span class="episode"><i class="fa fa-play" aria-hidden="true"></i>{{ $movie['episode'] }}</span>
                                <div class="icon_overlay"></div>
                                <div class="halim-post-title-box">
                                    <div class="halim-post-title">
                                        <p class="entry-title">{{ $movie['title'] }}</p>
                                        <p class="original_title">{{ $movie['original_title'] }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </section>
</main>
                  </div>
                  <div class="clearfix"></div>
                  <div class="text-center">
                     <ul class='page-numbers'>
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="">2</a></li>
                        <li><a class="page-numbers" href="">3</a></li>
                        <li><span class="page-numbers dots">&hellip;</span></li>
                        <li><a class="page-numbers" href="">55</a></li>
                        <li><a class="next page-numbers" href=""><i class="hl-down-open rotate-right"></i></a></li>
                     </ul>
                  </div>
               </section>
            </main>

            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
               <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                  <div class="section-bar clearfix">
                     <div class="section-title">
                        <span>Top Views</span>
                        <ul class="halim-popular-tab" role="tablist">
                           <li role="presentation" class="active">
                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="today">Day</a>
                           </li>
                           <li role="presentation">
                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="week">Week</a>
                           </li>
                           <li role="presentation">
                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="month">Month</a>
                           </li>
                           <li role="presentation">
                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="all">All</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <section class="tab-content">
                    <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                        <div class="halim-ajax-popular-post-loading hidden"></div>
                        <div id="halim-ajax-popular-post" class="popular-post">
                            @foreach ($movies as $movie)
                                <div class="item post-{{ $loop->index }}">
                                    <a href="{{ $movie['url'] }}" title="{{ $movie['title'] }}">
                                        <div class="item-link">
                                            <img src="{{ $movie['image'] }}" class="lazy post-thumb" alt="{{ $movie['title'] }}" title="{{ $movie['title'] }}" />
                                            @if ($movie['is_trailer'])
                                                <span class="is_trailer">Trailer</span>
                                            @endif
                                        </div>
                                        <p class="title">{{ $movie['title'] }}</p>
                                    </a>
                                    <div class="viewsCount" style="color: #9d9d9d;">{{ $movie['views'] }}</div>
                                    <div style="float: left;">
                                        <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;">
                                            <span style="width: 0%"></span>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                              <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                              <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <div class="clearfix"></div>
               </div>
            </aside>
         </div>
      </div>
      <div class="clearfix"></div>

