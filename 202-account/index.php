<?php include_once(substr(dirname( __FILE__ ), 0,-12) . '/202-config/connect.php'); 
AUTH::require_user(); 
$strProtocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';

template_top();  ?>

<div class="row home">
  <div class="col-xs-12">
	<div id="tracking202_alerts" style="text-align:center;">
		<span><img src="<?php echo get_absolute_url();?>202-img/loader-small.gif" style="margin-right: 4px;"/> checking for new alerts...</span>
	</div>
  </div>
</div>

<div class="row home">
  <div class="col-xs-7">
  	<div class="row">
	  <div class="col-xs-12">
	  	<h6 class="h6-home">Special Offers <span class="glyphicon glyphicon-tags home-icons"></span></h6>
	  </div>

	  <div class="col-xs-12" style="min-height: 306px;">
		<h6 class="h6-home">Tracking202 News <span class="glyphicon glyphicon-comment home-icons"></span></h6>
			<div id="tracking202_tweets"><img src="<?php echo get_absolute_url();?>202-img/loader-small.gif" style="display: block;"/></div>
			<div id="tracking202_posts"><img src="<?php echo get_absolute_url();?>202-img/loader-small.gif" style="display: block;"/></div>
	  </div>

	  <div class="col-xs-12">
		<h6 class="h6-home">Upcoming Meetup202 Events <span class="glyphicon glyphicon-user home-icons"></span> <span class="meetup-links"><a href="http://meetup.tracking202.com/" target="_blank">(all meetups)</a> - <a href="http://apply.meetup.tracking202.com/" target="_blank">(become an organizer)</a></span></h6>
		<div id="tracking202_meetups"><img src="<?php echo get_absolute_url();?>202-img/loader-small.gif" style="display: block;"/></div>
	  </div>
	</div>
  </div>

  <div class="col-xs-5">
  <div class="row">
  	<div class="col-xs-12 apps">
  		<h6 class="h6-home">My Applications <span class="glyphicon glyphicon-folder-open home-icons"></span></h6>
  			<div class="row">
  				<div class="col-xs-2">
  					<a href="<?php echo get_absolute_url();?>tracking202/"><img src="<?php echo get_absolute_url();?>202-img/new/icons/shield.svg"></a>
  				</div>
  				<div class="col-xs-10">
  					<a href="<?php echo get_absolute_url();?>tracking202/">Prosper202 ClickServer</a><br/><span>Advanced affiliate conversion tracking & optimization software.</span>
  				</div>
  			</div>
  			 <div class="row app-row">
  				<div class="col-xs-2">
  					<a href="<?php echo get_absolute_url();?>202-appstore"><img src="<?php echo get_absolute_url();?>202-img/new/icons/building.svg"></a>
  				</div>
  				<div class="col-xs-10">
  					<a href="<?php echo get_absolute_url();?>202-appstore">AppStore202</a><br/><span>Download New Extensions and Apps to enhance Prosper202.</span>
  				</div>
  			</div>
  			<div class="row app-row">
  				<div class="col-xs-2">
  					<a href="<?php echo get_absolute_url();?>202-Mobile"><img src="<?php echo get_absolute_url();?>202-img/new/icons/responsive.svg" style="margin-left: 8px;"></a>
  				</div>
  				<div class="col-xs-10">
  					<a href="<?php echo get_absolute_url();?>202-Mobile">Mobile202</a><br/><span>View your stats with mobile version of Prosper202</span>
  				</div>
  			</div>
  			<div class="row app-row">
  				<div class="col-xs-2">
  					<a href="<?php echo get_absolute_url();?>202-resources/"><img src="<?php echo get_absolute_url();?>202-img/new/icons/basket.svg"></a>
  				</div>
  				<div class="col-xs-10">
  					<a href="<?php echo get_absolute_url();?>202-resources/">Resources202</a><br/><span>Discover more applications to help you sell.</span>
  				</div>
  			</div>

  	</div>
  </div>

  <div class="row">
  	<div class="col-xs-12 apps">
  		<h6 class="h6-home">Extra Resources <span class="glyphicon glyphicon-info-sign home-icons"></span></h6>

  		<div class="row">
  			<div class="col-xs-2">
  				<a href="http://blog.tracking202.com/" target="_blank"><img src="<?php echo get_absolute_url();?>202-img/new/icons/news.svg" style="width: 48px;"></a>
  			</div>
  			<div class="col-xs-10">
  				<a href="http://blog.tracking202.com/" target="_blank">Blog</a> - <a href="http://twitter.tracking202.com/" target="_blank">Twitter</a> - <a href="http://newsletter.tracking202.com" target="_blank">Newsletter</a><br/><span>Connect with us to get the latest updates.</span>
  			</div>
  		</div>

  		<div class="row app-row">
  			<div class="col-xs-2">
  				<a href="http://support.tracking202.com/" target="_blank"><img src="<?php echo get_absolute_url();?>202-img/new/icons/support.svg"></a>
  			</div>
  			<div class="col-xs-10">
  				<a href="http://support.tracking202.com/" target="_blank">Community Support</a><br/><span>Talk with other users, and get help.</span>
  			</div>
  		</div>

  		<div class="row app-row">
  			<div class="col-xs-2">
  				<a href="http://developers.tracking202.com" target="_blank"><img src="<?php echo get_absolute_url();?>202-img/new/icons/settings.svg"></a>
  			</div>
  			<div class="col-xs-10">
  				<a href="http://developers.tracking202.com" target="_blank">Developers</a><br/><span>Do cool things with the Tracking202 APIs.</span>
  			</div>
  		</div>

  		<div class="row app-row">
  			<div class="col-xs-2">
  				<a href="http://meetup.tracking202.com" target="_blank"><img src="<?php echo get_absolute_url();?>202-img/new/icons/shirt.svg"></a>
  			</div>
  			<div class="col-xs-10">
  				<a href="http://meetup.tracking202.com" target="_blank">Meetup202</a><br/><span>Affiliate Marketing Meetup Groups around the World.</span>
  			</div>
  		</div>

  		<div class="row app-row">
  			<div class="col-xs-2">
  				<a href="http://tracking202.com/videos/" target="_blank"><img src="<?php echo get_absolute_url();?>202-img/new/icons/video.svg"></a>
  			</div>
  			<div class="col-xs-10">
  				<a href="http://tracking202.com/videos/" target="_blank">TV202</a><br/><span>Affiliate Marketing Interviews & Tutorials.</span>
  			</div>
  		</div>

  	</div>

  	<div class="col-xs-12">
  		<h6 class="h6-home">Partners <span class="glyphicon glyphicon-thumbs-up home-icons"></span></h6>
  		<div id="tracking202_sponsors"><img src="<?php echo get_absolute_url();?>202-img/loader-small.gif" style="display: block;"/></div>
  	</div>
  </div>
  </div>
</div>
<img src="http://my.tracking202.com/api/v2/dni/deeplink/cookie/set/<?php echo base64_encode($strProtocol . getTrackingDomain() . get_absolute_url());?>">

<?php template_bottom(); ?>