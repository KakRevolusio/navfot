<?php
include 'koneksi.php';

$id = $_GET['id'];

// Fungsi untuk mendapatkan satu data blog dari database berdasarkan ID
function getPost($id)
{
    global $conn;
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);

    return $post;
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

$post = getPost($id);

// Proses pengolahan form edit blog
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $image_path = 'uploads/' . $image;

    if (move_uploaded_file($tmp_image, $image_path)) {
        editPost($id, $title, $description, $image);
        header('Location: control.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Blog Post</h1>

        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required><?php echo $post['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
