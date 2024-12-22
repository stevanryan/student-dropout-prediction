<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    
    public function index() {}

    /**
     * Show a form to input data for individual.
     */
    public function create() {
        return view('students.create');
    }

    /**
     * Prediction.
     */
    public function predict(Request $request) {
        // Validasi data yang diterima
        $data = $request->validate([
            'name' => 'required|string',
            'marital_status' => 'required|integer',
            'application_mode' => 'required|integer',
            'course' => 'required|integer',
            'previous_qualification' => 'required|integer',
            'tuition_fees_up_to_date' => 'required|integer',
            'scholarship_holder' => 'required|integer',
            'age_at_enrollment' => 'required|integer',
            'curricular_units_1st_sem_credited' => 'required|integer',
            'curricular_units_1st_sem_enrolled' => 'required|integer',
            'curricular_units_1st_sem_evaluations' => 'required|integer',
            'curricular_units_1st_sem_approved' => 'required|integer',
            'curricular_units_1st_sem_grade' => 'required|numeric',
            'inflation_rate' => 'required|numeric',
        ]);

        // Ambil name dari data yang sudah divalidasi
        $name = $data['name']; // Pastikan 'name' ada dalam data yang diterima

        // Kirim POST dengan body request ke API eksternal
        $response = Http::post('http://localhost:5000/predict?name=' . $name, [
            'marital_status' => $data['marital_status'],
            'application_mode' => $data['application_mode'],
            'course' => $data['course'],
            'previous_qualification' => $data['previous_qualification'],
            'tuition_fees_up_to_date' => $data['tuition_fees_up_to_date'],
            'scholarship_holder' => $data['scholarship_holder'],
            'age_at_enrollment' => $data['age_at_enrollment'],
            'curricular_units_1st_sem_credited' => $data['curricular_units_1st_sem_credited'],
            'curricular_units_1st_sem_enrolled' => $data['curricular_units_1st_sem_enrolled'],
            'curricular_units_1st_sem_evaluations' => $data['curricular_units_1st_sem_evaluations'],
            'curricular_units_1st_sem_approved' => $data['curricular_units_1st_sem_approved'],
            'curricular_units_1st_sem_grade' => $data['curricular_units_1st_sem_grade'],
            'inflation_rate' => $data['inflation_rate'],
        ]);

        // Cek apakah request berhasil
        if ($response->successful()) {
            // Ambil hasil dari response
            $prediction = $response->json(); // Mengambil data json dari API

            // Simpan data prediksi ke dalam database
            Prediction::create([
                'name' => $name,
                'prediction' => $prediction['prediction']
            ]);

            // Kirim hasil prediksi ke view
            return view('results.show', [ // Mengembalikan view results result.show
                'prediction' => $prediction // Set atribut prediction dengan variabel prediction
            ]);
        } else {
            // Tangani error atau response yang gagal
            return view('results.show', ['error' => 'API request failed']);
        }
    }

    /**
     * Show a student prediction history.
     */
    public function history() {
        $predictionHistory = Prediction::all();
        return view('students.history', ['predictionHistory' => $predictionHistory]);
    }
}
