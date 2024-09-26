<!-- resources/views/hospitalization_reports/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Hospitalization Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .report {
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #007BFF;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
        }
        p {
            margin: 5px 0;
        }
        .report p strong {
            color: #333;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header .title {
            font-size: 1.5em;
            color: #555;
        }
        .header .patient-id {
            font-size: 1.2em;
            color: #777;
        }
        .footer {
            border-top: 2px solid #ddd;
            text-align: center;
            padding-top: 10px;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">
            <h1>Hospitalization Report</h1>
        </div>
        <div class="patient-id">
            <p><strong>Patient ID:</strong> {{ $hospitalizationReport->patient->id_p }}</p>
        </div>
    </div>
    
    <div class="report">
        <p><strong>Patient Name:</strong> {{ $hospitalizationReport->patient->Nom_p }} {{ $hospitalizationReport->patient->Prenom_p }}</p>
        <p><strong>Hospitalization Start Date:</strong> {{ $hospitalizationReport->hospitalization_start }}</p>
        <p><strong>Hospitalization End Date:</strong> {{ $hospitalizationReport->hospitalization_end }}</p>

        <div class="section-title">Medical Details</div>
        <p><strong>Reason for Hospitalization:</strong> {{ $hospitalizationReport->reason }}</p>
        <p><strong>Medical History:</strong> {{ $hospitalizationReport->history }}</p>
        
        <div class="section-title">Operation Details</div>
        <p><strong>Operation Date:</strong> {{ $hospitalizationReport->operation_date }}</p>
        <p><strong>Intervention Title:</strong> {{ $hospitalizationReport->intervention_title }}</p>
        
        <div class="section-title">Progress and Treatment</div>
        <p><strong>Progress:</strong> {{ $hospitalizationReport->progress }}</p>
        <p><strong>Treatment:</strong> {{ $hospitalizationReport->treatment }}</p>

        <div class="section-title">Discharge Information</div>
        <p><strong>Discharge Decision:</strong> {{ $hospitalizationReport->discharge_decision }}</p>
        <p><strong>Discharge Date:</strong> {{ $hospitalizationReport->discharge_date }}</p>
        <p><strong>Rehabilitation:</strong> {{ $hospitalizationReport->rehabilitation }}</p>
        <p><strong>Follow-up Date:</strong> {{ $hospitalizationReport->follow_up_date }}</p>
    </div>
    
    <div class="footer">
        <p>Hospitalization Report generated on {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>
</body>
</html>
