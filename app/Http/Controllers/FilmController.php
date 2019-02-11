<?php

namespace App\Http\Controllers;
use App\Category;
use App\Film;
use DB;
use App\Category_film;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function getinfo(Category_film $film_id)
    {
    $category = Category::all();
        
      /*  $category = Category::all();
        $films =Film::where('id', $film_id);
        return view('showall',['films' => $films, 'category' => $category]);
*/
        $x=DB::select(
        DB::raw("SELECT * FROM `category_films` INNER JOIN categories AS cat INNER JOIN films as f where category_films.category_id LIKE cat.id AND category_films.film_id LIKE f.id
        ")
        );
        return view('showall',['x' => $x, 'category' => $category]);
	  }

	public function showcat($id){

        return view('showcat')->with('id', $id);

    }

     public function create(Request $request)
    {
        $film = new Film;
        $film->name = 'God of War';
        $film->save();
        $category = Category::find([3, 4]);
        $film->categories()->attach($category);
        return 'Success';
    }
   public function show(Film $film)
	{
	   return view('show', compact('film'));
	}
	public function catshow(Category $category)
	{
	   return view('catshow', compact('category'));
	}

	public function removeCategory(Film $film)
	{
        $category = Category::find(3);

        $film->categories()->detach($category);
        
        return 'Success';
	}
}
