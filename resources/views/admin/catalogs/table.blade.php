<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="catalogs-table">
            <thead>
            <tr>
                <th>標題</th>
                <th>簡介</th>
                <th>瀏覽人次</th>
                <th colspan="3">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($catalogs as $catalog)
                <tr>
                    <td>{{ $catalog->title }}</td>
                    <td>{{ $catalog->intro }}</td>
                    <td>{{ $catalog->views }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.catalogs.destroy', $catalog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.catalogs.show', [$catalog->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.catalogs.edit', [$catalog->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $catalogs])
        </div>
    </div>
</div>
