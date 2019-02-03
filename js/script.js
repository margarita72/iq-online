
$( function() {
    $( "#datepicker" ).datepicker();
} );
function rangeone(){

    var
        val = $('.rangeone').val();
        val = (val*100)/3000000;
    $('.rangeone').css({'background':'-webkit-linear-gradient(left ,#c5ff95 0%,#c5ff95 '+val+'%,#fff '+val+'%, #fff 100%)'});
    var r2 = document.getElementById('range_one');
    var r = (3000000*val)/100;
    r2.value = r;


}

function rangetwo(){
    var
        val = $('.rangetwo').val();
    val = (val*100)/3000000;
    $('.rangetwo').css({'background':'-webkit-linear-gradient(left ,#c5ff95 0%,#c5ff95 '+val+'%,#fff '+val+'%, #fff 100%)'});
    var r2 = document.getElementById('range_two');
    var r = (3000000*val)/100;
    r2.value = r;
    //alert(r);
}
function active() {

    //document.getElementById('range_two').disabled=false;
    document.getElementById('range_two').disabled=false;
    document.getElementById('range_two_range').disabled=false;
}
function inactive() {
    document.getElementById('range_two').disabled=true;
    document.getElementById('range_two_range').disabled=true;

}
// $(document).ready(function () {
//     $('#submit').click(function () {
//         $("#messageShow").hide();
//         var $data = $("#data").val();
//         var $deposit_amount = $("#deposit_amount").val();
//         var time_deposit = $("#time_deposit").val();
//         var replenishment = $("#replenishment").val();
//         var refill = $("#refill").val();
//
//         // alert('fgf');
//     });
//
// });