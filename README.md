# wp-mail-form-submit
Enables to send Email via SMTP
Reference: https://codex.wordpress.org/Plugin_API/Action_Reference/phpmailer_init

In addition to installing and activating this plugin, the following code needs to be added in the wp-config.php file before /* That's all, stop editing! Happy publishing. */

````
//define( 'SMTP_USER',   'info@example.com' ); // Username to use for SMTP authentication$<br>
//define( 'SMTP_PASS',   'Password' ); // Password to use for SMTP authentication, my provider Zoho let's me create a separate app password providing an additional layer of security$<br>
//define( 'SMTP_HOST',   'smtp.zoho.eu' ); // The hostname of the mail server<br>
//define( 'SMTP_FROM',   'hello@example.com' ); // SMTP From email address<br>
//define( 'SMTP_NAME',   'Your Name' ); // SMTP From name<br>
//define( 'SMTP_PORT',   '587' ); // SMTP port number - likely to be 25, 465 or 587$<br>
//define( 'SMTP_SECURE', 'tls' ); // Encryption system to use - ssl or tls<br>
//define( 'SMTP_AUTH',    true ); // Use SMTP authentication (true|false)<br>
