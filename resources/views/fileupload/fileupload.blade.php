<h1>FILE UPLOAD</h1>

<FORM  action="/fileuploaded" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="username" placeholder="enter your name">
    <input type="file" name="fileupload" placeholder="file upload kar">
    <button type='submit'>okokok</button>
</FORM>
