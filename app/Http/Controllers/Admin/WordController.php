<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class WordController extends Controller
{
    public function index()
    {
        $tableWords = Word::all();
        $categories = Category::get();

        if ($tableWords->isEmpty()) {
            $words = Word::paginate();
        }

        if ($tableWords->isNotEmpty()) {
            // $products = Product::paginate(5);

            // search validation
            $search = Word::where('word_name', 'like', '%' . request()->search . '%')
                ->first();


            if ($search === null) {
                return redirect('words')->with('info', 'No "' . request()->search . '" found in the database.');
            }


            if ($search != null) {
                // default returning
                $words = Word::Where('word_name', 'like', '%' . request()->search . '%')
                    ->latest()
                    ->paginate(10);
            }
        }

        return view('pages.admin.words', [
            'words' => $words,
            'categories' => $categories,

        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word_name' => 'required',
            'category_name' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('word')
                ->with('toast_error', $validator->messages()->all())
                ->withInput();
        }

        $word = Word::create([
            'word_name' => $request->input('word_name'),
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'default_video' => $request->input('default_video'),
            'viewers' => $request->input('viewers'),
        ]);

        // photos
        if ($request->hasFile('default_photo') != null) {
            if ($request->file('default_photo')->isValid()) {
                // create images
                $image       = $request->file('default_photo');
                $filename    = $image->getClientOriginalName();
                $word_id =  $word->word_id;

                $image_resize = Image::make($image);
                $image_resize->resize(1200, 600);

                $image_resize->save(public_path('storage/words_'
                    . $word_id . '_' . $filename));

                // insert path to db 
                $char = strval($filename);
                Word::where('word_id', $word_id)
                    ->update([
                        'default_photo' => $char,
                    ]);
            }
        }

        // photo 1
        if ($request->hasFile('photo_1') != null) {
            if ($request->file('photo_1')->isValid()) {
                // create images
                $image       = $request->file('photo_1');
                $filename    = $image->getClientOriginalName();
                $word_id =  $word->word_id;

                $image_resize = Image::make($image);
                $image_resize->resize(1200, 600);

                $image_resize->save(public_path('storage/words_photo_1_'
                    . $word_id . '_' . $filename));

                // insert path to db 
                $char = strval($filename);
                Word::where('word_id', $word_id)
                    ->update([
                        'photo_1' => $char,
                    ]);
            }
        }

        // photo 2
        if ($request->hasFile('photo_2') != null) {
            if ($request->file('photo_2')->isValid()) {
                // create images
                $image       = $request->file('photo_2');
                $filename    = $image->getClientOriginalName();
                $word_id =  $word->word_id;

                $image_resize = Image::make($image);
                $image_resize->resize(1200, 600);

                $image_resize->save(public_path('storage/words_photo_2_'
                    . $word_id . '_' . $filename));

                // insert path to db 
                $char = strval($filename);
                Word::where('word_id', $word_id)
                    ->update([
                        'photo_2' => $char,
                    ]);
            }
        }

        return Redirect::route('words')->withSuccess('Word: ' . $request->input('word_name') . ' is created successfully!');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word_name' => 'required',
            'category_name' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('word')
                ->with('toast_error', $validator->messages()->all())
                ->withInput();
        }

        Word::where('word_id',  $request->input('word_id'))
            ->update([
                'word_name' => $request->input('word_name'),
                'category_name' => $request->input('category_name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'default_video' => $request->input('default_video'),
            ]);


        // photos
        if ($request->hasFile('default_photo') != null) {
            if ($request->file('default_photo')->isValid()) {
                // create images
                $image       = $request->file('default_photo');
                $filename    = $image->getClientOriginalName();
                $word_id =  $request->input('word_id');

                $image_resize = Image::make($image);
                $image_resize->resize(1200, 600);

                $image_resize->save(public_path('storage/words_'
                    . $word_id . '_' . $filename));

                // insert path to db 
                $char = strval($filename);
                Word::where('word_id', $word_id)
                    ->update([
                        'default_photo' => $char,
                    ]);
            }
        }

        return Redirect::route('words')->withSuccess('Word: ' . $request->input('word_name') . ' updated successfully!');
    }

    public function destroy($word_id)
    {
        if (is_null($word_id)) {
            return Redirect::route('words')->withInfo('Encountered an error!');
        }

        // fetching info
        $word_fetch = Word::where('word_id', $word_id)->first();

        // Softdeletes
        Word::find($word_id)->delete();

        return Redirect::route('words')->withSuccess('Deleted Successfully!');
    }
}
