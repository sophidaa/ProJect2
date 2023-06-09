
<x-app-layout>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</sup></div>
        </a>

        <!-- Divider -->
        

        <!-- Nav Item - Dashboard -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>คำขอใช้ระบบ</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="table">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>รายการ อปท.ที่ใช้งาน</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block ">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div>
                        <h3 class="font-semibold text-gray-800 leading-tight">รายการอปท.ที่ใช้งาน</h3>
                </div>

                <!-- table คำขอใช้ระบบ -->
                <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>เบอร์ติดต่อ</th>
                                            <th>จังหวัด</th>
                                            <th>ชื่อ อปท. ที่ขอใช้</th>
                                            <th>หมายเหตุ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                    @php($i=1)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">รายละเอียด</button>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd2-example-modal-lg">Update</button>
                                            </td>   
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
            

                </div>

            </div>


        </div>

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Modal 2 -->
<div class="modal fade bd2-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                <div class="form-group">
                        <div class="form-group btn">
                                <label for="exampleFormControlSelect1">รายการ</label>
                            <select class="form-control btn-dark" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">รายละเอียด</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <p>Upload file PDF </p>
                        <input type="file" id="fileInput">
                    </div>
                    <div class="form-group">
                        <p>Upload file รูปภาพ</p>
                        <input type="file" id="fileInput">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Date : </label>
                        <input type="date" id="date" />
                    </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- Modal 1 -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>การกระทำ</th>
                                    <th>รายละเอียด</th>
                                    <th>รูป</th>
                                    <th>PDF</th>
                                    <th>วันที่</th>

                                </tr>
                            </thead>
                              <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td> 
                                    </tr>
                               
                            </tbody> 
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>



<link rel="stylesheet" href="https:cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https:code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https:cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https:cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet"></link>
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"></link>
<link href="{{ asset('admin/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"></link>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
</x-app-layout>