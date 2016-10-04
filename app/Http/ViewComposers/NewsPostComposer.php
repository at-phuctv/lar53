<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class NewsPostComposer
{

    /**
     * The user repository implementation.
     *
     * @var User
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  User  $categories
     * @return void
     */
    public function __construct(Category $categories)
    {
        // Dependencies automatically resolved by service container...
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $category = $this->categories->pluck('name', 'id');
        $category = array_map('htmlentities', $category->toArray());
        $view->with('category', $category);
    }
}
