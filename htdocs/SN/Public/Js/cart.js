$(".ck_all").click(function(){
    $(".ck").prop("checked",$(this).prop("checked"));
    count_all();
})
$(".ck").click(function(){
    count_all();
})
function count_all(){
   var all_num=0;
   var all_money = 0;
   $(".num").each(function(){
        var i = $(".num").index($(this));
        if($(".ck").eq(i).prop("checked")){
           all_num+=Number($(this).val());
           all_money+=Number($(".money_this").eq(i).html());
               console.log($(".money_this").eq(i).html());
        }
   })
   $("#tot_num").html(all_num);
   $("#tot_money").html(all_money.toFixed(2));
   $(".ck_all").prop("checked",$(".ck").length == $(".ck:checked").length);
}
$(".setNum").click(function(){
     var num = $(this).siblings(".num").val();
     if($(this).val()=="+"){
          num++;
     }else{
          num--;
     }
     num = num<=1 ? 1:num;
     $(this).siblings(".num").val(num);
     var price = $(this).parent().parent().parent().parent().siblings().find(".price").html();
     $(this).parent().parent().siblings().find(".money_this").html((num*price).toFixed(2));
     $(this).parent().parent().siblings().find(".ck").prop("checked",true);
     count_all();
})