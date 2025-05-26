<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cooperates-table">
            <thead>
            <tr>
                <th>合作項目</th>
                <th>身分別</th>
                <th>公司名稱</th>
                <th>聯絡人姓名</th>
                <th>聯絡人電話</th>
                <th>Email</th>
                <th>地址</th>
                <th>其他說明</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cooperates as $cooperate)
                <tr>
                    <td>{{ $cooperate->cooperate }}</td>
                    <td>{{ $cooperate->identity }}</td>
                    <td>{{ $cooperate->company_name }}</td>
                    <td>{{ $cooperate->contact_name }}</td>
                    <td>{{ $cooperate->contact_phone }}</td>
                    <td>{{ $cooperate->email }}</td>
                    <td>{{ $cooperate->address }}</td>
                    <td>{{ $cooperate->other }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.cooperates.destroy', $cooperate->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.cooperates.show', [$cooperate->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            {{-- <a href="{{ route('admin.cooperates.edit', [$cooperate->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a> --}}
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return check(this);"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $cooperates])
        </div>
    </div>
</div>
