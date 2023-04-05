<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/money1.css'); ?>">
    <title>คิดเงิน</title>
    <style>
        while 100%;
    </style>
</head>
<body>
    <div>
        <p class="gray"></p>
        <h2 class="name1">AXA</h2>
        <h2 class="name2">10123242</h2>
        <h2 class="name3">THB</h2>
    </div>
    <p class="bg"></p>
    <div>
        <div >
            <button class="wall" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}" title="Click to show/hide" type="button">
            <h2 class="name4" >ชำระเงินด้วยอี-วอลเล็ต </h2>
            <img class="img1" src="<?php echo asset('assets/img/1.png'); ?>">
            <img class="img2" src="<?php echo asset('assets/img/5.png'); ?>">
            </button> 
            <div class="forl" id="spoiler" style="display: none;"> 
                <form action="/action_page.php">
                    <select class="o1" name="type" id="type">
                        <option value="ชำระเงิน"img class="img1" src="https://www.truemoney.com/wp-content/uploads/2020/12/truemoneywallet-logo-20190424.png">โปรดเลือกรูปการชำระเงิน</option>
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
            </div> <br />
            <button class="wall1" onclick="if(document.getElementById('spoiler1') .style.display=='none') {document.getElementById('spoiler1') .style.display=''}else{document.getElementById('spoiler1') .style.display='none'}" title="Click to show/hide" type="button">
                <h2 class="name4">ชำระเงินโดยแสกน QR</h2>
                <img class="img3" src="<?php echo asset('assets/img/3.png'); ?>">
                </button> 
                <div class="forl" id="spoiler1" style="display: none;">    
                    <h2 class="name8" >QR CODE</h2>
                    <img class="img4" src="<?php echo asset('assets/img/3.png'); ?>">
                    <h2 class="name9">โปรดแสกนภายใน 10 นาที</h2>
                    <img class="img5" src="<?php echo asset('assets/img/4.jpg'); ?>">
                </div> <br />
        </div>
    </div>
</body>
</html>
