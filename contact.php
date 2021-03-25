<?php $title ='Contact';
require_once 'template/header.php'?>
<h1>contact us</h1>

<form action="" method="post">

<div class='form-group'>
<label for='name'>Your name </label>
<input type="text" name='name' class='form-control' placeholder='Your name'>
</div>

<div class='form-group'>
<label for='email'>Your email </label>
<input type="email" name='email' class='form-control' placeholder='Your email'>
</div>

<div class='form-group'>
<label for='document'>Your document </label>
<input type="file" name='emafileil' class='form-control' placeholder='Your file'>
</div>

<div class='form-group'>
<label for='message'>Your message </label>
<textarea name="message" class='form-control' ></textarea>
</div>
<button class='btn btn-primary'>Send</button>




</form>
<?php require_once 'template/footer.php'?>
    
