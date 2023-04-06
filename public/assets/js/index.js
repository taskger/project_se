const express = require('express')
const app = express();
const QRCode = require('qrcode')
const generatePayload = require('promptpay-qr')
const bodtParser =  require('body-parser')
const _ = require('lodash')
const cors = require('cors')

app.use(cors())
app.use(bodtParser.json())
app.use(bodtParser.urlencoded({extended:true}))

const server = app.listen(3000,()=>{
    console.log('server is running.......')
})


app.post('/generateQR',(req,res)=>{
    const amount = parseFloat(_.get(req,["body","amount"]));
    const mobileNumber = '0972262014';
    const payload = generatePayload(mobileNumber,{amount});
    const option = {
        color: {
            dark:'#000',
            light:'#fff'
        }
    }
    QRCode.toDataURL(payload,option,(err,url)=> {
        if(err) {
            console.log('fail')
            return res.status(400).json ({
                RespCode: 400,
                RespMessage: 'bad :'+ ERROR
            })
        }
        else{
            return res.status(200).json ({
                RespCode: 200,
                RespMessage: 'good',
                Result:url
            })
        }
    })
})
module.exports = app;
