<?php


function mail_modal()
{
?>


    <div class="modal_mail_box">

        <form>
            <h2 style="color: white;">Feedback</h2>
            <p>
                <b>Your mail adress</b>
                <input type="mail" style="font-size: large;">
            </p>
            <p>
                <b>Choose a subject?</b>
                <select class="select-brands" name="theItems" style="text-align: left;" onchange="switchSelected()">
                    <option value="addSwitch" selected>Add a new switch / hardware</option>
                    <option value="addBrand">Add a new brand</option>
                    <option value="addFeature">Feature request</option>
                    <option value="websiteErrors">Some errors with the website or API</option>
                </select>
            </p>

            <div id="addSwitch" style="visibility: hidden;">
                <p>
                    <b>Model number</b>
                    <input name="addSwitchNumber" type="text">
                </p>
                <p>
                    <b>Brand name</b>
                    <input name="addSwitchBrand" type="text">
                </p>
            </div>


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
