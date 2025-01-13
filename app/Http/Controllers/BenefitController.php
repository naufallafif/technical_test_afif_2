<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenefitController extends Controller
{
    // Method untuk menampilkan manfaat ERP
    public function showBenefits()
    {
        $benefits = [
            [
                'icon' => 'ri-line-chart-line',
                'title' => 'CRM System',
                'description' => 'Centralize your customer database, arrange your sales pipeline, and identify your qualified leads more easily.',
            ],
            [
                'icon' => 'ri-store-3-line',
                'title' => 'Procurement System',
                'description' => 'Helps you control your purchasing procedures, ensuring that you make the right purchases at the right time.',
            ],
            [
                'icon' => 'ri-community-line',
                'title' => 'Inventory System',
                'description' => 'Keep track of all the orders coming into your store, on-hand inventory across warehouses, and shipped-out items in real time.',
            ],
            [
                'icon' => 'ri-btc-line',
                'title' => 'Accounting System',
                'description' => 'Automates bank reconciliation, installment calculation, payment management, financial statement generation & many more.',
            ],
            [
                'icon' => 'ri-user-community-line',
                'title' => 'HRM System',
                'description' => 'HRM System helps you track and manage your employees’ salaries, attendance, working hours, overtime, and leaves.',
            ],
            [
                'icon' => 'ri-bar-chart-box-fill',
                'title' => 'Sales Management',
                'description' => 'Sales Management System lets you automatically create sales orders, quotations, multiple price lists.',
            ],
        ];

        // Kirim data ke view 'benefits'
        return view('welcome', compact('benefits'));
    }
}
