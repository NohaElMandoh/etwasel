<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactsUser;
use App\Models\Currency;
use App\Models\IndustriesField;
use App\Models\Pmc;
use App\Models\PmcsProduct;
use App\Models\Region;
use App\Models\Rfq;
use App\Models\Unit;
use App\Models\User;
use App\Models\UsersDetail;
use App\Models\UsersEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Keyword;
use App\Models\Package;
use App\Models\Certification;
use App\Models\UsersKeyword;
use Illuminate\Support\Facades\Response;
use DateTime;
use App\Models\UsersSlide;
use App\Models\ProductsMedia;
use App\Models\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }
    public function userRegistration(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'type' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $check = User::create($data);

        if ($check) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {

                return redirect('home');
            }
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }

    public function vendorRegistration(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'type' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        // return $data;
        $check = User::create($data);
        if ($request->hasFile('photo')) {

            $image      = $request->file('photo');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users/';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users' . '/' . $fileName, $img, 'public');


            $check->update(['photo' => 'users\\' . $fileName]);
        }

        if ($check) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {

                return redirect('home');
            }
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
    public function vendor_profile(Request $request)
    {

        $categories = Category::all();
        $fields = IndustriesField::all();

        return view('front.profile', compact('categories', 'fields'));
    }
    public function checkEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        // return $validate;
        // if ($validate) {
        //     return response()->json(['success' => 2, 'message' => 'Please Enter Valid Email']);
        // }
        // return $request->all();

        $email = $request->email;

        $user = User::where('email', $email)->get();

        if (count($user) > 0) {

            return response()->json(['success' => 0, 'message' => __('front.Email Taken Befor')]);
        } else {
            return response()->json(['success' => 1, 'message' => 'Email Not Exist']);
        }
    }
    public function vendor_update_profile(Request $request)
    {

        // return $request->all();
        $user_id = $request->user()->id;

        $user = User::find($user_id);

        $userDetails = UsersDetail::where('user_id', $user_id)->first();
        $allReaquest = $request->except('_token', 'pmcs', 'emails', 'contacts', 'slide', 'certification');

        if ($userDetails) {

            $userDetails->update($allReaquest);

            if ($request->hasFile('logo')) {
                $image      = $request->file('logo');
                $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path();
                $destinationPath = $path . '/storage/users-details/';
                $img = \Image::make($image->getRealPath());
                // $img->resize(120, 120, function ($constraint) {
                //     $constraint->aspectRatio();                 
                // });

                $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                //dd();
                Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


                $userDetails->update(['logo' => 'users-details\\' . $fileName]);
            }
        } else {

            $user = $user->details()->create($allReaquest);
        }

        //  if ($request->has('certicications_imgs')) {
        //      return gettype($request->certicications_imgs);
        //     //   foreach ($request->certicications_imgs as $f_key) {
        //     //  return file($f_key);

        //     //   }
        //  }
        //  if ($request->has('certicications')) {
        //             $data = json_decode($request->certicications, true);
        //             foreach ($data as $k=>$f_key) {

        //                 // return gettype($f_key['image']); 
        //               $image      = $request->file($f_key['image']);

        //                 $fileName   = time() . '.' . $image->getClientOriginalExtension();
        //                 //   return $fileName; 
        //                 $path = public_path();
        //                 $destinationPath = $path . '/storage/certifications/';
        //                 $img = \Image::make($image->getRealPath());


        //                 $img->stream(); // <-- Key point
        //                 $image->move($destinationPath, $fileName); // uploading file to given path

        //                 Storage::disk('local')->put('certifications' . '/' . $fileName, $img, 'public');

        //                 Certification::create([
        //                 'user_id'=> $user->id,
        //                 'title_en'=>$f_key['title']
        //                     ]);
        //             }

        //  }

        if ($request->has('emails')) {
            if (!empty($user->emails))
                foreach ($user->emails as $em)
                    $em->delete();
            foreach ($request['emails'] as $key => $email)

                if ($email['email'] != null)
                    UsersEmail::create(['email' => $email['email'], 'user_id' => $user_id]);
        }
        if ($request->has('contacts')) {
            if (!empty($user->contacts))
                foreach ($user->contacts as $con)
                    $con->delete();
            foreach ($request['contacts'] as $key => $contact)
                if ($contact['contact'] != null)
                    ContactsUser::create(['contact' => $contact['contact'], 'user_id' => $user_id]);
        }
        $pmcs_ids = [];
        if ($request->has('pmcs')) {
            if ($user->pmcs) {
                if (count($user->pmcs) > 0) {
                    $pmcs_ids = $user->pmcs->pluck('id')->toArray();
                }
            }

            $cat_ids = [];

            foreach ($request['pmcs'] as $key => $pmc) {
                array_push($cat_ids, $pmc['cat_id']);
                if ($pmc['cat_name'] != null && $pmc['cat_id'] == null)
                    Pmc::create(['cat_name' => $pmc['cat_name'], 'user_id' => $user_id]);
                else {
                    if ($pmc['cat_id'] != null)
                        $pm = Pmc::find($pmc['cat_id']);
                    if ($pm)
                        $pm->update(['cat_name' => $pmc['cat_name']]);
                }
            }
            foreach ($pmcs_ids as $c_id) {
                if (!in_array($c_id, $cat_ids)) {
                    $pm2 = Pmc::find($c_id);
                    if ($pm2)
                        $pm2->delete();
                }
            }
        }
        // ---add slider images------   
        if ($request->hasfile('slide')) {
            $files = $request->file('slide');
            // foreach ($user->sliders as $slide)
            //     $slide->delete();
            // return $request['slide'];
            foreach ($request->file('slide') as $image) {

                // $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/users-sliders/';
                $img = \Image::make($image->getRealPath());
                $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('users-sliders' . '/' . $fileName, $img, 'public');

                $image_path = 'users-sliders\\' . $fileName;
                $user->sliders()->create([
                    'image' => $image_path
                ]);
            }
        }
        // ----------
        if ($request->hasfile('certification')) {
            $files = $request->file('certification');
            // foreach ($user->sliders as $slide)
            //     $slide->delete();
            // return $request['slide'];
            foreach ($request->file('certification') as $image) {

                // $fileName   = time() . '.' . $image->getClientOriginalExtension();
                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/certifications/';
                $img = \Image::make($image->getRealPath());
                $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('certifications' . '/' . $fileName, $img, 'public');

                $image_path = 'certifications\\' . $fileName;
                $user->certification()->create([
                    'image' => $image_path
                ]);
            }
        }
        //   if ($user) {
        //     return response()->json(['message' => 'Success!']);
        // } else {
        //     return response()->json(['message' => 'Error!']);
        // }
        return  redirect()->back()->with('message',  __('front.Data Updated Successfully'));;
    }
    public function deleteSlide($id = null)
    {
        // return $id;
        $slide = null;
        if ($id != null) {
            $slide = UsersSlide::find($id);
            // return $slide;
            $del = $slide->delete();
        }
        if ($del) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }

    public function deleteMedia($id = null)
    {
        // return $id;
        $slide = null;
        if ($id != null) {
            $slide = ProductsMedia::find($id);
            // return $slide;
            $del = $slide->delete();
        }
        if ($del) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }

    public function deleteCert($id = null)
    {
        // return $id;
        $cert = null;
        if ($id != null) {
            $cert = Certification::find($id);
            // return $slide;
            $del = $cert->delete();
        }
        if ($del) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
    public function VendorindividualProduct(Request $request)
    {


        $units = Unit::all();
        $currencies = Currency::all();
        $first_page_keywrds = Keyword::where('position', 'first_page')->get();
        $dynamic_page_keywrds = Keyword::where('position', 'dynamic_page')->get();


        return view('front.VendorIndevdualProduct', compact('units', 'currencies', 'first_page_keywrds', 'dynamic_page_keywrds'));
    }

    public function _VendorindividualProduct_Post(Request $request)
    {
        // $allReaquest = $request->except('_token');
        $allReaquest = $request->except(['_token', 'first_page_keywords', 'dynamic_page_keywords']);
        $product = PmcsProduct::create($allReaquest);



        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/pmcs-products/web-products';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('pmcs-products/web-products' . '/' . $fileName, $img, 'public');


            $product->update(['image' => 'pmcs-products\web-products\\' . $fileName]);
        }

        // if ($request->hasFile('video')) {
        //   $path = public_path();
        //   $destinationPath = $path . '/uploads/PmcProduct/video'; // upload path
        //   $photo = $request->file('video');
        //   $extension = $photo->getClientOriginalExtension(); // getting certification extension
        //   $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing certification
        //   $photo->move($destinationPath, $name); // uploading file to given path
        //   $product->update(['video' => 'uploads/PmcProduct/video/' . $name]);
        // }

        if ($request->has('first_page_keywords')) {

            $f_p_word_arr = '';

            foreach ($request['first_page_keywords'] as $key => $f_p_word) {

                // array_push($f_p_word_arr, $f_p_word['first_page_keywrd']);
                $f_p_word_arr =  $f_p_word_arr . ',' . $f_p_word['first_page_keywrd'];

                $product->update(['home_keywords' => $f_p_word_arr]);
            }
        }

        if ($request->has('dynamic_page_keywords')) {

            // $d_p_word_arr = [];
            $d_p_word_arr = '';

            foreach ($request['dynamic_page_keywords'] as $key => $d_p_word) {
                // array_push($d_p_word_arr, $d_p_word['dynamic_page_keywrd']);
                $d_p_word_arr =  $d_p_word_arr . ',' . $d_p_word['dynamic_page_keywrd'];
                $product->update(['pages_keywords' => $d_p_word_arr]);
            }
        }
        return  redirect()->back()->with('message', 'Product Added Successfully');;
    }
    public function VendorindividualProduct_Post(Request $request)
    {
        // return  $request->all();


        // ----------

        $request->validate([
            'product_name_en' => 'required',

            'product_name_ar' => 'required',
            'min_order' => 'required',

            'min_price' => 'required',
            // 'max_order' => 'required',
            'max_price' => 'required',
            // 'product_desc' => 'required',
        ]);
        // if ($validator->fails()) {    
        //     return response()->json(['success'=>0,'message' => $validator->messages()]);
        // }
        $f_p_word_arr = [];

        $allReaquest = $request->except(['_token', 'first_page_keywords', 'dynamic_page_keywords', 'image', 'video']);

        $product = PmcsProduct::create($allReaquest);



        // if ($request->hasFile('image')) {
        //     $image      = $request->file('image');
        //     $fileName   = time() . '.' . $image->getClientOriginalExtension();
        //     $path = public_path();
        //     $destinationPath = $path . '/storage/pmcs-products/web-products';
        //     $img = \Image::make($image->getRealPath());

        //     $img->stream(); // <-- Key point
        //     $image->move($destinationPath, $fileName); // uploading file to given path
        //     //dd();
        //     Storage::disk('local')->put('pmcs-products/web-products' . '/' . $fileName, $img, 'public');


        //     $product->update(['image' => 'pmcs-products\web-products\\' . $fileName]);
        // }

        // ---add slider images------   
        if ($request->hasfile('image')) {
            $files = $request->file('image');

            foreach ($request->file('image') as $image) {

                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/products-media/';
                $img = \Image::make($image->getRealPath());
                $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('products-media' . '/' . $fileName, $img, 'public');

                $image_path = 'products-media\\' . $fileName;
                $product->media()->create([
                    'user_id' => $request->user()->id,
                    'type' => 'image',
                    'image' => $image_path
                ]);
            }
        }

        if ($request->hasfile('video')) {
            $files = $request->file('video');

            foreach ($request->file('video') as $image) {

                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/products-media/';
                $img = Response::make($image->getRealPath());
                // $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('products-media' . '/' . $fileName, $img, 'public');

                $image_path = 'products-media\\' . $fileName;

                $product->media()->create([
                    'user_id' => $request->user()->id,
                    'type' => 'video',
                    'vedio' => $image_path
                ]);
            }
        }
        // if ($request->hasFile('video')) {
        //     $path = public_path();
        //     $destinationPath = $path . '/uploads/PmcProduct/video'; // upload path
        //     $video = $request->file('video');
        //     $extension = $video->getClientOriginalExtension(); // getting certification extension
        //     $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing certification
        //     $video->move($destinationPath, $name); // uploading file to given path
        //     $product->update(['video' => 'uploads/PmcProduct/video/' . $name]);
        // }


        if ($request->has('first_page_keywords')) {
            $data = json_decode($request->first_page_keywords, true);
            foreach ($data as $f_key) {
                $user_key = UsersKeyword::create([
                    'user_id' => $request->user()->id,
                    'keyword' => $f_key['keyword'],
                    'date_from' => $f_key['from'],
                    'date_to' => $f_key['to'],
                    'price' => $f_key['price'],
                    'position' => $f_key['position'],
                    'pmc_product_id' => $product->id,
                    'total' => $f_key['total']
                ]);
            }
        }
        if ($request->has('dynamic_page_keywords')) {
            $data = json_decode($request->dynamic_page_keywords, true);
            foreach ($data as $f_key) {
                $user_key = UsersKeyword::create([
                    'user_id' => $request->user()->id,
                    'keyword' => $f_key['keyword'],
                    'date_from' => $f_key['from'],
                    'date_to' => $f_key['to'],
                    'price' => $f_key['price'],
                    'position' => $f_key['position'],
                    'pmc_product_id' => $product->id,
                    'total' => $f_key['total']
                ]);
            }
        }
        if ($request->has('dynamic_page_keywords_words')) {
            $product->update(['pages_keywords' => $request->dynamic_page_keywords_words]);
        }
        if ($request->has('first_page_keywords_words')) {
            $product->update(['home_keywords' => $request->first_page_keywords_words]);
        }
        if ($product) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
        // return  redirect()->back()->with('message', 'Product Added Successfully');;
    }
    public function myProducts(Request $request)
    {
        $products = PmcsProduct::where('user_id', $request->user()->id)->latest()->get();

        return view('front.VenddorProducts', compact('products'));
    }
    public function VendorindividualProductEdit($id)
    {


        $units = Unit::all();
        $currencies = Currency::all();
        $first_page_keywrds = Keyword::where('position', 'first_page')->get();
        $dynamic_page_keywrds = Keyword::where('position', 'dynamic_page')->get();
        $product = PmcsProduct::find($id);
        $first_page_keywords = UsersKeyword::where('user_id', $product->user_id)->where('pmc_product_id', $id)->where('position', 'first_page')->get();
        $dynamic_page_keywords = UsersKeyword::where('user_id', $product->user_id)->where('pmc_product_id', $id)->where('position', 'dynamic_page')->get();


        return view('front.VendorIndevdualProductEdit', compact('units', 'currencies', 'first_page_keywrds', 'dynamic_page_keywrds', 'product', 'first_page_keywords', 'dynamic_page_keywords'));
    }
    public function delete_product($id)
    {

        $product = PmcsProduct::find($id);

        $del = null;
        if ($product)
            $del = $product->delete();
        if ($del) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
        // return view('front.VendorIndevdualProductEdit', compact('units', 'currencies', 'first_page_keywrds', 'dynamic_page_keywrds', 'product','first_page_keywords','dynamic_page_keywords'));
    }

    public function VendorindividualProductEdit_Post(Request $request)
    {
        return $request->all();

        $request->validate([
            'product_name_en' => 'required',

            'product_name_ar' => 'required',
            'min_order' => 'required',

            'min_price' => 'required',
            // 'max_order' => 'required',
            'max_price' => 'required',
            'product_desc' => 'required',
        ]);

        $f_p_word_arr = [];

        $allReaquest = $request->except(['_token', 'first_page_keywords', 'dynamic_page_keywords', 'image', 'video', 'dynamic_page_keywords_words', 'first_page_keywords_words']);

        $product = PmcsProduct::find($request->product_id);

        $product->update($allReaquest);

        // if ($request->hasFile('image')) {
        //     // return 'hi';
        //     $image      = $request->file('image');
        //     $fileName   = time() . '.' . $image->getClientOriginalExtension();
        //     $path = public_path();
        //     $destinationPath = $path . '/storage/pmcs-products/web-products';
        //     $img = \Image::make($image->getRealPath());

        //     $img->stream(); // <-- Key point
        //     $image->move($destinationPath, $fileName); // uploading file to given path
        //     //dd();
        //     Storage::disk('local')->put('pmcs-products/web-products' . '/' . $fileName, $img, 'public');


        //     $product->update(['image' => 'pmcs-products\web-products\\' . $fileName]);
        // }

        // if ($request->hasFile('video')) {
        //     $path = public_path();
        //     $destinationPath = $path . '/uploads/PmcProduct/video'; // upload path
        //     $video = $request->file('video');
        //     $extension = $video->getClientOriginalExtension(); // getting certification extension
        //     $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing certification
        //     $video->move($destinationPath, $name); // uploading file to given path
        //     $product->update(['video' => 'uploads/PmcProduct/video/' . $name]);
        // }
        if ($request->hasfile('image')) {
            $files = $request->file('image');

            foreach ($request->file('image') as $image) {

                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/products-media/';
                $img = \Image::make($image->getRealPath());
                $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('products-media' . '/' . $fileName, $img, 'public');

                $image_path = 'products-media\\' . $fileName;
                $product->media()->create([
                    'user_id' => $request->user()->id,
                    'type' => 'image',
                    'image' => $image_path
                ]);
            }
        }

        if ($request->hasfile('video')) {
            $files = $request->file('video');

            foreach ($request->file('video') as $image) {

                $filename = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = $filename . '.' . $extension; // adding full path

                $path = public_path();
                $destinationPath = $path . '/storage/products-media/';
                $img = Response::make($image->getRealPath());
                // $img->stream(); // <-- Key point
                $image->move($destinationPath, $fileName); // uploading file to given path
                Storage::disk('local')->put('products-media' . '/' . $fileName, $img, 'public');

                $image_path = 'products-media\\' . $fileName;

                $product->media()->create([
                    'user_id' => $request->user()->id,
                    'type' => 'video',
                    'vedio' => $image_path
                ]);
            }
        }

        if ($request->has('first_page_keywords')) {


            $first_page_keywordss = UsersKeyword::where('user_id', $product->user_id)->where('pmc_product_id', $product->id)->where('position', 'first_page')->get();
            foreach ($first_page_keywordss as $f) $f->delete();

            $data = json_decode($request->first_page_keywords, true);
            foreach ($data as $f_key) {
                $user_key = UsersKeyword::create([
                    'user_id' => $request->user()->id,
                    'keyword' => $f_key['keyword'],
                    'date_from' => $f_key['from'],
                    'date_to' => $f_key['to'],
                    'price' => $f_key['price'],
                    'position' => $f_key['position'],
                    'pmc_product_id' => $product->id,
                    'total' => $f_key['total'],

                ]);
            }
        }
        if ($request->has('dynamic_page_keywords')) {

            $d_page_keywordss = UsersKeyword::where('user_id', $product->user_id)->where('pmc_product_id', $product->id)->where('position', 'dynamic_page')->get();
            foreach ($d_page_keywordss as $f) $f->delete();

            $data = json_decode($request->dynamic_page_keywords, true);
            foreach ($data as $f_key) {
                $user_key = UsersKeyword::create([
                    'user_id' => $request->user()->id,
                    'keyword' => $f_key['keyword'],
                    'date_from' => $f_key['from'],
                    'date_to' => $f_key['to'],
                    'price' => $f_key['price'],
                    'position' => $f_key['position'],
                    'pmc_product_id' => $product->id,
                    'total' => $f_key['total'],
                ]);
            }
        }
        if ($request->has('dynamic_page_keywords_words')) {
            $product->update(['pages_keywords' => $request->dynamic_page_keywords_words]);
        }
        if ($request->has('first_page_keywords_words')) {
            $product->update(['home_keywords' => $request->first_page_keywords_words]);
        }
        if ($product) {
            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
        // return  redirect()->back()->with('message', 'Product Added Successfully');;
    }
    public function Vendor_RFQ(Request $request)
    {

        $fields = IndustriesField::all();
        $regions = Region::all();

        return view('front.VendorRFQ', compact('fields', 'regions'));
    }

    public function vendor_contacts(Request $request)
    {
        return view('front.VendorContacts');
    }
    public function notifications(Request $request)
    {
        return view('front.VendorNotifications');
    }

    public function Vendor_RFQ_Post(Request $request)
    {
        $allReaquest = $request->except('_token');

        $rfq = Rfq::create($allReaquest);

        return  redirect()->back()->with('message', 'RFQ Sent Successfully');
    }
    public function delete_contactUs($id)
    {
        $row = Contact::find($id);
        $row->delete();
        return  redirect()->back()->with('message', __('front.Delete successfully'));
    }
    public function delete_notification($id)
    {
        $row = Notification::find($id);
        $row->delete();
        return  redirect()->back()->with('message', __('front.Delete successfully'));
    }
    public function Vendor_website($vendor_id, $vendor_name)
    {
        if ($vendor_id != null) {
            $user = User::find($vendor_id);
        } else  $user = User::where('name', $vendor_name)->first();
        $fields = IndustriesField::all();
        $regions = Region::all();
        //   $certification=Certification::all();
        return view('front.vendor-website', compact('user', 'fields', 'regions'));
    }

    public function Vendor_contact_us($vendor_id)
    {

        $user = User::find($vendor_id);

        $fields = IndustriesField::all();
        $regions = Region::all();
        //   $certification=Certification::all();
        return view('front.vendor-ContactUs', compact('user', 'fields', 'regions'));
    }


    public function product($product_name)
    {

        $product = PmcsProduct::where('product_name_en', $product_name)->first();

        return view('front.product-single', compact('product'));
    }
    public function search(Request $request)
    {
        if ($request->has('keyword') && $request->keyword != '') {

            // $products = PmcsProduct::where('product_name_en', 'like', '%' . $request->keyword . '%')->orWhere('product_name_ar', 'like', '%' . $request->keyword . '%')->get();

            $products = PmcsProduct::search($request->keyword)->get();
        } else
            $products = PmcsProduct::all();
        return view('front.product', compact('products'));
    }
    public function contact_us_post(Request $request)
    {
        // return $request->all();
        $request->validate([

            'email'     => 'required|string|max:255',
            // 'message'     => 'required|string|max:255',

        ]);
        $input = $request->all();

        $saved = Contact::create($input);

        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
    public function keywords_details($name)
    {

        $keyword = Keyword::where('keyword', $name)->first();

        if ($keyword) {

            return response()->json(['message' => 'Success!', 'keyword' => $keyword]);
        } else {
            $keyword = [
                'price' => 100
            ];
            return response()->json(['message' => 'Success!', 'keyword' => $keyword]);
        }
    }

    public function keywordPrice(Request $request)
    {
        // return $request->all();
        $to =  $request->to_date;
        $from = $request->from_date;


        $datetime1 = new DateTime($from);
        $datetime2 = new DateTime($to);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a'); //now do whatever you like with $days


        // $diff_in_days = $to->diffInDays($from);
        $total = $days * $request->price;
        // return($days); // Output: 1


        return response()->json(['message' => 'Success!', 'price' => $total]);
    }
    public function vendor_info(Request $request)
    {
        if ($request->user()->type == 'user')
            return view('front.profileInfo');
        else if ($request->user()->type == 'vendor') {
            $packages = Package::all();
            return view('front.profileInfo_vendor', compact('packages'));
        }
    }
    public function vendor_update_info(Request $request)
    {
        // return $request->all();
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed',
        //     'type' => 'required'
        // ]);
        // return $request->user();
        $request->user()->update([
            'f_name' => $request->f_name,
            's_name' => $request->s_name,
            'phone' => $request->phone,
            'email' => $request->email,

        ]);
        if ($request->user()->details()->count() > 0) {

            $request->user()->details()->update([
                'employees' => $request->employees,
                'shop_name' => $request->shop_name,
                'shop_info' => $request->shop_info,
                'country' => $request->country,
                'category_id' => $request->category_id,
                'phone2' => $request->phone2,
                'address' => $request->address,
                'package_id' => $request->package_id,
                'wechat' => $request->wechat,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'state' => $request->state,
            ]);
        } else {
            $request->user()->details()->create([
                'employees' => $request->employees,
                'shop_name' => $request->shop_name,
                'shop_info' => $request->shop_info,
                'country' => $request->country,
                'category_id' => $request->category_id,
                'phone2' => $request->phone2,
                'address' => $request->address,
                'package_id' => $request->package_id,
                'wechat' => $request->wechat,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'state' => $request->state,

            ]);
        }
        if ($request->hasFile('wechat')) {
            $image      = $request->file('wechat');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['wechat' => 'users-details\\' . $fileName]);
        }
        if ($request->hasFile('national_id')) {
            $image      = $request->file('national_id');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['national_id' => 'users-details\\' . $fileName]);
        }
        if ($request->hasFile('commerical')) {
            $image      = $request->file('commerical');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['commerical' => 'users-details\\' . $fileName]);
        }
        if ($request->hasFile('photo')) {
            $image      = $request->file('photo');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['photo' => 'users-details\\' . $fileName]);
        }
        if ($request->hasFile('cover')) {
            // return 'hi';
            $image      = $request->file('cover');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['cover' => 'users-details\\' . $fileName]);
        }
        if ($request->hasFile('tax_card')) {
            $image      = $request->file('tax_card');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path();
            $destinationPath = $path . '/storage/users-details';
            $img = \Image::make($image->getRealPath());
            // $img->resize(120, 120, function ($constraint) {
            //     $constraint->aspectRatio();                 
            // });

            $img->stream(); // <-- Key point
            $image->move($destinationPath, $fileName); // uploading file to given path
            //dd();
            Storage::disk('local')->put('users-details' . '/' . $fileName, $img, 'public');


            $request->user()->details()->update(['tax_card' => 'users-details\\' . $fileName]);
        }

        if ($request->has('current_password')) {
            if (Hash::check($request->current_password, $request->user()->password)) {
                $new_pass = Hash::make($request->new_password);
                $request->user()->update(['password' => $new_pass]);
            }
        }
        return redirect()->back();
    }

    public function pdf()
    {
        $filename = 'frontUI/assets/pdf/TLD LOGO.pdf';
        $path = public_path() . DIRECTORY_SEPARATOR . $filename;

        // return Response::make($path, 200, [
        // 'Content-Type' => 'application/pdf',
        // 'Content-Disposition' => 'inline; '.$filename,
        // ]);
        return response()->file($path);
    }

    public function product_media(Request $request)
    {
        $id = $request->id;

        $product_imgs = ProductsMedia::where('product_id', $id)->get();

        if ($product_imgs) {

            return response()->json(['message' => 'Success!', 'product_imgs' => $product_imgs]);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
}
