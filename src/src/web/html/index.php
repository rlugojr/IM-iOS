<head>
  <title>ImagicalMine - Server Software for Minecraft: Pocket Edition</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="http://forums.imagicalmine.net/styles/brivium/iodine/xenforo/favicon.ico">
  <link rel="stylesheet" href="https://imagicalmine.github.io/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <div class="navbar navbar-inverse slide">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
        <a class="navbar-brand grow" href="http://imagicalmine.net">ImagicalMine</a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
          
        </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="grow" href="http://forums.imagicalmine.net" target="_blank">Forums</a></li>
          <li><a class="grow" href="https://github.com/ImagicalMine/ImagicalMine/">GitHub</a></li>
          <li><a class="grow" href="https://gitter.im/ImagicalMine/ImagicalMine">Gitter Chat</a></li>
          <li><a class="grow" href="http://imagicalmine.github.io/ImagicalMine/service-download/ImagicalMine.phar" target="_blank">Download</a></li>
          <li><a class="grow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=paymentsecure%40imagicalmine%2enet&lc=AU&item_name=ImagicalMine&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest" target="_blank">Donate</a></li>
          <li><a class="grow" href="https://github.com/ImagicalMine/ImagicalMine/wiki" target="_blank">Documentation / Wiki</a></li>
          <li><a class="grow" href="https://twitter.com/ImagicalCorp" target="_blank">@ImagicalCorp on Twitter</a></li>
          <li><a class="grow" href="https://netherbox.com/?promo=IMAGICAL" target="_blank">NetherBox</a</li>
          <li><a class="grow" href="https://github.com/ImagicalMine/ImagicalMine/graphs/contributors" target="_blank">Contributors</a></li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container slide">
    <h1 class="slide">Download</h1>
    <p class="lead slide">ImagicalMine is a third-party build of the popular Minecraft: PE server hosting software known as PocketMine. Utilizing ImagicalMine server owners can control almost every single aspect of the in-game experience. Our custom build of PocketMine features heavily
      requested functionality not currently available in the official branch, and is the perfect solution for hosting large networks of servers.</p>
    <div class="btn-group">
      <a style="font-size: 21px; padding: 14px 24px;" class="get-button btn btn-lg btn-success" data-toggle="modal" data-target="#get-pocketmine" onclick="ga('send', 'event', 'PocketMine', 'get'); return true;">
        <div style="margin-top:-10px;margin-bottom:10px;"><span class="fa fa-download"></span> Get ImagicalMine</div>
        <div style="font-size:18px;position:absolute;width:100%;text-align:center;margin-left:-14px;margin-top:-12px;">1.4 <i style="font-size:75%;">ELITE</i></div>
      </a>
      <a style="font-size: 21px; padding: 14px 24px;" class="btn btn-lg btn-info collapsed" data-toggle="collapse" data-parent="#jumbotron" href="#get">Getting Started <span class="fa fa-question-circle"></span></a>
    </div>
    <div id="get" class="panel-collapse collapse" style="text-align:center;font-size:15px;">
      <h3><strong>1. Install ImagicalMine</strong></h3>
      <p>
        <a class="btn btn-lg btn-success" data-toggle="modal" data-target="#get-pocketmine"><span class="fa fa-download"></span> Get ImagicalMine</a>
      </p>
      <h3><strong>2. Customize your server settings</strong></h3>
      <p>
        In the folder where ImagicalMine has been installed, open the <span class="label label-default">server.properties</span> file with a normal text editor. <br> You can check all the settings and their values on the <a href="https://github.com/ImagicalCorp/ImagicalMine/wiki/server.properties"
          target="_blank">server.properties page on the Wiki</a>. </p>
      <h3><strong>3. Open your server to the world</strong></h3>
      <p>
        If you are setting up ImagicalMine on a home network, you have to port forward the ImagicalMine UDP (and TCP if using RCON) port on your router.<br> If you don't know how to do port-forwarding, go to <a href="http://portforward.com/" target="_blank">Port Forward</a>,
        search your router, and follow the instructions.<br> You will be able to connect to it on MCPE directly: <a href="https://github.com/ImagicalCorp/ImagicalMine/wiki/How-to-add-servers">How to add external servers</a> </p>
      <h3><strong>4. Add Plugins!</strong></h3>
      <p>
        To extend the features of ImagicalMine, you can add Plugins to get new features, or modify already existent ones. </p>
      <h3><strong>5. Need more help?</strong></h3>
      <p>
        Before asking anything, you should read the <a href="https://github.com/ImagicalCorp/ImagicalMine/wiki/Frequently-Asked-Questions" target="_blank">Frequently Asked Questions</a> page and the <a href="https://github.com/ImagicalCorp/ImagicalMine/wiki"
          target="_blank">Wiki</a>. That should solve the majority of the questions. </p>
      <p>You can look for help or report something using these contact methods</p>
      <p></p>
      <ul>
        <li><a href="https://github.com/ImagicalMine/ImagicalMine/issues" target="_blank"><strong>GitHub Issues</strong>: Report bugs, send improvements or new features.</a></li>
        <li><a href="https://forums.imagicalmine.net" target="_blank"><strong>Forums</strong>: Join the community, ask questions, search for plugins.</a></li>
      </ul>
      <p></p>
    </div>
    <br>
    <br>
    <div class="modal fade" id="get-pocketmine">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close fa fa-times" data-dismiss="modal" aria-hidden="true"></span>
            <h3 class="modal-title">
