<?php
$cs = Yii::app()->getClientScript();

$cs->registerScriptFile(Yii::app()->theme->baseUrl. '/assets//plugins/nvd3/lib/d3.v3.js' , CClientScript::POS_END);
//$cs->registerScriptFile(Yii::app()->theme->baseUrl. '/assets//plugins/nvd3/lib/d3.tip.v0.6.3.js' , CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->theme->baseUrl. '/assets/plugins/nvd3/nv.d3.min.css');
$cs->registerScriptFile(Yii::app()->theme->baseUrl. '/assets//plugins/nvd3/nv.d3.min.js' , CClientScript::POS_END);
?>
<!-- start: PAGE CONTENT -->
<div class="row">
  <div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-share-alt icon-big text-pink"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-pink">OPEN</h3>
          <span class="subtitle">
            Open Source , Open Mind, Open Projects...
            <br>1 + 1 = 3 , Resilient.
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel panel-default panel-white core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-database icon-big text-green"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-green">DATA</h3>
          <span class="subtitle">
            Data Mining, Data Combining, Data Usage
            <br>gives another dimension to your projects.
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel panel-default panel-white core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-lightbulb-o icon-big text-azure"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-azure">SMART</h3>
          <span class="subtitle">
            Collective Intelligence 
            <br>Gives another meaning to everything.
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel panel-default panel-white core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-building icon-big text-orange"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-orange">CITY</h3>
          <span class="subtitle">
            Where the commons come to life and solutions are used.
          </span>
        </div>
      </div>
    </div>
  </div>

<div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel panel-default panel-white core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-cloud icon-big text-dark-azure"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-dark-azure">METEO</h3>
          <span class="subtitle">
            Collective Intelligence 
            <br>Gives another meaning to everything.
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 col-sm-6">
    <div class="panel panel-default panel-white core-box">
      <div class="panel-tools">
        <a href="#" class="btn btn-xs btn-link panel-close">
          <i class="fa fa-times"></i>
        </a>
      </div>
      <div class="panel-body no-padding">
        <div class="padding-20 text-center core-icon">
          <i class="fa fa-car icon-big text-dark-green"></i>
        </div>
        <div class="padding-20 core-content">
          <h3 class="title block no-margin text-dark-green">TRANPORT</h3>
          <span class="subtitle">
            Where the commons come to life and solutions are used.
          </span>
        </div>
      </div>
    </div>
  </div>

</div>



