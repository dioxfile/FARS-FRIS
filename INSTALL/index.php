<script>
function check_all(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
function evil(fn) {
  return new Function('return ' + fn)();
}
function countSP(){
		var a = document.forms["SP"];
		var x =a.querySelectorAll('input[type="checkbox"]:checked');
		alert(x.length);
		return x.length
}
function countS(){
		var a = document.forms["Soft"];
		var x =a.querySelectorAll('input[type="checkbox"]:checked');
		alert(x.length);
		return x.length
}
function countP(){
		var a = document.forms["People"];
		var x =a.querySelectorAll('input[type="checkbox"]:checked');
		alert(x.length);
		return x.length
	}
function Controls(){
	var w = countSP().toString();
	var y = countS().toString();
	var z = countP().toString();
	
	var str = evil('('+w+'/51)*100')+","+evil('('+y+'/34)*100')+","+evil('('+z+'/8)*100')
	return str;
}
function CreateTextFile() {
         var blob = new Blob([Controls()], {
            type: "text/plain;charset=utf-8",
         });
         saveAs(blob, "sr.txt");
}
</script>
<html>
	  <script src = "https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin = "anonymous" referrerpolicy = "no-referrer"> </script>
 <head>
  <title>Framework for Security Risk Assessment (FSRA) </title>
 </head>
 <body>
  <h1><body><strong>Framework for Security Risk Assessment (FSRA) based on Standard ISO/IEC 27002:2022</strong></h1>
  <br />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <div>
  <h2><strong><input type="checkbox" onclick="check_all(this);" />Check all?</strongh></h2><br />
  <form name="SP">
  <h2><strong>I. Security Practices (SP):</strong><h2/>
  <h3><strong>5 Organizational Controls:</strong><h3/>
  <input type="checkbox" name="controls-sec" />5.1 Policies for information security<br/>
  <input type="checkbox" name="controls-sec" />5.2 Information security roles and responsibilities<br/>
  <input type="checkbox" name="controls-sec" />5.3 Segregation of duties<br/>
  <input type="checkbox" name="controls-sec" />5.4 Management responsibilities<br/>
  <input type="checkbox" name="controls-sec" />5.5 Contact with authorities<br/>
  <input type="checkbox" name="controls-sec" />5.6 Contact with special interest groups<br/>
  <input type="checkbox" name="controls-sec" />5.7 Threat intelligence<br/>
  <input type="checkbox" name="controls-sec" />5.8 Information security in project management<br/>
  <input type="checkbox" name="controls-sec" />5.9 Inventory of information and other associated assets<br/>
  <input type="checkbox" name="controls-sec" />5.10 Acceptable use of information and other associated assets<br/>
  <input type="checkbox" name="controls-sec" />5.11 Return of assets<br/>
  <input type="checkbox" name="controls-sec" />5.12 Classification of information<br/>
  <input type="checkbox" name="controls-sec" />5.13 Labelling of information<br/>
  <input type="checkbox" name="controls-sec" />5.14 Information transfer<br/>
  <input type="checkbox" name="controls-sec" />5.15 Access control<br/>
  <input type="checkbox" name="controls-sec" />5.16 Identity management<br/>
  <input type="checkbox" name="controls-sec" />5.17 Authentication information<br/>
  <input type="checkbox" name="controls-sec" />5.18 Access rights<br/>
  <input type="checkbox" name="controls-sec" />5.19 Information security in supplier relationships<br/>
  <input type="checkbox" name="controls-sec" />5.20 Addressing information security within supplier agreements<br/>
  <input type="checkbox" name="controls-sec" />5.21 Managing information security in the ICT supply chain<br/>
  <input type="checkbox" name="controls-sec" />5.22 Monitoring, review and change management of supplier services<br/>
  <input type="checkbox" name="controls-sec" />5.23 Information security for use of cloud services<br/>
  <input type="checkbox" name="controls-sec" />5.24 Information security incident management planning and preparation<br/>
  <input type="checkbox" name="controls-sec" />5.25 Assessment and decision on information security events<br/>
  <input type="checkbox" name="controls-sec" />5.26 Response to information security incidents<br/>
  <input type="checkbox" name="controls-sec" />5.27 Learning from information security incidents<br/>
  <input type="checkbox" name="controls-sec" />5.28 Collection of evidence<br/>
  <input type="checkbox" name="controls-sec" />5.29 Information security during disruption<br/>
  <input type="checkbox" name="controls-sec" />5.30 ICT readiness for business continuity<br/>
  <input type="checkbox" name="controls-sec" />5.31 Legal, statutory, regulatory and contractual requirements<br/>
  <input type="checkbox" name="controls-sec" />5.32 Intellectual property rights<br/>
  <input type="checkbox" name="controls-sec" />5.33 Protection of records<br/>
  <input type="checkbox" name="controls-sec" />5.34 Privacy and protection of PII<br/>
  <input type="checkbox" name="controls-sec" />5.35 Independent review of information security<br/>
  <input type="checkbox" name="controls-sec" />5.36 Compliance with policies, rules and standards for information security<br/>
  <input type="checkbox" name="controls-sec" />5.37 Documented operating procedures<br/>
  <h3><strong> 7 Physical controls:</strong><h3/>
  <input type="checkbox" name="controls-sec" />7.1 Physical security perimeters<br/>
  <input type="checkbox" name="controls-sec" />7.2 Physical entry<br/>
  <input type="checkbox" name="controls-sec" />7.3 Securing offices, rooms and facilities<br/>
  <input type="checkbox" name="controls-sec" />7.4 Physical security monitoring<br/>
  <input type="checkbox" name="controls-sec" />7.5 Protecting against physical and environmental threats<br/>
  <input type="checkbox" name="controls-sec" />7.6 Working in secure areas<br/>
  <input type="checkbox" name="controls-sec" />7.7 Clear desk and clear screen<br/>
  <input type="checkbox" name="controls-sec" />7.8 Equipment siting and protection<br/>
  <input type="checkbox" name="controls-sec" />7.9 Security of assets off-premises<br/>
  <input type="checkbox" name="controls-sec" />7.10 Storage media<br/>
  <input type="checkbox" name="controls-sec" />7.11 Supporting utilities<br/>
  <input type="checkbox" name="controls-sec" />7.12 Cabling security<br/>
  <input type="checkbox" name="controls-sec" />7.13 Equipment maintenance<br/>
  <input type="checkbox" name="controls-sec" />7.14 Secure disposal or re-use of equipment<br/>
  </form>
  </div>
  <div>
  <form name="Soft">
  <h2><strong>II. Software (S):</strong><h2/>
  <h3><strong>8 Technological controls:</strong><h3/>
  <input type="checkbox" name="software" />8.1 User endpoint devices<br/>
  <input type="checkbox" name="software" />8.2 Privileged access rights<br/>
  <input type="checkbox" name="software" />8.3 Information access restriction<br/>
  <input type="checkbox" name="software" />8.4 Access to source code<br/>
  <input type="checkbox" name="software" />8.5 Secure authentication<br/>
  <input type="checkbox" name="software" />8.6 Capacity management<br/>
  <input type="checkbox" name="software" />8.7 Protection against malware<br/>
  <input type="checkbox" name="software" />8.8 Management of technical vulnerabilities<br/>
  <input type="checkbox" name="software" />8.9 Configuration management<br/>
  <input type="checkbox" name="software" />8.10 Information deletion<br/>
  <input type="checkbox" name="software" />8.11 Data masking<br/>
  <input type="checkbox" name="software" />8.12 Data leakage prevention<br/>
  <input type="checkbox" name="software" />8.13 Information backup<br/>
  <input type="checkbox" name="software" />8.14 Redundancy of information processing facilities<br/>
  <input type="checkbox" name="software" />8.15 Logging<br/>
  <input type="checkbox" name="software" />8.16 Monitoring activities<br/>
  <input type="checkbox" name="software" />8.17 Clock synchronization<br/>
  <input type="checkbox" name="software" />8.18 Use of privileged utility programs<br/>
  <input type="checkbox" name="software" />8.19 Installation of software on operational systems<br/>
  <input type="checkbox" name="software" />8.20 Networks security<br/>
  <input type="checkbox" name="software" />8.21 Security of network services<br/>
  <input type="checkbox" name="software" />8.22 Segregation of networks<br/>
  <input type="checkbox" name="software" />8.23 Web filtering<br/>
  <input type="checkbox" name="software" />8.24 Use of cryptography<br/>
  <input type="checkbox" name="software" />8.25 Secure development life cycle<br/>
  <input type="checkbox" name="software" />8.26 Application security requirements<br/>
  <input type="checkbox" name="software" />8.27 Secure system architecture and engineering principles<br/>
  <input type="checkbox" name="software" />8.28 Secure coding<br/>
  <input type="checkbox" name="software" />8.29 Security testing in development and acceptance<br/>
  <input type="checkbox" name="software" />8.30 Outsourced development<br/>
  <input type="checkbox" name="software" />8.31 Separation of development, test and production environments<br/>
  <input type="checkbox" name="software" />8.32 Change management<br/>
  <input type="checkbox" name="software" />8.33 Test information<br/>
  <input type="checkbox" name="software" />8.34 Protection of information systems during audit testing<br/>
  </form>
  </div>
  <div>
  <form name="People">
  <h2><strong>III. People (P):</strong><h2/>
  <h3><strong> 6 People controls:</strong><h3/>
  <input type="checkbox" name="software" />6.1 Screening<br/>
  <input type="checkbox" name="software" />6.2 Terms and conditions of employment<br/>
  <input type="checkbox" name="software" />6.3 Information security awareness, education and training<br/>
  <input type="checkbox" name="software" />6.4 Disciplinary process<br/>
  <input type="checkbox" name="software" />6.5 Responsibilities after termination or change of employment<br/>
  <input type="checkbox" name="software" />6.6 Confidentiality or non-disclosure agreements<br/>
  <input type="checkbox" name="software" />6.7 Remote working<br/>
  <input type="checkbox" name="software" />6.8 Information security event reporting<br/>
  </form>
  </div>
  </body>
  <div>
   <button onclick="CreateTextFile()">Load Controls Checked</button><br/>
  </div> 
  <div>
   <?php
   if ($_GET['run']) {
   
        # This code will run if ?run=true is set.
	    $pdw=exec("pwd");
	    exec("$pdw/run.sh");
   } 
       $port = $_SERVER['SERVER_PORT'];
   ?>
   <a href="?run=true"> Generate Security Risk Assessment</a><br/>
   <a href="http://localhost:<?php echo "$port";?>/r_risk-sec.html"> Show Security Risk Assessment</a>
  </div>
</html>
