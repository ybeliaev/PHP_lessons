<p>Сколько будет 5 * 5?</p>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" class="form-group" >
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="answer" value="c1" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">25</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="answer" value="c2"  class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">35</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio3" name="answer" value="c3"  class="custom-control-input">
        <label class="custom-control-label" for="customRadio3">55</label>
    </div>
    <input type="hidden" name='q' value="<?= ++$q?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
