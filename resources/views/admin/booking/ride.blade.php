@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> MASTER DATA PENGENDARA</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Pengendara</li>
        </ol>
    </div>
</div>
<br>
    <form method="GET" action="/ride">
        <input name='cari' class="form-control" placeholder="Enter Nama Pengendara" type="text">
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Pemesanan
  </button>
<br><br>
<div class="row">
<div class="col-lg-12">
    <section class="panel">
    <table class="table table-striped table-advance table-hover">
        <tbody>
        <tr>
            <th> ID Pengendara</th>
            <th> Nama Lengkap</th>
            <th>Plat Nomor</th>
            <th>Costomer</th>
            <th>No HP </th>
            <th> Email </th>
            
            <th> Aksi</th>
        </tr>
        {{-- @foreach ($data_pengendara as $rides) --}}
        <tr>
            <td >Rd 876</td>
            <td> Isnaini</td>
            <td> L 5642 H</td>
            <td> <table class="table table-condensed">
                    <a href=""><span>Susanti</span></a> <br>
                    <a href=""><span>Jasmine</span></a> <br>
                    <a href=""><span>Puji Astuti</span></a> <br>
                </table>
            </td>
            <td> <table class="table table-condensed">
                    <span>08111111</span> <br>
                    <span>08222222</span> <br>
                    <span>08333333</span> <br>
                </table>
            <td> <table class="table table-condensed">
                    <span>suanti@email.com</span> <br>
                    <span>jasmine@email.com</span> <br>
                    <span>puji@email.com</span> <br>
                </table>
            <td>
            <div class="btn-group">
                <a class="btn btn-success" href="#"><span>Edit</span></a>
                <a class="btn btn-danger" href="#"><span>Delete</span></a>
            </div>
            </td>
        </tr>
        {{-- @endforeach         --}}
        </tbody>
    </table>
    </section>
</div>
</div>

{{-- MODAL TAMBAH DATA PENGENDARA --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:red;text-align:center;"><strong>TAMBAH DATA PEMESANAN</strong></h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-36">
                <form class="form-horizontal" action="{{ url('/tr/ride/create') }}" method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group" style="color:black;">
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">ID Pengendara</label>
                                <input type="text" name="id_pengendara" class="form-control"  placeholder="ID Pengendara">
                            </div>
                           
                            {{-- - --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                            </div>
                                {{--  --}}
                            <div class="col-sm-12">
                                    <label for="exampleInputPassword1">Plat Nomor</label>
                                    <input type="text" name="no_plat" class="form-control" id="exampleInputPassword1" placeholder="Plat Nomor">
                            </div> <hr>
                                {{--  --}}
                            <h4 style="text-align:center;"><strong>DATA CUSTOMER</strong></h4> <hr>
                            <div class=col-lg-12>
                                <div class="col-sm-4">
                                        <label for="exampleInputPassword1">Customer 1</label>
                                        <input type="text"  name="customers" class="form-control" id="exampleInputPassword1" placeholder="Customer 1">
                                </div>
                                    {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">Alamat Email</label>
                                    <input type="text" name="alamat_email" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                                </div>
                                {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">No HP</label>
                                    <input type="text" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                                </div>
                            </div>
                                {{--  --}}
                            <div class=col-lg-12>
                                <div class="col-sm-4">
                                        <label for="exampleInputPassword1">Customer 2</label>
                                        <input type="text"  name="customers" class="form-control" id="exampleInputPassword1" placeholder="Customer 1">
                                </div>
                                    {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">Alamat Email</label>
                                    <input type="text" name="alamat_email" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                                </div>
                                {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">No HP</label>
                                    <input type="text" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                                </div>
                            </div>
                            {{--  --}}
                            <div class=col-lg-12>
                                <div class="col-sm-4">
                                        <label for="exampleInputPassword1">Customer 3</label>
                                        <input type="text"  name="customers" class="form-control" id="exampleInputPassword1" placeholder="Customer 1">
                                </div>
                                    {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">Alamat Email</label>
                                    <input type="text" name="alamat_email" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                                </div>
                                {{--  --}}
                                <div class="col-sm-4">
                                    <label for="exampleInputPassword1">No HP</label>
                                    <input type="text" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                                </div>
                            </div>
                                    {{--  --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
@endsection