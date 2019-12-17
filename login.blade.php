<!DOCTYPE html>
<html>
 <head>
  <!-- <title>Simple Login System in Laravel</title> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 <!-- </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Simple Login System in Laravel</h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/main/checklogin') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
<head> -->
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SignIn</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: SignIn;
		--web-view-id: SignIn;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: SignIn;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#SignIn {
		position: absolute;
		background: #E5E5E5;
		width: 1920px;
		height: 1103px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: SignIn;
		--web-view-id: SignIn;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#Grid {
		opacity: 0.6;
		position: absolute;
		width: 1110px;
		height: 9335.5px;
		left: 405px;
		top: -1.5px;
		display: none;
		overflow: visible;
	}
	#Group_22 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#ID1___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_46 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_23 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 95px;
		top: 0px;
		overflow: visible;
	}
	#ID2___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_47 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_24 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 190px;
		top: 0px;
		overflow: visible;
	}
	#ID3___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_48 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_25 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 285px;
		top: 0px;
		overflow: visible;
	}
	#ID4___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_49 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_26 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 380px;
		top: 0px;
		overflow: visible;
	}
	#ID5___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_50 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_27 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 475px;
		top: 0px;
		overflow: visible;
	}
	#ID6___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_51 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_28 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 570px;
		top: 0px;
		overflow: visible;
	}
	#ID7___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_52 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_29 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 665px;
		top: 0px;
		overflow: visible;
	}
	#ID8___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_53 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_30 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 760px;
		top: 0px;
		overflow: visible;
	}
	#ID9___12 {
		position: absolute;
		left: 12.5px;
		top: 0px;
		overflow: visible;
		width: 41px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_54 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_31 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 855px;
		top: 0px;
		overflow: visible;
	}
	#ID10___12 {
		position: absolute;
		left: 8px;
		top: 0px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_55 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_32 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 950px;
		top: 0px;
		overflow: visible;
	}
	#ID11___12 {
		position: absolute;
		left: 8.5px;
		top: 0px;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_56 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	#Group_33 {
		position: absolute;
		width: 65px;
		height: 9335.5px;
		left: 1045px;
		top: 0px;
		overflow: visible;
	}
	#ID12___12 {
		position: absolute;
		left: 8px;
		top: 0px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,0.4);
	}
	.Rectangle_57 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 9334px;
		left: 0px;
		top: 1.5px;
	}
	.Path_1130 {
		overflow: visible;
		position: absolute;
		width: 1920px;
		height: 72.538px;
		left: 0px;
		top: 1028.548px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Copyright___2019_DIY_Help__All {
		position: absolute;
		left: 491px;
		top: 1064px;
		overflow: visible;
		width: 330px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -7px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
	}
	#Small_Masters_Project_ {
		position: absolute;
		left: 1262px;
		top: 1064px;
		overflow: visible;
		width: 154px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -7px;
		text-align: right;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
	}
	#Path_1136 {
		opacity: 0.2;
	}
	.Path_1136 {
		overflow: visible;
		position: absolute;
		width: 1920px;
		height: 1px;
		left: 0px;
		top: 1046px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_414 {
		position: absolute;
		width: 1034px;
		height: 474px;
		left: 432px;
		top: 342px;
		overflow: visible;
	}
	#Group_337 {
		position: absolute;
		width: 1034px;
		height: 474px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_338 {
		position: absolute;
		width: 1034px;
		height: 474px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_339 {
		position: absolute;
		width: 1034px;
		height: 474px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_340 {
		position: absolute;
		width: 1034px;
		height: 474px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_628 {
		filter: drop-shadow(-10px 10px 20px rgba(75, 89, 129, 0.161));
		position: absolute;
		overflow: visible;
		width: 1094px;
		height: 534px;
		left: 0px;
		top: 0px;
	}
	#Sign_In_Already_have_an_accoun {
		position: absolute;
		left: 287px;
		top: 22px;
		overflow: visible;
		width: 431px;
		white-space: nowrap;
		line-height: 40.80000305175781px;
		margin-top: -2.4000015258789062px;
		text-align: center;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 36px;
		color: rgba(51,52,87,1);
	}
	#Group_389 {
		position: absolute;
		width: 180px;
		height: 51px;
		left: 92px;
		top: 343px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: details.html;
		cursor: pointer;
	}
	#Group_302 {
		position: absolute;
		width: 180px;
		height: 51px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_351 {
		position: absolute;
		width: 180px;
		height: 51px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_62 {
		position: absolute;
		overflow: visible;
		width: 180px;
		height: 51px;
		left: 0px;
		top: 0px;
	}
	#Sign_In {
		position: absolute;
		left: 56px;
		top: 12px;
		overflow: visible;
		width: 62px;
		white-space: nowrap;
		line-height: 21.600000381469727px;
		margin-top: -1.8000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(255,255,255,1);
	}
	.back__27_ {
		overflow: visible;
		position: absolute;
		width: 14.884px;
		height: 8.239px;
		transform: translate(0.454px, 0.265px) matrix(1,0,0,1,154.0356,22.9148) rotate(180deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
	}
	#Group_386 {
		position: absolute;
		width: 290px;
		height: 35px;
		left: 80px;
		top: 185px;
		overflow: visible;
	}
	/* #Email {
          
		/* position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 44px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -6px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(174,174,174,1);
	} */
	/* .Line_4 {
		overflow: visible;
		position: absolute;
		width: 290px;
		height: 2px;
		left: 0px;
		top: 35px;
		transform: matrix(1,0,0,1,0,0);
	} */
	#Group_387 {
		position: absolute;
		width: 290px;
		height: 35px;
		left: 80px;
		top: 225px;
		overflow: visible;
	}
	/* #Password {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 78px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -6px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(174,174,174,1);
	} */
	/* .Line_4_ci {
		overflow: visible;
		position: absolute;
		width: 290px;
		height: 2px;
		left: 0px;
		top: 35px;
		transform: matrix(1,0,0,1,0,0);
	} */
	.Line_20 {
		overflow: visible;
		position: absolute;
		width: 3px;
		height: 258.008px;
		left: 528.166px;
		top: 122.874px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_390 {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 615px;
		top: 176px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		cursor: pointer;
	}
	#Group_302_cl {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_351_cm {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_62_cn {
		position: absolute;
		overflow: visible;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
	}
	#Continue_with_Facebook {
		position: absolute;
		left: 56px;
		top: 21px;
		overflow: visible;
		width: 220px;
		white-space: nowrap;
		line-height: 21.600000381469727px;
		margin-top: -1.8000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(255,255,255,1);
	}
	.back__27__cp {
		overflow: visible;
		position: absolute;
		width: 14.884px;
		height: 8.239px;
		transform: translate(0px, -0.341px) matrix(1,0,0,1,285.0767,29.8112) rotate(180deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
	}
	#Group_391 {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 615px;
		top: 271px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Details.html;
		cursor: pointer;
	}
	#Group_302_cr {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_351_cs {
		position: absolute;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_62_ct {
		position: absolute;
		overflow: visible;
		width: 330px;
		height: 69px;
		left: 0px;
		top: 0px;
	}
	#Continue_with_Google {
		position: absolute;
		left: 68px;
		top: 26px;
		overflow: visible;
		width: 196px;
		white-space: nowrap;
		line-height: 21.600000381469727px;
		margin-top: -1.8000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(255,255,255,1);
	}
	.back__27__cv {
		overflow: visible;
		position: absolute;
		width: 14.884px;
		height: 8.239px;
		transform: translate(0px, -0.312px) matrix(1,0,0,1,285.0767,29.8112) rotate(180deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
	}
	.Rectangle_6_cx {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 45px;
		left: 405px;
		top: 0px;
	}
	.Rectangle_6_cx {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 45px;
		left: 405px;
		top: 0px;
	}
	.Path_2 {
		overflow: visible;
		position: absolute;
		width: 14.99px;
		height: 14.99px;
		left: 420.01px;
		top: 14.885px;
		transform: matrix(1,0,0,1,0,0);
	}
	#_Phone____49__176_576_665 {
		position: absolute;
		left: 443px;
		top: 14px;
		overflow: visible;
		width: 166px;
		white-space: nowrap;
		line-height: 15.600000381469727px;
		margin-top: -1.3000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(75,89,129,1);
	}
	.Rectangle_7 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 45px;
		left: 610px;
		top: 0px;
	}
	.Path_3 {
		overflow: visible;
		position: absolute;
		width: 11.25px;
		height: 15px;
		left: 625.453px;
		top: 14.875px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Frankengut_Str__1 {
		position: absolute;
		left: 644.703px;
		top: 14px;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		line-height: 15.600000381469727px;
		margin-top: -1.3000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(75,89,129,1);
	}
	.Rectangle_8 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 45px;
		left: 827px;
		top: 0px;
	}
	.Path_4 {
		overflow: visible;
		position: absolute;
		width: 15px;
		height: 11.25px;
		left: 842.156px;
		top: 16.75px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Email_contact_diy_help_com {
		position: absolute;
		left: 865.156px;
		top: 14px;
		overflow: visible;
		width: 190px;
		white-space: nowrap;
		line-height: 15.600000381469727px;
		margin-top: -1.3000001907348633px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(75,89,129,1);
	}
	.Rectangle_9 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 48px;
		left: 1365px;
		top: 0px;
	}
	.Path_5 {
		overflow: visible;
		position: absolute;
		width: 14px;
		height: 14px;
		left: 1383.5px;
		top: 16px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Rectangle_10 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 48px;
		left: 1415px;
		top: 0px;
	}
	.Path_6 {
		overflow: visible;
		position: absolute;
		width: 16px;
		height: 13px;
		left: 1432.5px;
		top: 16.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Rectangle_11 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 48px;
		left: 1465px;
		top: 0px;
	}
	.Rectangle_12 {
		position: absolute;
		overflow: visible;
		width: 1px;
		height: 48px;
		left: 1514px;
		top: 0px;
	}
	.Path_7 {
		overflow: visible;
		position: absolute;
		width: 14px;
		height: 14px;
		left: 1483px;
		top: 16px;
		transform: matrix(1,0,0,1,0,0);
	}
	#HOME {
		position: absolute;
		left: 683px;
		top: 62px;
		overflow: visible;
		width: 47px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#ABOUT {
		position: absolute;
		left: 755px;
		top: 62px;
		overflow: visible;
		width: 55px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#SERVICES {
		position: absolute;
		left: 835px;
		top: 62px;
		overflow: visible;
		width: 75px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#CATEGORIES {
		position: absolute;
		left: 1049px;
		top: 62px;
		overflow: visible;
		width: 99px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#BLOG {
		position: absolute;
		left: 958px;
		top: 62px;
		overflow: visible;
		width: 43px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
	}
	#CONTACT {
		position: absolute;
		left: 1196px;
		top: 62px;
		overflow: visible;
		width: 78px;
		white-space: nowrap;
		line-height: 18px;
		margin-top: -1px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(0,0,0,1);
		letter-spacing: -0.14px;
	}
	#We_connect_house_holds_with_pr {
		position: absolute;
		left: 391px;
		top: 140px;
		overflow: visible;
		width: 452px;
		white-space: nowrap;
		line-height: 29px;
		margin-top: -2.5px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(39,78,147,1);
		letter-spacing: -0.79px;
	}
	#DIY_Help_provides_platform_to_ {
		position: absolute;
		left: 391px;
		top: 173px;
		overflow: hidden;
		width: 389px;
		height: 53px;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(39,78,147,1);
	}
	#Group_398 {
		position: absolute;
		width: 1130px;
		height: 1px;
		left: 384px;
		top: 235.143px;
		overflow: visible;
	}
	.Line_24 {
		overflow: visible;
		position: absolute;
		width: 1130px;
		height: 10px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Image_30 {
		position: absolute;
		width: 112px;
		height: 71px;
		left: 384px;
		top: 58px;
		overflow: visible;
	}
	#Searchbar {
		position: absolute;
		width: 207.731px;
		height: 24.999px;
		left: 1307.27px;
		top: 62px;
		overflow: visible;
	}
	#Mask {
		position: absolute;
		width: 202px;
		height: 24.999px;
		left: 5.73px;
		top: 0px;
		overflow: visible;
	}
	#___Background {
		opacity: 0.06;
	}
	.___Background {
		filter: drop-shadow(8px 15px 25px rgba(0, 0, 0, 0.161));
		overflow: visible;
		position: absolute;
		width: 279.73px;
		height: 93px;
		left: 0px;
		top: 4px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Layout {
		position: absolute;
		width: 169px;
		height: 24px;
		left: 25.73px;
		top: 0px;
		overflow: visible;
	}
	#___Icon_Right {
		position: absolute;
		width: 19px;
		height: 19px;
		left: 150px;
		top: 3px;
		overflow: visible;
	}
	.Shape {
		overflow: visible;
		position: absolute;
		width: 19px;
		height: 19px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Color {
		opacity: 0.54;
	}
	.Color {
		overflow: visible;
		position: absolute;
		width: 13.846px;
		height: 13.846px;
		left: 2.375px;
		top: 2.375px;
		transform: matrix(1,0,0,1,0,0);
	}
	#____Search_Input {
		opacity: 0.54;
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: hidden;
		width: 139px;
		height: 24px;
		line-height: 24px;
		margin-top: -4px;
		text-align: left;
		font-family: Titillium Web;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.09375px;
	}
	#___Icon_Left {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 2px;
		display: none;
		overflow: visible;
	}
	.Shape_d {
		overflow: visible;
		position: absolute;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Color_d {
		opacity: 0.54;
	}
	.Color_d {
		overflow: visible;
		position: absolute;
		width: 17.489px;
		height: 17.49px;
		left: 3px;
		top: 3px;
		transform: matrix(1,0,0,1,0,0);
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.SIZE_STATE_NAME = "data-is-view-scaled";

	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.prefix = "--web-";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectMediaQueries();
		self.setViewOptions(view);
		self.setViewVariables(view);

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.showNavigationControls || (self.singlePageApplication && self.showByMediaQuery==false)) {
				self.syncronizeViewToURL();
			}
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}
	
		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view && setViewOptions) self.setViewOptions(view);
			if (view && setViewOptions) self.setViewVariables(view);
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	/**
	 * Show overlay over view
	 * @param {String} id id of view
	 * @param {Number} x x location
	 * @param {Number} y y location
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 */
	self.showOverlay = function(id, x, y, event) {
		var view = id ? self.getViewById(id) : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var display = null;

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var targetAnimation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", targetAnimation);
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		if (query) {
			self.enableMediaQuery(query);
		}
		else if (id) {
			if (view==null) {
				self.log("View not found, '"+ id + "'");
				return;
			}

			display = window.getComputedStyle(view).getPropertyValue("display");

			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		// do not set x or y position if centering
		centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
		centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");

		if (view && centerHorizontally==false) {
			view.style.left = x + "px";
		}
		
		if (view && centerVertically==false) {
			view.style.top = y + "px";
		}

		self.currentOverlay = view;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function() {
		var overlay = self.currentOverlay;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation) {
				self.reverseAnimation(overlay, true);
			}
			else {
				self.setViewVariables(null, self.currentOverlay);
				self.hideView(self.currentOverlay);
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			target.addEventListener("animationend", self.animationEndHideHandler);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!=""
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;

		//console.log("height:"+scaleNeededToFitHeight+",width:"+scaleNeededToFitWidth+",fit:"+scaleNeededToFit,"desired:"+desiredScale);

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			//desiredScale = self.getShortNumber(desiredScale);
			desiredScale = self.getShortNumber(desiredScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = window.location.hash;
		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && property in mediaRule.style) {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && property in cssRule.style) {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}
		
		return values.pop();
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			//view && view.addEventListener("animationend", self.animationEndHandler);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];
					var mediaId = null;

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo") {

						mediaId = self.getStyleRuleValue(mediaRule, property);

						self.addView(mediaId, cssRule);
						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					self.addView(selectorText, cssRule);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.views array
	 */
	self.addView = function(name, cssRule, parentId) {
		var state = {name:name, rule:cssRule, id:name, parentId:parentId};
		self.addedViews.push(name);
		self.viewsDictionary[name] = state;
		self.mediaQueryDictionary[name] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} name id of view in current
	 * @param {String} parent id of parent view
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 */
	self.goToView = function(name, maintainPreviousState, parent) {
		var state = self.viewsDictionary[name];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}
		
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = animation.replace(expression, "$" + "1");
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.resizeHandler = function(event) {
		self.scaleViewIfNeeded();
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.hashChangeHandler = function(event) {
		var fragment = window.location.hash ? window.location.hash.replace("#", "") : "";
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.setViewVariables(view);
			self.updateViewLabel();
			window.dispatchEvent(new Event(self.VIEW_CHANGE));
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
<div id="SignIn">
	<div id="Grid">
    
		<div id="Group_22">
			<div id="ID1___12">
				<span>1 / 12</span>
			</div>
			<svg class="Rectangle_46">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_46" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_23">
			<div id="ID2___12">
				<span>2 / 12</span>
			</div>
			<svg class="Rectangle_47">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_47" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_24">
			<div id="ID3___12">
				<span>3 / 12</span>
			</div>
			<svg class="Rectangle_48">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_48" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_25">
			<div id="ID4___12">
				<span>4 / 12</span>
			</div>
			<svg class="Rectangle_49">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_49" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_26">
			<div id="ID5___12">
				<span>5 / 12</span>
			</div>
			<svg class="Rectangle_50">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_50" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_27">
			<div id="ID6___12">
				<span>6 / 12</span>
			</div>
			<svg class="Rectangle_51">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_51" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_28">
			<div id="ID7___12">
				<span>7 / 12</span>
			</div>
			<svg class="Rectangle_52">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_52" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_29">
			<div id="ID8___12">
				<span>8 / 12</span>
			</div>
			<svg class="Rectangle_53">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_53" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_30">
			<div id="ID9___12">
				<span>9 / 12</span>
			</div>
			<svg class="Rectangle_54">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_54" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_31">
			<div id="ID10___12">
				<span>10 / 12</span>
			</div>
			<svg class="Rectangle_55">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_55" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_32">
			<div id="ID11___12">
				<span>11 / 12</span>
			</div>
			<svg class="Rectangle_56">
				<rect fill="rgba(105,180,255,0.18)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_56" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
		<div id="Group_33">
			<div id="ID12___12">
				<span>12 / 12</span>
			</div>
			<svg class="Rectangle_57">
				<rect fill="rgba(152,235,255,0.2)" stroke="rgba(0,0,0,0)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_57" rx="0" ry="0" x="0" y="0" width="65" height="9334">
				</rect>
			</svg>
		</div>
	</div>
	<svg class="Path_1130" viewBox="0 0 1920 72.538">
		<path fill="rgba(33,34,63,1)" id="Path_1130" d="M 0 0 L 507.8125305175781 0 L 527.9912109375 13.35761547088623 L 1920 13.35761547088623 L 1920 72.5379638671875 L 1017.235046386719 72.5379638671875 L 672.6949462890625 72.5379638671875 L 0 72.5379638671875 L 0 0 Z">
		</path>
	</svg>
	<div id="Copyright___2019_DIY_Help__All">
		<span>Copyright © 2019 DIY-Help. All Rights Reserved.</span>
	</div>
	<div id="Small_Masters_Project_">
		<span>Small Masters Project.</span>
	</div>
	<svg class="Path_1136" viewBox="0 0 1920 1">
		<path fill="rgba(0,0,0,0)" id="Path_1136" d="M 0 0 L 1920 0">
		</path>
	</svg>
	<div id="Group_414">
		<div id="Group_337">
			<div id="Group_338">
				<div id="Group_339">
					<div id="Group_340">
						<svg class="Rectangle_628">
							<rect fill="rgba(255,255,255,1)" stroke="rgba(0,123,255,0.749)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-dasharray="5" stroke-dashoffset="0" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_628" rx="0" ry="0" x="0" y="0" width="1034" height="474">
							</rect>
						</svg>
					</div>
				</div>
				<div id="Sign_In_Already_have_an_accoun">
					<span>Sign In</span><br><span style="font-style:normal;font-weight:normal;font-size:25px;">Already have an account? Sign Up</span>
                
                </div>
			</div>
		</div>
		<div onclick="application.goToTargetView(event)" id="Group_389">
			<div id="Group_302">
				<div id="Group_351">
					<svg class="Rectangle_62">
						<rect fill="rgba(53,115,239,1)" id="Rectangle_62" rx="25.5" ry="25.5" x="0" y="0" width="180" height="51">
						</rect>
					</svg>
				</div>
				<div id="Sign_In">
					<span>Sign In</span>
				</div>
				<svg class="back__27_" viewBox="0 0 14.884 8.239">
					<path fill="rgba(255,255,255,1)" id="back__27_" d="M 14.884033203125 3.244223833084106 L 3.350384712219238 3.244223833084106 L 5.356963157653809 1.237671256065369 L 4.119340419769287 0 L 0 4.119363307952881 L 4.119340419769287 8.238741874694824 L 5.356963157653809 7.001100540161133 L 3.350384712219238 4.994472503662109 L 4.704365730285645 4.994472503662109 L 14.884033203125 4.994472503662109 L 14.884033203125 3.244223833084106 Z">
					</path>
				</svg>
			</div>
        </div>
        
		<div id="Group_386">
			<div id="Email">          

            <form method="post" action="{{ url('/main/checklogin') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <!-- <label>Enter Email</label> -->
     <input type="email" placeholder="Enter Email" name="email" class="form-control" />
    </div>

   </form>
				<!-- <span>Email</span> -->
			</div>
			<svg class="Line_4" viewBox="0 0 290 2">
				<path fill="transparent" stroke="rgba(227,238,255,1)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_4" d="M 0 0 L 290 0">
				</path>
			</svg>
		</div>
		<div id="Group_387">
    
			<div id="Password">
            <div class="form-group">
     <!-- <label>Enter Password</label> -->
     <input type="password" placeholder="Enter Password"  name="password" class="form-control" />
    </div>
				<!-- <span>Password</span> -->
			</div>
			<!-- <svg class="Line_4_ci" viewBox="0 0 290 2">
				<path fill="transparent" stroke="rgba(227,238,255,1)" stroke-width="2px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_4_ci" d="M 0 0 L 290 0">
				</path>
			</svg> -->
		</div>
		<svg class="Line_20" viewBox="0 0 2 258">
			<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_20" d="M 0 0 L 2 258">
			</path>
		</svg>
		<div onclick="application.goToTargetView(event)" id="Group_390">
			<div id="Group_302_cl">
				<div id="Group_351_cm">
					<svg class="Rectangle_62_cn">
						<rect fill="rgba(102,96,255,1)" id="Rectangle_62_cn" rx="8" ry="8" x="0" y="0" width="330" height="69">
						</rect>
					</svg>
				</div>
				<div id="Continue_with_Facebook">
					<span>Continue with Facebook</span>
				</div>
				<svg class="back__27__cp" viewBox="0 0 14.884 8.239">
					<path fill="rgba(53,115,239,1)" id="back__27__cp" d="M 14.884033203125 3.244223833084106 L 3.350384712219238 3.244223833084106 L 5.356963157653809 1.237671256065369 L 4.119340419769287 0 L 0 4.119363307952881 L 4.119340419769287 8.238741874694824 L 5.356963157653809 7.001100540161133 L 3.350384712219238 4.994472503662109 L 4.704365730285645 4.994472503662109 L 14.884033203125 4.994472503662109 L 14.884033203125 3.244223833084106 Z">
					</path>
				</svg>
			</div>
		</div>
		<div onclick="application.goToTargetView(event)" id="Group_391">
			<div id="Group_302_cr">
				<div id="Group_351_cs">
					<svg class="Rectangle_62_ct">
						<rect fill="rgba(35,104,241,1)" id="Rectangle_62_ct" rx="8" ry="8" x="0" y="0" width="330" height="69">
						</rect>
					</svg>
				</div>
				<div id="Continue_with_Google">
					<span>Continue with Google</span>
				</div>
				<svg class="back__27__cv" viewBox="0 0 14.884 8.239">
					<path fill="rgba(53,115,239,1)" id="back__27__cv" d="M 14.884033203125 3.244223833084106 L 3.350384712219238 3.244223833084106 L 5.356963157653809 1.237671256065369 L 4.119340419769287 0 L 0 4.119363307952881 L 4.119340419769287 8.238741874694824 L 5.356963157653809 7.001100540161133 L 3.350384712219238 4.994472503662109 L 4.704365730285645 4.994472503662109 L 14.884033203125 4.994472503662109 L 14.884033203125 3.244223833084106 Z">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<svg class="Rectangle_6_cx">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_6_cx" rx="0" ry="0" x="0" y="0" width="1" height="45">
		</rect>
	</svg>
	<svg class="Rectangle_6_cx">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_6_cx" rx="0" ry="0" x="0" y="0" width="1" height="45">
		</rect>
	</svg>
	<svg class="Path_2" viewBox="405.01 14.885 14.99 14.99">
		<path fill="rgba(75,89,129,1)" id="Path_2" d="M 419.85400390625 15.84200000762939 C 419.9509887695313 15.97900009155273 420 16.125 420 16.2810001373291 C 420 18.74200057983398 419.385009765625 21.02700042724609 418.1539916992188 23.13699913024902 C 416.9429931640625 25.1879997253418 415.31201171875 26.81900024414063 413.2619934082031 28.02899932861328 C 411.1520080566406 29.26000022888184 408.8670043945313 29.875 406.406005859375 29.875 C 406.25 29.875 406.1029968261719 29.82600021362305 405.9670104980469 29.72900009155273 C 405.8299865722656 29.63100051879883 405.7520141601563 29.49399948120117 405.7319946289063 29.31800079345703 L 405.0289916992188 26.27099990844727 C 404.989990234375 26.11499977111816 405.010009765625 25.95899963378906 405.0880126953125 25.80299949645996 C 405.1659851074219 25.64699935913086 405.2829895019531 25.53899955749512 405.4389953613281 25.47999954223633 L 408.7210083007813 24.07399940490723 C 408.8569946289063 24.01600074768066 409.0039978027344 24.00099945068359 409.1600036621094 24.03000068664551 C 409.3160095214844 24.05999946594238 409.4429931640625 24.14299964904785 409.5409851074219 24.27899932861328 L 410.9769897460938 26.03700065612793 C 412.1289978027344 25.51000022888184 413.1489868164063 24.79700088500977 414.0379943847656 23.89800071716309 C 414.927001953125 23 415.635009765625 21.98500061035156 416.1619873046875 20.85199928283691 L 414.4039916992188 19.38699913024902 C 414.2869873046875 19.28899955749512 414.2090148925781 19.16699981689453 414.1700134277344 19.02099990844727 C 414.1310119628906 18.87400054931641 414.1409912109375 18.72299957275391 414.1990051269531 18.56599998474121 L 415.6050109863281 15.28499984741211 C 415.6640014648438 15.14900016784668 415.77099609375 15.04100036621094 415.9280090332031 14.96300029754639 C 416.0840148925781 14.88500022888184 416.239990234375 14.86499977111816 416.39599609375 14.9040002822876 L 419.4429931640625 15.60700035095215 C 419.6189880371094 15.6269998550415 419.7560119628906 15.70499992370605 419.85400390625 15.84200000762939 Z">
		</path>
	</svg>
	<div id="_Phone____49__176_576_665">
		<span> Phone: +(49) 176 576 665</span>
	</div>
	<svg class="Rectangle_7">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_7" rx="0" ry="0" x="0" y="0" width="1" height="45">
		</rect>
	</svg>
	<svg class="Path_3" viewBox="610.453 14.875 11.25 15">
		<path fill="rgba(75,89,129,1)" id="Path_3" d="M 615.4920043945313 29.58200073242188 C 614.9840087890625 28.84000015258789 614.3300170898438 27.90200042724609 613.5289916992188 26.77000045776367 C 612.552001953125 25.36300086975098 611.9080200195313 24.41600036621094 611.5960083007813 23.92799949645996 C 611.14599609375 23.22500038146973 610.843994140625 22.63400077819824 610.68701171875 22.15500068664551 C 610.531005859375 21.67700004577637 610.4530029296875 21.125 610.4530029296875 20.5 C 610.4530029296875 19.48500061035156 610.7069702148438 18.54700088500977 611.2150268554688 17.6879997253418 C 611.7230224609375 16.82799911499023 612.406005859375 16.14500045776367 613.2659912109375 15.63700008392334 C 614.125 15.12899971008301 615.06201171875 14.875 616.0780029296875 14.875 C 617.093017578125 14.875 618.031005859375 15.12899971008301 618.8909912109375 15.63700008392334 C 619.75 16.14500045776367 620.4329833984375 16.82799911499023 620.9409790039063 17.6879997253418 C 621.448974609375 18.54700088500977 621.7030029296875 19.48500061035156 621.7030029296875 20.5 C 621.7030029296875 21.125 621.625 21.67700004577637 621.468994140625 22.15500068664551 C 621.31201171875 22.63400077819824 621.010009765625 23.22500038146973 620.5609741210938 23.92799949645996 C 620.2479858398438 24.41600036621094 619.60302734375 25.36300086975098 618.6270141601563 26.77000045776367 L 616.6640014648438 29.58200073242188 C 616.5269775390625 29.77700042724609 616.3319702148438 29.875 616.0780029296875 29.875 C 615.823974609375 29.875 615.6290283203125 29.77700042724609 615.4920043945313 29.58200073242188 Z M 616.0780029296875 22.8439998626709 C 616.7230224609375 22.8439998626709 617.2739868164063 22.61400032043457 617.7329711914063 22.15500068664551 C 618.1920166015625 21.69700050354004 618.4219970703125 21.14500045776367 618.4219970703125 20.5 C 618.4219970703125 19.85499954223633 618.1920166015625 19.30400085449219 617.7329711914063 18.84499931335449 C 617.2739868164063 18.38599967956543 616.7230224609375 18.1560001373291 616.0780029296875 18.1560001373291 C 615.4340209960938 18.1560001373291 614.8820190429688 18.38599967956543 614.4229736328125 18.84499931335449 C 613.9639892578125 19.30400085449219 613.7340087890625 19.85499954223633 613.7340087890625 20.5 C 613.7340087890625 21.14500045776367 613.9639892578125 21.69700050354004 614.4229736328125 22.15500068664551 C 614.8820190429688 22.61400032043457 615.4340209960938 22.8439998626709 616.0780029296875 22.8439998626709 Z">
		</path>
	</svg>
	<div id="Frankengut_Str__1">
		<span>Frankengut Str. 1</span>
	</div>
	<svg class="Rectangle_8">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="1" height="45">
		</rect>
	</svg>
	<svg class="Path_4" viewBox="827.156 16.75 15 11.25">
		<path fill="rgba(75,89,129,1)" id="Path_4" d="M 833.718994140625 23.89800071716309 C 833.5040283203125 23.7810001373291 833.2009887695313 23.5669994354248 832.8099975585938 23.25399971008301 L 832.5180053710938 23.04899978637695 C 830.114990234375 21.29100036621094 828.4840087890625 20.07999992370605 827.625 19.41600036621094 L 827.4199829101563 19.27000045776367 C 827.2440185546875 19.13299942016602 827.156005859375 18.94700050354004 827.156005859375 18.71299934387207 L 827.156005859375 18.1560001373291 C 827.156005859375 17.76600074768066 827.2930297851563 17.43400001525879 827.5659790039063 17.15999984741211 C 827.8400268554688 16.88699913024902 828.1719970703125 16.75 828.56201171875 16.75 L 840.75 16.75 C 841.1400146484375 16.75 841.4719848632813 16.88699913024902 841.7459716796875 17.15999984741211 C 842.0189819335938 17.43400001525879 842.156005859375 17.76600074768066 842.156005859375 18.1560001373291 L 842.156005859375 18.71299934387207 C 842.156005859375 18.94700050354004 842.0679931640625 19.13299942016602 841.8930053710938 19.27000045776367 L 841.7459716796875 19.38699913024902 C 840.906005859375 20.05100059509277 839.2559814453125 21.27199935913086 836.7949829101563 23.04899978637695 L 836.5020141601563 23.25399971008301 C 836.1110229492188 23.5669994354248 835.8079833984375 23.7810001373291 835.593994140625 23.89800071716309 C 835.2219848632813 24.13299942016602 834.9099731445313 24.25 834.656005859375 24.25 C 834.4019775390625 24.25 834.0889892578125 24.13299942016602 833.718994140625 23.89800071716309 L 833.718994140625 23.89800071716309 Z M 837.3519897460938 23.7810001373291 L 837.0590209960938 24.01600074768066 C 836.6090087890625 24.36700057983398 836.2379760742188 24.62100028991699 835.9450073242188 24.77700042724609 C 835.4769897460938 25.05100059509277 835.0469970703125 25.1879997253418 834.656005859375 25.1879997253418 C 834.2650146484375 25.1879997253418 833.8359985351563 25.06100082397461 833.3670043945313 24.80699920654297 C 833.093017578125 24.65099906921387 832.7230224609375 24.39599990844727 832.2540283203125 24.04500007629395 L 831.9609985351563 23.7810001373291 C 829.5969848632813 22.0629997253418 828.093994140625 20.95899963378906 827.448974609375 20.47100067138672 C 827.3909912109375 20.43199920654297 827.3270263671875 20.42700004577637 827.2589721679688 20.45599937438965 C 827.1900024414063 20.48500061035156 827.156005859375 20.53899955749512 827.156005859375 20.61700057983398 L 827.156005859375 26.5939998626709 C 827.156005859375 26.98500061035156 827.2930297851563 27.3169994354248 827.5659790039063 27.59000015258789 C 827.8400268554688 27.86400032043457 828.1719970703125 28 828.56201171875 28 L 840.75 28 C 841.1400146484375 28 841.4719848632813 27.86400032043457 841.7459716796875 27.59000015258789 C 842.0189819335938 27.3169994354248 842.156005859375 26.98500061035156 842.156005859375 26.5939998626709 L 842.156005859375 20.61700057983398 C 842.156005859375 20.53899955749512 842.1220092773438 20.48100090026855 842.0540161132813 20.44099998474121 C 841.9849853515625 20.40200042724609 841.9219970703125 20.41200065612793 841.8629760742188 20.47100067138672 C 841.1599731445313 21.01799964904785 839.656005859375 22.12100028991699 837.3519897460938 23.7810001373291 L 837.3519897460938 23.7810001373291 Z">
		</path>
	</svg>
	<div id="Email_contact_diy_help_com">
		<span>Email:contact@diy-help.com</span>
	</div>
	<svg class="Rectangle_9">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_9" rx="0" ry="0" x="0" y="0" width="1" height="48">
		</rect>
	</svg>
	<svg class="Path_5" viewBox="1398.5 16 14 14">
		<path fill="rgba(75,89,129,1)" id="Path_5" d="M 1412.5 16.7810001373291 L 1412.5 29.2189998626709 C 1412.5 29.42700004577637 1412.427001953125 29.60899925231934 1412.281005859375 29.76600074768066 C 1412.135009765625 29.92200088500977 1411.947998046875 30 1411.718994140625 30 L 1408.156005859375 30 L 1408.156005859375 24.5629997253418 L 1409.968994140625 24.5629997253418 L 1410.25 22.4689998626709 L 1408.156005859375 22.4689998626709 L 1408.156005859375 21.125 C 1408.156005859375 20.77099990844727 1408.218994140625 20.52099990844727 1408.343994140625 20.375 C 1408.510009765625 20.1879997253418 1408.7919921875 20.0939998626709 1409.18798828125 20.0939998626709 L 1410.31298828125 20.0939998626709 L 1410.31298828125 18.1879997253418 C 1409.875 18.14599990844727 1409.3330078125 18.125 1408.68798828125 18.125 C 1407.875 18.125 1407.218994140625 18.36499977111816 1406.718994140625 18.8439998626709 C 1406.218994140625 19.32299995422363 1405.968994140625 20.01099967956543 1405.968994140625 20.9060001373291 L 1405.968994140625 22.4689998626709 L 1404.156005859375 22.4689998626709 L 1404.156005859375 24.5629997253418 L 1405.968994140625 24.5629997253418 L 1405.968994140625 30 L 1399.281005859375 30 C 1399.052001953125 30 1398.864013671875 29.92200088500977 1398.718994140625 29.76600074768066 C 1398.572998046875 29.60899925231934 1398.5 29.42700004577637 1398.5 29.2189998626709 L 1398.5 16.7810001373291 C 1398.5 16.55200004577637 1398.572998046875 16.36499977111816 1398.718994140625 16.2189998626709 C 1398.864013671875 16.07299995422363 1399.052001953125 16 1399.281005859375 16 L 1411.718994140625 16 C 1411.927001953125 16 1412.109008789063 16.07299995422363 1412.265991210938 16.2189998626709 C 1412.421997070313 16.36499977111816 1412.5 16.55200004577637 1412.5 16.7810001373291 Z">
		</path>
	</svg>
	<svg class="Rectangle_10">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_10" rx="0" ry="0" x="0" y="0" width="1" height="48">
		</rect>
	</svg>
	<svg class="Path_6" viewBox="1447.5 16.5 16 13">
		<path fill="rgba(75,89,129,1)" id="Path_6" d="M 1463.5 18.0310001373291 C 1463.0419921875 18.69799995422363 1462.489013671875 19.27099990844727 1461.843994140625 19.75 C 1461.864013671875 19.83300018310547 1461.875 19.9689998626709 1461.875 20.1560001373291 C 1461.875 21.6560001373291 1461.510009765625 23.10400009155273 1460.781005859375 24.5 C 1460.031005859375 25.97900009155273 1458.97900390625 27.1560001373291 1457.625 28.0310001373291 C 1456.14599609375 29.01000022888184 1454.447998046875 29.5 1452.531005859375 29.5 C 1450.697998046875 29.5 1449.02099609375 29.01000022888184 1447.5 28.0310001373291 C 1447.72900390625 28.05200004577637 1447.989013671875 28.0629997253418 1448.281005859375 28.0629997253418 C 1449.802001953125 28.0629997253418 1451.1669921875 27.5939998626709 1452.375 26.6560001373291 C 1451.64599609375 26.6560001373291 1451.005004882813 26.44300079345703 1450.453002929688 26.01600074768066 C 1449.901000976563 25.5890007019043 1449.52099609375 25.05200004577637 1449.31298828125 24.4060001373291 C 1449.52099609375 24.42700004577637 1449.718994140625 24.4379997253418 1449.906005859375 24.4379997253418 C 1450.197998046875 24.4379997253418 1450.489013671875 24.4060001373291 1450.781005859375 24.3439998626709 C 1450.031005859375 24.17700004577637 1449.406005859375 23.79199981689453 1448.906005859375 23.1879997253418 C 1448.406005859375 22.58300018310547 1448.156005859375 21.89599990844727 1448.156005859375 21.125 L 1448.156005859375 21.0629997253418 C 1448.614013671875 21.33300018310547 1449.10400390625 21.47900009155273 1449.625 21.5 C 1449.18798828125 21.1879997253418 1448.8330078125 20.79199981689453 1448.56298828125 20.3129997253418 C 1448.2919921875 19.83300018310547 1448.156005859375 19.3080005645752 1448.156005859375 18.73399925231934 C 1448.156005859375 18.16200065612793 1448.31298828125 17.61499977111816 1448.625 17.0939998626709 C 1449.43798828125 18.11499977111816 1450.432006835938 18.92700004577637 1451.609008789063 19.5310001373291 C 1452.786010742188 20.13599967956543 1454.0419921875 20.4689998626709 1455.375 20.5310001373291 C 1455.3330078125 20.2810001373291 1455.31298828125 20.0310001373291 1455.31298828125 19.7810001373291 C 1455.31298828125 19.19799995422363 1455.4580078125 18.65099906921387 1455.75 18.14100074768066 C 1456.0419921875 17.6299991607666 1456.43798828125 17.22900009155273 1456.93798828125 16.9379997253418 C 1457.43798828125 16.64599990844727 1457.97900390625 16.5 1458.56298828125 16.5 C 1459.0419921875 16.5 1459.484008789063 16.5939998626709 1459.890991210938 16.7810001373291 C 1460.296997070313 16.9689998626709 1460.656005859375 17.2189998626709 1460.968994140625 17.5310001373291 C 1461.718994140625 17.38599967956543 1462.4169921875 17.125 1463.06298828125 16.75 C 1462.81298828125 17.52099990844727 1462.3330078125 18.125 1461.625 18.5629997253418 C 1462.25 18.47900009155273 1462.875 18.30200004577637 1463.5 18.0310001373291 L 1463.5 18.0310001373291 Z">
		</path>
	</svg>
	<svg class="Rectangle_11">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_11" rx="0" ry="0" x="0" y="0" width="1" height="48">
		</rect>
	</svg>
	<svg class="Rectangle_12">
		<rect fill="rgba(238,238,238,1)" id="Rectangle_12" rx="0" ry="0" x="0" y="0" width="1" height="48">
		</rect>
	</svg>
	<svg class="Path_7" viewBox="1498 16 14 14">
		<path fill="rgba(75,89,129,1)" id="Path_7" d="M 1511.703002929688 16.29700088500977 C 1511.901000976563 16.4950008392334 1512 16.72900009155273 1512 17 L 1512 29 C 1512 29.27099990844727 1511.901000976563 29.5049991607666 1511.703002929688 29.70299911499023 C 1511.505004882813 29.90099906921387 1511.27099609375 30 1511 30 L 1499 30 C 1498.72900390625 30 1498.494995117188 29.90099906921387 1498.296997070313 29.70299911499023 C 1498.098999023438 29.5049991607666 1498 29.27099990844727 1498 29 L 1498 17 C 1498 16.72900009155273 1498.098999023438 16.4950008392334 1498.296997070313 16.29700088500977 C 1498.494995117188 16.09900093078613 1498.72900390625 16 1499 16 L 1511 16 C 1511.27099609375 16 1511.505004882813 16.09900093078613 1511.703002929688 16.29700088500977 Z M 1502.046997070313 20.04700088500977 C 1502.286010742188 19.8080005645752 1502.406005859375 19.52599906921387 1502.406005859375 19.20299911499023 C 1502.406005859375 18.8799991607666 1502.286010742188 18.59900093078613 1502.046997070313 18.35899925231934 C 1501.807006835938 18.1200008392334 1501.52099609375 18 1501.18798828125 18 C 1500.85400390625 18 1500.572998046875 18.1200008392334 1500.343994140625 18.35899925231934 C 1500.114013671875 18.59900093078613 1500 18.8799991607666 1500 19.20299911499023 C 1500 19.52599906921387 1500.114013671875 19.8080005645752 1500.343994140625 20.04700088500977 C 1500.572998046875 20.28700065612793 1500.85400390625 20.4060001373291 1501.18798828125 20.4060001373291 C 1501.52099609375 20.4060001373291 1501.807006835938 20.28700065612793 1502.046997070313 20.04700088500977 Z M 1502.25 28 L 1502.25 21.3129997253418 L 1500.156005859375 21.3129997253418 L 1500.156005859375 28 L 1502.218994140625 28 L 1502.25 28 Z M 1510 24.3439998626709 C 1510 23.30200004577637 1509.85400390625 22.54199981689453 1509.56298828125 22.0629997253418 C 1509.1669921875 21.45800018310547 1508.489013671875 21.1560001373291 1507.531005859375 21.1560001373291 C 1507.052001953125 21.1560001373291 1506.625 21.27099990844727 1506.25 21.5 C 1505.93798828125 21.6879997253418 1505.7080078125 21.92700004577637 1505.56298828125 22.2189998626709 L 1505.531005859375 22.2189998626709 L 1505.531005859375 21.3129997253418 L 1503.531005859375 21.3129997253418 L 1503.531005859375 28 L 1505.593994140625 28 L 1505.593994140625 24.6879997253418 C 1505.593994140625 24.16699981689453 1505.6669921875 23.77099990844727 1505.81298828125 23.5 C 1506.02099609375 23.14599990844727 1506.364013671875 22.9689998626709 1506.843994140625 22.9689998626709 C 1507.322998046875 22.9689998626709 1507.635009765625 23.16699981689453 1507.781005859375 23.5629997253418 C 1507.885009765625 23.8129997253418 1507.93798828125 24.20800018310547 1507.93798828125 24.75 L 1507.93798828125 28 L 1510 28 L 1510 24.3439998626709 Z">
		</path>
	</svg>
	<div id="HOME">
		<span>HOME</span>
	</div>
	<div id="ABOUT">
		<span>ABO</span><span style="letter-spacing:-0.12px;">U</span><span>T</span>
	</div>
	<div id="SERVICES">
		<span>SER</span><span style="letter-spacing:-0.14px;">V</span><span>ICES</span>
	</div>
	<div id="CATEGORIES">
		<span>CATEGORIES</span>
	</div>
	<div id="BLOG">
		<span>B</span><span style="letter-spacing:-0.13px;">L</span><span>OG</span>
	</div>
	<div id="CONTACT">
		<span>C</span><span>ON</span><span style="letter-spacing:-0.34px;">T</span><span style="letter-spacing:-0.09px;">A</span><span style="letter-spacing:-0.07px;">C</span><span>T</span>
	</div>
	<div id="We_connect_house_holds_with_pr">
		<span>We connect house holds with professionals</span>
	</div>
	<div id="DIY_Help_provides_platform_to_">
		<span>DIY Help provides platform to domestic households with professionals. </span>
	</div>
	<div id="Group_398">
		<svg class="Line_24" viewBox="0 0 1130 10">
			<path fill="transparent" stroke="rgba(46,90,168,1)" stroke-width="10px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_24" d="M 0 0 L 1130 0">
			</path>
		</svg>
	</div>
	<img id="Image_30" src="Image_30.png" srcset="Image_30.png 1x, Image_30@2x.png 2x">
	<div id="Searchbar" class="Searchbar">
		<div id="Mask">
		<svg style="width:inherit;height:inherit;overflow:visible;">
			<rect fill="url(#Mask_d_pattern)" width="100%" height="100%"></rect>
				<pattern elementId="Mask_d" id="Mask_d_pattern" x="0" y="0" width="100%" height="100%">
					<image x="0" y="0" width="100%" height="100%" href="Mask_d_pattern.png" xlink:href="Mask_d_pattern.png"></image>
				</pattern>
				</svg>
			</div>
		<svg class="___Background" viewBox="0 0 203.73 17">
			<path fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="___Background" d="M 1.75629723072052 0 L 201.9741821289063 0 C 202.9441375732422 0 203.73046875 0.3044463396072388 203.73046875 0.6800000071525574 L 203.73046875 16.31999969482422 C 203.73046875 16.69555282592773 202.9441375732422 17 201.9741821289063 17 C 201.9741821289063 17 199.755859375 17 149.7014007568359 17 C 99.64691925048828 17 1.75629723072052 17 1.75629723072052 17 C 0.7863209843635559 17 0 16.69555282592773 0 16.31999969482422 L 0 0.6800000071525574 C 0 0.3044463396072388 0.7863209843635559 0 1.75629723072052 0 Z">
			</path>
		</svg>
		<div id="Layout" class="Layout">
			<div id="___Icon_Right" class="___Icon_Right">
				<svg class="Shape" viewBox="0 0 19 19">
					<path fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Shape" d="M 0 0 L 19 0 L 19 19 L 0 19 L 0 0 Z">
					</path>
				</svg>
				<svg class="Color" viewBox="0 0 13.846 13.846">
					<path fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Color" d="M 12.66682529449463 13.8460054397583 L 12.66626358032227 13.84545135498047 L 8.708175659179688 9.895913124084473 L 8.708175659179688 9.27033805847168 L 8.494425773620605 9.048750877380371 C 7.562847137451172 9.850075721740723 6.373186588287354 10.29135036468506 5.145674705505371 10.29135036468506 C 2.30834174156189 10.29135036468506 0 7.983008861541748 0 5.145674705505371 C 0 2.30834174156189 2.30834174156189 0 5.145674705505371 0 C 7.983008861541748 0 10.29135036468506 2.30834174156189 10.29135036468506 5.145674705505371 C 10.29135036468506 6.373605728149414 9.850051879882813 7.562879085540771 9.048750877380371 8.494425773620605 L 9.270345687866211 8.708175659179688 L 9.895913124084473 8.708175659179688 L 13.84601306915283 12.66682529449463 L 12.66738700866699 13.84545135498047 L 12.66682529449463 13.8460054397583 Z M 5.145674705505371 1.58317506313324 C 3.181304454803467 1.58317506313324 1.58317506313324 3.181304454803467 1.58317506313324 5.145674705505371 C 1.58317506313324 7.110045909881592 3.181304454803467 8.708175659179688 5.145674705505371 8.708175659179688 C 7.110045909881592 8.708175659179688 8.708175659179688 7.110045909881592 8.708175659179688 5.145674705505371 C 8.708175659179688 3.181304454803467 7.110045909881592 1.58317506313324 5.145674705505371 1.58317506313324 Z">
					</path>
				</svg>
			</div>
			<div id="____Search_Input">
				<span>Search…</span>
			</div>
			<div id="___Icon_Left" class="___Icon_Left">
				<svg class="Shape_d" viewBox="0 0 24 24">
					<path fill="rgba(0,0,0,0)" id="Shape_d" d="M 0 0 L 24 0 L 24 24 L 0 24 L 0 0 Z">
					</path>
				</svg>
				<svg class="Color_d" viewBox="0 0 17.49 17.49">
					<path fill="rgba(255,255,255,1)" id="Color_d" d="M 16.00020027160645 17.48969078063965 L 15.99949073791504 17.48899078369141 L 10.99980068206787 12.50010013580322 L 10.99980068206787 11.70989990234375 L 10.7298002243042 11.43000030517578 C 9.553070068359375 12.44220066070557 8.05034065246582 12.99960041046143 6.499799728393555 12.99960041046143 C 2.915800094604492 12.99960041046143 0 10.08380031585693 0 6.499799728393555 C 0 2.915800094604492 2.915800094604492 0 6.499799728393555 0 C 10.08380031585693 0 12.99960041046143 2.915800094604492 12.99960041046143 6.499799728393555 C 12.99960041046143 8.050869941711426 12.44217014312744 9.553110122680664 11.43000030517578 10.7298002243042 L 11.70991039276123 10.99980068206787 L 12.50010013580322 10.99980068206787 L 17.48970031738281 16.00020027160645 L 16.00090980529785 17.48899078369141 L 16.00020027160645 17.48969078063965 Z M 6.499799728393555 1.999799966812134 C 4.018489837646484 1.999799966812134 1.999799966812134 4.018489837646484 1.999799966812134 6.499799728393555 C 1.999799966812134 8.981110572814941 4.018489837646484 10.99980068206787 6.499799728393555 10.99980068206787 C 8.981110572814941 10.99980068206787 10.99980068206787 8.981110572814941 10.99980068206787 6.499799728393555 C 10.99980068206787 4.018489837646484 8.981110572814941 1.999799966812134 6.499799728393555 1.999799966812134 Z">
					</path>
				</svg>
			</div>
		</div>
	</div>
</div>
</body>
</html>