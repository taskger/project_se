@extends('contacts.layout')

@section('content')


    <a href="{{ route('contacts.index') }}" class="btn btn-primary my-3">Back</a>
    <a href="{{ route('contacts.index') }}" class="btn btn-primary my-3">Back</a>


    @if ($errors->any())
        <div class="alert alert-danger">
            <br><strong>คุณขาดการกรอกข้อมูล!</strong><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="post">
        @csrf

                <br>
                

                <div><h1>ข้อมูลผู้เอาประกัน</h1></div><br>

                <div class="left">   
                    <strong>คำนำหน้าชื่อ</strong><br>
                    <select  name="prefix" id="prefix" >
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                        <option value="นาง">นาง</option>
                    </select>        
                </div>

                <br>
                <div class="left">
                    <br><strong>ชื่อ</strong><br>
                    <input type="text" name="firstname" class="form-control"></input>
                </div>


                <div class="right">
                    <strong>นามสกุล</strong><br>
                    <input type="text" name="lastname" class="form-control" ></input>
                </div>


                <div class="left">
                    <strong>เบอร์</strong><br>
                    <input type="text" name="phone" class="form-control" ></input>
                </div>
           
                <div class="right">
                    <strong>อีเมล</strong><br>
                    <input type="text" name="email" class="form-control" ></input>
                </div>
            
                <div class="left">
                    <strong>วันเกิด</strong><br>
                    <input type="date" name="birthday" class="form-control" min="1950-01-01" max="2023-12-31"></input>
                </div>
            
                <div class="right">
                    <strong>เลขบัตรประชาชน</strong><br>
                    <input type="text" name="identification" class="form-control" ></input>
                </div>
            
                <div class="left">
                    <strong>สถานภาพ</strong><br>
                    <select name="status" id="status" >
                        <option value="โสด">โสด</option>
                        <option value="สมรส">สมรส</option>
                        <option value="หย่า">หย่า</option>
                        <option value="หม้าย">หม้าย</option>
                    </select>         
                </div>
            
           
                <div class="right">
                    <strong>อาชีพ</strong><br>
                    <input type="text" name="career" class="form-control" ></input>
                </div>
           

                <div><h1>ที่อยู่ในการติดต่อและส่งเอกสาร</h1></div><br>

                <div class="left">
                    <strong>จังหวัด</strong><br>
                    <select name="province" id="input_province">
                        <option value="">กรุณาเลือกจังหวัด</option>
                    </select>
                </div>
         
                <div class="right">
                    <strong>อำเภอ</strong><br>
                    <select name="amphoe" id="input_amphoe">
                        <option value="">กรุณาเลือกเขต/อำเภอ</option>
                    </select>
                </div>
           
                <div class="left">
                    <strong>ตำบล</strong><br>
                    <select name="tambon" id="input_tambon">
                        <option value="">กรุณาเลือกแขวง/ตำบล</option>
                    </select>
                </div>
            
                <div class="right">
                    <strong>รหัสไปรษณีย์</strong><br>
                    <input type="text" name="input_zipcode" id="input_zipcode" placeholder="รหัสไปรษณีย์" />
                </div>   

                <div class="left">
                    <strong>ที่อยู่</strong><br>
                    <input type="text" name="address" class="form-control" ></input>
                </div>

                <div class="right">
                    <strong>ถนน</strong><br>
                    <input type="text" name="road" class="form-control" ></input>
                </div>

                <div><h1>ข้อมูลรายละเอียดรถยนต์-ความคุ้มครอง</h1></div><br>
           
                <div class="left">
                    <strong>วันเริ่มคุ้มครอง</strong><br>
                    <input type="date" name="coverstartdate" class="form-control" min="1950-01-01" max="2023-12-31"></input>
                </div>
            
                <div class="right">
                    <strong>ยี่ห้อรถ</strong><br>
                    <input type="text" name="brand" class="form-control" ></input>
                </div>
            
                <div class="left">
                    <strong>รุ่นรถยนต์</strong><br>
                    <input type="text" name="carmodel" class="form-control" ></input>
                </div>
            
                <div class="right">
                    <strong>ปีรถยนต์</strong><br>
                    <input type="number" name="caryear" class="form-control" placeholder="ค.ศ. 1950-2023" min="1950" max="2023"></input>
                </div>
           
                <div class="left">
                    <strong>เลขทะเบียน</strong><br>
                    <input type="text" name="registrationnumber" class="form-control" placeholder="1กข 1234"></input>
                </div>
            
                <div class="right">
                    <strong>จังหวัดที่จดทะเบียน</strong><br>
                    <select name="registrationprovince" id="registrationprovince" class="form-control">
                        <option value="province">กรุณาเลือกจังหวัด</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                        <option value="นนทบุรี">นนทบุรี</option>
                        <option value="ปทุมธานี">ปทุมธานี</option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                        <option value="อ่างทอง">อ่างทอง</option>
                        <option value="ลพบุรี">ลพบุรี</option>
                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                        <option value="ชัยนาท">ชัยนาท</option>
                        <option value="สระบุรี">สระบุรี</option>
                        <option value="ชลบุรี">ชลบุรี</option>
                        <option value="ระยอง">ระยอง</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ตาก">ตาก</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                        <option value="นครนายก">นครนายก</option>
                        <option value="สระแก้ว">สระแก้ว</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="สุรินทร์">สุรินทร์</option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="ยโสธร">ยโสธร</option>
                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="อุดรธานี">อุดรธานี</option>
                        <option value="เลย">เลย</option>
                        <option value="หนองคาย">หนองคาย</option>
                        <option value="มหาสารคาม">มหาสารคาม</option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="นครพนม">นครพนม</option>
                        <option value="มุกดาหาร">มุกดาหาร</option>
                        <option value="เชียงใหม่">เชียงใหม่</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="ลำปาง">ลำปาง</option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                        <option value="แพร่">แพร่</option>
                        <option value="น่าน">น่าน</option>
                        <option value="พะเยา">พะเยา</option>
                        <option value="เชียงราย">เชียงราย</option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                        <option value="นครสวรรค์">นครสวรรค์</option>
                        <option value="อุทัยธานี">อุทัยธานี</option>
                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                        <option value="ตาก">ตาก</option>
                        <option value="สุโขทัย">สุโขทัย</option>
                        <option value="พิษณุโลก">พิษณุโลก</option>
                        <option value="พิจิตร">พิจิตร</option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                        <option value="นครปฐม">นครปฐม</option>
                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        <option value="เพชรบุรี">เพชรบุรี</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                        <option value="ชุมพร">ชุมพร</option>
                        <option value="ระนอง">ระนอง</option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                        <option value="พังงา">พังงา</option>
                        <option value="ภูเก็ต">ภูเก็ต</option>
                        <option value="กระบี่">กระบี่</option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                        <option value="ตรัง">ตรัง</option>
                        <option value="พัทลุง">พัทลุง</option>
                        <option value="สตูล">สตูล</option>
                        <option value="สงขลา">สงขลา</option>
                        <option value="ยะลา">ยะลา</option>
                        <option value="ปัตตานี">ปัตตานี</option>
                        <option value="นราธิวาส">นราธิวาส</option>

                    </select>
                </div>
            
                <div class="left">
                    <strong>เลขตัวถัง</strong><br>
                    <input type="text" name="chassisnumber" class="form-control" ></input>
                </div>
            
                <div class="right">
                    <strong>สีรถ</strong><br>
                    <input type="text" name="carpaint" class="form-control" ></input>
                </div>

                

                <div class="form">
                    <h2>คำเตือนของสำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย</h2>
                    <p>ให้ตอบคำถามข้างต้นตามความเป็นจริงทุกข้อ มิฉะนั้นบริษัทอาจถือเป็นเหตุปฏิเสธความรับผิดตามสัญญาประกันภัยได้ ตามประมวลกฎหมายแพ่งและพาณิชย์มาตรา 865</p>
                </div>
            
                <div class="submitcreate">
                    <br><button type="submit" >Submit</button>
                </div>
                

                

        </div>
    
        
    </form>


@endsection
