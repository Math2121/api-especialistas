<?php

namespace Modules\Register\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Register\Http\Requests\CreateRegisterStudenteRequest;
use Modules\Register\Http\UseCases\CreateRegisterSpecialist;

class RegisterSpecialistController extends Controller
{
    private  $specialistUseCase;

    public function __construct()
    {
        $this->specialistUseCase = new CreateRegisterSpecialist();
    }
  
 
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function create(CreateRegisterStudenteRequest $request)
    {
        $request->validated();
        $specialistUseCase = $this->specialistUseCase;
        try {
            $specialistUseCase->execute($request);
            return response()->json(['success'=>'Cheque seu e-mail!'],201);
        } catch (Exception $err) {
            return response()->json(['error' => $err], 403);
        }
    }

  
}
