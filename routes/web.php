<?php
 
 use Faker\Factory as Faker;

class BlogPanel {
	public $title;
	public $date;
	public $author;
	public $img;
	public $featureimg;
	public $thinimg;
	public $data;
	public $readNum;

	function __Construct() {

		$faker = Faker::create();
		$this->title = $faker->sentence($nbWords = 3, $variableNbWords = true);
		$this->author = $faker->name;
		$this->date = $faker->date($format = 'Y-m-d', $max = 'now');
		$this->featureimg = $faker->imageUrl($width = 1000, $height = 600);
		$this->img = $faker->imageUrl($width = 1000, $height = 400);
		$this->thinimg = $faker->imageUrl($width = 1100, $height = 300);
		$this->data = $faker->sentence($nbWords = 6, $variableNbWords = true);
		$this->readNum = ($faker->randomDigit % 20) + 1;
	}

	public function printStar() {
		return '<span><strong> &middot; </strong> &#9733; </span>';
	}

	public function printReadTime() {
		return $this->readNum . " min read";
	}
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact',  'ContactController@create');

Route::post('/contact',  'ContactController@store');

Route::get('/post/new',  'PostController@create');

Route::post('/post/new',  'PostController@store');


