


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Order Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bootdey" id="invoice-print">
    <div class="row invoice row-printable">
        <div class="col-md-10">
            <!-- col-lg-12 start here -->
            <div class="panel panel-default plain" id="dash_0">
                <!-- Start .panel -->
                <div class="panel-body p30">
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-6">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-logo"><img width="100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Invoice logo"></div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-6">
                            <!-- col-lg-6 start here -->
                            <div class="invoice-from">
                                <ul class="list-unstyled text-right">
                                    <li>Dash LLC</li>
                                    <li>2500 Ridgepoint Dr, Suite 105-C</li>
                                    <li>Austin TX 78754</li>
                                    <li>VAT Number EU826113958</li>
                                </ul>
                            </div>
                        </div>
                        <!-- col-lg-6 end here -->
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="invoice-details mt25">
                                <div class="well">
                                    <ul class="list-unstyled mb0">
                                        <li><strong>Invoice</strong> #936988</li>
                                        <li><strong>Invoice Date:</strong> {{$order->created_at}}</li>
                                        <li><strong>VAT(5%):</strong>{{$order->total*5/100}}.00BDT </li>
                                        <li><strong>Grand Total:</strong> {{$order->total+($order->total*5/100)}}.00BDT </li>
                                        <li><strong>Status:</strong> <span class="label label-danger">{{$order->status}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="invoice-to mt25">
                                <ul class="list-unstyled">
                                    <li><strong>Invoiced To</strong></li>
                                    <li>{{$order->receiver_first_name}}{{$order->receiver_last_name}}</li>
                                    <li>{{$order->receiver_email}}</li>
                                    <li>{{$order->receiver_address}}</li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="invoice-items">
                                <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="per70 text-center">Serial</th>
                                                <th class="per70 text-center">Product Name</th>
                                                <th class="per5 text-center">Quantity</th>
                                                <th class="per25 text-center">Unit Price</th>
                                                <th class="per25 text-center">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->details as $key=>$data)
                                            <tr>
                                                <td class="text-center">{{$key+1}}</td>
                                                <td class="text-center">{{$data->item->name}}</td>
                                                <td class="text-center">{{$data->quantity}}</td>
                                                <td class="text-center">{{$data->unit_price}}</td>
                                                <td class="text-center">{{$data->subtotal}}</td>
                                            </tr>
                                        
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <th colspan="4" class="text-right">Total:</th>
                                                <th class="text-center">{{$order->total}}.00BDT</th>
                                            </tr>
                                            <tr>
                                                <th colspan="4" class="text-right">5% VAT:</th>
                                                <th class="text-center">{{$order->total*5/100}}.00BDT</th>
                                            </tr>
                                            <tr>
                                                <th colspan="4" class="text-right">Grand Total:</th>
                                                <th class="text-center">{{$order->total+($order->total*5/100)}}.00BDT</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>                
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <!-- End .row -->
                </div>
            </div>
            <!-- End .panel -->
        </div>
        <!-- col-lg-12 end here -->
    </div>
</div>