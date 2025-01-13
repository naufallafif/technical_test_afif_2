<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $headline = 'Think Forward';
    $description = 'As a leading ERP provider solution, we recognize the importance of enterprises’ productivity and efficiency. That is why, in 2015, we took the opportunity to set up a cloud-based system that automates end-to-end business operations.';
    $buttonText = 'Free Demonstration';
    $buttonIcon = 'ri-arrow-right-line text-accent-thirty';
     $benefits = [
        [
            'icon' => 'ri-line-chart-line',
            'title' => 'CRM System',
            'description' => 'Centralize your customer database, arrange your sales pipeline, and identify your qualified leads more easily.'
        ],
        [
            'icon' => 'ri-store-3-line',
            'title' => 'Procurement System',
            'description' => 'Helps you control your purchasing procedures, ensuring that you make the right purchases at the right time.'
        ],
        [
            'icon' => 'ri-community-line',
            'title' => 'Inventory System',
            'description' => 'Keep track of all the orders coming into your store, on-hand inventory across warehouses, and shipped-out items in real time with Inventory System.'
        ],
        [
            'icon' => 'ri-btc-line',
            'title' => 'Accounting System',
            'description' => 'Automates bank reconciliation, installment calculation, payment management, financial statement generation, and more.'
        ],
        [
            'icon' => 'ri-user-community-line',
            'title' => 'HRM System',
            'description' => 'Helps you track and manage your employees’ salaries, attendance, working hours, overtime, and leaves.'
        ],
        [
            'icon' => 'ri-bar-chart-box-fill',
            'title' => 'Sales Management',
            'description' => 'Sales Management System lets you automatically create sales orders, quotations, and multiple price lists.'
        ]
    ];
    return view('welcome', compact('benefits','headline', 'description', 'buttonText', 'buttonIcon'));
});
