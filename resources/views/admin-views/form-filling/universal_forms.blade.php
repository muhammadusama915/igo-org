<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Form Filling</title>
      <style type="text/css">
         * {margin:0; padding:0; text-indent:0; }
         h1 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 13pt; }
         .s1 { color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
         h3 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11pt; }
         .s2 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
         p { color: black; font-family:"Times New Roman", serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 10pt; margin:0pt; }
         h4 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 10pt; }
         .s3 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 10pt; }
         .s4 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
         .s6 { color: black; font-family:"Times New Roman", serif; font-style: italic; font-weight: bold; text-decoration: none; font-size: 9pt; }
         .s7 { color: #223; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10.5pt; }
         .s8 { color: #232323; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 10pt; }
         h2 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
         table, tbody {vertical-align: top; overflow: visible; } .page-break {padding: 30px; display: none;}
         @media print {
            .no-print {
                display: none;
            }

            .page-break {
                page-break-after: always;
                padding: 0px !important;
            }
         }
         .d-none{
            display: none;
         }
         .show-form{
            display: block !important;
         }
      </style>
   </head>
   <body>
   <button class="no-print" style="float:right;background-color:black;color:white;margin-top:10px;margin-right:5px;padding:3px" onclick="window.print()">Print Forms</button>
<div class="page-break back-pain @if(in_array('Back', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR LUMBAR ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for back pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered an injury or undergone surgery. In my opinion, the following back orthosis products are both reasonable and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Lumbar/ Lumbosacral Intervertebral Disc Degeneration (M51.36)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Other intervertebral disc degeneration, lumbosacral region (M51.37)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spinal Stenosis,lumbar region(M48.06)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spinal stenosis, lumbosacral region (M48.07)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Other intervertebral disc disorders, lumbosacral region (M51.87) Low back pain (M54.5)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Low back pain (M54.5)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified osteoarthritis, unspecified site (M19.90)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following back pain orthosis product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L0651: </span> LUMBAR-SACRAL ORTHOSIS, SAGITTAL-CORONAL CONTROL, RIGID SHELL(S)/PANEL(S),
         POSTERIOR EXTENDS FROM SACROCOCCYGEAL JUNCTION TO T-9 VERTEBRA, ANTERIOR EXTENDS
         FROM SYMPHYSIS PUBIS TO XYPHOID, PRODUCES INTRACAVITARY PRESSURE TO REDUCE LOAD ON
         THE INTERVERTEBRAL DISCS, OVERALL STRENGTH IS PROVIDED BY OVERLAPPING RIGID MATERIAL
         AND STABILIZING CLOSURES, INCLUDES STRAPS, CLOSURES, MAY INCLUDE SOFT INTERFACE,
         PENDULOUS ABDOMEN DESIGN, PREFABRICATED, OFF-THE-SHELF</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>


        <div class="page-break neck-pain @if(in_array('Neck', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR NECK ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for Cervical Neck pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well being. This patient
suffered injury has undergone surgery, or has arthritis. In my opinion, the following cervical orthosis products are both
reasonable and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my
care regarding the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true
& correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Radiculopathy, Cervical Region (M54.12)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Radiculopathy, Cervical Thoracic Region (M54.13)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Radiculopathy, Occipito-Atlanto- Axial Regio (M54.11)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Cervicalgia (M54.2)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Cervical disc disorder with myelopathy, high cervical Region (M50.01)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spinal stenosis, cervical Region (M48.02)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following cervical orthosis product will
benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L0174: </span>CERVICAL, COLLAR, SEMI-RIGID, THERMOPLASTIC FOAM,
TWO PIECE WITH THORACIC EXTENSION, PREFABRICATED,
OFF-THE-SHELF</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>



        <div class="page-break both-knee @if(in_array('Both Knee', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered
an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary in reference
to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the
treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, right knee (M06.061)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, left knee (M06.062)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Unilateral Primary Osteoarthritis, Right knee (M17.11)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, left knee (M17.12)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, right knee (M23.51)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, left knee (M23.52)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AFFECTED AREA: </h4>
      <p class="s4" style="width:50%;padding-top:5px;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;">KNEE : <span>Left Knee: <input type="checkbox" checked disabled></span><span> Right Knee <input type="checkbox" checked disabled></span></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1851: </span> KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
         FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
         AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT, PREFABRICATED,
         OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>


        <div class="page-break commercial-both-knee @if(in_array('Commercial Both Knee', $forms)) show-form @endif" style="padding: 0px 100px">
         <form>
           <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
           <p style="text-indent: 0pt;text-align: center;"><br/></p>
           <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
           <p style="text-indent: 0pt;text-align: center;"><br/></p>
           <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <div style='display: flex; justify-content: center;'>
           <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
              <tr style="height:15pt">
                 <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
                 </td>
                 <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br/></p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
                 </td>
              </tr>
              <tr style="height:16pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br/></p>
                 </td>
              </tr>
              <tr style="height:18pt">
                 <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
                 </td>
                 <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br/></p>
                 </td>
              </tr>
           </table>
           </div>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
           <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered
     an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary in reference
     to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the
     treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, right knee (M06.061)</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, left knee (M06.062)</p>
           <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Unilateral Primary Osteoarthritis, Right knee (M17.11)</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, left knee (M17.12)</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, right knee (M23.51)</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, left knee (M23.52)</p>
           <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AFFECTED AREA: </h4>
           <p class="s4" style="width:50%;padding-top:5px;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;">KNEE : <span>Left Knee: <input type="checkbox" checked disabled></span><span> Right Knee <input type="checkbox" checked disabled></span></p>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient:</p>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1851: </span> KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
              FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
              AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT, PREFABRICATED,
              OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
           <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
           <p style="text-indent: 0pt;text-align: left;"><br/></p>
           <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
           </form>
             </div>

             
        
        <div class="page-break both-ankle @if(in_array('Both Ankle', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ANKLE/FOOT ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for ankle and/or foot pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered injury and/or undergone surgery. In my opinion, the following ankle foot orthosis products are both reasonable and
necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the
diagnosis below. This is the treatment I see fit for this patient at this time.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary osteoarthritis, right ankle and foot (M19.071)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary osteoarthritis, left ankle and foot (M19.072)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Unspecified disorder of synovium and tendon, unspecified site (M67.90)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Other instability, right ankle and foot (M25.371)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Other instability, left ankle and foot (M25.372)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Displaced trimalleolar fracture of unspecified lower leg (S82.853A)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spontaneous rupture of other tendons, unspecified ankle and foot (M66.879)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain in right ankle and joints of right foot (M25.571)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain in left ankle and joints of left foot (M25.572)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Flat foot [pes planus] (acquired), unspecified foot (M21.40)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Sprain of unspecified ligament of right ankle (S93.401)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Sprain of unspecified ligament of left ankle (S93.402)</p>

      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AFFECTED AREA: </h4>
      <p class="s4" style="width:50%;padding-top:5px;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;">ANKLE/FOOT: : <span>Left <input type="checkbox" checked disabled></span><span> Right <input type="checkbox" checked disabled></span></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Ankle/Foot orthosis product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1906/L3170: </span>  Ankle/Foot Orthosis, Plastic or other material w/Ankle Joint, Prefabricated.</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>


        <div class="page-break both-wrist @if(in_array('Both Wrist', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR WRIST ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for wrist pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered injury and/or undergone surgery. In my opinion, the following orthosis product is both reasonable and necessary in
reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis
below. This is the treatment I see fit for this patient at this time. I certify that this information is true correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary Osteoarthritis, Right wrist (M19.031)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Osteoarthritis, Left wrist (M19.032)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary Osteoarthritis, Right Hand (M19.41)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Osteoarthritis, Left Hand (M19.42)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Carpal Tunnel Syndrome, Right Upper Limb (G56.01)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain In Right Wrist (M25.531)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Carpal Tunnel Syndrome, Left Upper Limb (G56.02)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain In Left Wrist (M25.532)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AFFECTED AREA: </h4>
      <p class="s4" style="width:50%;padding-top:5px;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;">WRIST: <span>Left <input type="checkbox" checked disabled></span><span> Right <input type="checkbox" checked disabled></span></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Wrist Orthosis Product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3916: </span>  wrist, hand orthosis, includes one or more non torsion joint(s), elastic bands, turnbuckles, may include
soft interface, straps, prefabricated, off the shelf.</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>



        <div class="page-break both-elbow @if(in_array('Both Elbow', $forms)) show-form @endif" style="padding: 0px 100px">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ELBOW ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No:(929)-399-2499</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for Elbow pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient
suffered injury has undergone surgery, or has arthritis. In my opinion, the following elbow orthosis products are both reasonable
and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding
the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true & correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Cubital Tunnel Syndrome (G56.2)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rheumatoid bursitis, right elbow (M06.221)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Bursitis, left elbow (M06.222)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain in right elbow (M25.521)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain in left elbow (M25.522)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified sprain of right elbow (S53.401)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified sprain of left elbow (S53.402)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Disorder of ligament, right elbow (M24.221)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Disorder of ligament, left elbow (M24.222)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">AFFECTED AREA: </h4>
      <p class="s4" style="width:50%;padding-top:5px;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;">ELBOW: <span>Left <input type="checkbox" checked disabled></span><span> Right <input type="checkbox" checked disabled></span></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Elbow orthosis product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3761: </span>    Elbow orthosis (eo), with adjustable position locking joint(s), prefabricated, off-the-shelf.</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>


        

        <div class="page-break Back-pain @if(in_array('Back', $forms)) show-forms @endif" style="padding: 0px 100px;display:none">
    <form>
      <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR LUMBAR ORTHOSIS</h1>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
      <p style="text-indent: 0pt;text-align: center;"><br/></p>
      <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <div style='display: flex; justify-content: center;'>
      <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
         <tr style="height:15pt">
            <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
            </td>
            <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
            </td>
         </tr>
         <tr style="height:16pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
         <tr style="height:18pt">
            <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
            </td>
            <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
               <p style="text-indent: 0pt;text-align: left;"><br/></p>
            </td>
         </tr>
      </table>
      </div>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for back pain.</p>
      <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered an injury or undergone surgery. In my opinion, the following back orthosis products are both reasonable and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Lumbar/ Lumbosacral Intervertebral Disc Degeneration (M51.36) Other intervertebral disc degeneration, lumbosacral region (M51.37) Spinal Stenosis,lumbar region(M48.06)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spinal stenosis, lumbosacral region (M48.07)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Other intervertebral disc disorders, lumbosacral region (M51.87) Low back pain (M54.5)</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified osteoarthritis, unspecified site (M19.90)</p>
      <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following back pain orthosis product will benefit this patient:</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L0637: </span>UMBAR-SACRAL ORTHOSIS, SAGITTAL-CORONAL CONTROL, WITH RIGID ANTERIOR AND POSTERIOR FRAME/PANEL(S), POSTERIOR EXTENDS FROM SACROCOCCYGEAL JUNCTION TO T-9 VERTEBRA, LATERAL STRENGTH PROVIDED BY RIGID LATERAL FRAME/PANEL(S), PRODUCES INTRACAVITARY PRESSURE TO REDUCE LOAD ON INTERVERTEBRAL DISCS, INCLUDES STRAPS, CLOSURES, MAY INCLUDE PADDING, SHOULDER STRAPS, PENDULOUS ABDOMEN DESIGN, PREFABRICATED ITEM THAT HAS BEEN TRIMMED, BENT, MOLDED, ASSEMBLED, OR OTHERWISE CUSTOMIZED TO FIT A SPECIFIC PATIENT BY AN INDIVIDUAL WITH EXPERTISE</p>
      <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
      <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
      </form>
        </div>


        

<div class="page-break Right-Knee @if(in_array('Right Knee', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (516)-559-6600</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered
an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary in reference
to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the
treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, right knee (M06.061)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, Right knee (M17.11)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, right knee (M23.51)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1852: </span> KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
   FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
   AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT, PREFABRICATED,
   OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>


<div class="page-break univseral-Right-Knee @if(in_array('Universal Right Knee', $forms)) show-form @endif" style="padding: 0px 100px">
   <form>
   <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
   <p style="text-indent: 0pt;text-align: center;"><br/></p>
   <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (516)-559-6600</p>
   <p style="text-indent: 0pt;text-align: center;"><br/></p>
   <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <div style='display: flex; justify-content: center;'>
   <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
    <tr style="height:15pt">
       <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
       </td>
       <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
    <tr style="height:18pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
   </table>
   </div>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
   <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered
   an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary in reference
   to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This is the
   treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, right knee (M06.061)</p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, Right knee (M17.11)</p>
   <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Chronic instability of knee, right knee (M23.51)</p>
   <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1851: </span>  KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
      FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
      AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT, PREFABRICATED,
      OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
   </form>
   </div>


<div class="page-break Right-Sholder @if(in_array('Right Sholder', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR SHOULDER ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for shoulder pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered an injury or undergone shoulder surgery. In my opinion, the following shoulder orthosis products are both reasonable and
necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the
diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">M75.31 Calcific tendinitis of right shoulder</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">M75.41 Impingement syndrome of right shoulder</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">G56.11 Other lesions of median nerve, right upper limb</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">G56.31 Lesion of radial nerve, right upper limb</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">M25.51 Pain in Right Shoulder</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3960: </span>SHOULDER ELBOW WRIST HAND ORTHOSIS, ABDUCTION POSITIONING, AIRPLANE
DESIGN, PREFABRICATED, INCLUDES FITTING AND ADJUSTMENT</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>




<div class="page-break Right-Ankle @if(in_array('Right Ankle', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ANKLE/FOOT ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for ankle and/or foot pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient
has suffered injury and/or undergone surgery. In my opinion, the following ankle foot orthosis products are both
reasonable and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my
care regarding the diagnosis below. This is the treatment I see fit for this patient at this time.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary osteoarthritis, right ankle and foot (M19.071)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified disorder of synovium and tendon, unspecified site (M67.90)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Other instability, right ankle and foot (M25.371)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Displaced trimalleolar fracture of unspecified lower leg (S82.853A)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Spontaneous rupture of other tendons, unspecified ankle and foot (M66.879)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Pain in right ankle and joints of right foot (M25.571)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Flat foot [pes planus] (acquired), unspecified foot (M21.40)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Sprain of unspecified ligament of right ankle (S93.401)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Ankle/Foot orthosis product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1906/L3170: </span> Ankle/Foot Orthosis, Plastic or other material w/Ankle Joint, Prefabricated</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>




<div class="page-break Right-Wrist @if(in_array('Right Wrist', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR WRIST ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for wrist pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered injury and/or undergone surgery. In my opinion, the following orthosis product is both reasonable and necessary in
reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis
below. This is the treatment I see fit for this patient at this time. I certify that this information is true correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary Osteoarthritis, Right wrist(M19.031)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Osteoarthritis, Right Hand (M19.41)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Carpal Tunnel Syndrome, Right Upper Limb (G56.01)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following WristOrthosis Product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3916: </span> wrist, hand orthosis, includes one or more non torsion joint(s), elastic bands, turnbuckles, may include
soft interface, straps,prefabricated, off the shelf.</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>





<div class="page-break Right-Elbow @if(in_array('Right Elbow', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ELBOW ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for Elbow pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient
suffered injury has undergone surgery, or has arthritis. In my opinion, the following elbow orthosis products are both reasonable
and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding
the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true & correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Cubital Tunnel Syndrome (G56.2)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rheumatoid bursitis, right elbow (M06.221)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Pain in right elbow (M25.521)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Unspecified sprain of right elbow (S53.401)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Disorder of ligament, right elbow (M24.221)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Elbow orthosis product will benefit this
patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3761: </span> Elbow orthosis (eo), with adjustable position locking joint(s), prefabricated, off-the-shelf.</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>





<div class="page-break Left-Knee @if(in_array('Left Knee', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary
in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis
below. This is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, left knee (M06.062)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, left knee (M17.12)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Chronic instability of knee, left knee (M23.52)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1852: </span> KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT,
PREFABRICATED, OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>

<div class="page-break univsersal-Left-Knee @if(in_array('Universal Left Knee', $forms)) show-form @endif" style="padding: 0px 100px">
   <form>
   <h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR DELUXE KNEE ORTHOSIS</h1>
   <p style="text-indent: 0pt;text-align: center;"><br/></p>
   <p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
   <p style="text-indent: 0pt;text-align: center;"><br/></p>
   <h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <div style='display: flex; justify-content: center;'>
   <table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
    <tr style="height:15pt">
       <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
       </td>
       <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
       </td>
    </tr>
    <tr style="height:16pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
    <tr style="height:18pt">
       <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
       </td>
       <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
          <p style="text-indent: 0pt;text-align: left;"><br/></p>
       </td>
    </tr>
   </table>
   </div>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for knee pain.</p>
   <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
   suffered an injury or undergone knee surgery. In my opinion, the following knee orthosis products are both reasonable and necessary
   in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis
   below. This is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Rheumatoid Arthritis without rheumatoid factor, left knee (M06.062)</p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unilateral Primary Osteoarthritis, left knee (M17.12)</p>
   <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Bilateral Primary Osteoarthritis (M17.0)</p>
   <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Chronic instability of knee, left knee (M23.52)</p>
   <p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following knee orthosis product will benefit this patient:</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1851: </span>  KNEE ORTHOSIS (KO), DOUBLE UPRIGHT, THIGH AND CALF, WITH ADJUSTABLE
      FLEXION AND EXTENSION JOINT (UNICENTRIC OR POLYCENTRIC), MEDIAL-LATERAL
      AND ROTATION CONTROL, WITH OR WITHOUT VARUS/VALGUS ADJUSTMENT,
      PREFABRICATED, OFF-THE-SHELF. INCLUDES L2397 SUSPENSION SLEEVE.</p>
   <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
   <p style="text-indent: 0pt;text-align: left;"><br/></p>
   <h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
   </form>
   </div>




<div class="page-break Left-Sholder @if(in_array('Left Sholder', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR SHOULDER ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for shoulder pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has suffered
an injury or undergone shoulder surgery. In my opinion, the following shoulder orthosis products are both reasonable and necessary in
reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis below. This
is the treatment I see fit for this patient at this time. I certify that this information is true and correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">M75.32 Calcific tendinitis of left shoulder</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">M75.42 Impingement syndrome of left shoulder</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">G56.12 Other lesions of median nerve, left upper limb</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">G56.32 Lesion of radial nerve, left upper limb</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">M25.512 Pain in Left Shoulder</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>

<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3960: </span> SHOULDER ELBOW WRIST HAND ORTHOSIS, ABDUCTION POSITIONING, AIRPLANE
DESIGN, PREFABRICATED, INCLUDES FITTING AND ADJUSTMENT</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>





<div class="page-break Left-Ankle @if(in_array('Left Ankle', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ANKLE/FOOT ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for ankle and/or foot pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered injury and/or undergone surgery. In my opinion, the following ankle foot orthosis products are both reasonable and
necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the
diagnosis below. This is the treatment I see fit for this patient at this time.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary osteoarthritis, left ankle and foot (M19.072)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Unspecified disorder of synovium and tendon, unspecified site (M67.90)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Other instability, left ankle and foot (M25.372)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Displaced trimalleolar fracture of unspecified lower leg (S82.853A)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Spontaneous rupture of other tendons, unspecified ankle and foot (M66.879)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Pain in left ankle and joints of left foot (M25.572)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Flat foot [pes planus] (acquired), unspecified foot (M21.40)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Sprain of unspecified ligament of left ankle (S93.402)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Ankle/Foot orthosis product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L1906/L3170: </span>  Ankle/Foot Orthosis, Plastic or other material w/Ankle Joint, Prefabricated</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>





<div class="page-break Left-Wrist @if(in_array('Left Wrist', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR WRIST ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for wrist pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient has
suffered injury and/or undergone surgery. In my opinion, the following orthosis product is both reasonable and necessary in
reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding the diagnosis
below. This is the treatment I see fit for this patient at this time. I certify that this information is true correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Primary Osteoarthritis, Left wrist (M19.032)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Osteoarthritis, Left Hand (M19.42)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Carpal Tunnel Syndrome, Left Upper Limb (G56.02)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Pain In Left Wrist (M25.532)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Wrist Orthosis Product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3916: </span>  wrist, hand orthosis, includes one or more non torsion joint(s), elastic bands, turnbuckles, may
include soft interface, straps, prefabricated, off the shelf.</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>





<div class="page-break Left-Elbow @if(in_array('Left Elbow', $forms)) show-form @endif" style="padding: 0px 100px">
<form>
<h1 style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: center;">PRIOR AUTHORIZATION PRESCRIPTION REQUEST FORM FOR ELBOW ORTHOSIS</h1>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<p class="s1" style="text-align: center;">Please Send RX Form &amp; Pertinent Chart Notes    Fax No: (888)-808-1973</p>
<p style="text-indent: 0pt;text-align: center;"><br/></p>
<h3 style="text-align: center;">PLEASE SEND THIS FORM BACK IN 3 BUSINESS DAYS</h3>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div style='display: flex; justify-content: center;'>
<table style="border-collapse:collapse;margin-left:5.32999pt" cellspacing="0">
 <tr style="height:15pt">
    <td style="width:274pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Date: {{$lead->created_at->format('m-d-Y')}}</p>
    </td>
    <td style="width:265pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span>First :  {{$lead->f_name}}</span>      <span style="padding-left:150px;">   Last: {{$lead->l_name}} </span></p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Physician Name: {{$lead->doc_f_name.' '.$lead->doc_l_name}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DOB: {{$lead->dob}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">NPI: {{$lead->doc_npi}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->address}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Address: {{$lead->doc_address}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->city}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">City: {{$lead->doc_city}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->state}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">State: {{$lead->doc_state}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal Code: {{$lead->zipcode}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Postal code: {{$lead->doc_zipcode}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Patient Phone Number: {{$lead->phone}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Phone Number: {{$lead->doc_phone}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Primary Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Fax Number: {{$lead->doc_fax}}</p>
    </td>
 </tr>
 <tr style="height:16pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Private Ins: Policy #:</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
 <tr style="height:18pt">
    <td style="width:274pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Height: {{$lead->height ?? 'Not Specified'}}       Weight: {{ $lead->weight ?? 'Not Specified'}}</p>
    </td>
    <td style="width:265pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
       <p style="text-indent: 0pt;text-align: left;"><br/></p>
    </td>
 </tr>
</table>
</div>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">This patient is being treated under a comprehensive plan of care for Elbow pain.</p>
<p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">I, the undersigned; certify that the prescribed orthosis is medically necessary for the patient’s overall well-being. This patient
suffered injury has undergone surgery, or has arthritis. In my opinion, the following elbow orthosis products are both reasonable
and necessary in reference to treatment of the patient’s condition and/or rehabilitation. My patient has been in my care regarding
the diagnosis below. This is the treatment I see fit for this patient at this time. I certify that this information is true & correct.</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DIAGNOSIS:<span class="s3"> </span><span class="s4">Provider can simply cut off the diagnosis which they don’t find appropriate</span></h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Cubital Tunnel Syndrome (G56.2)</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Rheumatoid Bursitis, left elbow (M06.222)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Pain in left elbow (M25.522)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Unspecified sprain of left elbow (S53.402)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Disorder of ligament, left elbow (M24.222)</p>
<p class="s4" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Other/Explain              (Include              Code):<u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s6" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Our evaluation of the above patient has determined that providing the following Elbow orthosis product will benefit this patient:</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h4 style="padding-left: 5pt;text-indent: 0pt;text-align: left;">DISPENSE:</h4>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 118%;text-align: left;"><span class="s8">L3761: </span> Elbow orthosis (eo), with adjustable position locking joint(s), prefabricated, off-the-shelf</p>
<p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Length of need is 99 months unless otherwise specified: <u>&nbsp;&nbsp;&nbsp; </u>6 - 99 (99= LIFETIME)</p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Signature: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span><span> Date signed: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><span></h2>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<h2 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;display: flex; justify-content: space-between;"><span>Physician Name: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span> <span> NPI: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></span></h2>
</form>
</div>




         




   </body>
</html>