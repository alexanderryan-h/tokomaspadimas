@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
    <!-- ./col -->
    @foreach ($jumlah as $p)
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{ $p->count }}</h3>
            <p>{{$p->name}}</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('top')
@endsection
