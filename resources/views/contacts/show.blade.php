@extends('contacts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            
            <a href="{{ route('contacts.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>
       


                <br><br>
                <div class="form1" style="font-size: 24px;"><h3>ยืนยันข้อมูลของท่าน</h3></div>


                <br>
                <div><h1>ข้อมูลผู้เอาประกัน</h1></div>

                <br>
                <div class="left">
                    <strong>คำนำหน้าชื่อ</strong><br>
                    <div class="box">{{ $contact->prefix }}</div>
                                       
                </div>
                
                <br>
                <div class="left">
                    <br><strong>ชื่อ</strong><br>
                    <div class="box">{{ $contact->firstname }}</div>
                </div>


                <div class="right">
                    <strong>นามสกุล</strong><br>
                    <div class="box">{{ $contact->lastname }}</div>
                </div>

                <div class="left">
                    <strong>เบอร์</strong><br>
                    <div class="box">{{ $contact->phone }}</div>
                </div>

                <div class="right">
                    <strong>อีเมล</strong><br>
                    <div class="box">{{ $contact->email }}</div>
                </div>

                <div class="left">
                    <strong>วันเกิด</strong><br>
                    <div class="box">{{ $contact->birthday }}</div>
                </div>

                <div class="right">
                    <strong>เลขบัตรประชาชน</strong><br>
                    <div class="box">{{ $contact->identification }}</div>
                </div>

                <div class="left">
                    <strong>สถานภาพ</strong><br>
                    <div class="box">{{ $contact->status }}</div>       
                </div>

                <div class="right">
                    <strong>อาชีพ</strong><br>
                    <div class="box">{{ $contact->career }}</div> 
                </div>

                <div><h1>ที่อยู่ในการติดต่อและส่งเอกสาร</h1></div>



                <div class="left">
                    <strong>จังหวัด</strong>
                    <div class="box">{{ $contact->province }}</div> 
                </div>

                <div class="right">
                    <strong>อำเภอ</strong>
                    <div class="box">{{ $contact->amphoe }}</div> 
                </div>

                <div class="left">
                    <strong>ตำบล</strong>
                    <div class="box">{{ $contact->tambon }}</div>
                </div>

                <div class = "right">
                    <strong>รหัสไปรษณีย์</strong><br>
                    <div class="box">{{ $contact->input_zipcode }}</div>
                </div>

                <div class="left">
                    <strong>ที่อยู่</strong><br>
                    <div class="box">{{ $contact->address}}</div> 
                </div>

                <div class="right">
                    <strong>ถนน</strong><br>
                    <div class="box">{{ $contact->road }}</div> 
                </div>


                <div><h1>ข้อมูลรายละเอียดรถยนต์-ความคุ้มครอง</h1></div><br>


                <div class="left">
                    <strong>วันเริ่มคุ้มครอง</strong><br>
                    <div class="box">{{ $contact->coverstartdate }}</div> 
                </div>

                <div class="right">
                    <strong>ยี่ห้อรถ</strong><br>
                    <div class="box">{{ $contact->brand }}</div>
                </div>

                <div class="left">
                    <strong>รุ่นรถยนต์</strong><br>
                    <div class="box">{{ $contact->carmodel }}</div>
                </div>

                <div class="right">
                    <strong>ปีรถยนต์</strong><br>
                    <div class="box">{{ $contact->caryear }}</div>
                </div>

                <div class="left">
                    <strong>เลขทะเบียน</strong><br>
                    <div class="box">{{ $contact->registrationnumber }}</div>
                </div>
                
                <div class="right">
                    <strong>จังหวัดที่จดทะเบียน</strong><br>
                    <div class="box">{{ $contact->registrationprovince }}</div>
                </div>

                <div class="left">
                    <strong>เลขตัวถัง</strong><br>
                    <div class="box">{{ $contact->chassisnumber }}</div>
                </div>

                <div class="right">
                    <strong>สีรถ</strong><br>
                    <div class="box">{{ $contact->carpaint }}</div>
                </div>    
                <div class="submitcreate">
                    <br><a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-secondary">ย้อนกลับ</a><a>ชำระเงิน</a>
                </div>



@endsection