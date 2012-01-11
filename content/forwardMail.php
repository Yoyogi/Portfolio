<?php
require_once('lib/recaptchalib.php');
$privatekey = "6Le5AswSAAAAAI7-p2rEJSJSBsONeUIanEM_wf7Z";
$resp = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);
?>
<script type="text/javascript">
    function submitError() {
        submitFormError();
    }

    function submitFormError() {
        var form = document.getElementById("formError");
        form.submit();
    }
</script>

<div id="errorContent" class="animateIn">
    <p>
        <?php
            if (!$resp->is_valid) {
        ?>
        Vous avez entré un mauvais captcha. Cliquez ici pour être redirigé : <a class="exp_link" href="#" onclick="this.blur(); submitError();">Redirection</a>.
        <?php
            }
            else {
			mail("ytirand@epsi.fr", $subject, "\n\nEnvoyé par : ".$mail."\n\n\n".$mail_body);
        ?>
        Le mail a bien été envoyé. Cliquez ici pour être redirigé : <a class="exp_link" href="contact-2.htm">Redirection</a>.
        <?php
            }
        ?>
    </p>
    <form id="formError" action="contact-1.htm" method="POST">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>"/>
        <input type="hidden" name="mail" value="<?php echo $mail; ?>"/>
        <input type="hidden" name="mail_body" value="<?php echo $mail_body; ?>"/>
    </form>
</div>
