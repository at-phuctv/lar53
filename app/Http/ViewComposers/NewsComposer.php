<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class NewsComposer
{

    /**
     * The user repository implementation.
     *
     * @var Category
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  Category  $categories
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
        $data = $this->categories->pluck('name', 'id');
        $categories = array_map('htmlentities', $data->toArray());
        $view->with('categories', $categories);
    }
}
