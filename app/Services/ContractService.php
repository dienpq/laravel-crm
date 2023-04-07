<?php

namespace App\Services;

use App\Models\Contract;

class ContractService
{
    public function getAllContracts()
    {
        return Contract::with('customer', 'service')->get();
    }

    public function getAllContractsByCustomer($customerId)
    {
        return Contract::with('customer', 'service')
            ->where('customer_id', $customerId)
            ->get();
    }

    public function getContract($id)
    {
        return Contract::find($id);
    }

    public function createContract($data)
    {
        return Contract::create($data);
    }

    public function updateContract($id, $data)
    {
        $Contract = Contract::findOrFail($id);
        $Contract->update($data);
        return $Contract;
    }

    public function deleteContract($id)
    {
        $Contract = Contract::findOrFail($id);
        $Contract->delete();
    }
}
