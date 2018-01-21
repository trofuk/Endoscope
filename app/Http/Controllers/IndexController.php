<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;
use App\Fact;
use App\Faq;
use App\Page;
use App\Partner;
use App\Product;
use App\Service;
use App\Testimonian;

use Mail;

use DB;


class IndexController extends Controller
{
    //

    public function execute(Request $request) {

    	 if($request->isMethod('POST'))
         {
            
            $messages = 
            [
            
                'required' => 'Поле :attribute обовязкове для заповнення',
                'email' => 'Поле :attribute має відповідати email адресі'

            ];    

            $this->validate($request, [

                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'text' => 'required',
            
            ], $messages);


            $data = $request->all();

            $result = Mail::send('site.email', ['data' => $data], function($message) use ($data) {

                $mail_admin = env('MAIL_USERNAME');

                $message->from($data['email'], $data['name']);
                $message->to($mail_admin,'Mr. Admin')->subject('Question');

            });
           
            Mail::send('site.email_action', ['data' => $data], function($message) use ($data) {

                // $mail_admin = env('MAIL_USERNAME');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $message->to($data['email'],$data['name'])->subject('Confirmation');

            }); 

            if($result == null)  {

                return redirect()->route('contact')->with('status', 'Your message was sent successfully');
            }

            //mail
            
         }

        $contacts = Contact::all(); 
        $facts = Fact::all();
    	$faqs = Faq::all();
    	$pages = Page::all();
    	$partners = Partner::all();
    	$products = Product::all();
    	$services = Service::all();
    	$testimonians = Testimonian::all();

    	

    	//filters for top buttons
    	$tags = DB::table('products')->distinct()->pluck('filter');

    	$menu = array();
    	foreach ($pages as $page) {
    		$item = array('title' => $page->name, 'alias' => $page->alias);
    		array_push($menu, $item);
    	}

    	$item = array('title' => 'facts', 'alias' => 'facts');
    	array_push($menu, $item);

    	$item = array('title' => 'products', 'alias' => 'products');
    	array_push($menu, $item);

    	$item = array('title' => 'partners', 'alias' => 'partners');
    	array_push($menu, $item);

    	$item = array('title' => 'testimonians', 'alias' => 'testimonians');
    	array_push($menu, $item);

    	$item = array('title' => 'faqs', 'alias' => 'faqs');
    	array_push($menu, $item);

    	$item = array('title' => 'contact', 'alias' => 'contact');
    	array_push($menu, $item);


    	return view('site.index', array(
    								'menu' => $menu,
    								'pages' => $pages,
                                    'contacts' => $contacts,
    								'facts' => $facts,
    								'faqs' => $faqs,
    								'partners' => $partners,
    								'products' => $products,
    								'services' => $services,
    								'testimonians' => $testimonians,
    								'tags' => $tags	

    				));
    	
    }
}
