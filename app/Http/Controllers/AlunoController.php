<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $alunos = Aluno::query();

        if (!empty($request->nome)) {
            $alunos->where('nome', 'like', '%' . $request->nome . '%');
        }

        if (!empty($request->email)) {
            $alunos->where('email', 'like', '%' . $request->email . '%');
        }

        $response = $alunos->get();

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
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:tb_aluno',
            'data_nascimento' => 'nullable|date_format:Y-m-d'
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        $aluno = (new Aluno())->fill($input->validated());
        $aluno->save();
        $aluno->refresh();

        return response()->json($aluno);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Aluno::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $input = Validator::make($request->all(), [
            'nome' => 'string|max:255',
            'email' => 'email|max:255|unique:tb_aluno',
            'data_nascimento' => 'nullable|date_format:Y-m-d'
        ]);

        if ($input->fails()) {
            return response()->json(['message' => $input->errors()]);
        }

        dd($input->validated());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::find($id)->delete();
        return response()->json(['message' => 'Exclusão do aluno efetuada com sucesso!']);
    }
}
