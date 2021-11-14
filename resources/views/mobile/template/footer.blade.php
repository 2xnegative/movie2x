<div id="footer">
    <div class="footer clearfix">
        <div class="footerleft" style="width: 100%">
            Copyright © 2019 <a href="{{ $setting->domain }}">{{ $setting->title }}</a>
            <div><span>{{ $setting->domain }}</span></div>
            <div style="height: 3.5rem; overflow: hidden; text-overflow: ellipsis">
                {!! $setting->footer !!}
            </div>
        </div>
        <div class="footeright">
        </div>
    </div>
</div>