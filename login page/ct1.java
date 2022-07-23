import java.util.*;
import java.lang.*;
import java.io.*;
abstract class Main
{
public int temp;
Main()
{
temp=120;
}
abstract public void set();
abstract final public void get();
}
class ct1 extends Main
{
public void set(int a)
{
this.temp=temp;
}
final public void get()
{
System.out.println(temp);
}
public static void main(String args[])
{
ct1 obj=new ct1();
obj.set(250);
obj.get();
}
}