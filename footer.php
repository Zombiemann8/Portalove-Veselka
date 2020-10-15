<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function() {
        $('.loader-item').fadeOut();
        $('#pageloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow-y':'visible'});
    })
    //]]>
</script>