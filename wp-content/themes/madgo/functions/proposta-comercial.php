<?php
ini_set('default_charset', 'UTF-8');
if (isset($_POST['email'])) {
	$emailUsuario = $_POST['email'];
	$nomeUsuario = 'Proposta comercial';
	// PHP MAILER
	$template = '<h1 style="color: #010d1c;">Quer receber a prosposta comercial</h1>';
	$template .= '<ul style="display: block;list-style:none;margin:0;padding:0;">';
	$template .= '<li style="padding: 2.5px;display:block;margin:0;font-size: 10px; line-height: 1.4;">';
	$template .= '<strong>E-mail:</strong><br>' . $_POST['email'];
	$template .= '</li>';
	$template .= '</ul>';
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';
	$from = "developer@madknow.com.br";
	$fromName = 'Site MadGO';

	$host = 'srv136.prodns.com.br';
	$username = 'developer@madknow.com.br';
	$password = 'INt-12133@M4Dg#';
	$port = 465;
	$secure = 'ssl';                             // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $host;  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $username;                 // SMTP username
	$mail->Password = $password;                           // SMTP password
	$mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = $port;                                    // TCP port to connect to

	$mail->setFrom($from, $fromName);
	$mail->addAddress($from, $fromName);     // Add a recipient
	$mail->addReplyTo($emailUsuario, $nomeUsuario);

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Newsletter Bar - MadGO';
	$mail->Body    = $template;
?>
<?php if($mail->send()): ?>
	<div id="comercial" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h1 class="modal-title">Muito bem!</h1>
	</div>
	<div class="modal-body">
	<p>Obrigado por entrar em contato retornaremos o mais rápido possível, caso queira especificar mais seu projeto continue nesta página.</p>
	</div>
	<div class="modal-footer">
	<a href="<?php bloginfo('url') ?>" class="btn btn-custom1">Página inicial</a>
	<button type="button" class="btn btn-custom2" data-dismiss="modal">Continuar</button>
	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<?php endif; } ?>
