<script src="/frontend/js/jquery-2.1.4.js"></script>
<script src="/frontend/js/slick.js"></script>
<script src="/frontend/js/snap.svg.js"></script>
<script src="/frontend/js/main.js"></script>
<script src="/frontend/js/photoswipe.min.js"></script>
<script src="/frontend/js/photoswipe-ui-default.min.js"></script>
<script src="/frontend/js/jquery.touchSwipe.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102603071-1', 'auto');
    ga('send', 'pageview');

</script>


<script>

    $('body').on('click', 'a.disabled', function (event) {
//        console.log($(this).siblings('.drop_menu').find('.disabled'));
        if ($(this).siblings('.drop_menu').find('.disabled').length > 0) return true;
        event.preventDefault();
    })


</script>