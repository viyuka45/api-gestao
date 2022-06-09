<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $matriculas = Matricula::query();

        if (!empty($request->id_aluno)) {
            $matriculas->where('id_aluno', $request->id_aluno);
        }

        if (!empty($request->id_curso)) {
            $matriculas->where('id_curso', $request->id_curso);
        }

        $matriculas->with(['aluno', 'curso']);

        $response = $matriculas->get();

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $input = Validator::make($request->all(), [
            'id_aluno' => 'required|int',
            'id_curso' => 'required|int',
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        $matricula = (new Matricula())->fill($input->validated());
        $matricula->save();
        $matricula->refresh();

        return response()->json($matricula);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(Matricula::with(['aluno', 'curso'])->find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $input = Validator::make($request->all(), [
            'id_aluno' => 'int',
            'id_curso' => 'int',
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        Matricula::where('id', $id)
            ->update($input->validated());

        return response()->json(['message' => 'Alterações realizadas com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Matricula::find($id)->delete();
        return response()->json(['message' => 'Exclusão da matrícula efetuada com sucesso!']);
    }
}
