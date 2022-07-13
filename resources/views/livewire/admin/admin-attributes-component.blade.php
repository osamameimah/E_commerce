<div>
    <style>
nav svg{
    height: 20px; 
}
nav .hidden{
    display: block !important;
} 
.sclist{
    list-style: none;
}
.sclist li{
    line-height: 33px;
    border-bottom: 1px solid #ccc;
}
.slink i{
    font-size: 16px;
    margin-left: 12px;
}
        </style>
    <div class="container" style="padding:30px 0 ;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
<div class="row">
<div class="col-md-6">
    All Attributes
</div>
<div class="col-md-6">
    <a href="{{ route("admin.add-attribute") }}" class="btn btn-success pull-right">Add New</a>
</div>

                    </div>
                    <div class="panel-body">

 <div class="panel-body">
 @if(Session::has('message'))
<div class="alert alert-success" role="alert">{{ Session::get('message') }} 
 </div> 
 @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                     <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patteributes as $patteribute)
                                <tr>
                                    <td>{{ $patteribute->id }}</td>
                                    <td>{{ $patteribute->name }}</td>
                                    <td>{{ $patteribute->created_at }}</td>
  <td>                                  
<a href="{{ route('admin.edit-attribute',['attribute_id'=>$patteribute->id]) }}"><i class="fa fa-edit fa-2x"></i> </a>
<a href="#" onclick="confirm('Are you sure, You want to delete this category ?')||event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$patteribute->id  }})"  style="margin-left:10px; "><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $patteributes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
