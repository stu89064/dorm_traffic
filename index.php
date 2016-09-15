<?php
	require_once('assets/essential.php');
	//For Debug
	//$ip = "140.116.101.55";
?>
<html>
<head>
<title>成大宿網流量查詢系統 4.0 | 成大學生會</title>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/pace/themes/pace-theme-minimal.css" rel="stylesheet" type="text/css"/>



<script src="https://code.jquery.com/jquery-2.1.4.js" type="text/javascript"></script>
<script src="assets/global/plugins/pace/pace.js" type="text/javascript"></script>
<script src="assets/jquery.cookie.js" type="text/javascript"></script>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/global/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/global/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="assets/global/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="assets/global/plugins/flot/jquery.flot.crosshair.min.js"></script>
<script src="assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/components-pickers.js"></script>
<script src="assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script>

<!--<script src="assets/admin/pages/scripts/charts-flotcharts.js"></script>-->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
jQuery(document).ready(function() {
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
QuickSidebar.init();
ChartsFlotcharts.init();
ChartsFlotcharts.initCharts();
//ChartsFlotcharts.initPieCharts();
ChartsFlotcharts.initBarCharts();
ComponentsPickers.init();

});
</script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->

<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {    
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>

</head>
<body style="overflow:hidden;">
	<div class="page-content-wrapper">
		<div style="margin:15px;">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-yellow-gold"><?echo $ip;?></h3>
								<small>IP位址</small>
							</div>
							<div class="icon">
								<i class="fa fa-circle-o-notch"></i>
							</div>
						</div>
						<div class="progress-info">
							<span class="label label-primary"><? echo $dormname[mb_substr($ip,8,3,"utf8")];?></span>
							
							<a href='http://www.cc.ncku.edu.tw/dorm/disable/index.php' target="_blank" id="dormnet_ip_status" title="即時查詢IP使用狀態">
							<span class="label label-default"><i class="fa fa-search"></i> IP狀態查詢中...</span>
							</a>
							
							<a href='#' id="user_id" title="IP綁定學號狀態" data-toggle="modal" data-target="#ip-panel" onclick="parent.document.body.scrollTop = 200;window.document.body.scrollTop = 0;">
								<!--<span class="label label-default"><i class="fa fa-square-o"></i> IP未綁定</span>-->
							</a>
							<script>
								$('#user_id').load("assets/getdata.php",{type:"ip_get_id",ip:"<? echo $ip;?>"});
							</script>
							
							<noscript>
							<span class="label label-danger">限制模式(JS不支援)</span>
							</noscript>
							
							<script>
								$('#dormnet_ip_status').load("assets/getdata.php",{type:"dormnet_ip_status",ip:"<? echo $ip;?>"});
							</script>
							
							<div class="status">
								<div class="status-title">
									 
								</div>
								<div class="status-number">
									 
									 <span class="label label-sm label-warning" onMouseOver="$(this).popover('show');" onMouseOut="$(this).popover('hide');" data-toggle="popover" data-placement="bottom" title="版本編號：4.01.<?php echo filemtime("index.php");?>" data-content="程式更新時間：<?php echo date("Y-m-d H:i:s",filemtime("index.php"));?>">版本資訊</span>
									 <span class="label label-sm label-success" onMouseOver="$(this).popover('show');" onMouseOut="$(this).popover('hide');" data-toggle="popover" data-placement="bottom" title="相容性報告" data-content="<?php echo $_SERVER['HTTP_USER_AGENT'];?>">相容性報告</span>
									 <a href="#" title="中文正體/簡體切換"><span class="label label-sm label-primary" onclick="TongWenWFU.toggle()">正簡體轉換</span></a>
									 <a href="#" title="顯示全部訊息"> <span class="label label-sm label-default" onclick="expend();">全部訊息</span></a>
									 <a href="#" title="在新視窗中開啟"><span class="label label-sm label-info" onclick="new_window()">新視窗</span></a>
									 <a href='#' data-toggle="modal" data-target="#login" onclick="parent.document.body.scrollTop = 200;window.document.body.scrollTop = 0;" onMouseOver="$(this).popover('show');" onMouseOut="$(this).popover('hide');" data-toggle="popover" data-placement="bottom" title="登入狀態" data-content="<?php if(isset($_COOKIE['nckuid'])){echo "登入身分：".strtoupper($_COOKIE['nckuid']);}else{echo "未登入";}?>"><span class="label label-sm label-success">成功入口ID</span></a>
								</div>
								<script>
									function expend(){
										$('#col-chg-float').css('float','right');
										$(document.body).animate({scrollTop:$('#refer_point').offset().top-20}, 500);
										$('#port-height-control').css('height','550px');
										$('#col-chg-float').removeClass("col-md-6");
										$('#col-chg-float').addClass("col-md-9");
										$('#col-sidebar').removeClass("col-md-6");
										$('#col-sidebar').addClass("col-md-3");
										$('.emt').removeClass("col-md-6");
										$('.emt').addClass("col-md-12");
									}
									function normal(){
										$('#col-chg-float').css('float','left');
										$('#port-height-control').css('height','250px');
										$('#col-chg-float').removeClass("col-md-9");
										$('#col-chg-float').addClass("col-md-6");
										$('#col-sidebar').removeClass("col-md-3");
										$('#col-sidebar').addClass("col-md-6");
										$('.emt').removeClass("col-md-12");
										$('.emt').addClass("col-md-6");
									}
									function new_window(){
										var nwin = window.open('<?echo $_SERVER['PHP_SELF'];?>','full','width=1280,height=680,top=0,left=0,menubar=no,scrollbars=no,status=no,toolbar=no,location=no,directories=no,resizable=no');
										//parent.opener=top;
										//opener.close();
										
										nwin.document.open( );
										nwin.document.write("<head><title>成大宿網流量查詢系統 4.0 | 成大學生會</title></head><body leftmargin=\"0\" topmargin=\"0\"><iframe src=\"<?echo $_SERVER['PHP_SELF'];?>\" width=\"100%\" height=\"680\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe></body>");
										nwin.document.close( );
									}
								</script>
								
							</div>
						</div>
					</div>
				</div>
				<?php
					//這小時
					$now_sql_query = "SELECT `download` , `upload` , `total` , `timestamp` , `hours`, `rank`  FROM `$date` WHERE `ip` = \"$ip\" ORDER BY `timestamp` DESC LIMIT 0,1";
					$now_result = mysql_query($now_sql_query);
					while($x=mysql_fetch_row($now_result))
					{
						$now_download = byte2gb($x[0]);
						$now_upload = byte2gb($x[1]);
						$now_total = byte2gb($x[2]);
						$now_timestamp = $x[3];
						$now_hour = $x[4];
						$now_rank = $x[5] +1;
					}
					//上一小時
					$last_sql_query = "SELECT `download` , `upload` , `total` , `timestamp` , `hours`, `rank`  FROM `$date` WHERE `ip` = \"$ip\" ORDER BY `timestamp` DESC LIMIT 1,1";
					$last_result = mysql_query($last_sql_query);
					while($x=mysql_fetch_row($last_result))
 					{
						$last_total = byte2gb($x[2]);
						$last_hour = $x[4];
						$last_rank = $x[5];
					}
				?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp"><?php if(isset($now_total)){echo $now_total;}else{echo "0 ";}?><small class="font-green-sharp">GB</small></h3>
								<small>使用流量 
								<? 
									if($now_total<=4 && $now_total!=0)
									{
										echo "<span class=\"label label-sm label-success\"><i class=\"fa fa-battery-quarter\"></i> 安全</span>";
									}
									else if($now_total>4 && $now_total<=7)
									{
										echo "<span class=\"label label-sm label-warning\"><i class=\"fa fa-battery-half\"></i> 警戒</span>";
									}
									else if($now_total>7 && $now_total<8)
									{
										echo "<span class=\"label label-sm label-warning\"><i class=\"fa fa-battery-three-quarters\"></i> 危險</span>";
									}
									else if($now_total>=8)
									{
										echo "<span class=\"label label-sm label-danger\"><i class=\"fa fa-battery-full\"></i> 超過限流</span>";
									}
								?>
								</small>
							</div>
							<div class="icon">
								<i class="icon-pie-chart"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: <?php if($now_total<=8){echo ceil($now_total/0.08);}else{echo "100";}?>%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only">已使用  <?php if($now_total<=8){echo ceil($now_total/0.08);}else{echo "100";}?>%</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 已使用
								</div>
								<div class="status-number">
									 <?php if($now_total<=8){echo ceil($now_total/0.08);}else{echo "100";}?>%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze"><?php if(!isset($now_timestamp)){echo "尚無資料";}else{echo mb_substr($now_timestamp,11,5,"utf8");}?></h3>
								<small>更新時間</small>
							</div>
							<div class="icon">
								<i class="fa fa-clock-o"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: <? echo ceil(mb_substr($now_timestamp,11,2,"utf8")/0.24);?>%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only"><? echo ceil(mb_substr($now_timestamp,11,2,"utf8")/0.24);?>% change</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 本日已過
								</div>
								<div class="status-number">
									 <? echo ceil(mb_substr($now_timestamp,11,2,"utf8")/0.24);?>%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp"><?echo round(($now_total-$last_total),3);?> <small class="font-blue-sharp">GB</small></h3>
								<small><?php if(isset($now_timestamp)){echo mb_substr($now_timestamp,11,2,"utf8")-1;}else{echo "0";}?> 時至 <? echo mb_substr($now_timestamp,11,2,"utf8")-0;?> 時流量</small>
							</div>
							<div class="icon">
								<i class="fa fa-plus"></i>
							</div>
						</div>
						<div class="progress-info">
						<?php
							$grow = ceil((($now_total-$last_total)/$last_total)*100);
							if($grow<100)
							{
								$width = $grow;
							}
							else
							{
								$width = 100;
							}
						?>
							<div class="progress">
								<span style="width: <?echo $width;?>%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only"><?echo $grow;?>% grow</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 一小時增加
								</div>
								<div class="status-number">
									 <?echo $grow;?>%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft"><small class="font-purple-soft">第</small> <?php if(isset($now_rank)){echo $now_rank;}else{echo "0";}?> <small class="font-purple-soft">名</small></h3>
								<small>流量排名</small>
							</div>
							<div class="icon">
								<i class="icon-user"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: <?echo 100-ceil($now_rank/65);?>%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only"><?echo 100-ceil($now_rank/65);?>% leading</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 領先於
								</div>
								<div class="status-number">
									 <?echo 100-ceil($now_rank/65);?>%
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-12" id="refer_point">
					<div class="row">
						<div class="col-md-6 col-sm-12" id="col-chg-float" ><!--改變浮動方向修正這個元素-->
							<div class="portlet light" style="height: 250px;" id="port-height-control">
								<div class="sel-panel" id="notifications" >
									<?php require_once('assets/notifications.php');?>
								</div><!--notifications-->
								<div class="sel-panel" id="eachhour" style="display:none">
								
									<iframe id="iframe_eachhour" src="/dorm/4.0/assets/eachhour_traffic.php?ip=<?echo $ip;?>&sel_date=<?echo date('Y-m-d');?>" width="100%" height=500 marginheight=0 marginwidth=0 frameborder=0 scrolling="no"></iframe>
									
								</div><!--eachhour-->
								<div class="sel-panel" id="history_traffic" style="display:none">
									
									<iframe src="/dorm/4.0/assets/history.php?ip=<?echo $ip;?>" width="100%" height=500 marginheight=0 marginwidth=0 frameborder=0 scrolling="no"></iframe>
									
								</div><!--history_traffic-->
								
								<div class="sel-panel" id="bandwidth" style="display:none">
									
									<iframe src="/dorm/4.0/assets/bandwidth.php?ip=<?echo $ip;?>" width="100%" height=500 marginheight=0 marginwidth=0 frameborder=0 scrolling="no"></iframe>
									
								</div><!--bandwidth-->
								
							</div><!--portlet light-->
							
						</div><!--col-md-6 col-sm-12-->
						<!-- END PORTLET-->
					<script>
									function selpanel(panel){
										if(panel != null){
											expend();
											$('.sel-panel').css('display','none');
											$(panel).css('display','');
											
										}else{
											normal();
											$('.sel-panel').css('display','none');
											$('#notifications').css('display','');
										}
									}
</script>
						
						<div class="col-md-6 col-sm-12" id="col-sidebar">
							<div class="col-md-6 col-sm-12 emt">
								<div class="top-news">
									<a href="javascript:;" class="btn green" onclick="selpanel(eachhour);document.getElementById('iframe_eachhour').src = document.getElementById('iframe_eachhour').src;">
									<h2>
									小時流量</h2>
									<h2><small>每小時流量分析</small></span></h2>
									<i class="fa fa-power-off top-news-icon"></i>
									</a>
								</div>
								
							</div><!--col-md-6 col-sm-12 emt-->
							<div class="col-md-6 col-sm-12 emt">
								<div class="top-news">
									<a href="javascript:;" class="btn blue" onclick="selpanel(history_traffic);">
									<h2>
									歷史趨勢</h2>
									<h2><small>單月總流量分析</small></h2>
									<i class="fa fa-circle-o-notch top-news-icon"></i>
									</a>
								</div>
								
							</div><!--col-md-6 col-sm-12 emt-->
							<div class="col-md-6 col-sm-12 emt">
								<div class="top-news">
									<a href="javascript:;" class="btn yellow" onclick="selpanel(bandwidth);">
									<h2>
									網路環境</h2>
									<h2><small>連主要網站狀態</small></h2>
									<i class="fa  fa-cube top-news-icon"></i>
									</a>
								</div>
								
							</div><!--col-md-6 col-sm-12 emt-->
							<div class="col-md-6 col-sm-12 emt">
								<div class="top-news">
									<a href="javascript:;" class="btn red">
									<h2>
									宿網負載</h2>
									<h2><small>校園網路頻寬負載</small></h2>
									<i class="fa fa-clock-o top-news-icon"></i>
									</a>
								</div>
								
							</div><!--col-md-6 col-sm-12 emt-->
						</div><!--col-md-6 col-sm-12-->
					</div><!--row-->
				</div><!--col-md-12-->
			</div><!--row margin-top-10-->
			<!-- END PAGE CONTENT INNER -->
		</div>
		<div style="margin-top:10000px;"></div>
	</div><!--page-content-wrapper-->
	
	<div class="scroll-to-top" onclick="selpanel();">
		<i class="icon-arrow-up"></i>
	</div>
</body>
<?php require_once('assets/script.php');?>
<?php require_once('assets/block.php');?>
