<?php

namespace Modules\Register\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Register\Http\Requests\CreateRegisterStudenteRequest;
use Modules\Register\Http\UseCases\CreateRegisterStudent;


class RegisterStudentController extends Controller
{
    private  $studentUseCase;

    public function __construct()
    {
        $this->studentUseCase = new CreateRegisterStudent();
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('register::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(CreateRegisterStudenteRequest $request):JsonResponse
    {

        $request->validated();
        $studentUseCase = $this->studentUseCase;
        try {
            $student = $studentUseCase->execute($request);
            return response()->json(['success'=>'Cheque seu e-mail!'],201);
        } catch (Exception $err) {
            return response()->json(['error' => $err], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('register::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('register::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
