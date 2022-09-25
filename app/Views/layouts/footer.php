
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

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
  <!-- Alert/Pop up -->
  <script src="/assets/js/sweetalert2.all.min.js"></script>
  <script src="/assets/js/myscript.js"></script>

  <!-- Tambah data -->
  <script>
    $(document).on('click', '#tambah_data', function() {
      var formvalue = $('#tambah_struktur');

      var formData = new FormData(formvalue[0]);

      $.ajax({
        url:base_url+ "StrukturController/store",
        type:"POST",
        dataType:"JSON",
        cache: false,
        data: formData,
        contentType: false,
        processData: false,
        success: function(response){
          toastr.success('Struktur berhasil ditambahkan');
        }
      })
    });
  </script>
</body>

</html>