<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="asset/css/styleheader.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <script>
    $(document).ready(function() {
      $(".hamburger").click(function() {
        $(".wrapper").toggleClass("active")
      })
    });
  </script>
</head>

<body>

  <div class="wrapper">
    <div class="top_navbar">
      <div class="logo">
        <a>PPM</a>
      </div>
      <div class="top_menu">
        <div class="home_link">
          <!-- <a href="#">
            <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
            <span>Login</span>
          </a> -->
        </div>
        <div class="right_info">
            <span><input type="text" placeholder="Search.."></span>
            <span class="icon"><i class="fas fa-search"></i></span>
          <div class="icon_wrap">
            <a href="logout.php">
              <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
              <span>Logout</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="main_body">
      <div class="sidebar_menu">
        <div class="inner__sidebar_menu">
          <ul class="links">
            <li>
              <a href="index.php">
                <span class="icon">
                  <i class="fas fa-home"></i></span>
                <span class="list">Dashboard</span>
              </a>
            </li>
            <li>
              <h3>
                <span class="icon"><i class="fas fa-minus"></i></span>
                <span class="list">Pemerintahan</span>
              </h3>
            </li>
            <li>
              <a href="pemerintahan/germas.php">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span class="list">Germas</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-user"></i></span>
                <span class="list">Stanting</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span class="list">ATM</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-hospital"></i></span>
                <span class="list">Kota Sehat</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-chart-area"></i></span>
                <span class="list">Ranham</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span class="list">SDG</span>
              </a>
            </li>
            <li>
              <h3>
                <span class="icon"><i class="fas fa-minus"></i></span>
                <span class="list">Pembangunan Manusia</span>
              </h3>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-venus-mars"></i></span>
                <span class="list">Gender</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-chart-bar"></i></span>
                <span class="list">KLA</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span class="list">IPM</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-bookmark"></i></span>
                <span class="list">Kebudayaan</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-book"></i></span>
                <span class="list">Pendidikan</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-chart-pie"></i></span>
                <span class="list">Kemiskinan</span>
              </a>
            </li>
          </ul>

          <div class="hamburger">
            <div class="inner_hamburger">
              <span class="arrow">
                <i class="fas fa-long-arrow-alt-left"></i>
                <i class="fas fa-long-arrow-alt-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>