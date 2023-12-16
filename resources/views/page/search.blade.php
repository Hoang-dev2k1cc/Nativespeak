@extends('master')
@section('content')
@foreach($subtitle as $sub)
<h1 class="ttlr">How to pronounce"<span class="key">{{$key}}</span>" in English (  results {{count($subtitle2)}}):</h1>
<div class="video">
    <iframe id="link" src="https://www.youtube.com/embed/{{$sub->link}}?start={{$sub->start}}&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </iframe>
    <div class="control-youtube">
        <div class="icon">
                                <a class="share" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v={{$sub->link}}&t={{$sub->start}}" target="_blank" ><i class="fa-brands fa-square-facebook"></i></a>
                                <a class="share" href="https://twitter.com/share?text=&url=https://www.youtube.com/watch?v={{$sub->link}}&t={{$sub->start}}" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                                <a class="share" href="https://www.pinterest.com/pin/create/button/?url=https://www.youtube.com/watch?v={{$sub->link}}&t={{$sub->start}}&media=&description=" target="_blank"><i class="fa-brands fa-square-pinterest"></i></a>
        </div>
        {{$subtitle->appends(request()->all())->links('page.paginate')}}
        <!-- {{$subtitle->links()}} -->
    </div>
    <div id="caption">
        <p>{{$sub->content}}</p>
        <div class="stran">
            <a target="_blank" href="https://translate.google.ie/?sl=en&tl=vi&text={{$sub->content}}&op=translate">[G. Translate]</a>
        </div>
    </div>
    @foreach($word as $w)
    @if($w->type==0)
    <div class="definition">
        <div class="keyword definition-heading">
            <h2>Definition:</h2>
        </div>
        <div class="definition-body">
            <h3>Click on any word below to get its definition:</h3>
            <div class="sub">
                <ul>
                    @foreach($subtitle as $sub)
                    <li>{{$sub-> content}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="nearby">
        <div class="keyword nearby-heading">
            <h2>Nearby words:</h2>
        </div>
        <div class="nearby-body">
            <h3>You may want to improve your pronunciation of <span class="bold">''{{$w->content}}''</span>  by saying one of the nearby words below:</h3>
            <div class="near">
                <ul>
                    @foreach($word2 as $w2)
                    <li>
                        <a href="{{ route('search.data', ['data' => $w2->content]) }}">{{$w2->content}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="phonetic">
        <div class="keyword phonetic-heading">
            <h2>Phonetic:</h2>
        </div>
        <div class="phonetic-body">
            @foreach($word as $w)
            <h3>When you begin to speak English, it's essential to get used to the common sounds of the
                language, and the best way to do this is to check out the phonetics. Below is the UK
                transcription for '<span class="bold">{{$w->content}}</span>':</h3>
            <div class="phone">
                <ul>
                    <li><span class="bold">Modern IPA: </span>{{$w->modern}}</li>
                    <li><span class="bold">Traditional IPA: </span>{{$w->traditional}} </li>
                    <li><span class="bold">1 syllable: </span> "{{$w->syllable}}"</li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <div class="tip">
        <div class="keyword tip-heading">
            <h2>Tips to improve your English pronunciation:</h2>
        </div>
        <div class="tip-body">
            <h3>Here are 4 tips that should help you perfect your pronunciation of '<span class="bold">{{$key}}</span>':</h3>
            <ul>
                <li><span class="bold">Break '{{$key}}'</span> down into sounds: [<span class="bold">{{$key}}</span>] - say it out loud and exaggerate the sounds
                    until you can consistently produce them.</li>
                <li><span class="bold">Record yourself</span> saying '<span class="bold">{{$key}}</span>' in full sentences, then watch yourself and listen.
                    You'll be able to mark your mistakes quite easily.</li>
                <li><span class="bold">Look up tutorials on Youtube</span> on how to pronounce '<span class="bold">{{$key}}</span>'.</li>

                <li><span class="bold">Focus on one accent:</span> mixing multiple accents can get really confusing especially for
                    beginners, so pick one accent (US or UK) and stick to it.</li>
            </ul>
            <h3>To further improve your English pronunciation, we suggest you do the following:</h3>
            <ul>
                <li> <span class="bold">Work on word/sentence reduction:</span>  in some countries, reducing words and sentences can
                    be seen as informal but in the United States, it's completely normal and part of
                    everyday conversation (eg: what are you going to do this weekend → what you gonna do
                    this weekend). Check out gonna and wanna for more examples.</li>
                <li><span class="bold">Work on your intonation:</span>stress, rhythm and intonation patterns are not easy to
                    master in English but they are crucial to make others understand what you say. It's
                    what expresses the mood, attitude and emotion. Check out Youtube, it has countless
                    videos related to this subject.</li>
                <li><span class="bold">Subscribe to 1 or more English teaching channels on Youtube:</span> it's free and it covers
                    the core topics of the English language. Check out Rachel and Mike channels to name
                    just a few.</li>
                <li><span class="bold">Use Intersub extension:</span> this is probably the most effective way to learn English
                    while watching videos online. Try it now.</li>
            </ul>
        </div>
    </div>

</div>
@endforeach
<div class="index_bottom_ad2">
    <div class="g_pr_ad_network">
        <ins class="adsbygoogle" data-ad-client="ca-pub-4884889260645232" data-ad-slot="7157075410" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done" data-ad-status="filled">
            <div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement">
                <iframe id="aswift_1" name="aswift_1" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="855" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-4884889260645232&amp;output=html&amp;h=280&amp;slotname=7157075410&amp;adk=2916358493&amp;adf=3234323087&amp;pi=t.ma~as.7157075410&amp;w=855&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1684777412&amp;rafmt=1&amp;format=855x280&amp;url=https%3A%2F%2Fyouglish.com%2F&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTEzLjAuNTY3Mi4xMjciLFtdLDAsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMTMuMC41NjcyLjEyNyJdLFsiQ2hyb21pdW0iLCIxMTMuMC41NjcyLjEyNyJdLFsiTm90LUEuQnJhbmQiLCIyNC4wLjAuMCJdXSwwXQ..&amp;dt=1684777412489&amp;bpp=7&amp;bdt=212&amp;idt=220&amp;shv=r20230517&amp;mjsv=m202305160101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D1c7dbaa64c499b89-22c020873ce1009a%3AT%3D1684763814%3ART%3D1684763814%3AS%3DALNI_MbkhqRpscafuP6sqiu4CM9zm1knFg&amp;gpic=UID%3D00000c0994aa1961%3AT%3D1684763814%3ART%3D1684763814%3AS%3DALNI_MaBWVm94FgK1qOjVi4IRF7CA5mg4g&amp;correlator=1939024910724&amp;frm=20&amp;pv=2&amp;ga_vid=668886420.1684763811&amp;ga_sid=1684777413&amp;ga_hid=1815189954&amp;ga_fc=1&amp;u_tz=420&amp;u_his=7&amp;u_h=768&amp;u_w=1366&amp;u_ah=738&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=105&amp;ady=416&amp;biw=1349&amp;bih=610&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759837%2C44759926%2C31074199%2C31074688%2C42531705%2C44788442%2C44792646%2C44791169%2C31067146%2C31067147%2C31067148%2C31068556%2C44776500&amp;oid=2&amp;pvsid=2685926476417299&amp;tmod=970811676&amp;uas=0&amp;nvt=1&amp;topics=ARTwLgIE0J9H29ujOp4UcDzIQjaAys5ZjBKuQU1SNmpRU9jTdZOKxCBoPm9VlJrKuEsse-eI1UpD9TaJAJRMpyHyXvFAJrseRMxcEN4OaY-ETP3U3XXu2kLzFFCK6zdVDH3Zn6g7A1u-Ab3kbzfHWgb6ufJQSLyN5VvteCh-Qj4Es4lGcRVik5o29fOZSYB7EIbyH9SyqDTxsFudqlN0&amp;ref=https%3A%2F%2Fyouglish.com%2Fchinese&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C738%2C1366%2C610&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;td=1&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=RobqudldHF&amp;p=https%3A//youglish.com&amp;dtd=241" data-google-container-id="a!2" data-google-query-id="CP3c3vm8if8CFQ7DlgodJ2cDxg" data-load-complete="true"></iframe>
            </div>
        </ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>

@endsection