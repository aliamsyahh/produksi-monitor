@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Pemesanan Baru</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('pesanan.simpan')}}" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="nama_customer">No Pesanan</label>
                        <input type="text" name="kode" value="{{$kode}}" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="">Pilih Customer</label>
                        <div class="input-group mb-2">
                            <select name="id_customer" id="" class="form-control">
                                <option value="">Pilih Customer</option>
                                @foreach ($customers as $data )
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Pilih Product</label>
                        <div class="input-group mb-2">
                            <select name="id_product" id="" class="form-control">
                                <option value="">Pilih Product</option>
                                @foreach ($products as $data )
                                    @if ($data->status != 'sold')
                                    <option value="{{$data->id}}">{{$data->nama}} / {{$data->stock}} Unit</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Paket Aksesoris</label>
                        <div class="input-group mb-2">
                            <select name="id_product" id="" class="form-control">
                                <option value="">Pilih Paket</option>
                                @foreach ($pakets as $data )
                                    @if ($data->status != 'sold')
                                    <option value="{{$data->id}}">{{$data->nama_paket}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Quantity</label>
                        <div class="input-group mb-2">
                            <input type="number" class="form-control " name="quantity" required>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Tanggal Order</label>
                        <div class="input-group mb-2">
                            <input type="datetime-local" class="form-control " name="tgl_pesan" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Tanggal Selesai</label>
                        <div class="input-group mb-2">
                            <input type="datetime-local" class="form-control " name="tgl_selesai" required>
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="col-sm-6">
                        <a href="" class="btn btn-danger btn-block btn">
                            <i class="fas fa-arrow-left fa-fw"></i> Kembali
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save fa-fw"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
