<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/money1.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/js/index.js'); ?>">
    <title>คิดเงิน</title>
</head>
<body>
    <div class="on">
        <p class="gray"></p>
        <h2 class="name1">AXA</h2>
        <h2 class="name2">10123</h2>
        <h2 class="name25">242</h2>
    </div>
    <p class="bg"></p>
    <div>
        <div >
            <button class="wall" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" title="Click to show/hide" type="button" >
                    <h2 class="name4" >ชำระเงินด้วยอี-วอลเล็ต </h2>
            </button> 
            <img class="img1" src="<?php echo asset('assets/img/1.png'); ?>">
            <img class="img2" src="<?php echo asset('assets/img/5.png'); ?>">
            <div class="forl" id="spoiler" style="display: none;"> 
                <form action="/action_page.php">
                    <select class="o1" name="type" id="type">
                        <option value="ชำระเงิน">โปรดเลือกรูปการชำระเงิน</option>
                        <option value="true">True Wallet</option>
                        <option value="line">Line pay</option>
                    </select>
                </form>
                <h2 class="name5">ชื่อผู้ชำระเงิน</h2>
                <h2 class="name6">อีเมล</h2>
                <h2 class="name7">หมายเลขโทรศัพท์</h2>
                <input class="box1" type="text">
                <input class="box2" type="email">
                <input class="box3" type="number">
                <button class="pom">ย้อนกลับ</button> 
                <button class="pom1">ชำระ</button>
            </div> <br />
            <button class="wall1" onclick="if(document.getElementById('spoiler1') .style.display=='none') {document.getElementById('spoiler1') .style.display=''}else{document.getElementById('spoiler1') .style.display='none'}" title="Click to show/hide" type="button">
                <h2 class="name4">ชำระเงินโดยแสกน QR</h2>
            </button> 
            <img class="img3" src="<?php echo asset('assets/img/3.png'); ?>">
                <div class="forl1" id="spoiler1" style="display: none;">    
                    <h2 class="name8" >QR CODE</h2>
                    <button  class="pom">ย้อนกลับ</button>
                </div> <br />
        </div>
    </div>
</form>
</body>
</html>
