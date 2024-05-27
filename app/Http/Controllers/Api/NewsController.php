<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    use HttpResponses;

    public function index()
    {
        $news = News::all();

        return NewsResource::collection($news);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->error('Data Invalid', 422, $validator->errors());
        }

        $created = News::create($validator->validated());

        if ($created) {
            return $this->response('News created', 200, new NewsResource($created));
        }

        return $this->error('News not created', 400);
    }

    public function show(News $news)
    {
        return new NewsResource($news);
    }

    public function update(Request $request, News $news)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->error('Data Invalid', 422, $validator->errors());
        }

        $validated = $validator->validated();

        $updated = $news->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        if ($updated) {
            return $this->response('News updated', 200, new NewsResource($news));
        }

        return $this->error('News not updated', 400);
    }

    public function destroy(News $news)
    {
        $deleted = $news->delete();

        if ($deleted) {
            return $this->response('New deleted', 200);
        }
        return $this->error('New not deleted', 400);
    }
}
