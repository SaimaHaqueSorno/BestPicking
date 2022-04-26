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
            <img alt="image" style="width:300px" class="img-circle img-thumbnail isTooltip" src="{{url('/uploads/'.$user->image)}}"> 
        </div>

        <div class="col-md-6">
            <strong><h1>Information</h1></strong>
        <div class="">
        <button> <a href="{{route('edit.profile',$user->id)}}">Edit Profile</a> </button>
        </div>
        <br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                 
                    <!-- <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Identificacion                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            123456789     
                        </td>
                    </tr> -->
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                         {{$user->name}}
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
                           {{$user->role}}
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
                    {{$user->address}}
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
                           {{$user->email}}
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
                          {{$user->created_at}}
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
        <th scope="col">Items Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Unit Price</th>
        <th scope="col">SubTotal</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Action</th>
    </tr>
    <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        <td>
        <a class="btn btn-primary" href="" role="button">View</a>
        <a class="btn btn-danger" href="" role="button">Delete</a>
         </td>
    </tr>
    </thead>
    <tbody>
  
    
    </tbody>
</table>
<!-- @endsection     -->
                                  