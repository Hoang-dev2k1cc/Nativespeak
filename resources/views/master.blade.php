<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <base href="{{asset('')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="source/css/index.css">
    <link rel="stylesheet" href="source/libries/fontawesome-free-6.4.0-web/css/all.css">
    <script src="source/js/share.js"></script>
    <title>Document</title>
    
</head>

<body>
   
            @include('header')
            <div id="content" class="container nav-body">
        <div class="row ">
<div  class="col-md-9">
                <div class="nav-search">
                    <div class="">
                        <a href="{{route('Home')}}"> <img src="source/img/logo.jpg" alt=""></a>
                    </div>
                    <form action="{{ route('search.data', ['data' => '0']) }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="data" placeholder="Search">
                            <button  class="btn btn-s" type="submit">Say it!</button>
                        </div>
                        <div id="accent" class="accent btn-group">
                            <div class="btn-group">
                                <label title="All accents" class="btn_acc btn btn-default ">
                                    All
                                </label>
                                <label title="US accents" class="btn_acc btn btn-default ">
                                    US
                                </label>
                                <label title="UK accents" class="btn_acc btn btn-default ">
                                    UK
                                </label>
                                <label title="USA accents" class="btn_acc btn btn-default ">
                                    AUS
                                </label>
                                <button class="btn btn-button">
                                    <span><i class="fa-sharp fa-solid fa-caret-down"></i></span></button>
                            </div>
                        </div>
                    </form>
                    </div>
                    @yield('content')        
            </div>
            <div class="col-md-3">
                <div class="g_pr_ad_network2">
                    <ins class="adsbygoogle2"
                        data-ad-client="ca-pub-4884889260645232" data-ad-slot="3301590886" data-ad-format="auto"
                        data-full-width-responsive="true" data-adsbygoogle-status="done" data-ad-status="filled">
                        <div id="aswift_2_host"
                            tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_2"
                                name="aswift_2"
                                sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                width="245" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0"
                                hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting"
                                src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-4884889260645232&amp;output=html&amp;h=600&amp;slotname=3301590886&amp;adk=3932178630&amp;adf=4065594387&amp;pi=t.ma~as.3301590886&amp;w=245&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1684777412&amp;rafmt=1&amp;format=245x600&amp;url=https%3A%2F%2Fyouglish.com%2F&amp;fwr=0&amp;fwrattr=true&amp;rpe=1&amp;resp_fmts=4&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTEzLjAuNTY3Mi4xMjciLFtdLDAsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMTMuMC41NjcyLjEyNyJdLFsiQ2hyb21pdW0iLCIxMTMuMC41NjcyLjEyNyJdLFsiTm90LUEuQnJhbmQiLCIyNC4wLjAuMCJdXSwwXQ..&amp;dt=1684777412496&amp;bpp=3&amp;bdt=218&amp;idt=245&amp;shv=r20230517&amp;mjsv=m202305160101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D1c7dbaa64c499b89-22c020873ce1009a%3AT%3D1684763814%3ART%3D1684763814%3AS%3DALNI_MbkhqRpscafuP6sqiu4CM9zm1knFg&amp;gpic=UID%3D00000c0994aa1961%3AT%3D1684763814%3ART%3D1684763814%3AS%3DALNI_MaBWVm94FgK1qOjVi4IRF7CA5mg4g&amp;prev_fmts=855x280&amp;correlator=1939024910724&amp;frm=20&amp;pv=1&amp;ga_vid=668886420.1684763811&amp;ga_sid=1684777413&amp;ga_hid=1815189954&amp;ga_fc=1&amp;u_tz=420&amp;u_his=7&amp;u_h=768&amp;u_w=1366&amp;u_ah=738&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=980&amp;ady=42&amp;biw=1349&amp;bih=610&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759837%2C44759926%2C31074199%2C31074688%2C42531705%2C44788442%2C44792646%2C44791169%2C31067146%2C31067147%2C31067148%2C31068556%2C44776500&amp;oid=2&amp;pvsid=2685926476417299&amp;tmod=970811676&amp;uas=0&amp;nvt=1&amp;topics=ARTwLgIE0J9H29ujOp4UcDzIQjaAys5ZjBKuQU1SNmpRU9jTdZOKxCBoPm9VlJrKuEsse-eI1UpD9TaJAJRMpyHyXvFAJrseRMxcEN4OaY-ETP3U3XXu2kLzFFCK6zdVDH3Zn6g7A1u-Ab3kbzfHWgb6ufJQSLyN5VvteCh-Qj4Es4lGcRVik5o29fOZSYB7EIbyH9SyqDTxsFudqlN0&amp;ref=https%3A%2F%2Fyouglish.com%2Fchinese&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C738%2C1366%2C610&amp;vis=1&amp;rsz=%7C%7CleE%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;td=1&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;fsb=1&amp;xpc=t2GwxNBcJh&amp;p=https%3A//youglish.com&amp;dtd=256"
                                data-google-container-id="a!3" data-google-query-id="CJKZ4Pm8if8CFabLFgUd9t4B-Q"
                                data-load-complete="true"></iframe></div>
                    </ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

            </div>
        </div>
       
    </div>

           @include('footer')
</body>

</html>