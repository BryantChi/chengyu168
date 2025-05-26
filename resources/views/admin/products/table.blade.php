<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="products-table">
            <thead>
            <tr>
                <th>標題</th>
                <th>簡介</th>
                <th>圖片</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->intro }}</td>
                    <td>
                        @php
                            $imagePath = \App\Models\Admin\ProductImage::where('product_id', $product->id)->first();
                        @endphp
                        @if($imagePath)
                            <img src="{{ asset('uploads/' . $imagePath->image_path) }}" alt="Product Image" style="width: 100px; height: auto;">
                        @endif
                    </td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.products.show', [$product->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.products.edit', [$product->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $products])
        </div>
    </div>
</div>
