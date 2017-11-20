<div class="border-primary h-100">
    <div class="twitter-header bg-primary w-100">
        <a class=" text-center text-md-left collapse-link" href="#twitter-feed" data-toggle="collapse" aria-expanded="false" aria-controls="twitter-feed">
            <div class="row">
                <div class="col-10 twitter-header__div">
                    <span class="twitter-header__span">TWITTER:</span>Connect learn share
                </div> 
                <div class="col-2 d-flex justify-content-center align-items-center chevron-container">
                    <i class="fa fa-chevron-right"></i>
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
        </a>
    </div>
    <div id="twitter-feed" class="collapse-block collapse show h-100 d-flex justify-content-center">
        <a class="twitter-timeline" href="https://twitter.com/search?q={{setting('twitter.twitter_feed')}}" data-widget-id="{{setting('twitter.twitter_widget_id')}}"
            data-height="{{setting('twitter.twitter_feed_height')}}" data-chrome="noheader notransparent noscrollbar" data-hide_thread="false" data-lang="eng" data-status="true"
            data-conversation="parent" data-chrome="nofooter">Tweets about {{setting('twitter.twitter_feed')}}</a>
    </div>
    <script>
        ! function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + "://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");
    </script>
</div>