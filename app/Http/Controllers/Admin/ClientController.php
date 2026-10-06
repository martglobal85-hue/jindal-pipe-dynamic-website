<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreClientRequest;
use App\Http\Requests\Admin\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClientController extends CrudController
{
    protected string $modelClass = Client::class;
    protected string $routeName = 'admin.clients';
    protected string $viewPath = 'admin.clients';
    protected string $label = 'Client';
    protected string $uploadDir = 'client';
    protected array $imageFields = ['image'];
    protected array $searchColumns = ['title'];

    public function index(Request $request)
    {
        return $this->listing($request);
    }

    public function create()
    {
        return $this->createView();
    }

    public function store(StoreClientRequest $request): RedirectResponse
    {
        return $this->storeRecord($request);
    }

    public function edit(Client $client)
    {
        return $this->editView($client);
    }

    public function update(UpdateClientRequest $request, Client $client): RedirectResponse
    {
        return $this->updateRecord($request, $client);
    }

    public function destroy(Client $client): RedirectResponse
    {
        return $this->destroyRecord($client);
    }
}
