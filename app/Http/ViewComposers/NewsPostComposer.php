<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\News;

class NewsPostComposer
{

    /**
     * The user repository implementation.
     *
     * @var User
     */
    protected $news;

    /**
     * Create a new profile composer.
     *
     * @param  User  $categories
     * @return void
     */
    public function __construct(News $news)
    {
        // Dependencies automatically resolved by service container...
        $this->news = $news;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $news = $this->categories->pluck('name', 'id');
        $news = array_map('htmlentities', $news->toArray());
        $view->with('news', $news);
    }
}
