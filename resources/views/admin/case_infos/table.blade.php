<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-infos-table">
            <thead>
            <tr>
                <th>標題</th>
                <th>分類</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($caseInfos as $caseInfo)
                <tr>
                    <td>{{ $caseInfo->title }}</td>
                    <td>{{ \App\Models\Admin\Category::find($caseInfo->category_id)->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.caseInfos.destroy', $caseInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.caseInfos.show', [$caseInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.caseInfos.edit', [$caseInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $caseInfos])
        </div>
    </div>
</div>
