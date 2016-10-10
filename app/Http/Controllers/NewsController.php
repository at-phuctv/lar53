<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\News;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{

    protected $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $with['category'] = function($query) {
            return $query->select('name', 'id');
        };
        $select = [
            'id',
            'cate_id',
            'author',
            'introduce',
            'content',
            'image',
        ];
        $data = $this->news->select($select)->with($with);
        $news = $data->orderBy('id', 'DESC')->paginate(10);
        return view('news.index', ['news' => $news, 'type' => 'news']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = News::upload($image);
        }
        $this->news->create($input);
        flash('Create news successful!', 'success');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->news->findOrFail($id);
        return view('news.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = $this->news->findOrFail($id);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = $this->news->upload($image);
        }
        $news->update($input);
        flash('Update news successful!', 'success');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = $this->news->findOrFail($id);
        $news->delete($news);
        flash('Delete news successful!', 'success');
        return redirect()->route('news.index');
    }
}
