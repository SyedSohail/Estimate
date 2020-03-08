<?php
require_once('import.php');


if(isset($_POST['estimate'])){
  $estimate =  $_POST['estimate'];
  $t = new import();
  $t->importToExcel($estimate);
  $t->importToDatabase($estimate);

  $msg = "<h3>first Name : "
  .$estimate['firstName']."</h3><br>
  <h3>first Name : "
  .$estimate['lastName']."</h3><br>
  <h3>first Name : "
  .$estimate['address']."</h3><br>
  <h3>first Name : "
  .$estimate['email']."</h3><br>
  <h3>first Name : "
  .$estimate['city']."</h3><br>
  <h3>first Name : "
  .$estimate['state']."</h3><br>
  <h3>first Name : "
  .$estimate['zip']."</h3><br>
  <h3>first Name : "
  .$estimate['phone']."</h3><br>
  <h3>first Name : "
  .$estimate['bedrooms']."</h3><br>
  <h3>first Name : "
  .$estimate['fullBaths']."</h3><br>
  <h3>first Name : "
  .$estimate['frequency']."</h3><br>
  <h3>first Name : "
  .$estimate['hear']."</h3><br>
  <h3>first Name : "
  .$estimate['promoCode']."</h3><br>";

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail("ssohailhydr@gmail.com","My subject",$msg);
}
 ?><!DOCTYPE html>
