<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>学习问答</title>
</head>
<body>
    <div class="contain-8">
        <div class="aswer-img"><img src="/shiyanjijian/Public/images/StudyAnswer/know.png" alt=""></div>
        <div class="one" id="one">
            <h4>1、被审查人涉嫌犯罪的，执纪审查部门应当在通知司法机关之日起（   ）内，完成移送工作。</h4>
            <div>
                <form role="form">
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_A" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_A" class="select-size">A.3个工作日</label>
                    </div>
    
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_B" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_B" class="select-size">B.2个工作日</label>
                    </div>
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_C" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_C" class="select-size">C.1个工作日</label>
                    </div>
                    <button type="submit" class="btn btn-default" id="submit-answer">下一题</button>
                </form>
            </div>
        </div>

        <!-- <div class="one showclose" id="two">
            <h4>2、执行党纪处分决定的机关或者受处分党员所在单位，应当在 （  ） 内将处分决定的执行情况向作出或者批准处分决定的机关报告。</h4>
            <div>
                <form role="form">
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_A" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_A" class="select-size">A.三个月</label>
                    </div>
    
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_B" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_B" class="select-size">B.六个月</label>
                    </div>
                    <div class="label-left">
                        <input type="radio" name="q1" id="q1_C" value="B" style="margin: 0 2%; width: 1.0em; height: 1.0em; overflow: hidden;">
                        <label for="q1_C" class="select-size">C.九个月</label>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div> -->
    </div>
</body>
<style>
.contain-8{
    min-width: 100%;
    background-color: #fdb1a1;
    padding-bottom: 40px;
    min-height: 100%;
}
.contain-8 .aswer-img img{
    min-width: 100%;
}
.contain-8 .one h4{
    text-align: left;
    line-height: 38px;
}
.contain-8 .one{
    text-align: center;
    margin: 0 auto;
    width: 80%;
    margin-top: 10%;
}
.label-left{
    text-align: left;
}
.contain-8 .select-size{
    line-height: 38px;
    font-size: 16px;
    color: #111;
    font-weight: 100;
}
.contain-8 button{
    margin-top: 30px;
    color: #fff;
    background-color: #b10018;
    border: none;
}
.contain-8 .btn{
    padding-left: 20px;
    padding-right: 20px;
}
.showclose{
    display: none;
}
</style>
<script>


$('#submit-answer').click(
    function(){
        $("#one").addClass('showclose');
        // $('#two').removeClass('showclose');
    }
)


</script>
<!-- <script type="text/javascript" src="/shiyanjijian/Public/js/study.js"></script> -->
</html>