class co
{
	protected int x,y;
	public co()
	{
		x=10;
		y=20;
	}
	public co(int X,int Y)
	{
		x=++X;
		y=Y++;
	}
}
public class ma
{
public static void main(String args[])
{
	co c=new co();
System.out.printf("x ="+c.x+",y= "+c.y);
}}