@extends('../layouts.parents')

@section('content')



<a id="back_to_top" href="#">
  <span class="fa-stack">
    <i class="fa fa-arrow-up" style=""></i>
  </span>
</a>
<div class="content ">
  <div class="meta">
    <div class="seo_title"> Каталог</div>
    <span id="qode_page_id">3</span>
    <div class="body_classes"></div>
  </div>
  <div class="content_inner">
    <div class="full_width">
      <div class="full_width_inner" >
        <div class="vc_row wpb_row section vc_row-fluid  grid_section" style=' padding-top:75px; padding-bottom:80px; text-align:center;'>
          <div class=" section_inner clearfix">
            <div class='section_inner_margin clearfix'>
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                        <h2 style="text-align: center;"><a class="catalog_link" href="#">Каталог</a></h2>
                      </div>
                    </div>
                    <div class="separator  transparent   " style="margin-top: 23px;margin-bottom: 0px;"></div>
                    <div class="projects_holder_outer v3 portfolio_with_space portfolio_standard">
                      <div class="filter_outer">
                        <div class="filter_holder">
                          <ul>
                            <!--<li class="active"><a href="catalog/">Художники</a></li>-->
                            <li -data-filter="portfolio_category_8">
                              <a href="{{route('catalog')}}">Арты</a>
                            </li>
                            <li -data-filter="portfolio_category_10">
                              <a href="{{route('catalog1')}}">Рисунки</a>
                            </li>
                            <li -data-filter="portfolio_category_9">
                              <a href="{{route('catalog2')}}"><strong>Природа</strong></a>
                            </li>
                            <li class="last" -data-filter="portfolio_category_11">
                              <a href="{{route('catalog3')}}">Мои работы</a>
                            </li>
                          </ul>
                          </div>
                        </div>
                        <div class='projects_holder portfolio_main_holder clearfix v3 standard portfolio_square_image '>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px;" src="{{asset('img/photo2/11.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <!--<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="#" target="_self">Алексей Ланцев</a></h5>-->
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <!--<a itemprop="url" class="portfolio_link_class" title="Евгений Заремба" href="#"></a>-->
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/12.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/13.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/14.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/15.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/16.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/17.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <article class="mix">
                            <div class="item_holder slow_zoom">
                              <div class="icons_holder"></div>

                              <a itemprop="url" class="portfolio_link_class" title="" href="#"></a>
                              <div  class="portfolio_shader"></div>
                              <div class="image_holder"><span class="image"><img style="height: 305px; width: 305px;" src="{{asset('img/photo2/18.jpg')}}" class="attachment-portfolio-square size-portfolio-square wp-post-image" alt="qode interactive strata" sizes="(max-width: 570px) 100vw, 570px" /></span></div>
                            </div>
                            <div class="portfolio_description text_align_left" >
                              <span class="project_category"></span>
                            </div>
                          </article>
                          <div class="filler"></div>
                          <div class="filler"></div>
                          <div class="filler"></div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content_bottom" >
      </div>
    </div>
  </div>
  @endsection
