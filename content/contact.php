<script language="javascript">
function validation()
{
    var msg = "";
    
    //validation mail
    var email = document.getElementById("mail").value;
    var verif = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/
    if (verif.exec(email) == null)
    {
        msg += "Adresse mail non valide.\n"
    }
    
    //validation objet et body
    var subject = document.getElementById("subject");
    var body = document.getElementById("body");
    if (subject.value == "") {
        msg += "Object non valide.\n"
    }
    if (body.value == "") {
        msg += "Corps du message non valide.";
    }
    
    if (msg != "") {
        alert(msg);
    }
    else {
        submitForm();
    }
    
    function submitForm() {
        var form = document.getElementById("form");
        form.submit();
    }
}
</script>

<?php
if ($flag_contact == 2) {
    unset($mail);
    unset($mail_body);
    unset($subject);
}
?>

<div class="subtitle">Contact</div>

<div id="explaination">
    Les champs marqués <span class="redstar">*</span> sont obligatoires.
</div>
<br><br>

<form id="form" action="envoyer-mail.htm" method="POST">
    <div class="field">
        <label>Votre adresse e-mail <span class="redstar">*</span>  : </label>
        <div class="input"><input id="mail" class="input_content" type="text" name="mail" value="<?php if (isset($mail)) { echo $mail; } ?>"/></div>
    </div>

    <div class="field">
        <label>Objet <span class="redstar">*</span>  : </label>
        <div class="input"><input id="subject" class="input_content" type="text" name="subject" value="<?php if (isset($subject)) { echo $subject; } ?>"/></div>
    </div>

    <div class="field">
        <label>Message <span class="redstar">*</span>  : </label>
        <div class="input"><textarea id="body" name="mail_body"><?php if (isset($mail_body)) { echo $mail_body; } ?></textarea></div>
    </div>
    
    <div id="captcha">
        <div>
        <?php
            require_once('lib/recaptchalib.php');
            $publickey = "6Le5AswSAAAAAMxH3PfMoq3DLdCQI-w2Ofyand-c ";
            echo recaptcha_get_html($publickey);
        ?>
        </div>
        <a class="button" href="#" onclick="this.blur(); validation();"><span>Envoyer</span></a>
    </div>
</form>