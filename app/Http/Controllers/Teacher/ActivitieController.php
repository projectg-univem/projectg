<?php

namespace ProjectG\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ProjectG\Http\Controllers\Controller;
//use ProjectG\app\Models\Activitie;

class ActivitieController extends Controller
{
    // protected $Activitie;

    // public function __construct(Activitie $activitie)
    // {
    //     $this->Activitie = $activitie;
    // }

    public function registerActivitie(Request $request)
    {
        dd($request->all());

        $result = DB::insert('insert into activities (title,  
                                                    description, 
                                                    start_date, 
                                                    end_date, 
                                                    type, 
                                                    max_students, 
                                                    percentage_note_integral,
                                                    file, 
                                                    generate_random_group, 
                                                    integral_note_weight, 
                                                    id_class,
                                                    teacher_discipline_id,
                                                    status) 
                                                values (?,?,?,?,?,?,?,?,?,?,?,?,?)', 
                                                [
                                                $dataform['turma'],
                                                $dataform['description'],
                                                $dataform['start_date'],
                                                $dataform['end_date'],
                                                $dataform['tipoDivisao'],
                                                $dataform['max_students'],
                                                $dataform['percentage_note_integral'],
                                                $dataform['file_activitie'],
                                                $dataform['generate_random_group'],
                                                $dataform['integral_note_weight'],
                                                $dataform['id_class'],
                                                $dataform['teacher_discipline_id'],
                                                'A']);

        if($result){
            $return = 'Atividade Criada com sucesso!';
        }else{
            $return = 'Ocorreu um erro algo criar a atividade, contate nosso suporte!';
        }
        return $dataform;
        ///return view('teacher.taskCreate', ['resp' => $result]);
    }

}
