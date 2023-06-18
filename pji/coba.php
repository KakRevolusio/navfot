<?php
include 'koneksi.php';

// Fungsi untuk mendapatkan semua data pertanyaan dari database
function getQuestions()
{
    global $conn;
    $query = "SELECT * FROM questions";
    $result = mysqli_query($conn, $query);

    $questions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $questions[] = $row;
    }

    return $questions;
}

// Memanggil fungsi getQuestions() untuk mengisi variabel $questions
$questions = getQuestions();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pertanyaan dan Jawaban</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1> Pertanyaan dan Jawaban</h1>
        <div id="accordion">
            <?php foreach ($questions as $question): ?>
            <div class="card">
                <div class="card-header" id="heading<?php echo $question['id']; ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $question['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $question['id']; ?>">
                            <?php echo $question['question']; ?>
                        </button>
                    </h5>
                </div>

                <div id="collapse<?php echo $question['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $question['id']; ?>" data-parent="#accordion">
                    <div class="card-body">
                        <?php echo $question['answer']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
