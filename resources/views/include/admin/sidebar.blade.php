<div class="mdl-layout__drawer">
    <header>reizen</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="index.html">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <a class="mdl-navigation__link" href="{{action('Admin\LocationController@index')}}">
                        <i class="material-icons">room</i>
                        Location
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">ballot</i>
                            Blogs
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{action('Admin\BlogCategoryController@index')}}">
                                Blogs Category
                            </a>
                            <a class="mdl-navigation__link" href="{{action('Admin\BlogPostController@index')}}">
                                Blogs Post
                            </a>
                            <a class="mdl-navigation__link" href="">
                                Blog Images
                            </a>
                        </div>
                    </div>
                    <a class="mdl-navigation__link" href="ui-components.html">
                        <i class="material-icons">local_hotel</i>
                        Hotels
                    </a>
                    <a class="mdl-navigation__link" href="forms.html">
                        <i class="material-icons" role="presentation">local_mall</i>
                        Shoppping Malls
                    </a>
                    <a class="mdl-navigation__link" href="maps.html">
                        <i class="material-icons" role="presentation">local_grocery_store</i>
                        Grocery Shops
                    </a>
                    <a class="mdl-navigation__link" href="charts.html">
                        <i class="material-icons">accessibility</i>
                        Famous Attire
                    </a>
                    <a class="mdl-navigation__link" href="charts.html">
                        <i class="material-icons">wine_bar</i>
                        Traditional Aliment
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">local_cafe</i>
                            Restaurants
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="">
                                Restaurants Name
                            </a>
                            <a class="mdl-navigation__link" href="">
                                Restaurants Menu
                            </a>
                        </div>
                    </div>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">local_shipping</i>
                            Transports
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="">
                                Transports Category
                            </a>
                            <a class="mdl-navigation__link" href="">
                                Transports Cost
                            </a>
                        </div>
                    </div>
                    <hr>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>