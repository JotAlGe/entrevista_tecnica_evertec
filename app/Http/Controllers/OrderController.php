<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use GuzzleHttp\Client;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    private $secretKey;
    private $login;
    private $baseURL;
    private $appurl;

    public function __construct()
    {
        $this->login = env('PLACE_TO_PAY_LOGIN');
        $this->secretKey = env('PLACE_TO_PAY_SECRET');
        $this->appurl = env('APP_URL');
        $this->baseURL = env('PLACE_TO_PAY_API_URL');
    }


    public function index()
    {
        return view('orders.index', [
            'orders' => Order::orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $newOrder = Order::create($request->validated());

        $response = HTTP::withHeaders([
            'Content-type' => 'application/json'
        ])->post("{$this->baseURL}/api/session", [
            'auth' => [
                'login' => $this->login,
                'tranKey' => $this->secretKey,
                'nonce' => base64_encode(sha1(random_bytes(16))),
                'seed' => date("c")
            ],
            "buyer" => [
                'name' => $newOrder->customer_name,
                'surname' => $newOrder->customer_name,
                'email' => $newOrder->customer_email,
                'document' => '1040035000',
                'documentType' => 'CC',
                'mobile' => $newOrder->customer_mobile
            ],
            'payment' => [
                'reference' => $newOrder->id,
                'description' => $request->customer_name,
                'amount' => [
                    'currency' => 'COP',
                    'total' => '10',
                ],
            ],
            'expiration' => date('c', strtotime('+1 hour')),
            'returnUrl' => "{$this->appurl}/orders/{$newOrder->id}",
            'ipAddress' => '127.0.0.1',
            'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
        ]);
        return $response->json();
        //if ($response->successful()) {
        //    $newOrder->request_id = $response->requestId;
        //    $newOrder->process_url = $response->processUrl;
        //    $newOrder->save();
        //    return redirect($response->processUrl());
        //} else {
        //    return redirect()->route('orders.create')->with('warning', 'Error al enviar la solicitud');
        //}
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // manage the response
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
