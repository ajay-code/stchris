<div class="border-primary">
    <div class="twitter-header bg-primary w-100">
        <a class="collapse-link {{ setting('collapse.twitter_feed') ? 'collapsed':'' }}" href="#twitter-feed" data-toggle="collapse" aria-expanded="false" aria-controls="twitter-feed">
            <span class="twitter-header__span">
            TWITTER:
            </span> Connect learn share
            <span class="float-right mr-3">
                <i class="fa fa-chevron-right"></i>
                <i class="fa fa-chevron-down"></i>
            </span>
        </a>
    </div>
    <div id="twitter-feed" class="collapse {{ setting('collapse.twitter_feed') ? '':'show' }} d-flex justify-content-center">
        <a class="twitter-timeline" href="https://twitter.com/search?q={{setting('twitter.twitter_feed')}}" data-widget-id="{{setting('twitter.twitter_widget_id')}}"
            data-height="675" data-chrome="noheader notransparent noscrollbar" data-hide_thread="false" data-lang="eng" data-status="true"
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