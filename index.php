<?php session_start() ?>
<?php
require_once("link.php");
?>
<?php if (isset($_SESSION["logged_in"])) : ?>
    <div class="container-fluid">
        <p class="text-right">Hello, <?php echo $_SESSION["name"]; ?> <a class="fas fa-sign-out-alt" href="logout.php"></a></p>
    </div>
    <div class="container-fluid">
        <p class="text-lg-left">ကျောင်းခေါ်ချိန်၇၅%မပြည့်ပါကစာမေးပွဲဖြေဆိုခွင့်ပြုမည်မဟုတ်။</p>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-fluid" src="img/img1.jpg">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <input type="button" class="btn peach-gradient" value="ကျောင်းခေါ်ချိန်နဲ့တွက်မယ်" onClick="showHideDiv('divMsg')">
                <input type="button" class="btn blue-gradient" value="ကျောင်းတက်ရက်နဲ့တွက်မယ်" onClick="showHideDiv('divMsg1')">
                <input type="button" class="btn purple-gradient" value="ကျောင်းပျက်ချိန်နဲ့တွက်မယ်" onClick="showHideDiv('divMsg2')">
            </div>
        </div>
    </div>
    <form id="form" method="POST" action="cal.php">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div id="divMsg">
                        <input class="form-control col-sm-auto" type="number" id="txt" placeholder="ကျောင်းခေါ်ချိန်ထည့်ပါ" name="percent">
                        <button type="button" class="btn aqua-gradient" onclick="cal_per()">တွက်မယ်</button>
                        <button type="submit" class="btn aqua-gradient" onclick="cal_per()">သိမ်းမယ်</button>
                        <input class="form-control col-sm-auto" type="text" id="result" placeholder="Result will show here" name="result" readonly>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="divMsg1">
                        <input class="form-control col-sm-auto" type="number" id="txt1" placeholder="ကျောင်းတက်ရက်ထည့်ပါ" name="day">
                        <button type="button" class="btn aqua-gradient" onclick="cal_day()">တွက်မယ်</button>
                        <button type="submit" class="btn aqua-gradient" onclick="cal_day()" name="day_result">သိမ်းမယ်</button>
                        <input class="form-control col-sm-auto" type="text" id="result1" placeholder="Result will show here" name="day_result" readonly>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="divMsg2">
                        <input class="form-control col-sm-auto" type="number" id="txt2" placeholder="ကျောင်းပျက်သောအချိန်ထည့်ပါ" name="absent">
                        <button type="button" class="btn aqua-gradient" onclick="cal_time()">တွက်မယ်</button>
                        <button type="submit" class="btn aqua-gradient" onclick="cal_time()" >သိမ်းမယ်</button>
                        <input class="form-control mb-auto" type="text" id="result2" placeholder="Result will show here" name="absent_result" readonly>
                    </div>
                </div>
                <div class="col-sm-12">
                    <input type="button" class="btn btn-danger" value="Reset" onclick="reset()">
                </div>
            </div>
        </div>
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto">
                <p class="text-justify">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ကျောင်းခေါ်ချိန်ကို ၀မှ၁၀၀ အတွင်းရိုက်ထည့်ပေးပါ</li>
                        <li class="list-group-item">ကျောင်းတက်ချိန်ကို ၀မှ၂၂ အတွင်းရိုက်ထည့်ပေးပါ</li>
                        <li class="list-group-item">ကျောင်းတက်ချိန်ကို ၀မှ၁၇၆ အတွင်းရိုက်ထည့်ပေးပါ</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>