<div class="container">

    @if(config('easel.disqus_name'))

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @include('vendor.easel.frontend.blog.partials.disqus')
            </div>
        </div>

        <br>

    @endif

    <div class="text-center">
        <hr width="50%">
        <span id="subtitle">{{ config('easel.subtitle') }}</span>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="small">&copy; {{ date('Y') }} {{ config('easel.title') }}. Code released under the <a href="https://github.com/talv86/easel/blob/master/LICENSE" target="_blank">MIT License</a></p>
            </div>
        </div>
    </div>
</div>

<span id="top-link-block" class="hidden">
    <a href="#top" class="btn btn-primary btn-xs waves-effect" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="fa fa-chevron-up"></i> Back to Top
    </a>
</span><!-- /top-link-block -->