// function IsEven()
// {
//     var number = document.getElementById("TextBox1").value;
//    if(number % 2 == 0 )
//     {
//         alert(number +" "+ "is even number");
//     }
//     else
//         {
//         alert(number + " "+"is odd number");
//
//     }
// };
// function ResultAdd(){
//     var firstnumber = document.getElementById("first").value;
//
//     if (firstnumber == ""){
//         alert ("First Name Is Required");
//         return;
//     }
//     firstnumber = parseFloat(firstnumber);
//
//     if (isNaN(firstnumber)){
//         alert("Please Enter A Valid First Number");
//         return;
//     }
//
//     var secondnumber = document.getElementById("second").value;
//
//     if (secondnumber == ""){
//         alert ("Second Name Is Required");
//         return;
//     }
//     secondnumber = parseFloat(secondnumber);
//
//     if (isNaN(secondnumber)){
//         alert("Please Enter A Valid  Second Number");
//         return;
//     }
//
//    document.getElementById("result").value =  firstnumber + secondnumber;
//
// };
//
//  var string1 = "first string";
//  var string2 = "second string";
//
// var result = string1.concat("" , string2);
//
// alert (result);


var sum = function addNumbers(firstNumber , secondNumber){
    var result = firstNumber + secondNumber;
    return result;

}
var result = sum(20 , 20);
document.write(result);
document.write("</br>");
var greeting = "hello from global";
function helloWorld()
{
    var greeting = "hello from local";
    greeting +=  "$$$$";
    document.write(greeting);

}
greeting += "!!!";
   helloWorld();
document.write("</br>");
document.write(greeting);

function addNumbers(firstNumber , secondNumber){

}
var date = new Date();
var fullyear = date.getMonth();
document.write(date);
function formatDate(){
    var getmonth = date.getMonth();
    getmonth = getmonth + 1;
    var getdate = date.getDate();
    var fullyear = date.getFullYear();
    return getmonth +"/"+ getdate + "/"+fullyear;
}
document.write(formatDate(new Date()));

document.write("</br>");

function getClick(first ,last)
{
    var result = first+last;
    return result;

}
var sum = getClick(1, 2);
document.write(sum);