<html>
   <!-- Mirrored from www.maidpro.com/estimate by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Mar 2020 09:31:31 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="UTF-8" />
      <title>Form</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
      <link rel="stylesheet" href="css/cfdbe26.css"/>
      <link rel="stylesheet" href="css/estimate-update.css" />

   </head>
   <body id="free-estimate" class="default">
      <div id="page-container">
         <article class="content">
            <div class="grid-container">
               <div class="estimate-content-wrap clearfix">
                  <header class="estimate-header">
                     <div class="header-logo-tag">
                        <div class="estimate-call-us-cta-mobile">
                           <p><i>Or call us today!</i> <b>877-624-3776</b></p>
                        </div>
                        <a href="index.html" title="MaidPro" class="mp-logo">
                        <img src="img/logo.png" alt="logo" />
                        </a>
                        <h2 class="content-title">Your free quote is just clicks away.</h2>
                     </div>
                     <div class="estimate-call-us-cta">
                        <p><i>Or call us today!</i> <b>877-624-3776</b></p>
                     </div>
                  </header>
                  <section class="form estimate-form">
                     <form novalidate action="estimate.php" method="post" id="estimate_form" data-check-for-skip="true">
                     <input type="hidden" id="estimate_cloudamp__data__c" name="estimate[cloudamp__data__c]" class="ui-input" />
                     <div class="client-info" style="position: relative; z-index: 2">
                        <div class="information">
                           <fieldset class="two-up clearfix">
                              <div class=" form-field field-firstName" ><label for="estimate_firstName" class="required">First Name</label><input type="text" id="estimate_firstName" name="estimate[firstName]" required="required" class="ui-input" /></div>
                              <div class=" form-field field-lastName" ><label for="estimate_lastName" class="required">Last Name</label><input type="text" id="estimate_lastName" name="estimate[lastName]" required="required" class="ui-input" /></div>
                           </fieldset>
                           <div class=" form-field field-address" ><label for="estimate_address" class="required">Address</label><input type="text" id="estimate_address" name="estimate[address]" required="required" class="ui-input" /></div>
                           <fieldset class="three-up city-state-zip clearfix">
                              <div class=" form-field field-city" ><label for="estimate_city" class="required">City</label><input type="text" id="estimate_city" name="estimate[city]" required="required" class="ui-input" /></div>
                              <div class=" form-field field-state" >
                                 <label for="estimate_state" class="required">State/Province</label>
                                 <div id="estimate_state"     class="ui-select">
                                    <select id="estimate_state" name="estimate[state]" required="required"     class="foopa ">
                                       <optgroup label="United States">
                                          <option value="Alabama">AL</option>
                                          <option value="Alaska">AK</option>
                                          <option value="Arizona">AZ</option>
                                          <option value="Arkansas">AR</option>
                                          <option value="California">CA</option>
                                          <option value="Colorado">CO</option>
                                          <option value="Connecticut">CT</option>
                                          <option value="Delaware">DE</option>
                                          <option value="District Of Columbia">DC</option>
                                          <option value="Florida">FL</option>
                                          <option value="Georgia">GA</option>
                                          <option value="Hawaii">HI</option>
                                          <option value="Idaho">ID</option>
                                          <option value="Illinois">IL</option>
                                          <option value="Indiana">IN</option>
                                          <option value="Iowa">IA</option>
                                          <option value="Kansas">KS</option>
                                          <option value="Kentucky">KY</option>
                                          <option value="Louisiana">LA</option>
                                          <option value="Maine">ME</option>
                                          <option value="Maryland">MD</option>
                                          <option value="Massachusetts">MA</option>
                                          <option value="Michigan">MI</option>
                                          <option value="Minnesota">MN</option>
                                          <option value="Mississippi">MS</option>
                                          <option value="Missouri">MO</option>
                                          <option value="Montana">MT</option>
                                          <option value="Nebraska">NE</option>
                                          <option value="Nevada">NV</option>
                                          <option value="New Hampshire">NH</option>
                                          <option value="New Jersey">NJ</option>
                                          <option value="New Mexico">NM</option>
                                          <option value="New York">NY</option>
                                          <option value="North Carolina">NC</option>
                                          <option value="North Dakota">ND</option>
                                          <option value="Ohio">OH</option>
                                          <option value="Oklahoma">OK</option>
                                          <option value="Oregon">OR</option>
                                          <option value="Pennsylvania">PA</option>
                                          <option value="Rhode Island">RI</option>
                                          <option value="South Carolina">SC</option>
                                          <option value="South Dakota">SD</option>
                                          <option value="Tennessee">TN</option>
                                          <option value="Texas">TX</option>
                                          <option value="Utah">UT</option>
                                          <option value="Vermont">VT</option>
                                          <option value="Virginia">VA</option>
                                          <option value="Washington">WA</option>
                                          <option value="West Virginia">WV</option>
                                          <option value="Wisconsin">WI</option>
                                          <option value="Wyoming">WY</option>
                                       </optgroup>
                                       <optgroup label="Canada">
                                          <option value="Alberta">AB</option>
                                          <option value="British Columbia">BC</option>
                                          <option value="Manitoba">MB</option>
                                          <option value="New Brunswick">NB</option>
                                          <option value="Newfoundland">NL</option>
                                          <option value="Northwest Territories">NT</option>
                                          <option value="Nova Scotia">NS</option>
                                          <option value="Nunavut">NU</option>
                                          <option value="Ontario">ON</option>
                                          <option value="Prince Edward Island">PE</option>
                                          <option value="Quebec">QC</option>
                                          <option value="Saskatchewan">SK</option>
                                          <option value="Yukon">YT</option>
                                       </optgroup>
                                    </select>
                                 </div>
                              </div>
                              <div class=" form-field field-zip" ><label for="estimate_zip" class="required">Zip/Postal Code</label><input type="text" id="estimate_zip" name="estimate[zip]" required="required" class="ui-input" /></div>
                           </fieldset>
                           <fieldset class="two-up clearfix">
                              <div class=" form-field field-email" ><label for="estimate_email" class="required">Email Address</label><input type="email" id="estimate_email" name="estimate[email]" required="required" class="ui-input" /></div>
                              <div class=" form-field field-phone" ><label for="estimate_phone" class="required">Mobile Number</label><input type="text" id="estimate_phone" name="estimate[phone]" required="required" class="ui-input" /></div>
                           </fieldset>
                        </div>
                        <hr />
                        <div class="estimate-info" style="position: relative; z-index: 2">
                           <fieldset class="three-up rooms-baths-frequency clearfix">
                              <div class=" form-field field-bedrooms" ><label for="estimate_bedrooms" class="required">Bedrooms</label><input type="text" id="estimate_bedrooms" name="estimate[bedrooms]" required="required" class="ui-input" /></div>
                              <div class=" form-field field-fullBaths" ><label for="estimate_fullBaths" class="required">Bathrooms</label><input type="text" id="estimate_fullBaths" name="estimate[fullBaths]" required="required" class="ui-input" /></div>
                              <div class=" form-field field-frequency" >
                                 <label for="estimate_frequency">Frequency</label>
                                 <div id="estimate_frequency"     class="ui-select">
                                    <select id="estimate_frequency" name="estimate[frequency]"     class="foopa ">
                                       <option value="Choose"></option>
                                       <option value="Bi-Weekly">bi-weekly</option>
                                       <option value="Weekly">weekly</option>
                                       <option value="Monthly">monthly</option>
                                       <option value="Just Once">just-once</option>
                                    </select>
                                 </div>
                              </div>
                           </fieldset>
                           <hr />
                           <div class=" form-field field-hear" ><label for="estimate_hear">How did you hear about us?</label><textarea id="estimate_hear" name="estimate[hear]" class="ui-input"></textarea></div>
                        </div>
                        <hr />
                        <fieldset class="form-actions clearfix two-up">
                        <div class=" form-field field-promoCode" ><label for="estimate_promoCode">Promotional Code</label><input type="text" id="estimate_promoCode" name="estimate[promoCode]" class="ui-input" /></div>
                        <div class="form-field">
                           <button class="" type="submit">Get Your Quote!</button>
                        </div>
                     </div>
               </div>
               <div class="grid-container sub-text">
               <a href="policies/index.html" target="_blank" class="push-policies" title="Privacy Policies">Privacy Policies</a>
               </div>
               <input type="hidden" id="estimate_skipAddressVerification" name="estimate[skipAddressVerification]" class="ui-input" /><input type="hidden" id="estimate_recordType" name="estimate[recordType]" class="ui-input" value="01260000000Liz4" /><input type="hidden" id="estimate_leadType" name="estimate[leadType]" class="ui-input" value="Maid Service" /><input type="hidden" id="estimate_stage" name="estimate[stage]" class="ui-input" value="New" /><input type="hidden" id="estimate_entryMethod" name="estimate[entryMethod]" class="ui-input" value="Web Form" /><input type="hidden" id="estimate_submittedFormURL" name="estimate[submittedFormURL]" class="ui-input" /><input type="hidden" id="estimate_fullReferringURL" name="estimate[fullReferringURL]" class="ui-input" /><input type="hidden" id="estimate_referringSiteName" name="estimate[referringSiteName]" class="ui-input" /><input type="hidden" id="estimate_referringSitePaidOrganic" name="estimate[referringSitePaidOrganic]" class="ui-input" /><input type="hidden" id="estimate_fullTargetURL" name="estimate[fullTargetURL]" class="ui-input" /><input type="hidden" id="estimate_targetPageNoVars" name="estimate[targetPageNoVars]" class="ui-input" /><input type="hidden" id="estimate_campaignID" name="estimate[campaignID]" class="ui-input" /><input type="hidden" id="estimate_adID" name="estimate[adID]" class="ui-input" /><input type="hidden" id="estimate_payPerClick" name="estimate[payPerClick]" class="ui-input" /><input type="hidden" id="estimate_iPAddress" name="estimate[iPAddress]" class="ui-input" /><input type="hidden" id="estimate_iPCountry" name="estimate[iPCountry]" class="ui-input" /><input type="hidden" id="estimate_browserOperatingSytem" name="estimate[browserOperatingSytem]" class="ui-input" /><input type="hidden" id="estimate_keywords" name="estimate[keywords]" class="ui-input" /><input type="hidden" id="estimate__token" name="estimate[_token]" class="ui-input" value="IDFDTzG7_3dP2mpMnxC8T_ebvflmmvcdvdnmYAAEg-E" />
               </section>
            </div>
      </div>
      </article>
      </div>
      <!-- <div class="modal-backdrop">
         <aside class="modal modal-giftcerts-policies">
            <div class="modal-header grid-container">
               <a href="#" class="modal-close"><img src="bundles/mprmisc/images/overlay-close.png" /></a>
               <h1>MaidPro Policies</h1>
            </div>
            <div class="modal-content">
               <div class="grid-container">
                  <h2>Site Security</h2>
                  <p>
                     Your security is a priority at MaidPro.com. To provide credit card
                     security and keep your personal information safe, we use Secure Sockets
                     Layer (SSL) technology, the most widely used data encryption coding
                     system for secure e-commerce transactions. All of your information is
                     encrypted (scrambled) prior to being sent over the Internet to our
                     system. To protect your information once we receive it, we place it on
                     systems behind secure firewalls, which are communication-management
                     computers designed to keep information safe and inaccessible to other
                     Internet users. If your browser doesn't accept the SSL technology,
                     transactions will not be permitted.
                  </p>
                  <p>
                     To confirm that your connection is secure, look for the letters
                     &ldquo;https&rdquo; (rather than &ldquo;http&rdquo;) located in the URL
                     address window at the top of your browser to indicate that you are
                     using a secure browser.
                  </p>
                  <h2>Privacy Policy</h2>
                  <p>
                     What information do we collect on our site, and how do we use it?
                  </p>
                  <p>
                     We collect only the consumer's domain name (where possible), aggregate
                     information on what pages consumers access or visit on our site, and
                     information volunteered by the consumer - such as survey information
                     and/or site registrations, name and address, telephone number and the
                     email addresses of those who fill out the estimate form.
                  </p>
                  <p>
                     The information we collect is used to improve the content of our
                     website, customize the content and/or layout of our web pages for each
                     individual visitor, and used to create service estimates.
                  </p>
                  <p>
                     <em>With respect to cookies: </em>We use cookies to store visitor’s
                     preferences, and record past activity on our site in order to provide
                     better service when visitors return to our site. We also sometimes use
                     cookies to deliver targeted ads to past visitors of the site on 3rd
                     party vendor sites such as www.yahoo.com. To opt out of these ads
                     please visit your browser’s ad preferences manager.
                  </p>
                  <p>
                     <em>With respect to security:</em> We have appropriate security
                     measures in place in our physical facilities to protect against the
                     loss, misuse or alteration of information that we have collected from
                     you at our site.
                  </p>
                  <p>
                     <em>Opt-in:</em> Submitting an estimate request and/or calling MaidPro
                     to request an estimate are treated as an opt-in to receive service
                     related follow up and information from MaidPro.
                  </p>
                  <p>
                     If you supply us with your email address you will only receive
                     communications related to MaidPro related service and product
                     offerings.
                  </p>
                  <p>
                     If you supply us with your postal address you will only receive
                     periodic mailings from us with information on promotions, services or
                     upcoming events.
                  </p>
                  <p>
                     If you supply us with your telephone number you will only receive
                     telephone contact from us with information regarding requested
                     services.
                  </p>
                  <p>
                     <em>Opt-Out:</em> How do you opt-out of receiving future
                     communications?
                  </p>
                  <p>
                     If you do not want to receive e-mail from us in the future, please let
                     us know by contacting your local MaidPro office or by sending us an
                     e-mail at <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="93fafdf5fcd3fef2faf7e3e1fcbdf0fcfebd">[email&#160;protected]</a> You may also unsubscribe to future emails
                     by clicking on the unsubscribe link contained within e-mails you
                     receive.
                  </p>
                  <p>
                     Additionally, if you do not wish to receive postal mailings or phone
                     calls, please let us know by contacting your local MaidPro office or by
                     sending us an e-mail at <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="d5bcbbb3ba95b8b4bcb1a5a7bafbb6bab8fb">[email&#160;protected]</a>
                  </p>
                  <h2>How to Contact Us</h2>
                  <p>
                     If you have any questions regarding our privacy policy, you can contact us at:
                  </p>
                  <div class="vcard">
                     <div>MaidPro </div>
                     <div>77 North Washington St., 3rd Floor </div>
                     <div>Boston, MA 02114 </div>
                     <div><a href="cdn-cgi/l/email-protection.html#b9d0d7dfd6f9d4d8d0ddc9cbd697dad6d4"><span class="__cf_email__" data-cfemail="5a33343c351a373b333e2a283574393537">[email&#160;protected]</span></a></div>
                     <div>Fax: (617) 720-0700</div>
                  </div>
                  <h2>Shipping Policy</h2>
                  <p>
                     We aim to provide you with fast and reliable shipment options. These
                     options are listed below for U.S and Canadian residents. Please note
                     that most orders will ship within 1-2 business days of the purchase.
                  </p>
                  <h3>United States Shipping Methods and Fees:</h3>
                  <ul>
                     <li>
                        USPS First Class
                        <ul>
                           <li>Estimated delivery time is 3 days or less.</li>
                        </ul>
                     </li>
                     <li>
                        FedEx 2 Day
                        <ul>
                           <li>Delivers within 2 business days by 4:30 p.m. to most areas, and by 7 p.m. to residences.</li>
                        </ul>
                     </li>
                     <li>
                        FedEx Overnight
                        <ul>
                           <li>Delivers by next-business-day by 3:00 p.m. to most addresses and by 4:30 p.m. to rural areas.</li>
                        </ul>
                     </li>
                  </ul>
                  <h3>International Shipping Methods and Fees:</h3>
                  <ul>
                  <li>
                     FedEx International Ground
                     <ul>
                        <li>Delivery in 2 – 7 business days</li>
                     </ul>
                  </li>
                  <li>
                     FedEx International Economy
                     <ul>
                        <li>Delivery in 2 business days</li>
                     </ul>
                  </li>
                  <li>
                     FedEx International Priority
                     <ul>
                  <li>Delivery in 1 business day</li>
                  <ul>
                     </li>
                  </ul>
               </div>
            </div>
         </aside>
      </div> -->
   </body>
   <!-- Mirrored from www.maidpro.com/estimate by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Mar 2020 09:31:32 GMT -->
</html>
