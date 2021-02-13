@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $jumlah_cincin }}</h3>

                <p>{{ $nama_nn1[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $jumlah_kalung }}<sup style="font-size: 20px"></sup></h3>

                <p>{{ $nama_nn2[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $jumlah_gelang }}</h3>
                <p>{{ $nama_nn3[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>{{ $jumlah_anting }}</h3>
                <p>{{ $nama_nn4[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ $jumlah_subeng }}</h3>
                <p>{{ $nama_nn5[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $jumlah_leontin }}</h3>
                <p>{{ $nama_nn6[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{ $jumlah_peniti }}</h3>
                <p>{{ $nama_nn7[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>{{ $jumlah_berlian }}</h3>
                <p>{{ $nama_nn8[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>{{ $jumlah_lm }}</h3>
                <p>{{ $nama_nn9[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{ $jumlah_ctg1 }}</h3>
                <p>{{ $nama_nn10[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-lime">
            <div class="inner">
                <h3>{{ $jumlah_ctg2 }}</h3>
                <p>{{ $nama_nn11[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-fuchsia">
            <div class="inner">
                <h3>{{ $jumlah_ctg3 }}</h3>
                <p>{{ $nama_nn12[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>{{ $jumlah_ctg4 }}</h3>
                <p>{{ $nama_nn13[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>{{ $jumlah_ctg5 }}</h3>
                <p>{{ $nama_nn14[0]->name }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>


</div>
@endsection

@section('top')
@endsection
