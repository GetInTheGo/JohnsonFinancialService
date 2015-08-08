<?php
$datas = json_decode($_POST['datas']);

$to = $datas->to; // this is your Email address
    $from = $datas->from; // this is the sender's Email address
    $name = $datas->cusName;
    $subject = $datas->subject;
    $message = str_replace('"',"'",$datas->message);
$yName = $datas->yName;
$cusName = $datas->cusName;
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From:" . $from ;    
   // mail($to,$subject,$message,$headers);
	$message2 = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1' />
  <title>Skyline Confirm Email</title>
  <style type='text/css'>
    @import url(http://fonts.googleapis.com/css?family=Lato:400);

    /* Take care of image borders and formatting */

    img {
      max-width: 600px;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      text-decoration: none;
      border: 0;
      outline: none;
    }

    a img {
      border: none;
    }

    /* General styling */

    td, h1, h2, h3  {
      font-family: Helvetica, Arial, sans-serif;
      font-weight: 400;
    }

    body {
      -webkit-font-smoothing:antialiased;
      -webkit-text-size-adjust:none;
      width: 100%;
      height: 100%;
      color: #37302d;
      background: #ffffff;
    }

     table {
      border-collapse: collapse !important;
    }


    h1, h2, h3 {
      padding: 0;
      margin: 0;
      color: #ffffff;
      font-weight: 400;
    }

    h3 {
      color: #21c5ba;
      font-size: 24px;
    }

    .important-font {
      color: #29475F;
      font-weight: bold;
    }

    .hide {
      display: none !important;
    }

    .force-full-width {
      width: 100% !important;
    }
  </style>

  <style type='text/css' media='screen'>
    @media screen {
       /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
      td, h1, h2, h3 {
        font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type='text/css' media='only screen and (max-width: 480px)'>
    /* Mobile styles */
    @media only screen and (max-width: 480px) {
      table[class='w320'] {
        width: 320px !important;
      }

      table[class='w300'] {
        width: 300px !important;
      }

      table[class='w290'] {
        width: 290px !important;
      }

      td[class='w320'] {
        width: 320px !important;
      }

      td[class='mobile-center'] {
        text-align: center !important;
      }

      td[class*='mobile-padding'] {
        padding-left: 20px !important;
        padding-right: 20px !important;
        padding-bottom: 20px !important;
      }

      td[class*='mobile-block'] {
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        padding-bottom: 20px !important;
      }

      td[class*='mobile-border'] {
        border: 0 !important;
      }

      td[class*='reveal'] {
        display: block !important;
      }
    }
  </style>
</head>
<body class='body' style='padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none' bgcolor='#ffffff'>
<table align='center' cellpadding='0' cellspacing='0' width='100%' height='100%'>
  <tr>
			<table align='center' cellpadding='0' cellspacing='0' width='100%' height='100%'>
				<tr>
					<td align='center' valign='top' bgcolor='#ffffff' width='100%'>

						<table cellspacing='0' cellpadding='0' width='100%'>
							<tr bgcolor='#95C2E9'>
								<td style='border-bottom: 3px solid #29475F;' width='100%'>
									<center>
										<table cellspacing='0' cellpadding='0' width='500' class='w320'>
											<tr>
												<td valign='top' style='padding:5px 0; text-align:center;' class='mobile-center'>
													<img width='200' height='100' src='http://johnsonfinancialservice.com/Images/Logos/JohnsonFinance2.png'>

												</td>

											</tr>
										</table>
									</center>
								</td>
							</tr>
							<tr>
								<td background='https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG' bgcolor='#8b8284' valign='top' style='background: url(http://johnsonfinancialservice.com/Images/Backgrounds/MountainBackGround1.jpg); background-size:cover;background-repeat:no-repeat; background-color: #8b8284;background-position:0 60% '>
									<!--[if gte mso 9]>
          <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:303px;'>
            <v:fill type='tile' src='https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG' color='#8b8284' />
            <v:textbox inset='0,0,0,0'>
          <![endif]-->
									<div>
										<center>
											<table cellspacing='0' cellpadding='0' width='530' height='150' class='w320'>
												<tr>
													<td valign='middle' style='vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:center;' height='150'>

														<table cellspacing='0' cellpadding='0' width='100%'>
															<tr>
																<td>
																	<h1>Invest in Your Future</h1>
																	<br>
																	<h2></h2>
																	<br>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</center>
									</div>
									<!--[if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]-->
								</td>
							</tr>
							<tr class='force-full-width'>
								<td valign='top' class='force-full-width'>
									<center>
										<table cellspacing='0' cellpadding='0' width='500' class='w320'>
											<tr>
												<td valign='top' style='border-bottom:1px solid #a1a1a1;'>

													<table cellspacing='0' cellpadding='0' class='force-full-width'>
														<tr>
															<td style='padding: 15px 0;' class='mobile-padding'>

																<table class='force-full-width' cellspacing='0' cellpadding='0'>
																	<tr>
																		<td style='text-align: left;'>
																			<span class='important-font'>
                            												" . $cusName . "<br>
                         													 </span>

																		</td>

																	</tr>
																</table>

															</td>
														</tr>
														<tr>
															<td style='padding-bottom: 15px;' class='mobile-padding'>




															</td>
														</tr>
													</table>


												</td>
											</tr>
											<tr>
												<td>

													<table cellspacing='0' cellpadding='0' width='100%'>
														<tr>
															<td class='mobile-padding' style='text-align:left;'>
																<br>" . $message . "
																<br>
																<br>-" . $yName . "
																<br>
																<br>
																<br>

															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</center>
								</td>
							</tr>
							<tr>
								<td style='background-color:#95C2E9; border-top: 3px solid #29475F;'>
									<center>
										<table cellspacing='0' cellpadding='0' width='500' class='w320'>
											<tr>
												<td>
													<table cellspacing='0' cellpadding='30' width='100%'>
														<tr>
															<td style='text-align:center;padding-top:20px;width:40px;opacity:.7'>
																<a href='#'>
																	<img src='http://johnsonfinancialservice.com/Images/Icons/SocialMedia/twitter.png' alt='twitter' />
																</a>
															</td>
															<td style='text-align:center;padding-top:20px;width:40px;opacity:.7'>
																<a href='#'>
																	<img src='http://johnsonfinancialservice.com/Images/Icons/SocialMedia/google-plus.png' alt='google plus' />
																</a>
															</td>
															<td style='text-align:center;padding-top:20px;width:40px;opacity:.7'>
																<a href='#'>
																	<img src='http://johnsonfinancialservice.com/Images/Icons/SocialMedia/facebook.png' alt='facebook' />
																</a>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<center>
														<table style='margin:0 auto;' cellspacing='0' cellpadding='5' width='100%'>
															<tr>
																<td style='text-align:center; margin:0 auto;' width='100%' height='20px'>

																</td>
															</tr>
														</table>
													</center>
												</td>
											</tr>
										</table>
									</center>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	";




mail($to,$subject,$message2,$headers);



?>