<nav class="no-padding bg-primary mb-1 pt-3 pb-3">
    <div class="row no-gutters">
        <div class="col-md-6 no-padding">
            <div class="row no-gutters">
                <div class="col-4 col-sm-4 col-md-2 logo d-flex justify-content-left align-items-center">
                    @if(setting('site.logo'))
                        <img src="{{url('/storage/'.setting('site.logo'))}}" alt="Logo" class="img-fluid ">
                    @else
                        <img src="/icons/logo.png" alt="Logo" class="img-fluid ">
                    @endif
                </div>
                <div id="app" class="col-8 col-sm-8 col-md-10">
                    <clock></clock>
                </div>
            </div>
        </div>
        <div class="col-md-6 no-padding">
            <div class="row no-gutters align-items-center h-100 search-form-padding">
                <form class="search-form" action="http://www.google.com/search" method="get" target="_blank">
                    <div class="form-row">
                        <div class="search-form__input__container">
                            <input id="google-search" type="text" name="q" class="form-control search-form__input" id="inlineFormInput" placeholder="Search Google">
                        </div>
                        <div class=" ml-auto  search-form__button__container">
                            <button name="submit" class="bg-primary search-form__button  h-100">
                                <i class="fa fa-google"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>