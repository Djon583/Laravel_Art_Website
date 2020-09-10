@extends('../layouts.parents')

@section('content')

<a id="back_to_top" href="#">
  <span class="fa-stack">
    <i class="fa fa-arrow-up" style=""></i>
  </span>
</a>
<div class="content">
  <div class="content_inner">
    <div class="full_width">
      <div class="full_width_inner">
        <div class="vc_row wpb_row section vc_row-fluid" style=" text-align:left;">
          <div class=" full_section_inner clearfix">
            <div class="vc_col-sm-12 wpb_column vc_column_container ">
              <div class="wpb_wrapper">
                <div class="wpb_layerslider_element wpb_content_element">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" id="slide_0">
                        <a href="#"></a>
                      </div>
                      <div class="swiper-slide" id="slide_1">
                        <a href="#"></a>
                      </div>
                      <div class="swiper-slide" id="slide_2">
                        <a href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="vc_row wpb_row section vc_row-fluid  grid_section" style=" padding-top:40px; padding-bottom:50px; text-align:center;">
          <div class=" section_inner clearfix">
            <div class="section_inner_margin clearfix">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper home_about_text">
                        <div class="wpb_text_column wpb_content_element">
                          <div class="wpb_wrapper">
                            <h1>Художественная галерея</h1>
                            <p>&ndash; это выставочное пространство, где представлены работы ведущих российских художников: живописцев, графиков и скульпторов. Среди них как состоявшиеся авторы, чьи произведения находятся в крупных музейных коллекциях, так и молодые, только начинающие свой профессиональный путь. Предпочтение отдается художникам, связанным с традиционным живописным мастерством и языком &laquo;визуального мышления&raquo;: многозначным, чувственным, иррациональным.</p>
                            <p>В выставочном зале галереи проходят временные выставки, а в шоу-руме представлена постоянная экспозиция.</p>
                            <p>Искусствоведы помогут с выбором произведения искусства для частной или корпоративной коллекции, интерьера, подарка. Наши рекомендации основаны на многих факторах, но главный из них &ndash; создание эмоционального баланса между обладателем и произведением.</p>
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
        <div class="vc_row wpb_row section vc_row-fluid " style=" text-align:left;">
          <div class=" full_section_inner clearfix">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                    <div class="wpb_wrapper">
                      <div class="art_categories bs_grid clearfix">
                        <div class="item">
                          <img data-src="http://abramovagallery.art//assets/images/art-object.jpg" class="lazy" alt="">
                          <span class="filter"></span>
                          <a href="#">
                            <h2>Арт</h2>
                          </a>
                        </div>
                        <div class="item">
                          <img data-src="http://abramovagallery.art//assets/images/graphice3.jpg" class="lazy" alt="">
                          <span class="filter"></span>
                          <a href="#">
                            <h2>Рисунки</h2>
                          </a>
                        </div>
                        <div class="item">
                          <img style="height: 399px;" data-src="{{asset('/img/priroda.jpg')}}" class="lazy" alt="">
                          <span class="filter"></span>
                          <a href="#">
                            <h2>Природа</h2>
                          </a>
                        </div>
                        <div class="item">
                          <img style="height: 399px;"data-src="{{asset('/img/moi/2.jpg')}}" class="lazy" alt="">
                          <span class="filter"></span>
                          <a href="#">
                            <h2>Мои работы</h2>
                          </a>
                        </div>
                      </div>
                      <div class="what_we grid_section bs_grid">
                        <div class="section_inner">
                          <div class="row">
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Коллекции</a>
                              </h3>
                              <div class="w-desc">
                                Помощь в формировании <br />
                                коллекций, инвестиции <br />
                                в искусство
                              </div>
                            </div>
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Интерьеры</a>
                              </h3>
                              <div class="w-desc">
                                Консультации дизайнера <br />
                                и искусствоведа по подбору <br />
                                произведений искусства
                              </div>
                            </div>
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Багет</a>
                              </h3>
                              <div class="w-desc">
                                Оформление живописных <br />
                                и графических работ <br />
                                в рамы и паспарту
                              </div>
                            </div>
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Выставки</a>
                              </h3>
                              <div class="w-desc">
                                Планирование, организация <br />
                                и проведение выставок <br />
                                на территории заказчика
                              </div>
                            </div>
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Подарки</a>
                              </h3>
                              <div class="w-desc">
                                Подбор подарков для коллег, <br />
                                партнеров по бизнесу, <br />
                                высшего руководства
                              </div>
                            </div>
                            <div class="item">
                              <h3>
                                <a href="#" class="main_page_link">Оформление</a>
                              </h3>
                              <div class="w-desc">
                                Сертификаты на купленные у нас <br />
                                предметы искусства. Оформление <br />
                                документов на вывоз
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
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom" >
    </div>
  </div>
</div>
@endsection
