<?php
include 'database.php'; // Database connection

// Function to count admissions
function getCount($conn, $type, $interval) {
    $query = "SELECT COUNT(*) as count FROM admit WHERE type = '$type' AND date >= DATE_SUB(NOW(), INTERVAL $interval)";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['count'];
}

// Get total admissions
$queryTotal = "SELECT COUNT(*) as total FROM admit WHERE date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
$resultTotal = mysqli_query($conn, $queryTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalAdmissions = $rowTotal['total'] > 0 ? $rowTotal['total'] : 1; // Prevent division by zero

// Fetch counts for each type
$studentCount = getCount($conn, 'Student', '1 MONTH');
$professorCount = getCount($conn, 'Professor', '1 MONTH');
$otherCount = getCount($conn, 'Other', '1 MONTH');

// Calculate progress percentages
$studentProgress = round(($studentCount / $totalAdmissions) * 100);
$professorProgress = round(($professorCount / $totalAdmissions) * 100);
$otherProgress = round(($otherCount / $totalAdmissions) * 100);

// Return JSON response
echo json_encode([
    "student" => [
        "today" => getCount($conn, 'Student', '1 DAY'),
        "week" => getCount($conn, 'Student', '1 WEEK'),
        "month" => $studentCount,
        "progress" => $studentProgress
    ],
    "professor" => [
        "today" => getCount($conn, 'Professor', '1 DAY'),
        "week" => getCount($conn, 'Professor', '1 WEEK'),
        "month" => $professorCount,
        "progress" => $professorProgress
    ],
    "other" => [
        "today" => getCount($conn, 'Other', '1 DAY'),
        "week" => getCount($conn, 'Other', '1 WEEK'),
        "month" => $otherCount,
        "progress" => $otherProgress
    ]
]);
?>
