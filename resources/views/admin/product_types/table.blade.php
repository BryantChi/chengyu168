<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="product-types-table">
            <thead>
            <tr>
                <th>名稱</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productTypes as $productType)
                <tr>
                    <td>{{ $productType->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.productTypes.destroy', $productType->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.productTypes.show', [$productType->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.productTypes.edit', [$productType->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this);"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $productTypes])
        </div>
    </div>
</div>
