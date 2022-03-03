/*
import java.io.*;
import java.util.Scanner;
import java.util.List;
Scanner sc = new Scanner(new File("signin.csv"));
sc.useDelimiter(",");
List
*/
function clickHandler() {
  var a = document.querySelector('#inputEmail').value;
  var b = document.querySelector('#inputPassword').value;
  //if ([a,b] in signin.csv){
// / && b=="hello"
  if(a=="try@gmail.com"){
    location.href="admin.html";
  }
  else{
    alert("Incorrect username or password.");
  }
}
