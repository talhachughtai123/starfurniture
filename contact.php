<?php

include("include/header.php");


?>

<div class="form"  style="color:black">
    <br/>
    <h3>Contact US</h3>
    <FORM name="sendEmail" method="post" action="sendMailScriptURL">
        <table>

            <tr>
                <td>Name:</td> 
				<td><input type="text" name="User"  placeholder="Enter Your name"/></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td> <input type="text" name="email" placeholder="Enter Your Email"/></td>
            </tr>
            <tr>
                <td>Phone: </td> 
				<td><input type="text" name="Number" placeholder="Enter Your Mobile Number"/></form>
    </tr>

    <tr>
        <td>For:</td>
        <td><input type="radio" name="from" value="Home" />Home <input type="radio" name="from" value="Office" />Office <input type="radio" name="from" value="Educational" />Educational <br /></td>
    </tr>

    <tr>
        <td>City:</td>
        <td>
            <select>
                <option value="Select City">Select City</option>
                <option value="Select City">Lahore</option>
                <option value="Select City">Islamabad</option>
                <option value="Select City">Karachi</option>
                <option value="Select City">Sargodha</option>
                <option value="Select City">Faisalabad</option>
                <option value="Select City">Gujjrat</option>
                <option value="Select City">Gujranwala</option>
                <option value="Select City">Multan</option>
                <option value="Select City">Quetta </option>
                <option value="Select City">Peshawar</option>
                <option value="Select City"> Hyderabad </option>
                <option value="Select City"> Murree </option>
                <option value="Select City">Gildit</option>
                <option value="Select City">Dera Ghazi Khan </option>
            </select>
        </td>
    </tr>


    <tr>
        <td valign="top">Message: </td>
        <td><TEXTAREA name="message" cols="38"rows="6"> </TEXTAREA></td>
    </tr>

    <tr>
        <td colspan="2" align="right" style="color:black"> <input type="Submit"  value="Send Data" name="submit"/></td>
    </tr>
    </table>
    </FORM>

</div>

<?php

include("include/footer.php");


?>