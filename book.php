<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Carpenter Services</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS Custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- favicon Icon -->
  <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">-->
  <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
  <!-- CSS Plugins -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

  <?php include('header.php') ?>

  <section id="home" class="top_banner_bg secondary-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top_banner">

          </div>

          <div class="col-md-12">
            <div class="present">
              <h1 align="left" style="font-size:65px;"><b>Book Your Service</b></h1>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>

  <style>
    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
    input[type='checkbox']{
        margin-right: 10px;
    }
  </style>
  <section id="contact" class="" style="background-color: rgb(0 0 0 / 22%);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
              </div>
          <div class="col-md-7">
            <div class="contact_form">
              <form action="send_booking.php" method="post" name="form1" id="regForm" target="_parent" class="">

                <div class="tab">
                  <div class="form-group">


                    <div class="form-group">
                      <input id="chk_DOOR_REPAIR" type="checkbox" name="chk_DOOR_REPAIR"><label for="chk_DOOR_REPAIR">DOOR REPAIR</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_WINDOW_REPAIR" type="checkbox" name="chk_WINDOW_REPAIR"><label for="chk_WINDOW_REPAIR">WINDOW REPAIR</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_NEW_DOOR_WORK" type="checkbox" name="chk_NEW_DOOR_WORK"><label for="chk_NEW_DOOR_WORK">NEW DOOR WORK</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_NEW_WINDOW_WORK" type="checkbox" name="chk_NEW_WINDOW_WORK"><label for="chk_NEW_WINDOW_WORK">NEW WINDOW WORK</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_NEW_FURNITURE_WORK" type="checkbox" name="chk_NEW_FURNITURE_WORK"><label for="chk_NEW_FURNITURE_WORK">NEW FURNITURE WORK</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_CURTAIN_HANGING_WORK" type="checkbox" name="chk_CURTAIN_HANGING_WORK"><label for="chk_CURTAIN_HANGING_WORK">CURTAIN HANGING WORK</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_DOOR_CLOSER" type="checkbox" name="chk_DOOR_CLOSER"><label for="chk_DOOR_CLOSER">DOOR CLOSER</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_DOOR_LOCK" type="checkbox" name="chk_DOOR_LOCK"><label for="chk_DOOR_LOCK">DOOR LOCK</label>
                    </div>

                    <div class="form-group">
                      <input id="chk_WOODEN_PARTITION_WORK" type="checkbox" name="chk_WOODEN_PARTITION_WORK"><label for="chk_WOODEN_PARTITION_WORK">WOODEN PARTITION WORK</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="chk_CARPENTER_FOR_DAILY_BASE" type="checkbox" name="chk_CARPENTER_FOR_DAILY_BASE"><label for="chk_CARPENTER_FOR_DAILY_BASE">CARPENTER FOR DAILY BASE</label>
                    </div>

                  </div>
                </div>

                <div class="tab">
                  <div class="form-group">
                    <label> Name : <span> *</span></label>
                    <span class="name">
                      <input class="form-control" type="text" size="40" value="" required="true" name="txtname" placeholder="Name*">
                    </span>
                  </div>

                  <div class="form-group">
                    <label> City : <span> *</span></label>
                    <select name="ddlcity" id="ddlcity" class="form-control">
                      <option value="AGRA">AGRA</option>
                      <option value="AHMEDABAD">AHMEDABAD</option>
                      <option value="ALIGARH">ALIGARH</option>
                      <option value="ALLAHABAD">ALLAHABAD</option>
                      <option value="AMARAVATI">AMARAVATI</option>
                      <option value="AMBALA">AMBALA</option>
                      <option value="AMRITSAR">AMRITSAR</option>
                      <option value="ASANSOL">ASANSOL</option>
                      <option value="AURANGABAD">AURANGABAD</option>
                      <option value="BANGALORE">BANGALORE</option>
                      <option value="BAREILLY">BAREILLY</option>
                      <option value="BHAVNAGAR">BHAVNAGAR</option>
                      <option value="BHOPAL">BHOPAL</option>
                      <option value="BIKANER">BIKANER</option>
                      <option value="CHANDIGARH">CHANDIGARH</option>
                      <option value="DEHRADUN">DEHRADUN</option>
                      <option value="DELHI">DELHI</option>
                      <option value="DELHI CENTRAL">DELHI CENTRAL</option>
                      <option value="DELHI EAST">DELHI EAST</option>
                      <option value="DELHI NEW">DELHI NEW</option>
                      <option value="DELHI NORTH">DELHI NORTH</option>
                      <option value="DELHI NORTH EAST">DELHI NORTH EAST</option>
                      <option value="DELHI SOUTH">DELHI SOUTH</option>
                      <option value="DELHI SOUTH WEST">DELHI SOUTH WEST</option>
                      <option value="DELHI WEST">DELHI WEST</option>
                      <option value="DHANBAD">DHANBAD</option>
                      <option value="FARIDABAD">FARIDABAD</option>
                      <option value="GANDHINAGAR">GANDHINAGAR</option>
                      <option value="GAYA">GAYA</option>
                      <option value="GHAZIABAD">GHAZIABAD</option>
                      <option value="GORAKHPUR">GORAKHPUR</option>
                      <option value="GURGAON">GURGAON</option>
                      <option value="GWALIOR">GWALIOR</option>
                      <option value="HISAR">HISAR</option>
                      <option value="HOWRAH">HOWRAH</option>
                      <option value="HYDERABAD">HYDERABAD</option>
                      <option value="INDORE">INDORE</option>
                      <option value="JABALPUR">JABALPUR</option>
                      <option value="JAIPUR">JAIPUR</option>
                      <option value="JALANDHAR">JALANDHAR</option>
                      <option value="JAMSHEDPUR">JAMSHEDPUR</option>
                      <option value="JHANSI">JHANSI</option>
                      <option value="JODHPUR">JODHPUR</option>
                      <option value="KALYAN">KALYAN</option>
                      <option value="KANPUR">KANPUR</option>
                      <option value="KARNAL">KARNAL</option>
                      <option value="KOLKATA">KOLKATA</option>
                      <option value="JAMNAGAR">JAMNAGAR</option>
                      <option value="KOTA">KOTA</option>
                      <option value="LUCKNOW">LUCKNOW</option>
                      <option value="LUDHIANA">LUDHIANA</option>
                      <option value="MATHURA">MATHURA</option>
                      <option value="MEERUT">MEERUT</option>
                      <option value="MOHALI">MOHALI</option>
                      <option value="MORADABAD">MORADABAD</option>
                      <option value="MUMBAI">MUMBAI</option>
                      <option value="NAGPUR">NAGPUR</option>
                      <option value="NASHIK">NASHIK</option>
                      <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                      <option value="NOIDA">NOIDA</option>
                      <option value="PANIPAT">PANIPAT</option>
                      <option value="GOA">GOA</option>
                      <option value="PATIALA">PATIALA</option>
                      <option value="PATNA">PATNA</option>
                      <option value="PIMPRI">PIMPRI</option>
                      <option value="PUNE">PUNE</option>
                      <option value="RAIPUR">RAIPUR</option>
                      <option value="RAJKOT">RAJKOT</option>
                      <option value="RANCHI">RANCHI</option>
                      <option value="ROHTAK">ROHTAK</option>
                      <option value="SOLAPUR">SOLAPUR</option>
                      <option value="SONIPAT">SONIPAT</option>
                      <option value="SURAT">SURAT</option>
                      <option value="THANE">THANE</option>
                      <option value="UDAIPUR">UDAIPUR</option>
                      <option value="UJJAIN">UJJAIN</option>
                      <option value="VADODARA">VADODARA</option>
                      <option value="VARANASI">VARANASI</option>
                      <option value="YAMUNANAGAR">YAMUNANAGAR</option>
                      <option value="VISAKHAPATNAM">VISAKHAPATNAM</option>
                      <option value="VIJAYAWADA">VIJAYAWADA</option>
                      <option value="GUNTUR">GUNTUR</option>
                      <option value="WARANGAL">WARANGAL</option>
                      <option value="NELLORE">NELLORE</option>
                      <option value="KURNOOL">KURNOOL</option>
                      <option value="KADAPA">KADAPA</option>
                      <option value="RAJAHMUNDRY">RAJAHMUNDRY</option>
                      <option value="KAKINADA">KAKINADA</option>
                      <option value="NIZAMABAD"> NIZAMABAD</option>
                      <option value="TIRUPATI"> TIRUPATI</option>
                      <option value="KARIMNAGAR"> KARIMNAGAR</option>
                      <option value="ANANTAPUR">ANANTAPUR</option>
                      <option value="RAMAGUNDAM"> RAMAGUNDAM</option>
                      <option value="VIZIANAGARAM"> VIZIANAGARAM</option>
                      <option value="ONGOLE"> ONGOLE</option>
                      <option value="ELURU">ELURU</option>
                      <option value="NANDYAL"> NANDYAL</option>
                      <option value="KHAMMAM">KHAMMAM</option>
                      <option value="MACHILIPATNAM"> MACHILIPATNAM</option>
                      <option value="ADONI"> ADONI</option>
                      <option value="TENALI"> TENALI</option>
                      <option value="PRODDATUR"> PRODDATUR</option>
                      <option value="MAHBUBNAGAR">MAHBUBNAGAR</option>
                      <option value="CHITTOOR"> CHITTOOR</option>
                      <option value="HINDUPUR"> HINDUPUR</option>
                      <option value="BHIMAVARAM"> BHIMAVARAM</option>
                      <option value="MADANAPALLE"> MADANAPALLE</option>
                      <option value="NALGONDA"> NALGONDA</option>
                      <option value="GUNTAKAL"> GUNTAKAL</option>
                      <option value="SRIKAKULAM">
                        SRIKAKULAM
                      </option>
                      <option value="DHARMAVARAM"> DHARMAVARAM</option>
                      <option value="GUDIVADA"> GUDIVADA</option>
                      <option value="ADILABAD"> ADILABAD</option>
                      <option value="NARASARAOPET"> NARASARAOPET</option>
                      <option value="TADPATRI">TADPATRI</option>
                      <option value="SURYAPET">SURYAPET</option>
                      <option value="TADEPALLIGUDEM">TADEPALLIGUDEM</option>
                      <option value="MIRYALAGUDA">MIRYALAGUDA</option>
                      <option value="CHILAKALURIPET">CHILAKALURIPET</option>
                      <option value="GUWAHATI">GUWAHATI</option>
                      <option value="SILCHAR">SILCHAR</option>
                      <option value="DIBRUGARH">DIBRUGARH</option>
                      <option value="NAGAON">NAGAON</option>
                      <option value="BHAGALPUR">BHAGALPUR</option>
                      <option value="MUZAFFARPUR">MUZAFFARPUR</option>
                      <option value="BIHARSHARIF">BIHARSHARIF</option>
                      <option value="DARBHANGA">DARBHANGA</option>
                      <option value="PURNIA">PURNIA</option>
                      <option value="ARRAH">ARRAH</option>
                      <option value="BEGUSARAI">BEGUSARAI</option>
                      <option value="KATIHAR">KATIHAR</option>
                      <option value="MUNGER">MUNGER</option>
                      <option value="CHAPRA">CHAPRA</option>
                      <option value="DINAPUR NIZAMAT">DINAPUR NIZAMAT</option>
                      <option value="SAHARSA">SAHARSA</option>
                      <option value="HAJIPUR">HAJIPUR</option>
                      <option value="SASARAM">SASARAM</option>
                      <option value="SIWAN">SIWAN</option>
                      <option value="BETTIAH">BETTIAH</option>
                      <option value="MOTIHARI"> MOTIHARI</option>
                      <option value="BAGAHA"> BAGAHA</option>
                      <option value="KISHANGANJ">KISHANGANJ</option>
                      <option value="JAMALPUR">
                        JAMALPUR
                      </option>
                      <option value="JEHANABAD">JEHANABAD</option>
                      <option value="BUXAR">BUXAR</option>
                      <option value="BHILAI NAGAR">BHILAI NAGAR</option>
                      <option value="KORBA">KORBA</option>
                      <option value="BILASPUR">BILASPUR</option>
                      <option value="DURG">DURG</option>
                      <option value="RAJNANDGAON">RAJNANDGAON</option>
                      <option value="RAIGARH">RAIGARH</option>
                      <option value="JAGDALPUR">JAGDALPUR</option>
                      <option value="AMBIKAPUR">AMBIKAPUR</option>
                      <option value="JUNAGADH">JUNAGADH</option>
                      <option value="GANDHIDHAM">GANDHIDHAM</option>
                      <option value="NADIAD"> NADIAD</option>
                      <option value="ANAND"> ANAND</option>
                      <option value="MORVI">MORVI</option>
                      <option value="MAHESANA SURENDRANAGAR">MAHESANA SURENDRANAGAR </option>
                      <option value="DUDHREJ">DUDHREJ</option>
                      <option value="BHARUCH">BHARUCH</option>
                      <option value="VAPI">VAPI</option>
                      <option value="NAVSARI">NAVSARI</option>
                      <option value="VERAVAL"> VERAVAL</option>
                      <option value="PORBANDAR">PORBANDAR</option>
                      <option value="GODHRA">GODHRA</option>
                      <option value="GODHRA">GODHRA</option>
                      <option value="GODHRA">GODHRA</option>
                      <option value="BOTAD">BOTAD</option>
                      <option value="PATAN">PATAN</option>
                      <option value="PALANPUR">PALANPUR</option>
                      <option value="JETPUR NAVAGADH">JETPUR NAVAGADH</option>
                      <option value="VALSAD"> VALSAD</option>
                      <option value="KALOL"> KALOL</option>
                      <option value="GONDAL">GONDAL</option>
                      <option value="DEESA">DEESA</option>
                      <option value="AMRELI">AMRELI</option>
                      <option value="PANCHKULA">PANCHKULA</option>
                      <option value="SIRSA">SIRSA</option>
                      <option value="BAHADURGARH">BAHADURGARH</option>
                      <option value="JIND">JIND</option>
                      <option value="THANESAR">THANESAR</option>
                      <option value="KAITHAL">KAITHAL</option>
                      <option value="REWARI">REWARI</option>
                      <option value="PALWAL">PALWAL</option>
                      <option value="JAGADHRI">JAGADHRI</option>
                      <option value="AMBALA SADAR">AMBALA SADAR</option>
                      <option value="SHIMLA">SHIMLA</option>
                      <option value="SRINAGAR">SRINAGAR</option>
                      <option value="JAMMU">JAMMU</option>
                      <option value="ANANTNAG">ANANTNAG</option>
                      <option value="BOKARO STEEL">BOKARO STEEL</option>
                      <option value="MANGO">MANGO</option>
                      <option value="DEOGHAR">DEOGHAR</option>
                      <option value="ADITYAPUR">ADITYAPUR</option>
                      <option value="HAZARIBAG">HAZARIBAG</option>
                      <option value="CHAS">CHAS</option>
                      <option value="GIRIDIH">GIRIDIH</option>
                      <option value="HUBLI AND DHARWAD">HUBLI AND DHARWAD</option>
                      <option value="MYSORE">MYSORE</option>
                      <option value="GULBARGA">GULBARGA</option>
                      <option value="MANGALORE">MANGALORE</option>
                      <option value="BELGAUM">BELGAUM</option>
                      <option value="DAVANAGERE">DAVANAGERE</option>
                      <option value="BELLARY">BELLARY</option>
                      <option value="BIJAPUR">BIJAPUR</option>
                      <option value="SHIMOGA">SHIMOGA</option>
                      <option value="TUMKUR">TUMKUR</option>
                      <option value="RAICHUR"> RAICHUR</option>
                      <option value="BIDAR"> BIDAR</option>
                      <option value="HOSPET">HOSPET</option>
                      <option value="GADAG AND BETIGERI">GADAG AND BETIGERI</option>
                      <option value="BHADRAVATI">BHADRAVATI</option>
                      <option value="ROBERTSON PET">ROBERTSON PET</option>
                      <option value="ROBERTSON PET">ROBERTSON PET</option>
                      <option value="CHITRADURGA">CHITRADURGA</option>
                      <option value="KOLAR">KOLAR</option>
                      <option value="MANDYA">MANDYA</option>
                      <option value="HASSAN"> HASSAN</option>
                      <option value="UDUPI">UDUPI</option>
                      <option value="CHIKMAGALUR">CHIKMAGALUR</option>
                      <option value="BAGALKOT"> BAGALKOT</option>
                      <option value="RANIBENNUR"> RANIBENNUR</option>
                      <option value="GANGAWATI">GANGAWATI</option>
                      <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option>
                      <option value="KOCHI">KOCHI</option>
                      <option value="KOZHIKODE">KOZHIKODE</option>
                      <option value="KOLLAM">KOLLAM</option>
                      <option value="THRISSUR">THRISSUR</option>
                      <option value="ALAPPUZHA">ALAPPUZHA</option>
                      <option value="PALAKKAD">PALAKKAD</option>
                      <option value="DEWAS"> DEWAS</option>
                      <option value="SATNA">SATNA</option>
                      <option value="SAGAR">SAGAR</option>
                      <option value="RATLAM">RATLAM</option>
                      <option value="REWA">REWA</option>
                      <option value="MURWARA"> MURWARA</option>
                      <option value="SINGRAULI"> SINGRAULI</option>
                      <option value="BURHANPUR"> BURHANPUR</option>
                      <option value="KHANDWA"> KHANDWA</option>
                      <option value="MORENA">MORENA</option>
                      <option value="BHIND">BHIND</option>
                      <option value="GUNA"> GUNA</option>
                      <option value="SHIVPURI"> SHIVPURI</option>
                      <option value="VIDISHA">VIDISHA</option>
                      <option value="MANDSAUR"> MANDSAUR</option>
                      <option value="CHHINDWARA"> CHHINDWARA</option>
                      <option value="CHHATTARPUR">CHHATTARPUR</option>
                      <option value="NEEMUCH"> NEEMUCH</option>
                      <option value="PITHAMPUR"> PITHAMPUR</option>
                      <option value="DAMOH"> DAMOH </option>
                      <option value="HOSHANGABAD"> HOSHANGABAD</option>
                      <option value="SEHORE">SEHORE</option>
                      <option value="KHARGONE"> KHARGONE</option>
                      <option value="BETUL">BETUL</option>
                      <option value="DATIA">DATIA</option>
                      <option value="SEONI">SEONI</option>
                      <option value="NAGDA">NAGDA</option>
                      <option value="VASAI VIRAR">VASAI VIRAR</option>
                      <option value="LAKHISARAI">LAKHISARAI</option>
                      <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                      <option value="MIRA AND BHAYANDER"> MIRA AND BHAYANDER</option>
                      <option value="AMRAVATI">AMRAVATI</option>
                      <option value="NANDED WAGHALA">NANDED WAGHALA</option>
                      <option value="KOLHAPUR">KOLHAPUR</option>
                      <option value="ULHASNAGAR">ULHASNAGAR</option>
                      <option value="SANGLI MIRAJ KUPWAD">SANGLI MIRAJ KUPWAD</option>
                      <option value="MALEGAON">MALEGAON</option>
                      <option value="JALGAON">JALGAON</option>
                      <option value="AKOLA">AKOLA</option>
                      <option value="LATUR">LATUR</option>
                      <option value="DHULE">DHULE</option>
                      <option value="AHMADNAGAR">AHMADNAGAR</option>
                      <option value="CHANDRAPUR"> CHANDRAPUR</option>
                      <option value="PARBHANI">PARBHANI</option>
                      <option value="PARBHANI">PARBHANI</option>
                      <option value="JALNA">JALNA</option>
                      <option value="RAIGAD">RAIGAD</option>
                      <option value="AMBERNATH">AMBERNATH</option>
                      <option value="NAVI MUMBAI PANVEL ">NAVI MUMBAI PANVEL </option>
                      <option value="BHUSAWAL">BHUSAWAL</option>
                      <option value="PANVEL">PANVEL</option>
                      <option value="BADALAPUR">BADALAPUR</option>
                      <option value="BID">BID</option>
                      <option value="GONDIYA"> GONDIYA</option>
                      <option value="SATARA">SATARA</option>
                      <option value="BARSHI">BARSHI</option>
                      <option value="YAVATMAL">YAVATMAL</option>
                      <option value="ACHALPUR">ACHALPUR</option>
                      <option value="OSMANABAD"> OSMANABAD</option>
                      <option value="NANDURBAR">NANDURBAR</option>
                      <option value="WARDHA"> WARDHA</option>
                      <option value="UDGIR"> UDGIR</option>
                      <option value="HINGANGHAT">HINGANGHAT</option>
                      <option value="IMPHAL">IMPHAL</option>
                      <option value="SHILLONG">SHILLONG</option>
                      <option value="AIZAWL"> AIZAWL</option>
                      <option value="DIMAPUR"> DIMAPUR</option>
                      <option value="BHUBANESWAR"> BHUBANESWAR</option>
                      <option value="CUTTACK">CUTTACK</option>
                      <option value="BRAHMAPUR TOWN"> BRAHMAPUR TOWN</option>
                      <option value="RAURKELA  INDUSTRIAL">RAURKELA INDUSTRIAL </option>
                      <option value="TOWNSHIP">TOWNSHIP</option>
                      <option value="PURI TOWN">PURI TOWN</option>
                      <option value="SAMBALPUR">SAMBALPUR</option>
                      <option value="BALESHWAR">BALESHWAR</option>
                      <option value="BARIPADA">BARIPADA</option>
                      <option value="BHADRAK"> BHADRAK</option>
                      <option value="OZHUKARAI">OZHUKARAI</option>
                      <option value="PUDUCHERRY">PUDUCHERRY</option>
                      <option value="BATHINDA">BATHINDA</option>
                      <option value="HOSHIARPUR">HOSHIARPUR</option>
                      <option value="BATALA"> BATALA</option>
                      <option value="MOGA">MOGA</option>
                      <option value="PATHANKOT">PATHANKOT</option>
                      <option value="ABOHAR">ABOHAR</option>
                      <option value="MALERKOTLA">MALERKOTLA</option>
                      <option value="KHANNA">KHANNA</option>
                      <option value="MUKTSAR"> MUKTSAR</option>
                      <option value="BARNALA"> BARNALA</option>
                      <option value="FIROZPUR">FIROZPUR</option>
                      <option value="KAPURTHALA">KAPURTHALA</option>
                      <option value="AJMER">AJMER</option>
                      <option value="BHILWARA"> BHILWARA</option>
                      <option value="ALWAR"> ALWAR</option>
                      <option value="BHARATPUR">BHARATPUR</option>
                      <option value="PALI">PALI</option>
                      <option value="SIKAR"> SIKAR</option>
                      <option value="GANGANAGAR"> GANGANAGAR</option>
                      <option value="TONK"> TONK</option>
                      <option value="KISHANGARH"> KISHANGARH</option>
                      <option value="HANUMANGARH"> HANUMANGARH</option>
                      <option value="DHAULPUR">DHAULPUR</option>
                      <option value="BEAWAR">BEAWAR</option>
                      <option value="SAWAI MADHOPUR"> SAWAI MADHOPUR</option>
                      <option value="CHURU"> CHURU</option>
                      <option value="JHUNJHUNUN"> JHUNJHUNUN</option>
                      <option value="GANGAPUR"> GANGAPUR</option>
                      <option value="BARAN">BARAN</option>
                      <option value="CHITTAURGARH"> CHITTAURGARH</option>
                      <option value="HINDAUN"> HINDAUN</option>
                      <option value="BUNDI">BUNDI</option>
                      <option value="NAGAUR">NAGAUR</option>
                      <option value="SUJANGARH">SUJANGARH</option>
                      <option value="BANSWARA"> BANSWARA</option>
                      <option value="GANGTOK"> GANGTOK</option>
                      <option value="CHENNAI">CHENNAI</option>
                      <option value="COIMBATORE">COIMBATORE</option>
                      <option value="MADURAI"> MADURAI</option>
                      <option value="TIRUCHIRAPPALLI">TIRUCHIRAPPALLI</option>
                      <option value="SALEM">SALEM</option>
                      <option value="TIRUNELVELI">TIRUNELVELI</option>
                      <option value="AMBATTUR">AMBATTUR</option>
                      <option value="TIRUPPUR"> TIRUPPUR</option>
                      <option value="AVADI"> AVADI</option>
                      <option value="TIRUVOTTIYUR"> TIRUVOTTIYUR</option>
                      <option value="THOOTHUKKUDI"> THOOTHUKKUDI</option>
                      <option value="NAGERCOIL"> NAGERCOIL</option>
                      <option value="THANJAVUR"> THANJAVUR</option>
                      <option value="PALLAVARAM"> PALLAVARAM</option>
                      <option value="DINDIGUL"> DINDIGUL</option>
                      <option value="VELLORE">VELLORE</option>
                      <option value="ERODE"> ERODE</option>
                      <option value="TIRUVANNAMALAI">TIRUVANNAMALAI</option>
                      <option value="TAMBARAM">TAMBARAM</option>
                      <option value="CUDDALORE">CUDDALORE</option>
                      <option value="ALANDUR">ALANDUR</option>
                      <option value="KANCHEEPURAM">KANCHEEPURAM</option>
                      <option value="KUMBAKONAM">KUMBAKONAM</option>
                      <option value="RAJAPALAYAM"> RAJAPALAYAM</option>
                      <option value="KURICHI"> KURICHI</option>
                      <option value="MADAVARAM">MADAVARAM</option>
                      <option value="PUDUKKOTTAI"> PUDUKKOTTAI</option>
                      <option value="HOSUR">HOSUR</option>
                      <option value="AMBUR">AMBUR</option>
                      <option value="KARAIKKUDI">KARAIKKUDI</option>
                      <option value="NEYVELI">NEYVELI</option>
                      <option value="NAGAPATTINAM">NAGAPATTINAM</option>
                      <option value="AGARTALA">AGARTALA</option>
                      <option value="SAHARANPUR">SAHARANPUR</option>
                      <option value="FIROZABAD">FIROZABAD</option>
                      <option value="LONI">LONI</option>
                      <option value="MUZAFFARNAGAR">MUZAFFARNAGAR</option>
                      <option value="SHAHJAHANPUR"> SHAHJAHANPUR</option>
                      <option value="RAMPUR"> RAMPUR</option>
                      <option value="FATEHGARH"> FATEHGARH</option>
                      <option value="MAUNATH BHANJAN"> MAUNATH BHANJAN</option>
                      <option value="HAPUR"> HAPUR</option>
                      <option value="FARRUKHABAD "> FARRUKHABAD </option>
                      <option value="MIRZAPUR ">MIRZAPUR </option>
                      <option value="ETAWAH ">ETAWAH </option>
                      <option value="VINDHYACHAL"> VINDHYACHAL</option>
                      <option value="BULANDSHAHR"> BULANDSHAHR</option>
                      <option value="SAMBHAL"> SAMBHAL</option>
                      <option value="AMROHA"> AMROHA</option>
                      <option value="FATEHPUR"> FATEHPUR</option>
                      <option value="RAE BARELI"> RAE BARELI</option>
                      <option value="KHORA">KHORA</option>
                      <option value="ORAI"> ORAI</option>
                      <option value="BAHRAICH"> BAHRAICH</option>
                      <option value="JAUNPUR">JAUNPUR</option>
                      <option value="UNNAO"> UNNAO</option>
                      <option value="SITAPUR">SITAPUR</option>
                      <option value="FAIZABAD">FAIZABAD</option>
                      <option value="BUDAUN">BUDAUN</option>
                      <option value="BANDA">BANDA</option>
                      <option value="LAKHIMPUR">LAKHIMPUR</option>
                      <option value="HATHRAS">HATHRAS</option>
                      <option value="LALITPUR">LALITPUR</option>
                      <option value="MODINAGAR"> MODINAGAR</option>
                      <option value="DEORIA"> DEORIA</option>
                      <option value="PILIBHIT"> PILIBHIT</option>
                      <option value="HARDOI"> HARDOI</option>
                      <option value="MAINPURI"> MAINPURI</option>
                      <option value="ETAH"> ETAH</option>
                      <option value="BASTI">BASTI</option>
                      <option value="CHANDAUSI"> CHANDAUSI</option>
                      <option value="GONDA">GONDA</option>
                      <option value="AKBARPUR">AKBARPUR</option>
                      <option value="KHURJA">KHURJA</option>
                      <option value="AZAMGARH">AZAMGARH</option>
                      <option value="GHAZIPUR">GHAZIPUR</option>
                      <option value="MUGHALSARAI">MUGHALSARAI</option>
                      <option value="SHIKOHABAD"> SHIKOHABAD</option>
                      <option value="SULTANPUR">SULTANPUR</option>
                      <option value="SHAMLI">SHAMLI</option>
                      <option value="BALLIA"> BALLIA</option>
                      <option value="GREATER NOIDA"> GREATER NOIDA</option>
                      <option value="KASGANJ">KASGANJ</option>
                      <option value="KATHGODAM">KATHGODAM</option>
                      <option value="RUDRAPUR">RUDRAPUR</option>
                      <option value="KASHIPUR">KASHIPUR</option>
                      <option value="ROORKEE">ROORKEE</option>
                      <option value="DURGAPUR">DURGAPUR</option>
                      <option value="SILIGURI"> SILIGURI</option>
                      <option value="MAHESHTALA">MAHESHTALA</option>
                      <option value="SOUTH DUM DUM">SOUTH DUM DUM</option>
                      <option value="RAJARHAT GOPALPUR">RAJARHAT GOPALPUR</option>
                      <option value="BHATPARA">BHATPARA</option>
                      <option value="KAMARHATI">KAMARHATI</option>
                      <option value="BARDDHAMAN">BARDDHAMAN</option>
                      <option value="BALLY"> BALLY</option>
                      <option value="BARASAT">BARASAT</option>
                      <option value="NORTH DUM DUM">NORTH DUM DUM</option>
                      <option value="BARANAGAR">BARANAGAR</option>
                      <option value="ULUBERIA">ULUBERIA</option>
                      <option value="NAIHATI">NAIHATI</option>
                      <option value="BIDHAN NAGAR">BIDHAN NAGAR</option>
                      <option value="ENGLISH BAZAR">ENGLISH BAZAR</option>
                      <option value="HALDIA">HALDIA</option>
                      <option value="MADHYAMGRAM"> MADHYAMGRAM</option>
                      <option value="BAHARAMPUR"> BAHARAMPUR</option>
                      <option value="RAIGANJ"> RAIGANJ</option>
                      <option value="SERAMPORE">SERAMPORE</option>
                      <option value="HUGLI AND CHINSURAH">HUGLI AND CHINSURAH</option>
                      <option value="MEDINIPUR "> MEDINIPUR </option>
                      <option value="CHANDANNAGAR">CHANDANNAGAR</option>
                      <option value="UTTARPARA KOTRUNG"> UTTARPARA KOTRUNG</option>
                      <option value="KRISHNANAGAR"> KRISHNANAGAR</option>
                      <option value="BARRACKPUR"> BARRACKPUR</option>
                      <option value="SANTIPUR"> SANTIPUR</option>
                      <option value="BALURGHAT"> BALURGHAT</option>
                      <option value="HABRA"> HABRA</option>
                      <option value="JAMURIA"> JAMURIA</option>
                      <option value="BANKURA">BANKURA</option>
                      <option value="NORTH BARRACKPUR"> NORTH BARRACKPUR</option>
                      <option value="RANIGANJ"> RANIGANJ</option>
                      <option value="KANCHRAPARA">KANCHRAPARA</option>
                      <option value="DABGRAM"> DABGRAM</option>
                      <option value="DARJILING">DARJILING</option>
                      <option value="TITAGARH">TITAGARH</option>
                      <option value="DUM DUM">DUM DUM</option>
                      <option value="BALLY TOWN">BALLY TOWN</option>
                      <option value="CHAMPDANI">CHAMPDANI</option>
                      <option value="BONGAON">BONGAON</option>
                      <option value="KHARDAHA">KHARDAHA</option>
                      <option value="JALPAIGURI">JALPAIGURI</option>
                      <option value="BANSBERIA">BANSBERIA</option>
                      <option value="BHADRESWAR">BHADRESWAR</option>
                      <option value="KALYANI">KALYANI</option>
                      <option value="HARIDWAR">HARIDWAR</option>
                      <option value="BATHINDAR">BATHINDA</option>
                      <option value="AURANGABAD-BIHAR">AURANGABAD-BIHAR</option>
                      <option value="ERNAKULAM">ERNAKULAM</option>
                      <option value="BHIWANDI MAHARASHTRA">BHIWANDI MAHARASHTRA</option>
                      <option value="BHIWANI HARYANA">BHIWANI HARYANA</option>
                      <option value="BHIWADI RAJASTHAN">BHIWADI RAJASTHAN</option>
                      <option value="PRATAPGARH">PRATAPGARH</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label> Time : <span> *</span></label>
                    <select name="drptime" id="drptime" class="form-control" style="color:Black;text-transform: uppercase;">
                      <option value="9 AM-11 AM">9 AM-11 AM</option>
                      <option value="11 AM-1 PM">11 AM-1 PM</option>
                      <option value="1 PM-3 PM">1 PM-3 PM</option>
                      <option value="3 PM-5 PM">3 PM-5 PM</option>
                      <option value="5 PM-7 PM">5 PM-7 PM</option>
                      <option value="7 PM-9 PM">7 PM-9 PM</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Date : <span> *</span></label>
                    <span class="phone1">
                      <input type="text" class="form-control" name="phone" placeholder="Date*"   required /></span>
                  </div>

                  <div class="form-group">
                    <label>Mobile Number : <span> *</span></label>
                    <span class="phone1">
                      <input type="text" class="form-control" name="phone" placeholder="Mobile No*" pattern="(?:\+?\d[91]-)?(?:\d{3}-)?\d{10}"   required /></span>
                  </div>

                  <div class="form-group">
                    <label>Address: <span> *</span></label>
                    <span class="phone1">
                      <input type="text" class="form-control" name="phone" placeholder="Address*" required /></span>
                  </div>
                </div>

                <div class="section_sub_btn">

                  <button class="btn btn-default" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button class="btn btn-default" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

                </div>

              </form>
            </div>
           
          </div>

          <div class="col-md-5">
            <div class="thumbnail">
              <img src="images/Wood-Furniture-Repair.jpg" alt="...">
              <div class="caption">
                <h4>You Can Also Book Your Service <br> On Call :- <span style="color:red;  font:bold"> 8004561000</span> <br>
                  Timing :- 7 am To 9 pm</h4>
                <p>



                </p>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>

  <br>

  <footer class="third-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="footer_top">
            <h4>Connect With Us</h4>

            <ul>
              <li> <a href="http://facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://linkedin.com/"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://google.com/"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </li>
              <li> <a href="http://youtu.be/"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
              <li> <a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
            </ul>
          </div>




        </div>
      </div>
    </div>

    <div class="footer_bottom fourth-bg">
      <!-- Keep Footer Credit Links Intact -->
      <p> 2018 &copy; All rights Reserved <a href="index.php">Micronet Broadband Enterprises </a> Designed & Developed By <a href="www.gltechnocraft.com">GLT Pvt, Ltd.</a> </p>
      <a href="#" class="backtop"> ^ </a>
    </div>

  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/interface.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#menu_slide").click(function() {
        $("#navbar").slideToggle('normal');
      });
    });
  </script>
  <!--Menu Js Right Menu-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#navbar > ul > li:has(ul)').addClass("has-sub");
      $('#navbar > ul > li > a').click(function() {
        var checkElement = $(this).next();
        $('#navbar li').removeClass('dropdown');
        $(this).closest('li').addClass('dropdown');
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
          $(this).closest('li').removeClass('dropdown');
          checkElement.slideUp('normal');
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
          $('#navbar ul ul:visible').slideUp('normal');
          checkElement.slideDown('normal');
        }
        if (checkElement.is('ul')) {
          return false;
        } else {
          return true;
        }
      });
    }); 
  </script>
  <script type="text/javascript">
    $("#navbar").on("click", function(event) {
      event.stopPropagation();
    });
    $(".dropdown-menu").on("click", function(event) {
      event.stopPropagation();
    });
    $(document).on("click", function(event) {
      $(".dropdown-menu").slideUp('normal');
    });

    $(".navbar-header").on("click", function(event) {
      event.stopPropagation();
    });
    $(document).on("click", function(event) {
      $("#navbar").slideUp('normal');
    });
  </script>

</body>
<!-- JS Plugins -->

</html>