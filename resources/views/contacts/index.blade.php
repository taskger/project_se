@extends('contacts.layout')


@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/datauser.css')}}"> -->
    <div class="row mt-5">
        <div class="col-md-12">
        <h2 class = "name">ข้อมูลลูกค้าและการแก้ไข</h2>
        <!-- <a href="{{ url()->previous() }}" class = "btn-back">ย้อนกลับ</a>
        <a href="{{ route('contacts.create')}}" class = "btn-insert">กรอกข้อมูลลูกค้า</a>
        <a class="btn btn-info" href="{{ route('print.index') }}">print</a> -->
        <ul>
            <li><a href="{{ route('admin.home')}}" class = "btn-back">ย้อนกลับ</a></li>
            <li><a href="{{ route('contacts.create')}}" class = "btn-insert">กรอกข้อมูลลูกค้า</a></li>
            <li><a href="{{ route('print.index') }}" class="btn btn-info">print</a></li>
        </ul>
        </div>
        <br>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <input type="text" id="searchInput" class="form-control" placeholder="ค้นหา..." onkeyup="searchTable()">
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="usr" style="width:100%">

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
                        <!-- <button href = "{{ route('contacts.show', $value->id) }}" class =>Show</button> -->
                        <a href="{{ route('contacts.show', $value->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('contacts.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                        <!-- <a href="" class="btn btn-secondary">Print</a> -->
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
                <script>

                function searchTable() {
                    var input, filter, table, tr, td, i, j, txtValue;
                    input = document.getElementById("searchInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementsByTagName("table")[0];
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        for (j = 0; j < tr[i].cells.length; j++) {
                            td = tr[i].getElementsByTagName("td")[j];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                    break;
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                }
                </script>
            </tr>
        @endforeach
    </table>

    {!! $data->links() !!}

@endsection