<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Visit;
use App\Models\Word;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class DashboardController extends Controller
{
    public function index()
    {
        // identify time now
        $dt = new DateTime();
        $hour = $dt->format('H');
        // $dayTerm = ($hour > 17) ? "Evening" : (($hour > 12) ? "Afternoon" : "Morning");

        if ($hour > 6 && $hour <= 11) {
            $dayTerm = "Good Morning";
        } else if ($hour > 11 && $hour <= 17) {
            $dayTerm = "Good Afternoon";
        } else if ($hour > 17 && $hour <= 23) {
            $dayTerm = "Good Evening";
        } else {
            $dayTerm = "Why aren't you asleep?  Are you programming?";
        }

        $users = User::count();

        $new_users = User::whereMonth('created_at', '=', Carbon::now()->month)
            ->count();

        $gregg_1 = Word::where('category_name', 'Gregg 1')
            ->count();

        $gregg_2 = Word::where('category_name', 'Gregg 2')
            ->count();

        //   $article_count = Article::where('article_status', 'Published')->count();

        //   $article_pending = Article::where('article_status', 'Pending Approval')->count();

        //   $article_count_today = Article::whereDate('created_at', Carbon::today())
        //       ->count();

        // $popular_items = Word::take(6)->orderBy('viewers', 'DESC')->get();

        $popular_items = Word::take(6)->latest()->get();
        $page_visits = Visit::select([
            // This aggregates the data and makes available a 'count' attribute
            DB::raw('count(visit_id) as `count`'),
            // This throws away the timestamp portion of the date
            DB::raw('DATE(visit_date) as day')
            // Group these records according to that day
        ])->groupBy('day')
            // And restrict these results to only those created in the last week
            ->where('visit_date', '>=', Carbon::now()->subWeeks(1))
            ->get();



        return view('pages.admin.dashboard', [
            'users' => $users,
            'new_users' => $new_users,
            'gregg_1' => $gregg_1,
            'gregg_2' => $gregg_2,

            //   'article_count' => $article_count,
            //   'article_pending' => $article_pending,
            //   'article_count_today' => $article_count_today,
            'dayTerm' => $dayTerm,
            'page_visits' => $page_visits,
            'popular_items' => $popular_items,

        ]);
    }
}