<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-white">
      <div class="panel-heading border-light">
        <h4 class="panel-title">Temperatures & Humidity</h4>
        <ul class="panel-heading-tabs border-light">
          <li>
            <div class="pull-right" id="reportrange">
              <span>This Week </span><i class="fa fa-angle-down"></i>
            </div>
          </li>
          <li>
            <div class="rate">
              <i class="fa fa-caret-up text-green"></i><span class="value">15</span><span class="percentage">%</span>
            </div>
          </li>
          <li class="panel-tools">
            <div class="dropdown">
              <a class="btn btn-xs dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </a>
              <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                <li>
                  <a href="#" class="panel-collapse collapses"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a href="#" class="panel-refresh">
                    <i class="fa fa-refresh"></i> <span>Refresh</span>
                  </a>
                </li>
                <li>
                  <a data-toggle="modal" href="#panel-config" class="panel-config">
                    <i class="fa fa-wrench"></i> <span>Configurations</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="panel-expand">
                    <i class="fa fa-expand"></i> <span>Fullscreen</span>
                  </a>
                </li>
              </ul>
            </div>
            <a href="#" class="btn btn-xs btn-link panel-close">
              <i class="fa fa-times"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="panel-body no-padding ">
        
        <div class="no-padding partition-white">
          <div class="partition">
            <div class="partition-body padding-15">
              <div class="height-300">
                <div class="with-3d-shadow with-transitions" id="chart1">
                  <svg>
                    <g class="nvd3 nv-wrap nv-linePlusBar" transform="translate(60,50)"><g><g class="nv-x nv-axis" transform="translate(0,235)"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick major" style="opacity: 1;" transform="translate(8.31875,0)"><line y2="-235" x2="0"/></g><g class="tick major" style="opacity: 1;" transform="translate(83.43958333333333,0)"><line y2="-235" x2="0"/><text y="7" dy=".71em" style="text-anchor: middle;" x="0">03/23/2015</text></g><g class="tick major" style="opacity: 1;" transform="translate(158.56041666666667,0)"><line y2="-235" x2="0"/><text y="7" dy=".71em" style="text-anchor: middle;" x="0">03/28/2015</text></g><path class="domain" d="M8.31875,0V0H233.68125V0"/><text class="nv-axislabel" text-anchor="middle" y="36" x="116.840625"/></g><g class="nv-axisMaxMin" transform="translate(8.31875,0)"><text dy=".71em" y="7" transform="rotate(0 0,0)" style="text-anchor: middle;">03/18/2015</text></g><g class="nv-axisMaxMin" transform="translate(233.68125,0)"><text dy=".71em" y="7" transform="rotate(0 0,0)" style="text-anchor: middle;">04/02/2015</text></g></g></g><g class="nv-y1 nv-axis"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick major" style="opacity: 1;" transform="translate(0,235)"><line x2="242" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="0" y="0">0</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,176.25)"><line x2="242" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">500,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,117.5)"><line x2="242" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">1,000,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,58.75)"><line x2="242" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">1,500,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,0)" opacity="0"><line x2="242" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="0" y="0">2,000,000</text></g><path class="domain" d="M0,0H0V235H0"/><text class="nv-axislabel" style="text-anchor: middle;" transform="rotate(-90)" y="-63" x="-117.5"/></g><g class="nv-axisMaxMin" transform="translate(0,235)"><text style="opacity: 1;" dy=".32em" y="0" x="-3" text-anchor="end">0</text></g><g class="nv-axisMaxMin" transform="translate(0,0)"><text style="opacity: 1;" dy=".32em" y="0" x="-3" text-anchor="end">2,000,000</text></g></g></g><g class="nv-y2 nv-axis" style="opacity: 1;" transform="translate(242,0)"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick major" style="opacity: 1;" transform="translate(0,235)"><line x2="0" y2="0"/><text x="3" dy=".32em" style="text-anchor: start;" opacity="0" y="0">$0</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,182.77777777777777)"><line x2="0" y2="0"/><text x="3" dy=".32em" style="text-anchor: start;" opacity="1" y="0">$200</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,130.55555555555554)"><line x2="0" y2="0"/><text x="3" dy=".32em" style="text-anchor: start;" opacity="1" y="0">$400</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,78.33333333333334)"><line x2="0" y2="0"/><text x="3" dy=".32em" style="text-anchor: start;" opacity="1" y="0">$600</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,26.111111111111114)"><line x2="0" y2="0"/><text x="3" dy=".32em" style="text-anchor: start;" opacity="1" y="0">$800</text></g><path class="domain" d="M0,0H0V235H0"/><text class="nv-axislabel" style="text-anchor: middle;" transform="rotate(90)" y="-63" x="117.5"/></g><g class="nv-axisMaxMin" transform="translate(0,235)"><text style="opacity: 1; text-anchor: start;" dy=".32em" y="0" x="3">$0</text></g><g class="nv-axisMaxMin" transform="translate(0,0)"><text style="opacity: 1; text-anchor: start;" dy=".32em" y="0" x="3">$900</text></g></g></g><g class="nv-barsWrap"><g class="nvd3 nv-wrap nv-historicalBar-4361" transform="translate(0,0)"><defs><clipPath id="nv-chart-clip-path-4361"><rect width="242" height="235"/></clipPath></defs><g clip-path="url(#nv-chart-clip-path-4361)"><g class="nv-bars"><rect x="0" y="156.01885" height="78.98115000000001" transform="translate(0.7562499999999996,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-0" width="13.6125"/><rect x="0" y="150.434075" height="84.565925" transform="translate(15.88125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-1" width="13.6125"/><rect x="0" y="96.917055" height="138.082945" transform="translate(31.00625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-2" width="13.6125"/><rect x="0" y="87.7164525" height="147.2835475" transform="translate(46.13125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-3" width="13.6125"/><rect x="0" y="127.1983325" height="107.8016675" transform="translate(61.25625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-4" width="13.6125"/><rect x="0" y="148.4183625" height="86.5816375" transform="translate(76.38125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-5" width="13.6125"/><rect x="0" y="167.14833249999998" height="67.85166750000002" transform="translate(91.50625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-6" width="13.6125"/><rect x="0" y="90.04612500000002" height="144.95387499999998" transform="translate(106.63125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-7" width="13.6125"/><rect x="0" y="167.52821" height="67.47179" transform="translate(121.75625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-8" width="13.6125"/><rect x="0" y="75.2511125" height="159.7488875" transform="translate(136.88125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-9" width="13.6125"/><rect x="0" y="123.88459750000001" height="111.11540249999999" transform="translate(152.00625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-10" width="13.6125"/><rect x="0" y="166.9370675" height="68.06293249999999" transform="translate(167.13125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-11" width="13.6125"/><rect x="0" y="163.4553075" height="71.5446925" transform="translate(182.25625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-12" width="13.6125"/><rect x="0" y="124.37281" height="110.62719" transform="translate(197.38125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-13" width="13.6125"/><rect x="0" y="149.5235675" height="85.47643249999999" transform="translate(212.50625,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-14" width="13.6125"/><rect x="0" y="76.44761500000001" height="158.552385" transform="translate(227.63125,0)" fill="#DFDFDD" class="nv-bar positive nv-bar-0-15" width="13.6125"/></g></g></g></g><g class="nv-linesWrap"><g class="nvd3 nv-wrap nv-line" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-37687"><rect width="242" height="235"/></clipPath></defs><g clip-path=""><g class="nv-groups"><g style="stroke-opacity: 1; fill-opacity: 0.5; fill: rgb(230, 111, 111); stroke: rgb(230, 111, 111);" class="nv-group nv-series-0"><path class="nv-line" d="M8.31875,204.6887442113075L23.342916666666667,131.35561037401322L38.36708333333333,178.4979132580562L53.39125000000001,146.49830748459243L68.41541666666667,157.38964961877136L83.43958333333333,152.2985076727233L98.46375,157.11916417792497L113.48791666666666,161.73721689504154L128.51208333333335,158.03434226755004L143.53625,192.01339961851838L158.56041666666667,206.28827700359983L173.5845833333333,174.34030715386933L188.60875000000001,180.6164966732685L203.6329166666667,208.76701178726483L218.65708333333333,206.5155412564023L233.68125,210.60390042440594"/></g></g><g class="nv-scatterWrap" clip-path=""><g class="nvd3 nv-wrap nv-scatter nv-chart-37687" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-37687"><rect width="242" height="235"/></clipPath><clipPath class="nv-point-clips" id="nv-points-clip-37687"><circle r="25" cx="8.3187500199076" cy="204.68874430949236"/><circle r="25" cx="23.342916733114613" cy="131.35561041973497"/><circle r="25" cx="38.367083350871376" cy="178.49791332292307"/><circle r="25" cx="53.391250068656106" cy="146.49830755595076"/><circle r="25" cx="68.41541670402135" cy="157.38964968941127"/><circle r="25" cx="83.43958336737862" cy="152.29850770877786"/><circle r="25" cx="98.46375006509" cy="157.11916421002618"/><circle r="25" cx="113.48791671730423" cy="161.73721692409168"/><circle r="25" cx="128.5120834189979" cy="158.03434227249977"/><circle r="25" cx="143.5362500201985" cy="192.01339968444896"/><circle r="25" cx="158.5604167414952" cy="206.28827705622098"/><circle r="25" cx="173.58458339760034" cy="174.34030715550335"/><circle r="25" cx="188.60875005666244" cy="180.61649670225668"/><circle r="25" cx="203.6329166807846" cy="208.7670118120936"/><circle r="25" cx="218.65708334614916" cy="206.51554130044008"/><circle r="25" cx="233.6812500344533" cy="210.60390046315996"/></clipPath></defs><g clip-path=""><g class="nv-groups"><g style="stroke-opacity: 1; fill-opacity: 0.5; stroke: rgb(230, 111, 111); fill: rgb(230, 111, 111);" class="nv-group nv-series-0"><circle cx="8.31875" cy="204.6887442113075" r="2.256758334191025" class="nv-point nv-point-0"/><circle cx="23.342916666666667" cy="131.35561037401322" r="2.256758334191025" class="nv-point nv-point-1"/><circle cx="38.36708333333333" cy="178.4979132580562" r="2.256758334191025" class="nv-point nv-point-2"/><circle cx="53.39125000000001" cy="146.49830748459243" r="2.256758334191025" class="nv-point nv-point-3"/><circle cx="68.41541666666667" cy="157.38964961877136" r="2.256758334191025" class="nv-point nv-point-4"/><circle cx="83.43958333333333" cy="152.2985076727233" r="2.256758334191025" class="nv-point nv-point-5"/><circle cx="98.46375" cy="157.11916417792497" r="2.256758334191025" class="nv-point nv-point-6"/><circle cx="113.48791666666666" cy="161.73721689504154" r="2.256758334191025" class="nv-point nv-point-7"/><circle cx="128.51208333333335" cy="158.03434226755004" r="2.256758334191025" class="nv-point nv-point-8"/><circle cx="143.53625" cy="192.01339961851838" r="2.256758334191025" class="nv-point nv-point-9"/><circle cx="158.56041666666667" cy="206.28827700359983" r="2.256758334191025" class="nv-point nv-point-10"/><circle cx="173.5845833333333" cy="174.34030715386933" r="2.256758334191025" class="nv-point nv-point-11"/><circle cx="188.60875000000001" cy="180.6164966732685" r="2.256758334191025" class="nv-point nv-point-12"/><circle cx="203.6329166666667" cy="208.76701178726483" r="2.256758334191025" class="nv-point nv-point-13"/><circle cx="218.65708333333333" cy="206.5155412564023" r="2.256758334191025" class="nv-point nv-point-14"/><circle cx="233.68125" cy="210.60390042440594" r="2.256758334191025" class="nv-point nv-point-15"/></g></g><g class="nv-point-paths" clip-path="url(#nv-points-clip-37687)"><path class="nv-path-0" d="M69.89342193716011,245L-0.035586203417884134,164.77153580238473L-10.000000000000002,162.7300709673446L-10,193.70909189806082L11.288055535427702,235L36.443683355642065,245Z"/><path class="nv-path-1" d="M95.35511440885466,-10L-10,-10L-10,162.7300709673446L-0.035586203417884134,164.77153580238473L30.198655065221885,155.1359378275819L90.34683207066546,35.78121152441924L102.44330754657246,1.0697843473653075L101.92612706979826,0Z"/><path class="nv-path-2" d="M30.198655065221885,155.1359378275819L-0.035586203417884134,164.77153580238473L69.89342193716011,245L83.27380933175739,245L86.61806792539086,218.97704529373217L83.92709813067133,211.41260295721906L51.380119142399565,165.08086808515225Z"/><path class="nv-path-3" d="M30.198655065221885,155.1359378275819L51.380119142399494,165.08086808515225L70.47193368615292,138.7444809290081L90.34683207066546,35.78121152441924Z"/><path class="nv-path-4" d="M51.380119142399494,165.08086808515225L83.92709813067134,211.41260295721906L83.6222933555642,177.55172616158876L70.47193368615292,138.7444809290081Z"/><path class="nv-path-5" d="M70.47193368615291,138.7444809290081L83.62229335556418,177.55172616158876L115.9479782728944,76.80476800559917L122.3294009584692,26.659201370159696L102.44330754657246,1.0697843473653075L90.34683207066546,35.78121152441924Z"/><path class="nv-path-6" d="M83.62229335556418,177.55172616158876L83.92709813067133,211.41260295721906L86.61806792539086,218.97704529373217L88.36598783675447,216.71927637988918L114.25154308364077,132.50436589829306L115.94797827289442,76.80476800559917Z"/><path class="nv-path-7" d="M88.3659878367545,216.71927637988918L125.84069826307493,179.52658936803965L114.25154308364078,132.50436589829306Z"/><path class="nv-path-8" d="M122.3294009584692,26.659201370159696L115.9479782728944,76.80476800559917L114.25154308364078,132.50436589829306L125.84069826307491,179.52658936803965L150.10369324441513,168.79847309264358L181.96274557098167,80.73455626155588Z"/><path class="nv-path-9" d="M125.84069826307491,179.5265893680396L88.36598783675451,216.71927637988915L86.61806792539087,218.97704529373217L83.27380933175739,245L107.48577367267441,245L161.4911869077945,188.15983870366196L150.10369324441515,168.79847309264355Z"/><path class="nv-path-10" d="M107.48577367267441,245L179.03589727854614,245L181.36960586224893,202.56460841642865L174.14814396110626,194.11202385718093L161.4911869077945,188.15983870366202Z"/><path class="nv-path-11" d="M150.10369324441515,168.79847309264355L161.4911869077945,188.15983870366196L174.14814396110626,194.11202385718093L214.46435506755432,97.60163802306542L181.96274557098167,80.73455626155588Z"/><path class="nv-path-12" d="M174.14814396110623,194.11202385718093L181.36960586224893,202.56460841642865L208.2355008548009,188.22605435092163L242.52946018842516,148.43785614282538L252,134.2031825161807L252,112.80890690820098L214.46435506755432,97.60163802306542Z"/><path class="nv-path-13" d="M181.369605862249,202.56460841642865L179.03589727854617,245L216.4982652935729,245L216.56930494163655,243.83791375971268L208.2355008548009,188.22605435092163Z"/><path class="nv-path-14" d="M208.23550085480096,188.22605435092157L216.56930494163655,243.83791375971268L242.52946018842516,148.43785614282538Z"/><path class="nv-path-15" d="M216.56930494163655,243.83791375971268L216.4982652935729,245L252,244.9999999999996L252,134.2031825161807L242.52946018842516,148.43785614282538Z"/><path class="nv-path-16" d="M-9.999999999999996,193.70909189806082L-10,235L11.288055535427702,235Z"/><path class="nv-path-17" d="M252,0L101.92612706979826,0L102.44330754657246,1.0697843473653075L122.3294009584692,26.659201370159696L181.96274557098164,80.73455626155588L214.46435506755432,97.60163802306539L252,112.80890690820101Z"/><path class="nv-path-18" d="M-10,235L-9.999999999999998,245L36.443683355642065,245L11.288055535427702,235Z"/><path class="nv-path-19" d="M251.99999999988358,-10L95.35511440888513,-10L101.92612706979824,0L251.99999999999997,0Z"/></g></g></g></g></g></g></g><g class="nv-legendWrap" transform="translate(121,-50)"><g class="nvd3 nv-legend" transform="translate(0,5)"><g transform="translate(-17,5)"><g class="nv-series" transform="translate(0,5)"><circle style="stroke-width: 2; fill: rgb(223, 223, 221); stroke: rgb(223, 223, 221);" class="nv-legend-symbol" r="5"/><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8">Quantity (left axis)</text></g><g class="nv-series" transform="translate(0,25)"><circle style="stroke-width: 2; fill: rgb(230, 111, 111); stroke: rgb(230, 111, 111);" class="nv-legend-symbol" r="5"/><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8">Price (right axis)</text></g></g></g></g></g></g></svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-white">
      <div class="panel-heading border-light">
        <h4 class="panel-title"> <span class="text-bold">CO / NO2</span></h4>
        <ul class="panel-heading-tabs border-light">
          <li>
            <div class="pull-right">
              <div class="btn-group">
                <a href="#" data-toggle="dropdown" class="btn btn-green dropdown-toggle">
                  Tools <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation" class="dropdown-header">
                    Dropdown header
                  </li>
                  <li>
                    <a href="#">
                      Action
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Another action
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Something else here
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li role="presentation" class="dropdown-header">
                    Dropdown header
                  </li>
                  <li>
                    <a href="#">
                      Separated link
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="rate">
              <i class="fa fa-caret-up text-green"></i><span class="value">11</span><span class="percentage">%</span>
            </div>
          </li>
          <li class="panel-tools">
            <div class="dropdown">
              <a class="btn btn-xs dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </a>
              <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                <li>
                  <a href="#" class="panel-collapse collapses"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                </li>
                <li>
                  <a href="#" class="panel-refresh">
                    <i class="fa fa-refresh"></i> <span>Refresh</span>
                  </a>
                </li>
                <li>
                  <a data-toggle="modal" href="#panel-config" class="panel-config">
                    <i class="fa fa-wrench"></i> <span>Configurations</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="panel-expand">
                    <i class="fa fa-expand"></i> <span>Fullscreen</span>
                  </a>
                </li>
              </ul>
            </div>
            <a href="#" class="btn btn-xs btn-link panel-close">
              <i class="fa fa-times"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="panel-body partition-green">
        <div class="col-md-12">
          <div class="height-350">
            <div class="with-3d-shadow with-transitions" id="chart4">
              <svg><g class="nvd3 nv-wrap nv-lineChart" transform="translate(35,30)"><g><rect style="opacity: 0;" width="388" height="300"/><g class="nv-x nv-axis" transform="translate(0,300)"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick major" style="opacity: 1;" transform="translate(100.27867532855436,0)"><line y2="-300" x2="0"/><text y="7" dy=".71em" style="text-anchor: middle;" x="0">03/10/2015</text></g><g class="tick major" style="opacity: 1;" transform="translate(245.14127986857824,0)"><line y2="-300" x2="0"/><text y="7" dy=".71em" style="text-anchor: middle;" x="0">03/22/2015</text></g><path class="domain" d="M0,0V0H388V0"/><text class="nv-axislabel" text-anchor="middle" y="36" x="194"/></g></g></g><g class="nv-y nv-axis"><g class="nvd3 nv-wrap nv-axis"><g><g class="tick major" style="opacity: 1;" transform="translate(0,300)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="0" y="0">0</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,262.5)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">1,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,225)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">2,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,187.5)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">3,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,150)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">4,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,112.5)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">5,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,75)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">6,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,37.5)"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="1" y="0">7,000</text></g><g class="tick major" style="opacity: 1;" transform="translate(0,0)" opacity="0"><line x2="388" y2="0"/><text x="-3" dy=".32em" style="text-anchor: end;" opacity="0" y="0">8,000</text></g><path class="domain" d="M0,0H0V300H0"/><text class="nv-axislabel" style="text-anchor: middle;" transform="rotate(-90)" y="-63" x="-150"/></g><g class="nv-axisMaxMin" transform="translate(0,300)"><text style="opacity: 1;" dy=".32em" y="0" x="-3" text-anchor="end">0</text></g><g class="nv-axisMaxMin" transform="translate(0,0)"><text style="opacity: 1;" dy=".32em" y="0" x="-3" text-anchor="end">8,000</text></g></g></g><g class="nv-linesWrap"><g class="nvd3 nv-wrap nv-line" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-70206"><rect width="388" height="300"/></clipPath></defs><g clip-path="url(#nv-edge-clip-70206)"><g class="nv-groups"><g style="stroke-opacity: 1; fill-opacity: 0.5; fill: rgb(217, 83, 79); stroke: rgb(217, 83, 79);" class="nv-group nv-series-0"><path class="nv-line" d="M0,193.8375L12.516129032258064,168.52499999999998L25.032258064516128,165.8625L37.54838709677419,161.85L50.064516129032256,166.5L62.58064516129032,141.9L75.09677419354838,149.4375L87.61290322580645,150L100.12903225806451,168.1125L112.64516129032256,145.53750000000002L125.16129032258064,160.79999999999998L137.6774193548387,161.1L150.19354838709677,192.6375L162.70967741935482,147.7125L175.2258064516129,209.4375L187.74193548387095,168.1875L200.25806451612902,157.0875L212.77419354838707,182.8125L225.29032258064512,130.79999999999998L237.80645161290323,195.675L250.32258064516128,161.625L262.83870967741933,199.5L275.3548387096774,216.71249999999998L287.8709677419355,178.8375L300.38709677419354,199.3875L312.9032258064516,170.17499999999998L325.41935483870964,193.65L337.93548387096774,179.39999999999998L350.4516129032258,186.45L362.96774193548384,186L375.4838709677419,161.475L388,159.9"/></g><g style="stroke-opacity: 1; fill-opacity: 0.5; fill: rgb(255, 255, 255); stroke: rgb(255, 255, 255);" class="nv-group nv-series-1"><path class="nv-line" d="M0,221.2125L12.516129032258064,184.05L25.032258064516128,212.1375L37.54838709677419,164.5875L50.064516129032256,201.375L62.58064516129032,231L75.09677419354838,189.1125L87.61290322580645,220.7625L100.12903225806451,216.89999999999998L112.64516129032256,231.5625L125.16129032258064,177.6375L137.6774193548387,172.65L150.19354838709677,229.27499999999998L162.70967741935482,193.35000000000002L175.2258064516129,154.5L187.74193548387095,233.775L200.25806451612902,189.45L212.77419354838707,204.675L225.29032258064512,184.64999999999998L237.80645161290323,221.8875L250.32258064516128,230.7375L262.83870967741933,177.1125L275.3548387096774,228.5625L287.8709677419355,200.55L300.38709677419354,196.275L312.9032258064516,220.95L325.41935483870964,177.71249999999998L337.93548387096774,172.0125L350.4516129032258,190.125L362.96774193548384,184.6125L375.4838709677419,258.075L388,243.5625"/></g></g><g class="nv-scatterWrap" clip-path="url(#nv-edge-clip-70206)"><g class="nvd3 nv-wrap nv-scatter nv-chart-70206" transform="translate(0,0)"><defs><clipPath id="nv-edge-clip-70206"><rect width="388" height="300"/></clipPath></defs><g clip-path=""><g class="nv-groups"><g style="stroke-opacity: 1; fill-opacity: 0.5; stroke: rgb(217, 83, 79); fill: rgb(217, 83, 79);" class="nv-group nv-series-0"><circle cx="0" cy="193.8375" r="2.256758334191025" class="nv-point nv-point-0"/><circle cx="12.516129032258064" cy="168.52499999999998" r="2.256758334191025" class="nv-point nv-point-1"/><circle cx="25.032258064516128" cy="165.8625" r="2.256758334191025" class="nv-point nv-point-2"/><circle cx="37.54838709677419" cy="161.85" r="2.256758334191025" class="nv-point nv-point-3"/><circle cx="50.064516129032256" cy="166.5" r="2.256758334191025" class="nv-point nv-point-4"/><circle cx="62.58064516129032" cy="141.9" r="2.256758334191025" class="nv-point nv-point-5"/><circle cx="75.09677419354838" cy="149.4375" r="2.256758334191025" class="nv-point nv-point-6"/><circle cx="87.61290322580645" cy="150" r="2.256758334191025" class="nv-point nv-point-7"/><circle cx="100.12903225806451" cy="168.1125" r="2.256758334191025" class="nv-point nv-point-8"/><circle cx="112.64516129032256" cy="145.53750000000002" r="2.256758334191025" class="nv-point nv-point-9"/><circle cx="125.16129032258064" cy="160.79999999999998" r="2.256758334191025" class="nv-point nv-point-10"/><circle cx="137.6774193548387" cy="161.1" r="2.256758334191025" class="nv-point nv-point-11"/><circle cx="150.19354838709677" cy="192.6375" r="2.256758334191025" class="nv-point nv-point-12"/><circle cx="162.70967741935482" cy="147.7125" r="2.256758334191025" class="nv-point nv-point-13"/><circle cx="175.2258064516129" cy="209.4375" r="2.256758334191025" class="nv-point nv-point-14"/><circle cx="187.74193548387095" cy="168.1875" r="2.256758334191025" class="nv-point nv-point-15"/><circle cx="200.25806451612902" cy="157.0875" r="2.256758334191025" class="nv-point nv-point-16"/><circle cx="212.77419354838707" cy="182.8125" r="2.256758334191025" class="nv-point nv-point-17"/><circle cx="225.29032258064512" cy="130.79999999999998" r="2.256758334191025" class="nv-point nv-point-18"/><circle cx="237.80645161290323" cy="195.675" r="2.256758334191025" class="nv-point nv-point-19"/><circle cx="250.32258064516128" cy="161.625" r="2.256758334191025" class="nv-point nv-point-20"/><circle cx="262.83870967741933" cy="199.5" r="2.256758334191025" class="nv-point nv-point-21"/><circle cx="275.3548387096774" cy="216.71249999999998" r="2.256758334191025" class="nv-point nv-point-22"/><circle cx="287.8709677419355" cy="178.8375" r="2.256758334191025" class="nv-point nv-point-23"/><circle cx="300.38709677419354" cy="199.3875" r="2.256758334191025" class="nv-point nv-point-24"/><circle cx="312.9032258064516" cy="170.17499999999998" r="2.256758334191025" class="nv-point nv-point-25"/><circle cx="325.41935483870964" cy="193.65" r="2.256758334191025" class="nv-point nv-point-26"/><circle cx="337.93548387096774" cy="179.39999999999998" r="2.256758334191025" class="nv-point nv-point-27"/><circle cx="350.4516129032258" cy="186.45" r="2.256758334191025" class="nv-point nv-point-28"/><circle cx="362.96774193548384" cy="186" r="2.256758334191025" class="nv-point nv-point-29"/><circle cx="375.4838709677419" cy="161.475" r="2.256758334191025" class="nv-point nv-point-30"/><circle cx="388" cy="159.9" r="2.256758334191025" class="nv-point nv-point-31"/></g><g style="stroke-opacity: 1; fill-opacity: 0.5; stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255);" class="nv-group nv-series-1"><circle cx="0" cy="221.2125" r="2.256758334191025" class="nv-point nv-point-0"/><circle cx="12.516129032258064" cy="184.05" r="2.256758334191025" class="nv-point nv-point-1"/><circle cx="25.032258064516128" cy="212.1375" r="2.256758334191025" class="nv-point nv-point-2"/><circle cx="37.54838709677419" cy="164.5875" r="2.256758334191025" class="nv-point nv-point-3"/><circle cx="50.064516129032256" cy="201.375" r="2.256758334191025" class="nv-point nv-point-4"/><circle cx="62.58064516129032" cy="231" r="2.256758334191025" class="nv-point nv-point-5"/><circle cx="75.09677419354838" cy="189.1125" r="2.256758334191025" class="nv-point nv-point-6"/><circle cx="87.61290322580645" cy="220.7625" r="2.256758334191025" class="nv-point nv-point-7"/><circle cx="100.12903225806451" cy="216.89999999999998" r="2.256758334191025" class="nv-point nv-point-8"/><circle cx="112.64516129032256" cy="231.5625" r="2.256758334191025" class="nv-point nv-point-9"/><circle cx="125.16129032258064" cy="177.6375" r="2.256758334191025" class="nv-point nv-point-10"/><circle cx="137.6774193548387" cy="172.65" r="2.256758334191025" class="nv-point nv-point-11"/><circle cx="150.19354838709677" cy="229.27499999999998" r="2.256758334191025" class="nv-point nv-point-12"/><circle cx="162.70967741935482" cy="193.35000000000002" r="2.256758334191025" class="nv-point nv-point-13"/><circle cx="175.2258064516129" cy="154.5" r="2.256758334191025" class="nv-point nv-point-14"/><circle cx="187.74193548387095" cy="233.775" r="2.256758334191025" class="nv-point nv-point-15"/><circle cx="200.25806451612902" cy="189.45" r="2.256758334191025" class="nv-point nv-point-16"/><circle cx="212.77419354838707" cy="204.675" r="2.256758334191025" class="nv-point nv-point-17"/><circle cx="225.29032258064512" cy="184.64999999999998" r="2.256758334191025" class="nv-point nv-point-18"/><circle cx="237.80645161290323" cy="221.8875" r="2.256758334191025" class="nv-point nv-point-19"/><circle cx="250.32258064516128" cy="230.7375" r="2.256758334191025" class="nv-point nv-point-20"/><circle cx="262.83870967741933" cy="177.1125" r="2.256758334191025" class="nv-point nv-point-21"/><circle cx="275.3548387096774" cy="228.5625" r="2.256758334191025" class="nv-point nv-point-22"/><circle cx="287.8709677419355" cy="200.55" r="2.256758334191025" class="nv-point nv-point-23"/><circle cx="300.38709677419354" cy="196.275" r="2.256758334191025" class="nv-point nv-point-24"/><circle cx="312.9032258064516" cy="220.95" r="2.256758334191025" class="nv-point nv-point-25"/><circle cx="325.41935483870964" cy="177.71249999999998" r="2.256758334191025" class="nv-point nv-point-26"/><circle cx="337.93548387096774" cy="172.0125" r="2.256758334191025" class="nv-point nv-point-27"/><circle cx="350.4516129032258" cy="190.125" r="2.256758334191025" class="nv-point nv-point-28"/><circle cx="362.96774193548384" cy="184.6125" r="2.256758334191025" class="nv-point nv-point-29"/><circle cx="375.4838709677419" cy="258.075" r="2.256758334191025" class="nv-point nv-point-30"/><circle cx="388" cy="243.5625" r="2.256758334191025" class="nv-point nv-point-31"/></g></g><g class="nv-point-paths"/></g></g></g></g></g></g><g class="nv-legendWrap" transform="translate(0,-30)"><g class="nvd3 nv-legend" transform="translate(0,5)"><g transform="translate(205.5,5)"><g class="nv-series" transform="translate(0,5)"><circle style="stroke-width: 2; fill: rgb(217, 83, 79); stroke: rgb(217, 83, 79);" class="nv-legend-symbol" r="5"/><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8">Page Views</text></g><g class="nv-series" transform="translate(83,5)"><circle style="stroke-width: 2; fill: rgb(255, 255, 255); stroke: rgb(255, 255, 255);" class="nv-legend-symbol" r="5"/><text text-anchor="start" class="nv-legend-text" dy=".32em" dx="8">Unique Visits</text></g></g></g></g><g class="nv-interactive"><g class=" nv-wrap nv-interactiveLineLayer"><g class="nv-interactiveGuideLine"/></g></g></g></g></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</div>

