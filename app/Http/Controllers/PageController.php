<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    /**
     * Homepage, shows movies per category limited to 8
     */
    public function homepage()
    {
        // get movies per category
        $categories = Kategori::all();
        $movies_per_category = [];
        $url = env('MOVIE_API_URL');

        foreach ($categories as $category) {
            try {
                $response = Http::withHeaders([
                    'headers' => [
                        'Accept' => 'application/json',
                    ],
                ])->get($url . '/3/movie/'. $category->slug .'?api_key=' . env('MOVIE_API_KEY'));
                $res = $response->json();
                $movies_per_category[$category->slug] = array_slice($res['results'],0,8);

            } catch (Exception $e) {
            }
        }

        $data = [
            'title' => 'Homepage ' . env('APP_NAME'),
            'categories' => $categories,
            'movies_per_category' => $movies_per_category,
        ];

        return view('welcome', $data);
    }

    /**
     * Get detail movie
     */
    public function movie_detail($movie_id)
    {
        $url = env('MOVIE_API_URL');
        try {
            $response = Http::withHeaders([
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ])->get($url . '/3/movie/'. $movie_id .'?api_key=' . env('MOVIE_API_KEY'));
            $res = $response->json();


        } catch (Exception $e) {
        }

        // Get Similar Movies
        try {
            $response = Http::withHeaders([
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ])->get($url . '/3/movie/'. $movie_id .'/similar?api_key=' . env('MOVIE_API_KEY'));
            $similar_movies_res = $response->json();
            $similar_movies = array_slice($similar_movies_res['results'],0,4);

        } catch (Exception $e) {

        }

        $data = [
            'title' => $res['original_title'] ?? 'Movie Detail',
            'movie' => $res ?? null,
            'similar_movies' => $similar_movies ?? null,
        ];

        return view('movie_detail', $data);
    }

    /**
     * Movie per category
     */
    public function movie_category(Request $request, $slug)
    {
        $url = env('MOVIE_API_URL');
        $category = Kategori::where('slug', $slug)->firstOrFail();
        $page = $request->page ?? 1;
        try {
            $response = Http::withHeaders([
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ])->get($url . '/3/movie/'. $slug .'?page='.$page.'&api_key=' . env('MOVIE_API_KEY'));
            $res = $response->json();
            $movies_per_category = array_slice($res['results'],0,8);

        } catch (Exception $e) {
        }

        $data = [
            'title' => 'Category: ' . $category->nama,
            'category' => $category,
            'movies_per_category' => $movies_per_category ?? null,
            'page' => $page,
        ];

        return view('movie_category', $data);
    }
}
