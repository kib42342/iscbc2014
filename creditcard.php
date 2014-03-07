<?php
// 功能名稱：
// 功能說明：
// 
// KEYWORD：



?>


<!-- 測試URL-->
  <!--form id="form1" name="form1" method="post" action="https://testepos.chinatrust.com.tw/auth/SSLAuthUI.jsp"//-->
<!-- 正式URL-->
   <form id="form1" name="form1" method="post" action="https://epos.chinatrust.com.tw/auth/SSLAuthUI.jsp">                  
 
     <div align="center">       <p><span class="style12">Please review the information before submitting. </span></p>
       <p><span class="style12">There is no refund of the registration fee once this choice is made.</span></p>
       <input type="button" name="Submit2" value="Back" onclick="history.go(-1);"/> 
       <input type="submit" name="Submit" id="Submit" value="Payment" onmouseup="hidden1()"/>
<?php /*
<!-- 測試特店資料 銀行所授與的特店代號,純數字,固定 13 碼-->
       <input name="MerchantID" type="hidden" id="MerchantID" value="8220276805152" />
<!-- 測試特店資料 銀行所授與的終端機代號,純數字,固定 8 碼-->
       <input name="TerminalID" type="hidden" id="TerminalID" value="90000102" />
*/?>
<!-- 特店資料 銀行所授與的特店代號,純數字,固定 13 碼-->
       <input name="MerchantID" type="hidden" id="MerchantID" value="8229130000199" />
<!-- 特店資料 銀行所授與的終端機代號,純數字,固定 8 碼-->
       <input name="TerminalID" type="hidden" id="TerminalID" value="99800440" />
<!--訂單編號 -->
       <input name="lidm" type="hidden" id="lidm" value="test_ISCPC2014_00000001" />
       <input name="merID" type="hidden" id="merID" value="209" />

<!-- 刷卡頁特定語系(1-繁體中文，2-簡體中文，3-英文，5-客制化頁面 -->
       <input name="customize" type="hidden" id="customize" value="3" />
  <?php /*     <input name="merID" type="hidden" id="merID" value="169" />*/?>
<!--訂單金額 -->
       <input name="purchAmt" type="hidden" id="purchAmt" value="1" />
<!--交易方式 0-一般交易 1-分期交易 2-紅利交易折抵一般交易 4-紅利折抵分期交易 -->
       <input name="txType" type="hidden" id="txType" value="0" />
<!--授權成功是否轉入請款 0-不自動請款 1-自動轉入請款 -->
       <input name="AutoCap" type="hidden" id="AutoCap" value="1" />
<!--授權成功回歸頁面-->
       <input name="AuthResURL" type="hidden" id="AuthResURL" value="http://localhost:8080/checkout_success.php" />
       </div>
   </form>

