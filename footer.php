			</div> 	<!-- end #main-area -->
		<footer id="main_footer" class="clearfix">
			<p id="copyright"><!--<span style="font-size:22px;">联系我们</span><br />长城会<br /><a href="mailto: info@gmic-sv.com" title="Email Us" target="_blank">info@gmic-sv.com</a><br /><a href="http://www.facebook.com/theGMIC" target="_blank">www.facebook.com/theGMIC</a><br /><a href="http://www.twitter.com/theGMIC" target="_blank">Twitter: @theGMIC</a><br />565 Clyde Ave, Suite 600, Mountain View, CA, 94043<br />-->Copyright © Global Mobile Internet Conference  - All rights reserved.<br />Organized by <a target="_blank" href="http://www.gwc.net">GWC</a></p>
		</footer> <!-- end #main_footer -->
	</div> <!-- end #container -->
<div id="bg">
	<img src="http://beijing.thegmic.com/wp-content/themes/gmic/images/bg-web3.jpg" alt="">
</div>

	<?php wp_footer(); ?>

<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-5.6.1-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(function() {
				$("#foo5").carouFredSel({
						responsive	: true,
						scroll		: {
							fx			: "crossfade"
						},
						items		: {
							visible		: 1,
							width		: 386,
							height		: 225
						}
					});
				//	Fuild layout example 2, centering the items
				$("#foo3").carouFredSel({
					auto		:  {
						play: true,
						delay: 2000,
					},
					height: 70,
					width: '100%',
					scroll: 2,
				});
				
				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					pagination	: {
						container		: "#pager2",
						anchorBuilder	: function( nr, item ) {
							var title = item.find( "h2.agenda_title" ).text();
							return "<span>" + title + "</span>";
						}
					},
					auto: false,
				});
				
				$("#foo1").carouFredSel({
					auto		: true,
					auto : {pauseDuration   : 5000},
					scroll      : {
						duration        : 900},
					width: '100%',
				});
				
				//if (navigator.platform.match(/iP(od|hone|ad)/i)) {
				//    $(window).scroll(function() {
				//        $('#fixed-div').css({
				//            position : 'absolute',
				//            top      : ($(window).height() + $(document).scrollTop() - 110) + 'px'
				//        });
				//    });
				//}

				//back to top button
				var pxShow = 300;//height on which the button will show
				var fadeInTime = 1000;//how slow/fast you want the button to show
				var fadeOutTime = 1000;//how slow/fast you want the button to hide
				var scrollSpeed = 300;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
				jQuery(window).scroll(function(){
					if(jQuery(window).scrollTop() >= pxShow){
						jQuery("#backtotop").fadeIn(fadeInTime);
					}else{
						jQuery("#backtotop").fadeOut(fadeOutTime);
					}
				});
				 
				jQuery('#backtotop a').click(function(){
					jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
					return false; 
				}); 

			});
		</script>
		<img class="title-tab" src="<?php echo get_template_directory_uri(); ?>/images/sponsors-tab.png" />
