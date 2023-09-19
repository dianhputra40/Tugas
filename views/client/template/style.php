<!-- CSS here -->
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/bootstrap.min.css"
/>
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/owl.carousel.min.css"
/>
<link rel="stylesheet" href="<?=base_url()?>assets/client/css/slicknav.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/client/css/flaticon.css" />
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/animate.min.css"
/>
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/magnific-popup.css"
/>
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/fontawesome-all.min.css"
/>
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/themify-icons.css"
/>
<link rel="stylesheet" href="<?=base_url()?>assets/client/css/slick.css" />
<link
	rel="stylesheet"
	href="<?=base_url()?>assets/client/css/nice-select.css"
/>
<link rel="stylesheet" href="<?=base_url()?>assets/client/css/style.css" />
<link
	rel="stylesheet"
	href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css"
/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"> 


<link
	rel="stylesheet"
	href="<?=base_url()?>assets/admin/dist/css/jquery.datetimepicker.css"
/>

<style>
	.panel-login {
		/* border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2); */
	}
	.panel-login > .panel-heading {
		color: red;
		background-color: #fff;
		/* border-color: #fff; */
		text-align: center;
	}
	.panel-login > .panel-heading a {
		text-decoration: none;
		color: #666;
		font-weight: bold;
		font-size: 15px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login > .panel-heading a.active {
		color: white;
		font-size: 18px;
		background-color: red;
		padding-left: 3vh;
		padding-right: 3vh;
		padding-top: 0.5vh;
		padding-bottom: 0.5vh;
	}
	.panel-login > .panel-heading hr {
		margin-top: 10px;
		margin-bottom: 0px;
		clear: both;
		border: 0;
		height: 1px;
		/* background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0)); */
	}
	.panel-login input[type="text"],
	.panel-login input[type="email"],
	.panel-login input[type="password"] {
		height: 45px;
		/* border: 1px solid #ddd; */
		font-size: 16px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login input:hover,
	.panel-login input:focus {
		outline: none;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
		border-color: #ccc;
	}

	.btn-normal {
		padding:1vh;
	}

	.btn-third{
		background-color:purple;
	}
	.btn-small {
		background-color: #ff0066;
		outline: none;
		color: #fff;
		font-size: 1.5vh;
		width: 100%;
		height: auto;
		font-weight: bold;
		padding: 1vh;
		text-transform: uppercase;
		border-color: black;
	}
	.btn-login {
		background-color: #59b2e0;
		outline: none;
		color: #fff;
		font-size: 14px;
		height: auto;
		font-weight: normal;
		padding: 14px 0;
		text-transform: uppercase;
		border-color: #59b2e6;
	}
	.btn-login:hover,
	.btn-login:focus {
		color: #fff;
		background-color: #53a3cd;
		border-color: #53a3cd;
	}
	.forgot-password {
		text-decoration: underline;
		color: #888;
	}
	.forgot-password:hover,
	.forgot-password:focus {
		text-decoration: underline;
		color: #666;
	}

	.btn-register {
		background-color: #1cb94e;
		outline: none;
		color: #fff;
		font-size: 14px;
		height: auto;
		font-weight: normal;
		padding: 14px 0;
		text-transform: uppercase;
		border-color: #1cb94a;
	}
	.btn-register:hover,
	.btn-register:focus {
		color: #fff;
		background-color: #1ca347;
		border-color: #1ca347;
	}

	.star {
		height: 5vw;
		width: 5vw;
		-webkit-clip-path: polygon(
			50% 0%,
			61% 35%,
			98% 35%,
			68% 57%,
			79% 91%,
			50% 70%,
			21% 91%,
			32% 57%,
			2% 35%,
			39% 35%
		);
		clip-path: polygon(
			50% 0%,
			61% 35%,
			98% 35%,
			68% 57%,
			79% 91%,
			50% 70%,
			21% 91%,
			32% 57%,
			2% 35%,
			39% 35%
		);
		text-align: center;
		background: red;
		color: white;
	}

	.star::before {
		display: inline-block;
		height: 100%;
		background: blue;
		vertical-align: middle;
		content: "";
	}

	small {
		float: left;
	}

	.vertical-center {
		padding-top: 5%;
		/* -ms-transform: translateY(-50%);
  transform: translateY(-50%); */
	}

	.avatar {
		vertical-align: middle;
		width: 50px;
		height: 50px;
		border-radius: 50%;
	}

	.pemesanan {
		padding-top: 3vh;
		padding-bottom: 2vh;
		margin-top: -10%;
		background-color: white;
		padding-left: 2vh;
		padding-right: 2vh;
		border: 1px solid gray;
		border-radius: 1rem;
		margin-left: 20vh;
		margin-right: 20vh;
	}

	.container-white {
		padding-top: 3vh;
		padding-bottom: 1vh;
		background-color: white;
		padding-left: 2vh;
		padding-right: 2vh;
		width: auto;
		border: 1px solid gray;
		border-radius: 1rem;
		margin-left: 20vh;
		margin-right: 20vh;
	}

	.container-bglight {
		border: solid 1px;
		background-color: white;
		border-radius: 1em;
		margin-left: auto;
		margin-right: auto;
		padding: 2vw;
		margin-top: -23vh;
	}

	.fill {
		background-color: #f8f9fa;
		height: 12vh;
	}

	.link-dark:hover {
		color: red;
	}
	
	.ml {
		margin-left:2vw;
	}

	@media (max-width: 1366px) {
		.btn-small {
			font-size: 2vh;
		}
		.pemesanan {
			margin-top: -12%;
			margin-left: 10vh;
			margin-right: 10vh;
		}
		.container-bglight {
			border: solid 1px;
			background-color: white;
			border-radius: 1em;
			margin-left: auto;
			margin-right: auto;
			padding: 2vw;
			margin-top: -26vh;
		}
	}

	@media (max-width: 1000px) {
		.btn-small {
			float: right;
			width: 20vh;
			font-size: 2vh;
		}
		.fill {
			height: 0vh;
		}
		.container-white {
			margin-left: 1vh;
			margin-right: 1vh;
		}
		.pemesanan {
			margin-top: -20%;
			margin-left: 1vh;
			margin-right: 1vh;
		}
		.modal-dialog {
			/* width: 1000px;  */
			max-width: 95vw;
		}
		
		
		.container-bglight {
			padding-bottom:10%;
		}
	}
</style>
