<h1>Thêm bài viết</h1>

<form method="POST" action="/posts">
    @csrf

    <input type="text" name="title" placeholder="Tiêu đề">
    <br><br>

    <textarea name="content" placeholder="Nội dung"></textarea>
    <br><br>

    <button type="submit">Lưu</button>
</form>