<div class="row">
  
  <div class="panel panel-dark col-sm-12 ">
    <div class="panel-heading border-light">
      <span class="text-extra-small text-blue"></span><span class="text-large text-white">OPEN DATA HACKATHON EVENTS</span>
    </div>
    <div class="panel-body no-padding text-extra-large ">
      <ul class="list-group ">
        <li class="list-group-item panel-dark">Get Toegther to build more open Data </li>
        <li class="list-group-item panel-dark">
          Intégré les source open data meteo france 
          <hr>
          <a href="https://www.data.gouv.fr/fr/organizations/meteo-france/" target="_blank">meteo-france</a>
          <hr>
          <a href="https://forum.openmeteodata.org/index.php?topic=21.0" target="_blank">Discussion</a>
        </li>
        <li class="list-group-item panel-dark">
          Transport 
          <br>
          Invité les differents acteur public a ouvrir leur donnée sur les reseau de bus
          <br>
          pour creer une interface open data
        </li>
      </ul>
    </div>
  </div>
</div>

</div>

<!-- end: PAGE CONTENT-->
<script type="text/javascript">
var date = new Date();
var series1 = [];
var series2 = [];
var firstDay, lastDay, fifthDay, tenthDay, fifteenthDay, twentiethDay, twentyfifthDay;
jQuery(document).ready(function() {


if($("#chart4 > svg").length) {
      

      createSeries();
      var data = [{
        "key": "Page Views",
        "values": series1
      }, {
        "key": "Unique Visits",
        "values": series2
      }];

      nv.addGraph(function() {

        var chart = nv.models.lineChart().margin({
          top: 30,
          right: 0,
          bottom: 20,
          left: 35
        }).x(function(d) {
          return d[0];
        }).y(function(d) {
          return d[1];
        }).forceY([0, 8000]).useInteractiveGuideline(true).color(['#D9534F', '#ffffff']).clipEdge(true);
        var options = {
          showControls: false,
          showLegend: true
        };
        chart.options(options);
        chart.xAxis.tickFormat(function(d) {
          return d3.time.format('%x')(new Date(d));
        }).showMaxMin(false);

        chart.yAxis.tickFormat(d3.format(',f'));
        d3.select('#chart4 svg').datum(data).call(chart);

        nv.utils.windowResize(chart.update);

        return chart;
      });
    }

});
function randValue() {
    return (Math.floor(Math.random() * (100 + 4000 - 2000))) + 2000;
  };

  function createSeries() {
    var y = date.getFullYear(), m = date.getMonth();
    var firstDay = new Date(y, m, 1);
    var fifthDay = new Date(y, m, 5);
    var tenthDay = new Date(y, m, 10);
    var fifteenthDay = new Date(y, m, 15);
    var twentiethDay = new Date(y, m, 20);
    var twentyfifthDay = new Date(y, m, 25);
    var lastDay = new Date(y, m + 1, 0);

    for(var d = new Date(new Date().setMonth(new Date().getMonth() - 1)); d <= new Date(); d.setDate(d.getDate() + 1)) {

      series1.push([new Date(d), randValue() + Math.floor(Math.random() * 1000)]);
      series2.push([new Date(d), randValue() - Math.floor(Math.random() * 1000)]);
    }
  }

 
</script>