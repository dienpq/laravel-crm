<?php

namespace App\Http\Controllers;

use App\Common\Helper;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\ServiceService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    private $contractService;
    private $customerService;
    private $serviceService;

    public function __construct(
        ContractService $contractService,
        CustomerService $customerService,
        ServiceService $serviceService
    ) {
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->serviceService = $serviceService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = $this->contractService->getAllcontracts();
        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = $this->customerService->getAllCustomers();
        $services = $this->serviceService->getAllServices();

        return view('contracts.create', compact('customers', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Helper::generateRandomString();
        $data = $request->all();
        $beginDate = Carbon::parse($request->beginDate);
        $data = array_merge($data, ['beginDate' => $beginDate]);
        $data = array_merge($data, ['code' => $code]);
        $this->contractService->createcontract($data);

        return redirect()->route('contracts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = $this->customerService->getAllCustomers();
        $services = $this->serviceService->getAllServices();
        $contract = $this->contractService->getcontract($id);
        return view('contracts.edit', compact('contract', 'customers', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $beginDate = Carbon::parse($request->beginDate);
        $data = array_merge($data, ['beginDate' => $beginDate]);
        $this->contractService->updatecontract($id, $data);
        return redirect()->route('contracts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contractService->deletecontract($id);
        return redirect()->route('contracts.index');
    }
}
