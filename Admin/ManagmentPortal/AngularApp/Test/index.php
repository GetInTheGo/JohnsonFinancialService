<section style="text-align:right;height:80px;width:100%;;background-color:#181D20;line-height:80px;">
	<div ng-click="showEmail = 'all'" ng-show="showEmail !='all'">
		<span style=" margin-right:20%;font-size:40px;color:lightgrey;vertical-align:middle"><i class="fa fa-th"></i></span>
	</div>
</section>
<section ng-show="showEmail =='all'" style="padding:20px"> 
	<div ng-click="showEmail = 'lpass'" class='EmailPreview' style="display:inline-block;position:relative;margin-right:10px;text-align:center">
		<span style="font-weight:bolder;font-size:20px">Lost Password</span><br>
		<img src="/Images/Emails/LostPassword-png.webp"><br>
		
	</div>
	<div ng-click="showEmail = 'gen'" style="display:inline-block;position:relative;text-align:center" class='EmailPreview'>
		<span style="font-weight:bolder;font-size:20px">Generic</span><br>
		<img src="/Images/Emails/GenericEmail.jpg"><br>
		
	</div>
</section>
<div ng-switch on="showEmail" ng-animate="'flip'">
        <div ng-switch-when="lpass" ng-animate="'flip'"><div ng-include="'Partials/Emails/LostPassword.php'"></div></div>
		<div ng-switch-when="gen"><div ng-include="'Partials/Emails/Generic.html'"></div></div>
</div>

	
