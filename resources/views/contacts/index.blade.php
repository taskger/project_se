@extends('contacts.layout')


@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
        <h2>ข้อมูลลูกค้าและการแก้ไsข</h2>
        <a href="{{ route('contacts.create')}}">กรอกข้อมูลลูกค้า</a>
        </div>
        <br>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered" style="width:100%">

        <tr>

            <th style="width:200px">รายละเอียด</th>
            <th style="width:100px">ลำดับ</th>
            <th style="width:300px">ชื่อผู้ซื้อประกัน</th>
            <th style="width:250px">อีเมล</th>
            <th style="width:200px">เบอร์</th>
            <th style="width:200px">วันเริ่มคุ้มครอง</th>
            <th style="width:200px">ยื่อห้อรถ</th>
            <th style="width:200px">รุ่นรถยนต์</th>
            <th style="width:200px">เลขทะเบียน</th>
            <th style="width:200px">เลขตัวถัง</th>
        </tr>

        @foreach ($data as $key => $value)
            <tr style="height:100px, width:400px">
                <td>
                    <form action="{{ route('contacts.destroy', $value->id) }}" method="post">
                        <a href="{{ route('contacts.show', $value->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('contacts.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Detele</button>
                        
                    </form>
                </td>
                <td>{{ ++$i }}</td>
                <td>{{ $value->prefix }}{{ $value->firstname }} {{ $value->lastname }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>{{ $value->coverstartdate }}</td>
                <td>{{ $value->brand }}</td>
                <td>{{ $value->carmodel }}</td>
                <td>{{ $value->registrationnumber }}</td>
                <td>{{ $value->chassisnumber }}</td>

            </tr>
        @endforeach
    </table>

    {!! $data->links() !!}

@endsection