<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidRequestException;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payByAlipay(Order $order, Request $request)
    {
        $this->authorize('own',$order);

        if ($order->paid_at || $order->closed){
            throw  new InvalidRequestException('订单状态不正确');
        }

        // 调用支付宝的网页支付
        return app('alipay')->web([
            'out_trade_no'=>$order->no,
            'total_amount'=>$order->total_amount,
            'subject'=>'支付 Laravel Shop 的订单：'.$order->no,
        ]);
    }

    // 前端回调页面
    public function alipayReturn()
    {
        dump(request()->all());
        // 校验提交的参数是否合法
        $data = app('alipay')->verify();
        dd($data);
    }

    // 服务器端回调
    public function alipayNotify()
    {
        $data = app('alipay')->verify();
        \Log::debug('Alipay notify', $data->all());
    }
}
