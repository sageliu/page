<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>WFPHP在线订单系统2015【普通版】官方正式版（web） - 样式01</title>
<script type="text/javascript" src="js/wfdq.js"></script>
<link href="style/wfstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
/**
  ************************************************************************
  WFPHP订单系统版权归WENFEI所有，凡是破解此系统者都会死全家，非常灵验。
  ************************************************************************
  WFPHP订单系统官方网站：http://www.wforder.com/   （盗版盗卖者死全家）
  WFPHP订单系统官方店铺：http://889889.taobao.com/ （破解系统者死全家）
  ************************************************************************
  郑重警告：凡是破解此系统者出门就被车撞死，盗卖此系统者三日内必死全家。
  ************************************************************************ 
  盗版模仿本页面样式者必死全家（包括但不限于CSS代码、JS代码、html代码）。
  ************************************************************************
 */
#wforder{width:950px;background:#FFF;}
.wfwarp{border:5px solid #0C0;}
.wftitlea,.wftitleb{border-bottom:1px solid #0C0;}
.wfrxian{border-right:1px solid #0C0;}
.wfsubbox input{background:#0C0;}
</style>
</head>
<body>
<div id="wforder">
<div class="wfwarp">
    <div class="wforderl">
        <div class="wfforml" id="wfforml">
            <div class="wfrxian">
                <form id="wfform" name="wfform" action="../wforder.php?wfrnma=a4a6c0982a43eb197aa5" method="post" onsubmit="return postcheck()" target="_parent">
                <input type="hidden" name="WFDDURL" id="WFDDURL" value="">
                <input type="hidden" name="wfrnmb" value="9b867b58a940944d9189">
                <input type="hidden" name="wfmun" value="1">
                <input type="hidden" name="wfprice" value="698">
                <div class="wftitlea"></div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>选择产品</label>
                    <div class="wfdxbox red">
                        <input type="radio" name="wfproduct" id="wfproduct1" value="珥脉玄通 一周期 3盒（30天量）包邮  380元" alt="380" onclick="pricea()"><label for="wfproduct1">珥脉玄通 一周期 3盒（30天量）包邮  380元</label><br>
                        <input type="radio" checked name="wfproduct" id="wfproduct2" value="珥脉玄通 两周期 6盒（60天量）包邮  740元 " alt="740" onclick="pricea()"><label for="wfproduct2">珥脉玄通 两周期 6盒（60天量）包邮  740元  <img src="images/hot.gif"></label><br>
                        <input type="radio" name="wfproduct" id="wfproduct3" value="珥脉玄通 三周期 9盒（90天量）包邮  1100元 " alt="1100" onclick="pricea()"><label for="wfproduct3">珥脉玄通 三周期 9盒（90天量）包邮  1100元 </label><br>
                        <input type="radio" name="wfproduct" id="wfproduct4" value="珥脉玄通 四周期 12盒（120天量）包邮  1460元" alt="1460" onclick="pricea()"><label for="wfproduct4">珥脉玄通 四周期 12盒（120天量）包邮  1460元</label><br>
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>收货人姓名</label>
                    <div class="wftextbox">
                        <input type="text" name="wfname">
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>手机号码</label>
                    <div class="wftextbox">
                        <input type="text" name="wfmob">
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>所在地区</label>
                    <div class="wfxlbox">
                        <select name="wfprovince" class="wfdqxl"></select><select name="wfcity" class="wfdqxl"></select><select name="wfarea" class="wfdqxl"></select>
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>详细地址</label>
                    <div class="wftextbox">
                        <input type="text" name="wfaddress">
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx"><em>*</em>付款方式</label>
                    <div class="wfdxbox">
                        <input type="radio" checked="checked" name="wfpay" id="wfpay1" value="cod" onclick="opay();return changeItem(0);"><label for="wfpay1"><img src="images/fka.gif"></label>
                        <input type="radio" name="wfpay" id="wfpay2" value="alipay" onclick="opay2();return changeItem(1);"><label for="wfpay2"><img src="images/fkb.gif"></label>
                        <input type="radio" name="wfpay" id="wfpay3" value="bank" onclick="opay();return changeItem(2);"><label for="wfpay3"><img src="images/fkc.gif"></label>
                    </div>
                </div>
                <div class="wfbdbox">
                    <div id="paydiv0" class="wfpayps">
                        <p><img src="images/fkat.gif"></p>
                    </div>
                    <div id="paydiv1" class="wfpayps" style="display:none;">					
                        <p><img src="images/fkbt.gif"></p>							
                    </div>
                    <div id="paydiv2" class="wfpayps" style="display:none;">
                        <p><img src="images/fkct.gif"></p>
                    </div>
                </div>
                <div class="wfbdbox">
                    <label class="wfbdxx">留言</label>
                    <div class="wftext2box">
                        <textarea name="wfguest" onfocus="if(value=='请尽快安排发货，送货之前手机联系，谢谢！'){value=''}" onblur="if (value ==''){value='请尽快安排发货，送货之前手机联系，谢谢！'}">请尽快安排发货，送货之前手机联系，谢谢！</textarea>
                    </div>
                </div>
                                <div class="wfsubbox">
                    <input type="submit" name="wfsubmit" value="立即提交订单">
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="wforderr">
        <div class="wfformr">
            <div class="wftitleb"></div>
            <div id="wffahuo" style="overflow:hidden;">
                <div id="wffahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/wffh.js"></script></div>
                <div id="wffahuo2"></div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
</div>
<script type="text/javascript" src="js/wfbd.js"></script>
<script type="text/javascript" src="js/wfgd.js"></script>
</body>
</html>