<div class="image_carousel">	
	<ul id="foo3">
	 <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/top-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>   
	  <li style="width: 161px;"><a href="http://english.sina.com/index.html" target="_blank"><img src="/wp-content/uploads/sponsors/sina.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.tencent.com/en-us/index.shtml" target="_blank"><img src="/wp-content/uploads/sponsors/tencent.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	  
	  <li style="width: 161px;"><a href="http://us.91.com/" target="_blank"><img src="/wp-content/uploads/sponsors/91.png" height="135" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	  
	   <li style="width: 161px;"><a href="http://www.ucweb.com/index.html" target="_blank"><img src="/wp-content/uploads/sponsors/ucweb.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	   <li style="width: 161px;"><a href="http://www.xiaomi.com" target="_blank"><img src="/wp-content/uploads/sponsors/xiaomi.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	   <li style="width: 161px;"><a href="http://www.inmobi.com/" target="_blank"><img src="/wp-content/uploads/sponsors/inmobi.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
	   <li style="width: 161px;"><a href="http://www.chukong-inc.com/en/" target="_blank"><img src="/wp-content/uploads/sponsors/chukong.png" height="57" style="border: 1px solid #7b6596; padding: 0px;" /></a></li>
		
	   <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/ggs-partner.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	   <li style="width: 161px;"><a href="http://store.wo.com.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/wostore.png" height="57" style="border: 1px solid #e70012; padding: 0px;" /></a></li>

	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/diamond-sponsor-tab.png" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 161px;"><a href="http://idreamsky.com/" target="_blank"><img src="/wp-content/uploads/sponsors/idreamsky.png"height="57"style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.aliyun.com/" target="_blank"><img src="/wp-content/uploads/sponsors/aliyun.png"height="57"style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.100tv.com/" target="_blank"><img src="/wp-content/uploads/sponsors/100tv.png"height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>

	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/platinum-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.domob.cn/?lan=en" target="_blank"><img src="/wp-content/uploads/sponsors/domob2.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.maxthon.com/" target="_blank"><img src="/wp-content/uploads/sponsors/aoyou.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.hdtmedia.com/" target="_blank"><img src="/wp-content/uploads/sponsors/hdt.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.neic.com.cn/english/" target="_blank"><img src="/wp-content/uploads/sponsors/NEIC.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.touchpal.com/" target="_blank"><img src="/wp-content/uploads/sponsors/chubao.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.moyogame.com/" target="_blank"><img src="/wp-content/uploads/sponsors/moyo.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.WQMobile.com/" target="_blank"><img src="/wp-content/uploads/sponsors/wqmobile.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.boyaa.com/" target="_blank"><img src="/wp-content/uploads/sponsors/boyaa.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.letv.com/" target="_blank"><img src="/wp-content/uploads/sponsors/letv.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.cloopen.com/" target="_blank"><img src="/wp-content/uploads/sponsors/cloopen.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.yijifen.com/" target="_blank"><img src="/wp-content/uploads/sponsors/yijifen.png"height="57"style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.cmge.com/" target="_blank"><img src="/wp-content/uploads/sponsors/cmge.png"height="57"style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://en.sky-mobi.com/" target="_blank"><img src="/wp-content/uploads/sponsors/sky-mobi.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.ford.com/" target="_blank"><img src="/wp-content/uploads/sponsors/Ford.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  
	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/gold-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.yicha.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/yicha.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.admaster.com.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/admaster.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.rockmobile.com/en/" target="_blank"><img src="/wp-content/uploads/sponsors/rock-mobile.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.adsage.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/adSage.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.pacific-crest.com/" target="_blank"><img src="/wp-content/uploads/2013/03/logo-3.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
      <li style="width: 139px;"><a href="http://www.appannie.com/" target="_blank"><img src="/wp-content/uploads/sponsors/appannie-foot.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.adwo.com/" target="_blank"><img src="/wp-content/uploads/sponsors/adwo.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.zhidian3g.com/" target="_blank"><img src="/wp-content/uploads/sponsors/zhidian.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.getjar.com/" target="_blank"><img src="/wp-content/uploads/sponsors/GetJar.png" height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.autonavi.com/en/index" target="_blank"><img src="/wp-content/uploads/sponsors/autonavi.png" height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.ksyun.com/" target="_blank"><img src="/wp-content/uploads/sponsors/ksyun.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.secneo.com/" target="_blank"><img src="/wp-content/uploads/sponsors/bangbang.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://en.sky-mobi.com/" target="_blank"><img src="/wp-content/uploads/sponsors/sky-mobi.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.yongche.com/" target="_blank"><img src="/wp-content/uploads/sponsors/yongche.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.airpush.com/" target="_blank"><img src="/wp-content/uploads/sponsors/airpush.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.umeng.com/" target="_blank"><img src="/wp-content/uploads/sponsors/umeng.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.xckjy.com/" target="_blank"><img src="/wp-content/uploads/sponsors/cpark.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.ijinshan.com/" target="_blank"><img src="/wp-content/uploads/sponsors/ijinshan.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.mingdao.com/" target="_blank"><img src="/wp-content/uploads/sponsors/mingdao.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.payeco.com/" target="_blank"><img src="/wp-content/uploads/sponsors/payeco.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.mafengwo.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/mfw.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="https://chartboost.com/" target="_blank"><img src="/wp-content/uploads/sponsors/Chartboost.png"height="57"style="border: 1px solid #eba706; padding: 0;" /></a></li>


	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/product-sponsor-tab.png" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.polycom.com/" target="_blank"><img src="/wp-content/uploads/sponsors/polycom.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.pivoful.com/En/" target="_blank"><img src="/wp-content/uploads/sponsors/veme.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.igetui.com/" target="_blank"><img src="/wp-content/uploads/sponsors/getui.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.ubcoffee.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/ubcoffee.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.diditaxi.com.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/didi.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.vancl.com/" target="_blank"><img src="/wp-content/uploads/sponsors/vancl.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.rekoo.com/" target="_blank"><img src="/wp-content/uploads/sponsors/rekoo.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.gamemusic.com.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/xiaoxu.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.vhall.com/" target="_blank"><img src="/wp-content/uploads/sponsors/vhall.png"height="57"style="border: 1px solid #00b7f3; padding: 0;" /></a></li>


	</ul>
	<div class="clearfix"></div>
	<div class="pagination" id="foo3_pag"></div>
</div>
<div id="backtotop">
   <a href="#">&uarr; TOP</a>
</div>
<!-- BEGIN OLARK IMAGE TAB-->
<style>
    div#olark_tab{
        position: fixed;
        left: 0;
        bottom:79px;
        z-index:5000;
    }
    #olark_tab a {
        display:block;
        /*Edit these to change the look of your tab*/
        border: 0px solid white;
        border-left-style: none;
        border-bottom-style: none;
        margin-top:0px;
    }
    #olark_tab a:hover{
        border-color: orange;
    }
</style>

<div id="olark_tab">
    <a href="javascript:void(0);" onclick="olark('api.box.expand')">
        <img src="http://static.olark.com/images/livehelp-tab-icon.png" />
    </a>
</div>
<!-- END OLARK TAB-->
		
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1667-530-10-6415');/*]]>*/</script><noscript><a href="https://www.olark.com/site/1667-530-10-6415/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fbe49ba8724c59fa2d0221fd77e41f419' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>