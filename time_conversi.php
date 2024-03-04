<?php
/*/
Given a time in -hour AM/PM format, convert it to military (24-hour) time.

Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
- 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.

Example


Return '12:01:00'.


Return '00:01:00'.

Function Description

Complete the timeConversion function in the editor below. It should return a new string representing the input time in 24 hour format.

timeConversion has the following parameter(s):

string s: a time in  hour format
Returns

string: the time in  hour format
Input Format

A single string  that represents a time in -hour clock format (i.e.:  or ).

Constraints

All input times are valid
Sample Input 0

07:05:45PM
Sample Output 0

19:05:45
/*/

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */
$s = '07:05:45PM';
function timeConversion($s){
    // Write your code here
    return date("H:i:s", strtotime($s)); // date() berfungsi untuk format waktu atau tanggal
                                        // Fungsi strtotime() mem-parsing datetime tekstual 
                                        // bahasa Inggris menjadi stempel waktu Unix (jumlah detik sejak 1 Januari 1970 00:00:00 GMT).

}

$timeperiod=strrchr($s,"PM"); // The strchr(string,search,before_search) function searches for the first occurrence of a string inside another string.

if($timeperiod==="PM")
{
    $time=explode(":",$s);
    if($time[0]<12)
    {
        $time[0]+=12;
    }

    $time[2]=trim($time[2],"PM");
    $time=implode(":",$time);
    return $time;
}

else
{

   $time=explode(":",$s);

     if($time[0]==12)
   {
       $time[0]="00";
   } 

    $time[2]=trim($time[2],"AM");
    $time=implode(":",$time);
    return $time;
}

?>