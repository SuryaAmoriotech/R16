
<script src="<?php echo base_url() ?>my-assets/js/countrypicker.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Add new supplier start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Create Supplier</h1>
            <small> </small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('supplier') ?></a></li>
                <li class="active" style="color:orange;"><?php echo display('add_supplier') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
       

        <div class="row">
            <div class="col-sm-12">
                
                    <a href="<?php echo base_url('Csupplier/manage_supplier') ?>" class="btn btn-info m-b-5 m-r-2" style="color:white;background-color:#38469f;" ><i class="ti-align-justify"> </i> <?php echo display('manage_supplier') ?> </a>

                    <a href="<?php echo base_url('Csupplier/supplier_ledger_report') ?>" class="btn btn-primary m-b-5 m-r-2" style="color:white;background-color:#38469f;"><i class="ti-align-justify"> </i>  <?php echo display('supplier_ledger') ?> </a>

                    <a href="<?php echo base_url('Csupplier/supplier_sales_details_all') ?>" class="btn btn-success m-b-5 m-r-2" style="color:white;background-color:#38469f;" ><i class="ti-align-justify"> </i>  <?php echo display('supplier_sales_details') ?> </a>
                 

               
            </div>
        </div>


        <!-- New supplier -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4></h4>
                        </div>
                    </div>

                    <form id="insert_supplier"  method="post">


                    <div class="panel-body">
                        <div class="col-sm-6">




                    <div class="form-group row">
<label for="" class="col-sm-4    col-form-label"   >Vendor Type<i class="text-danger">*</i></label>
<div class="col-sm-6">
    <select   name="vendor_type" id="vendor_type" class=" form-control" placeholder='' required="" id="vendor_type" style="width:135%;">
     <option value=""> Selected vendor type</option>   
    <option value="productsupplier">Product Supplier</option> 
    <option value="servicevendor"> Service Vendor</option> 
    <option value="others"> Others</option> 
    </select>
</div>
</div>



                        <!-- <div class="form-group row">
                            <label for="supplier_name" class="col-sm-4 col-form-label"  required>Company Name <i class="text-danger">*</i></label>
                            <div class="col-sm-8">
             
                    

     </div>
