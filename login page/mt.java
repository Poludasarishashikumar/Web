class mt
{
public static void main(string args[])
{
int arr[]={5,6,9,12,15,29};
int l=0,h=5,el=6;
public static int ser(int arr[],int l,int h,int el)
{
if(l<=h)
{
int mid=(l+h)/2;
if(arr[mid]==el)
return mid;
if(arr[mid]<el)
return ser(arr,mid+1,h,el);
rerturn ser(arr,l,mid-1,el);
}
return -1;}
}
}