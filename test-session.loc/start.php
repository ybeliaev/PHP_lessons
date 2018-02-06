<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" class="form-group" >

    <input type="hidden" name='q'  value="<?= ++$q?>">
    <button type="submit" class="btn btn-primary">Начать тест</button>
</form>