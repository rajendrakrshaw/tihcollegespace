// @author : RONIT
/*	
	Define a class Employee containing emp_id and name. 
Define a class Quailification containing highest qualification in general education and highest professional qualification.
Define a class Officer inherited from both Employee and Qualification and also containing additional information grade of the officer.
Write a C++ program which will create a object of Officer, store information into it and display the information.
*/
#include<iostream>
#include<string.h>
using namespace std;
class Employee{
	protected:
		int emp_id;
		char name[20];
	public:
		void getdata(){
			cout<<"\n Enter Employee Id : ";
			cin>>emp_id;
			cout<<"\n Enter Employee Name : ";
			cin>>name;
		}
		void putdata(){
			cout<<"\n Employee Id : "<<emp_id;
			cout<<"\n Employee Name : "<<name;
		}
};
class Qualification{
	protected:
		char highest_qualification[20],highest_professional[20];
	public:
		void getdata(){
			cout<<"\n Enter Highest Qualification in general education : ";
			cin>>highest_qualification;
			cout<<"\n Enter Highest Professional Qualification : ";
			cin>>highest_professional;
		}
		void putdata(){
			cout<<"\n Highest Qualification in general education : "<<highest_qualification;
			cout<<"\n Highest Professional Qualification : "<<highest_professional;
		}
};
class Officer : public Employee, public Qualification{
	protected:
		char grade;
	public:
		void getdata(){
			Employee::getdata();
			Qualification::getdata();
			cout<<"\n Enter Grade : ";
			cin>>grade;
			grade=toupper(grade);
		}
		void putdata(){
			Employee::putdata();
			Qualification::putdata();
			cout<<"\n Grade : "<<grade;
		}
};

int main()
{
	Officer obj;
	obj.getdata();
	obj.putdata();

	return 0;
}



