<?php

return [

    /*
     *--------------------------------------------------------------------------
     * Infotext Language Lines
     *--------------------------------------------------------------------------
     *
     * The following language lines are used by the ASH and admin views to
     * display specific event information
     *
     * This page may defer from PSR-2
     *
     */
    'DEFAULT' => [
        'name'        => 'Generic message',
        'description' => 'This classification has no information text yet.',
    ],

    'OPEN_SMARTINSTALL' => [
        'name'        => 'Open Cisco Smart Install',
        'description' => '
            This report identifies hosts that have the Cisco Smart Install feature running and are accessible to the Internet at large.
            This feature can be used to read or potentially modify a switch’s configuration.
            ',
    ],

    'OPEN_HADOOP_SERVER' => [
        'name'        => 'Open Hadoop Server',
        'description' => '
            This report identifies hosts that are running Hadoop and have either the NameNode or DataNode web interfaces running and accessible to the world on the Internet.
            At a minimum, this can allow for information-gathering against the target organization.
            In other instances, it may allow a threat actor to manipulate the Hadoop instance.
            ',
    ],

    'OPEN_VNC_SERVER' => [
        'name'        => 'Open VNC Server',
        'description' => '
            This report identifies hosts that have a VNC instance running on ports 5900-5905, 5800-5805, 6000, 17689 that are accessible on the IPv4 Internet. For IPv6 we currently scan 5900 and 5901 only.
            If improperly configured, VNC may allow remote access to a desktop in an unintended manner.
            ',
    ],

    'OPEN_SMB_SERVER' => [
        'name'        => 'Open SAMBA Server (SMB/CIFS)',
        'description' => 'This report identifies hosts that have an SMB instance running on port 445/TCP that are accessible on the Internet.
        This service should not be exposed to the Internet.',
    ],

    'OPEN_CWMP_SERVER' => [
        'name'        => 'Open CPE WAN Management Protocol (CWMP)',
        'description' => '
            This report identifies hosts that have the CPE WAN Management Protocol (CWMP) running and accessible on the Internet. It is unlikely this service needs to be exposed to the wider Internet. 
            Vulnerabilities in CWMP services can be abused by IoT botnets, such as Mirai. Note: this report identifies only accessible services, not necessarily vulnerable ones. 
            Nevertheless please block external access if you receive a report from us to reduce your potential attack surface – why wait for a vulnerability to be discovered?
            ',
    ],

    'OPEN_TELNET_SERVER' => [
        'name'        => 'Open Telnet Server',
        'description' => '
            This report identifies hosts that have a Telnet instance running on port 23/TCP (and others) that are accessible on the Internet.
            Telnet provides no encryption and may expose sensitive information or system credentials.
            ',
    ],

    'OPEN_LDAP_SERVER' => [
        'name'        => 'Open LDAP Server',
        'description' => '
            This report identifies hosts that have an LDAP instance running on port 389/UDP that are accessible on the Internet.
            These hosts are often Active Directory servers. In addition to allowing for an ~60x amplification vector, the data disclosed by the server could reveal large amounts of information about the network that the server resides on.
            ',
    ],

    'BOTNET_CONTROLLER' => [
        'name'        => 'Botnet controller',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'ISAKMP_VULNERABLE_DEVICE' => [
        'name'        => 'ISAKMP Vulnerable device',
        'description' => '
            <h2>What is an \'ISAKMP Vulnerable device\'?</h2>

            <p>  </p>

            <h2>Why would this be bad?</h2>

            <p>A vulnerability in Internet Key Exchange version 1 (IKEv1) packet processing code in Cisco IOS,
             Cisco IOS XE, and Cisco IOS XR Software could allow an unauthenticated, remote attacker to retrieve
              memory contents, which could lead to the disclosure of confidential information.</p>

            <h2>Recommended action</h2>

            <p>There are no workarounds for this vulnerability except for disabling IPSEC</p>

            <h2>Tips how to resolve this matter</h2>
            <ul>
            <li>Upgrade to a non-affected version of Cisco IOS</li>
            <li>implement an intrusion prevention system (IPS) or intrusion detection system (IDS) to help detect
            and prevent attacks that attempt to exploit this vulnerability.</li>
            </ul>

            <h2>Getting more information</h2>

            <a target=\'_blank\' href=\'https://sec.cloudapps.cisco.com/security/center/content/CiscoSecurityAdvisory/cisco-sa-20160916-ikev1\'>IKEv1 Information Disclosure Vulnerability in Multiple Cisco Products</a><br>

            ',
    ],

    'OPEN_RDP_SERVER' => [
        'name'        => 'Open RDP Server',
        'description' => '
            <h2>What is an \'Open RDP Server\'?</h2>

            <p>  </p>

            <h2>Why would this be bad?</h2>

            <p>This report identifies hosts that have Remote Desktop Protocol (RDP) service running and accessible to the world
             on the internet. Misconfigured RDP can allow miscreants access to the desktop of a vulnerable host and can
             also allow for information gathering on a target host as the SSL certificate used by RDP often contains
             the system\'s trivial hostname. </p>

            <p>Moreover, if your RDP server is targeted by brute force attacks, it could quickly reach its limit of two active sessions. If both sessions are occupied by unauthorized users, you will be unable to connect to the server yourself, effectively locking you out!</p>

            <h2>Recommended action</h2>

            <p>Disable public access to RDP, or make sure to detect and mitigate brute force attacks</p>

            <h2>Tips how to resolve this matter</h2>
            <ul>
            <li>Firewall port TCP/3389 and use a VPN to gain access to your internal network/li>
            <li>Firewall port TCP/3389 and only allow access from trusted IP addresses</li>
            </ul>

            <h2>Getting more information</h2>

            <a target=\'_blank\' href=\'https://learn.microsoft.com/en-us/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/cc743162(v=ws.11)\'>Remote Desktop Services and Windows Firewall</a><br>
            ',
    ],

    'BOTNET_INFECTION' => [
        'name'        => 'Botnet infection',
        'description' => "
             <h2>What is a 'Botnet infection'?</h2>

            <p>Botnet is a portmanteau derived from the words robot and network. Bot refers
            to a computer program that independently performs automated jobs. Such programs
            have many legitimate uses; search engines, for example, commonly use bots to
            catalogue web sites. Unfortunately, bots can also be programmed to perform
            malicious actions on systems. A botnet is a large group of infected computers
            connected to each other via the internet. Criminals administering the botnet
            make sure that the the programs get installed on as many systems as possible.
            The programs stay under the radar, generally running in the background, and are
            usually difficult for antivirus software to identify. Once a computer is infected,
            it can then become part of the botnet through the exploitation of vulnerabilities
            in software installed on the user's system. There are many avenues for this
            infection, such as visiting a (generally infected) web site, 'drive-by downloads'
            (when malware is downloaded and installed on the system without the user's knowledge),
            and even by simply clicking attachments or links in an email or merely connecting
            infected peripherals such as USB sticks or external hard drives to the system.</p>

            <h2>Why would this be bad?</h2>

            <p>The IP listed in the report (the system behind it using NAT), has been seen
            participating inside a botnet. With your system in communication with the
            botnet you can be 99,9% sure it has been compromised. It's hosting malware
            and is participating in a botnet.</p>

            <p>A botnet can be used to steal your personal data, send
            spam, hack into other computers and launch network attacks. In these examples
            you are the actual source of these attacks!</p>

            <h2>Recommended action</h2>

            <p>This issue needs to be resolved by removing the malicious software. In
            very persistent infections you will need to reinstall the system to get rid
            of the infection.</p>

            <h2>Tips to resolve this matter</h2>

            <p>If your system is a workstation or server:<ul>
            <li>Install an antivirus software and all its updates and run a full scan of your computer.
            It's recommended to try several scanners as not every scanner is able to detect a specific
            kind of malware.</li>
            <li>Scan the network for infected files. Don't forget to scan the backups, as well as any
            computers that may have been 'off' for the last little while because of employee vacation,
            etc.</li>
            <li>Users of any system with a botnet infection should change all their passwords as quickly
            as possible. This should include any passwords saved locally and used to access other systems
            and applications (including business applications, access to website administrator accounts,
            personal use of email and social media, etc.).</li>
            <li>If a computer is infected with malware, there is a significant chance that other malware is
            also present on the system. A clean reinstall will help prevent any other infections from
            having free access to the network.</li>
            </ul></p>

            <p>If your system is a website / hosting system:<ul>
            <li>If you suspect a user account has been compromised, change the password for the account immediately.</li>
            <li>Scan all hosted websites and temporary directories for suspicious files and remove them.
            Also check your process list for suspicious processes and kill them.</li>
            <li>Check your mail queues for outgoing SPAM and remove them for the queue.</li>
            <li>Install a rootkit and a virus scanner to ensure all malicious files have been removed.</li>
            </ul></p>

            <p>Once all malicious software has been removed make sure the server can't be compromised again
            by installing the latest updates for your operating system, control panel and hosted
            applications, including themes and plugins (i.e. Wordpress). If you do not upgrade them
            directly you will face a re-infection in a very short time!</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.bsi.bund.de/EN/Themen/Verbraucherinnen-und-Verbraucher/Cyber-Sicherheitslage/Methoden-der-Cyber-Kriminalitaet/Botnetze/botnet_node.html'>Botnets - consequences and protective actions</a><br>
            <a target='_blank' href='https://www.bsi.bund.de/EN/Themen/Verbraucherinnen-und-Verbraucher/Informationen-und-Empfehlungen/Cyber-Sicherheitsempfehlungen/Infizierte-Systeme-bereinigen/infizierte-systeme-bereinigen_node.html'>Cleaning up infected systems</a><br>

            ",
    ],

    'COMPROMISED_SERVER' => [
        'name'        => 'Compromised server',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'COMPROMISED_WEBSITE' => [
        'name'        => 'Compromised website',
        'description' => "
            <h2>What is a 'Compromised website'?</h2>

            A compromised website means that unauthorised (hacked) content has been placed on your site without your consent as a result of vulnerabilities in your site’s security.

            Malicious hackers are a devious bunch – always looking for new flaws, exploits and
            social engineering tricks that will allow them to compromise a website. With
            this in mind, it comes as no surprise that most website
            owners simply don’t know how their sites were compromised.

            <h2>Why would this be bad?</h2>

            <p>When your website is compromised, your website does not only contain (malicious) changes done by hackers
            but it also contains one or more security problems that allowed a hacker to gain access
            to your website in the first place. The compromised website provides a useful platform for
            a range of illicit activities. These activities include: </p>

            <ul>
            <li>Hosting malware – this may take the form of complex scripts that infect any visiting
            PC. Alternatively, well-crafted emails may have convinced a recipient to download a
            malware file that is hosted on the compromised site. In most cases the malware script
            is hidden in a subdirectory.</li>
            <li>Injected content. When hackers gain access to your website, they might try to
            inject malicious content into existing pages on your site. This often takes the form of
            malicious JavaScript injected directly into the site or into iframes. SQL injection is another significant threat</li>
            <li>URL redirect – thousands of compromised sites may perform simple redirects to a
            few master URLs. This is accomplished with a few lines of HTML code hidden in the
            compromised site, forcing the site to act as a 'front door' to the badware. The master
            URLs contain spam product pages or malware.</li>
            <li>Hosting phishing, spam pages, pornography – one or two static pages on the compromised
            site may advertise spam products (pharmaceuticals, replicas, enhancers, etc.), act as
            phishing pages for banks, PayPal, Gmail, etc., or offer explicit (sometimes illegal)
            content</li>
            <li>Vandalism – the aim of the compromise might be to embarrass the site owner or,
            alternatively, to make some political point – generally known as 'hacktivism'.</li>
            <li>Other content or activity – some fairly complex forms of site misuse have
            been recorded. For example a spam-sending script.</li>
            </ul>

            <h2>Recommended action</h2>

            <p>If your site has been hacked or infected with malware, you should act quickly to repair the
            damage. First, take your entire website offline. This might be unpopular, however if
            you consider the fact you might be leaking sensitive information or infecting the
            systems of your visitors, you want to act as quickly as possible.</p>

            <p>After you closed your website you will need to clean up the changed areas of your
            website.</p>

            <h2>Tips how to resolve this matter</h2>

            <p>The safest way to clean the hacked website is to delete it entirely and then upload
            a known clean version of it.</p>

            <ul>
            <li>Look for files that have been changed recently or at times your developers were
            not present and not updating on the website</li>
            <li>Look in temporary folders for (executable) scripts</li>
            </ul>

            <p>In addition, future risk of compromise can be reduced by following these basic tips: </p>

            <ul>
            <li>Keep software and all plug-ins updated. Regardless of whether you run popular content
            management software (e.g., WordPress, Joomla, Blogger) or custom software,
            make sure that software and all third party plug-ins or extensions are updated.
            Remove plug-ins and other add-ons that are not currently in use</li>
            <li>Use strong, varied passwords. WordPress login credentials, for example,
            should be different from FTP credentials. Never store passwords on your local
            machine.</li>
            <li>Regularly scan your PC for malware and your website for unauthorized changes</li>
            <li>Use appropriate file permissions on your web server.</li>
            <li>Research your options and make security a priority when choosing a web hosting
            provider. If you are not confident you can protect your site on your own, consider
            using an add-on security service from your hosting provider or a third party website
            security service.</li>
            </ul>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://web.dev/articles/hacked'>Google's help for webmasters of hacked websites</a><br>

            ",
    ],

    'DISTRIBUTION_WEBSITE' => [
        'name'        => 'Distribution website',
        'description' => "
            <h2>What is a 'Distribution Website'?</h2>

            <p>A distribution website is a site that is hosting malware for download.
            These are often download links embedded into malicious docs' or executables' code for example.
            Compromised websites are widely used for this purpose. </p>

            <h2>Why would this be bad?</h2>

            <p>If you are intentionally hosting malware on your server, cease doing so and and remove the malware, this is illegal. This can lead to your site being
            flagged as suspicious by search engines, causing accessibility issues for visitors. If a hacker is hosting
            malware on your site, then it is likely compromised.</p>

            <h2>Recommended action</h2>

            <p>Remove any maliciously hosted files and check for signs of compromise. Clean up any infected files.</p>

            <h2>Tips how to resolve this matter</h2>
            <ul>
            <li>If this is a CMS (WordPress, Drupal, Joomla etc), check the add-ons/plug-ins and update where possible.</li>
            <li>If this is a standard website, check for signs of infection or unknown links on web-pages and take the necessary action.</li>
            <li>Once the issue(s) have been resolved, begin to request re-evaluations of your site from search engines.</li>
            </ul>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://developers.google.com/search/blog/2007/08/malware-reviews-via-webmaster-tools'>Google Webmaster tools for infected sites</a><br>

            ",
    ],

    'FEEDBACK_LOOP' => [
        'name'        => 'Feedback loop (FBL) message',
        'description' => "
                <h2>What is A Feedback Loop?</h2>

                <p>In general, a feedback loop (FBL) or complaint feedback loop is
                an inter-organizational form of feedback, by which an internet service provider (ISP) forwards
                email complaints originating from their users, back to the senders' organizations. Generally,
                ISPs expect that these transactions are processed as unsubscribe requests and that the sender
                researches the nature of the request to reduce the incidence of such complaints.</p>

                <p>The most common method for ISPs to receive users' complaints is by placing a 'report spam' button
                on their webmail pages or in their email client. Or, the user may send the email to the ISP
                Postmaster. In rare cases, these feedback loops may not be based on user reports, but for example,
                on automated virus detection or similar mechanisms.</p>

                <p>Some ISPs remove the email address of its customer before returning the message to the sender,
                for privacy or legal reasons. This means it is important for senders to utilize some method
                other than an email address within a message, in order to identify the recipient.</p>

                <h2>Why is a Feedback Loop important?</h2>

                <p>As of May 2008, there were 12 FBLs in place at several of the world's largest ISPs including
                AOL, Hotmail and Yahoo. Feedback loops have become an email industry standard. The data
                returned as part of the feedback loop system is extremely valuable in a couple of ways:</p>

                <p> - The first is for list hygiene: Members who complain through a feedback loop can be
                unsubscribed, thereby reducing future complaints. Some may call this list-washing, but
                it's just common sense. Even if someone previously opted in to receive messages, if the
                user complains, the first thing you should do is cease mailing to that user.</p>

                <p> - The second use of FBLs is to analyze the complaints. There is a wealth of data in who
                complains and what they complain about. Regardless of whether you believe the complaints are
                unfounded, if they complained, they were dissatisfied. Smart marketers aim to avoid dissatisfied
                customers or prospective customers.</p>

                <h2>What can I do?</h2>

                <p>Campaigns, subject lines and \"from\" addresses can be monitored to ensure that campaign
                elements are working well. You can identify areas that need improvement. If a particular mailing,
                list, or list segment produces too many complaints, it bears further investigation. Many
                complaints are caused by a failure to meet expectations. As an example, there may be a high
                complaint rate among new subscribers. This can be caused by subscribers not getting what
                they thought they signed up for or by a long delay between sign-up and the first mailing.</p>

                <p>To further complicate matters, most ISPs have complaint rate thresholds above which your
                messages may be filtered or blocked. Unfortunately, most ISPs don't publish these
                thresholds, which vary by ISP. Monitoring the FBL data will improve your email practices,
                while ensuring complaint rates do not exceed internet Service Provider (ISP) thresholds.</p>

                <h2>But I am not sending these emails</h2>

                <p>If you receive a high number of FBL complaints on messages that you did not send yourself
                you should consider the host being reported on (e.g. the IP) to be compromised as these emails
                did originate from your system. In these cases your advised to shutdown the mail server and
                clean the system and its mail queues before taking it online again.</p>

                <h2>What is questionable about Feedback Loops?</h2>

                <p>The spam button brings some very imprecise functionality. Automatic unsubscribe is an
                example. For years, end users have been told not to trust email unsubscribe links, to avoid
                confirming that the message was received and opened. So, many users hit the spam button as
                a way of unsubscribing. Users have to trust their ISP to not get into agreements with
                spammers, in the strict sense of the latter term.</p>

                <p>The spam button may also be used in error, as a means of expressing disagreement with the
                message content, or as a means of expressing antipathy towards the message sender. Using
                the same button for multiple conditions implies guesswork in interpreting the data.</p>

                <p>The bottom line, however, is that the benefits of FBLs far outweigh the cons and that the
                receiver of the Feedback loop must decide on the correct action to take.</p>
            ",
    ],

    'FREAK_VULNERABLE_SERVER' => [
        'name'        => 'FREAK Vulnerable Server',
        'description' => "

            <h2>What is a 'FREAK Vulnerable Server'?</h2>

            <p>Servers that accept RSA_EXPORT cipher suites put their users at risk of the FREAK
            attack. Using internet-wide scanning, we have been performing daily tests of all
            HTTPS servers at public IP addresses to determine whether they allow this weakened
            encryption.</p>

            <h2>Why would this be bad?</h2>

            <p>Servers that accept RSA_EXPORT cipher suites put their users at risk from the FREAK
            attack. The FREAK attack is possible when a vulnerable browser connects to a
            susceptible web server; a server that accepts “export-grade” encryption.</p>

            <p>It allows an attacker to intercept HTTPS connections between vulnerable clients and
            servers and force them to use weakened encryption, which the attacker can break to
            steal or manipulate sensitive data. </p>

            <p>The factoring of such 512-bit export keys can be done with a cluster of EC2 virtual
            servers, and can be done in about 7.5 hours for $104 in EC2 time. The attacker
            factors the RSA modulus to recover the corresponding RSA decryption key. When the
            client encrypts the 'pre-master secret' to the server, the attacker can now decrypt
            it to recover the TLS 'master secret'. From here on out, the attacker sees plaintext
            and can inject anything it wants.</p>

            <h2>Recommended action</h2>

            <p>You should immediately disable support for TLS export cipher suites. While you’re
            at it, you should also disable other cipher suites that are known to be insecure
            and enable forward secrecy. For instructions on how to secure popular HTTPS server
            software, we recommend Mozilla’s security configuration guide and their SSL configuration
            generator. We also recommend testing your configuration with the Qualys SSL Labs
            SSL Server Test tool</p>

            <h2>Tips how to resolve this matter</h2>

            <p>With apache server add the following to your SSL section(s):

            SSLCipherSuite ALL:!aNULL:!eNULL:!EXPORT:!DES:!RC4:!MD5:!PSK</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://freakattack.com/'>Tracking the FREAK Attack</a><br>
            <a target='_blank' href='https://www.ssllabs.com/ssltest/'>SSL Server Testtool.</a><br>
            <a target='_blank' href='https://wiki.mozilla.org/Security/Server_Side_TLS#Recommended_configurations'>Mozilla’s security configuration guide</a><br>
            <a target='_blank' href='https://ssl-config.mozilla.org/'>SSL Configuration Generator</a><br>
            ",
    ],

    'HARVESTING' => [
        'name'        => 'Harvesting',
        'description' => "

            <h2>What is 'Harvesting'?</h2>

            <p>Email harvesting is the process of obtaining lists of email addresses or accounts
            using various methods for use in bulk email or other purposes.
            For example: sending SPAM or gaining access to systems.</p>

            <p>A common method is the use of special software known as 'harvesting bots'
            or 'harvesters', which spider web pages, mailing list archives, internet
            forums and other online sources to obtain email addresses from public data.</p>

            <p>Another method - known as a directory harvest attack - works
            by connecting to mail servers and guessing an email address using common
            usernames in email addresses at that domain.</p>

            <h2>Why would this be bad?</h2>

            <p>Sending unsolicited email to recipients gathered by means of harvesting
            is illegal and not allowed by our terms of service.</p>

            <h2>Recommended action</h2>

            <p>If you are in fact knowingly harvesting email addresses, we recommend
            you to stop doing this to prevent further escalation.</p>

            <h2>Tips to resolve this matter</h2>

            <p>If this is not the case, make sure your server and your hosted website(s)
            have not been compromised.</p>

            <h2>Getting more information</h2>

            ",
    ],

    'NOTICE_AND_TAKEDOWN_REQUEST' => [
        'name'        => 'Notice and Take Down request',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'OPEN_CHARGEN_SERVER' => [
        'name'        => 'Open Chargen Server',
        'description' => "
            <h2>What is an 'Open Chargen server'?</h2>

            <p>The Character Generator Protocol (CHARGEN) is a service that is intended
            for testing, debugging, and measurement purposes. The protocol is rarely
            used, as its design flaws allow ready misuse. A host may connect to a
            server that supports the Character Generator Protocol on either
            Transmission Control Protocol (TCP) or User Datagram Protocol (UDP) port
            number 19. Upon opening a TCP connection, the server starts sending
            arbitrary characters to the connecting host and continues until the host
            closes the connection. In the UDP implementation of the protocol, the
            server sends a UDP datagram containing a random number (between 0 and 512)
            of characters every time it receives a datagram from the connecting host.
            Any data received by the server is discarded.</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>There is no reason to have this CHARGEN service enabled on a public facing
            interface. You should either stop the service or make sure it is not reachable
            from the internet by using RFC1918 spaces or a firewall.</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://dnsamplificationattacks.blogspot.nl/2013/07/source-port-chargen-destination-port.html'>Amplification Attacks Observer</a><br>
            ",
    ],

    'OPEN_DNS_RESOLVER' => [
        'name'        => 'Open DNS Resolver',
        'description' => "
            <h2>What is an 'Open DNS Resolver'?</h2>

            <p>An open DNS server is a DNS server which is willing to resolve
            recursive DNS queries for anyone on the internet.</p>

            <p>When a DNS server resolves a recursive DNS query, it tracks down
            information about a domain name hosted on some other DNS server
            somewhere else on the internet (a recursive process involving
            several other DNS servers in the DNS hierarchy).</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>In most cases the computer has installed a DNS service as an dependency
            as resolving is needed on that computer. However it is only required to do
            local resolving, thus the added 'external access' to this service is
            unneeded. In such cases we recommend either changing the configuration
            of your DNS service or to firewall port 53 for external hosts.</p>

            <p>If you are running a DNS resolver for multiple computers, you should consider
            limiting access to the required group of computer or implement safeguards
            like 'Response Rate Limiting'(DNS-RRL) to prevent a DNS Amplification Attack.</p>

            <h2>Tips to resolve this matter</h2>

            <h3>Firewalling the DNS Service</h3>

            <p>To block incoming remote requests you will need to filter UDP/port 53. Your
            service might also be listening on TCP/port 53, however only UDP services
            are used in DNS Amplification Attacks. </p>

            <h3>Bind 9.x Authoritative</h3>

            <p>For BIND 9.x authoritative servers, apply the following global options:
            <br>
            <pre>
              options {
                  recursion no;
                  additional-from-cache no;
              };
            </pre>
            <br>
            Beginning with BIND versions 9.4 and later, most configurations would default to a closed resolver. Those running earlier versions should upgrade if possible.<br>
            </p>

            <p><h3>Bind 9.x Caching</h3>

            For BIND 9.x caching servers, additionally create access control lists and use 'views' to explicitly permit a limited set of source addresses from your trusted network issue queries to your caching server:
            <pre>
              # example only, replace 192.0.2.0/24 a list of your CIDR blocks
              acl 'trusted' {
                  192.0.2.0/24;
              };

              options {
                  recursion no;
                  additional-from-cache no;
                  allow-query { none; };
              };

              view 'trusted' in {
                  match-clients { trusted; };
                  allow-query { trusted; };
                  recursion yes;
                  additional-from-cache yes;
              };
            </pre></p>

            <h3>Windows Systems</h3>

            <p>Please see the following Microsoft TechNet examples:<br>
            <br>
            <a target='_blank' href='https://learn.microsoft.com/en-us/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/cc771738(v=ws.11)'>Disabling recursion on Windows Server 2008 R2 systems</a><br>
            <a target='_blank' href='https://learn.microsoft.com/en-us/previous-versions/windows/it-pro/windows-server-2003/cc787602(v=ws.10)'>Disabling recursion on older Windows Server systems</a><br>
            <a target='_blank' href='https://learn.microsoft.com/en-us/previous-versions/windows/it-pro/windows-server-2003/cc773370(v=ws.10)'>Acting as a non-recursive forwarder</a> (See the 'Notes' section under the 'Using the Windows interface' instructions)<br>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.cisa.gov/sites/default/files/publications/DNS-recursion033006.pdf'>The Continuing Denial of Service Threat Posed by DNS Recursion (v2.0)</a><br>
            <a target='_blank' href='https://www.cymru.com/Documents/secure-bind-template.html'>http://www.cymru.com/Documents/secure-bind-template.html</a><br>
            <a target='_blank' href='https://itp.cdn.icann.org/en/files/security-and-stability-advisory-committee-ssac-reports/dns-ddos-advisory-31mar06-en.pdf'>SSAC Advisory SAC008 DNS Distributed Denial of Service (DDoS) Attacks</a><br>
            <a target='_blank' href='https://www.secureworks.com/research/dns-amplification'>DNS Amplification Variation Used in Recent DDoS Attacks</a><br>
            <a target='_blank' href='https://itp.cdn.icann.org/en/files/security-and-stability-advisory-committee-ssac-reports/sac-065-en.pdf'>SSAC Advisory on DDoS Attacks Leveraging DNS Infrastructure</a><br>

            ",
    ],

    'OPEN_MDNS_SERVICE' => [
        'name'        => 'Open mDNS Service',
        'description' => "
            <h2>What is an 'Open mDNS Service'?</h2>

            <p>An Open mDNS Service is a mDNS server which is willing to resolve
            recursive DNS queries for anyone on the internet.</p>

            <p>When a DNS server resolves a recursive DNS query, it tracks down
            information about a domain name hosted on some other DNS server
            somewhere else on the internet (a recursive process involving
            several other DNS servers in the DNS hierarchy).</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>In most cases the computer has installed a DNS service as a dependency
            as resolving is needed on that computer. However it is only required to do
            local resolving, thus the added 'external access' to this service is
            unneeded. In such cases we recommend either changing the configuration
            of your DNS service or to firewall port 5353 for external hosts.</p>

            <p>If you are running a DNS resolver for multiple computers, then you should consider
            limiting access to the required group of computer or implement safeguards
            like 'Response Rate Limiting'(DNS-RRL) to prevent a DNS Amplification Attack.</p>

            <h2>Tips to resolve this matter</h2>

            <h3>Firewalling the DNS Service</h3>

            <p>To block incoming remote requests you will need to filter UDP/port 5353. You
            service might also be listening on TCP/port 5353, however only UDP services
            are used in DNS Amplification Attacks. </p>

            ",
    ],

    'OPEN_IMPI_SERVER' => [
        'name'        => 'Open IPMI Server',
        'description' => "
            <h2>What is an 'Open IPMI Server'?</h2>

            <p>IPMI defines a set of interfaces used by system administrators for
            out-of-band management of computer systems and monitoring of their operations.
            For example, IPMI provides a way to manage a computer that may be powered off
            or otherwise unresponsive by using a network connection to the hardware
            rather than to an operating system or login shell.</p>

            <p>IPMI is integrated on most server systems under many different names like
            iRMC, ILOM, BMC, iDRAC, etc. Each vendor has their own implementation of IPMI,
            but the base is the same for each of them: It allows access to hardware outside
            your operating system (and its locally installed firewall!).</p>

            <h2>Why would this be bad?</h2>

            <p>IPMI is the base of most of the Out Of Band / Lights Out management suites and
            is implemented by the server's Baseboard Management Controller (BMC). The BMC
            has near complete access and control of the server's resources, including, but
            not limited to, memory, power, and storage. Anyone that can control your BMC
            (via IPMI), can control your server.</p>

            <p>IPMI instances in general are known to contain a variety of vulnerabilities,
            some more serious than other. In short; you really do not want to expose IPMI
            to the internet. </p>

            <h2>Recommended action</h2>

            <p>Implement a separate network for hosting these Out-Of-Band management entries and
            place them in a RFC1918 (non public IP) space in combination with a VPN or add a
            hardware firewall in front of this network that filters access.</p>

            <p>Some IPMI implementations do offer some kind of what they call firewalling, however
            we haven't come across an implementation that actually fully protects the IPMI
            interface from outside influence.</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='http://fish2.com/ipmi/'>Dan Farmer on IPMI security issues</a><br>
            <a target='_blank' href='https://www.cisa.gov/news-events/alerts/2013/07/26/risks-using-intelligent-platform-management-interface-ipmi'>US-CERT alert TA13-207A</a><br>

            ",
    ],

    'OPEN_MEMCACHED_SERVER' => [
        'name'        => 'Open MemCached Server',
        'description' => "
            <h2>What is an 'Open Memcached Server'?</h2>

            <p>Memcached is an in-memory key-value store for small chunks of
            arbitrary data (strings, objects) from results of database calls,
            API calls, or page rendering. It is intended for use in speeding up
            dynamic web applications by alleviating database load</p>

            <h2>Why would this be bad?</h2>

            <p>The problem is actually pretty simple - memcached is built for speed,
            not for security, and it does nothing to secure itself. As far as
            memcache's authors are concerned, this isn't a problem... it just
            means you have to secure it yourself. The problem is that people don't
            do that.</p>

            <p>Since it's not secure, this means that random people on the internet
            can discover your memcache, read things from it, and even write into
            it. The kinds of security problems that could create are limited only
            by your imagination and the kinds of data you put into your cache.</p>

            <p>Let's assume I have an insecure memcache instance running at my.example.com.
            I can log into that server, and connect to my memcache instance with telnet:

            [dbock@my.example ~]$ telnet localhost 11211
            Trying 127.0.0.1...
            Connected to my.example.com (127.0.0.1).
            Escape character is '^]'.
            add catchphrase 0 0 29
            intelligence for sale or rent

            and memcache returns : STORED

            so far, so good. We just stuck a piece of data into our memcache. but guess
            what? ANYONE, ANYWHERE on the internet can now get that piece of data. Log
            out of your machine and try this from a remote host:

            [dbock@my.desktopmachine] ~]$ telnet my.example.com 11211
            Trying 192.0.32.10...
            Connected to my.example.com (192.0.32.10).
            Escape character is '^]'.
            get catchphrase

            and memcache responds:

            VALUE catchphrase 0 29
            intelligence for sale or rent
            END

            Ouch. We just connected to our server and pulled out our super-secret catch
            phrase. We don't want or need memcache to be listening to the outside world.</p>

            <h2>Recommended action</h2>

            <p>If you are dealing with a multi-server environment, the solution will be more
            complicated than this - you'll want a firewall, a private network, and other
            complexity to separate the 'outside world' from your 'inside world'. If you
            are dealing with one server though, the solution is simple - just don't
            listen to your ethernet connection.</p>

            <p>Mysql has an option to specify what address it listens to... so rather than
            listen to everything, we ony want to listen to the localhost - 127.0.0.1

            On my CentOS box, I can do this by simply editing the file: /etc/sysconfig/memcached
            and changing the line

            OPTIONS=''

            to

            OPTIONS='-l 127.0.0.1'

            and restart memcache with

            sudo /sbin/service memcached restart

            repeat the steps above and you'll find that outside the server, telnet can't connect anymore.</p>

            <p>The memcached settings file might be someplace else on other linux distributions, depending
            on their file conventions... The memcache installation for your platform should give
            you a clue where this is, as this file is also needed to specify the amount of
            memory in the cache, etc.</p>

            <h2>Tips to resolve this matter</h2>

            <p></p>

            <h2>Getting more information</h2>

            ",
    ],

    'OPEN_MSSQL_SERVER' => [
        'name'        => 'Open Microsoft SQL Server',
        'description' => "
            <h2>What is an 'Open Microsoft SQL Server'?</h2>

            <p>Microsoft SQL Server is a relational database management system developed
            by Microsoft. As a database, it is a software product whose primary function
            is to store and retrieve data as requested by other software applications,
            be it those on the same computer or those running on another computer across
            a network (including the internet). There are at least a dozen different
            editions of Microsoft SQL Server aimed at different audiences and for
            workloads ranging from small single-machine applications to large
            internet-facing applications with many concurrent users. Its primary query
            languages are T-SQL and ANSI SQL.</p>

            <h2>Why would this be bad?</h2>

            <p>This service has the potential to expose information about a client's network
            on which this service is accessible and the service itself can be used in UDP
            amplification attacks. In addition it opens up your system to zero-day attacks or
            worm/virus infections that exploit a vulnerability in Windows to gain access
            to your system.</p>

            <h2>Recommended action</h2>

            <p>Either use the Windows Firewall or preferably: an external firewall to prevent
            access to Netbios (and other Windows ports). The Windows Firewall has a nasty
            way of trying to think for itself and will, for example, automatically start to open
            ports if you install something that uses Netbios. In all cases the
            administrator is unaware of these open ports.</p>

            <h2>Tips to resolve this matter</h2>

            <p>By default, Microsoft Windows enables the Windows Firewall, which closes port
            1433 to prevent internet computers from connecting to a default instance of SQL
            Server on your computer. Connections to the default instance using TCP/IP are not
            possible unless you reopen port 1433. If you need access from remote machines to
            your Microsoft SQL server, then only allow the required hosts and close down
            world wide access to the SQL server.</p>

            <p>Ports used by Microsoft are: TCP/1433, UDP/1434, TCP/1434, TCP/4022, TCP/135, TCP/2383.
            In addition the SQL Server uses a randomly assigned dynamic port for named instances! </p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://learn.microsoft.com/en-us/sql/database-engine/configure-windows/configure-a-windows-firewall-for-database-engine-access?view=sql-server-ver16'>Configure a Windows Firewall for Database Engine Access</a><br>

            ",
    ],

    'OPEN_MONGODB_SERVER' => [
        'name'        => 'Open MongoDB Server',
        'description' => "
            <h2>What is an 'Open MongoDB Server'?</h2>

            <p>MongoDB is a cross-platform document-oriented database. Classified as a NoSQL
            database, MongoDB eschews the traditional table-based relational database
            structure in favor of JSON-like documents with dynamic schemas (MongoDB calls
            the format BSON), making the integration of data in certain types of
            applications easier and faster.</p>

            <h2>Why would this be bad?</h2>

            <p>Your system runs a MongoDB NoSQL database (see www.mongodb.org for more
            information) which is accessible on the internet. While authentication
            is available for MongoDB, in many instances this authentication is not enabled.</p>

            <p>This enables an attacker, without circumventing any security measures, to get
            read-and-write access to these databases, many of which contain sensitive
            customer data or live backends of Web shops</p>

            <h2>Recommended action</h2>

            <p>Either bind this service only to non-public facing connections or add a firewall
            to block the port MongoDB is running on.</p>

            <h2>Tips to resolve this matter</h2>

            <p>The MongoDB service default configuration enables local access only. Its main
            configuration file is usually found at:

            Linux: /etc/mongodb.conf

            BSD: /usr/local/etc/mongodb.conf

            Windows: no default path; usually assigned on setup</p>

            <p>Many precompiled packages of MongoDB already ship with a default configuration
            that binds the service after its installation only to localhost:

            bindIp: 127.0.0.1
            port: 27017</p>

            <p>This allows access from services running on the same physical or virtual host
            and denies everything else. No other security feature like traffic encryption
            or access control is enabled by default. This configuration is acceptable, if
            the use-case scenario includes only services that need to access MongoDB from
            the same host as the database service.</p>

            <p>However, a common setup and scalable solution for most internet services is to
            have a database server running on one physical machine, while the services
            using this database service are (often virtualized) running on another machine.
            In this case, the easiest solution is to comment out the flag 'bind.ip =
            127.0.0.1' or to remove it completely, which defaults to accepting all network
            connections to the database. If access is possible from untrusted machines
            (e.g., from the internet) outside the trusted network, it is crucial to also
            set up transfer encryption and proper access control.</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.mongodb.com/resources/products/capabilities/best-practices'>7 Best Practices For MongoDB Security (2020)</a><br>

            ",
    ],

    'OPEN_NATPMP_SERVER' => [
        'name'        => 'Open NAT_PMP Server',
        'description' => "
            <h2>What is an 'Open NAT-PMP Server'?</h2>

            <p>The NAT Port Mapping Protocol (NAT-PMP) is a network protocol for establishing
            network address translation (NAT) settings and port forwarding configurations
            automatically without user effort. The protocol automatically determines the
            external IPv4 address of a NAT gateway, and provides means for an application
            to communicate the parameters for communication to peers.</p>

            <h2>Why would this be bad?</h2>

            <p>Many NAT-PMP devices are incorrectly configured, allowing them to field requests
            received on external network interfaces or map forwarding routes to addresses
            other than that of the requesting host, making them potentially vulnerable to
            information disclosure and malicious port mapping requests. The responses from
            Open NAT-PMP Servers represent two types of vulnerabilities; malicious port
            mapping manipulation and information disclosure about the NAT-PMP device. These
            can be broken down into 5 specific issues, outlined below:</p>

            - Interception of Internal NAT Traffic (2.5% of responding devices)
            - Interception of External Traffic (86% of responding devices)
            - Access to Internal NAT Client Services (88% of responding devices)
            - DoS Against Host Services (88% of responding devices)
            - Information Disclosure about the NAT-PMP device (100% of responding devices)

            <p>In short: A remote, unauthenticated attacker may be able to gather information
            about a NAT device, manipulate its port mapping, intercept its private and public
            traffic, access its private client services, and block its host services.</p>

            <h2>Recommended action</h2>

            <p>Developers and administrators implementing NAT-PMP should exercise care to ensure
            that devices are configured securely, specifically that</p>

            - the LAN and WAN interfaces are correctly assigned,
            - NAT-PMP requests are only accepted on internal interfaces, and
            - port mappings are only opened for the requesting internal IP address.

            <h2>Tips to resolve this matter</h2>

            - Deploy firewall rules to block untrusted hosts from being able to access port 5351/udp.
            - Consider disabling NAT-PMP on the device if it is not absolutely necessary.

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.kb.cert.org/vuls/id/184540'>Incorrect implementation of NAT-PMP in multiple devices</a><br>
            <a target='_blank' href='https://www.rapid7.com/blog/post/2014/10/21/r7-2014-17-nat-pmp-implementation-and-configuration-vulnerabilities/'>NAT-PMP Implementation and Configuration Vulnerabilities</a>


            ",
    ],

    'OPEN_NTP_SERVER' => [
        'name'        => 'Open NTP Server',
        'description' => "
            <h2>What is an 'Open NTP Server'?</h2>

            <p>Network Time Protocol (NTP) is a networking protocol for clock
            synchronization between computer systems over packet-switched,
            variable-latency data networks. In operation since before 1985, NTP
            is one of the oldest internet protocols in current use.</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet 'from' a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>In most cases the computer has installed a NTP service as an dependency
            as timekeeping is needed on that computer. However it is only required in order to do
            local timekeeping, thus the added 'external access' to this service is
            unnecessary. In such cases we recommend either changing the configuration
            of your NTP service or to firewall port 123 for external hosts.</p>

            <p>If you are running an NTP Server for multiple computers, then consider
            limiting access to the required group or computer or implement safeguards 
            to prevent a DNS Amplification Attack.</p>


            <h2>Tips to resolve this matter</h2>

            <h3>UNIX/Linux ntpd</h3>

            <p>The following configuration is for a UNIX/Linux machine to act as simply
            an NTP client and never to allow NTP queries to it except from the loopback
            address:</p>

            <pre># by default act only as a basic NTP client
            restrict -4 default nomodify nopeer noquery notrap
            restrict -6 default nomodify nopeer noquery notrap
            # allow NTP messages from the loopback address, useful for debugging
            restrict 127.0.0.1
            restrict ::1
            # server(s) we time sync to
            server 192.0.2.1
            server 2001:DB8::1
            server time.example.net
            </pre>

            <p>You can use your standard host firewall filtering capabilities to limit
            who the NTP process can talk to. If you're using Linux and the host is acting
            as an NTP client only, the following iptables rules could be adapted to shield
            your NTP listener from unwanted remote hosts.</p>

            <pre>-A INPUT -s 0/0 -d 0/0 -p udp --source-port 123:123 -m state --state ESTABLISHED -j ACCEPT
            -A OUTPUT -s 0/0 -d 0/0 -p udp --destination-port 123:123 -m state --state NEW,ESTABLISHED -j ACCEPT
            </pre>

            <p>Authentication with the reference NTP software on UNIX can be done using
            symmetric key encryption, much like in Cisco IOS and Juniper JUNOS, using
            MD5. However, a public key-based approach called 'AutoKey' is also
            available, which is generally be considered to be even more secure. For
            more information about these options, see the
            <a href='http://www.eecis.udel.edu/~mills/ntp/html/authopt.html' target='_blank'>NTP authentication
            options page</a> and the <a href='http://support.ntp.org/bin/view/Support/ConfiguringAutokey' target='_blank'>
            Configuring Autokey documentation</a>.</p>


            <h2>Getting more information</h2>

            <a target='_blank' href='https://github.com/team-cymru/network-security-templates/tree/master/Secure-NTP-Templates'>Examples in securing a NTP service</a>
            <a target='_blank' href='https://christian-rossow.de/publications/amplification-ndss2014.pdf'>Amplification Hell: Revisiting Network Protocols for DDoS Abuse</a>

            ",
    ],

    'OPEN_NETBIOS_SERVER' => [
        'name'        => 'Open Netbios Server',
        'description' => "
            <h2>What is an 'Open Netbios server'?</h2>

            <p>NetBIOS is a transport protocol that Microsoft Windows systems use to share
            resources. For example, if a PC running Windows wants to connect to and access a
            share on a file server, it probably uses NetBIOS. There have been some changes in
            recent days however, that allow this connection without it. SMB - the method used
            to access file and printer shares - can also run independently of NetBIOS over TCP
            ports 139 and 445. Both of these approaches however, tend to increase the attack
            surface of a network.</p>

            <h2>Why would this be bad?</h2>

            <p>The ports that that are open to the internet are UDP/137, UDP/138, and TCP/139.
            Unfortunately, the most popular attacker target is NetBIOS and against these
            ports.</p>

            <p>Once an attacker discovers an active port 139 on a device, they can run NBSTAT to
            begin the very important first step of an attack—footprinting. With the NBSTAT
            command, they can obtain some or all of the following information:</p>

            <ul>
            <li>Computer name</li>
            <li>Contents of the remote name cache, including IP addresses</li>
            <li>A list of local NetBIOS names</li>
            <li>A list of names resolved by broadcast or via WINS</li>
            <li>Contents of the session table with the destination IP addresses</li>
            </ul>

            <p>With this information, the attacker has information about the OS, services, and major
            applications running on the system. They also have private IP addresses that the LAN/WAN
            and security engineers have tried to hide behind NAT. And that is not all: The
            lists provided by running NBSTAT also includes user ID's.</p>

            <p>If null sessions are allowed against IPC$, it isn’t difficult to take the next step
            and connect to the target device. This connection provides a list of all available
            shares.</p>

            <p>These services have the potential to be used in amplification attacks by criminals
            that wish to perform denial of service attacks. In addition it opens up your system
            to zero-day attacks or worm/virus infections that exploit a vulnerability in Windows to
            gain access to your system.</p>

            <h2>Recommended action</h2>

            <p>Either use the Windows Firewall or preferably: an external firewall to prevent access
            to Netbios (and other Windows ports). The Windows Firewall has a tendency to try
            to think for itself and may for example: automatically start to open ports if you install
            something that uses Netbios. In all cases the administrator is unaware of these open
            ports.</p>

            <p>If you really need NETBIOS open for the entire world, then ensure the exposed
            system(s) are hardened by:</p>
            <ul>
            <li>Disabling the system’s ability to support null sessions</li>
            <li>Using very strong passwords for the local administrator accounts</li>
            <li>Using very strong passwords for shares, assuming you absolutely have to have shares on exposed systems</li>
            <li>Keeping the Guest account disabled</li>
            <li>Under no circumstances allowing access to the root of a hard drive via a share</li>
            <li>Under no circumstances sharing the Windows or WinNT directories or any directory located beneath them</li>
            </ul>

            <h2>Tips to resolve this matter</h2>

            <p>In a privileged DOS box run the following commands:</p>

            netsh advfirewall firewall add rule name='NetBIOS UDP Port 137' dir=in action=deny protocol=UDP localport=137<br>
            netsh advfirewall firewall add rule name='NetBIOS UDP Port 137' dir=out action=deny protocol=UDP localport=137<br>
            netsh advfirewall firewall add rule name='NetBIOS UDP Port 138' dir=in action=deny protocol=UDP localport=138<br>
            netsh advfirewall firewall add rule name='NetBIOS UDP Port 138' dir=out action=deny protocol=UDP localport=138<br>
            netsh advfirewall firewall add rule name='NetBIOS TCP Port 139' dir=in action=deny protocol=TCP localport=139<br>
            netsh advfirewall firewall add rule name='NetBIOS TCP Port 139' dir=out action=deny protocol=TCP localport=139<br>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://learn.microsoft.com/en-us/previous-versions/windows/it-pro/windows-2000-server/cc940063(v=technet.10)'>Microsoft NetBIOS Over TCP/IP guide</a>

            ",
    ],

    'OPEN_QOTD_SERVER' => [
        'name'        => 'Open QOTD Server',
        'description' => "
            <h2>What is an 'Open QOTD Server'?</h2>

            <p>The Quote Of The Day (QOTD) service is a member of the internet protocol
            suite, defined in RFC 865. As indicated there, the QOTD concept predated
            the specification, when QOTD was used by mainframe sysadmins to broadcast
            a daily quote on request by a user. It was then formally codified both
            for prior purposes as well as for testing and measurement purposes in RFC 865.</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>There is no reason to have this QOTD service enabled on a public facing
            interface. You should either stop the service or make sure it is not reachable
            from the internet by using RFC1918 spaces or a firewall.</p>

            <h2>Tips to resolve this matter</h2>

            <h3>Unix/Linux</h3>

            <p>To disable QOTD when started from inetd:</p>

            <ul>
            <li>Edit the /etc/inetd.conf (or equivalent) file.</li>
            <li>Locate the line that controls the qotd daemon.</li>
            <li>Type a # at the beginning of the line to comment out the daemon.</li>
            <li>Restart inetd.</li>
            </ul>

            <h3>Windows</h3>

            <p>Set the following registry keys to 0:</p>
            <pre>
            HKLM\System\CurrentControlSet\Services\SimpTCP\Parameters\EnableTcpQotd
            HKLM\System\CurrentControlSet\Services\SimpTCP\Parameters\EnableUdpQotd
            </pre>

            <p>Then launch cmd.exe and type the following commands to restart the service:</p>
            <pre>
            net stop simptcp
            net start simptcp
            </pre>

            ",
    ],

    'OPEN_REDIS_SERVER' => [
        'name'        => 'Open REDIS Server',
        'description' => "
            <h2>What is an 'Open REDIS Server'?</h2>

            <p>Redis clients communicate with the Redis server using a protocol called
            RESP (REdis Serialization Protocol). While the protocol was designed
            specifically for Redis, it can be used for other client-server software
            projects.</p>

            <h2>Why would this be bad?</h2>

            <p>Redis is designed to be accessed by trusted clients inside trusted environments.
            This means that usually it is not a good idea to expose the Redis instance
            directly to the internet or, in general, to an environment where untrusted
            clients can directly access the Redis TCP port or UNIX socket.</p>

            <p>For instance, in the common context of a web application implemented using
            Redis as a database, cache, or messaging system, the clients inside the
            frontend (web side) of the application will query Redis to generate pages or
            to perform operations requested or triggered by the web application user.</p>

            <p>In this case, the web application mediates access between Redis and untrusted
            clients (the user browsers accessing the web application). This is a specific
            example, but, in general, untrusted access to Redis should always be mediated
            by a layer implementing ACLs, validating user input, and deciding what
            operations to perform against the Redis instance. In general, Redis is not
            optimized for maximum security but for maximum performance and simplicity.</p>

            <h2>Recommended action</h2>

            <p>Access to the Redis port should be denied to everybody but trusted clients in
            the network, so the servers running Redis should be directly accessible only
            by the computers implementing the application using Redis.</p>

            <p>In the common case of a single computer directly exposed to the internet, such
            as a virtualized Linux instance (Linode, EC2, ...), the Redis port should be
            firewalled to prevent access from the outside. Clients will still be able to
            access Redis using the loopback interface.</p>

            <p></p>

            <h2>Tips to resolve this matter</h2>

            <h3>Firewalling remote access</h3>

            <p>The simplest way is to block the default port TCP/6379 (or whatever port is listed
            in the report) and only allow IP's that should actually have access to this service.</p>

            <h3>Blocking remote access</h3>

            <p>It is possible to bind Redis to a single interface by adding a line like the following to the redis.conf file:</p>

            <pre>
                bind 127.0.0.1
            </pre>

            <h3>Enabling Authentication feature</h3>

            <p>While Redis does not try to implement Access Control, it provides a tiny layer
            of authentication that is optionally turned on editing the redis.conf file. When
            the authorization layer is enabled, Redis will refuse any query by unauthenticated
            clients. A client can authenticate itself by sending the AUTH command followed by
            the password.</p>

            <p>The password is set by the system administrator in clear text inside the redis.conf
            file. It should be long enough to prevent brute force attacks for two reasons:</p>

            <ul>
            <li>Redis is very fast at serving queries. Many passwords per second can be tested by an external client.</li>
            <li>The Redis password is stored inside the redis.conf file and inside the client configuration, so it does not need to be remembered by the system administrator, and thus it can be very long.</li>
            </ul>

            <p>The goal of the authentication layer is to optionally provide a layer of redundancy.
            If firewalling or any other system implemented to protect Redis from external attackers
            fail, an external client will still not be able to access the Redis instance without
            knowledge of the authentication password. The AUTH command, like every other Redis
            command, is sent unencrypted, so it does not protect against an attacker that has
            enough access to the network to perform eavesdropping.</p>


            <h2>Getting more information</h2>

            <a target='_blank' href='https://redis.io/docs/latest/operate/oss_and_stack/management/security/'>Redis Security advisory</a><br>

            ",
    ],

    'OPEN_SNMP_SERVER' => [
        'name'        => 'Open SNMP Server',
        'description' => "
            <h2>What is an 'Open SNMP Server'?</h2>

            <p>Simple Network Management Protocol (SNMP) is a popular protocol for network
            management. It is used for collecting information from, and configuring,
            network devices, such as servers, printers, hubs, switches, and routers on an
            internet Protocol (IP) network.</p>

            <h2>Why would this be bad?</h2>

            <p>Open SNMP Servers can be used to collect privileged information from the
            system or even to write new 'settings' to the system if not correctly
            configured.</p>

            <p>Running an open (UDP) service is not bad on its own and
            is often a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server() send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <ul>
            <li>Use firewalling to block UDP/161 entirely or only allow the hosts that
            need access to this service</li>
            <li>Update the SNMP configuration to use a different community string than public. Something
            strong like ThisIsMyCommunityString</li>
            <li>Update the SNMP configuration to use a host based ACL's in combination with either the 'public'
            community or a string thats more 'secure'</li>
            </ul>

            <h2>Tips to resolve this matter</h2>

            <h3>Windows</h3>
            <ul>
            <li>Click on Windows Key > Administrative Tools > Services.</li>
            <li>Right click on SNMP Service and click on Properties.</li>
            <li>Click on the Security tab.</li>
            <li>Type your randomized 8 - 10 character connection string. Be sure to make it Read Only, not Read Write.</li>
            <li>Click on Add.</li>
            <li>Click on OK.</li>
            <li>Finally restart the SNMP service</li>
            </ul>

            <h3>Linux</h3>
            <p>Edit the SNMP configuration file, which is usually located at: /etc/snmp/snmpd.conf<p>

            <p>Change/Modify line(s) as follows:</p>
            <p>Find the following Line:</p>
            <pre>com2sec notConfigUser  default       public</pre>
            Replace with (make sure you replace 192.168.0.0/24 with your network/subnet) the following lines:
            <pre>com2sec local     localhost           public
            com2sec mynetwork 192.168.0.0/24      public</pre>
            <p>Scroll down a bit and change :</p>
            <p>Find Lines:</p>
            <pre>group   notConfigGroup v1           notConfigUser
            group   notConfigGroup v2c           notConfigUser</pre>
            <p>Replace with:</p>
            <pre>group MyRWGroup v1         local
            group MyRWGroup v2c        local
            group MyRWGroup usm        local
            group MyROGroup v1         mynetwork
            group MyROGroup v2c        mynetwork
            group MyROGroup usm        mynetwork</pre>
            <p>Again scroll down a bit and locate the following line:</p>
            <p>Find line:</p>
            <pre>view    systemview     included      system</pre>
            <p>Replace with:</p>
            <pre>view all    included  .1                               80</pre>
            <p>Again scroll down a bit and change the following line:</p>
            <p>Find line:</p>
            <pre>access  notConfigGroup ''      any       noauth    exact  systemview none none</pre>
            <p>Replace with:</p>
            <pre>access MyROGroup ''      any       noauth    exact  all    none   none<br>access MyRWGroup ''      any       noauth    exact  all    all    none</pre>
            <p>Scroll down a bit and change the following lines:</p>
            <p>Find lines:</p>
            <pre>syslocation Unknown (edit /etc/snmp/snmpd.conf)
            syscontact Root <root@localhost> (configure /etc/snmp/snmp.local.conf)</root@localhost></pre>
            <b>Replace with (make sure you supply appropriate values), for example:</b>
            <pre>syslocation Linux (RH3_UP2), Home Linux Router.<br>syscontact YourNameHere &lt;you@example.com&gt;</pre>

            <p>restart your snmp server and test it</p>

            <h2>Getting more information</h2>

            ",
    ],

    'OPEN_SSDP_SERVER' => [
        'name'        => 'Open SSDP Server',
        'description' => "
            <h2>What is an 'Open SSDP Server'?</h2>

            <p>The Simple Service Discovery Protocol (SSDP) is a network protocol
            based on the internet Protocol Suite for advertisement and discovery of
            network services and presence information. It accomplishes this without
            assistance of any server-based configuration mechanisms, such as the Dynamic
            Host Configuration Protocol (DHCP) or the Domain Name System (DNS), and
            without special static configuration of a network host. SSDP is the basis
            of the discovery protocol of Universal Plug and Play (UPnP) and is
            intended for use in residential or small office environments.</p>

            <h2>Why would this be bad?</h2>

            <p>Running an open (UDP) service is not bad on its own and is often
            a required dependency when installing a system.
            Unfortunately, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet from a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>There is no reason to have this CHARGEN service enabled on a public facing
            interface. You should either stop the service or make sure it is not reachable
            from the internet by using RFC1918 spaces or a firewall.</p>

            ",
    ],

    'OPEN_TFTP_SERVER' => [
        'name'        => 'Open TFTP Server',
        'description' => "
            <h2>What is a 'Open TFTP Server'?</h2>

            <p>Trivial File Transfer Protocol (TFTP) is a simple File Transfer Protocol
            which allows a client to get from or put a file onto a remote host. One of
            its primary uses is in the early stages of nodes booting from a local area
            network. TFTP has been used for this application because it is very simple
            to implement.</p>

            <h2>Why would this be bad?</h2>

            <p>TFTP has no authentication or encryption. This makes it easy for someone
            to download all your configurations or even upload malicious firmware!</p>

            <h2>Recommended action</h2>

            <p>There is no reason to have this TFTP service enabled on a public facing
            interface. You should either stop the service or make sure it is not reachable
            from the internet by using RFC1918 spaces or a firewall.</p>

            ",
    ],

    'PHISING_WEBSITE' => [
        'name'        => 'Phishing website',
        'description' => "
            <h2>What is a 'Phishing website'?</h2>

            <p>A Phishing website is the attempt to acquire sensitive information such as
            usernames, passwords, and credit card details (and sometimes, indirectly, money)
            by masquerading as a trustworthy entity in an electronic communication.
            Communications purporting to be from popular social web sites, auction sites, banks,
            online payment processors or IT administrators are commonly used to lure the unsuspecting
            public. Phishing emails may contain links to websites that are infected with malware. </p>

            <h2>Why would this be bad?</h2>

            <p>A Phishing website is usually the result of a compromised website or user
            credentials of said website.</p>

            <p>When your website is compromised, it not only contains changes done by hackers
            but it also contains one or more security problems that allowed a hacker to gain access
            in the first place. The compromised website provides a useful platform for
            a range of illicit activities.</p>

            <h2>Recommended action</h2>

            <p>If your site has been hacked or infected with malware, you should act quickly to repair the
            damage. First, take your entire website offline. This is pretty unpopular, however if
            you consider the fact you might be leaking sensitive information or infecting the
            systems of your visitors, you want to act as quickly as possible.</p>

            <p>After taking your website offline you will need to clean up the changed areas of your
            website.</p>


            <h2>Tips how to resolve this matter</h2>

            <p>The safest way to clean the hacked website is to delete it entirely and then upload
            a known clean version of it.</p>

            <ul>
            <li>Look for files that have been changed recently or on times your developers are
            closed and not placing updates on the website<li>
            <li>Look in temporary folders for (executable) scripts</li>
            </ul>

            <p>In addition, future risk of compromise can be reduced by following these basic tips: </p>

            <ul>
            <li>Keep software and all plug-ins updated regardless whether you run popular content
            management software (e.g., WordPress, Joomla, Blogger) or custom software,
            make sure that software and all third party plug-ins or extensions are updated.
            Remove plug-ins or other add-ons that are not currently in use</li>
            <li>Use strong, varied passwords. WordPress login credentials, for example,
            should be different from FTP credentials. Never store passwords on your local
            machine.</li>
            <li>Regularly scan your PC for malware and your website for unauthorized changes</li>
            <li>Use appropriate file permissions on your web server.</li>
            <li>Research your options and make security a priority when choosing a web hosting
            provider. If you are not confident you can protect your site on your own, consider
            using an add-on security service from your hosting provider or a third party website
            security service.</li>
            </ul>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://web.dev/articles/hacked'>Google's help for webmasters of hacked websites</a><br>
            <a target='_blank' href='https://www.antiphishing.org/'>The site antiphishing.org has recommendations on dealing with hacked sites.</a><br>

            ",
    ],

    'RBL_LISTED' => [
        'name'        => 'RBL Listed',
        'description' => "
            <h2>What does 'RBL Listed' mean?</h2>

            <p>Your IP address has been listed on a RBL (real-time block list).</p>

            <p>This indicates that your server has probably been sending out a
            high volume of unsolicited email, your computer or server has been
            misconfigured or has been compromised</p>

            <h2>Why would this be bad?</h2>

            <p>Depending on the problem, your server can potentially be used by malicious
            users on the internet to send spam or do harm to others while using your
            server as a proxy.</p>

            <p>If your server remains listed on this RBL you will have trouble
            sending email to lots of recipients.</p>

            <h2>Recommended action</h2>

            <p>In the case of a misconfiguration it could be the case
            that your SMTP server is accepting email from untrusted sources and you
            will need to reconfigure your SMTP server.</p>

            <p>In the case of a compromise your server might have been hacked or infected
            by a trojan.</p>

            <p>If you have been accidentally listed and have resolved the issue, you
            can request a delisting using the URL included in the ticket report. Do
            not attempt to request a delisting at a RBL without knowing for sure you
            have resolved the issue. If you request a delisting without solving the
            problem you might end up permanently listed on that RBL!</p>

            <h2>Tips to resolve this matter</h2>

            <p>Run a virus and/or malware scanner on the system to look for infections</p>

            <p>You also might want to check and resolve listings on other RBL's,
            using a RBL checker such as Anti-abuse multi-rbl-check</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='http://www.anti-abuse.org/multi-rbl-check'>Anti-abuse multi-rbl-check</a><br>

            ",
    ],

    'SPAM' => [
        'name'        => 'SPAM',
        'description' => "
            <h2>What is 'Spam'?</h2>

            <p>A spam report indicates that one or more emails sent from
            your server have been flagged by an automated system or
            by an end recipient as spam or unsolicited email.</p>

            <h2>Why would this be bad?</h2>

            <p>Sending spam or unsolicited email is illegal and not allowed
            by our terms of service.</p>

            <h2>Recommended action</h2>

            <p>If you are indeed sending bulk email, please ensure you follow
            these bulk email rules to prevent your email from being flagged
            as spam:</p>

            <ul>
                <li>1) Your recipients have opted in for the service.</li>
                <li>2) Each email sent contains a functioning opt-out link.</li>
            </ul>

            <p>If you are not sending bulk email, then check your website and DNS
            for signs of compromise. </p>

            <h2>Tips to resolve this matter</h2>

            <p>If the server should not be sending much or any email, this spam
            report could indicate that your server has been compromised.</p>

            <p>The best way to solve the problem is to stop your mail server(MTA)
            and investigate the mail queues for SPAM messages. When you find an
            example you can open it to identify its source. By stopping the MTA
            you will prevent SPAM from being sent out. After solving the problem
            you must clean your mail queue from all these SPAM messages before
            starting your MTA again.</p>

            <h2>Getting more information</h2>

            <p>If you are unable to or unsure how to resolve this issue,
            please contact our abuse department for support.</p>

            ",
    ],

    'SPAMTRAP' => [
        'name'        => 'SPAM Trap',
        'description' => "
            <h2>What is a SPAM Trap?</h2>

            <p>A SPAM Trap is a honeypot used to collect spam.</p>

            <h2>Why would sending email to these this be bad?</h2>

            <p>SPAM Traps are generally email addresses that are made to receive spam.
            SPAM Traps are often hidden from view on websites, so that they are only harvested from automated scans.
            Since no legit email is ever sent to this address, any emails that are sent to the Spam-Traps are
            immediately considered unsolicited.</p>

            <h2>Recommended action</h2>

            <p>Clean up your mailing lists. Configure your 'Hard & Soft' Bounce values to
            correctly remove recipients when needed.</p>

            <p>If you are not sending bulk email, then check your website and DNS
            for signs of compromise. </p>

            <h2>Tips how to resolve this matter</h2>

            <p>When cleaning your mailing lists there are some thing that you can already do:</p>

            <ul>
                    <li>Remove malformed domain names</li>
                    <li>Remove role accounts (sales@example.com, accounts@example.net)</li>
                    <li>Adhere to the unsubscribe process</li>
                    <li>Never buy a mailing list</li>
                    <li>Use double opt-in</li>
            </ul>

            <p>The best way to solve the problem is to stop your mailserver(MTA)
            and investigate the mail queues for SPAM messages. When you find an
            example you can open it to identify its source. By stopping the MTA
            you will prevent SPAM from being sent out. After solving the problem
            you must clean your mail queue from all these SPAM messages before
            starting your MTA again.</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.techtarget.com/searchsecurity/definition/spam-trap'>What is a spam trap and how do you avoid them?</a><br>

            ",
    ],

    'SSLV3_VULNERABLE_SERVER' => [
        'name'        => 'SSLv3 Vulnerable Server',
        'description' => "
            <h2>What is a 'SSLv3 Vulnerable Server'?</h2>

            <p>POODLE (the 'Padding Oracle On Downgraded Legacy Encryption' attack) is the name for an
            OpenSSL bug. This bug impacts almost every system using any kind of encryption which is
            based on OpenSSL.</p>

            <h2>Why would this be bad?</h2>

            <p>The whole issue ultimately hinges on the site supporting SSLv3 and the attacker being
            able to downgrade the client to use SSLv3. These protocol downgrade attacks are old news
            and are still surfacing to cause problems. By simulating a failure during the negotiation
            process, an attacker can force a browser and a server to renegotiate using an older
            protocol, right back down to SSLv3. As the POODLE vulnerability is actually in the
            protocol itself, this isn't something that can be patched out like ShellShock and
            HeartBleed.</p>

            <p>The attack, specifically against the SSLv3 protocol, allows an attacker to obtain the
            plaintext of certain parts of an SSL connection, such as the cookie. Similar to BEAST, but
            more practical to carry out. Every server that is not patched for this bug is
            vulnerable for such attacks.</p>

            <h2>Recommended action</h2>

            <p>The easiest and most robust solution to POODLE is to disable SSLv3 support on your server.
            This does bring with it a couple of caveats though. For web traffic, there are some legacy
            systems out there that won't be able to connect with anything other than SSLv3. For example,
            systems using IE6 and Windows XP installations without SP3, will no longer be able to
            communicate with any site that ditches SSLv3.</p>

            <h2>Tips how to resolve this matter</h2>

            <h3>Nginx</h3>

            <p>ssl_protocols TLSv1 TLSv1.1 TLSv1.2 TLSv1.3;

            Similar to the Apache config above, you will get TLSv1.0+ support and no SSL. You can check the config and restart.
            IMPORTANT: TLS1.0 and 1.1 have been deprecated since March 2021!

            sudo nginx -t

            sudo service nginx restart</p>

            <h3>IIS</h3>

            <p>This one requires some registry tweaks and a server reboot but still isn’t all that bad.
            Microsoft have a support article with the required information, but all you need to do is
            modify/create a registry DWORD value.

            HKey_Local_Machine\System\CurrentControlSet\Control\SecurityProviders \SCHANNEL\Protocols

            Inside protocols you will most likely have an SSL 2.0 key already, so create SSL 3.0
            alongside it if needed. Under that create a Server key and inside there a DWORD value called
            Enabled with value 0. Once that’s done, reboot the server for the changes to take effect.</p>

            <h3>Apache</h3>

            <p>To disable SSLv3 on your Apache server you can configure it using the following.

            SSLProtocol All -SSLv2 -SSLv3

            This will give you support for TLSv1.0, TLSv1.1, TLSv1.2 and TLSv1.3, but explicitly removes support for SSLv2 and SSLv3. Check the config and then restart Apache.
            IMPORTANT: TLS1.0 and 1.1 have been deprecated since March 2021!

            apachectl configtest

            sudo service apache2 restart</p>


            <p>After patching all the service(s) and confirming the bug is nog longer present on
            your system its highly recommended to get a NEW SSL certificate (including key, csr, etc)
            as it might have been comprised. Most SSL suppliers will issue such a certificate for free</p>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://disablesslv3.com/'>Disable SSLv3 - a community-powered step-by-step tutorial</a><br>

            ",
    ],

    'SPAMVERTISED_WEBSITE' => [
        'name'        => 'Spamvertised web site',
        'description' => "
            <h2>What is a 'Spamvertised web site'?</h2>

            <p>A site that is being 'spamvertised' means that the site is being included as a link in spam emails.</p>

            <h2>Why is my website in Spam emails?</h2>

            <p>This is generally the case when your site (or DNS) has been compromised in some way.
            Spammers or hackers often add a redirect from your site to their Spam site.
            Spammers would prefer to use your website for their links, as most likely their site is already known as bad. </p>

            <h2>Recommended action</h2>

            <p>Check your website and DNS for signs of compromise. </p>

            <h2>Tips on how to resolve this</h2>

            <ul>
            <li>If this is a CMS (WordPress, Drupal, Joomla etc), check the add-ons/plug-ins and update where possible.</li>
            <li>If this is a standard website, check for signs of infection or unknown links on webpages and take the necessary action.</li>
            <li>If infection is found and resolved, begin to delist your URL on the relevant lists.</li>
            </ul>

            <h2>Getting more information</h2>

            <a target='_blank' href='https://wordpress.org/plugins/sucuri-scanner/'>WordPress Security scanner (Sucuri)</a><br>

            ",
    ],

    'OPEN_ELASTICSEARCH_SERVER' => [
        'name'        => 'Open ElasticSearch Server',
        'description' => "
            <h2>What is an 'Open ElasticSearch Server'?</h2>

            <p>Elasticsearch is a search server based on Lucene. It provides a distributed,
            multitenant-capable full-text search engine with a RESTful web interface and
            schema-free JSON documents.</p>

            <h2>Why would this be bad?</h2>

            <p>Your system has an ElasticSearch instance running (see www.elastic.co for
            more information) which is accessible on the internet. On its own, ElasticSearch
            does not support authentication or restrict access to the datastore, so it is
            possible that any entity that can access the ElasticSearch instance may have
            complete control.</p>

            <p>This is especially problematic if this instance has dynamic scripting running.
            The scripting engine can be abused to launch a denial of service attack.</p>

            <h2>Recommended action</h2>

            <p>Either bind this service only to non-public facing connections or add a firewall
            to block the port ElasticSearch is running on.</p>

            <h2>Tips to resolve this matter</h2>

            <p>Read the ElasticSearch documentation on how to properly secure your ElasticSearch
            instance.

            <h2>Getting more information</h2>

            <a target='_blank' href='https://www.elastic.co/guide/en/elasticsearch/reference/current/secure-cluster.html#preventing-unauthorized-access'>Secure the Elastic Stack</a><br>
            ",
    ],

    'COPYRIGHT_INFRINGEMENT' => [
        'name'        => 'Copyright Infringement',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'POSSIBLE_DDOS_SENDING_SERVER' => [
        'name'        => 'Possible DDoS sending Server',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'DDOS_SENDING_SERVER' => [
        'name'        => 'DDoS sending Server',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'OPEN_PORTMAP_SERVER' => [
        'name'        => 'Open Portmapper Server',
        'description' => "
            <h2>What is an 'Open Portmapper Server'?</h2>

            <p>The port mapper (rpc.portmap or rpcbind) is a remote procedure call (RPC) service
            running on TCP or UDP port 111 that runs on servers to provide information about
            running services and their corresponding port numbers, such as NFS.</p>

            <h2>Why would this be bad?</h2>

            <p>Once an attacker discovers an active port 111 on a device, they can use this information
            to learn about running services, which is a very important first step for a hacking attack.</p>

            <p>Additionally, hackers have also found this feature useful in performing a
            special type of DDoS attack called an 'Amplification Attack'.</p>

            <p>The attacker sends a packet apparently from the intended victim to some
            server on the internet that will reply immediately. Because the source
            IP address is forged, the remote internet server replies and sends data
            to the victim.</p>

            <p>That has two effects: the actual source of the attack is hidden and is
            very hard to trace, and, if many internet servers are used, an attack
            can consist of an overwhelming number of packets hitting a victim from
            all over the world.</p>

            <p>But what makes reflection attacks really powerful is when they are
            also amplified: when a small forged packet elicits a large reply from
            the server(s). In that case, an attacker can send a small
            packet 'from' a forged source IP address and have the server(s) send large replies to the victim.</p>

            <p>Amplification attacks like that result in an attacker turning a small
            amount of bandwidth coming from a small number of machines into a massive
            traffic load hitting a victim from around the internet.</p>

            <h2>Recommended action</h2>

            <p>We recommend you to only allow RPC calls from trusted sources. This
            can be achieved by dropping all traffic for RPC services on your local
            firewall and only allowing connections from trusted IP addresses.
            ",
    ],

    'MALWARE_INFECTION' => [
        'name'        => 'Malware infection',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'COMMENT_SPAM' => [
        'name'        => 'Comment Spam',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'HACK_ATTACK' => [
        'name'        => 'Hack attack',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'INFORMATIONAL' => [
        'name'        => 'Informational',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'LOGIN_ATTACK' => [
        'name'        => 'Login attack',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'DICTIONARY_ATTACK' => [
        'name'        => 'Dictionary attack',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'RULE_BREAKER' => [
        'name'        => 'Rule Breaker',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'HAVE_I_BEEN_PWNED_DOMAIN_FOUND' => [
        'name'        => 'Have I been pwned breach',
        'description' => '
            This classification has no information text yet.
            ',
    ],

    'OPEN_AFP_SERVER' => [
        'name'        => 'Open Apple Filing Protocol (AFP) Server',
        'description' => '
            <h2>What is a \'Open AFP Server\'?</h2>

            <p>Apple Filing Protocol (formerly AppleTalk Filing Protocol) is a transport protocol
            that Apple\'s macOS uses to share resources. For example, if a macOS system wants
            to access a shared directory on another system, it can use AFP. AFPv3 uses TCP
            port 548. The protocol can also support other options including changing user passwords.</p>

            <h2>Why would this be bad?</h2>

            <p>This report identifies hosts that have Apple Filing Protocol (AFP) Service running and accessible to the world
             on the internet. AFP can allow for information gathering on a target host as information about the host is contained in
             the protocol messages.</p>

            <p>In addition, you risk being targeted by brute force attacks.</p>

            <h2>Recommended action</h2>

            <p>Disable public access to AFP.</p>

            <h2>Tips how to resolve this matter</h2>
            <ul>
            <li>Firewall port TCP/548 and use AFP over SSH to gain access to your system/li>
            </ul>

            ',
    ],

    'OPEN_FTP_SERVER' => [
        'name'        => 'Open FTP Server',
        'description' => '
            This report identifies hosts that have an FTP instance running on port 21/TCP that’s accessible on the Internet.
            FTP provides no encryption (unless FTPS is utilized) and may expose sensitive information or system credentials.
            ',
    ],

    'OPEN_HTTP_SERVER' => [
        'name'        => 'Open HTTP Server',
        'description' => '
            This report identifies hosts that have the Hypertext Transfer Protocol (HTTP) running on some port and are accessible on the Internet.
            This is just a population/external surface exposure scan. We are not highlighting any vulnerabilities in this report, just the fact there is an HTTP server running. This allows you to track your daily asset exposure. 
            ',
    ],

    'OPEN_RSYNC_SERVER' => [
        'name'        => 'Open rsync Server',
        'description' => '
            This report identifies hosts that have the rsync service running, bound to a network port (873/tcp, 8873/tcp) and accessible on the Internet without a password. 
            ',
    ],
    'OPEN_PROXY_SERVER' => [
        'name'        => 'Accessible proxy server',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'OPEN_UBIQUITI_SERVER' => [
        'name'        => 'Accessible Ubiquiti server',
        'description' => '
            This report identifies hosts that have the Ubiquiti Discovery service running and accessible on the Internet.
            These services have the potential to be used in amplification attacks by criminals that wish to perform denial of service attacks. In addition, they expose a large amount of information about the system running the service.
            The service is tested by sending a UDP packet containing a four-byte payload to UDP port 10001.
            ',
    ],
    'BRUTE_FORCE_ATTACK' => [
        'name'        => 'Brute Force attack',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'AMPLICATION_DDOS_VICTIM' => [
        'name'        => 'DDOS amplification victim',
        'description' => "
        
            <h2>Honeypot Amplification DDoS Events Report</h2>
            
            <p>This report contains information about honeypot observed amplification DDoS events. If you are seeing this report, it 
            means that your IP was DDoSed using other hosts/services as reflectors.</p>
            
            <p>This category of DDoS attacks utilizes UDP-based, open, amplifiable services to reflect packets to a victim, by 
            spoofing the source IP address of the packets sent by the amplifier to the victim’s IP address.</p>
            
            <p>Depending on the protocol and type of open services abused, the size of the original packet content sent by the attacker 
            can be amplified in the service response multiple times (even by a factor of hundreds), flooding the victim with packets 
            and enabling DDoS.</p>
            
            <p>Honeypots that emulate open and amplifiable services can be used to detect this kind of abuse. However, as the source 
            of these attacks is spoofed to the victim address, it is only possible to report on victims being abused, not on the true 
            source of the DDoS.</p>
            
            <p>For more insight into how amplifiable DDoS attacks work, check out this 
            <a target='_blank' href='https://christian-rossow.de/articles/Amplification_DDoS.php'>writeup and paper by Christian Rossow</a>,&nbsp;as 
            well as the <a target='_blank' href='https://www.us-cert.gov/ncas/alerts/TA14-017A'>US-CERT Alert (TA14-017A)</a>.</p>
            
            <p>This report contains information about the IP that was attacked (set to src_ip) and the port that was abused on the 
            honeypot to try to make it attack your IP (set to dst_port).</p>
    
            ",
    ],
    'ACCESSIBLE_ADB_REPORT' => [
        'name'        => 'Accessible Android Debug Bridge',
        'description' => '
            This report identifies hosts that have the Android Debug Bridge (ADB) running, bound to a network port (5555/tcp) and accessible on the Internet.
            Make sure to block external access to ADB as it is often abused by malware and other threat actors. If you receive a report from us, check for signs of compromise!
            ',
    ],
    'ACCESSIBLE_APPLE_REMOTE_DESKTOP_ARD_REPORT' => [
        'name'        => 'Accessible Apple Remote Desktop',
        'description' => '
            This report identifies hosts that have the Apple Remote Desktop service on port 3283/udp running and accessible on the Internet.  
            This can be abused in an amplification attack and it also leaks information about the system that it is running on.
            ',
    ],
    'CAIDA_IP_SPOOFER_REPORT' => [
        'name'        => 'CAIDA IP spoofer',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'DRONE_BOTNET_DRONE_REPORT' => [
        'name'        => 'Botnet Drone',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'NETCORE_NETIS_ROUTER_VULNERABILITY_SCAN_REPORT' => [
        'name'        => 'Vulnerable Netcore/Netis router ',
        'description' => '
            This report identifies hosts that are running a vulnerable or backdoored Netis Router with service open (port 53413/udp) and accessible from the Internet.
            ',
    ],
    'OPEN_DB2_DISCOVERY_SERVICE_REPORT' => [
        'name'        => 'Accessible DB2 discovery service ',
        'description' => '
            This report identifies hosts that have the DB2 Discovery Service running and accessible on the Internet.
            This service has the potential to expose information about a client’s network on which this service is accessible, and the service itself can be used in UDP amplification attacks.
            ',
    ],
    'OPEN_MQTT' => [
        'name'        => 'Accessible MQTT service ',
        'description' => '
            This report identifies all hosts that have an accessible MQTT (Message Queuing Telemetry Transport) service enabled on port 1883/TCP and on port 8883/TCP. 
            In particular it identifies MQTT instances that enable anonymous access, which can be abused to leak data. 
            Additionally, unlike the TLS version of the service typically on port 8883/TCP the MQTT service on port 1883/TCP is unencrypted, so even password protected instances can lead to data leakage.
            ',
    ],
    'OPEN_COAP' => [
        'name'        => 'Accessible COAP service',
        'description' => '
            This report identifies devices that have an accessible CoAP (Constrained Application Protocol) on port 5683/UDP. 
            CoAP is a specialized web transfer protocol for use with constrained nodes and constrained networks. 
            As described in RFC 7252, it is designed for machine-to-machine (M2M) applications such as smart energy and building automation.
            
            Exposed CoAP services can be used as reflectors in DDoS amplification attacks. 
            They can also leak information (including authentication credentials), and in some cases may potentially allow for remote manipulation of exposed devices and associated services.
            ',
    ],
    'OPEN_IPP' => [
        'name'        => 'Accessible IPP service',
        'description' => '
            This report identifies devices that have an open IPP (Internet Printing Protocol) service enabled on port 631/TCP.  
            This means anyone can connect to these devices (printers) anonymously. An attacker can abuse such devices for information disclosure including potential access to and manipulation of print jobs. 
            Remote code execution vulnerabilities have also been uncovered in the past on various printer models and could potentially be exploited as well.
            ',
    ],
    'OPEN_RADMIN' => [
        'name'        => 'Accessible RAdmin service',
        'description' => '
            This report identifies hosts that have a Radmin service running on port 4899/TCP and accessible from the Internet. 
            As with all remote access tools, care should be taken to make sure the service is configured in a secure manner and the security implications of making it accessible from anywhere on the Internet taken into account.
            ',
    ],
    'OPEN_RDPEUDP' => [
        'name'        => 'Accessible Microsoft Remote Desktop Protocol service',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'OPEN_BASIC_AUTH_SERVICE' => [
        'name'        => 'Accessible Basic Authentication service',
        'description' => '
            This concerns HTTP hosts that implement Basic Authentication in plain HTTP. 
            This is a security risk as credentials are transmitted in cleartext, without encryption. Enforce the use of HTTPS instead. 
            ',
    ],
    'DARKNET' => [
        'name'        => 'Service contacting darknets',
        'description' => '
            This classification has no information text yet.
            ',
    ],
    'eicc(stix2)' => [
        'name'        => 'ei.cc',
        'description' => '
            ESET threat intelligence has detected that the host listed is playing the role of Command & Control centre for a botnet. More details may be available on the technical details page.
            ',
    ],

    'eibotnet(stix2)' => [
        'name'        => 'ei.botnet',
        'description' => '
            ESET threat intelligence has detected that the host is playing a part in a botnet. More details may be available on the technical details page.
            ',
    ],

    'eidomainsv2(stix2)' => [
        'name'        => 'ei.domains',
        'description' => '
            ESET threat intelligence has detected that the host is being used to spread malware on the domain listed. More details may be available on the technical details page.
            ',
    ],

    'eiurls(stix2)' => [
        'name'        => 'ei.urls',
        'description' => '
            ESET threat intelligence has detected that the host is being used to spread malware on the URL listed. More details may be available on the technical details page.
            ',
    ],

    'VULNERABLE_SMTP_SERVER' => [
        'name'          => 'Vulnerable SMTP server',
        'description'   => "
            <h2>What is a 'Vulnerable SMTP server'?</h2>
            
            <p>It was discovered that the host, a mail sending server, is running a vulnerable SMTP software.</p>

            <h2>Why would this be bad?</h2>
        
            <p>Hackers might exploit the vulnerable SMTP server, resulting in potentially getting the SMTP server compromised.</p>

            <h2>Recommended action</h2>

            <p>Update the SMTP software to the latest version.</p>
            ",
    ],

    'OPEN_AMQP' => [
        'name'          => 'Open Advanced Message Queuing Protocol (AMQP) server',
        'description'   => '
            <h2>What is a AMQP server?</h2>

            <p>AMQP is an open internet protocol for business messaging. It is often also used for IoT device management.</p>

            <h2>Why would this be bad?</h2>

            <p>Even though it does allow for encrypted communications via TLS, many instances on the internet are configured for cleartext authentication and message sharing. Furthermore in the past there have been multiple vulnerabilities discovered in AMQP broker software implementations that can allow for authentication bypass, interception of messages, remote code execution or denial of service and other attacks.</p>

            <h2>Recommended action</h2>

            <p>Make sure that the AMQP server is up-to-date and that the AMQP server is not reachable over the internet if it doesn\'t need to be.</p>
            ',
    ],

    'OPEN_SSH_SERVER' => [
        'name'          => 'Open SSH service',
        'description'   => '
            <p> This report identifies hosts that have the Secure Shell (SSH) service running and accessible on the internet. </p>

            <p> This does not indicate that anything is wrong with the system, but if the SSH running on a system (or the version that is running) seems out of place, you may wish to investigate. </p>
            ',
    ],

    'OPEN_SMTP_SERVER' => [
        'name'          => 'Open SMTP service',
        'description'   => '
            <p> This report contains a list of accessible SMTP servers. </p>

            <p> This is just a population scan – there are no vulnerabilities being reported – but network owners should be aware of any unintentional SMTP server exposure and should verify all are patched to the latest software version. </p>
            ',
    ],

    'OPEN_ICS' => [
        'name'          => 'Open Industrial Control Service (ICS) application',
        'description'   => '
            <p> This report contains a list of devices that are responding to various specialized ICS/OT scans, along with additional make-and-model information and raw responses received. </p>

            <p> It is extremely unlikely that these types of devices need to be accessible in any form to queries from the internet, so unless you are running a honeypot if you receive such a report for your network/constituency, you are strongly advised to act immediately and firewall/filter access. </p>
            ',
    ],

    'OPEN_POSTGRESQL_SERVER' => [
        'name'          => 'Open PostgreSQL Server.',
        'description'   => '
            <p> This report identifies accessible PostgreSQL server instances on port 5432/TCP. </p>

            <p> It is unlikely that you need to have your PostgreSQL server allowing for external connections from the internet (and thus a possible external attack surface). If you do receive a report on your network/constituency take action to filter out traffic to your PostreSQL instance. Make sure to implement authentication on the server. </p>
            ',
    ],

    'OPEN_STUN_SERVICE' => [
        'name'          => 'Open STUN Service',
        'description'   => '
            <p> This report identifies accessible STUN (Session Traversal Utilities for NAT) servers on port 3478/udp. As described on Wikipedia, STUN is a standardized set of methods, including a network protocol, for traversal of network address translator (NAT) gateways in applications of real-time voice, video, messaging, and other interactive communications. The STUN service is known to be a potential UDP message amplifier, that can be abused for reflected DDoS attacks. </p>

            <p> Consider using STUN over TCP instead by default. </p>
',
    ],

    'OPEN_ERLANG_PORTMAPPER_DAEMON' => [
        'name'          => 'Open Erlang Port Mapper Daemon server',
        'description'   => '
            <p> This report identifies accessible Erlang Port Mapper Daemon (EPMD) servers on port 4369/tcp. This daemon acts as a name server for hosts involved in distributed Erlang computations. </p>

            <p> It is unlikely that you need to have an EPMD server allowing for external connections from the internet (and thus a possible external attack surface). Make sure to firewall traffic to this service. If you do receive this report from us for your network or constituency make sure to firewall traffic to this service.</p>
',
    ],

    'OPEN_SOCKS_PROXY' => [
        'name'          => 'Open SOCKS Proxy service',
        'description'   => '
            <p> This report identifies hosts that have a SOCKS proxy version 4 or SOCKS proxy version 5 service running on port 1080/TCP and accessible from the internet. The SOCKS protocol enables the exchange of packets between a client and server through a proxy server. These proxy servers can optionally support authentication.</p>

            <p> Open proxy servers allowing proxying of services without authentication are often subject to abuse. Others, even with authentication, may also have security implications. </p>

            <p> As with all remote access tools, care should be taken to make sure a SOCKS proxy service is configured in a secure manner and the security implications of making it accessible from anywhere on the internet taken into account. </p>
            ',
    ],

    'DEVICE_IDENTIFICATION' => [
        'name'          => 'Device identification',
        'description'   => '
            <p> This is a device population report – no assessment is made on the vulnerability state of the device. The report is intended for recipients to get a better understanding of device population types on networks they are responsible for. Please note the assessment is based only on what was publicly accessible from the internet.</p>
            ',
    ],

    'ACCESSIBLE_XDMCP_SERVICE_REPORT' => [
        'name'          => 'Open XDCMP Service',
        'description'   => '
            <p> This report identifies hosts that have the X Display Manager service running and accessible on the internet. </p>

            <p> XDMCP leaks information about the host system and, in addition, it can be used in an amplification attack, providing an approximate 7x amplification. Please note that it does not matter if XDMCP responds with a “Willing” or an “Unwilling”; the service provides the same level of amplification. </p>
            ',
    ],

    'VULNERABLE_EXCHANGE_SERVER' => [
        'name'          => 'Vulnerable Microsoft Exchange server',
        'description'   => '
            <h2>What is a "Vulnerable SMTP server"></h2>
            
            <p>It was discovered that the host is running a vulnerable version of Microsoft Exchange.</p>

            <h2>Why would this be bad?</h2>
        
            <p>Hackers might exploit the vulnerable Microsoft Exchange server, resulting in potentially getting the server compromised.</p>

            <h2>Recommended action</h2>

            <p>Update Microsoft Exchange to the latest version.</p>
            ',
    ],

    'ACCESSIBLE_MSMQ_SERVICE' => [
        'name'         => 'Accessible Microsoft Message Queuing service',
        'description'  => '
            <p> This report identifies accessible Microsoft Message Queuing (MSMQ) servers on port 1801/TCP. This service may be optionally enabled on Windows operating systems, including Windows Server 2022 and Windows 11. </p>',
    ],

    'ACCESSIBLE_SLP_SERVICE' => [
        'name'         => 'Accessible Service Location Protocol (SLP) Service',
        'description'  => '
            <p> This report identifies accessible SLP (Service Location Protocol) services on port 427/TCP and 427/UDP. The Service Location Protocol (SLP, srvloc) is a service discovery protocol that allows computers and other devices to find services in a local area network without prior configuration </p>',
    ],

    'ACCESSIBLE_BGP_SERVICE' => [
        'name'         => 'Accessible Border Gateway Protocol (BGP) Service',
        'description'  => '
            <p> This report identifies accessible Border Gateway Protocol (BGP) servers on port 179/TCP. </p>',
    ],

    'OPEN_MYSQL_SERVER' => [
        'name'        => 'Open MySQL Server',
        'description' => '
            <p>This report identifies accessible MySQL server instances on port 3306/TCP.  These are instances that respond to our request with a Server Greeting.</p>
        
            <p>It is unlikely that you need to have your MySQL server allowing for external connections from the Internet (and thus a possible external attack surface). If you do receive a report on your network/constituency take action to filter out traffic to your MySQL instance and make sure to implement authentication on the server.</p>',
    ],

];
