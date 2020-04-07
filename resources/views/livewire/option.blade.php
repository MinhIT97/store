<table class="table table-striped table-responsive">
    <thead>
        <tr>
            <th> # </th>
            <th> Name </th>
            <th> Created at </th>
            <th> Total products </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        @if($option->count())
        @foreach($option as $brand)
        <tr>
            <td> {{$brand->id}}</td>
            <td> {{$brand->value}} </td>

            <td>
                <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/brands/edit/'.$brand->id )}}"><i class="mdi mdi-tooltip-edit"></i>Edit</a>
                <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/brands/'.$brand->id )}}"><i class="mdi mdi-delete-sweep"></i>Delete</a>
                <a class="btn btn-gradient-success p-2 ml-2" wire:click="delete"><i class="mdi mdi-view-list"></i>Detail</a>
            </td>
        </tr>
        @endforeach
        @else
        <div>
            <p>Chưa có sản phẩm</p>
        </div>
        @endif
    </tbody>
</table>
<div class="mt-3">

</div>



