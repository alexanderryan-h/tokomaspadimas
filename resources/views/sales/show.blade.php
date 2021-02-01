@extends('layouts.master')

@section('title')
    Print Pesanan
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Nota <small> Print Nota Pesanan.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Pesanan</a>
                                        </li>
                                        <li class="active">
                                            Nota
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

						<div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h3><img src="{{ asset('images/lily-logo-min.png')}}" alt="" height="80"> Modes Lina</h3>
                                            </div>
                                            <div class="pull-right m-t-30 text-right">
                                                <h4 class="m-b-0">INVOICE</h4>
                                                <p>#INV-1</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="pull-left">
                                                    <strong>Customer Info:</strong>
                                                    <h4 class="m-b-10">{{ $order->customer->customer_name }}</h4>
                                                    <address>                                                      
                                                        {{ $order->customer->customer_address }}<br>
                                                        <abbr title="Phone">Phone: </abbr> {{ $order->customer->customer_phone }}
                                                    </address>
                                                </div>
                                                <div class="pull-right text-right">
                                                    <p><strong>Print Date: </strong>
                                                    <br>{{date('Y-m-d')}}</br>
                                                    <strong>Delivery Date: </strong>
                                                    <br>{{$order->delivery_date}}</p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="m-h-50"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30 m-b-0 table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th width="50px;">#</th>
                                                                <th>Product</th>
                                                                <th width="150px" class="text-right">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <b>{{ $order->order_details}}</b><br>
                                                                    <small>
                                                                        @if($order->measurement->lingkar_badan != '0')
                                                                        	<span style="">Lingkar Badan :</span> {{$order->measurement->lingkar_badan}}
                                                                        @endif
                                                                        @if($order->measurement->lingkar_pinggang != '0')
                                                                        	<span style="">Lingkar Pinggang :</span> {{$order->measurement->lingkar_pinggang}}
                                                                        @endif
                                                                        @if($order->measurement->lingkar_pinggul != '0')
                                                                        	<span style="">Lingkar Pinggul :</span> {{$order->measurement->lingkar_pinggul}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_dada != '0')
                                                                        	<span style="">Panjang Dada :</span> {{$order->measurement->panjang_dada}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_punggung != '0')
                                                                        	<span style="">Panjang Punggung :</span> {{$order->measurement->panjang_punggung}}
                                                                        @endif
                                                                        @if($order->measurement->lebar_dada != '0')
                                                                        	<span style="">Lebar Dada :</span> {{$order->measurement->lebar_dada}}
                                                                        @endif
                                                                        @if($order->measurement->lebar_punggung != '0')
                                                                        	<span style="">Lebar Punggung :</span> {{$order->measurement->lebar_punggung}}
                                                                        @endif
                                                                        @if($order->measurement->lebar_bahu != '0')
                                                                        	<span style="">Lebar Bahu :</span> {{$order->measurement->lebar_bahu}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_tangan != '0')
                                                                        	<span style="">Panjang Tangan :</span> {{$order->measurement->panjang_tangan}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_siku != '0')
                                                                        	<span style="">Panjang Siku :</span> {{$order->measurement->panjang_siku}}
                                                                        @endif
                                                                        @if($order->measurement->lingkar_siku != '0')
                                                                        	<span style="">Lingkar Siku :</span> {{$order->measurement->lingkar_siku}}
                                                                        @endif
                                                                        @if($order->measurement->lingkar_tangan != '0')
                                                                        	<span style="">Lingkar Tangan :</span> {{$order->measurement->lingkar_tangan}}
                                                                        @endif
                                                                        @if($order->measurement->tinggi_nat != '0')
                                                                        	<span style="">Tinggi NAT :</span> {{$order->measurement->tinggi_nat}}
                                                                        @endif
                                                                        @if($order->measurement->jarak_nat != '0')
                                                                        	<span style="">Jarak NAT :</span> {{$order->measurement->jarak_nat}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_blues != '0')
                                                                        	<span style="">Panjang Blues :</span> {{$order->measurement->panjang_blues}}
                                                                        @endif
                                                                        @if($order->measurement->panjang_rok != '0')
                                                                        	<span style="">Panjang Rok :</span> {{$order->measurement->panjang_rok}}
                                                                        @endif
                                                                        @if($order->measurement->other_measurements != '0')
                                                                        	{{$order->measurement->other_measurements}}
                                                                        @endif

                                                                    </small>
                                                                </td>
                                                                <td class="text-right">Rp{{ $order->order_amount }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                        
                                            <div class="col-xs-12">
                                                <table class="table text-right table table-bordered table-hover">                                                
                                                    <tr>
                                                        <td><strong>Sub-total:</strong></td>
                                                        <td width="150px" class="text-right">Rp{{ $order->order_amount }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Paid:</strong></td>
                                                        <td width="150px" class="text-right">Rp{{ $order->order_paid }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Due:</strong></td>
                                                        <td width="150px" class="text-right">Rp{{ $order->order_amount - $order->order_paid }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>      
                                        <div class="row">
                                            <div class="col-md-12 m-t-20">
                                                <p class="text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-info waves-effect waves-light"><i class="fa fa-print"></i> Print</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

@endsection