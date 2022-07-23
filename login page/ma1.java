
class ma1
{
public static void main(String args[])
{
	List<String> li=new ArrayList<>();
	li.add("i");
	li.add("java");
	Iterator<Object> iter=li.iterator();
	while(iter.hasNext())
System.out.print(iter.next().toString()+" ");
System.out.println();
}}