</div> -->

   <div class="form-group row">
                            <label for="supplier_name" class="col-sm-4 col-form-label"> Company Name<i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="Company Name"  required="" tabindex="1">
                            </div>
                        </div>

                       	<div class="form-group row">
                            <label for="mobile" class="col-sm-4 col-form-label"> Mobile <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="mobile" id="mobile" type="number" placeholder="Mobile"  min="0" tabindex="2">
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label">Business Phone <i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="phone" id="phone" type="number" placeholder="Business phone" required=""  min="0" tabindex="2"  >
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Primary Email <i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Primary email"  required=""    tabindex="2">
                            </div>
                        </div>





                         <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label"> Secondary Email <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="emailaddress" id="emailaddress" type="email" placeholder="Secondary email"  >
                            </div>
                            
                        </div>







                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                          <div class="form-group row">
                            <label for="contact" class="col-sm-4 col-form-label"> Contact Person <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="contact" id="contact" type="text" placeholder="Contact person"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fax" class="col-sm-4 col-form-label"><?php echo display('fax'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="fax" id="fax" type="text" placeholder="<?php echo display('fax') ?>"  >
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="city" class="col-sm-4 col-form-label"><?php echo display('city'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="city" id="city" type="text" placeholder="<?php echo display('city') ?>"  >
                            </div>




                            
                        </div>






                         
                    <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label"  required >Tax Collected<i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                               <select class="form-control" name="service_provider"  required=""  >
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                               </select>
                            </div> 


                            </div>
              <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" id="add-supplier" class="btn btn-primary btn-large" style="color:white;background-color:#38469f;"  name="add-supplier"   value="<?php echo display('save') ?>" tabindex="6"/>
                             
                           <!--<input type="submit" style="color:white;background-color:#38469f;"  value="<?php echo display('save_and_add_another') ?>" name="add-supplier-another" class="btn btn-large btn-success" id="add-supplier-another" tabindex="5">-->
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
               
                        <div class="form-group row">
                            <label for="address " class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" id="address " rows="3"  col="2" placeholder="<?php echo display('supplier_address') ?>" ></textarea>
                            </div>
                        </div>
                         
                     

                        <div class="form-group row">
                            <label for="state" class="col-sm-4 col-form-label"><?php echo display('state'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="state" id="state" type="text" placeholder="<?php echo display('state') ?>"  >
                            </div>
                        </div>
                                    <div class="form-group row">
                                    <label for="country" class="col-sm-4 col-form-label"  required="" >Country<i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                    <select class="selectpicker countrypicker form-control"  data-live-search="true" data-default="United States"  name="country" id="country" ></select>
                                    </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-sm-4 col-form-label"><?php echo display('zip'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="zip" id="zip" type="text" placeholder="<?php echo display('zip') ?>"  >
                            </div>
                        </div>
                       
                      
                        <div class="form-group row">
                            <label for="details" class="col-sm-4 col-form-label"><?php echo display('supplier_details') ?></label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="details" id="details" rows="2" placeholder="<?php echo display('supplier_details') ?>" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-4 col-form-label">Credit Limit</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="text" min="0" placeholder="Credit Limit" tabindex="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Preferred currency" class="col-sm-4 col-form-label" > Preferred currency<i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                            <select  class="form-control" id="currency" name="currency1"  style="width: 100%;"   required=""  style="max-width: -webkit-fill-available;">
    <!-- <option>Select currency</option> -->
    <option value="USD">USD - US Dollar - $</option>
    <option value="AFN">AFN - Afghan Afghani - ؋</option>
    <option value="ALL">ALL - Albanian Lek - Lek</option>
    <option value="DZD">DZD - Algerian Dinar - دج</option>
    <option value="AOA">AOA - Angolan Kwanza - Kz</option>
    <option value="ARS">ARS - Argentine Peso - $</option>
    <option value="AMD">AMD - Armenian Dram - ֏</option>
    <option value="AWG">AWG - Aruban Florin - ƒ</option>
    <option value="AUD">AUD - Australian Dollar - $</option>
    <option value="AZN">AZN - Azerbaijani Manat - m</option>
    <option value="BSD">BSD - Bahamian Dollar - B$</option>
    <option value="BHD">BHD - Bahraini Dinar - .د.ب</option>
    <option value="BDT">BDT - Bangladeshi Taka - ৳</option>
    <option value="BBD">BBD - Barbadian Dollar - Bds$</option>
    <option value="BYR">BYR - Belarusian Ruble - Br</option>
    <option value="BEF">BEF - Belgian Franc - fr</option>
    <option value="BZD">BZD - Belize Dollar - $</option>
    <option value="BMD">BMD - Bermudan Dollar - $</option>
    <option value="BTN">BTN - Bhutanese Ngultrum - Nu.</option>
    <option value="BTC">BTC - Bitcoin - ฿</option>
    <option value="BOB">BOB - Bolivian Boliviano - Bs.</option>
    <option value="BAM">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
    <option value="BWP">BWP - Botswanan Pula - P</option>
    <option value="BRL">BRL - Brazilian Real - R$</option>
    <option value="GBP">GBP - British Pound Sterling - £</option>
    <option value="BND">BND - Brunei Dollar - B$</option>
    <option value="BGN">BGN - Bulgarian Lev - Лв.</option>
    <option value="BIF">BIF - Burundian Franc - FBu</option>
    <option value="KHR">KHR - Cambodian Riel - KHR</option>
    <option value="CAD">CAD - Canadian Dollar - $</option>
    <option value="CVE">CVE - Cape Verdean Escudo - $</option>
    <option value="KYD">KYD - Cayman Islands Dollar - $</option>
    <option value="XOF">XOF - CFA Franc BCEAO - CFA</option>
    <option value="XAF">XAF - CFA Franc BEAC - FCFA</option>
    <option value="XPF">XPF - CFP Franc - ₣</option>
    <option value="CLP">CLP - Chilean Peso - $</option>
    <option value="CNY">CNY - Chinese Yuan - ¥</option>
    <option value="COP">COP - Colombian Peso - $</option>
    <option value="KMF">KMF - Comorian Franc - CF</option>
    <option value="CDF">CDF - Congolese Franc - FC</option>
    <option value="CRC">CRC - Costa Rican ColÃ³n - ₡</option>
    <option value="HRK">HRK - Croatian Kuna - kn</option>
    <option value="CUC">CUC - Cuban Convertible Peso - $, CUC</option>
    <option value="CZK">CZK - Czech Republic Koruna - Kč</option>
    <option value="DKK">DKK - Danish Krone - Kr.</option>
    <option value="DJF">DJF - Djiboutian Franc - Fdj</option>
    <option value="DOP">DOP - Dominican Peso - $</option>
    <option value="XCD">XCD - East Caribbean Dollar - $</option>
    <option value="EGP">EGP - Egyptian Pound - ج.م</option>
    <option value="ERN">ERN - Eritrean Nakfa - Nfk</option>
    <option value="EEK">EEK - Estonian Kroon - kr</option>
    <option value="ETB">ETB - Ethiopian Birr - Nkf</option>
    <option value="EUR">EUR - Euro - €</option>
    <option value="FKP">FKP - Falkland Islands Pound - £</option>
    <option value="FJD">FJD - Fijian Dollar - FJ$</option>
    <option value="GMD">GMD - Gambian Dalasi - D</option>
    <option value="GEL">GEL - Georgian Lari - ლ</option>
    <option value="DEM">DEM - German Mark - DM</option>
    <option value="GHS">GHS - Ghanaian Cedi - GH₵</option>
    <option value="GIP">GIP - Gibraltar Pound - £</option>
    <option value="GRD">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
    <option value="GTQ">GTQ - Guatemalan Quetzal - Q</option>
    <option value="GNF">GNF - Guinean Franc - FG</option>
    <option value="GYD">GYD - Guyanaese Dollar - $</option>
    <option value="HTG">HTG - Haitian Gourde - G</option>
    <option value="HNL">HNL - Honduran Lempira - L</option>
    <option value="HKD">HKD - Hong Kong Dollar - $</option>
    <option value="HUF">HUF - Hungarian Forint - Ft</option>
    <option value="ISK">ISK - Icelandic KrÃ³na - kr</option>
    <option value="INR">INR - Indian Rupee - ₹</option>
    <option value="IDR">IDR - Indonesian Rupiah - Rp</option>
    <option value="IRR">IRR - Iranian Rial - ﷼</option>
    <option value="IQD">IQD - Iraqi Dinar - د.ع</option>
    <option value="ILS">ILS - Israeli New Sheqel - ₪</option>
    <option value="ITL">ITL - Italian Lira - L,£</option>
    <option value="JMD">JMD - Jamaican Dollar - J$</option>
    <option value="JPY">JPY - Japanese Yen - ¥</option>
    <option value="JOD">JOD - Jordanian Dinar - ا.د</option>
    <option value="KZT">KZT - Kazakhstani Tenge - лв</option>
    <option value="KES">KES - Kenyan Shilling - KSh</option>
    <option value="KWD">KWD - Kuwaiti Dinar - ك.د</option>
    <option value="KGS">KGS - Kyrgystani Som - лв</option>
    <option value="LAK">LAK - Laotian Kip - ₭</option>
    <option value="LVL">LVL - Latvian Lats - Ls</option>
    <option value="LBP">LBP - Lebanese Pound - £</option>
    <option value="LSL">LSL - Lesotho Loti - L</option>
    <option value="LRD">LRD - Liberian Dollar - $</option>
    <option value="LYD">LYD - Libyan Dinar - د.ل</option>
    <option value="LTL">LTL - Lithuanian Litas - Lt</option>
    <option value="MOP">MOP - Macanese Pataca - $</option>
    <option value="MKD">MKD - Macedonian Denar - ден</option>
    <option value="MGA">MGA - Malagasy Ariary - Ar</option>
    <option value="MWK">MWK - Malawian Kwacha - MK</option>
    <option value="MYR">MYR - Malaysian Ringgit - RM</option>
    <option value="MVR">MVR - Maldivian Rufiyaa - Rf</option>
    <option value="MRO">MRO - Mauritanian Ouguiya - MRU</option>
    <option value="MUR">MUR - Mauritian Rupee - ₨</option>
    <option value="MXN">MXN - Mexican Peso - $</option>
    <option value="MDL">MDL - Moldovan Leu - L</option>
    <option value="MNT">MNT - Mongolian Tugrik - ₮</option>
    <option value="MAD">MAD - Moroccan Dirham - MAD</option>
    <option value="MZM">MZM - Mozambican Metical - MT</option>
    <option value="MMK">MMK - Myanmar Kyat - K</option>
    <option value="NAD">NAD - Namibian Dollar - $</option>
    <option value="NPR">NPR - Nepalese Rupee - ₨</option>
    <option value="ANG">ANG - Netherlands Antillean Guilder - ƒ</option>
    <option value="TWD">TWD - New Taiwan Dollar - $</option>
    <option value="NZD">NZD - New Zealand Dollar - $</option>
    <option value="NIO">NIO - Nicaraguan CÃ³rdoba - C$</option>
    <option value="NGN">NGN - Nigerian Naira - ₦</option>
    <option value="KPW">KPW - North Korean Won - ₩</option>
    <option value="NOK">NOK - Norwegian Krone - kr</option>
    <option value="OMR">OMR - Omani Rial - .ع.ر</option>
    <option value="PKR">PKR - Pakistani Rupee - ₨</option>
    <option value="PAB">PAB - Panamanian Balboa - B/.</option>
    <option value="PGK">PGK - Papua New Guinean Kina - K</option>
    <option value="PYG">PYG - Paraguayan Guarani - ₲</option>
    <option value="PEN">PEN - Peruvian Nuevo Sol - S/.</option>
    <option value="PHP">PHP - Philippine Peso - ₱</option>
    <option value="PLN">PLN - Polish Zloty - zł</option>
    <option value="QAR">QAR - Qatari Rial - ق.ر</option>
    <option value="RON">RON - Romanian Leu - lei</option>
    <option value="RUB">RUB - Russian Ruble - ₽</option>
    <option value="RWF">RWF - Rwandan Franc - FRw</option>
    <option value="SVC">SVC - Salvadoran ColÃ³n - ₡</option>
    <option value="WST">WST - Samoan Tala - SAT</option>
    <option value="SAR">SAR - Saudi Riyal - ﷼</option>
    <option value="RSD">RSD - Serbian Dinar - din</option>
    <option value="SCR">SCR - Seychellois Rupee - SRe</option>
    <option value="SLL">SLL - Sierra Leonean Leone - Le</option>
    <option value="SGD">SGD - Singapore Dollar - $</option>
    <option value="SKK">SKK - Slovak Koruna - Sk</option>
    <option value="SBD">SBD - Solomon Islands Dollar - Si$</option>
    <option value="SOS">SOS - Somali Shilling - Sh.so.</option>
    <option value="ZAR">ZAR - South African Rand - R</option>
    <option value="KRW">KRW - South Korean Won - ₩</option>
    <option value="XDR">XDR - Special Drawing Rights - SDR</option>
    <option value="LKR">LKR - Sri Lankan Rupee - Rs</option>
    <option value="SHP">SHP - St. Helena Pound - £</option>
    <option value="SDG">SDG - Sudanese Pound - .س.ج</option>
    <option value="SRD">SRD - Surinamese Dollar - $</option>
    <option value="SZL">SZL - Swazi Lilangeni - E</option>
    <option value="SEK">SEK - Swedish Krona - kr</option>
    <option value="CHF">CHF - Swiss Franc - CHf</option>
    <option value="SYP">SYP - Syrian Pound - LS</option>
    <option value="STD">STD - São Tomé and Príncipe Dobra - Db</option>
    <option value="TJS">TJS - Tajikistani Somoni - SM</option>
    <option value="TZS">TZS - Tanzanian Shilling - TSh</option>
    <option value="THB">THB - Thai Baht - ฿</option>
    <option value="TOP">TOP - Tongan pa'anga - $</option>
    <option value="TTD">TTD - Trinidad & Tobago Dollar - $</option>
    <option value="TND">TND - Tunisian Dinar - ت.د</option>
    <option value="TRY">TRY - Turkish Lira - ₺</option>
    <option value="TMT">TMT - Turkmenistani Manat - T</option>
    <option value="UGX">UGX - Ugandan Shilling - USh</option>
    <option value="UAH">UAH - Ukrainian Hryvnia - ₴</option>
    <option value="AED">AED - United Arab Emirates Dirham - إ.د</option>
    <option value="UYU">UYU - Uruguayan Peso - $</option>  
    <option value="UZS">UZS - Uzbekistan Som - лв</option>
    <option value="VUV">VUV - Vanuatu Vatu - VT</option>
    <option value="VEF">VEF - Venezuelan BolÃ­var - Bs</option>
    <option value="VND">VND - Vietnamese Dong - ₫</option>
    <option value="YER">YER - Yemeni Rial - ﷼</option>
    <option value="ZMK">ZMK - Zambian Kwacha - ZK</option>
</select>    
                            </div>
                            <div id="pageLoader">
                            </div>
                            </div>
                    
                  
                    



      


                                 <div class="form-group row">
                                    <label for="payment_terms" class="col-sm-4 col-form-label">Payment Terms<i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <select   name="terms" id="terms" class=" form-control"  required=""  placeholder='Payment Terms'>
                                         <option value="">Select Payment Terms</option>
                                        <option value="CAD">CAD</option>
                                        <option value="COD">COD</option>
                                        <option value="ADVANCE">ADVANCE</option>
                                        <option value="7DAYS">7 DAYS</option>
                                        <option value="15DAYS">15 DAYS</option>
                                        <option value="30DAYS">30 DAYS</option>
                                        <option value="45DAYS">45 DAYS</option>
                                        <option value="60DAYS">60 DAYS</option>
                                        <option value="75DAYS">75 DAYS</option>
                                        <option value="90DAYS">90 DAYS</option>
                                        <option value="180DAYS">180 DAYS</option>

                                        <?php 
                                            foreach($paymentterms_add as $cn){?>
                                                <option value="<?php echo $cn['payment_terms'];?>">  <?php echo $cn['payment_terms'];  ?></option>
                                           <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                  <a href="#" class="client-add-btn btn " aria-hidden="true" style="color:white;background-color:#38469f;"  data-toggle="modal" data-target="#payment_type_new" ><i class="fa fa-plus"></i></a>
                                </div>
                                   </div>
                               
                           
                            <!-- </div> -->






















                                  <!-- <div class="col-sm-6">  -->
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Attachments
                                    </label>
                                    <div class="col-sm-8">
                                       <input type="file" name="attachments" class="form-control">
                                    </div>
                                </div> 
                        
                                </div> 
                                </div>

                                            </div>
                  
                    </div>
    </form>
                </div>
            </div>
        <!-- </div> -->
       
                      
        <div class="modal fade" id="myModal1" >
    <div class="modal-dialog">
    

    
      <!-- Modal content-->
      <div class="modal-content" style="    margin-top: 190px;">
        <div class="modal-header"  style="color:white;background-color:#38469f;" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Vendor</h4>
        </div>
        <div class="modal-body" id="bodyModal1" style="font-weight:bold;text-align:center;">
          
          <h4></h4>
     
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>

  </div>
</div>
    </section>
</div>























<!-- Add new supplier end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
   
<!-- Add new customer end -->


<script type="text/javascript">
            var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
        $(document).ready(function(){
            $('#insert_supplier').submit(function (event) {
    var dataString = {
        dataString : $("#insert_supplier").serialize()
   };
   dataString[csrfName] = csrfHash;
    $.ajax({
        type:"POST",
        dataType:"json",
        url:"<?php echo base_url(); ?>Csupplier/insert_supplier",
        data:$("#insert_supplier").serialize(),
        success:function (states) {
            $("#supplier_id").html("");
             if (Object.keys(states).length > 0) {
                $("#supplier_id").append($('<option></option>').val(0).html('Select a Vendor'));
             }
             else {
                    $("#supplier_id").append($('<option></option>').val(0).html(''));
             }

           $.each(states, function (i, state) {
            $("#supplier_id").append($('<option></option>').val(state.supplier_id).html(state.supplier_name));
           });

       $('#add_vendor').modal('hide');
     
      $("#bodyModal1").html("New Vendor Added Successfully");
      
       $('#myModal1').modal('show');
  
      
     
       window.setTimeout(function(){
        $('#myModal1').modal('hide');
        $('.modal-backdrop').remove();
     window.location = "<?php echo base_url(); ?>Csupplier/manage_supplier";
 },2500);
    
        }
    });
    event.preventDefault();
});
});


</script>








<!------ add new Payment Type -->
<div class="modal fade" id="payment_type_new" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" style="color:white;background-color:#38469f;">
            <a href="#" class="close" data-dismiss="modal">&times;</a>
            <h4 class="modal-title">Add New Payment Terms</h4>
        </div>
        <div class="modal-body">
            <div id="customeMessage" class="alert hide"></div>
  <form id="add_pay_terms" method="post">
    <div class="panel-body">
<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">
        <div class="form-group row">
            <label for="customer_name" style="width: auto;" class="col-sm-3 col-form-label">New Payment Terms <i class="text-danger">*</i></label>
            <div class="col-sm-6">
                <input class="form-control" name ="new_payment_terms" id="new_payment_terms" type="text" placeholder="New Payment Terms"  required="" tabindex="1">
            </div>
        </div>
    </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" style="color:white;background-color:#38469f;" data-dismiss="modal">Close</a>
            <input type="submit" class="btn" style="color:white;background-color: #38469F;" value="Submit">
        </div>
                                </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


















<script type="text/javascript">
            var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';




$('#add_pay_terms').submit(function(e){
    e.preventDefault();
      var data = {
        new_payment_terms : $('#new_payment_terms').val()
      };
      data[csrfName] = csrfHash;
      $.ajax({
          type:'POST',
          data: data,
         dataType:"json",
          url:'<?php echo base_url();?>Cpurchase/add_payment_terms',
          success: function(data1, statut) {
             var $select = $('select#terms');
            $select.empty();
            console.log(data);
              for(var i = 0; i < data1.length; i++) {
        var option = $('<option/>').attr('value', data1[i].payment_terms).text(data1[i].payment_terms);
        $select.append(option); // append new options
    }
   $('#new_payment_terms').val('');


    
      $("#bodyModal1").html("Payment Terms Added Successfully");
      $('#payment_type').modal('hide');
      $('#terms').show();
       $('#myModal1').modal('show');
      window.setTimeout(function(){
        $('#payment_type_new').modal('hide');
       $('#myModal1').modal('hide');
        $('.modal-backdrop').remove();
    }, 2500);
     }
      });
  });





  </script>
  <style>
  .ui-selectmenu-text{
        display:none;
      }
      .ui-menu {
        display:none;
      }
      </style>

