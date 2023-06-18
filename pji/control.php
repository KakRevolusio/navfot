<?php
include 'koneksi.php';

// Fungsi untuk mendapatkan semua data blog dari database
function getPosts()
{
    global $conn;
    $query = "SELECT * FROM posts";
    $result = mysqli_query($conn, $query);

    $posts = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }

    return $posts;
}

// Fungsi untuk mendapatkan satu data blog dari database berdasarkan ID
function getPost($id)
{
    global $conn;
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);

    return $post;
}

// Fungsi untuk menambah data blog ke database
function addPost($title, $description, $image)
{
    global $conn;
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $image = mysqli_real_escape_string($conn, $image);

    $query = "INSERT INTO posts (title, description, image) VALUES ('$title', '$description', '$image')";
    mysqli_query($conn, $query);
}

// Fungsi untuk mengedit data blog di database
function editPost($id, $title, $description, $image)
{
    global $conn;
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $image = mysqli_real_escape_string($conn, $image);

    $query = "UPDATE posts SET title='$title', description='$description', image='$image' WHERE id=$id";
    mysqli_query($conn, $query);
}

// Fungsi untuk menghapus data blog dari database
function deletePost($id)
{
    global $conn;
    $query = "DELETE FROM posts WHERE id=$id";
    mysqli_query($conn, $query);
}

// Proses pengolahan form tambah/edit blog
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $image_path = 'uploads/' . $image;

    if (move_uploaded_file($tmp_image, $image_path)) {
        if ($id == '') {
            addPost($title, $description, $image);
        } else {
            editPost($id, $title, $description, $image);
        }
    }
}

// Proses pengolahan form hapus blog
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deletePost($id);
    header('Location: control.php');
    exit();
}

function getQuestion($id)
{
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM questions WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $question = mysqli_fetch_assoc($result);

    return $question;
}

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

// Fungsi untuk menambahkan pertanyaan
function addQuestion($question, $answer)
{
    global $conn;
    $question = mysqli_real_escape_string($conn, $question);
    $answer = mysqli_real_escape_string($conn, $answer);

    $query = "INSERT INTO questions (question, answer) VALUES ('$question', '$answer')";
    mysqli_query($conn, $query);
}

// Fungsi untuk mengedit pertanyaan
function editQuestion($id, $question, $answer)
{
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $question = mysqli_real_escape_string($conn, $question);
    $answer = mysqli_real_escape_string($conn, $answer);

    $query = "UPDATE questions SET question='$question', answer='$answer' WHERE id=$id";
    mysqli_query($conn, $query);
}

// Fungsi untuk menghapus pertanyaan
function deleteQuestion($id)
{
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);

    $query = "DELETE FROM questions WHERE id=$id";
    mysqli_query($conn, $query);
}

if (isset($_POST['submit_question'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    addQuestion($question, $answer);
}

// Parameter untuk menghapus pertanyaan
if (isset($_GET['delete_question'])) {
    $questionId = $_GET['delete_question'];

    deleteQuestion($questionId);
}

// Parameter untuk mengedit pertanyaan/jawaban
if (isset($_GET['edit_question'])) {
    $questionId = $_GET['edit_question'];
    $questionData = getQuestion($questionId);

    // Cek apakah pertanyaan ditemukan
    if (!$questionData) {
        die("Pertanyaan tidak ditemukan.");
    }

    if (isset($_POST['submit_question'])) {
        // Proses form submit untuk mengedit pertanyaan/jawaban
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        editQuestion($questionId, $question, $answer);

        // Redirect kembali ke halaman control.php setelah berhasil mengedit pertanyaan/jawaban
        header("Location: control.php");
        exit();
    }
}

$posts = getPosts();
$questions = getQuestions();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Control - Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Web Control - Blog</h1>
        <h2>Manage Blog Posts</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['description']; ?></td>
                    <td><img src="uploads/<?php echo $post['image']; ?>" width="100" height="100"></td>
                    <td>
                        <a href="control.php?delete=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                        <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Add/Edit Blog Post</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_GET['id']) ? getPost($_GET['id'])['title'] : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required><?php echo isset($_GET['id']) ? getPost($_GET['id'])['description'] : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" <?php echo isset($_GET['id']) ? '' : 'required'; ?>>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
    <h1>Control Panel</h1>

    <h2>Pertanyaan dan Jawaban</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
                <?php foreach ($questions as $question) : ?> 
            <tr>
            <td><?php echo $i++; ?></td>
                <td><?php echo $question['question']; ?></td>
                <td><?php echo $question['answer']; ?></td>
                <td>
                    <a href="control.php?edit_question=<?php echo $question['id']; ?>">Edit</a>
                    <a href="control.php?delete_question=<?php echo $question['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Tambah Pertanyaan dan Jawaban</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="question">Pertanyaan:</label>
            <textarea class="form-control" name="question" id="question" required></textarea>
        </div>
        <div class="form-group">
            <label for="answer">Jawaban:</label>
            <textarea class="form-control" name="answer" id="answer" required></textarea>
        </div>
        <button type="submit" name="submit_question" class="btn btn-primary">Tambah</button>
    </form>

    <?php if (isset($_GET['edit_question'])): ?>
    <h2>Edit Pertanyaan dan Jawaban</h2>

    <?php if ($questionData): ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="question">Pertanyaan:</label>
            <textarea class="form-control" name="question" id="question" required><?php echo $questionData['question']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="answer">Jawaban:</label>
            <textarea class="form-control" name="answer" id="answer" required><?php echo $questionData['answer']; ?></textarea>
        </div>
        <button type="submit" name="submit_question" class="btn btn-primary">Edit</button>
    </form>
    <?php else: ?>
    <p>Pertanyaan tidak ditemukan.</p>
    <?php endif; ?>
    <?php endif; ?>
    </div>
</body>
</html>
