<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use OmiseCharge;
use OmiseSource;

class OmiseController extends Controller
{
    public function payment(Request $request)
    {
        define('OMISE_API_VERSION', '2019-05-29');
        define('OMISE_PUBLIC_KEY', 'pkey_test_5vcihnndgx1dnql6cce');
        define('OMISE_SECRET_KEY', 'skey_test_5vcihnoso72llva4u7l');

        // รับ Source หรือ token และ Amount มาจากผู้ใช้
        if (!empty($request->input('omiseSource')) || !empty($request->input('omiseToken'))) {
            $money = $request->input('money') * 100;
            $source = OmiseSource::create([
                'amount' => $money,
                'currency' => 'THB',
                'type' => 'promptpay'
            ]);

            $charge = OmiseCharge::create([
                'amount'     => $money,
                'currency'   => "THB",
                'return_uri' => route('omise.callback', ['topup_id' => $source['id']]),
                'source' => $source['id']
            ]);

            $charge_id = $charge['id'];
            $authorize_uri = $charge['authorize_uri'];

            // สำคัญ ก่อนที่จะ redirect ไปจากหน้านี้ ให้บันทึก topup_id และ charge_id ไว้ในฐานข้อมูลของเรา 
            // เพื่อใช้อ้างอิงว่า transaction นี้ สำเร็จ หรือ ไม่สำเร็จ
            Session::put('charge_id', $charge_id);

            // Redirect ไปหน้า QR
            return redirect()->away($authorize_uri);
        }

        // Redirect มาจาก Omise
        if (!empty($request->input('topup_id'))) {
            $charge = OmiseCharge::retrieve(Session::get('charge_id'));
            if ($charge["source"]["charge_status"] == 'successful') {
                // เงินเข้าบัญชีเรียบร้อยแล้ว
                return "Success!";
            } else {
                // อาจจะ failed หรือ pending อยู่
                $img_qr = $charge['source']['scannable_code']["image"]["download_uri"];
                return view('omise.qr', ['qr_url' => $img_qr]);
            }
        }

        return view('omise.payment');
    }

    public function callback(Request $request)
    {
        return redirect()->route('omise.payment')->withInput($request->all());
    }
}
