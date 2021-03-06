$(document.body).infinite(100);
$(function(){
    var centerLen=$(".shopping_center").length;
    for(var i=0;i<centerLen;i++){
        var centerW=$(".shopping_center").eq(i).width();
        var center_contentW=centerW-90;
        $(".right_content").eq(i).css("width",center_contentW+'px');
    }
    //全选反选
    $("#allchecked").click(function(){
        if($(this).prop("checked")){
            $("input[type='checkbox']").prop("checked",true);
            $("#allchecked").html("");
        }else{
            $("input[type='checkbox']").prop("checked",false);
            $("#allchecked").html("");
        }
        addMoney();
    })


    //滑动删除
    // 获取所有行，对每一行设置监听
    var lines = $(".shopping_list");
    var len = lines.length;
    var lastX, lastXForMobile;

    // 用于记录被按下的对象
    var pressedObj;  // 当前左滑的对象
    var lastLeftObj; // 上一个左滑的对象

    // 用于记录按下的点
    var start;

    // 网页在移动端运行时的监听
    for (var i = 0; i < len; ++i) {
        lines[i].addEventListener('touchstart', function(e){
            lastXForMobile = e.changedTouches[0].pageX;
            pressedObj = this; // 记录被按下的对象

            // 记录开始按下时的点
            var touches = event.touches[0];
            start = {
                x: touches.pageX, // 横坐标
                y: touches.pageY  // 纵坐标
            };
        });

        lines[i].addEventListener('touchmove',function(e){
            // 计算划动过程中x和y的变化量
            var touches = event.touches[0];
            delta = {
                x: touches.pageX - start.x,
                y: touches.pageY - start.y
            };

            // 横向位移大于纵向位移，阻止纵向滚动
            if (Math.abs(delta.x) > Math.abs(delta.y)) {
                event.preventDefault();
            }
        });

        lines[i].addEventListener('touchend', function(e){
            if (lastLeftObj && pressedObj != lastLeftObj) { // 点击除当前左滑对象之外的任意其他位置
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
            }
            var diffX = e.changedTouches[0].pageX - lastXForMobile;
            if (diffX < -100) {
                $(pressedObj).find(".shopping_center").css("width","80%");
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","10%");
                // $(pressedObj).animate({marginLeft:"-132px"}, 500); // 左滑
                lastLeftObj && lastLeftObj != pressedObj &&
                $(pressedObj).find(".shopping_center").css("width","90%");
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","10%");
                    // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 已经左滑状态的按钮右滑
                lastLeftObj = pressedObj; // 记录上一个左滑的对象
            } else if (diffX > 100) {
              if (pressedObj == lastLeftObj) {
             $(pressedObj).find(".shopping_center").css("width","90%");
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","0");
                // $(pressedObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
              }
            }
        });
    }

    // 网页在PC浏览器中运行时的监听
    for (var i = 0; i < len; ++i) {
        $(lines[i]).bind('mousedown', function(e){
            lastX = e.clientX;
            pressedObj = this; // 记录被按下的对象
        });

        $(lines[i]).bind('mouseup', function(e){
            if (lastLeftObj && pressedObj != lastLeftObj) { // 点击除当前左滑对象之外的任意其他位置
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
            }
            var diffX = e.clientX - lastX;
            if (diffX < -100) {
                $(pressedObj).find(".shopping_center").css("width","80%");
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","10%");
                // $(pressedObj).animate({marginLeft:"-132px"}, 500); // 左滑
                lastLeftObj && lastLeftObj != pressedObj &&
                $(pressedObj).find(".shopping_center").css("width","90%");
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","10%");
                    // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 已经左滑状态的按钮右滑
                lastLeftObj = pressedObj; // 记录上一个左滑的对象
            } else if (diffX > 100) {
              if (pressedObj == lastLeftObj) {
                var centerW=$(pressedObj).find(".shopping_center").width();
                $(pressedObj).find(".right_content").css("width",centerW-90+'px');
                $(pressedObj).find(".shopping_right").css("width","0");
                // $(pressedObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
              }
            }
        });
    }
})
function addMoney(){
    var ids = document.getElementsByName("ids");
    var flag = false ;
    var all_money=0;
    for(var i=0;i<ids.length;i++){
        if(ids[i].checked){
            flag = true ;
            //var money=$(ids[i]);
          var money=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_money").html();
          var number=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_number").html();
          var zhengshu=Math.round(money*100);
          var each_product=zhengshu*parseInt(number);
          all_money+=each_product;
        }
    }
    $('.all_money').html(all_money/100);
}
addMoney();
$(".shopping_left input").click(function(){
    addMoney();
})

$(function(){
    $('#payForCar').click(function(){
        var spid = document.getElementsByName("ids");
        var spid_val = '';
        for(k in spid) {
            if(spid[k].checked){
                spid_val+=spid[k].value+',';
            }
                //spid_val.push(spid[k].value) ;  加入数组的方法
        }
        //去掉最后一个逗号
        spid_val = spid_val.substr(0, spid_val.length - 1);
        if(spid_val == ''){
            $.toast('未选择任何商品','forbidden');
            return false;
        }else{
           $(this).attr('href','/goods/confirmOrder?shopCarId='+spid_val)
        }
    })

    //删除
    $('.shopping_right').click(function(){
        //购物车id
        var obj= $(this);
        var carId = $(this).attr('avg')
        $.ajax({
            url:'/shopCart/delCar',
            data:'carId='+carId,
            dataType:'json',
            type:'post',
            success:function(re){
                if(re.status==true){
                    obj.parent().css('display','none')
                }else{
                    $.toast('稍后再试','cancel');
                }
            }
        })
    })
})