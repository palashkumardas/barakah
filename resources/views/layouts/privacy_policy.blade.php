@extends('master')
@section('content')
@section('title','Terms & Conditions')
  <main id="main" style="margin-top: 80px;">

   <div class="container">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
    <h1 class="mt-5"><center> Privacy Policy</center></h1>
    
      <p>{!! $privacy->description !!}</p>
 {{--    <p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">1</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Introduction</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Welcome to&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Quick Convert London Ltd.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Quick Convert London Ltd.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;(“us”, “we”, or “our”) operates&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">https://</span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">quickconvert.co.uk/</span>
        </b>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;"></span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;(hereinafter referred to as&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Service”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Our Privacy Policy governs your visit to&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">https://</span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">quickconvert.co.uk</span>
        </b>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;"></span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;"> and explains how we collect, safeguard and disclose information that results from your use of our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Our Terms and Conditions (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Terms”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“agreement”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">2</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Definitions Service</span>
        </b>
     
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;means the&nbsp;https://</span>
 
        <span style="font-family: &quot;Open Sans&quot;; font-size: 13pt;">quickconvert.co.uk</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">website operated by&nbsp;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Quick Convert London Ltd.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">PERSONAL DATA</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">USAGE DATA</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">COOKIES</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;are small files stored on your device (computer or mobile device).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">DATA CONTROLLER</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data. </span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">The Quick Convert London Ltd., a company incorporated in England with registered number </span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">13974960</span>
        </b>
        <span style="font-family: &quot;Open Sans&quot;; font-size: 13pt;">&nbsp;and </span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Financial Conduct Authority (“FCA”) number is </span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">981851</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">for remittance service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">DATA PROCESSORS (OR SERVICE PROVIDERS)</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">DATA SUBJECT</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;is any living individual who is the subject of Personal Data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">THE USER</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">3</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Information Collection and Use</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We collect several different types of information for various purposes to provide and improve our Service to you.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">4</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Types of Data Collected</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Personal Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Personal Data”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">). Personally identifiable information may include, but is not limited to:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1. Email address : </span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">ali@chaltons.com</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2. First name and last name : </span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Quick Convert London Ltd.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3. Phone number : </span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">:+44 074500000399</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.4. Address, Country, State, Province, ZIP/Postal code, City :</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">28 Chalton Street
            London
            </span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">
            <br>
          </span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;"></span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">
            <br>
          </span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">NW1 1JH</span>
        </b>
        <b>
          <span class="15" style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;"></span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">
            <br>
          </span>
        </b>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">UNITED KINGDOM</span>
        </b>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">
            <o:p></o:p>
          </span>
        </b>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.5. Cookies and Usage Data</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Usage Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Usage Data”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Location Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may use and store information about your location if you give us permission to do so (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Location Data”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">). We use this data to provide features of our Service, to improve and customize our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">You can enable or disable location services when you use our Service at any time by way of your device settings.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Tracking Cookies Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Examples of Cookies we use:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Session Cookies:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;We use Session Cookies to operate our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Preference Cookies:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;We use Preference Cookies to remember your preferences and various settings.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Security Cookies:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;We use Security Cookies for security purposes.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.4.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Advertising Cookies:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Other Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">While using our Service, we may also collect the following information: sex, age, date of birth, place of birth, passport details, citizenship, registration at place of residence and actual address, telephone number (work, mobile), details of documents on education, qualification, professional training, employment agreements,&nbsp;</span>
        <a href="https://policymaker.io/non-disclosure-agreement/">
          <u>
            <span style="font-family: &quot;Open Sans&quot;; color: rgb(0, 0, 255); font-size: 13pt;">NDA agreements</span>
          </u>
        </a>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">, information on bonuses and compensation, information on marital status, family members, social security (or other taxpayer identification) number, office location and other data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">5</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Use of Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Quick Convert London Ltd.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;uses the collected data for various purposes:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1. to provide and maintain our Service;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2. to notify you about changes to our Service;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3. to allow you to participate in interactive features of our Service when you choose to do so;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.4. to provide customer support;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.5. to gather analysis or valuable information so that we can improve our Service;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.6. to monitor the usage of our Service;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.7. to detect, prevent and address technical issues;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.8. to fulfil any other purpose for which you provide it;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.12. in any other way we may describe when you provide the information;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.13. for any other purpose with your consent.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">6</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Retention of Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">7</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Transfer of Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you are located outside&nbsp;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">United Kingdom</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;and choose to provide information to us, please note that we transfer the data, including Personal Data, to&nbsp;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">United Kingdom</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;and process it there.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Quick Convert London Ltd.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">8</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Disclosure of Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may disclose personal information that we collect, or you provide:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;</span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Disclosure for Law Enforcement.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Business Transaction.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Other cases. We may disclose your information also:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.1. to our subsidiaries and affiliates;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.2. to contractors, service providers, and other third parties we use to support our business;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.3. to fulfill the purpose for which you provide it;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.4. for the purpose of including your company’s logo on our website;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.5. for any other purpose disclosed by us when you provide the information;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.6. with your consent in any other cases;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">9</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Security of Data</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">10</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Your Data Protection Rights Under General Data Protection Regulation (GDPR)</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at&nbsp;</span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">ali@chaltons.com</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">In certain circumstances, you have the following data protection rights:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1. the right to access, update or to delete the information we have on you;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3. the right to object. You have the right to object to our processing of your Personal Data;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">11</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">According to CalOPPA we agree to the following:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.1. users can visit our site anonymously;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.2. our Privacy Policy link includes the word “Privacy”, and can easily be found on the home page of our website;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.3. users will be notified of any privacy policy changes on our Privacy Policy Page;</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.4. users are able to change their personal information by emailing us at&nbsp;</span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">ali@chaltons.com</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Our Policy on “Do Not Track” Signals:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">12</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Your Data Protection Rights under the California Consumer Privacy Act (CCPA)</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you are a California resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">0.1. What personal information we have about you. If you make this request, we will return to you:</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.1. The categories of personal information we have collected about you.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.2. The categories of sources from which we collect your personal information.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.3. The business or commercial purpose for collecting or selling your personal information.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.4. The categories of third parties with whom we share personal information.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.5. The specific pieces of personal information we have collected about you.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">0.3. To stop selling your personal information. We don’t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a “sale” under California law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you submit a request to stop selling your personal information, we will stop making such transfers.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">To exercise your California data protection rights described above, please send your request(s) by email:&nbsp;</span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">ali@chaltons.com</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Your data protection rights, described above, are covered by the CCPA, short for the California Consumer Privacy Act. To find out more, visit the official California Legislative Information website. The CCPA took effect on 01/01/2020.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">13</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Service Providers</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may employ third party companies and individuals to facilitate our Service (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Service Providers”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;</span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">14</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Analytics</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may use third-party Service Providers to monitor and analyze the use of our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">15</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">CI/CD tools</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may use third-party Service Providers to automate the development process of our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">16</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Behavioral Remarketing</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">17</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Links to Other Sites</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">For example, the outlined&nbsp;</span>
        <a href="https://policymaker.io/privacy-policy/">
          <u>
            <span style="font-family: &quot;Open Sans&quot;; color: rgb(0, 0, 255); font-size: 13pt;">privacy policy</span>
          </u>
        </a>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;has been made using&nbsp;</span>
        <a href="https://policymaker.io/">
          <u>
            <span style="font-family: &quot;Open Sans&quot;; color: rgb(0, 0, 255); font-size: 13pt;">PolicyMaker.io</span>
          </u>
        </a>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">, a free tool that helps create high-quality legal documents. PolicyMaker’s&nbsp;</span>
        <a href="https://policymaker.io/privacy-policy/">
          <u>
            <span style="font-family: &quot;Open Sans&quot;; color: rgb(0, 0, 255); font-size: 13pt;">privacy policy generator</span>
          </u>
        </a>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;is an easy-to-use tool for creating a&nbsp;</span>
        <a href="https://policymaker.io/blog-privacy-policy/">
          <u>
            <span style="font-family: &quot;Open Sans&quot;; color: rgb(0, 0, 255); font-size: 13pt;">privacy policy for blog</span>
          </u>
        </a>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">, website, e-commerce store or mobile app.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;</span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">18</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Children’s Privacy</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">Our Services are not intended for use by children under the age of 18 (</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Child”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">&nbsp;or&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">“Children”</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">).</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">19</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Changes to This Privacy Policy</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update “effective date” at the top of this Privacy Policy.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal" style="margin-bottom: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">20</span>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.&nbsp;</span>
        <b>
          <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-weight:bold;font-size:13.0000pt;">Contact Us</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">
          <o:p></o:p>
        </span>
      </p>
      <p class="MsoNormal">
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">If you have any questions about this Privacy Policy, please contact us by email:&nbsp;</span>
        <b>
          <span style="font-family: &quot;Open Sans&quot;; font-weight: bold; font-size: 13pt;">ali@chaltons.com</span>
        </b>
        <span style="mso-spacerun:'yes';font-family:'Open Sans';mso-fareast-font-family:'Times New Roman';
     color:rgb(58,58,58);font-size:13.0000pt;">.</span>
      </p>
      </p> --}}
    </div><!--end col-->
    </div> <!--end row-->
    </div><!--end container-->
      
   

   </div>

  </main><!-- End #main -->

@endsection