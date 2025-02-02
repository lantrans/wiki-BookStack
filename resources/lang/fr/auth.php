<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Ces informations ne correspondent à aucun compte.',
    'throttle' => 'Trop d\'essais, veuillez réessayer dans :seconds secondes.',

    // Login & Register
    'sign_up' => 'S\'inscrire',
    'log_in' => 'Se connecter',
    'log_in_with' => 'Se connecter avec :socialDriver',
    'sign_up_with' => 'S\'inscrire avec :socialDriver',
    'logout' => 'Se déconnecter',

    'name' => 'Nom',
    'username' => 'Nom d\'utilisateur',
    'email' => 'E-mail',
    'password' => 'Mot de passe',
    'password_confirm' => 'Confirmez le mot de passe',
    'password_hint' => 'Doit faire plus de 7 caractères',
    'forgot_password' => 'Mot de passe oublié ?',
    'remember_me' => 'Se souvenir de moi',
    'ldap_email_hint' => 'Merci d\'entrer une adresse e-mail pour ce compte.',
    'create_account' => 'Créer un compte',
    'already_have_account' => 'Vous avez déjà un compte ?',
    'dont_have_account' => 'Vous n\'avez pas de compte ?',
    'social_login' => 'Connexion avec un réseau social',
    'social_registration' => 'Inscription avec un réseau social',
    'social_registration_text' => 'S\'inscrire et se connecter avec un réseau social.',

    'register_thanks' => 'Merci pour votre inscription !',
    'register_confirm' => 'Vérifiez vos e-mails et cliquez sur le lien de confirmation pour rejoindre :appName.',
    'registrations_disabled' => 'Les inscriptions sont désactivées pour le moment',
    'registration_email_domain_invalid' => 'Cette adresse e-mail ne peut pas accéder à l\'application',
    'register_success' => 'Merci pour votre inscription. Vous êtes maintenant inscrit(e) et connecté(e)',


    // Password Reset
    'reset_password' => 'Réinitialiser le mot de passe',
    'reset_password_send_instructions' => 'Entrez votre adresse e-mail ci-dessous et un e-mail avec un lien de réinitialisation de mot de passe vous sera envoyé.',
    'reset_password_send_button' => 'Envoyer un lien de réinitialisation',
    'reset_password_sent' => 'Un lien de réinitialisation du mot de passe sera envoyé à :email si cette adresse e-mail est trouvée dans le système.',
    'reset_password_success' => 'Votre mot de passe a été réinitialisé avec succès.',
    'email_reset_subject' => 'Réinitialisez votre mot de passe pour :appName',
    'email_reset_text' => 'Vous recevez cet e-mail parce que nous avons reçu une demande de réinitialisation pour votre compte.',
    'email_reset_not_requested' => 'Si vous n\'avez pas effectué cette demande, vous pouvez ignorer cet e-mail.',


    // Email Confirmation
    'email_confirm_subject' => 'Confirmez votre adresse e-mail pour :appName',
    'email_confirm_greeting' => 'Merci d\'avoir rejoint :appName !',
    'email_confirm_text' => 'Merci de confirmer en cliquant sur le lien ci-dessous :',
    'email_confirm_action' => 'Confirmez votre adresse e-mail',
    'email_confirm_send_error' => 'La confirmation par e-mail est requise mais le système n\'a pas pu envoyer l\'e-mail. Contactez l\'administrateur système.',
    'email_confirm_success' => 'Votre adresse e-mail a été confirmée !',
    'email_confirm_resent' => 'L\'e-mail de confirmation a été ré-envoyé. Vérifiez votre boîte de récéption.',

    'email_not_confirmed' => 'Adresse e-mail non confirmée',
    'email_not_confirmed_text' => 'Votre adresse e-mail n\'a pas été confirmée.',
    'email_not_confirmed_click_link' => 'Merci de cliquer sur le lien dans l\'e-mail qui vous a été envoyé après l\'enregistrement.',
    'email_not_confirmed_resend' => 'Si vous ne retrouvez plus l\'e-mail, vous pouvez renvoyer un e-mail de confirmation en utilisant le formulaire ci-dessous.',
    'email_not_confirmed_resend_button' => 'Renvoyez l\'e-mail de confirmation',

    // User Invite
    'user_invite_email_subject' => 'Vous avez été invité(e) à rejoindre :appName !',
    'user_invite_email_greeting' => 'Un compte vous a été créé sur :appName.',
    'user_invite_email_text' => 'Cliquez sur le bouton ci-dessous pour renseigner le mot de passe et récupérer l\'accès :',
    'user_invite_email_action' => 'Renseignez le mot de passe de votre compte',
    'user_invite_page_welcome' => 'Bienvenue dans :appName !',
    'user_invite_page_text' => 'Pour finaliser votre compte et recevoir l\'accès, vous devez renseigner le mot de passe qui sera utilisé pour la connexion à :appName les prochaines fois.',
    'user_invite_page_confirm_button' => 'Confirmez le mot de passe',
    'user_invite_success' => 'Mot de passe renseigné, vous avez maintenant accès à :appName !',

    // Multi-factor Authentication
    'mfa_setup' => 'Setup Multi-Factor Authentication',
    'mfa_setup_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'mfa_setup_configured' => 'Already configured',
    'mfa_setup_reconfigure' => 'Reconfigure',
    'mfa_setup_remove_confirmation' => 'Are you sure you want to remove this multi-factor authentication method?',
    'mfa_setup_action' => 'Setup',
    'mfa_backup_codes_usage_limit_warning' => 'You have less than 5 backup codes remaining, Please generate and store a new set before you run out of codes to prevent being locked out of your account.',
    'mfa_option_totp_title' => 'Mobile App',
    'mfa_option_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Backup Codes',
    'mfa_option_backup_codes_desc' => 'Securely store a set of one-time-use backup codes which you can enter to verify your identity.',
    'mfa_gen_confirm_and_enable' => 'Confirm and Enable',
    'mfa_gen_backup_codes_title' => 'Backup Codes Setup',
    'mfa_gen_backup_codes_desc' => 'Store the below list of codes in a safe place. When accessing the system you\'ll be able to use one of the codes as a second authentication mechanism.',
    'mfa_gen_backup_codes_download' => 'Download Codes',
    'mfa_gen_backup_codes_usage_warning' => 'Each code can only be used once',
    'mfa_gen_totp_title' => 'Mobile App Setup',
    'mfa_gen_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Scan the QR code below using your preferred authentication app to get started.',
    'mfa_gen_totp_verify_setup' => 'Verify Setup',
    'mfa_gen_totp_verify_setup_desc' => 'Verify that all is working by entering a code, generated within your authentication app, in the input box below:',
    'mfa_gen_totp_provide_code_here' => 'Provide your app generated code here',
    'mfa_verify_access' => 'Verify Access',
    'mfa_verify_access_desc' => 'Your user account requires you to confirm your identity via an additional level of verification before you\'re granted access. Verify using one of your configured methods to continue.',
    'mfa_verify_no_methods' => 'No Methods Configured',
    'mfa_verify_no_methods_desc' => 'No multi-factor authentication methods could be found for your account. You\'ll need to set up at least one method before you gain access.',
    'mfa_verify_use_totp' => 'Verify using a mobile app',
    'mfa_verify_use_backup_codes' => 'Verify using a backup code',
    'mfa_verify_backup_code' => 'Backup Code',
    'mfa_verify_backup_code_desc' => 'Enter one of your remaining backup codes below:',
    'mfa_verify_backup_code_enter_here' => 'Enter backup code here',
    'mfa_verify_totp_desc' => 'Enter the code, generated using your mobile app, below:',
    'mfa_setup_login_notification' => 'Multi-factor method configured, Please now login again using the configured method.',
];