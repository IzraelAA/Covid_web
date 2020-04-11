<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <title>Sistem Informasi Penyebaran Covid-19</title>

  <!-- Custom fonts for this template-->
<link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

  <!-- Custom styles for this template-->
<link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="{{url('assets/scss/index.css')}}">

</head>

<style>
   #jamupdate{
     color: aliceblue;
   }
    
  #data, #allData {
      display: none;
  }
</style>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    {{-- <ul class="navbar-nav pt-4 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text"> Covid-19 <br> <span style="font-size: 12px;">Klik disini</span></div>
      </a>
<!-- Sidebar Toggler (Sidebar) -->
{{-- <div class="text-center mt-4 d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> --}}
      <!-- Divider -->
      {{-- <hr class="sidebar-divider my-0"> --}}

      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      

       <!-- Sidebar - Brand -->
       {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://www.google.com/" > --}}
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        {{-- <div class="sidebar-brand-text"> <img src="{{url('assets/gambar/playstore.jpg')}}" style="width:100%;" alt="" ></div> --}}
      {{-- </a> --}}

    {{-- </ul>  --}}
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    
        <div class="container-fluid">
          <div class="container">
            <!-- Header -->
            <div class="text-center d-flex">
              <button style="border-radius:7px;" class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#exampleModal">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text" style="font-weight:700;">Lapor Covid-19 </div>
              </button>
                <h4 style="margin-left:auto;">Sistem Informasi Penyebaran Covid-19</h4>

                <div class="btn-group btn-group-toggle" style="margin-left:auto;" data-toggle="buttons">
                  <label class="btn active" id="gelap" name="gelap">
                    <input type="radio" name="options" id="option1" > Gelap
                  </label>
                  <label class="btn " id="terang" name="terang">
                    <input type="radio" name="options" id="option2" checked> Terang
                  </label>
                </div>
                          
            </div>
            <div class="row text-center">
                <div class="col-md col-sm-3 my-2" id="hover1">
                    <div class="odp">
                      <img src="{{url('assets/gambar/odpicontulisan.png')}}" style="width:50px; rounded:circle;" alt="" >
                        <h5><span > 12</span></h5>
                    </div>
                </div>
                <div class="col-md col-sm-3 my-2" id="hover2">
                    <div class="pdp">
                      <img src="{{url('assets/gambar/pdpdicontulisan.png')}}" style="width:50px;" alt="" >
                        <h5>  <span>2</span> </h5>
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover3">  
                    <div class="positive">
                      <img src="{{url('assets/gambar/positiveicontulisan.png')}}" style="width:50px;" alt="" >
                        <h5> <span >{{ $datanas[0]->positif}}</span> </h5>
                     </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover4">
                    <div class="sembuh">
                    <img src="{{url('assets/gambar/sembuhicontulisan.png')}}" style="width:50px;" alt="" >
                        <h5><span>{{ $datanas[0]->sembuh}}</span> </h5>
                        
                    </div>
                </div>
                <div class="col-md col-sm-2 my-2" id="hover5">
                    <div class="meninggal">
                      <img src="{{url('assets/gambar/meninggalicontulisan.png')}}" style="width:50px;" alt="" >
                        <h5> <span>{{ $datanas[0]->meninggal}}</span></h5>
                       
                    </div>
                </div>
            </div>
            <!-- Tutup Header -->
            <!-- Body -->
            <div class="row header-body">
                <div class="col-lg-12 col-md-12">
                    <div class="body">
                      <div class="zona d-flex">
                        <h4 style="color:#000">Peta Penyebaran </h4>
                          <div id="" class="d-flex"  style="margin-left:auto; color:#000">
                            <h6 class="mt-1">Real Time Update &nbsp; </h6>
                            <?php
                            header('Access-Control-Allow-Origin: *');
                            date_default_timezone_set("Asia/Jakarta");  // untuk mengubah zona waktu
                            $arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
                            $day = date("w"); //0-6 of day

                            echo date("H:i:s"). "&nbsp"; // untuk menampilkan jam
                            echo   $arrDay[$day]. "&nbsp";
                            echo  date("d-F-Y");
                         
                            ?>
                        </div>
                      </div>
                       
                    </div>
                </div>
                    <!-- column -->
                    <div class="col-lg-8">    
                      <div class="wrapper">
                        <div id="render-map">
                        </div>
                      </div>
                     </div>
                     <div class="col-lg-4">
                         <div class="row" id="overflow"  >
                            <table class="table-bordered responsive table-dark"   id="overflow" >
                                <tbody >
                                  <tr>
                                    <th class="text-center"> Daerah</th>
                                    <th class="text-center"> Kasus</th>
                                  </tr>
                                 @foreach ($dataprov as $data)
                                  <tr>
                                    <th style="width:70%; padding-left:10px;">{{$data->attributes->Provinsi }}</th>
                                    <td class="text-center">{{$data->attributes->Kasus_Posi }}</td>
                                  </tr>                                     
                                 @endforeach
                                </tbody>
                              </table>
                          </div>
                      </div>
                    <!-- column -->
            <!-- Tutup Body -->
          </div>
        </div>

    <!-- End of Content Wrapper -->
    <div class="container">
      <div class="row" id="footer">
        <div class="col-md-3">
          <footer>
            <div class="text-center">
              <h6>Develop By Suluh Kerta Nusantara</h6>
              <h6 class="text-center">@copyright 2020</h6>
            </div>
          </footer>
        </div>
        <div class="col-md-4 text-center">
          {{-- <h6>Develop By Suluh Kerta Nusantara @copyright 2020</h6> --}}
          {{-- <h6 class="text-center"></h6> --}}
        </div>
        <div class="col-md-5" >
          <div class="sosialmedia d-flex"  >
          <h6 class="mt-3">Temukan Kami di :</h6>
          <a href="#" class="ml-2"><img src="{{url('assets/gambar/instagram.jpg')}}" id="instagram" class="rounded-circle img-thumbnail img-responsive" alt="" ></a>
          <a href="#" class="mx-2"><img src="{{url('assets/gambar/facbook.png')}}" id="gambar" class="img-thumbnail rounded-circle img-responsive" alt="" ></a>
          <a href="#"><img src="{{url('assets/gambar/playstore.JPG')}}" id="sosmed" alt="" ></a>
          
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Covid-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="responsive">
          <div class="form-group row">
            <div class="col-sm-12">
              <label  class="col-form-label" id="name" >Name</label>
              <input type="text" class="form-control" id="name" placeholder="ketik disini" name="name">
            </div>
          </div>
          <div class="form-group  row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label  class="col-form-label" id="name" >No.Handphone</label>
                <input type="text" class="form-control" name="no_handphone" id="no_handphone" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label for="inputPassword" class="col-form-label" id="name">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="ketik disini">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label class="col-form-label" id="name">Pesan</label> <br>
                <textarea type="text" name="pesan" class="form-control" placeholder="Describe yourself here...">

                </textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
{{-- Map Api --}}
{{-- <script>
    var map;
    function initMap() {
      map = new google.maps.Map(
          document.getElementById('map'),
          {center: new google.maps.LatLng(-6.2156707, 106.8301494), zoom: 6, styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]},
          
          );

          loadMap();
    }
    
function loadMap() {

  var cdata = JSON.parse(document.getElementById('data').innerHTML);

  console.log(cdata);
  // geocoder = new google.maps.Geocoder();  
  // codeAddress(cdata);
  var allData = JSON.parse(document.getElementById('allData').innerHTML);
  showAllColleges(allData)
}

function showAllColleges(allData) {
      var infoWind = new google.maps.InfoWindow;
      Array.prototype.forEach.call(allData, function(data){
        var content = document.createElement('div');
        var strong = document.createElement('strong');
        
        strong.textContent = data.nama +" status :" + data.status + "\n" + " tanggal :" + data.tanggal;
        content.appendChild(strong);

        console.log(data.latitude+data.longtitude);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.longtitude, data.latitude),
            map: map
          });
          marker.addListener('mouseover', function(){
            infoWind.setContent(content);
            infoWind.open(map, marker);
          })
      })
    }
  </script> --}}
{{-- Akhir Map --}} 
  <!-- Akhir Map -->
  <!-- Bootstrap core JavaScript-->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script>
      const DEFAULT_COORD = [-6.2293867, 106.6894321];

      // initial Map
      const map = L.map("render-map");

      // initial file
      const url = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

      // attribute
      const atribute = "Leaflet with <a href='https://acacemy.byidmore.com'>id More Academy</a>";
      const omstile = new L.TileLayer(url, {
          minZoom: 2,
          maxZoom: 20,
          attribution: atribute
      })
      map.setView(new L.LatLng(DEFAULT_COORD[0], DEFAULT_COORD[1]), 15)
      map.addLayer(omstile)
  </script>

{{-- Jam --}}
{{-- <script>
    var refreshId = setInterval(function() {
        $('#jamupdate').load();
    }, 500);
  </script> --}}
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script> --}}
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
{{-- Ganti Background --}}
<script>
  $('#terang').click(function(){
    // console.log('berhasil');
    document.body.style.backgroundColor = ('#8B0000');
  });
  $('#gelap').click(function(){
    // console.log('berhasil');
    document.body.style.backgroundColor = ('#10253a');
  });

  $(document).ready(function () {
	$('#terang').on('click', 'label', function () {
    $(this).siblings().removeClass('active');
		$(this).addClass('active');

	});
});
</script>
<script>
  var database = firebase.database();
</script>
</body>

</html>
