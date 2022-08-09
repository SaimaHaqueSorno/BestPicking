

<style>
body{margin-top:20px;
background:#eee;
}

/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	padding:10px 30px;
}

.invoice .invoice-total {
	margin-right:200px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	/* text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg); */
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color:#66c591;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

/* @media print {
	.invoice {
		width:900px;
		height:800px;
	}
} */

</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-sm-12">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
			
		    <div class="row">

				<div class="col-sm-6 top-left">
					<i class="fa fa-rocket"></i>
				</div>

				<div class="col-sm-6 top-right">
						<h3 class="marginright">INVOICE</h3>
						<span class="marginright">{{$order->created_at}}</span>
			    </div>

			</div>
			<!-- <hr> -->
			<div class="row">
				<div class="col-lg-4 from">
					<p class="lead marginbottom">From : Kodeeo</p>
					<p>House:14</p>
					<p>Road:8</p>
					<p>Sector:6</p>
					<p>Uttara,Dhaka</p>
					<p>Email:info@kodeeo.com</p>
				</div>

				<div class="col-lg-4 to">
					<p class="lead marginbottom">To :</p>
					<p>{{$order->receiver_first_name}}{{$order->receiver_last_name}}</p>
					<p>{{$order->receiver_email}}</p>
					<p>{{$order->receiver_address}}</p>
					<!-- <p>Phone: 415-676-3600</p>
					<p>Email: john@doe.com</p> -->

			    </div>

			    <div class="col-lg-4 text-right payment-details">
					<p class="lead marginbottom payment-info">Payment details</p>
					<p>Date:{{$order->created_at}}</p>
					<p>VAT(5%):{{$order->total*5/100}} .BDT </p>
					<p>Total Amount: {{$order->total+($order->total*5/100)}} .BDT</p>
					<p>Account Name: Flatter</p>
			    </div>

			</div>

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">Serial</th>
			          <th class="text-center" style="width:50%">Item</th>
			          <th class="text-right" style="width:15%">Quantity</th>
			          <th class="text-right" style="width:15%">Unit Price</th>
			          <th class="text-right" style="width:15%">Subtotal Price</th>
			        </tr>
			      </thead>
			      <tbody>
				  @foreach($order->details as $key=>$data)
			        <tr>
			          <td class="text-center">{{$key+1}}</td>
			          <td class="text-center">{{$data->item->name}}</td>
			          <td class="text-right">{{$data->quantity}}</td>
			          <td class="text-right">{{$data->unit_price}} .BDT</td>
			          <td class="text-right">{{$data->subtotal}} .BDT</td>
			        </tr>
					@endforeach
			      
			       
			         
			       </tbody>
			    </table>

			</div>

			<div class="col-xs-4 text-right pull-right invoice-total">
					  <p>Subtotal : {{$data->subtotal}} .BDT</p>
			          <p>Discount :null</p>
			          <p>VAT (5%) :{{$order->total*5/100}} .BDT</p>
			          <p>Total :{{$order->total+($order->total*5/100)}} .BDT</p>
			</div>

		  </div>
		</div>
	</div>
</div>
</div>


