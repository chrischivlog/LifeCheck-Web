<?php


function mail_modal()
{
?>

<div class="modal_mail_box">

<form>
    <h3 style="color: white;">Feedback</h3>
<p>
    <b>Your mail adress</b>
    <input type="mail" style="font-size: large;">
</p>
<p>
    <b>Choose a subject?</b>
    <select class="select-brands" id="brands" name="brands" style="text-align: left;">
        <option value="Add a new switch / hardware" selected>Add a new switch / hardware</option>
        <option value="Add a new switch / hardware">Add a new brand</option>
        <option value="Some errors with the website or API">Some errors with the website or API</option>
        <option value="Feature request">Feature request</option>
    </select>
</p>
<p>
    <b>Write something nice about</b>
        <br>
    <small>Model Number & brand or some </small>
    <textarea type="text" rows="5"></textarea>
</p>

<p>
    <button type="submit">Submit 👌🏼</button>
</p>
</form> 


</div>
<?php
}
