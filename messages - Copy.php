<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/novus/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:06 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novus Admin Theme | Messages</title>

	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-iphone.png" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/toastr.css">
    
    <link rel="stylesheet" type="text/css" href="css/vex/vex.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-default.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-flat-attack.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-os.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-plain.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-top.css">
    <link rel="stylesheet" type="text/css" href="css/vex/vex-theme-wireframe.css">

    <link rel="stylesheet" type="text/css" href="css/messenger/messenger.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-future.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-air.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-block.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-flat.css">
    <link rel="stylesheet" type="text/css" href="css/messenger/messenger-theme-ice.css">


	<link href="css/style.css" rel="stylesheet" type="text/css" />

	
</head>
<body>
	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>
	<div id="wrapper" class="container">

		<div id="top">
			<div id="topBar">
				<?php 
				include 'topbar.html';
				?>
			</div> <!-- /topBar -->

			<div id="profile">
			<?php
			include 'profilehead.php';
			?>
		
		
		</div> <!-- /profile -->
		</div> <!-- /top -->

		<div id="sidebar">
			<?php 
			include 'sidebar.html';
			?>

		</div> <!-- /sidebar -->

		<div id="main" class="clearfix">

						<div class="secInfo">
							<h1 class="secTitle">Messages</h1>
							<span class="secExtra">Chat &amp; other things</span>
						</div> <!-- /SecInfo -->

			
			<div class="fluid">
				
				<div class="widget leftcontent grid8">
					<div class="widget-header">
						<h3 class="widget-title">Messaging System</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-inputs" checked />
	  						<label class="slider" for="slider-inputs"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
								<ul class="dropdown-menu pull-right">
	                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#"> Other actions</a></li>
	                                </ul>
                            </div><!-- /btn dd -->
						</div>
					</div>
					
					<div class="widget-content pad10">

						<div class="comment">
							
							<div class="comment-header">
								<div class="comment-person">
									<div class="comment-img">
										<img src="images/comm-1.jpg" rel="comment-1">
									</div>
									<div class="comment-hex hex-green"></div>
								</div>
								<div class="comment-info">
									<div class="c-name">John Stone</div>
									<div class="c-time">3 hours ago</div>
								</div>
								<a href="#" onclick="return false;" class="icon-button btn-reply"><i class="fa fa-reply"></i></a>
								<div class="c-ip">IP: <span class="ip">172.10.56.3</span></div>
							</div> <!-- /comment-header -->
							
							<div class="comment-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
							</div> <!-- /comment-text -->
						</div> <!-- /comment -->

						<div class="comment">
							
							<div class="comment-header">
								<div class="comment-person">
									<div class="comment-img">
										<img src="images/comm-3.jpg" rel="comment-1">
									</div>
									<div class="comment-hex hex-green"></div>
								</div>
								<div class="comment-info">
									<div class="c-name">John Stone</div>
									<div class="c-time">3 hours ago</div>
								</div>
								<a href="#" onclick="return false;" class="icon-button btn-reply"><i class="fa fa-reply"></i></a>
								<div class="c-ip">IP: <span class="ip">172.10.56.3</span></div>
							</div> <!-- /comment-header -->
							
							<div class="comment-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
							</div> <!-- /comment-text -->

							<div class="comment-reply">
								<div class="reply-header">
									<div class="reply-person">
										<div class="comment-img">
											<img src="images/comm-3.jpg" rel="comment-1">
										</div>
										<div class="comment-hex hex-green"></div>
									</div>
									<div class="reply-info">
										<div class="c-name">John Stone</div>
										<div class="c-time">2:36 pm</div>
									</div>
									<div class="c-ip">IP: <span class="ip">172.10.55.3</span></div>
								</div>

								<div class="comment-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								</div> <!-- /comment-text -->
							</div> <!-- /comment-reply -->
							<div class="comment-reply">
								<div class="reply-header">
									<div class="reply-person">
										<div class="comment-img">
											<img src="images/comm-3.jpg" rel="comment-1">
										</div>
										<div class="comment-hex hex-green"></div>
									</div>
									<div class="reply-info">
										<div class="c-name">John Stone</div>
										<div class="c-time">2:36 pm</div>
									</div>
									<div class="c-ip">IP: <span class="ip">172.10.55.3</span></div>
								</div>

								<div class="comment-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								</div> <!-- /comment-text -->
							</div> <!-- /comment-reply -->
						</div> <!-- /comment -->

						<div class="comment">
							<div class="comment-header">
								<div class="comment-person">
									<div class="comment-img">
										<img src="images/comm-2.jpg" rel="comment-1">
									</div>
									<div class="comment-hex hex-yellow"></div>
								</div>
								<div class="comment-info">
									<div class="c-name">Anna Andreson</div>
									<div class="c-time">6 hours ago</div>
								</div>
								<a href="#" onclick="return false;" class="icon-button btn-reply"><i class="fa fa-reply"></i></a>
								<div class="c-ip">IP: <span class="ip">172.10.56.3</span></div>
							</div> <!-- /comment-header -->
							
							<div class="comment-text">
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</div> <!-- /comment-text -->

							<div class="comment-reply">
								<div class="reply-header">
									<div class="reply-person">
										<div class="comment-img">
											<img src="images/comm-3.jpg" rel="comment-1">
										</div>
										<div class="comment-hex hex-green"></div>
									</div>
									<div class="reply-info">
										<div class="c-name">John Stone</div>
										<div class="c-time">2:36 pm</div>
									</div>
									<div class="c-ip">IP: <span class="ip">172.10.55.3</span></div>
								</div>

								<div class="comment-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								</div> <!-- /comment-text -->
							</div> <!-- /comment-reply -->

						</div> <!-- /comment -->
						
					</div> <!-- /widget-content -->

				</div> <!-- /widget -->

				<div class="widget grid4">

					<div class="widget-header">
						<h3 class="widget-title">Toastr</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-toastr" checked />
	  						<label class="slider" for="slider-toastr"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
								<ul class="dropdown-menu pull-right">
	                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#"> Other actions</a></li>
	                                </ul>
                            </div><!-- /btn dd -->
						</div>
					</div>

					<div class="widget-content pad20">

						<div class="btns center">	
							<button id="toastr-success" class="btn btn-green">Toastr Success</button>
							<button id="toastr-info" class="btn btn-aqua">Toastr Info</button>
							<button id="toastr-error" class="btn btn-red">Toastr Error</button>
							<button id="toastr-warning" class="btn btn-yellow">Toastr Warning</button>
							<div class="divider"></div>
							<button id="toastr-clear" class="btn">Clear Toastrs</button>
						</div>

					</div>

				</div> <!-- /widget -->


				<div class="widget grid4">

					<div class="widget-header">
						<h3 class="widget-title w-off">Messenger</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-msgs" />
	  						<label class="slider" for="slider-msgs"></label>
						</div>
					</div>

					<div class="widget-content pad20 w-off">

						<div class="btns center">	
							<button id="msgr-simple" class="btn btn-aqua">Messenger Simple</button>
							<button id="msgr-error" class="btn btn-red">Messenger Error</button>
							<div class="divider"></div>
							<button id="msgr-clear" class="btn btn-green">Clear Messenger</button>
						</div>

					</div>

				</div> <!-- /widget -->


				<div class="widget grid4">

					<div class="widget-header">
						<h3 class="widget-title">Modals</h3>
						<div class="widget-controls">
							<input type="checkbox" class="sl" id="slider-modals" checked />
	  						<label class="slider" for="slider-modals"></label>
	  						<div class="btn-group xtra"> <!-- btn dd -->
								<a href="#" onclick="return false;" class="icon-button dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
								<ul class="dropdown-menu pull-right">
	                                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
	                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
	                                    <li><a href="#"><i class="fa fa-ban"></i> Ban</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#"> Other actions</a></li>
	                                </ul>
                            </div><!-- /btn dd -->
						</div>
					</div>

					<div class="widget-content pad20">

						<div class="btns center">

							<a href="#myModal" role="button" class="btn btn-blue btn-light-text" data-toggle="modal" data-target="#myModal">Bootstrap modal</a>
							
							<p class="marginTop20">Vex Modals</p>
							<button id="vex-modal-alert" class="btn btn-yellow">Vex Alert</button>
							<button id="vex-modal-confirm" class="btn btn-green">Vex Confirm</button>
							<button id="vex-modal-theme-flat-attack" class="btn btn-aqua">Vex Theme Flat Attack</button>
							<button id="vex-modal-theme-os" class="btn btn-blue">Vex Theme OS</button>
							<button id="vex-modal-theme-plain" class="btn btn-lavender">Vex Theme Plain</button>
							<button id="vex-modal-theme-top" class="btn btn-red">Vex Theme Top</button>
							<button id="vex-modal-theme-wireframe" class="btn btn-orange">Vex Theme Wireframe</button>
						
						</div> <!-- /center -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Modal body
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-grey" data-dismiss="modal">Close</button>
        <button type="button" class="btn">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

					</div> <!-- /widget-content -->

				</div> <!-- /widget -->
				

				</div> <!-- /fluid -->

			</div> <!-- /main -->


		</div>  <!-- /wrapper -->

	<div class="clearfix"></div>
	<div id="footer">
		2013 &copy; Novus Admin v1.0. Powered by <a href="http://www.pixeden.com/" target="_blank">Pixeden</a>
	</div>

	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="js/excanvas.min.js"></script>
	<script type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="js/toastr.min.js"></script>
	<script type="text/javascript" src="js/vex.combined.min.js"></script>
	<script type="text/javascript" src="js/messenger.min.js"></script>
	<script type="text/javascript" src="js/messenger-theme-future.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

	<script>vex.defaultOptions.className = 'vex-theme-default';</script>
	<script type="text/javascript">
	$(document).ready(function(){
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "positionClass": "toast-bottom-right",
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}

		$('#toastr-success').click(function(){
			toastr.success('Awesome! Could Lorem ipsum more...');

		})
		$('#toastr-info').click(function(){
			toastr.info('Awesome! Could Lorem ipsum more...')
		})
		$('#toastr-error').click(function(){
			toastr.error('Awesome! Could Lorem ipsum more...')
		})
		$('#toastr-warning').click(function(){
			toastr.warning('Awesome! Could Lorem ipsum more...')
		})
		$('#toastr-clear').click(function(){
			toastr.clear();
		})

		$('#vex-modal-alert').click(function(){
			vex.dialog.alert('This is a modal fired with Vex!')
		})
		$('#vex-modal-confirm').click(function(){
			vex.dialog.confirm({
				message: 'Are you absolutely sure you want to destroy the alien planet?'
			})
		})
		$('#vex-modal-theme-flat-attack').click(function(){
			vex.dialog.alert({ message: 'Another modal fired with Vex! <br> This time with "Flat Attack" Theme', className: 'vex-theme-flat-attack' })
		})
		$('#vex-modal-theme-os').click(function(){
			vex.dialog.alert({ message: 'Another modal fired with Vex! <br> This time with "OS" Theme',	className: 'vex-theme-os' })
		})
		$('#vex-modal-theme-plain').click(function(){
			vex.dialog.alert({ message: 'Another modal fired with Vex! <br> This time with "Plain" Theme',	className: 'vex-theme-plain' })
		})
		$('#vex-modal-theme-top').click(function(){
			vex.dialog.alert({ message: 'Another modal fired with Vex! <br> This time with "Top" Theme',	className: 'vex-theme-top' })
		})
		$('#vex-modal-theme-wireframe').click(function(){
			vex.dialog.alert({ message: 'Another modal fired with Vex! <br> This time with "Wireframe" Theme',	className: 'vex-theme-wireframe' })
		})

		Messenger.options = {
		   extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
		   theme: 'flat'
		}

		Messenger().post("Welcome to the Messages page");

		setTimeout(function(){
			var i;

			i = 0;

			Messenger().run({
			  errorMessage: 'Error connecting to the server... <br>What server!??',
			  successMessage: 'Solved!',
			  action: function(opts) {
			    if (++i < 3) {
			      return opts.error({
			        status: 500,
			        readyState: 0,
			        responseText: 0
			      });
			    } else {
			      return opts.success();
			    }
			  }
			});
		}, 3000)
	

		$('#msgr-simple').click(function(){
			Messenger().post("Welcome to Messages page");
		})

		$('#msgr-error').click(function(){
			Messenger().post({
			  message: 'There was an explosion while processing your request.',
			  type: 'error',
			  showCloseButton: true
			});
		})

		$('#msgr-clear').click(function(){
			Messenger().hideAll();
		})

	})
	</script>
</body>

<!-- Mirrored from themes-pixeden.com/demos/novus/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 09:53:13 GMT -->
</html>