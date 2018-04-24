@extends('layouts.app')

@section('content')
<main>
      <div class="main-wrapper">
        <div class="container-fluid">
          <div style="height: 100vh">
		<div class="md-form input-group">
	<span class="input-group-btn">
	<input type="text" id="search" class="form-control col-md-10">
    <label for="search">Search</label>
	</span>
	<button class="btn btn-primary btn-sm"><i class="fa fa-search mr-1"></i> Search</button>
</div>
<hr>
            <!-- Card -->
            <div class="card">

                <!-- Card body -->
                <div class="card-body">

                    <!-- Material form register -->
                    <!-- Default horizontal form -->
                    <form>
                        <!-- Grid row -->
                        <div class="form-row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <label for="name"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <select class="form-control" id="gender" name="gender">
									<option value="">Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
									</select>
                                    <label for="gender"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="number" class="form-control" id="age" placeholder="Age">
                                    <label for="age"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="missing_from" name="missing_from" placeholder="Missing From">
                                    <label for="missing_from"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="missing_date" name="missing_date" placeholder="Date of Missing">
                                    <label for="missing_date"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
								<select class="form-control" id="district" name="district">
								<option value="">District</option>
								<option value="ALA">Alappuzha</option>
								<option value="EKM">Ernakulam</option>
								<option value="IDK">Idukki</option>
								<option value="CAN">Kannur</option>
								<option value="KGD">Kasargod</option>
								<option value="QLN">Kollam</option>
								<option value="KTM">Kottayam</option>
								<option value="CLT">Kozhikode</option>
								<option value="MLP">Malappuram</option>
								<option value="PKD">Palakkad</option>
								<option value="PTA">Pathanamthitta</option>
								<option value="TVM">Thiruvananthapuram</option>
								<option value="TCR">Thrissur</option>
								<option value="WYD">Wayanad</option>
								</select>
                                <label for="district"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="ps" name="ps" placeholder="Police Station">
                                    <label for="ps"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
							<!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                     <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                     <label for="height"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="complexion" name="complexion">
									<option value="">Complexion</option>
									<option value="dark">Dark</option>
									<option value="fair">Fair</option>
									<option value="very_fair">Very Fair</option>
									<option value="wheatish">Wheatish</option>
									<option value="sallow">Sallow</option>
									</select>
                                     
                                     <label for="complexion"></label>
                                </div>
                            </div><!-- Grid column -->
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="scar" name="scar">
									<option selected="selected" value="0">Scar</option>
									<option value="1">BACK LEFT SIDE</option>
									<option value="2">BACK RIGHT SIDE</option>
									<option value="3">CHEEK LEFT</option>
									<option value="4">CHEEK RIGHT</option>
									<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
									<option value="6">CHEST MIDDLE</option>
									<option value="7">HIP – LEFT SIDE</option>
									<option value="8">CHEST LEFT SIDE</option>
									<option value="9">HIP – RIGHT SIDE</option>
									<option value="10">CHEST RIGHT SIDE</option>
									<option value="11">RIB – LEFT SIDE</option>
									<option value="12">FINGER(S)-HAND-RIGHT</option>
									<option value="13">CHIN</option>
									<option value="14">RIB – RIGHT SIDE</option>
									<option value="15">FINGER(S)-FOOT-LEFT</option>
									<option value="16">EAR LEFT</option>
									<option value="17">STOMACH – RIGHT SIDE</option>
									<option value="18">FINGER(S)-FOOT-RIGHT</option>
									<option value="19">EAR RIGHT</option>
									<option value="20">STOMACH – LEFT SIDE</option>
									<option value="21">ANKLE</option>
									<option value="22">UPPER ARM – LEFT</option>
									<option value="23">WRIST</option>
									<option value="24">UPPER ARM – RIGHT</option>
									<option value="25">ELBOW</option>
									<option value="26">WRIST – RIGHT</option>
									<option value="27">ABDOMEN</option>
									<option value="28">UPPER ARM</option>
									<option value="29">CLEFT LIP</option>
									<option value="30">KNEE RIGHT</option>
									<option value="31">EYE BROW LEFT</option>
									<option value="32">EYE BROW RIGHT</option>
									<option value="33">FACE</option>
									<option value="34">FOOT LEFT</option>
									<option value="35">WRIST – LEFT</option>
									<option value="36">FOOT RIGHT</option>
									<option value="37">ARMPIT LEFT</option>
									<option value="38">FOREHEAD</option>
									<option value="39">ARMPIT RIGHT</option>
									<option value="40">HAND LEFT</option>
									<option value="41">COLLAR BONE LEFT</option>
									<option value="42">KNEE LEFT</option>
									<option value="43">FOREARM LEFT- LETTER</option>
									<option value="44">COLLAR BONE RIGHT</option>
									<option value="45">RIB</option>
									<option value="46">FOREARM LEFT-FIGURE</option>
									<option value="47">HIP</option>
									<option value="48">HAND RIGHT</option>
									<option value="49">TOE LEFT</option>
									<option value="50">TOE RIGHT</option>
									<option value="51">THUMB LEFT</option>
									<option value="52">THUMB RIGHT</option>
									<option value="53">ANKLE LEFT SIDE</option>
									<option value="54">ANKLE RIGHT SIDE</option>
									<option value="55">ELBOW LEFT SIDE</option>
									<option value="56">FOREARM RIGHT- FIGURE</option>
									<option value="57">FOREARM RIGHT- LETTER</option>
									<option value="58">HEAD</option>
									<option value="59">LEG LEFT</option>
									<option value="60">LEG RIGHT</option>
									<option value="61">LIP LOWER</option>
									<option value="62">LIP UPPER</option>
									<option value="63">ELBOW RIGHT SIDE</option>
									<option value="64">NECK</option>
									<option value="65">FINGER(S)-FOOT–THUMB-LEFT</option>
									<option value="66">NOSE</option>
									<option value="67">FINGER(S)-FOOT–2ND-LEFT</option>
									<option value="68">SHOULDER LEFT</option>
									<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
									<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
									<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
									<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
									<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
									<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
									<option value="75">FINGER(S)-HAND–RING-LEFT</option>
									<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
									<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
									<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
									<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
									<option value="80">SHOULDER RIGHT</option>
									<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
									<option value="82">STOMACH</option>
									<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
									<option value="84">THIGH LEFT</option>
									<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
									<option value="86">THIGH RIGHT</option>
									<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
									<option value="88">PALM RIGHT</option>
									<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
									<option value="90">PALM LEFT</option>
									<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
									<option value="92">FINGER(S)-HAND-LEFT</option>
									</select>
                                     
                                     <label for="scar"></label>
                                </div>
                            </div><!-- Grid column -->
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" name="mole" id="mole">
									<option selected="selected" value="0">Mole</option>
									<option value="1">BACK LEFT SIDE</option>
									<option value="2">BACK RIGHT SIDE</option>
									<option value="3">CHEEK LEFT</option>
									<option value="4">CHEEK RIGHT</option>
									<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
									<option value="6">CHEST MIDDLE</option>
									<option value="7">HIP – LEFT SIDE</option>
									<option value="8">CHEST LEFT SIDE</option>
									<option value="9">HIP – RIGHT SIDE</option>
									<option value="10">CHEST RIGHT SIDE</option>
									<option value="11">RIB – LEFT SIDE</option>
									<option value="12">FINGER(S)-HAND-RIGHT</option>
									<option value="13">CHIN</option>
									<option value="14">RIB – RIGHT SIDE</option>
									<option value="15">FINGER(S)-FOOT-LEFT</option>
									<option value="16">EAR LEFT</option>
									<option value="17">STOMACH – RIGHT SIDE</option>
									<option value="18">FINGER(S)-FOOT-RIGHT</option>
									<option value="19">EAR RIGHT</option>
									<option value="20">STOMACH – LEFT SIDE</option>
									<option value="21">ANKLE</option>
									<option value="22">UPPER ARM – LEFT</option>
									<option value="23">WRIST</option>
									<option value="24">UPPER ARM – RIGHT</option>
									<option value="25">ELBOW</option>
									<option value="26">WRIST – RIGHT</option>
									<option value="27">ABDOMEN</option>
									<option value="28">UPPER ARM</option>
									<option value="29">CLEFT LIP</option>
									<option value="30">KNEE RIGHT</option>
									<option value="31">EYE BROW LEFT</option>
									<option value="32">EYE BROW RIGHT</option>
									<option value="33">FACE</option>
									<option value="34">FOOT LEFT</option>
									<option value="35">WRIST – LEFT</option>
									<option value="36">FOOT RIGHT</option>
									<option value="37">ARMPIT LEFT</option>
									<option value="38">FOREHEAD</option>
									<option value="39">ARMPIT RIGHT</option>
									<option value="40">HAND LEFT</option>
									<option value="41">COLLAR BONE LEFT</option>
									<option value="42">KNEE LEFT</option>
									<option value="43">FOREARM LEFT- LETTER</option>
									<option value="44">COLLAR BONE RIGHT</option>
									<option value="45">RIB</option>
									<option value="46">FOREARM LEFT-FIGURE</option>
									<option value="47">HIP</option>
									<option value="48">HAND RIGHT</option>
									<option value="49">TOE LEFT</option>
									<option value="50">TOE RIGHT</option>
									<option value="51">THUMB LEFT</option>
									<option value="52">THUMB RIGHT</option>
									<option value="53">ANKLE LEFT SIDE</option>
									<option value="54">ANKLE RIGHT SIDE</option>
									<option value="55">ELBOW LEFT SIDE</option>
									<option value="56">FOREARM RIGHT- FIGURE</option>
									<option value="57">FOREARM RIGHT- LETTER</option>
									<option value="58">HEAD</option>
									<option value="59">LEG LEFT</option>
									<option value="60">LEG RIGHT</option>
									<option value="61">LIP LOWER</option>
									<option value="62">LIP UPPER</option>
									<option value="63">ELBOW RIGHT SIDE</option>
									<option value="64">NECK</option>
									<option value="65">FINGER(S)-FOOT–THUMB-LEFT</option>
									<option value="66">NOSE</option>
									<option value="67">FINGER(S)-FOOT–2ND-LEFT</option>
									<option value="68">SHOULDER LEFT</option>
									<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
									<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
									<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
									<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
									<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
									<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
									<option value="75">FINGER(S)-HAND–RING-LEFT</option>
									<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
									<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
									<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
									<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
									<option value="80">SHOULDER RIGHT</option>
									<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
									<option value="82">STOMACH</option>
									<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
									<option value="84">THIGH LEFT</option>
									<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
									<option value="86">THIGH RIGHT</option>
									<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
									<option value="88">PALM RIGHT</option>
									<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
									<option value="90">PALM LEFT</option>
									<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
									<option value="92">FINGER(S)-HAND-LEFT</option>
									</select>
                                     
                                     <label for="mole"></label>
                                </div>
                            </div><!-- Grid column -->
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="tatto" name="tatto">
									<option selected="selected" value="0">Tatto</option>
									<option value="1">BACK LEFT SIDE</option>
									<option value="2">BACK RIGHT SIDE</option>
									<option value="3">CHEEK LEFT</option>
									<option value="4">CHEEK RIGHT</option>
									<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
									<option value="6">CHEST MIDDLE</option>
									<option value="7">HIP – LEFT SIDE</option>
									<option value="8">CHEST LEFT SIDE</option>
									<option value="9">HIP – RIGHT SIDE</option>
									<option value="10">CHEST RIGHT SIDE</option>
									<option value="11">RIB – LEFT SIDE</option>
									<option value="12">FINGER(S)-HAND-RIGHT</option>
									<option value="13">CHIN</option>
									<option value="14">RIB – RIGHT SIDE</option>
									<option value="15">FINGER(S)-FOOT-LEFT</option>
									<option value="16">EAR LEFT</option>
									<option value="17">STOMACH – RIGHT SIDE</option>
									<option value="18">FINGER(S)-FOOT-RIGHT</option>
									<option value="19">EAR RIGHT</option>
									<option value="20">STOMACH – LEFT SIDE</option>
									<option value="21">ANKLE</option>
									<option value="22">UPPER ARM – LEFT</option>
									<option value="23">WRIST</option>
									<option value="24">UPPER ARM – RIGHT</option>
									<option value="25">ELBOW</option>
									<option value="26">WRIST – RIGHT</option>
									<option value="27">ABDOMEN</option>
									<option value="28">UPPER ARM</option>
									<option value="29">CLEFT LIP</option>
									<option value="30">KNEE RIGHT</option>
									<option value="31">EYE BROW LEFT</option>
									<option value="32">EYE BROW RIGHT</option>
									<option value="33">FACE</option>
									<option value="34">FOOT LEFT</option>
									<option value="35">WRIST – LEFT</option>
									<option value="36">FOOT RIGHT</option>
									<option value="37">ARMPIT LEFT</option>
									<option value="38">FOREHEAD</option>
									<option value="39">ARMPIT RIGHT</option>
									<option value="40">HAND LEFT</option>
									<option value="41">COLLAR BONE LEFT</option>
									<option value="42">KNEE LEFT</option>
									<option value="43">FOREARM LEFT- LETTER</option>
									<option value="44">COLLAR BONE RIGHT</option>
									<option value="45">RIB</option>
									<option value="46">FOREARM LEFT-FIGURE</option>
									<option value="47">HIP</option>
									<option value="48">HAND RIGHT</option>
									<option value="49">TOE LEFT</option>
									<option value="50">TOE RIGHT</option>
									<option value="51">THUMB LEFT</option>
									<option value="52">THUMB RIGHT</option>
									<option value="53">ANKLE LEFT SIDE</option>
									<option value="54">ANKLE RIGHT SIDE</option>
									<option value="55">ELBOW LEFT SIDE</option>
									<option value="56">FOREARM RIGHT- FIGURE</option>
									<option value="57">FOREARM RIGHT- LETTER</option>
									<option value="58">HEAD</option>
									<option value="59">LEG LEFT</option>
									<option value="60">LEG RIGHT</option>
									<option value="61">LIP LOWER</option>
									<option value="62">LIP UPPER</option>
									<option value="63">ELBOW RIGHT SIDE</option>
									<option value="64">NECK</option>
									<option value="65">FINGER(S)-FOOT–THUMB-LEFT</option>
									<option value="66">NOSE</option>
									<option value="67">FINGER(S)-FOOT–2ND-LEFT</option>
									<option value="68">SHOULDER LEFT</option>
									<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
									<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
									<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
									<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
									<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
									<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
									<option value="75">FINGER(S)-HAND–RING-LEFT</option>
									<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
									<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
									<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
									<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
									<option value="80">SHOULDER RIGHT</option>
									<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
									<option value="82">STOMACH</option>
									<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
									<option value="84">THIGH LEFT</option>
									<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
									<option value="86">THIGH RIGHT</option>
									<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
									<option value="88">PALM RIGHT</option>
									<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
									<option value="90">PALM LEFT</option>
									<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
									<option value="92">FINGER(S)-HAND-LEFT</option>
									</select>
                                     
                                     <label for="tatto"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="face" name="face">
									<option selected="selected" value="0">Face</option>
									<option value="1">POXPITTED</option>
									<option value="2">PROMINENT CHEEK</option>
									<option value="3">PROTRUDING CHIN</option>
									<option value="4">DIMPLED CHEEK</option>
									<option value="5">RECEDING FOREHEAD</option>
									<option value="6">DIMPLED CHIN</option>
									<option value="7">ROUND</option>
									<option value="8">DOUBLE CHIN</option>
									<option value="9">SQUARE/HEAVY JAW</option>
									<option value="10">FOREHEAD BROAD</option>
									<option value="11">SUNKEN CHEEKS</option>
									<option value="12">FOREHEAD NARROW</option>
									<option value="13">WRINKLED</option>
									<option value="14">HIGH CHEEK</option>
									<option value="15">LONG</option>
									<option value="16">OVAL</option>
									</select>
                                     <label for="face"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="lower_dress" name="lower_dress">
									<option selected="selected" value="0">Lower Dress</option>
									<option value="1">PANT</option>
									<option value="2">HALF PANT</option>
									<option value="3">DHOTHI</option>
									<option value="4">LUNGI</option>
									<option value="5">SHORTS</option>
									<option value="6">JEANS PANT</option>
									<option value="7">BURMUDAS</option>
									<option value="8">PYJAMA PANT</option>
									<option value="9">¾TH PANT</option>
									<option value="10">SAFARI SUIT</option>
									<option value="11">TRACK SUIT</option>
									</select>
                                     <label for="lower_dress"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="lower_dress_color" name="lower_dress_color">
									<option selected="selected" value="0">Lower Dress Color</option>
									<option value="1">light pink</option>
									<option value="2">light salmon</option>
									<option value="3">light seagreen</option>
									<option value="4">light skyblue</option>
									<option value="5">light slategray</option>
									<option value="6">light steelblue</option>
									<option value="7">light yellow</option>
									<option value="8">pink</option>
									<option value="9">lime</option>
									<option value="10">plum</option>
									<option value="11">limegreen</option>
									<option value="12">powderblue</option>
									<option value="13">linen</option>
									<option value="14">purple</option>
									<option value="15">red</option>
									<option value="16">rosy brown</option>
									<option value="17">royal blue</option>
									<option value="18">saddle brown</option>
									<option value="19">salmon</option>
									<option value="20">sandy brown</option>
									<option value="21">magenta</option>
									<option value="22">maroon</option>
									<option value="23">medium aquamarine</option>
									<option value="24">medium blue</option>
									<option value="25">medium orchid</option>
									<option value="26">medium purple</option>
									<option value="27">medium seagreen</option>
									<option value="28">seagreen</option>
									<option value="29">medium slateblue</option>
									<option value="30">seashell</option>
									<option value="31">medium springgreen</option>
									<option value="32">sienna</option>
									<option value="33">medium turquoise</option>
									<option value="34">aliceblue</option>
									<option value="35">silver</option>
									<option value="36">antiquewhite</option>
									<option value="37">skyblue</option>
									<option value="38">aqua</option>
									<option value="39">slateblue</option>
									<option value="40">aquamarine</option>
									<option value="41">slategray</option>
									<option value="42">azure</option>
									<option value="43">snow</option>
									<option value="44">beige</option>
									<option value="45">spring green</option>
									<option value="46">bisque</option>
									<option value="47">steelblue</option>
									<option value="48">black</option>
									<option value="49">blanched almond</option>
									<option value="50">medium violetred</option>
									<option value="51">midnight blue</option>
									<option value="52">mintcream</option>
									<option value="53">mistyrose</option>
									<option value="54">moccasin</option>
									<option value="55">navajowhite</option>
									<option value="56">navy</option>
									<option value="57">tan</option>
									<option value="58">oldlace</option>
									<option value="59">blue</option>
									<option value="60">teal</option>
									<option value="61">olive</option>
									<option value="62">blueviolet</option>
									<option value="63">thistle</option>
									<option value="64">olivedrab</option>
									<option value="65">brown</option>
									<option value="66">tomato</option>
									<option value="67">burlywood</option>
									<option value="68">turquoise</option>
									<option value="69">cadetblue</option>
									<option value="70">violet</option>
									<option value="71">chartreuse</option>
									<option value="72">wheat</option>
									<option value="73">chocolate</option>
									<option value="74">white</option>
									<option value="75">coral</option>
									<option value="76">white smoke</option>
									<option value="77">cornflowerblue</option>
									<option value="78">yellow</option>
									<option value="79">cornsilk</option>
									<option value="80">yellow green</option>
									<option value="81">crimson</option>
									<option value="82">cyan</option>
									<option value="83">dark blue</option>
									<option value="84">dark cyan</option>
									<option value="85">dark goldenrod</option>
									<option value="86">dark gray</option>
									<option value="87">dark green</option>
									<option value="88">dark khaki</option>
									<option value="89">dark magenta</option>
									<option value="90">dark olivegreen</option>
									<option value="91">dark orange</option>
									<option value="92">dark orchid</option>
									<option value="93">dark red</option>
									<option value="94">dark salmon</option>
									<option value="95">dark seagreen</option>
									<option value="96">dark slateblue</option>
									<option value="97">dark slategray</option>
									<option value="98">dark turquoise</option>
									<option value="99">dark violet</option>
									<option value="100">deep pink</option>
									<option value="101">deep skyblue</option>
									<option value="102">dim gray</option>
									<option value="103">dodge rblue</option>
									<option value="104">fire brick</option>
									<option value="105">floral white</option>
									<option value="106">forest green</option>
									<option value="107">fuchsia</option>
									<option value="108">gainsboro</option>
									<option value="109">ghost white</option>
									<option value="110">gold</option>
									<option value="111">golden rod</option>
									<option value="112">gray</option>
									<option value="113">green</option>
									<option value="114">green yellow</option>
									<option value="115">honeydew</option>
									<option value="116">hotpink</option>
									<option value="117">indianred</option>
									<option value="118">indigo</option>
									<option value="119">ivory</option>
									<option value="120">khaki</option>
									<option value="121">lavender</option>
									<option value="122">lavender blush</option>
									<option value="123">lawn green</option>
									<option value="124">lemon chiffon</option>
									<option value="125">light blue</option>
									<option value="126">light coral</option>
									<option value="127">light cyan</option>
									<option value="128">orange</option>
									<option value="129">light goldenrod yellow</option>
									<option value="130">orange red</option>
									<option value="131">light gray</option>
									<option value="132">orchid</option>
									<option value="133">light green</option>
									<option value="134">pale goldenrod</option>
									<option value="135">pale green</option>
									<option value="136">pale turquoise</option>
									<option value="137">pale violetred</option>
									<option value="138">papayawhip</option>
									<option value="139">peachpuff</option>
									<option value="140">peru</option>
									</select>
                                     <label for="lower_dress_color"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="upper_dress" name="upper_dress">
									<option selected="selected" value="0">Upper Dress</option>
									<option value="1">SHIRT (FULL)</option>
									<option value="2">SHIRT (HALF)</option>
									<option value="3">T-SHIRT (SLEEVELESS)</option>
									<option value="4">T-Shirt (FULL)</option>
									<option value="5">T-Shirt (HALF)</option>
									<option value="6">KADHAR SHIRT</option>
									<option value="7">GURTHA</option>
									<option value="8">JEANS SHIRT</option>
									<option value="9">JERSY</option>
									<option value="10">PYJAMA</option>
									<option value="11">COLLAR LESS T-SHIRT (FULL/HALF)</option>
									<option value="12">SAFARI SHIRT</option>
									<option value="13">COAT</option>
									<option value="14">SWEATER</option>
									<option value="15">BARE BODY</option>
									<option value="16">STONE WASH SHIRT</option>
									<option value="17">SHORT SHIRT</option>
									</select>
                                     <label for="upper_dress"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
									<select class="form-control" id="upper_dress_color" name="upper_dress_color">
									<option selected="selected" value="0">Upper Dress Color</option>
									<option value="1">light pink</option>
									<option value="2">light salmon</option>
									<option value="3">light seagreen</option>
									<option value="4">light skyblue</option>
									<option value="5">light slategray</option>
									<option value="6">light steelblue</option>
									<option value="7">light yellow</option>
									<option value="8">pink</option>
									<option value="9">lime</option>
									<option value="10">plum</option>
									<option value="11">limegreen</option>
									<option value="12">powderblue</option>
									<option value="13">linen</option>
									<option value="14">purple</option>
									<option value="15">red</option>
									<option value="16">rosy brown</option>
									<option value="17">royal blue</option>
									<option value="18">saddle brown</option>
									<option value="19">salmon</option>
									<option value="20">sandy brown</option>
									<option value="21">magenta</option>
									<option value="22">maroon</option>
									<option value="23">medium aquamarine</option>
									<option value="24">medium blue</option>
									<option value="25">medium orchid</option>
									<option value="26">medium purple</option>
									<option value="27">medium seagreen</option>
									<option value="28">seagreen</option>
									<option value="29">medium slateblue</option>
									<option value="30">seashell</option>
									<option value="31">medium springgreen</option>
									<option value="32">sienna</option>
									<option value="33">medium turquoise</option>
									<option value="34">aliceblue</option>
									<option value="35">silver</option>
									<option value="36">antiquewhite</option>
									<option value="37">skyblue</option>
									<option value="38">aqua</option>
									<option value="39">slateblue</option>
									<option value="40">aquamarine</option>
									<option value="41">slategray</option>
									<option value="42">azure</option>
									<option value="43">snow</option>
									<option value="44">beige</option>
									<option value="45">spring green</option>
									<option value="46">bisque</option>
									<option value="47">steelblue</option>
									<option value="48">black</option>
									<option value="49">blanched almond</option>
									<option value="50">medium violetred</option>
									<option value="51">midnight blue</option>
									<option value="52">mintcream</option>
									<option value="53">mistyrose</option>
									<option value="54">moccasin</option>
									<option value="55">navajowhite</option>
									<option value="56">navy</option>
									<option value="57">tan</option>
									<option value="58">oldlace</option>
									<option value="59">blue</option>
									<option value="60">teal</option>
									<option value="61">olive</option>
									<option value="62">blueviolet</option>
									<option value="63">thistle</option>
									<option value="64">olivedrab</option>
									<option value="65">brown</option>
									<option value="66">tomato</option>
									<option value="67">burlywood</option>
									<option value="68">turquoise</option>
									<option value="69">cadetblue</option>
									<option value="70">violet</option>
									<option value="71">chartreuse</option>
									<option value="72">wheat</option>
									<option value="73">chocolate</option>
									<option value="74">white</option>
									<option value="75">coral</option>
									<option value="76">white smoke</option>
									<option value="77">cornflowerblue</option>
									<option value="78">yellow</option>
									<option value="79">cornsilk</option>
									<option value="80">yellow green</option>
									<option value="81">crimson</option>
									<option value="82">cyan</option>
									<option value="83">dark blue</option>
									<option value="84">dark cyan</option>
									<option value="85">dark goldenrod</option>
									<option value="86">dark gray</option>
									<option value="87">dark green</option>
									<option value="88">dark khaki</option>
									<option value="89">dark magenta</option>
									<option value="90">dark olivegreen</option>
									<option value="91">dark orange</option>
									<option value="92">dark orchid</option>
									<option value="93">dark red</option>
									<option value="94">dark salmon</option>
									<option value="95">dark seagreen</option>
									<option value="96">dark slateblue</option>
									<option value="97">dark slategray</option>
									<option value="98">dark turquoise</option>
									<option value="99">dark violet</option>
									<option value="100">deep pink</option>
									<option value="101">deep skyblue</option>
									<option value="102">dim gray</option>
									<option value="103">dodge rblue</option>
									<option value="104">fire brick</option>
									<option value="105">floral white</option>
									<option value="106">forest green</option>
									<option value="107">fuchsia</option>
									<option value="108">gainsboro</option>
									<option value="109">ghost white</option>
									<option value="110">gold</option>
									<option value="111">golden rod</option>
									<option value="112">gray</option>
									<option value="113">green</option>
									<option value="114">green yellow</option>
									<option value="115">honeydew</option>
									<option value="116">hotpink</option>
									<option value="117">indianred</option>
									<option value="118">indigo</option>
									<option value="119">ivory</option>
									<option value="120">khaki</option>
									<option value="121">lavender</option>
									<option value="122">lavender blush</option>
									<option value="123">lawn green</option>
									<option value="124">lemon chiffon</option>
									<option value="125">light blue</option>
									<option value="126">light coral</option>
									<option value="127">light cyan</option>
									<option value="128">orange</option>
									<option value="129">light goldenrod yellow</option>
									<option value="130">orange red</option>
									<option value="131">light gray</option>
									<option value="132">orchid</option>
									<option value="133">light green</option>
									<option value="134">pale goldenrod</option>
									<option value="135">pale green</option>
									<option value="136">pale turquoise</option>
									<option value="137">pale violetred</option>
									<option value="138">papayawhip</option>
									<option value="139">peachpuff</option>
									<option value="140">peru</option>
									</select>
                                     <label for="upper_dress_color"></label>
                                </div>
                            </div>
							<div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="file" class="form-control" id="image" placeholder="Image">
                                    <label for="inputCityMD"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-3">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                                    <label for="contact_number"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <!-- Material input -->
                                <div class="md-form form-group">
                                     <input type="text" class="form-control" id="notes" placeholder="Notes">
                                     <label for="notes"></label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    
                        <!-- Grid row -->
                        <div class="form-row">
                            <!-- Grid column -->
                            
                            <!-- Grid column -->
                      </div>
                      <!-- Grid row -->
                        <button type="submit" class="btn btn-primary btn-md">Register</button>
                    </form>
                    <!-- Default horizontal form -->
                    <!-- Material form register -->

                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->

          </div>
        </div>
      </div>
    </main>
@endsection
