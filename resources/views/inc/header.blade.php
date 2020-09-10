<aside  class="vertical_menu_area with_scroll light" >
  <div class="vertical_menu_area_inner">
    <div style="background-color: #EDC3C4;" class="vertical_area_background"></div>
    <div class="vertical_logo_wrapper">
      <div class="q_logo_vertical">
        <a href="/">
					<img class="normal" style="height: 125px; width: 125px;" src="{{asset('/img/logo.png')}}" alt="Logo"/>
				</a>
    </div>
  </div>

  <nav class="vertical_menu dropdown_animation vertical_menu_on_click" aria-label="Navigation" itemscope itemtype="#">
    <ul id="menu-main_menu" class="">
      @if (Route::has('login'))
      @auth
      @if(Auth::check())
      <a href="#" class="login-st" itemprop="url">
        <span>{{ Auth::user()->name }} {{ Auth::user()->surname}}</span>
        <span class="plus"></span>
      </a><br>
      <a href="{{route('user.dashboard')}}" class="login-st" itemprop="url">
        <span>Профиль</span>
        <span class="plus"></span>
      </a><br>
      <a href="{{route('logout')}}" class="login-st" itemprop="url" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <span>Выйти</span>
        <span class="plus"></span>
      </a><br>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    @endif
    @else
      <a href="{{route('login')}}" class="login-st" itemprop="url"><span>Войти</span><span class="plus"></span></a><br>
    @endauth
    @endif
      <li class="menu-item menu-item-type-post_type menu-item-object-page narrow first current-menu-item page_item current_page_item open">
        <a href="{{route('index')}}" itemprop="url"><span>Главная</span><span class="plus"></span></a>
      </li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
        <a href="{{route('catalog')}}" itemprop="url"><span>Каталог</span><span class="plus"></span></a>
      </li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
        <a href="{{route('about')}}" itemprop="url"><span>О нас</span><span class="plus"></span></a>
      </li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
        <a href="{{route('news')}}" itemprop="url"><span>Новости</span><span class="plus"></span></a>
      </li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page narrow last">
        <a href="{{route('contact')}}" itemprop="url"><span>Контакты</span><span class="plus"></span></a>
      </li>
    </ul>
  </nav>
  <div class="vertical_menu_area_widget_holder">
    <div id="text-2" class="widget widget_text">
      <div class="textwidget leftside_contacts">
        <div class="separator  transparent position_center" style="margin-top: -29px;margin-bottom: 0px;"></div>
        г.Фантазии,<br />
        ул.Волшебство,<br />
        между небом землой этаж,<br />
        <br />
        +7 777 77-77-777<br />
        +8 888 88-88-888
      </div>
    </div>
  </div>
</div>
</aside>
