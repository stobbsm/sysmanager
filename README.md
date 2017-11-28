# sysmanager
I'm tired of configuring BIND zones by hand, and want a system that will integrate everything
(smtp, imap and pop, for example) together easily. I'm not happy with available solutions such as
webmin or cpanel, and would prefer a totally free OSS solution.

sysmanager is being written as a laravel application for at least php 7.1.

It's being designed to work on Unix-like systems, including Linux and FreeBSD.

## Version
Just started development. Don't even have a version number right now. Let's call it "Extreme Alpha".

## Why
I'm tired of the complicated mess created by Webmin, and lock-in required when using other panels such as cpanel or Plesk.
There isn't a decent, modern web based system manager out there yet (cockpit is more of a monitor then a manager), and I want
one to simplify my job at my own business for system administration.

## Initial assumptions
1. Most web servers for small businesses run email, httpd, and dns services for clients. A client is usually confined to a single
server, sometimes having multiple clients on one large system.
2. Most web servers run a Unix-like operating system, such as FreeBSD, Ubuntu, RHEL (CentOS, Oracle Linux, Scientific Linux), etc.
3. Most DNS servers run BIND, and use a common zone based configuration in files (not in database).
4. Most httpd servers run Apache.
5. Most mail servers run Postfix and Dovecot in tandum to provide mail transfer and mail delivery (true of any server I've worked with).

## Milestones
1. PHP web interface that authenticates with PAM or Unix login.
  - Secure operation only. Shouldn't work at all if being used over plain http.
  - If privilege escalation is needed, system should support sudo or doas. Sudo first, as it's the usual default.
  - Audit installed packages and edit by hand defined configuration files.
  - Validate configuration files using built-in tools.
2. Ability to configure many internet server defaults.
  - Configure BIND, create zones, and make/modify entries.
  - Configure Apache httpd, including virtual hosts.
  - Configure Postfix and Dovecot to work together. Create, edit, remove email addresses.
3. Configure Apache httpd with virtual hosts, php-fpm, and SSL certs.
  - Integrate letsencrypt based certificate generation.
  
## Contact
If you have any issues, or want to contribute, go ahead and submit issues or pull requests.
