/*	Program No : 40. Type Conversion : userdefine to userdefine	*/
/*	Write a C++ program to convert a distance from FPS to CGS and vice-versa	*/
#include<iostream>
using namespace std;
class distanceFPS;
class distanceCGS
{
	int mt,cm;
	public:
		distanceCGS()	// default Constructor
		{
			mt=cm=0;
		}
		distanceCGS(int m,int c)	// parmetrized constructor
		{
			mt=m;
			cm=c;
		}
		int getvalue()		// getvalue function
		{
			return mt*100+cm;
		}
		void putdata()		// putdata function
		{
			cout<<mt<<" m "<<cm<<" cm "<<endl;
		}
		operator distanceFPS();
		
};

class distanceFPS
{
	int ft,inch;
	public:
		distanceFPS()	// default constructor
		{
			ft=inch=0;
		}
		distanceFPS(int f,int i)	// parameterized constructor
		{
			ft=f;
			inch=i;
		}
		int getvalue()	// getvalue function
		{
			return ft*12+inch;
		}
		void putdata()	// putdata function
		{
			cout<<ft<<"\'"<<inch<<"\""<<endl;
		}
		void setvalue(int f,int i)
		{
			ft=f;
			inch=i;
		}
		operator distanceCGS()
		{
			int t=ft*12+inch;
			t=t*2.54;
			int m=t/100;
			int c=t%100;
			distanceCGS temp(m,c);
			return temp;
		}
};
distanceCGS::operator distanceFPS()
		{
			int t=mt*100+cm;
			t=t*2.54;
			int f=t/12;
			int i=t%12;
			distanceFPS temp(f,i);
			//temp.setvalue(f,i);
			return temp;
		}
int main()
{
	distanceFPS a(5,4);
	distanceCGS b;
	a.putdata();
	b=a;
	b.putdata();
	a=b;
	a.putdata();
	return 0;
}
