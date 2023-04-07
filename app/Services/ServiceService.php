<?php

namespace App\Services;

use App\Models\Service;

class ServiceService
{
    public function getAllServices()
    {
        return Service::all();
    }

    public function getService($id)
    {
        return Service::find($id);
    }

    public function createService($data)
    {
        return Service::create($data);
    }

    public function updateService($id, $data)
    {
        $Service = Service::findOrFail($id);
        $Service->update($data);
        return $Service;
    }

    public function deleteService($id)
    {
        $Service = Service::findOrFail($id);
        $Service->delete();
    }
}
