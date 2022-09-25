<!-- @extends('frontend.master')
@section('content') -->
<style>
     .inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}			                                                      
</style>




<div class="container bootstrap snippets bootdey">  
    <div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="image" style="width:300px" class="img-circle img-thumbnail isTooltip" src="{{url('/uploads/'. auth()->user()->image)}}"> 
        </div>

        <div class="col-md-6">
            <strong><h1>Information</h1></strong>
        <div class="">
        <button> <a href="{{route('edit.profile',auth()->user()->id)}}">Edit Profile</a> </button>
        </div>
        <br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                 
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                         {{auth()->user()->name}}
                        </td>
                    </tr>
                  

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Role                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                           {{auth()->user()->role}}
                        </td>
                    </tr>

                    
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Address                                            
                            </strong>
                        </td>
                        <td class="text-primary">
                    {{auth()->user()->address}}
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                           {{auth()->user()->email}}
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                created                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                          {{auth()->user()->created_at}}
                        </td>
                    </tr>                         
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>  
<h1>My Order List</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Order Id</th>
        <th scope="col">Total</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order as $key=>$data)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->unique_id}}</td>
        <td>{{$data->total}}.BDT</td>
        <td>{{$data->payment_status}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('details.view',$data->id)}}" role="button">Details</a>
        <a class="btn btn-danger" href="" role="button">Delete</a>
         </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
<!-- @endsection -->
                                  