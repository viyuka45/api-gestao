<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $cursos = Curso::query();

        if (!empty($request->titulo)) {
            $cursos->where('titulo', 'like', '%' . $request->titulo . '%');
        }

        $response = $cursos->get();

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
            'titulo' => 'required|string|max:255',
            'decricao' => 'required|max:255|unique:tb_curso',
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        $curso = (new Curso())->fill($input->validated());
        $curso->save();
        $curso->refresh();

        return response()->json($curso);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return response()->json(Curso::find($id));
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
            'titulo' => 'string|max:255|unique:tb_curso',
            'descricao' => 'string|max:255',
            'data_nascimento' => 'nullable|date_format:Y-m-d'
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        Curso::where('id', $id)
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
        Curso::find($id)->delete();
        return response()->json(['message' => 'Exclusão do curso efetuada com sucesso!']);
    }
}
