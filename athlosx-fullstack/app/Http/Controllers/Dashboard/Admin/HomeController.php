<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $lastWeekUsers = User::where('created_at', '>=', Carbon::now()->subWeek())->count();
        $userGrowth = $lastWeekUsers > 0 ? round(($lastWeekUsers / $totalUsers) * 100, 2) : 0;

        

        

       

        $months = ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'];
        $subscriptionProfits = [];
        $orderProfits = [];
        
     
       
        return view('dashboard.admin.index', compact(
            'totalUsers',
            'months', 
        ));
    }
}
