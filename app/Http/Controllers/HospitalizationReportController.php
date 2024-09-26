<?php
namespace App\Http\Controllers;

use App\Models\Rapport;
use App\Models\Patient;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class HospitalizationReportController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('hospitalization-reports.index', compact('patients'));
    }

    public function create($patient_id)
    {
        $patient = Patient::findOrFail($patient_id);
        return view('hospitalization-reports.create', compact('patient'));
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'user_id' => 'required|exists:patients,id_p',
            'hospitalization_start' => 'required|date',
            'hospitalization_end' => 'required|date',
            'reason' => 'required',
            'history' => 'required',
            'operation_date' => 'nullable|date',
            'intervention_title' => 'nullable',
            'progress' => 'required',
            'discharge_decision' => 'required',
            'discharge_date' => 'required|date',
            'rehabilitation' => 'nullable',
            'treatment' => 'required',
            'follow_up_date' => 'nullable|date',
        ]);

        // Créer le rapport d'hospitalisation
        $hospitalizationReport = Rapport::create($validated);

        // Stocker l'ID du rapport dans la session pour l'afficher sur l'index
        $request->session()->flash('report_id', $hospitalizationReport->user_id);

        // Rediriger vers l'index
        return redirect()->route('hospitalization-reports.index')->with('success', 'Hospitalization report created successfully!');
    }

    public function show($id)
    {
        $hospitalizationReport = Rapport::findOrFail($id);
        return view('hospitalization-reports.show', compact('hospitalizationReport'));
    }

    public function edit($id)
    {
        $hospitalizationReport = Rapport::findOrFail($id);
        $patients = Patient::all();
        return view('hospitalization-reports.edit', compact('hospitalizationReport', 'patients'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:patients,id_p',
            'hospitalization_start' => 'required|date',
            'hospitalization_end' => 'required|date',
            'reason' => 'required',
            'history' => 'required',
            'operation_date' => 'nullable|date',
            'intervention_title' => 'nullable',
            'progress' => 'required',
            'discharge_decision' => 'required',
            'discharge_date' => 'required|date',
            'rehabilitation' => 'nullable',
            'treatment' => 'required',
            'follow_up_date' => 'nullable|date',
        ]);

        $hospitalizationReport = Rapport::findOrFail($id);
        $hospitalizationReport->update($validated);

        return redirect()->route('hospitalization-reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy($id)
    {
        $hospitalizationReport = Rapport::findOrFail($id);
        $hospitalizationReport->delete();

        return redirect()->route('hospitalization-reports.index')->with('success', 'Report deleted successfully.');
    }

    public function generatePdf($id)
    {
        $hospitalizationReport = Rapport::findOrFail($id);
        $pdf = PDF::loadView('hospitalization-reports.pdf', compact('hospitalizationReport'));

        return $pdf->download('hospitalization-report_' . $hospitalizationReport->id . '.pdf');
    }
}
