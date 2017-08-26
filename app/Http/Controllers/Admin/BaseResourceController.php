<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseResourceController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
        $data = [
            'route' => $this->route,
            'adminUrl' => $this->url
        ];

        view()->share($data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->all();
        return view($this->views . '.index', ['model' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->views . '.create', ['model' => $this->model]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->model->fill($request->all());
        $this->model->save();

        return $this->getIndex();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        $data = $this->getModel($key);
        return view($this->views . '.detail', ['model' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
        $model = $this->getModel($key);
        return view($this->views . '.edit', ['model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key)
    {
        $model = $this->getModel($key);
        $model->fill($request->all());
        $model->save();

        return $this->getIndex();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        $this->model->delete($key);

        return $this->getIndex();
    }

    protected function getIndex()
    {
        return redirect($this->url);
    }

    protected function getModel($key)
    {
        $model = $this->model->where('slug', $key)->first();

        return $model;
    }
}
