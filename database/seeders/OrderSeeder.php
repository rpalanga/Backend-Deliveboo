<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_name' => 'John',
                'customer_lastname' => 'Doe',
                'customer_email' => 'john.doe@example.com',
                'customer_address' => '123 Main St, Springfield',
                'customer_phone' => '1234567890',
                'order_total' => 29.99,
            ],
            [
                'customer_name' => 'Jane',
                'customer_lastname' => 'Smith',
                'customer_email' => 'jane.smith@example.com',
                'customer_address' => '456 Elm St, Springfield',
                'customer_phone' => '0987654321',
                'order_total' => 45.50,
            ],
            [
                'customer_name' => 'Bob',
                'customer_lastname' => 'Johnson',
                'customer_email' => 'bob.johnson@example.com',
                'customer_address' => '789 Oak St, Springfield',
                'customer_phone' => '1122334455',
                'order_total' => 32.75,
            ],
            [
                'customer_name' => 'Alice',
                'customer_lastname' => 'Williams',
                'customer_email' => 'alice.williams@example.com',
                'customer_address' => '321 Pine St, Springfield',
                'customer_phone' => '2233445566',
                'order_total' => 27.80,
            ],
            [
                'customer_name' => 'Charlie',
                'customer_lastname' => 'Brown',
                'customer_email' => 'charlie.brown@example.com',
                'customer_address' => '654 Cedar St, Springfield',
                'customer_phone' => '3344556677',
                'order_total' => 58.90,
            ],
        ];

        foreach($orders as $order) {

            $newOrder = new Order();

            $newOrder->customer_name = $order['customer_name'];
            $newOrder->customer_lastname = $order['customer_lastname'];
            $newOrder->customer_email = $order['customer_email'];
            $newOrder->customer_address = $order['customer_address'];
            $newOrder->customer_phone = $order['customer_phone'];
            $newOrder->order_total = $order['order_total'];

            $newOrder->save();

        }
    }
}
