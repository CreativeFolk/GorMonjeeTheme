<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GorMonjeeTheme
 */
?>

<footer class="page-footer">
  <div class="container">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <h5>The Company</h5>
      <address>
        GorMonjee Inc.<br/>
        1621 Euclid Avenue Suite 2150<br/>
        Cleveland, Ohio<br/>
        info@gormonjee.com
      </address>

      <p>GorMonjee is a Flashstarts company located in Cleveland Ohio.</p>

    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <h5>The Product</h5>
      <dl>
        <dt>For Consumers</dt>
        <dl>Nutrition management and meal planning</dl>
        <dt>For Professionals</dt>
        <dl>Nutrition management and client analytics</dl>
      </dl>

    </div>
  </div>
</footer>

<?php $template_directory = get_bloginfo('template_directory'); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $template_directory; ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php echo $template_directory; ?>/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $template_directory; ?>/js/vendor/skrollr.js"></script>
<script type="text/javascript">
  var s = skrollr.init();
</script>

<script src="<?php echo $template_directory; ?>/js/main.js"></script>

<!-- TypeKit Initialization -->
<script>
  (function(d) {
    var config = {
      kitId: 'alv5uhg',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<?php wp_footer(); ?>
</body>
</html>
