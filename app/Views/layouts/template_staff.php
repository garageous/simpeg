<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/argon/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/argon/assets/img/favicon.png">
  <title>
    <?= $title ?>
  </title>
  <!--     Fonts and icons     -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/argon/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/argon/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/argon/assets/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/custom-style.css" rel="stylesheet" />
  <link id="pagestyle" href="/argon/assets/css/argon-dashboard.css?v=2.0.3" rel="stylesheet" />
  
  <!-- jQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>  -->

</head>

<body class="bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <div class="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <a class="sidebar-logo" href="/gm/dashboard">
        <img src="/argon/assets/img/logo-ct-dark.png" class="logo" alt="main_logo">
        <span class="ms-1 font-weight-bold">SIMPEG</span>
      </a>
      <hr class="horizontal dark mt-0">

      <ul>
        <li>
          <a class="<?= \Config\Services::request()->uri->getSegment(1) == 'dashboard' ? 'active' : '' ?>" href="/staff/dashboard">
            <iconify-icon class="icon" icon="akar-icons:desktop-device" style="color: #884ffb;" width="20" height="20"></iconify-icon>
            <span class="text-sm">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="<?= \Config\Services::request()->uri->getSegment(1) == 'cuti' ? 'active' : '' ?>" href="/staff/cuti">
            <iconify-icon class="icon" icon="ic:outline-free-breakfast" style="color: #0086e7;" width="20" height="20"></iconify-icon>

            <!-- <span class="icon"><i class="fas fa-desktop"></i></span> -->
            <span class="text-sm">Cuti Karyawan</span>
          </a>
        </li>
        <li>
          <a class="<?= \Config\Services::request()->uri->getSegment(1) == 'training' ? 'active' : '' ?>" href="/staff/training">
            <iconify-icon class="icon" icon="healthicons:i-training-class-outline" style="color: #ffd233;" width="20" height="20"></iconify-icon>
            <span class="text-sm">Training Karyawan</span>
          </a>
        </li>
        <li>
          <a class="<?= \Config\Services::request()->uri->getSegment(1) == 'mutasi' ? 'active' : '' ?>" href="/staff/mutasi">
            <iconify-icon class="icon" icon="ci:transfer" style="color: #0fa958;" width="20" height="20"></iconify-icon>
            <span class="text-sm">Mutasi Karyawan</span>
          </a>
        </li>
        <li>
          <a class="<?= \Config\Services::request()->uri->getSegment(1) == 'resign' ? 'active' : '' ?>" href="/staff/resign">
            <iconify-icon class="icon" icon="majesticons:door-exit-line" style="color: #ff3389;" width="20" height="20"></iconify-icon>
            <span class="text-sm">Resign Karyawan</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="section">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-0">
          <div class="hamburger">
            <a href="#">
              <i class="fas fa-bars"></i>
            </a>
          </div>
          <nav aria-label="breadcrumb">
            <h6 class="breadcrumb bg-transparent text-white mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"><?= $title ?></h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-xs"><a class="text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-xs text-white active" aria-current="page"><?= $subtitle ?></li>
            </ol>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Search">
              </div>

            </div>

            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="/argon/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="/argon/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

            <div class="navbar-nav  ps-3 justify-content-end">
              <a href="javascript:;">
                <img src="/argon/assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm me-3">
              </a>
            </div>
          </div>
        </div>
      </nav>

      <!-- content -->
      <?= $this->renderSection('content'); ?>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="/argon/assets/js/core/popper.min.js"></script>
  <script src="/argon/assets/js/core/bootstrap.min.js"></script>
  <script src="/argon/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/argon/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/argon/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/argon/assets/js/argon-dashboard.min.js?v=2.0.3"></script>

  <!-- Sidebar -->
  <script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
      document.querySelector("body").classList.toggle("active");
    })
  </script>

  <!-- icon -->
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

  <!-- Image Preview -->
  <script>
    function previewImg() {
      const foto = document.querySelector('#foto'); //#foto itu berarti pake id='foto' yang ada di form
      const imgPreview = document.querySelector('.img-preview');

      // Membaca file yang baru diupload
      const fileFoto = new FileReader();
      fileFoto.readAsDataURL(foto.files[0]);

      fileFoto.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>