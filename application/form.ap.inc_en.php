<div class="form">
    <form action="" enctype="multipart/form-data" method="post">
        <mark class='title1'><strong>application form</strong></mark> <br/>
        <input type="text" name="tb_forname" value="" placeholder="Vul voornaam in*" required> <!--forname input -->
        <input type="text" name="tb_lastname" value="" placeholder="Vul achternaam in*" required><br /> <!--lastname input -->
        birth day:<input type="date" name="tb_birthdate" value="" ><br /> <!--date input -->
        <input type="text" name="tb_city" value="" placeholder="Vul stad in*" required><br /> <!--city input -->
        <input type="text" name="tb_street" value="" placeholder="Vul straat in*" required><br /> <!--street input -->
        <input type="text" name="tb_housenumber" value="" placeholder="Vul huisnummer in*" required><br /> <!--housenumber input -->
        <input type="text" name="tb_postnr" value="" placeholder="Vul postcode in*" required><br /> <!--postcode input -->
        <input type="email" name="tb_email" value="" placeholder="Vul E-mail in*" required><br /> <!--email input -->
        <input type="text" name="tb_telnum" value="" placeholder="Vul telefoon nummer in"><br /> <!--phonenumber input -->
        <strong>for the administration, please use this name structure: </strong> <br />(firstname_lastname_dd_mm_yy_CV.pdf)<br />
        <input type="file" name="CV"/><br><br> <!--cv uploader -->
        <input type="file" name="LETTER"/><br><br> <!--motivation letter uploader --> 
        <input type="hidden" name="frmInsertApplyResp" value="frmInsertApplyResp"> <br /> <!--form data values -->
        <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
    </form>
</div>