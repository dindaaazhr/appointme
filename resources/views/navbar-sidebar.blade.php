<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin AppointMe</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/38bf3acd15.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
            $(".hamburger .hamburger__inner").click(function(){
            $(".wrapper").toggleClass("active");
            $(".sidebar").toggleClass("active");
        })

        $(".top_navbar .fas").click(function(){
            $(".profile_dd").toggleClass("active");
        });

        $(document).click(function(event) {
            var $target = $(event.target);
            if (!$target.closest(".right_menu").length && !$target.closest(".fas").length) {
            $(".profile_dd").removeClass("active");
            }
        });
    })
	</script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        *{
        margin: 0;
        padding: 0;
        list-style: none;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        }

        .wrapper{
        width: 100%;
        height: 100%;
        }

        .top_navbar{
        background: #cedef2;
        height: 60px;
        display: flex;
        position: fixed;
        width: 100%;
        top: 0;
        }

        .top_navbar .hamburger{
        width: 80px;
        background: #12305C;
        position: relative;
        font-size: 28px;
        }

        .top_navbar .hamburger .hamburger__inner{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        cursor: pointer;
        width: 40px;
        height: 20px;
        }

        .top_navbar .hamburger__inner > div{
        width: 30px;
        height: 2px;
        background: #fff;
        position: absolute;
        top: 0;
        left: 0;
        }

        .top_navbar .hamburger div.two{
        top: 10px;
        width: 40px;
        }

        .top_navbar .hamburger div.three{
        top: 20px;
        }

        .top_navbar .menu{
        width: calc(100% - 80px);
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        }

        .top_navbar .menu .logo{
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        }

        .top_navbar .menu .right_menu ul{
        display: flex;
        }

        .top_navbar .menu .right_menu ul li{
        position: relative;
        }

        .top_navbar .menu .right_menu ul li .fas{
        font-size: 22px;
        cursor: pointer;
        color: #12305C;
        }

        .top_navbar .menu .right_menu ul li .profile_dd{
        position: absolute;
        top: 35px;
        right: -10px;
        background: #fff;
        box-shadow: 0 0 2px rgba(0,0,0,0.5);
        padding: 10px 0;
        width: 180px;
        border-radius: 3px;
        display: none;
        user-select: none;
        }

        .top_navbar .menu .right_menu ul li .profile_dd.active{
        display: block;
        }

        .top_navbar .menu .right_menu ul li .profile_dd .dd_item{
        padding: 10px;
        cursor: pointer;
        color: #12305C;
        }

        .top_navbar .menu .right_menu ul li .profile_dd .dd_item:hover{
        background: #cedef2;
        }

        .top_navbar .menu .right_menu ul li .profile_dd:before{
        content: "";
        position: absolute;
        top: -20px;
        right: 10px;
        border: 10px solid;
        border-color: transparent transparent #fff transparent;
        }

        .main_container .sidebar{
        position: fixed;
        top: 60px;
        left: 0;
        width: 225px;
        height: 100%;
        background: #12305C;
        transition: all 0.3s ease;
        }

        .main_container .sidebar .sidebar__inner{
        position: relative;
        }

        .main_container .sidebar .profile{
        display: flex;
        align-items: center;
        color: #fff;
        padding: 20px 0;
        white-space: nowrap;
        transition: all 0.3s ease;
        }

        .main_container .sidebar .profile .img{
        padding: 0 18px;
        }

        .main_container .sidebar .profile img{
        width: 45px;
        }

        .main_container .sidebar .profile p:first-child{
        font-size: 14px;
        color: #cedef2;
        margin-bottom: 3px;
        }

        .main_container .container{
        margin-top: 60px;
        width: calc(100% - 225px);
        margin-left: 225px;
        padding: 30px;
        transition: all 0.3s ease;
        }

        .main_container .sidebar ul li a{
        color: #fff;
        font-size: 18px;
        padding: 20px 30px;
        white-space: nowrap;
        display: flex;
        align-items: center;
        margin-bottom: 1px;
        transition: all 0.3s ease;
        }

        .main_container .sidebar ul li a .icon{
        margin-right: 15px;
        font-size: 28px;
        }

        .main_container .sidebar ul li a span{
        display: inline-block;
        }

        .main_container .sidebar ul li a:hover,
        .main_container .sidebar ul li a.active{
        background: #fff;
        color: #12305C;
        }

        .main_container .container .item{
        background: #fff;
        border: 1px solid #e4e7ea;
        margin-bottom: 30px;
        padding: 20px;
        font-size: 14px;
        line-height: 22px;
        }

        .wrapper.active .sidebar{
        width: 80px;
        }

        .wrapper.active .sidebar ul li a span.title,
        .wrapper.active .profile_info
        {
        display: none;
        }

        .wrapper.active .main_container .container{
        width: calc(100% - 80px);
        margin-left: 80px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-img {
            width: 180px; 
            height: 50px; 
            margin-right: 10px;
        }

        .logo-text {
            font-size: 20px; 
        }

        .user {
            margin-top: 20px;
        }

        .main_container .sidebar ul li a {
            padding: 10px 30px;
        }

        .main_container .sidebar ul li a .icon {
            margin-right: 10px;
        }

        .main_container .sidebar ul li a span.title {
            display: inline-block;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.png" />
</head>
<body>
<div class="wrapper" id="wrap">
    <div class="top_navbar">
        <div class="hamburger">
        <div class="hamburger__inner">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>
        </div>
        <div class="menu">
            <a href="{{ route('dashboard.index') }}">
                <div class="logo">
                <img src="https://i.ibb.co/HxdCb9c/logo-bg.png" class="logo-img" alt="logo">
                </div>
            </a>          
        <div class="right_menu">
            <ul>
            <li>
                <i class="fas fa-user user"></i>
                <div class="profile_dd">
                    <a href="{{ route('logout') }}"><div class="dd_item">Keluar</div></a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>       
    <div class="main_container">
        <div class="sidebar active">
            <div class="sidebar__inner">
                <div class="profile">
                <div class="img">
                    <img src="https://i.ibb.co/yqXHbHb/Profil.png" alt="profile_pic">
                </div>
                <div class="profile_info">
                    <p>Selamat Datang</p>
                    <p class="profile_name">Admin</p>
                </div>
                </div>
                <ul>
                <li>
                    <a href="{{ route('dashboard.index') }}" class="{{ $activeMenu === 'dashboard' ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-dice-d6"></i></span>
                    <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('antrean.index') }}" class="{{ $activeMenu === 'data-antrean' ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-address-book"></i></span>
                    <span class="title">Data Antrean</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pasien.index') }}" class="{{ $activeMenu === 'data-pasien' ? 'active' : '' }}">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    <span class="title">Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dokter.index') }}" class="{{ $activeMenu === 'data-dokter' ? 'active' : '' }}">
                    <span class="icon"><i class="fa fa-user-md"></i></span>
                    <span class="title">Data Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('poli.index') }}" class="{{ $activeMenu === 'data-poli' ? 'active' : '' }}">
                    <span class="icon"><i class="fa fa-hospital-o"></i></span>
                    <span class="title">Data Poli</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>