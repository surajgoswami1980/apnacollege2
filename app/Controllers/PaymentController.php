<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use CodeIgniter\Controller;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    protected $paymentModel;

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
    }

    public function index()
    {
        return view('payment');
    }

    public function initiate()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $contact = $this->request->getPost('contact');
        $amount = $this->request->getPost('amount');

        // Generate unique order ID
        $order_id = uniqid();

        // Cashfree API endpoint and credentials
        $api_url = 'https://test.cashfree.com/api/v2/checkout/redirect'; // Use live URL for production
        $app_id = 'TEST3766567605b3028bffbfafc1a1656673';
        $secret_key = 'TEST9c52bf57925867f453305e901843849e177cd519';

        // Request payload
        $data = [
            'app_id' => $app_id,
            'secret_key' => $secret_key,
            'order_id' => $order_id,
            'order_amount' => $amount,
            'order_currency' => 'INR',
            'order_note' => 'Order Note',
            'return_url' => base_url('verify')
        ];

        // Send request to Cashfree
        $client = new Client();
        $response = $client->post($api_url, [
            'json' => $data
        ]);

        $responseData = json_decode($response->getBody(), true);

        // Save payment details to the database
        $this->paymentModel->save([
            'name' => $name,
            'email' => $email,
            'contact' => $contact,
            'order_id' => $order_id,
            'amount' => $amount,
            'payment_status' => 'pending'
        ]);

        // Redirect to Cashfree payment page
        return redirect()->to($responseData['payment_link']);
    }

    public function verify()
    {
        $order_id = $this->request->getGet('order_id');
        $payment_status = $this->request->getGet('status');

        // Update payment status
        $this->paymentModel->update(
            ['order_id' => $order_id],
            ['payment_status' => $payment_status]
        );

        if ($payment_status == 'success') {
            return redirect()->to('/')->with('message', 'Payment successful!');
        } else {
            return redirect()->to('/')->with('error', 'Payment failed!');
        }
    }
}
