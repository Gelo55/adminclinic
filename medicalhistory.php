<?php

  include 'connect.php';

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/medicalhistory.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinic Management System</title>
</head>
<body>

 
    
<div clas="container">
    <div class="frame">

    <div class="history-container">
        <h1>Medical History</h1>
        <p class="med-result">Medical Result 2023</p>

        <!-- CBC Section -->
        <div>
            <h2 class="section-title">Complete Blood Count (CBC)</h2>
            <table>
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Reference Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hemoglobin</td>
                        <td>13.5 g/dL</td>
                        <td>12-16 g/dL</td>
                    </tr>
                    <tr>
                        <td>White Blood Cells (WBC)</td>
                        <td>6,500 /µL</td>
                        <td>4,000-11,000 /µL</td>
                    </tr>
                    <tr>
                        <td>Platelets</td>
                        <td>250,000 /µL</td>
                        <td>150,000-450,000 /µL</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Urine Analysis Section -->
        <div>
            <h2 class="section-title">Urine Analysis</h2>
            <table>
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Reference Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color</td>
                        <td>Yellow</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>Specific Gravity</td>
                        <td>1.020</td>
                        <td>1.005-1.030</td>
                    </tr>
                    <tr>
                        <td>Protein</td>
                        <td>Negative</td>
                        <td>Negative</td>
                    </tr>
                    <tr>
                        <td>Glucose</td>
                        <td>Negative</td>
                        <td>Negative</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- X-ray Section -->
        <div>
            <h2 class="section-title">X-ray</h2>
            <table>
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>Findings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chest</td>
                        <td>Normal lung fields. No abnormalities detected.</td>
                    </tr>
                    <tr>
                        <td>Abdomen</td>
                        <td>No abnormal masses or signs of obstruction.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="notes">* All values should be confirmed by the attending physician.</p>
    </div>

  </div>

</div>




</body>


<script src="script.js"></script>

</html>