<img src="http://forums.imagicalmine.net/styles/brivium/iodine/xenforo/favicon.png" height="23" width="23"> Get ImagicalMine <span style="font-style:italic;font-size:18px;color:#555;" class="pocketmine-version">1.4</span>
<br><em> <small> For MCPE v0.14.x alpha</small></em>
</h3>
          </div>
          <div class="modal-body">
            <center>
            <ul class="nav nav-tabs">
              <li>
                <a href="#windows-install" data-toggle="tab"><img src="//cdn.pocketmine.net/windows-icon.png"> Windows</a>
              </li>
              <li>
                <a href="#linux-install" data-toggle="tab"><img src="//cdn.pocketmine.net/linux-icon.png"> Linux</a>
              </li>
              <li>
                <a href="#mac-install" data-toggle="tab"><img src="//cdn.pocketmine.net/apple-icon.png"> Mac OS X</a>
              </li>
              <li>
                <a href="#android-install" data-toggle="tab"><img src="//cdn.pocketmine.net/android-icon.png"> Android</a>
              </li>
            </ul>
            </center>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="info-select" style="text-align:center;">
                <h5><span class="fa fa-arrow-up"></span>&nbsp;Select your operating system or device&nbsp;<span class="fa fa-arrow-up"></span></h5>
              </div>
              <div style="text-align:center;">
                <h4>Stable Release <span class="pocketmine-version">1.4</span> [ELITE]</h4>
                <p><small>This version is using API <span id="stable-api">1.14.0</span>, and was released on <span id="stable-date">18th February 2016.</span></small></p>
                <p><a href="https://github.com/ImagicalMine/ImagicalMine/commits/master" id="stable-release-link" target="_blank">Changelog</a> &bull; <a href="http://imagicalmine.github.io/ImagicalMine/service-download/ImagicalMine.phar" target="_blank">Direct Download</a> &bull; <a href="https://github.com/ImagicalMine/ImagicalMine/issues" class="tooltip-link" data-toggle="tooltip" title=""
                    target="_blank" data-original-title="Report bugs, send improvements or new features.">Bug Reporting</a></p>
              </div>
              <div class="tab-pane fade" id="windows-install">
                <hr>

                <p><b>Method 1</b></p>
                <p>Download the 32-bit installer <a href="https://github.com/ImagicalMine/ImagicalMine/releases/download/ImagicalMine-IC/ImagicalMine-Installer-x86.exe">here</a> and the 64-bit installer <a href="https://github.com/ImagicalMine/ImagicalMine/releases/download/ImagicalMine-IC/ImagicalMine-Installer-x64.exe">here</a>.
                  Follow the installer to install ImagicalMine and ensure you click "Launch ImagicalMine" to install Visual Studio C++ 2015 as well - this is required to run ImagicalMine!</p>

                <p><b>Method 2</b></p>
                <p>Download Visual Studio C++ Redistributable for Visual Studio 2015 from <a href="https://www.microsoft.com/en-au/download/details.aspx?id=48145">here</a>.</p>
                <p>Download the ZIP file from the ImagicalMine repository on GitHub <a href="https://github.com/ImagicalMine/ImagicalMine-Windows/archive/master.zip">here</a>. Unzip the archive and copy the files to where you want to install ImagicalMine.
                </p>

                <p><b>Then...</b></p>
                <p>Download the latest phar from <a href="http://imagicalmine.github.io/ImagicalMine/service-download/ImagicalMine.phar">here</a> and place it with the unarchived files.</p>
                <p>Run <code>start.cmd</code>, ImagicalMine will now start.</p>
              </div>
              <div class="tab-pane fade" id="linux-install">
                <hr>                
                <p><b>Before you start installing ImagicalMine, do <code>apt-get update</code> or <code>yum update</code> to update the installation packages on your server. Then, install <code>perl</code>, <code>gcc</code>, <code>g++</code>, <code>make</code>, <code>automake</code>, <code>libtool</code>, <code>autoconf</code> and <code>m4</code> using <code>apt-get install (name) -y</code> or <code>yum install (name) -y</code>.</b></p>
                <p>Navigate where you want to install/update ImagicalMine.</p>
                <p>Run the following code. It will download ImagicalMine and download the PHP binaries.</p>
                <pre style="font-size:11px;" onclick="ga('send', 'event', 'PocketMine', 'download', 'Linux'); return true;"><span class="no-selectable" style="font-weight:bold;">$&nbsp;</span>curl -sL http://get.imagicalmine.net | bash</pre>
                <p>Choose the option that corresponds with your operating system specifications and ImagicalMine will automatically install after selected.</p>
                <p>Run <code>./start.sh</code>, ImagicalMine will now start.</p><br>
                <h4><img src="//cdn.pocketmine.net/raspberry-icon.png"> Raspberry Pi / ODROID</h4>               
                <p><b>Before you start installing ImagicalMine, do <code>apt-get update</code> or <code>yum update</code> to update the installation packages on your server. Then, install <code>perl</code>, <code>gcc</code>, <code>g++</code>, <code>make</code>, <code>automake</code>, <code>libtool</code>, <code>autoconf</code> and <code>m4</code> using <code>apt-get install (name) -y</code> or <code>yum install (name) -y</code>.</b></p>
                <p>Navigate where you want to install/update ImagicalMine.</p>
                <p>Run the following code. It will download ImagicalMine and download the PHP binaries.</p>
                <pre style="font-size:11px;" onclick="ga('send', 'event', 'PocketMine', 'download', 'Linux ARM'); return true;"><span class="no-selectable" style="font-weight:bold;">$&nbsp;</span>curl -sL http://get.imagicalmine.net | bash</pre>
                <p>Choose the option that corresponds with your operating system specifications and ImagicalMine will automatically install after selected.</p>
                <p>Run <code>./start.sh</code>, ImagicalMine will now start.</p>
              </div>
              <div class="tab-pane fade" id="mac-install">
                <hr>
                <p>Open the Terminal.</p>
                <p>Navigate where you want to install/update ImagicalMine. You can move around using <code>cd [directory]</code>, and create directories using <code>mkdir [name]</code></p>
                <p>Run the following code. It will download ImagicalMine and download the PHP binaries.</p>
                <pre style="font-size:11px;" onclick="ga('send', 'event', 'PocketMine', 'download', 'MacOS'); return true;"><span class="no-selectable" style="font-weight:bold;">$&nbsp;</span>curl -sL http://get.imagicalmine.net | bash</pre>
              </div>
              <div class="tab-pane fade" id="android-install">
                <hr>
                <h3 style="text-align:center;"><img src="http://forums.imagicalmine.net/styles/brivium/iodine/xenforo/favicon.png" height="23" width="23"> ImagicalMine for Android</h3>
                <p>Follow the instructions <a href="http://github.com/ImagicalMine/IM-Android">here</a> to install ImagicalMine for Android. It allows you to host an ImagicalMine server on Android.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="features" class="panel-collapse" style="line-height:normal;font-size:15px;margin-top:15px;">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Plugin Support</strong></div>
            <div class="panel-body grow">
              All PocketMine plugins will function on this server client. Not to mention the large range of plugins available on the ImagicalMine forums! Customizing your experience has never been easier. </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Multiworld System</strong></div>
            <div class="panel-body grow">
              Create as many worlds as you want, and teleport between them freely. You'll never have to worry about getting bored with the current map. Switch it up.. Live a little! </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Full Control</strong></div>
            <div class="panel-body grow">
              Ban, teleport and whitelist your players. All done in one easy-to-use console. You can also manage all of your server's settings easily in the provided <i>server.properties</i> file.</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Unlimited Players</strong></div>
            <div class="panel-body grow">
              Configure your router to allow port triggering and you're all set! Invite your friends, or even invite the entire world. Start your own community with ImagicalMine. </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Cheat Protection</strong></div>
            <div class="panel-body grow">
              Automatically kick fly hackers, prevents griefing, prevents third-person PvPing, and tons of other anti-hack actions. Don't let a couple bad eggs deter your loyal players. </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary slide grow">
            <div class="panel-heading"><strong class="grow">Even more!</strong></div>
            <div class="panel-body grow">
              With ImagicalMine there is no limit on creativity. Create any type of community you want, and rest assured the entire process will be smooth and worthwhile. </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
