<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Contact;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $annoncesCount = Annonce::count();
        $contactsCount = Contact::count();
        $usersCount = User::count();

        // Calculate the number of ads added per week
        $adsPerWeek = Annonce::selectRaw('WEEK(created_at) as week, COUNT(*) as count')
            ->groupBy('week')
            ->pluck('count', 'week')
            ->toArray();

        // Generate the weeks array for the chart labels
        $weeks = array_keys($adsPerWeek);
        $adsPerWeek = array_values($adsPerWeek);

        return view('dashboard', compact('annoncesCount', 'contactsCount', 'usersCount', 'weeks', 'adsPerWeek'));
    }
}
