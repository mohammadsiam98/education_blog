@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
      
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
         
          
            @include('alert.messages')
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Details</th>
                   
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($PrivacyPolicy)>0)
            @foreach ($PrivacyPolicy as $Privacy)
                <tr>
                    <td>{{$Privacy->id}}</td>
                    <td>{{$Privacy->details}}</td>
                  
                    <td>
                        <img style="height: 70px; width:auto;" src="{{url($Privacy->image)}}" alt="image">
                          
                    </td>

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.privacy.edit' , $Privacy->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                      
                        </div>
                      </td>
                  
                </tr>

            @endforeach                    
            @endif
               
                </tbody>
            </table>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection