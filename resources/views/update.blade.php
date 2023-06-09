<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ฟอร์มขอใช้งานระบบ</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />   
    </head>
      <body class="bg-warning">
        <div class="relative sm:flex sm:justify-center sm:items-center  ">
            @if (Route::has('/'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"></div>
            @endif
            <x-guest-layout>
          <form method="GET" action="/">
              @csrf   
            <!-- Jumbotron -->
                  
                      <div class="jumbotron text-center text-dark bg-warning" >

                      <!-- Title -->
                      <h2 class="card-title h2">สำเร็จ</h2>
                      <!-- Subtitle -->
                      <p class="blue-text my-4 font-weight-bold text-dark">คำขอเข้าใช้งานระบบถูกส่งไปสำเร็จ</p>

                      <!-- Grid row -->
                      <div class="row d-flex justify-content-center">

                        <!-- Grid column -->
                        <div class="col-xl-7 pb-2">

                          <p class="card-text">ระบบได้รับคำขอใช้ระบบของท่านแล้ว กรุณารอเจ้าหน้าที่ติดต่อกลับไป</p>

                        </div>
                        <!-- Grid column -->

                      </div>
                      <!-- Grid row -->

                      <hr class="my-4">

                      <div class="pt-2">
                        
                        <button href="welcome" class="btn btn-outline-primary waves-effect">กลับสู่หน้าขอใช้ระบบ<i class="fas fa-download ml-1"></i></button>
                      </div>

                      </div>
                  </div> 
            <!-- Jumbotron -->
          </from>
      </body>

    </x-guest-layout>
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet"></link>
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"></link>
    <link href="{{ asset('admin/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"></link>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    </body>
</html>