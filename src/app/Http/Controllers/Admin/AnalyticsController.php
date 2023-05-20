<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

use App\Models\Vercel;

class VercelController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    public function show()
    {
      $this->data['title'] = trans('backpack::base.analytics'); // set the page title
      $this->data['breadcrumbs'] = [
          trans('backpack::crud.admin') => backpack_url('analytics'),
          "Analytics" => false,
      ];
      
      return view(backpack_view('analytics'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
