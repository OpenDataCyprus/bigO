<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth')->except(['index','details']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
   


    public function environment()
    {
        $result = [
                    [
                        'name'=>'Τρέχοντα προγνωστικά δεδομένων ανώτερης ατμόσφαιρας (RAOB)',
                        'text'=>'Υπηρεσία διάθεσης προγνωστικών δεδομένων ανώτερης ατμόσφαιρας. Η υπηρεσία αναπτύχθηκε από το Τμήμα Μετεωρολογίας σε συνεργασία με το Ινστιτούτο Κύπρου και με αυτή διατίθενται, σε μορφή CSV και μορφοποίηση RAOB, προβλέψεις καιρού με χρονικό ορίζοντα 5 ημερών. Οι προβλέψεις παράγονται με υψηλής ανάλυσης (2 χιλι... ',
                    ],
                    [
                        'name'=>'Τρέχουσες προβλέψεις καιρού (DSM – point values)',
                        'text'=>'Υπηρεσία διάθεσης προγνωστικών μετεωρολογικών προβλέψεων. Η υπηρεσία αναπτύχθηκε από το Τμήμα Μετεωρολογίας σε συνεργασία με το Ινστιτούτο Κύπρου και με αυτή διατίθενται σε μορφή ΤΧΤ, προβλέψεις καιρού με χρονικό ορίζοντα 5 ημερών. Οι προβλέψεις παράγονται με υψηλής ανάλυσης (2 χιλιόμετρα) μετεωρολογικό μοντέ...',
        
                    ],
                ];

        $result = collect($result);
        
        return view('environment')->with(['result'=>$result]);
    }

    public function environment1()
    {
        return view('environment1');
    }

    public function weather()
    {
        return view('weather');
    }

}